<?php

namespace App\Http\Livewire\App\Admin\Provider;

use App\Models\Tenant\ProviderInvoice;
use Livewire\Component;
use Livewire\WithPagination;

class PendingInvoices extends Component
{
    use WithPagination;
    public $showForm, $invoicesData = [], $limit = 10;
    protected $listeners = ['showList' => 'resetForm'];
    public $status = [0 => 'Pending', 1 => 'Accepted', 2 => 'Rejected'];
    public function render()
    {
        return view('livewire.app.admin.provider.pending-invoices', ['data' => $this->fetchData()]);
    }

    public function fetchData()
    {
        return ProviderInvoice::with('user', 'user.userdetail')->paginate($this->limit);
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
