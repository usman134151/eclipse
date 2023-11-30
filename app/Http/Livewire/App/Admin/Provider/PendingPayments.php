<?php

namespace App\Http\Livewire\App\Admin\Provider;

use Livewire\Component;

class PendingPayments extends Component
{
    public $showForm, $providerId=0,$counter=0;
    protected $listeners = ['showList' => 'resetForm', 'openRemittancePaymentsPanel'];

    public function openRemittancePaymentsPanel($providerId)
    {
        if ($this->counter == 0) {
            $this->providerId = 0;
            $this->dispatchBrowserEvent('refresh-remittances-payment', ['providerId' => $providerId]);
            $this->counter = 1;
        } else {
            $this->providerId = $providerId;
            $this->counter = 0;
        }
    }
    public function render()
    {
        return view('livewire.app.admin.provider.pending-payments');
    }

    public function mount()
    {
       
       
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
