<?php

namespace App\Http\Livewire\App\Customer;

use Livewire\Component;

class CompanyProfile extends Component
{
	public $showProfile;
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.customer.company-profile');
    }

    public function mount()
    {

    }

    function showForm()
    {
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }
    public function showProfile()
	{
		$this->showProfile = true;
	}

}
