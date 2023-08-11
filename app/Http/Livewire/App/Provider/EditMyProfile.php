<?php

namespace App\Http\Livewire\App\Provider;

use App\Models\Tenant\User;
use Livewire\Component;

class EditMyProfile extends Component
{
    public $showForm,$user;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.provider.edit-my-profile');
    }

    public function mount($user_id)
    {
       $this->user = User::where('id',$user_id)->first();
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
