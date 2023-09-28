<?php

namespace App\Http\Livewire\App\Admin\Accommodation;

use Livewire\Component;
use App\Models\Tenant\ServiceCategory as service_model;
class ServiceCategory extends Component
{
    public $component = 'basic-service-setup';
    public $showForm;
	
    protected $listeners = [
		'showList' => 'resetForm', // Reset form when the parent component shows a list
		'showForm' => 'showForm', // Show form when the parent component requests it
		'delete' => 'deleteRecord', // Delete the record with the specified ID
		'updateRecordId' => 'updateRecordId', // Update the ID of the record being edited / deleted
		'associateService'
	];
    public $recordId;
    public function resetForm($message)
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
        $this->showForm=false;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/accommodation/all-services']);
	}

    public function render()
    {
        return view('livewire.app.admin.accommodation.service-category');
    }

    public function mount()
    {


    }

    function showForm($service = null)
    {
        if ($service) {
			$this->service = $service;
			
			$this->emit('editRecord', $service);
		}
		$this->showForm=true;
        $this->dispatchBrowserEvent('update-url', ['url' => '/admin/accommodation/create-service']);
		$this->dispatchBrowserEvent('refreshSelects');
    }
    public function deleteRecord()
	{
		// Delete the record from the database using the model
		service_model::where('id', $this->recordId)->update(['status'=>2]);
		// Emit an event to reset the form and display a confirmation message
		$this->emitSelf('showList', 'Record has been deleted');
	}
    public function updateRecordId($id)
	{
		$this->recordId = $id;
	}
    public function switch($component)
	{
		$this->component = $component;
	}
	public function associateService($service){
		$this->emit('assoicateService',$service);
		
	}
}
