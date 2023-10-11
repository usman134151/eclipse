<?php

namespace App\Http\Livewire\App\Admin;

use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
use Livewire\Component;

class DraftInvoices extends Component
{
    public $showForm, $company_id, $counter = 0, $selectedBookingsIds = [], $inv_counter = 0, $exclude_notif = false;
    protected $listeners = ['showList' => 'resetForm', 'openCompanyPendingBookings', 'openCreateInvoice', ];
   

    public function render()
    {
        return view('livewire.app.admin.draft-invoices');
    }

    public function openCreateInvoice($selectedBookingsIds)
    {

        if ($this->inv_counter == 0) {
            $this->selectedBookingsIds = [];
            $this->dispatchBrowserEvent('refresh-create-invoice', ['ids' => $selectedBookingsIds]);
            $this->inv_counter = 1;
        } else {
            $this->selectedBookingsIds = $selectedBookingsIds;

            $this->inv_counter = 0;
            $this->dispatchBrowserEvent('refreshSelects');
            $this->dispatchBrowserEvent('refreshSelects2');
        }
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
    public function resetForm($message = null)
    {
        $this->showForm = false;
        if ($message) {
            // Emit an event to display a success message using the SweetAlert package
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Success',
                'text' => $message,
            ]);
        }
    }
}
