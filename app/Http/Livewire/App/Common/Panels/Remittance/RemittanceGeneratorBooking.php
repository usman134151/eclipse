<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\ProviderInvoice;
use App\Models\Tenant\ProviderRemittancePayment;
use App\Models\Tenant\Remittance;
use App\Models\Tenant\User;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class RemittanceGeneratorBooking extends Component
{
    use WithPagination;
    public $showForm, $provider, $data = [], $selectedBookings = [], $showError = false, $providerData = [];
    protected $listeners = ['showList' => 'resetForm', 'addToRemittance' => 'addToRemittance'];
    public $bookings = [];
    public $providerId, $bookingID, $type;
    public $perPage = 20;
    public function render()
    {
        $this->applyFilters();
        $dataCollection = collect($this->data);
        $this->bookings['bookingData'] = $this->paginate($dataCollection, $this->perPage);
        return view('livewire.app.common.panels.remittance.remittance-generator-booking')
            ->with('bookings', $this->bookings);
    }
    private function paginate(Collection $items, mixed $perPage = null, mixed $page = null, array $options = [], mixed $path = null)
    {
        $perPage = is_null($perPage) ? 25 : $perPage;
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $paginator = new LengthAwarePaginator(
            $items->forPage($page, $perPage),
            $items->count(),
            $perPage,
            $page,
            $options
        );
        if (!is_null($path)) {
            $paginator->setPath($path);
        }
        return $paginator;
    }

    public function mount($providerId)
    {
        $this->provider = User::where('id', $providerId)->with('userdetail')->first()->toArray();
        // TODO :: Add check to include bookings that have been added to a remittance, yet reimbursement is added later
        $this->providerId = $providerId;
        $this->data = $this->dataSource($providerId);
        $this->providerData['total_invoiced'] = Remittance::where('provider_id', $providerId)->where('payment_status', 1)->sum('amount');
        $this->providerData['total_pending'] = BookingReimbursement::where('provider_id', $providerId)->where('status', 0)->sum('amount');
        $nextPayment = Remittance::where('provider_id', $providerId)->where('payment_status', 1)->where('payment_scheduled_at', '>', now())->orderBy('payment_scheduled_at')->first();
        $this->providerData['payment_date'] = $nextPayment ? $nextPayment->payment_scheduled_at : null;
    }

    public function dataSource($providerId)
    {
        $bookings = BookingProvider::where(['provider_id' => $providerId, 'payment_status' => 0, 'remittance_id' => 0])
            ->whereHas('booking', function ($query) {
                $query->where('is_paid', 0)
                    ->where('is_closed', 1)
                    ->whereRaw("DATE(booking_end_at) < '" . Carbon::now()->toDateString() . "'");
            })
            ->where('booking_providers.invoice_id', null)
            ->with(['booking', 'reimbursements'])
            ->select('booking_id')
            ->selectRaw('SUM( CASE WHEN is_override_price = 1
               THEN override_price
               ELSE total_amount
          END ) AS amount')
            ->groupBy('booking_id')->get()->toArray();
        $reimbursements = BookingReimbursement::where(['provider_id' => $providerId, 'status' => 1, 'booking_id' => null, 'payment_status' => 0, 'remittance_id' => 0])->select(['id as reimbursement_id', 'reimbursement_number', 'amount', 'booking_id'])->get()->toArray();
        $payments = ProviderRemittancePayment::where(['provider_id' => $providerId, 'payment_status' => 0, 'remittance_id' => null])->select(['id as payment_id', 'number', 'total_amount as amount'])->get()->toArray();
        $invoices = ProviderInvoice::where(['provider_id' => $providerId, 'invoice_status' => 1, 'remittance_id' => null])
            ->select(['id as invoice_id', 'invoice_number', 'total_amount as amount'])->get()->toArray();
        return array_merge($bookings, $reimbursements, $payments, $invoices);
    }

    public function applyFilters()
    {
        $this->data = $this->dataSource($this->providerId);
        if (!empty($this->bookingID)) {
            if (count($this->data) > 0) {
                foreach ($this->data as $key => $row) {
                    if (!isset($row['booking']['booking_number']) || $row['booking']['booking_number'] != $this->bookingID) {
                        unset($this->data[$key]);
                    }
                }
            }
        }
        if ($this->type == 'reimbursement') {
            if (count($this->data) > 0) {
                foreach ($this->data as $key => $row) {
                    if (!isset($row['reimbursement_id'])) {
                        unset($this->data[$key]);
                    }
                }
            }
        } elseif ($this->type == 'payment') {
            if (count($this->data) > 0) {
                foreach ($this->data as $key => $row) {
                    if (!isset($row['payment_id'])) {
                        unset($this->data[$key]);
                    }
                }
            }
        } elseif ($this->type == 'invoice') {
            if (count($this->data) > 0) {
                foreach ($this->data as $key => $row) {
                    if (!isset($row['invoice_id'])) {
                        unset($this->data[$key]);
                    }
                }
            }
        }
    }

    public function resetFilters()
    {
        $this->bookingID = null;
        $this->type = null;
        $this->data = [];
        $this->mount($this->providerId);
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
