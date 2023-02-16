<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;

class Company extends Component
{
	public $showForm;
	public $showProfile;

	protected $listeners = ['showList' => 'resetForm'];

	public function render()
	{
		return view('livewire.app.admin.company');
	}

	public function mount()
	{}

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
		$this->showProfile = false;
	}

	public function showProfile()
	{
		$this->showProfile = true;
	}
}
