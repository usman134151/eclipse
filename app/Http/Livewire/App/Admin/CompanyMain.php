<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;
use App\Models\Tenant\Company;

class CompanyMain extends Component
{
	public $showForm;
	public $showProfile;

	protected $listeners = [
		'showList' => 'resetForm',
		'showProfile' => 'showProfile',
		'showForm' => 'showForm', // show form when the parent component requests it
		'updateRecordId' => 'updateRecordId', // update the ID of the record being edited/deleted
	];

	public function render()
	{
		return view('livewire.app.admin.company');
	}

	public function mount()
	{}

	function showForm($company=null)
	{
        if ($company) {
			$this->company = $company;
           // dd($company);
			$this->emit('editRecord', $company);
		}
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/company/create-company']);
		$this->dispatchBrowserEvent('refreshSelects');
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
	// function to update the ID of the record being edited/deleted
	public function updateRecordId($id)
	{
		$this->recordId = $id;
	}

	public function switch($component)
	{
		$this->component = $component;
	}
}