<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\User;
use App\Services\App\UserService;
class ProviderDetails extends Component
{
    public $user, $userid;
	public  $counter = 0, $credentialId, $credentialLabel="",$credentialDetails = false;

	protected $listeners = [
		'showDetails', 'OpenProviderCredential'
	];

	public function OpenProviderCredential($credentialId,$credentialLabel){
		if ($this->counter == 0) {
			$this->credentialId = 0;
			$this->credentialLabel = $credentialLabel;
			$this->dispatchBrowserEvent('open-credential', ['credentialId' => $credentialId, 'credentialLabel' => $credentialLabel]);
			$this->counter = 1;
			$this->credentialDetails = true;
		} else {
			$this->credentialId = $credentialId;
			$this->counter = 0;
		}

	}
    public function showDetails($user){
		$this->user=$user;
		$this->userid = $user['id'];
		$this->user['tags'] = json_decode($this->user['userdetail']['tags']);
		$this->dispatchBrowserEvent('refreshSelects');
	}


	public function lockAccount()
	{
		$user = User::find($this->userid);
		$user->status = !$user->status;
		$user->save();
		$this->user['status'] = $user->status;
		$this->showConfirmation("Account Locked Successfully");
	}

	public function showConfirmation($message = "")
	{
		if ($message) {
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
	}
	public function render()
	{
		return view('livewire.app.common.provider-details');
	}

	public function mount($user=null)
	{
		if ($user) {
			$this->showdetails($user);
		}
	}

	public function showList($userId=1)
	{
        $user=User::find($userId);

		$this->emit('showList');
	}
}
