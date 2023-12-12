<?php

namespace App\Http\Livewire\App\Customer;

use App\Models\Tenant\User;
use Livewire\Component;

class TeamMembers extends Component
{
    public $showForm, $user;
	public $showProfile;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.customer.team-members');
    }

    public function mount($showProfile)
    {
        $this->showProfile = $showProfile;
		if($showProfile){
			$this->user = User::where('id',request()->customerID)->with(['userdetail','industries','company'])->first()->toArray();
		}
       
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
