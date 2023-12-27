<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\ProviderRemittancePayment;
use App\Models\Tenant\Remittance;
use App\Models\Tenant\User;
use Carbon\Carbon;
use Livewire\Component;

class RemittanceGeneratorBooking extends Component
{
    public $showForm, $provider, $data = [], $selectedBookings = [], $showError = false, $providerData =[];
    protected $listeners = ['showList' => 'resetForm', 'addToRemittance'];

    public function render()
    {
        return view('livewire.app.common.panels.remittance.remittance-generator-booking');
    }

    public function mount($providerId)
    {
        $this->provider = User::where('id', $providerId)->with('userdetail')->first()->toArray();
        // 'check_in_status'=>3, TODO :: ADD CONDITION WHEN AUTO-CLOSE ENABLED
        // TODO :: Add check to include bookings that have been added to a remittance, yet reimbursement is added later
        $bookings = BookingProvider::where(['provider_id' => $providerId, 'payment_status' => 0, 'remittance_id' => 0])
            ->whereHas('booking', function ($query) {
                $query->where('is_paid', 0)
                    ->whereRaw("DATE(booking_end_at) < '" . Carbon::now()->toDateString() . "'");
            })
            ->with(['booking', 'reimbursements'])
            ->select('booking_id')
            ->selectRaw('SUM( CASE WHEN is_override_price = 1
               THEN override_price
               ELSE total_amount
          END ) AS amount')
            ->groupBy('booking_id')
            ->get()->toArray();
        //fetching unassociated approved reimbursements
        $reimbursements = BookingReimbursement::where(['provider_id' => $providerId, 'status' => 1, 'booking_id' => null, 'payment_status' => 0, 'remittance_id' => 0])->select(['id as reimbursement_id', 'reimbursement_number', 'amount', 'booking_id'])->get()->toArray();
        $payments = ProviderRemittancePayment::where(['provider_id' => $providerId, 'payment_status' => 0, 'remittance_id' => null])->select(['id as payment_id', 'number', 'total_amount as amount'])->get()->toArray();
        $invoices = Invoice::where(['provider_id' => $providerId, 'invoice_status' => '0'])
            ->select(['id as invoice_id', 'invoice_number', 'total_price as amount'])->get()->toArray();
        // dd($invoices);

        $this->data = array_merge($bookings, $reimbursements, $payments, $invoices);

        $this->providerData['total_invoiced'] = Remittance::where('provider_id' , $providerId)->where('payment_status',1)->sum('amount');
        $this->providerData['total_pending'] = BookingReimbursement::where('provider_id' , $providerId)->where('status',0)->sum('amount');
        $nextPayment = Remittance::where('provider_id' , $providerId)->where('payment_status',1)->where('payment_scheduled_at', '>', now())->orderBy('payment_scheduled_at')->first();
        $this->providerData['payment_date'] = $nextPayment ? $nextPayment->payment_scheduled_at : null;
    }

    public function addToRemittance()
    {
        if (count($this->selectedBookings)) {
            $this->showError = false;


            $selectedRows = [];
            foreach ($this->selectedBookings as $index => $rowIndex) {
                $selectedRows[$index] = $this->data[$rowIndex];
            }
            $this->dispatchBrowserEvent('open-issue-remittance-panel');
            $this->emit('openIssueRemitancesPanel', $selectedRows);
        } else
            $this->showError = true;
        // dd($selectedRows);
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
