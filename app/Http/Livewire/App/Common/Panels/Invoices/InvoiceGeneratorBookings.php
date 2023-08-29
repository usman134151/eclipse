<?php

namespace App\Http\Livewire\App\Common\Panels\Invoices;

use App\Models\Tenant\Company;
use Livewire\Component;

class InvoiceGeneratorBookings extends Component
{
    public $showForm, $company, $bookings;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.invoices.invoice-generator-bookings');
    }

    public function mount($company_id)
    {
     $this->company = Company::where('id',$company_id)->first();
     if($this->company->addresses->count())  
        $this->company->address= $this->company->addresses->first()->toArray();
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}
