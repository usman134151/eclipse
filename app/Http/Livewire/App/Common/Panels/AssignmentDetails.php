<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingCustomizeData;
use App\Models\Tenant\BookingInvitationProvider;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\Specialization;
use App\Models\Tenant\User;
use App\Services\App\UserService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class AssignmentDetails extends Component
{
    public $showForm, $booking, $data = [],$bookingNumber, $providerPanelType,$co_counter, $checkout_booking_id=0,$checkin_booking_id = 0,$ci_counter = 0,$selectedProvider, $booking_service_id, $isCalendar=false;
    protected $listeners = ['showList' => 'resetForm','setBookingId', 'openProviderCheckIn'=>'showCheckInPanel', 'openProviderCheckOut' => 'showCheckOutPanel'];
    public $booking_id;
    public function render()
    {
        return view('livewire.app.common.panels.assignment-details');
    }

    public function setBookingId($booking_id){
        $this->booking = Booking::where('id', $booking_id)->first();
        $this->isCalendar =true;
        $this->fetchData();
    }
    public function mount($booking_id)
    {
        // dd($booking_id);
        $this->booking = Booking::where('id', $booking_id)->first();
        $this->bookingNumber=$this->booking->booking_number;
        $this->booking_id = $booking_id ; // for add-documents panel
        $this->fetchData();
    }

    function fetchData()
    {
        // show services for which the provider has either been invited or assigned
        $invited = BookingInvitationProvider::where(['booking_invitation_providers.booking_id' => $this->booking->id, 'provider_id' => Auth::id()])
            ->join('booking_invitations', 'invitation_id', 'booking_invitations.id')->select('service_id')->get()->toArray();

        $assigned = BookingProvider::where(['booking_providers.booking_id' => $this->booking->id, 'provider_id' => Auth::id()])
            ->join('booking_services', 'booking_services.id', 'booking_service_id')->select('services')->get()->toArray();

        // seting booking cancellation status
        $this->data['isCancelled'] = $this->booking->status > 2 ? true : false;
        // fetch all services for booking 
        $this->data['booking_services'] = BookingServices::where('booking_id', $this->booking->id)
            ->whereIn('services', array_merge($invited, $assigned))
            ->join('service_categories', 'booking_services.services', 'service_categories.id')
            ->join('accommodations', 'accommodations.id', 'service_categories.accommodations_id')
            ->with('serviceConsumerUser')
            ->get([
                'booking_services.id', 'booking_services.service_types', 'booking_services.attendees',
                'booking_services.service_consumer', 'booking_services.start_time',
                'booking_services.end_time',
                'booking_services.meeting_link', 'booking_services.meetings',
                'booking_services.attendees_manual', 'booking_services.service_consumer_manual', 'is_manual_consumer', 'is_manual_attendees',
                'booking_services.attendees', 'booking_services.service_consumer', 'booking_services.specialization', 'booking_services.meeting_phone',
                'booking_services.meeting_passcode', 'booking_services.provider_count', 'booking_services.created_at',
                'booking_services.meeting_link', 'service_categories.name as service_name', 'service_categories.id as service_id',
                'service_categories.check_in_procedure', 'service_categories.close_out_procedure', 'service_categories.running_late_procedure',
                'accommodations.name as accommodation_name'
            ])
            ->toArray();
        //fetch participant details
        foreach ($this->data['booking_services'] as $key => $service) {
            if ($service['attendees'])
                $this->data['booking_services'][$key]['participants'] = User::whereIn('id', explode(',', $service['attendees']))->select('name', 'id')->get();

            if ($service['specialization']) {

                $spez = json_decode($service['specialization'], true) ? json_decode($service['specialization'], true) : null;
                if ($spez && count($spez)) {
                    $this->data['booking_services'][$key]['specialization']  = Specialization::whereIn('id', $spez)->pluck('name')->toArray();
                } else
                    $this->data['booking_services'][$key]['specialization']  = null;
            }
            if ($service['meetings'] != null) {

                $this->data['booking_services'][$key]['meeting_details'] = json_decode($service['meetings'], true) ? json_decode($service['meetings'], true)[0] : null;
            }
            $this->data['booking_services'][$key]['display_running_late'] = false;
            $this->data['booking_services'][$key]['display_check_in'] = false;
            $this->data['booking_services'][$key]['display_check_out'] = false;

            $val = $service['running_late_procedure'] ? json_decode($service['running_late_procedure'], true) : null;
            if ($val) {
                if (isset($val['enable_button']) && ($val['enable_button']))
                    $this->data['booking_services'][$key]['display_running_late'] = true;
            }
            $val = json_decode($service['check_in_procedure'], true);
            if ($val) {
                if (isset($val['enable_button']) && ($val['enable_button']))
                    $this->data['booking_services'][$key]['display_check_in'] = true;
            }
            $val = json_decode($service['close_out_procedure'], true);
            if ($val) {
                if (isset($val['enable_button_provider']) && ($val['enable_button_provider']))
                $this->data['booking_services'][$key]['display_check_out'] = true;
            }

            $provider = BookingProvider::where(['booking_service_id' => $service['id'], 'provider_id' => Auth::id()])->first();
            $this->data['booking_services'][$key]['provider'] = $provider ? $provider->toArray() : null;
        }
        $this->data['assigned'] = $assigned;
        $this->data['isToday'] = isset($this->data['booking_services'][0]) ? Carbon::parse($this->data['booking_services'][0]['start_time'])->isToday() : false;
        $this->data['isPast'] = isset($this->data['booking_services'][0]) ? (Carbon::parse($this->data['booking_services'][0]['end_time']) <= Carbon::today() ? true : false) : false;
        if (isset($this->data['booking_services'][0])) {
            $provider = BookingProvider::where(['provider_id' => Auth::id(), 'booking_service_id' => $this->data['booking_services'][0]['id']])->first();
            $this->data['providerStatus']  =        ['return_status' => $provider ? $provider->return_status : 0];
            $this->data['checked_in']  =$provider && $provider->check_in_status == 1 ? true  : false;

            if ($provider) {
                // rateSum = total/override + additional charges
                $this->data['totalPayment'] =  $provider->is_override_price ? $provider->override_price  : $provider->total_amount;
                $this->data['additionalPayment'] = $provider->additional_payments['additional_charge_provider'] ?? 0;
                $this->data['rateSum'] = $this->data['totalPayment'] - $this->data['additionalPayment'];
            }
        }
        //custom forms associated with booking
        $this->data['serviceFormDetails'] =  BookingCustomizeData::where("booking_id", $this->booking->id)
            ->join('customize_form_fields', 'booking_customize_data.customize_id', '=', 'customize_form_fields.id')
            ->join('customize_forms', 'customize_form_fields.customize_form_id', 'customize_forms.id')
            ->whereNotNull('customize_form_fields.field_name')
            ->get([
                'customize_form_fields.field_name', 'booking_customize_data.data_value', 'customize_form_fields.customize_form_id',
                'customize_form_fields.position', 'request_form_name'
            ])
            ->groupBy('customize_form_id')->sortby('position')->toArray();
    }

	public function showCheckInPanel($booking_id, $booking_service_id, $bookingNumber = null, $selectedProvider = null)
	{

		if ($bookingNumber)
			$this->bookingNumber = $bookingNumber;
		if ($selectedProvider)
			$this->selectedProvider = $selectedProvider;
		// dd($booking_id, $booking_service_id);
		if ($this->ci_counter == 0) {
			$this->checkin_booking_id = 0;
			$this->dispatchBrowserEvent('open-provider-check-in', ['booking_id' => $booking_id, 'booking_service_id' => $booking_service_id]);
			$this->ci_counter = 1;
		} else {
			$this->checkin_booking_id = $booking_id;
			$this->booking_service_id = $booking_service_id;
			$this->ci_counter = 0;
			// $this->providerPanelType = 1;
		}
	}

    public function showCheckOutPanel($booking_id, $booking_service_id, $bookingNumber = null, $selectedProvider = null)
    {
        if ($bookingNumber)
        $this->bookingNumber = $bookingNumber;

        if ($selectedProvider)
        $this->selectedProvider = $selectedProvider;
        if ($this->co_counter == 0) {
            $this->checkout_booking_id = 0;
            $this->dispatchBrowserEvent('open-provider-check-out', ['booking_id' => $booking_id, 'booking_service_id' => $booking_service_id]);
            $this->co_counter = 1;
        } else {
            $this->checkout_booking_id = $booking_id;
            $this->booking_service_id = $booking_service_id;
            $this->co_counter = 0;
            // $this->providerPanelType = 2;
            $this->dispatchBrowserEvent('refreshSelects');
        }
    }

    protected $rules = [
        'booking.provider_notes' => 'nullable|string',
    ];


    public function updateNotes()
    {

        $this->validate();
        $this->booking->save();
        $this->emit('showConfirmation', 'Booking notes updated');
    }

    public function hideUserInfo()
    {
        if((!Session::get('isProvider')) || (!UserService::hideUserDetailsFromProvider($this->booking->customer_id))){
            return false;
        }
        return true;
    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}
