<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;

class Company extends Component
{
	public $showForm;
	public $showProfile;

	protected $listeners = [
		'showList' => 'resetForm',
		'showProfile' => 'showProfile',
	];

	public function render()
	{
		return view('livewire.app.admin.company');
	}

	public function mount()
	{}

	function showForm()
	{
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/company/create-company']);
	}

	public function resetForm()
	{
		$this->showForm=false;
		$this->showProfile = false;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/company']);
	}

	public function showProfile()
	{
		$this->showProfile = true;
	}

	public function switch($component)
	{
		$this->component = $component;
	}
}
