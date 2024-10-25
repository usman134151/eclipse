<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class SystemLogs extends Component
{
	public $showForm;
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
		return view('livewire.app.common.system-logs');
	}
}
