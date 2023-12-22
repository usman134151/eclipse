<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\Logs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Notification extends Component
{
    public $showForm, $notificationMessages, $userType='admin';
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.notification');
    }

    public function mount()
    {
        $query = Logs::query()->orderBy('created_at','desc')->take(3);
        if(Session::get('isProvider')){
            $this->userType = 'provider';
            $bookingIds = BookingProvider::where('provider_id',Auth::user()->id)->pluck('booking_id');
            $query->where(function ($query) use ($bookingIds) {
                $query->where('action_by', Auth::user()->id)
                    ->orWhere(function ($query) use ($bookingIds) {
                        $query->where('action_to', Auth::user()->id)
                            ->where('item_type', 'user');
                    })
                    ->orWhere(function ($query) use ($bookingIds) {
                        $query->whereIn('action_to', $bookingIds)
                            ->where('item_type', 'Booking');
                    });
            });
        } else if(Session::get('isCustomer')){
            $this->userType = 'customer';
            $bookingIds = Booking::where('customer_id',Auth::user()->id)->pluck('id');
            $query->where(function ($query) use ($bookingIds) {
                $query->where('action_by', Auth::user()->id)
                    ->orWhere(function ($query) use ($bookingIds) {
                        $query->where('action_to', Auth::user()->id)
                            ->where('item_type', 'user');
                    })
                    ->orWhere(function ($query) use ($bookingIds) {
                        $query->whereIn('action_to', $bookingIds)
                            ->where('item_type', 'Booking')
                            ->whereNotIn('type',['Booking Invitation','Assignment Invitation','auto-assigned','auto-notified','assigned','unassigned','checkout update']);

                    });
            });
            
        }
        
        $this->notificationMessages = $query->pluck('message');
       
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}
