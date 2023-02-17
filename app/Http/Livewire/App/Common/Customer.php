<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class Customer extends Component
{
	public $showForm;
	public $showProfile;

	protected $listeners = ['showList' => 'resetForm'];

	public function render()
	{
		return view('livewire.app.common.customer');
	}

	public function mount() {}

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