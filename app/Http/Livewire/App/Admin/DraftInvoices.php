<?php

namespace App\Http\Livewire\App\Admin;

use App\Helpers\SetupHelper;
use Livewire\Component;

class DraftInvoices extends Component
{
    public $showForm, $company_id, $counter = 0, $selectedBookingsIds = [], $inv_counter = 0, $exclude_notif = false;
    protected $listeners = ['showList' => 'resetForm', 'openCompanyPendingBookings', 'openCreateInvoice'];
    public $setupValues = [
        // 'accommodations' => ['parameters' => ['Accommodation', 'id', 'name', 'status', 1, 'name', true, 'accommodations', '', 'accommodationsassignProvider', 2]],
        'specializations' => ['parameters' => ['Specialization', 'id', 'name', 'status', 1, 'name', true, 'specializations', '', 'booking_specialization_search_filter', 4]],
        "service_type_ids" => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 5, 'setup_value_label', true, 'service_type_ids', '', 'service_type_idsassignProvider', 4]],
        // 'ethnicity' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 3, 'setup_value_label', true, 'ethnicity', '', 'ethnicityassignProvider', 6]],
        // 'gender' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 2, 'setup_value_label', true, 'gender', '', 'genderassignProvider', 5]],
        // 'certifications' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 8, 'setup_value_label', true, ' certifications', '', ' certificationsassignProvider', 9]],

    ];

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
        $this->setupValues = SetupHelper::loadSetupValues($this->setupValues);

    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm($message=null)
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
