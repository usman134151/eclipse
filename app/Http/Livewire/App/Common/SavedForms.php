<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class SavedForms extends Component
{
	public $showForm,$counter=0, $formId, $formLabel,$formDeleteable,$formDetails=false;
	protected $listeners = ['showList'=>'resetForm',
		'refreshDepartmentDetails' => 'refreshDetails'
	];

	public function refreshDetails($formId, $formLabel)
	{  
		if ($this->counter == 0) {
			$this->formId = 0;
			$this->formLabel = $formLabel;
			$this->dispatchBrowserEvent('refresh-department-details', ['formId' => $formId, 'formLabel' => $formLabel]); 
			$this->counter = 1;
			$this->formDetails = true;
			$this->formDeleteable = $formDeleteable; 


		} else {
			$this->formId = $formId;
			$this->counter = 0;
			$this->formDeleteable = $formDeleteable;   

		}

	}

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm($message)
	{
		$this->showForm=false;
		if ($message) {
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/customize-form']);

	}

	public function mount()
	{}

	public function render()
	{
		return view('livewire.app.common.saved-forms');
	}

	public function updateVal($attrName, $val)
     {
        if($attrName=='user_dob'){
            $this->user['user_dob']=$val;
        }
        else
         $this->userdetail[$attrName] = $val;


     }
}
