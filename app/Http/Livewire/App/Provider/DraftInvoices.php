<?php

namespace App\Http\Livewire\App\Provider;

use App\Http\Livewire\App\Common\Import\Bookings;
use App\Models\Tenant\Booking;
use App\Models\Tenant\Specialization;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class DraftInvoices extends Component
{
    use WithPagination;

    public $showForm, $bookingIds = [], $counter = 0, $selectedBookings = [], $selectAll = false;
    protected $listeners = ['showList' => 'resetForm', 'openInvoiceDetailsPanel', 'showConfirmation'];
    public $provider, $limit = 10;
    public $type = [2 => ['code' => '/css/provider.svg#green-dot', 'title' => 'Completed'], 4 => ['code' => '/css/provider.svg#yellow-dot', 'title' => 'Cancelled-Billable'], 1 => ['code' => '/css/common-icons.svg#blue-dot', 'title' => 'Partial']];

    public function openInvoiceDetailsPanel($bookingIds = null)
    {
        if ($bookingIds == null)
            $bookingIds = $this->selectedBookings;
        if ($this->counter == 0) {
            $this->bookingIds = [];
            $this->dispatchBrowserEvent('open-provider-invoice-details', ['bookingIds' => $bookingIds]);
            $this->counter = 1;
        } else {
            $this->bookingIds = $bookingIds;

            $this->counter = 0;
        }
    }

    public function showConfirmation($message = null)
    {
        if ($message) {
            // Emit an event to display a success message using the SweetAlert package
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Success',
                'text' => $message,
            ]);
        }
        $this->bookingIds = [];
        $this->selectedBookings = [];

    }
    public function render()
    {
        return view('livewire.app.provider.draft-invoices', ['invoiceData' => $this->fetchData()]);
    }

    public function mount()
    {

        $this->provider = User::where('id', Auth::id())->first();
    }

    public function fetchData()
    {
        // fetch all providers bookings that have 
        // complete (is_closed == 1 && remittance_id == null/0) cancelled-billable (booking->status == 4)

        $data = Booking::where(['bookings.is_closed' => 1, 'bookings.type' => 1, 'bookings.booking_status' => '1'])
            ->whereIn('bookings.status', [1, 2, 4]) //partially assigned, fully assigned and cancelled-billable
            ->join('booking_providers', function ($q) {
                $q->on('booking_providers.booking_id', 'bookings.id');
                $q->where(['provider_id' => $this->provider->id, 'remittance_id' => 0, 'booking_providers.invoice_id' => null]);
                // can add check for check in status but cancelled-billable might contradict.
            })
            ->join('booking_services', function ($q) {
                $q->on('booking_services.id', 'booking_providers.booking_service_id');
                // $q->on(['services' => $this->provider->id, 'remittance_id' => 0]);
                // can add check for check in status but cancelled-billable might contradict.
            })->join('service_categories', 'booking_services.services', 'service_categories.id')
            ->join('accommodations', 'accommodations.id', 'service_categories.accommodations_id')
            ->select(['bookings.*', 'bookings.id as booking_id', 'booking_services.specialization', 
            'booking_providers.*', 'accommodations.name as accommodation_name', 'service_categories.name as service_name'])
            ->orderBy('booking_start_at', 'DESC')

            ->paginate($this->limit);
            foreach($data as $booking){
            $booking->specializationNames = $this->specializationsNameString($booking->specialization);
            }
        // dd($data->first()->toArray());
        return $data;
    }

    public function specializationsNameString($specialization)
    {
        $str = null;
        $s = json_decode($specialization);
        if (count($s) && !is_array($s[0])) {
            $val = Specialization::whereIn('id', $s)->where('status', 1)->pluck('name')->toArray();
            $str = count($val) ? implode(', ', $val) : null;
        } // dd($val);
        return $str;
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
