<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\User;
use App\Services\App\UserService;
use App\Helpers\SetupHelper;
class CustomerDetails extends Component
{
	public $user;
	protected $listeners = [
		'showDetails'
	];
	public function render()
	{
		//dd($this->user);
		return view('livewire.app.common.customer-details');
	}

	public function mount()
	{}

	public function showDetails($user){
		$this->user=$user;	
		$user1 = User::find($user['id']);
		$this->user['userdetail']['departments']=$user1->departments->pluck('name');
		$userService = new UserService;

		$data = $userService->getUserRolesDetails($this->user['id'], 5, 1);
		$this->user['userdetail']['supervisors']=User::whereIn('id', $data->pluck('user_id')->toArray())->get()->pluck('name')->toArray();

		$data = $userService->getUserRolesDetails($this->user['id'], 9, 1);
		$this->user['userdetail']['billing_managers'] = User::whereIn('id', $data->pluck('user_id')->toArray())->get()->pluck('name')->toArray();

		$data = explode(',', $this->user['userdetail']['favored_users']);
		$this->user['userdetail']['favoured_users'] = User::whereIn('id', $data)->limit(5)->select('name','email')->get()->toArray();
		// dd($user1->addresses->isEmpty());

		if($user1->addresses->isNotEmpty()){
			$this->user['userdetail']['physical_address'] =  $user1->addresses->sortBy('address_type')->toArray()[0];
			$this->user['userdetail']['billing_address'] =  $user1->addresses->sortBy('address_type')->toArray()[1];
		}else{
			$this->user['userdetail']['physical_address']=null;
			$this->user['userdetail']['billing_address']=null;
		}
		
		if(key_exists('language_id',$this->user['userdetail']))
			$this->user['userdetail']['language']=SetupHelper::getSetupValueById($this->user['userdetail']['language_id']);
		else{
			$this->user['userdetail']['language']='N/A';
		}	
		$this->dispatchBrowserEvent('refreshSelects');
		
	}

	public function showList($userId=1)
	{
		$user=User::find($userId);
		
		$this->emit('showList');
	}
}