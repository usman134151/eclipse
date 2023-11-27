<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\Booking;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\InvoiceAttachment;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use PDF;

class InvoiceDetails extends Component
{
    public $showForm, $invoice;
    protected $listeners = ['downloadAttachment'];
    public $status = [2 => ['class' => '', 'title' => 'Paid'], 1 => ['class' => '', 'title' => 'Issued'], 3 => ['class' => 'text-danger', 'title' => 'Overdue'], 4 => ['class' => '', 'title' => 'Partial']];


    public function render()
    {
        return view('livewire.app.common.panels.invoice-details');
    }

    public function mount($invoice_id)
    {
        $this->invoice = Invoice::where('id', $invoice_id)->first();
        $attachment_path = InvoiceAttachment::where('invoice_id', $invoice_id)->first();
        $attachment_path = $attachment_path ? $attachment_path->attachment_path : null;
        $this->invoice->attachment_path = $attachment_path;

    }

    function downloadAttachment($invoice_id = 0)
    {
        $attachment_path = InvoiceAttachment::where('invoice_id', $invoice_id)->first()->attachment_path;
        $filePath = Storage::disk('local')->path($attachment_path);
        if($filePath)
        {

            $filePath = str_replace('/app\tenantabma', '', $filePath);
            
            $fileResponse = response()->download($filePath);
            return $fileResponse;
        }
    }
}
