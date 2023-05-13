<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\User;
use App\Services\App\UserService;
class ProviderDetails extends Component
{
    public $user;
	protected $listeners = [
		'showDetails'
	];
    public function showDetails($user){
		$this->user=$user;
		$this->dispatchBrowserEvent('refreshSelects');
	}

	public function render()
	{
		return view('livewire.app.common.provider-details');
	}

	public function mount()
	{}

	public function showList($userId=1)
	{
        $user=User::find($userId);

		$this->emit('showList');
	}
}
