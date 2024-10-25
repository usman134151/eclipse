<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use App\Models\Tenant\ProviderRemittancePayment;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddNewPayment extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm', 'refreshPanel', 'updateVal'];
    public $providers, $payment = [];

    public function render()
    {
        return view('livewire.app.common.panels.remittance.add-new-payment');
    }
     
    public function refreshPanel(){
        $this->payment = ['provider_id' => null, 'reason' => null, 'total_amount' => null];
        $this->resetValidation();
    }

    // Validation Rules
    public $rules = [
        'payment.provider_id' => 'required',
        'payment.reason' => 'required',
        'payment.total_amount' => 'required'
        ];

    public function mount()
    {
        $this->providers = User::where('status', 1)
            ->whereHas('roles', function ($query) {
                $query->wherein('role_id', [2]);
            })->select([
                'users.id',
                'users.name',
            ])->get();
        $this->payment = ['provider_id' => null, 'reason' => null, 'total_amount' => null];
    }

    public function addPayment()
    {
        $this->validate();
        $this->payment['number']= genetratePaymentNumber($this->payment['provider_id']);
        $this->payment['added_by'] = Auth::id();
        $payment = ProviderRemittancePayment::create($this->payment);

        callLogs($this->payment['provider_id'], 'New Payment', 'create');

        $this->dispatchBrowserEvent('close-add-new-payment');
        $this->emit('showList','Payment added successfully');
    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
    public function updateVal($attrName, $val)
    {
        if($attrName == 'provider_id2')
            $this->payment['provider_id'] = $val;
    }
}
