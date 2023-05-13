<?php

namespace App\Http\Livewire\App\Common\Forms;
use App\Models\Tenant\User;
use Livewire\Component;

class Profile extends Component
{
    public $user;
	protected $listeners = [
		'showDetails'
	];
    public $showForm;
    public function render()
    {
        return view('livewire.app.common.forms.profile');
    }

    public function mount()
    {


    }
    public function showDetails($user){
		$this->user=$user;

	}

    public function showList($userId=1)
	{
		$user=User::find($userId);

		$this->emit('showList');
	}


}
