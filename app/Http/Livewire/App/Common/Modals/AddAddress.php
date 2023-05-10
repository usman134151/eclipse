<?php

namespace App\Http\Livewire\App\Common\Modals;

use Livewire\Component;
use App\Models\Tenant\UserAddress;
use Illuminate\Validation\Rule;

class AddAddress extends Component
{
    public $address;
    public $addressType=1; 
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
       
        $this->emitUp('updateAddress', $this->address);
        $this->updateAddressData();
    }

    

}
