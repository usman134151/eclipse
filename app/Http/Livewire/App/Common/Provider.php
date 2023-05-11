<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Services\ExportDataFile;

class Provider extends Component
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
        return $this->exportDataFile->generateExcelTemplate();
    }

	public function render()
	{
		return view('livewire.app.common.provider');
	}

	public function mount() {}

	function showForm()
	{
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/provider/create-provider']);
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
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/provider']);
	}

	public function showProfile()
	{
		$this->showProfile = true;
	}
    public function delete()
	{
		$this->dispatchBrowserEvent('swal:modal', [
			'type' => 'success',
			'title' => 'Team Deleted Successfully!',
			'text' => 'This is a sweet alert!',
		]);
	}
    public function updateRecordId($id)
	{
		$this->recordId = $id;
	}
}
