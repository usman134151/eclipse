<?php

namespace App\Http\Livewire\App\Common\Panels\Invoices;

use App\Models\Tenant\Booking;
use App\Models\Tenant\User;
use App\Models\Tenant\UserAddress;
use Livewire\Component;

class CreateInvoice extends Component
{
    public $showForm, $selectedBookingsIds=[], $managers,$addresses, $invoice=['billing_address_id'=>null, 'billing_manager_id'=>null],
        $exclude_notif=false;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.invoices.create-invoice');
    }

    public function mount($selectedBookingsIds)
    {
        $bookings = Booking::whereIn('id',$selectedBookingsIds)->get();
        $this->invoice['invoice_number'] = genetrateInvoiceNumber($bookings->first()->company);
        $this->managers = User::whereIn('id',$bookings->pluck('billing_manager_id')->toArray())->with('userdetail','billing_addresses')->get();
        $this->addresses = UserAddress::where(['user_id'=>$bookings->first()->company_id, 'user_address_type'=>2,'address_type'=>2])->get()->toArray();
       $this->dispatchBrowserEvent('refreshSelects');
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
