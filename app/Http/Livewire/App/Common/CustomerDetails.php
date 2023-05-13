<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\User;
use App\Services\App\UserService;

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
		$this->dispatchBrowserEvent('refreshSelects');
		
	}

	public function showList($userId=1)
	{
		$user=User::find($userId);
		
		$this->emit('showList');
	}
}