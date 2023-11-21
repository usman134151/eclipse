<?php

namespace App\Http\Livewire\App\Admin\Provider;
use App\Models\Tenant\User;
use Livewire\WithPagination;

use Livewire\Component;

class Remittance extends Component
{
	use WithPagination;
	public $showForm, $limit = 10;
	protected $listeners = ['showList' => 'resetForm'];

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
	}

	public function mount()
	{}

	public function render()
	{
		return view('livewire.app.admin.provider.remittance',['providers' => $this->fetchData()]);
	}

	public function fetchData()
	{
		$providers = User::where('status',1)->whereHas('roles', function ($query) {
			$query->where('role_id', 2);
		}) 
		->with(['userdetail' => function ($query) {
			$query->select('user_id', \DB::raw("COALESCE(profile_pic, '/tenant-resources/images/portrait/small/avatar-s-20.jpg') AS profile_pic"));
		}])
		->select('id', 'name', 'email')
		->paginate($this->limit);

		return $providers;
	}
}