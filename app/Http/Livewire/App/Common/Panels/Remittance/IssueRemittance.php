<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use App\Http\Livewire\App\Common\Modals\BookingReimbursements;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\ProviderInvoice;
use App\Models\Tenant\ProviderRemittancePayment;
use App\Models\Tenant\Remittance;
use App\Models\Tenant\User;
use Carbon\Carbon;
use Livewire\Component;

class IssueRemittance extends Component
{
    public $showForm, $list = [], $provider, $selectedBookings = [], $selectedRMB = [], $selectedPayments = [], $totalAmount = 0;
    protected $listeners = ['showList' => 'resetForm', 'issueRemittances'];
    public $selectedInvoices = [];

    public function render()
    {
        return view('livewire.app.common.panels.remittance.issue-remittance');
    }

    public function mount($selectedRows, $providerId)
    {
        $this->provider = User::find($providerId);
        foreach ($selectedRows as $index => $row) {
            // dd(key_exists('reimbursement_id', $row));
            if (key_exists('reimbursement_id', $row)) {
                // fetch reimbursement data
                $rmb =  BookingReimbursement::where('id', $row['reimbursement_id'])->first()->toArray();
                $reason = '';
                if (!empty($rmb['reason'])) {
                    $reason = json_decode($rmb['reason'], true);
                    $rmb['reason'] = $reason['type'] === 'Other' ? $reason['details'] : $reason['type'];
                }
                $this->selectedRMB[] = $rmb['id'];
                $this->list[$index][0] = $rmb;
            } elseif (key_exists('payment_id', $row)) {
                // fetch payment data
                $payment =  ProviderRemittancePayment::where('id', $row['payment_id'])->first()->toArray();
                $payment['payment'] = true;

                $this->selectedPayments[] = $payment['id'];
                $this->list[$index][0] = $payment;
            } elseif (key_exists('invoice_id', $row)) {

                $invoiceRecords = BookingProvider::where(['provider_id' => $providerId, 'invoice_id' => $row['invoice_id']])->with([
                     'booking_service', 'booking_service.service', 'booking', 'booking.company',
                    'booking.customer', 'booking.booking_supervisor', 'booking.billing_manager', 'provider_invoice'
                ])->get()->toArray();

                $this->list[$index][0] = $invoiceRecords;
                $this->list[$index]['provider_invoice'] = ProviderInvoice::find($row['invoice_id'])->toArray();
                $this->selectedInvoices[] = $row['invoice_id'];
            } else {
                //fetch booking details + associated reimbursements


                $bookingRecords = BookingProvider::where(['provider_id' => $providerId, 'booking_id' => $row['booking_id']])->with([
                    'reimbursements', 'booking_service', 'booking_service.service', 'booking', 'booking.company',
                    'booking.customer', 'booking.booking_supervisor', 'booking.billing_manager'
                ])->get()->toArray();


                $sum = 0;
                foreach ($bookingRecords as $record) {
                    if ($record['is_override_price'])
                        $sum = $sum + $record['override_price'];
                    else
                        $sum = $sum + $record['total_amount'];
                }

                //accesing reimbursement reason 
                foreach ($bookingRecords[0]['reimbursements'] as $index => $rmb) {
                    $reason = '';
                    if (!empty($rmb['reason'])) {
                        $reason = json_decode($rmb['reason'], true);
                        $bookingRecords[0]['reimbursements'][$index]['reason'] = $reason['type'] === 'Other' ? $reason['details'] : $reason['type'];
                    }
                    $this->selectedRMB[] = $rmb['id'];
                    // $sum = $sum + $rmb['amount'];

                }

                $bookingRecords[0]['sum'] = $sum;

                $this->list[$index] = $bookingRecords;
                $this->selectedBookings[] = isset($row['invoice_id']) ? $row['invoice_id'] : $row['booking_id'];
            }
        }
        // dd($this->list);
    }
    public function createRemittance()
    {
        $now = Carbon::now();
        $remittanceArr = [
            'number' => genetrateRemittanceNumber($this->provider),
            'provider_id' => $this->provider->id,
            'amount' => $this->totalAmount,
            'outstanding_amount' => $this->totalAmount,
            'payment_status' => 1, 'payment_method' => null,
            'issued_at' => $now,
        ];
        $remittance = Remittance::create($remittanceArr);
        // foreach ($this->selectedBookings as $bookingId) {
        BookingProvider::where('provider_id', $this->provider->id)->whereIn('booking_id', $this->selectedBookings)->update(['remittance_id' => $remittance->id]);
        // }
        // foreach ($this->selectedRMB as $rmbId) {
        BookingReimbursement::where('provider_id', $this->provider->id)->whereIn('id', $this->selectedRMB)->update(['remittance_id' => $remittance->id, 'issued_at' => $now]);
        // }
        // foreach ($this->selectedPayments as $paymentId) {
        ProviderRemittancePayment::whereIn('id', $this->selectedPayments)->update(['remittance_id' => $remittance->id, 'payment_status' => 1]);
        // }

        // foreach ($this->selectedInvoices as $invoiceId) {
        ProviderInvoice::whereIn('id', $this->selectedInvoices)->update(['remittance_id' => $remittance->id, 'invoice_status' => 1]);
        BookingProvider::where('provider_id', $this->provider->id)->whereIn('invoice_id', $this->selectedInvoices)->update(['remittance_id' => $remittance->id]);

        // }

        $this->dispatchBrowserEvent('issued-remittance');
        $this->emit('showList', 'Remittance created successfully');
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
