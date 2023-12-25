<?php

namespace App\Http\Livewire\App\Common\Panels\Provider;

use App\Models\Tenant\Booking;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InvoicesDetails extends Component
{
    public $showForm, $bookings;
    protected $listeners = ['showList' => 'resetForm'];

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
            ->select('bookings.*', 'bookings.id as booking_id','booking_providers.*', 'service_categories.name as service_name')
            ->get();
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
