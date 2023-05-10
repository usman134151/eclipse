<?php

namespace App\Http\Livewire\App\Common\Modals;

use Livewire\Component;
use App\Models\Tenant\UserAddress;
use Illuminate\Validation\Rule;

class AddAddress extends Component
{
   public $address=['address_name'=>'','address_type'=>1,'address_line1'=>'','address_line2'=>'','city'=>'','state'=>'','country'=>'','zip'=>'','notes'=>'','phone'=>''];
   public $addressType=1; 
    public function render()
    {  
        return view('livewire.app.common.modals.add-address');
    }

    public function mount()
    {
       
       
    }

    public function updateData(){
       // dd($this->address);
    }

    

}
