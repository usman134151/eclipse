<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\InvoicePayment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PayInvoice extends Component
{
    public $showForm, $invoice, $payment = [];
    protected $listeners = ['payInvoiceId'];
    // protected $method =[2=>'by_check',3=>'by_cash',4=>'by_bank_transfer'];

    protected $rules = [
        'payment.payment_method' => 'required',
        'payment.payment_date' => 'required|data|date_format:m/d/Y',
        'payment.payment_amount' => 'required',
    ];
    public function payInvoiceId($invoice_id)
    {
        $this->invoice = Invoice::find($invoice_id);
        $this->payment['payment_amount'] = $this->invoice->outstanding_amount;
        // dd($this->invoice);
    }
    public function render()
    {
        return view('livewire.app.common.modals.pay-invoice');
    }



    public function payInvoice()
    {
        // $this->validate();
        if ($this->invoice) {
            $invoice_id = $this->invoice->id;

            if ($this->invoice->total_price > 0) {
                if ($this->payment['payment_method'] != 1)
                    $this->invoice->invoice_status = "3";

                if ($this->invoice->payment_method == '1') {
                    // $res['success']     = false;
                    // $res['error_message']   = __('lang.inv_alrey_paid');
                    // echo json_encode($res);
                    // die();
                    //already Paid 
                }

                $payment_amount = $this->payment['payment_amount'];
                $payment_date = $this->payment['payment_date'];
                $outAmount = $this->invoice->outstanding_amount - $payment_amount;
                if ($payment_amount) {
                    $payment_id = InvoicePayment::insertGetId(
                        [
                            'invoice_id' => $invoice_id,
                            'paid_amount' => isset($payment_amount) ? $payment_amount : '',
                            'payment_method' => $this->payment['payment_method'],
                            'outstanding_amount' => isset($outAmount) ? $outAmount : '',
                            'paid_date' => isset($payment_date) ? $payment_date : '',
                            'created_by' => Auth::user()->id,
                            'approved_by_admin' => '1',
                            'approved_by' => Auth::user()->id,
                            'created_at' => now()
                        ]
                    );
                    Invoice::where('id', $invoice_id)->decrement('outstanding_amount', $payment_amount);

                    if ($outAmount == 0) {
                        $this->invoice->invoice_status = "2";
                        $this->invoice->save();
                        Booking::where('invoice_id', $invoice_id)->update(['invoice_status' => '2']);
                    }
                    else
                        $this->invoice->invoice_status = "4";



                    $this->invoice->supervisor_payment_status = "1";


                    $this->invoice->payment_method = $this->payment['payment_method'];
                    // $this->invoice->payment_reference = isset($stripe) ? $stripe : '';
                    $this->invoice->paid_on = Carbon::now();
                    $this->invoice->save();
                }
            }
        }
        $this->emit('payInvoiceModalDismissed');  // emit to close modal
        $this->dispatchBrowserEvent('close-invoice-details');  // emit to close modal
        $this->emit('showList', 'Payment Recorded successfully');
    }

    function mount()
    {
        $this->payment = ['payment_method' => 4, 'notes' => '', 'payment_date' => Carbon::today()->format('m/d/Y')];
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}
