<?php

namespace App\Http\Livewire\App\Admin;

use Livewire\Component;

class DraftInvoices extends Component
{
    public $showForm, $company_id,$counter=0;
    protected $listeners = ['showList' => 'resetForm', 'openCompanyPendingBookings'];

    public function render()
    {
        return view('livewire.app.admin.draft-invoices');
    }

    public function openCompanyPendingBookings($company_id)
    {
        if ($this->counter == 0) {
            $this->company_id = 0;
            $this->dispatchBrowserEvent('refresh-company-pending-bookings', ['company_id' => $company_id]);
            $this->counter = 1;
        } else {
            $this->company_id = $company_id;
            $this->counter = 0;
        }
    }
    public function mount()
    {
    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}
