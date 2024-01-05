<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Company;
use App\Models\Tenant\Industry;
use App\Services\App\CompanyService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Validation\Rule;

class AddNewCompany extends Component
{
    public $showForm = false;
    public $company;
    public $industries;

    public function render()
    {
        return view('livewire.app.common.modals.add-new-company');
    }

    public function mount(Company $company)
    {
        $this->industries = Industry::all();
        $this->company = $company;
    }

    public function rules()
    {
        return [
            'company.name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('companies', 'name')
            ],
            'company.industry_id' => 'required',
        ];
    }

    public function addCompany()
    {
        $this->validate();
        $this->company->added_by = Auth::user()->id;
        $companyService = new CompanyService;

        $this->company = $companyService->createCompany($this->company, [], []);
        $this->showForm = false;
        $this->emit('updateCompanies');  // emit to update company list
        $this->emit('companyModalDismissed');  // emit to close modal
        $this->emit('addupdatedCompany',  $this->company->id); // emit to update selected company

        $this->company = new Company;
        // Emit an event to display a success message using the SweetAlert package
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => 'Success',
            'text' => "Company added Successfully",
        ]);
    }

    public function showForm()
    {
        $this->showForm = true;
    }

    public function resetForm()
    {
        $this->showForm = false;
    }
}
