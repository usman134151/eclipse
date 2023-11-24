<?php

namespace App\Http\Livewire\App\Admin;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\User;
use Livewire\Component;

class Reports extends Component
{
    public $showForm, $topProviders;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.admin.reports');
    }

    public function mount()
    {
        $this->topProviders = $this->getTopProviders();
    }

    public function getTopProviders()
    {
        // filter top providers where booking is closed
        $providerClosedBookingsCount = BookingProvider::whereHas('booking', function ($query) {
            $query->where('is_closed', 1);
        })
        ->groupBy('provider_id')
        ->selectRaw('provider_id, count(*) as closed_bookings_count')
        ->orderByDesc('closed_bookings_count')
        ->pluck('closed_bookings_count', 'provider_id');
    
        // $topProviders = User::whereIn('id', $providerClosedBookingsCount->keys())->pluck('name', 'id');
        $topProviders = User::whereIn('id', $providerClosedBookingsCount->keys())->pluck('name');
        
        // Merge the closed bookings count with user names
        // $providersWithCount = $topProviders->map(function ($name, $id) use ($providerClosedBookingsCount) {
        //     $count = $providerClosedBookingsCount->get($id);
        //     return ['name' => $name, 'closed_bookings_count' => $count];
        // });
    
        return $topProviders;
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
