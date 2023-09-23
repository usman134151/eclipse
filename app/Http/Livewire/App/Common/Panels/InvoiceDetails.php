<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\Invoice;
use Livewire\Component;

class InvoiceDetails extends Component
{
    public $showForm,$invoice,$bookings;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.invoice-details');
    }

    public function mount($invoice_id)
    {
        $this->invoice = Invoice::where('id',$invoice_id)->first();

        
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
