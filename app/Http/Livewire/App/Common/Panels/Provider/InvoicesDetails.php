<?php

namespace App\Http\Livewire\App\Common\Panels\Provider;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\ProviderInvoice;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InvoicesDetails extends Component
{
    public $showForm, $bookings, $data;
    protected $listeners = ['showList' => 'resetForm'];
    public $serviceTypes = [
        '1' => ['class' => 'inperson-rate', 'postfix' => '', 'title' => 'In-Person'],
        '2' => ['class' => 'virtual-rate', 'postfix' => '_v', 'title' => 'Virtual'],
        '4' => ['class' => 'phone-rate', 'postfix' => '_p', 'title' => 'Phone'],
        '5' => ['class' => 'teleconference-rate', 'postfix' => '_t', 'title' => 'Teleconference'],
    ];

    public function render()
    {
        return view('livewire.app.common.panels.provider.invoices-details');
    }

    public function mount($bookingIds)
    {
        $this->bookings = Booking::whereIn('bookings.id', $bookingIds)->join('booking_providers', function ($q) {
            $q->on('booking_providers.booking_id', 'bookings.id');
            $q->where(['provider_id' => Auth::id(), 'remittance_id' => 0]);
        })
            ->join('booking_services', function ($q) {
                $q->on('booking_services.id', 'booking_providers.booking_service_id');
            })->join('service_categories', 'booking_services.services', 'service_categories.id')
            ->select('bookings.*', 'bookings.id as booking_id', 'booking_providers.*', 'booking_services.service_types', 'service_categories.name as service_name')
            ->get();
        $total = 0;
        foreach ($this->bookings as $booking) {
            $booking->total = ($booking->is_override_provider == 1 ? $booking->override_price : $booking->total_amount);
            $total = $total + ($booking->is_override_provider == 1 ? $booking->override_price : $booking->total_amount);
            $booking->additional_payments =  $booking->additional_payments ? json_decode($booking->additional_payments, true) : null;
        }
        $this->data['total'] = $total;
        $this->data['invoice_number'] = genetrateProviderInvoiceNumber(Auth::user());
        $this->data['provider_invoice_number'] = '';
        $this->data['invoice_due_date'] = Carbon::now()->addDays(15)->toDateString();
    }

    public function submitInvoice()
    {

        // dd($this->data);
        $invoice = ProviderInvoice::insertGetId(
            [
                'provider_id' => Auth::id(),
                'invoice_number' => $this->data['invoice_number'],
                'provider_invoice_number' => $this->data['provider_invoice_number'],
                'invoice_date' => now(),
                'invoice_due_date' => Carbon::parse($this->data['invoice_due_date'])->format('Y-m-d H:i:s'),
                'total_amount' => $this->data['total'],
                'invoice_status' => 0,

            ]
        );
        BookingProvider::whereIn('id', $this->bookings->pluck('id')->toArray())->update(['invoice_id' => $invoice]);


        // foreach ($this->bookings as $key => $booking) {

        //     // $message = "New invoice " . $this->invoice['invoice_number'] . " created by " . Auth::user()->name;
        //     // $logs = array(
        //     //     'action_by' => Auth::user()->id,
        //     //     'action_to' => $booking->id,
        //     //     'item_type' => 'Booking',
        //     //     'message' => $message,
        //     //     'type' => 'Invoice created',
        //     //     'request_to' => ''
        //     // );
        //     // addLogs($logs);
        //     $booking->invoice_id = $invoice;
        //     $booking->invoice_status = "1";
        //     $booking->save();
        // }

        $this->dispatchBrowserEvent('close-invoice-details');
        $this->emit('showConfirmation', 'Invoice created successfully');
        $this->bookings=[];
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
