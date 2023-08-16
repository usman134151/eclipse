<?php

namespace App\Http\Livewire\App\Customer;

use App\Models\Tenant\Company;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CompanyProfile extends Component
{
	public $showProfile, $company;
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.customer.company-profile');
    }

    public function mount()
    {
        $this->company = Company::where('id',Auth::user()->company_name)->with(['phones', 'user', 'addresses', 'logs'])->first()->toArray();

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
