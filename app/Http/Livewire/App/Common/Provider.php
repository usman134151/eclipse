<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Services\ExportDataFile;

class Provider extends Component
{
	public $showForm;
	public $showProfile;
	public $importFile;
	public $status;
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

	public function importFile(){
		$this->importFile=true;

	}

	public function mount() {

	}

	function showForm($user = null)
	{
        if ($user) {
			$this->user = $user;
			$this->emit('editRecord', $user);
		}
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/provider/create-provider']);
        $this->dispatchBrowserEvent('refreshSelects');
	}

	public function resetForm($message='')
	{
		$this->showForm=false;
		$this->showProfile = false;
		$this->importFile=false;
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

	public function showProfile($user=null)
	{
        if ($user) {
			$this->user = $user;

			$this->emit('showDetails', $user);
		}

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
