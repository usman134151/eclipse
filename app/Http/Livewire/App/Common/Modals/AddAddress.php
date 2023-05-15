<?php

namespace App\Http\Livewire\App\Common\Modals;
use Livewire\Component;
use App\Models\Tenant\UserAddress;
use Illuminate\Validation\Rule;

class AddAddress extends Component
{
    public $address;
    public $addressType=1;
    public $functionExecuted = false;
    protected $listeners = ['updateAddressType'];
    public function render()
    {

        return view('livewire.app.common.modals.add-address');
    }

    public function mount()
    {
       $this->updateAddressData();

    }
    public function updateAddressType($type){
        $this->address['address_type']=$type;
    }
    public function updateAddressData($type=1){
        $this->address=['address_name'=>'','address_type'=>$type,'address_line1'=>'','address_line2'=>'','city'=>'','state'=>'','country'=>'USA','zip'=>'','notes'=>'','phone'=>'','is_default'=>0];
    }
    public function updateData(){
        $this->validate();
        $this->emitUp('updateAddress', $this->address);
        $this->updateAddressData();
        $this->functionExecuted = true;
        $this->emit('modalDismissed');
    }

    public function rules()
    {
        return [
            'address.address_name' => [
                'required',
                'string',
                'max:255',
                //Rule::unique('user_addresses', 'address_name')->ignore($this->address['id'] ?? null),
            ],
            'address.address_line1' => [
                'required',
                'string',
                'max:255',
            ],
            'address.city' => [
                'required',
                'string',
                'max:255',
            ],
            'address.state' => [
                'required',
                'string',
                'max:255',
            ],
            'address.zip' => [
                'required',
                'string',
                'max:255',
            ],
        ];
    }


}
