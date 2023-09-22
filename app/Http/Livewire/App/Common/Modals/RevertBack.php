<?php

namespace App\Http\Livewire\App\Common\Modals;

use Livewire\Component;

class RevertBack extends Component
{
    public $showForm,$invoice_id=0;
    protected $listeners = ['showList' => 'resetForm','revertInvoice'];

    public function render()
    {
        return view('livewire.app.common.modals.revert-back');
    }

    public function revertInvoice($invoice_id)
    {
       $this->invoice_id = $invoice_id;
       
    }

    public function revert()
    {
        $this->emit('revertModalDismissed');  // emit to close modal
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
