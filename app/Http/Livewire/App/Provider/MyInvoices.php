<?php

namespace App\Http\Livewire\App\Provider;

use App\Models\Tenant\ProviderInvoice;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class MyInvoices extends Component
{
    use WithPagination;
    public $showForm, $limit = 10, $selectedInvoices=[], $invoiceId=0,$counter=0;
    protected $listeners = ['showList' => 'resetForm', 'openProviderInvoiceDetails'];
    public $status = [0=>"Pending",1=>'Approved',2=>'Rejected'];

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
    public function render()
    {
        return view('livewire.app.provider.my-invoices', ['myInvoices' => $this->fetchData()]);
    }

    public function fetchData()
    {
        return ProviderInvoice::where('provider_id', Auth::id())
            ->with('user', 'user.userdetail')->orderBy('id', 'DESC')->paginate($this->limit);
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
