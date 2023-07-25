<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Schedule;
use Livewire\Component;
use App\Models\Tenant\User;
use App\Services\App\UserService;
class ProviderDetails extends Component
{
    public $user, $userid;

	
	// variabled for my-drive (upload-credential-file) panel 
	public  $counter = 0, $credentialId, $credentialLabel="",$credentialDetails = false;


	protected $listeners = [
		'showDetails',
		 'OpenProviderCredential',//for upload panel
		 'openActiveCredentialModal',	//for document view modal
			'showConfirmation',
		];

	public function saveSchedule()
	{
		$this->emit('saveSchedule');
		$this->emit('showConfirmation', "Availability has been saved successfully");
		$this->dispatchBrowserEvent('close-default-schedule-modal');
	}

	// open panel in my-drive to upload credential 
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
			$this->dispatchBrowserEvent('refreshSelects');

		}


	}

	// open view document modal from my-drive
	public function openActiveCredentialModal($user_doc_id){
		$this->emit('openActiveCredential', $user_doc_id);
	}



	// fetches basis use data, refer to Provider.php to increase relation arrays
    public function showDetails($user){
		$this->user=$user;
		$this->userid = $user['id'];
		$this->user['tags'] = json_decode($this->user['userdetail']['tags']);
		$this->dispatchBrowserEvent('refreshSelects');
	}

	// locks user account
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
