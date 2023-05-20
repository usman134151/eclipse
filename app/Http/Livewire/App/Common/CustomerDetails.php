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
		
		if(key_exists('language',$this->user['userdetail']))
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