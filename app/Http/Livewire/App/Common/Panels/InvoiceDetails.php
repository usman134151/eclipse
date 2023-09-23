<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\Invoice;
use Livewire\Component;

class InvoiceDetails extends Component
{
    public $showForm, $invoice;
    protected $listeners = [];
    public $status = [2 => ['class' => '', 'title' => 'Paid'], 1 => ['class' => '', 'title' => 'Issued'], 3 => ['class' => 'text-danger', 'title' => 'Overdue'], 4 => ['class' => '', 'title' => 'Partial']];


    public function render()
    {
        return view('livewire.app.common.panels.invoice-details');
    }

    public function mount($invoice_id)
    {
        $this->invoice = Invoice::where('id', $invoice_id)->first();
    }
}
