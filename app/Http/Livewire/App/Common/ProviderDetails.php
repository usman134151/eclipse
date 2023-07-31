<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Schedule;
use Livewire\Component;
use App\Models\Tenant\User;
use App\Models\Tenant\UserDetail;
use App\Services\App\UserService;
class ProviderDetails extends Component
{
    public $user, $userid , $accommodation_catalog, $service_catalog;
	public $settings=['travel_rate_per_unit'=>'', 'travel_rate_unit'=>"km", 'rate_for_travel_time'=>'', 'same_as_service_rate'=>''];

	
	// variabled for my-drive (upload-credential-file) panel 
	public  $counter = 0, $credentialId, $credentialLabel="",$credentialDetails = false;


	protected $listeners = [
		'showDetails',
		 'OpenProviderCredential',//for upload panel
		 'openActiveCredentialModal',	//for document view modal
		'viewCredentialModal', // for viewing acknowledge doc
			'showConfirmation',
		];

	public function saveSettings(){
		
		UserDetail::where('id',$this->userid)->update(['provider_details'=> json_encode($this->settings)]);
		$this->showConfirmation("Settings saved Successfully");

	}

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

	// open view document modal from my-drive
	public function viewCredentialModal($doc_id)
	{
		$this->emit('viewCredential', $doc_id);
	}



	// fetches basis use data, refer to Provider.php to increase relation arrays
    public function showDetails($user){
		$this->user=$user;
		$this->userid = $user['id'];
		$this->user['tags'] = json_decode($this->user['userdetail']['tags']);
		if($this->user['userdetail']['provider_details']!=null)
			$this->settings = json_decode($this->user['userdetail']['provider_details'],true);

	
		// accommodations and services for dashboard
		$query = User::query();
		$query->where('users.id', $this->userid);
		$query->join('provider_accommodation_services', function ($join) {
			$join->on('provider_accommodation_services.user_id', "users.id");
			$join->where('provider_accommodation_services.status', 1);
		});
		$query->join('accommodations', 'provider_accommodation_services.accommodation_id', "accommodations.id");
		$query->join('service_categories', 'provider_accommodation_services.service_id', "service_categories.id");
		$query->select([
			'accommodations.id as accommodation_id',
			'accommodations.name as accommodation_name',
			'service_categories.id as service_id','service_categories.name as service_name',
			'provider_accommodation_services.provider_priority',


		]);
			$this->accommodation_catalog = $query->distinct('service_id')->orderBy('provider_priority')->get()->groupBy('accommodation_id')->toArray();

		
		// dd($this->service_catalog);
		$this->dispatchBrowserEvent('refreshSelects');
	}

	// locks user account
	public function lockAccount()
	{
		$user = User::find($this->userid);
		$user->status = !$user->status;
		$user->save();
		$this->user['status'] = $user->status;
		$this->showConfirmation("Account status changed Successfully");
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
