<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use Livewire\Component;
use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\ServiceCategory;
use App\Services\App\BookingOperationsService;
use Auth;
use Carbon\Carbon;

class CancelBooking extends Component
{
    public $showForm;
    protected $listeners = ['getBookingData'];
    public $serviceTypes = [
        '1' => ['class' => 'inperson-rate', 'postfix' => '', 'title' => 'In-Person'],
        '2' => ['class' => 'virtual-rate', 'postfix' => '_v', 'title' => 'Virtual'],
        '4' => ['class' => 'phone-rate', 'postfix' => '_p', 'title' => 'Phone'],
        '5' => ['class' => 'teleconference-rate', 'postfix' => '_t', 'title' => 'Teleconference'],
    ];
    public $booking, $override_charges = '', $unbillable = false, $charges, $setting = ['type' => "only_this_booking"];

    public function render()
    {
        return view('livewire.app.common.panels.booking-details.cancel-booking');
    }

    public function mount()
    {
        $this->booking = new Booking();
        $this->setting['type'] = "only_this_booking";
    }

    

    public function getBookingData($bookingId)
    {
        $this->booking = BookingOperationsService::getBookingDetails($bookingId, $this->serviceTypes, 'cancellation', 'cancellation_hour1');
        if ($this->booking->status == 3)
            $this->unbillable = 3;

        if (!is_null($this->booking->payment->cancellation_charges)) {
            $this->override_charges = $this->charges = number_format($this->booking->payment->cancellation_charges,2);
        }
        $this->setting['type'] = "only_this_booking";
        $this->setting['reschedule_until'] = null;
        $this->resetValidation();


    }
    public function updateBillable()
    {
        if ($this->override_charges > 0) {
            $this->booking->status = 4;
            $this->unbillable = false;
        } else {
            $this->unbillable = true;
            $this->booking->status = 3;
        }
    }
    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
    public function rules()
    {
        $rules = [
            'booking.cancellation_notes' => 'nullable',
            'booking.cancel_provider_payment' => 'nullable',


        ];
        if($this->setting['type']== 'bookings_until')
            $rules['setting.reschedule_until']= 'required|date';
        return $rules;
    }
    public function cancelBooking()
    {
        $this->validate();
        if ($this->booking->is_recurring && $this->setting['type'] != "only_this_booking") {
            // we need 
            if ($this->booking->parent_id == 0)
                $parent_id = $this->booking->id;
            else
                $parent_id = $this->booking->parent_id;
            $start_date          = Carbon::parse($this->booking->booking_start_at)->toDateString();

            if ($this->setting['type'] == "bookings_until") {
                // dd('fetch all up-until bookings');
                $end_date = Carbon::parse($this->setting['reschedule_until'])->addDay()->toDateString();
                // dd($end_date)
                $all_bookings = Booking::where('parent_id', $parent_id)
					->whereRaw("booking_start_at  Between  DATE('$start_date') AND DATE('$end_date')")

                // ->whereRaw("DATE(booking_start_at) >= '$start_date' AND DATE(booking_start_at) <= '$end_date'")
                ->get();

            } else {
                // fetch all subsequent bookings with parent_id == booking_id

                $all_bookings = Booking::where('parent_id', $parent_id)->whereRaw("DATE(booking_start_at) >= '$start_date'")->get();
            }
        }
        $all_bookings[] = $this->booking;



        if ($this->override_charges != '' && is_numeric($this->override_charges)) {
            $charges = (float)$this->override_charges;
            // $this->booking->payment->cancellation_charges=(float)$this->override_charges;
        } else {
            //  $this->booking->payment->cancellation_charges=(float)$this->booking->charges;
        }
        if ($this->unbillable == 3) {
            $status = 3;
            $cancellation_charges = 0;
            $billingStatus = "unbillable";
        } else {
            $status = 4;
            $billingStatus = "billable";
        }

        foreach ($all_bookings as $curr_booking) {
            $curr_booking->payment->cancellation_charges = $charges;
            $curr_booking->status = $status;
            if (isset($cancellation_charges))
                $curr_booking->payment->cancellation_charges = $cancellation_charges;


                BookingOperationsService::cancelBooking($curr_booking);
            $message = "Booking '". $curr_booking->booking_number . "' cancelled by " . Auth::user()->name . " as " . $billingStatus;
            if ($curr_booking->cancellation_notes) {
                $message .= ' (Notes: ' . $curr_booking->cancellation_notes . ")";
            }
            callLogs($curr_booking->id, "Booking", "Cancelled", $message);
        }
        $this->emit('showConfirmation', 'Booking status updated successfully');
        $this->dispatchBrowserEvent('close-cancel');
    }
}
