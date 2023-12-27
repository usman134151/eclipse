<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\ProviderInvoice;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AcceptRemittance extends Component
{
    public $showForm, $invoice, $admin_response;
    protected $listeners = ['showList' => 'resetForm','acceptInvoice'=> 'loadData'];

    public function render()
    {
        return view('livewire.app.common.modals.accept-remittance');
    }

    public function loadData($invoiceId)
    {
        $this->invoice = ProviderInvoice::find($invoiceId);
        $this->admin_response = '';
       
    }


    public function accept()
    {
        $this->invoice->response_text = $this->admin_response;
        $this->invoice->invoice_status = 1;
        $this->invoice->response_by = Auth::id();
        $this->invoice->save();
        // $this->emit('close-accept-modal');
        $this->emit('showList', 'Invoice accepted successfully');

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
