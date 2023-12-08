<?php

namespace App\Http\Livewire\App\Admin;

use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
use Livewire\Component;

class DraftInvoices extends Component
{
    public $showForm, $company_id, $counter = 0, $selectedBookingsIds = [], $inv_counter = 0, $exclude_notif = false;
    protected $listeners = ['showList' => 'resetForm', 'openCompanyPendingBookings', 'openCreateInvoice','updateVal' => 'setCompanyDetails' ];
    public $bmanagers = [];
    public $filter_companies, $filter_bmanager, $filter_payment_status, $filterRadio, $filter_select_Date;
        public $setupValues = [
        'companies' => ['parameters' => ['Company', 'id', 'name', 'status', 1, 'name', false, 'filter_companies', '', 'filter_companies', 2]],
    ];

    public function render()
    {
        return view('livewire.app.admin.draft-invoices');
    }

    public function setCompanyDetails($attrName, $val)
    {
        if ($attrName == 'filter_companies') {
            // fetch billing managers for this company 
            $this->bmanagers = User::where('company_name', $val)->whereHas('roles', function ($query) {
                $query->where('role_id', 9);
            })->select(['users.name', 'users.id'])->get();

        }
        $this->$attrName = $val;
    }

    public function resetFilters(){
        $this->emit('updateVal', "filter_bmanager", null);
        $this->emit('updateVal', "filter_companies", null);
        $this->emit('updateVal', "filter_payment_status", null);
        $this->emit('updateVal', "filter_select_Date", null);
        $this->emit('updateVal', "filterRadio", null);
    }

    public function applyFilters()
    {
        $this->emit('updateVal', "filter_bmanager", $this->filter_bmanager);
        $this->emit('updateVal', "filter_companies", $this->filter_companies);
        $this->emit('updateVal', "filter_payment_status", $this->filter_payment_status);
        $this->emit('updateVal', "filter_select_Date", $this->filter_select_Date);
        $this->emit('updateVal', "filterRadio", $this->filterRadio);
    }

    public function applyRadiofilter($name,$val)
    {
        // dd($name,$val);
        $this->emit('updateVal', $name, $val);
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
