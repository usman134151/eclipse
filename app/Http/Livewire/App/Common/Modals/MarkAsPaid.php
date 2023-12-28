<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\ProviderInvoice;
use App\Models\Tenant\ProviderRemittancePayment;
use App\Models\Tenant\Remittance;
use Carbon\Carbon;
use Livewire\Component;

class MarkAsPaid extends Component
{
    public $showForm, $payment = ['method' => 0], $totalPrice = 0, $remittance, $isMultiple = false, $remittances ;
    protected $listeners = ['makeIndvidualPayment', 'markAsPaidMultipleRemittances'];

    public function makeIndvidualPayment($remittanceId)
    {
        $this->remittance = Remittance::find($remittanceId);
        $this->payment['amount'] = $this->remittance->amount;
        $this->payment['method'] = 0;
    }

    public function markAsPaidMultipleRemittances($selectedValues, $total)
    {
        $this->isMultiple = true;
        $this->remittances = Remittance::whereIn('id', $selectedValues)->get();
        $this->payment['amount'] = $total;
        $this->payment['method'] = 0;
        // dd($total);
    }
    protected $rules = [
        'payment.method' => 'required',
        'payment.date' => 'required|data|date_format:m/d/Y',
        'payment.amount' => 'required',
    ];
    public function render()
    {
        return view('livewire.app.common.modals.mark-as-paid');
    }

    public function save()
    {
        $date = Carbon::parse($this->payment['date']);

        if ($this->isMultiple) {
            if (count($this->remittances)) {
                $method = 0;
                if ($this->payment['method'] == 0)
                    if ($this->remittances->first()->paymentPreference)
                        $method = $this->remittances->first()->paymentPreference->method;
                    else
                        $method = 0;
                else
                    $method = $this->payment['method'];
                foreach ($this->remittances as $remittance) {

                    $remittance->payment_status = 2;

                    $remittance->paid_at = $date;
                    $remittance->payment_method = $method;

                    $remittance->save();

                    BookingProvider::where('remittance_id', $remittance->id)->update(['paid_at' => $date, 'paid_amount' => $remittance->amount, 'payment_method' => $method, 'payment_status' => 2]);
                    BookingReimbursement::where('remittance_id', $remittance->id)->update(['paid_at' => $date, 'payment_method' => $method, 'payment_status' => 2]);
                    ProviderRemittancePayment::where('remittance_id', $remittance->id)->update(['paid_at' => $date, 'payment_method' => $method, 'payment_status' => 2]);
                    ProviderInvoice::where('remittance_id', $remittance->id)->update(['paid_at' => $date, 'payment_method' => $method, 'payment_status' => 2]);
                
                }
            }
        } else {
            $this->remittance->payment_status = 2;
            if ($this->payment['method'] == 0)
                if ($this->remittance->paymentPreference)
                    $this->remittance->payment_method = $this->remittance->paymentPreference->method;
                else
                    $this->remittance->payment_method = 0;
            else
                $this->remittance->payment_method = $this->payment['method'];
            $this->remittance->paid_at = $date;

            $this->remittance->save();

            BookingProvider::where('remittance_id', $this->remittance->id)->update(['paid_at' => $date, 'paid_amount' => $this->payment['amount'], 'payment_method' => $this->remittance->payment_method, 'payment_status' => 2]);
            BookingReimbursement::where('remittance_id', $this->remittance->id)->update(['paid_at' => $date, 'payment_method' => $this->remittance->payment_method, 'payment_status' => 2]);
            ProviderRemittancePayment::where('remittance_id', $this->remittance->id)->update(['paid_at' => $date, 'payment_method' =>  $this->remittance->payment_method, 'payment_status' => 2]);
            ProviderInvoice::where('remittance_id', $this->remittance->id)->update(['paid_at' => $date, 'payment_method' => $this->remittance->payment_method, 'payment_status' => 2]);
        
        }
        $this->emit('close-mark-as-paid');

        $this->dispatchBrowserEvent('close-remittances-panel');
        $this->emit('showList', 'Remittance marked as paid successfully');
    }

    public function mount()
    {
        $this->payment = ['method' => 0, 'amount' => 0.0, 'date' => Carbon::today()->format('m/d/Y')];
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
