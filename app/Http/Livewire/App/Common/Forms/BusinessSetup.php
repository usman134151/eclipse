<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class BusinessSetup extends Component
{
	public $component = 'configuration-setting';
	public $showForm;
	protected $listeners = ['showList'=>'resetForm'];

	public function mount()
	{}

	public function render()
	{
		return view('livewire.app.common.forms.business-setup');
	}

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
	}

	public function switch($component)
	{
		$this->component = $component;
	}
}