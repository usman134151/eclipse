<?php

namespace App\Http\Livewire\App\Admin\Provider;

use Livewire\Component;

class Reimbursement extends Component
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
		return view('livewire.app.admin.provider.reimbursement');
	}
}