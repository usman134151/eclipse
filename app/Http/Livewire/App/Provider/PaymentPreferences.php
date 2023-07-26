<?php

namespace App\Http\Livewire\App\Provider;

use App\Models\Tenant\PaymentPreference;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PaymentPreferences extends Component
{
    public $showForm, $provider_id, $method=1 ,$payment=['bank_name'=>null,'routing_number'=>null,'account_number'=>null];
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.provider.payment-preferences');
    }
    public function rules()
    {
        return [
            'payment.account_number' => ['required', 'max:255'],
            'payment.routing_number' => ['required','max:255'],
            'payment.bank_name' => ['required', 'max:255'],
        ];
    }

    public function directDeposit(){
        $this->validate();
        $this->payment['method']=$this->method;
        $this->payment['updated_by'] = Auth::id();

        PaymentPreference::updateOrCreate(['provider_id'=>$this->provider_id],$this->payment);
        $this->emit('showConfirmation','Payment Preferences saved successfully!');
        $this->payment = ['bank_name' => null, 'routing_number' => null, 'account_number' => null];
    }


    public function mailCheque()
    {
        
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
