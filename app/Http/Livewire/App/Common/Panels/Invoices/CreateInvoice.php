<?php

namespace App\Http\Livewire\App\Common\Panels\Invoices;

use Livewire\Component;

class CreateInvoice extends Component
{
    public $showForm, $selectedBookingsIds=[];
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.invoices.create-invoice');
    }

    public function mount($selectedBookingsIds)
    {
    //    dd($selectedBookingsIds, 'in create invoice mount');
       
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
