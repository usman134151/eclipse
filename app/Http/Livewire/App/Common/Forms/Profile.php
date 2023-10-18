<?php

namespace App\Http\Livewire\App\Common\Forms;
use App\Models\Tenant\User;
use Livewire\Component;

class Profile extends Component
{
    public $user,$userid;
	protected $listeners = [
		'showDetails','showConfirmation'
	];
    public $showForm;
    public function render()
    {
        return view('livewire.app.common.forms.profile');
    }

    public function mount($user=null)
    {
        if ($user) {
            $this->showdetails($user);
        }

    }
    public function showDetails($user){
		$this->user=$user;
        $this->userid = $this->user['id'];

	}

    public function showList($userId=1)
	{
		$user=User::find($userId);

		$this->emit('showList');
	}

    public function showConfirmation($message=""){
		if ($message) {
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
	}


}
