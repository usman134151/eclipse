<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class Department extends Component
{
	public $showForm;
	public $showProfile;
	protected $listeners = ['showList' => 'resetForm'];

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
		$this->dispatchBrowserEvent('refreshSelects');
	}

	public function mount()
	{}

	public function render()
	{
		return view('livewire.app.common.department');
	}
}
