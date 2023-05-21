<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;
use App\Models\Tenant\Company;
use App\Services\ExportDataFile;

class CompanyMain extends Component
{
	public $showForm;
	public $showProfile;
	public $importFile;

	protected $listeners = [
		'showList' => 'resetForm',
		'showProfile' => 'showProfile',
		'showForm' => 'showForm', // show form when the parent component requests it
		'updateRecordId' => 'updateRecordId', // update the ID of the record being edited/deleted
	];
	protected $exportDataFile;

	public function render()
	{
		return view('livewire.app.admin.company');
	}

	public function mount()
	{}
	public function __construct()
    {
        $this->exportDataFile = new ExportDataFile;
    }

	function showForm($company=null)
	{
        if ($company) {
			$this->company = $company;
           	$this->emit('editRecord', $company);
		}
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/company/create-company']);
		$this->dispatchBrowserEvent('refreshSelects');
	}

	public function resetForm($message='')
	{
		if ($message) {
			$this->confirmationMessage = $message;
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
		$this->importFile=false;
		$this->showForm=false;
		$this->showProfile = false;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/company']);
	}

	public function showProfile($company)
	{
		if ($company) {
			$this->company = $company;

			$this->emit('showDetails', $company);
		}

		$this->showProfile = true;
	}
	// function to update the ID of the record being edited/deleted
	public function updateRecordId($id)
	{
		$this->recordId = $id;
	}
	public function downloadExportFile()
    {
        return $this->exportDataFile->generateCompanyExcelTemplate();
    }

	public function switch($component)
	{
		$this->component = $component;
	}
	public function importFile(){
		$this->importFile=true;

	}
}
