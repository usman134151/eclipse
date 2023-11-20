<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;
use App\Models\Tenant\Company;
use App\Services\ExportDataFile;

class CompanyMain extends Component
{
	
	public $showForm, $counter = 0, $companyId, $companyLabel,  $companyDetails = false;
	public  $dcounter = 0, $departmentId, $departmentLabel,  $departmentDetails = false;
	public $cu_counter = 0, $cu_companyId, $cu_companyLabel,  $cu_companyDetails = false; //for company users
	public $du_counter = 0, $du_departmentId, $du_departmentLabel,  $du_departmentDetails = false; //for company users
	
	public $showProfile, $isCustomer=false;
	public $importFile, $company, $recordId;

	protected $listeners = [
		'showList' => 'resetForm',
		'showProfile' => 'showProfile',
		'showForm' => 'showForm', // show form when the parent component requests it
		'updateRecordId' => 'updateRecordId', // update the ID of the record being edited/deleted
		'refreshDepartmentDetails' => 'refreshDetails',
		'refreshDepartmentProfile' => 'refreshProfileDetails',
		'refreshCompanyUsers', 'refreshDepartmentUsers',
		'delete'=>'deleteRecord'
	];
	protected $exportDataFile;


	public function deleteRecord()
	{
		// Delete the record from the database using the model
		Company::where('id', $this->recordId)->update(['status' => 2]);
		callLogs($this->recordId,'company',"delete");
		// Emit an event to reset the form and display a confirmation message
		$this->emitSelf('showList', 'Record has been deleted');
	}

	public function render()
	{
		return view('livewire.app.admin.company');
	}
	public function mount($showProfile)
	{
		$this->showProfile = $showProfile;
		if ($showProfile) {
			if(!$this->company)
			$this->company = Company::where('id', request()->companyID)->with(['phones', 'user', 'addresses','logs'])->first()->toArray();
			if(session()->get('isCustomer'))
				$this->isCustomer=true;
		}
	}
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
	public function refreshDetails($companyId, $companyLabel)
	{

		if ($this->counter == 0) {
			$this->companyId = 0;
			$this->companyLabel = $companyLabel;
			$this->dispatchBrowserEvent('refresh-department-details', ['companyId' => $companyId, 'companyLabel' => $companyLabel]);
			$this->counter = 1;
			$this->companyDetails = true;
		} else {
			$this->companyId = $companyId;
			$this->counter = 0;
		}
	}

	public function refreshProfileDetails($departmentId, $departmentLabel)
	{

		if ($this->dcounter == 0) {
			$this->departmentId = 0;
			$this->departmentLabel = $departmentLabel;
			$this->dispatchBrowserEvent('refresh-department-profile', ['departmentId' => $departmentId, 'departmentLabel' => $departmentLabel]);
			$this->dcounter = 1;
			$this->departmentDetails = true;
		} else {
			$this->departmentId = $departmentId;
			$this->dcounter = 0;
		}
	}

	public function refreshCompanyUsers($users_companyId, $users_companyLabel) //for company users
	{
		if ($this->cu_counter == 0) {
			$this->cu_companyId = 0;
			$this->cu_companyLabel = $users_companyLabel;
			$this->dispatchBrowserEvent('refresh-company-users', ['companyId' => $users_companyId, 'companyLabel' => $users_companyLabel]);
			$this->cu_counter = 1;
			$this->cu_companyDetails = true;
		} else {
			$this->cu_companyId = $users_companyId;
			$this->cu_counter = 0;
		}
	}

	public function refreshDepartmentUsers($users_departmentId, $users_departmentLabel) //for company users
	{
		if ($this->du_counter == 0) {
			$this->du_departmentId = 0;
			$this->du_departmentLabel = $users_departmentLabel;
			$this->dispatchBrowserEvent('refresh-department-users', ['departmentId' => $users_departmentId, 'departmentLabel' => $users_departmentLabel]);
			$this->du_counter = 1;
			$this->du_departmentDetails = true;
		} else {
			$this->du_departmentId = $users_departmentId;
			$this->du_counter = 0;
		}
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
