<?php

namespace App\Http\Livewire\App\Common\Forms;
use App\Models\Tenant\User;
use App\Models\Tenant\UserLoginAddress;
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

		$lastLogin = UserLoginAddress::where('user_id', $this->userid)->latest('created_at')->first();
		if ($lastLogin) {
			$createdAt = $lastLogin->created_at;
		} else 
			$createdAt = null;
		
		$this->user['login_date'] = $createdAt ? $createdAt->format('d-m-Y') : 'N/A';
		$this->user['login_time'] = $createdAt ? $createdAt->format('H:i A') : 'N/A';
		$this->user['login_ip'] = $lastLogin ? $lastLogin->ip_address : 'N/A';
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
