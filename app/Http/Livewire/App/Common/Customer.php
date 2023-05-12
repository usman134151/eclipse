<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Services\ExportDataFile;

class Customer extends Component
{
	public $showForm;
	public $showProfile;
	

	protected $listeners = [
		'showList' => 'resetForm',
		'showProfile' => 'showProfile',
		'showForm' => 'showForm', // show form when the parent component requests it
		'updateRecordId' => 'updateRecordId', // update the ID of the record being edited/deleted
	];
	protected $exportDataFile;

    public function __construct()
    {
        $this->exportDataFile = new ExportDataFile;
    }

    public function downloadExportFile()
    {
        return $this->exportDataFile->generateExcelTemplateCustomer();
    }

	public function render()
	{
		return view('livewire.app.common.customer');
	}

	public function mount() {}

	function showForm($user=null)
	{
		if ($user) {
			$this->user = $user;
           
			$this->emit('editRecord', $user);
		}
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/customer/create-customer']);
		$this->dispatchBrowserEvent('refreshSelects');
	}

	public function resetForm($message='')
	{
		$this->showForm=false;
		$this->showProfile = false;
		if ($message) {
			$this->confirmationMessage = $message;
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/customer']);
	}

	public function showProfile($user=null)
	{
		if ($user) {
			$this->user = $user;
           
			$this->emit('showDetails', $user);
		}

		$this->showProfile = true;
	}
	
	// function to update the ID of the record being edited/deleted
	public function updateRecordId($id)
	{
		$this->recordId = $id;
	}
}