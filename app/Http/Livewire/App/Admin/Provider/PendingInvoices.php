<?php

namespace App\Http\Livewire\App\Admin\Provider;

use App\Models\Tenant\ProviderInvoice;
use Livewire\Component;
use Livewire\WithPagination;

class PendingInvoices extends Component
{
    use WithPagination;
    public $showForm, $invoicesData = [], $limit = 10, $counter=0,$invoiceId = null;
    protected $listeners = ['showList' => 'resetForm', 'openProviderInvoiceDetails'];
    public $status = [0 => 'Pending', 1 => 'Accepted', 2 => 'Rejected'];
    public function render()
    {
        return view('livewire.app.admin.provider.pending-invoices', ['data' => $this->fetchData()]);
    }


    public function openProviderInvoiceDetails($invoiceId)
    {
        if ($this->counter == 0) {
            $this->invoiceId = 0;
            $this->dispatchBrowserEvent('provider-invoice-details', ['invoiceId' => $invoiceId]);
            $this->counter = 1;
        } else {
            $this->invoiceId = $invoiceId;
            $this->counter = 0;
        }
    }
    public function fetchData()
    {
        return ProviderInvoice::with('user', 'user.userdetail')->orderBy('id','DESC')->paginate($this->limit);
    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm($message)
    {
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
