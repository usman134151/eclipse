<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;

class Teams extends Component
{
    public $showForm;
    public $showProfile;
    public $listTitle="Provider Teams";
    protected $listeners = [
        'showForm' => 'showForm', // show form when the parent component requests it
        'showList' => 'resetForm', // Reset form when the parent component shows a list
    ];

    public function render()
    {
        return view('livewire.app.admin.teams');
    }

    public function mount()
    {


    }
    // Reset the form and display a confirmation message
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
		// Set the showForm property to false to hide the form
        $this->showForm=false;
        $this->showProfile = false;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/teams']); //updated by Amna Bilal to set url
	}

    function showForm()
    {
       $this->showForm=true;
       $this->dispatchBrowserEvent('update-url', ['url' => '/admin/teams/create']);  //updated by Amna Bilal to set url

       $this->dispatchBrowserEvent('refreshSelects');
    }


    public function showProfile()
	{
		$this->showProfile = true;
	}

}
