<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\Remittance;
use App\Services\App\InvoiceService;
use Livewire\Component;
use App\Services\App\NotificationService;

class RevertBack extends Component
{
    public $showForm, $invoice = null, $invoices, $isMultiple, $type = 1, $remittance, $remittances;

    protected $listeners = ['revertInvoice', 'revertMultipleInvoice', 'revertRemittance', 'revertMultipleRemittances'];

    public function render()
    {
        return view('livewire.app.common.modals.revert-back');
    }

    public function revertMultipleRemittances($selectedValues = [])
    {
        $this->type = 2;
        $this->isMultiple = true;
        $this->remittances = Remittance::whereIn('id', $selectedValues)->get();
    }

    public function revertMultipleInvoice($selectedValues)
    {
        $this->isMultiple = true;
        $this->invoices = Invoice::all()->whereIn('id', $selectedValues);
    }

    public function revert()
    {
        if ($this->isMultiple) {
            if (count($this->invoices) > 0) {
                foreach ($this->invoices as $invoice) {
                    InvoiceService::revertInvoice($invoice);
                }
            }
        } else {
            if ($this->invoice) {
                InvoiceService::revertInvoice($this->invoice);
            }
            $this->dispatchBrowserEvent('close-invoice-details');  // emit to close modal
        }

        $data['revertInvoiceData'] = $this->invoice;
        // NotificationService::sendNotification('Billing: Invoice Voided (Reverted)', $data , 8);
        $this->emit('showList', 'Invoice reverted successfully');
        $this->emit('revertModalDismissed');  // emit to close modal
    }



    public function revertInvoice($invoice_id)
    {
        $this->invoice = Invoice::find($invoice_id);
    }

    public function revertRemittance($remittanceId)
    {

        $this->type = 2;
        $this->remittance = Remittance::find($remittanceId);
    }


    public function confirmedRevertRemittance()
    {
        if ($this->isMultiple) {
            if (count($this->remittances))
                foreach ($this->remittances as $remittance) {
                    if ($remittance->payment_status == 2) { //if paid, only revert then
                        $remittance->payment_status = 1;
                        $remittance->payment_method = null;
                        $remittance->paid_at = null;
                        $remittance->save();

                        BookingProvider::where('remittance_id', $remittance->id)->update(['paid_at' => null, 'paid_amount' => null, 'payment_method' => null, 'payment_status' => 1]);
                        BookingReimbursement::where('remittance_id', $remittance->id)->update(['paid_at' => null, 'payment_method' => null, 'payment_status' => 1]);
                    }
                }
        } else {
            $this->remittance->payment_status = 1;
            $this->remittance->payment_method = null;
            $this->remittance->paid_at = null;
            $this->remittance->save();

            BookingProvider::where('remittance_id', $this->remittance->id)->update(['paid_at' => null, 'paid_amount' => null, 'payment_method' => null, 'payment_status' => 1]);
            BookingReimbursement::where('remittance_id', $this->remittance->id)->update(['paid_at' => null, 'payment_method' => null, 'payment_status' => 1]);
        }
        $this->emit('close-revert-modal');
        $this->dispatchBrowserEvent('close-remittances-panel');
        $this->emit('showList', 'Remittance reverted successfully');
    }
}
