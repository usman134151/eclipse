<?php

namespace App\Http\Livewire\App\Common\Modals;
use Livewire\Component;
use App\Models\Tenant\UserAddress;
use Illuminate\Validation\Rule;
use App\Models\Tenant\Country;

class AddAddress extends Component
{
    public $address;
    public $addressType=1;
    public $functionExecuted = false;
    public $countries=[];
    protected $listeners = ['updateAddressType', 'updateAddressValues','updateAddressID'=>'setAddress'];
    public function render()
    {

        return view('livewire.app.common.modals.add-address');
    }

    public function mount()
    {
       $this->updateAddressData();
       $this->countries=Country::get()->toArray();
      

    }
    public function updateAddressValues($attrName, $val)
    {
            $this->address[$attrName] = $val;
    }
	
   
    public function updateAddressType($type,$address=null){
        $this->address['address_type']=$type;
        if($address)
            $this->address =$address;

    }
    public function updateAddressData($type=1){
        $this->address=['address_name'=>'','address_type'=>$type,'address_line1'=>'','address_line2'=>'','city'=>'','state'=>'','country'=>'USA','zip'=>'','notes'=>'','phone'=>'','is_default'=>0];
    }
    public function updateData(){
        $this->validate();
        $this->emit('updateAddress', $this->address);   //display in parent component
        $this->updateAddressData();
        $this->functionExecuted = true;
        $this->emit('modalDismissed');  // emit to close modal
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
