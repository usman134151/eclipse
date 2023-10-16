<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\User;
use App\Services\App\UserService;
use App\Helpers\SetupHelper;
class CustomerDetails extends Component
{
	public $user,$userid, $service_catalog, $isCustomer=false;
	protected $listeners = [
		'showDetails', 'showConfirmation' 
	];
	public function render()
	{
		//dd($this->user);
		return view('livewire.app.common.customer-details');
	}

	public function mount($user =null)
	{
		if($user){
			$this->showdetails($user);
		}
	}

	public function showDetails($user){

		$this->user=$user;	
		$this->userid = $user['id'];
		$user1 = User::find($user['id']);
		$this->user['userdetail']['departments']=$user1->departments->pluck('name');
		$userService = new UserService;

		$data = $userService->getUserRolesDetails($this->user['id'], 5, 1);
		$this->user['userdetail']['supervisors']=User::whereIn('id', $data->pluck('user_id')->toArray())->get()->pluck('name')->toArray();

		$data = $userService->getUserRolesDetails($this->user['id'], 9, 1);
		$this->user['userdetail']['billing_managers'] = User::whereIn('id', $data->pluck('user_id')->toArray())->get()->pluck('name')->toArray();
		if(key_exists('favored_users',$this->user['userdetail'])){
			$data = explode(',', $this->user['userdetail']['favored_users']);
			$this->user['userdetail']['favoured_users'] = User::whereIn('id', $data)->limit(5)->with('userdetail')->get()->toArray();
		}
		else{
			$this->user['userdetail']['favoured_users'] =[];
		}

		// dd($this->user['userdetail']['favoured_users']);
		$this->user['userdetail']['physical_address'] = null;
		$this->user['userdetail']['billing_address'] = null;
	
		if($user1->addresses->isNotEmpty()){
			$addresses = $user1->addresses->sortBy('address_type')->toArray();
			$this->user['userdetail']['physical_address'] =  $addresses[0];
			if(isset($addresses[1]))
				$this->user['userdetail']['billing_address'] =  $user1->addresses->sortBy('address_type')->toArray()[1];
		}
			
		if(key_exists('language_id',$this->user['userdetail']))
			$this->user['userdetail']['language']=SetupHelper::getSetupValueById($this->user['userdetail']['language_id']);
		else{
			$this->user['userdetail']['language']='N/A';
		}
		if(key_exists('language_id',$this->user['userdetail'])){
			$this->user['tags'] = json_decode($this->user['userdetail']['tags']);
		}
		else 
		$this->user['tags'] = [];
		

		$query = User::query();
		$query->where('users.id', $this->userid);
		$query->join('associate_services', function($join){
			$join->where('associate_services.model_type','=','customer');
			$join->on('associate_services.model_id', 'users.id');
			$join->where('associate_services.status', '=' ,1);
		});
		$query->join('service_categories', 'associate_services.service_id', "service_categories.id");
		$query->join('accommodations', 'service_categories.accommodations_id', "accommodations.id");
		$query->select([
			'accommodations.id as accommodation_id',
			'accommodations.name as accommodation_name',
			'service_categories.id as service_id', 'service_categories.name as service_name',
		]);
		$this->service_catalog = $query->distinct('service_id')->get()->groupBy('accommodation_id')->toArray();
		$this->dispatchBrowserEvent('refreshSelects');

		$this->user['avg_rating'] = round($user1->feedbackRecieved->avg('rating'));

	}

	public function lockAccount()
	{
		$user = User::find($this->user['id']);
		$user->status = !$user->status ;
		$user->save();
		$this->user['status']= $user->status;
		$this->showConfirmation("Account status changed Successfully");

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

	public function showList($userId=1)
	{
		$user=User::find($userId);
		
		$this->emit('showList');
	}
	public function resendWelcomeEmail()
	{
		$user = User::find($this->user['id']);
		sendWelcomeMail($user);
		$this->showConfirmation("Welcome Email Send Successfully");
	}
}