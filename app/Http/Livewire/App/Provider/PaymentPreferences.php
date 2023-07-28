<?php

namespace App\Http\Livewire\App\Provider;

use App\Models\Tenant\PaymentPreference;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PaymentPreferences extends Component
{
    public $showForm, $provider_id, $method=1 ,$payment=['bank_name'=>null,'routing_number'=>null,'account_number'=>null,'address_id'=>0], $user=null;
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
        $this->payment['address_id'] = null;

        $this->payment['method']=$this->method;
        $this->payment['updated_by'] = Auth::id();

        PaymentPreference::updateOrCreate(['provider_id'=>$this->provider_id],$this->payment);
        $this->emit('showConfirmation','Payment Preferences saved successfully!');
        $this->payment = ['bank_name' => null, 'routing_number' => null, 'account_number' => null, 'address_id' => 0];
    }


    public function mailCheque()
    {

        $this->payment['bank_name'] = null;
        $this->payment['routing_number'] = null;
        $this->payment['account_number'] = null;
        
        $this->payment['method'] = $this->method;
        $this->payment['updated_by'] = Auth::id();
        PaymentPreference::updateOrCreate(['provider_id' => $this->provider_id], $this->payment);
        $this->emit('showConfirmation', 'Payment Preferences saved successfully!');
        $this->payment = ['bank_name' => null, 'routing_number' => null, 'account_number' => null, 'address_id' => 0];

        
    }

    public function mount()
    {
        $this->user = User::where('id',$this->provider_id)->first();

        $data=PaymentPreference::where('provider_id',$this->provider_id)->first();
        if($data){
        $this->payment = $data->toArray();
        $this->method = $data->method;
        unset($this->payment['id']);}
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
