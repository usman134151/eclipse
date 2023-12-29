<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\ProviderRemittancePayment;
use App\Models\Tenant\Remittance;
use App\Models\Tenant\User;
use App\Services\PdfService;
use Livewire\Component;
use PDF;
class Payment extends Component
{
    public $showForm, $provider, $remittances, $total=0, $stats=[];
    protected $listeners = ['showList' => 'resetForm', 'downloadPdf' => 'createPaymentPDF'];
    public $status = [2 => ['code' => '/css/provider.svg#green-dot', 'title' => 'Paid'], 1 => ['code' => '/css/common-icons.svg#blue-dot', 'title' => 'Issued'], 0 => ['code' => '/css/provider.svg#red-dot', 'title' => 'Pending']];
    public $selectedRemittance = [], $isSelectAll = false;

    protected $pdfService;

    public function __construct()
    {
        $this->pdfService = new PdfService;
    }

    public function render()
    {
        return view('livewire.app.common.panels.remittance.payment');
    }

    public function revertAll(){
        $this->emit('revertMultipleRemittances',$this->selectedRemittance);
    }

    public function markAsPaidAll(){
        $this->emit('markAsPaidMultipleRemittances', $this->selectedRemittance, $this->total);
    }
    public function selectAll()
    {
        if ($this->isSelectAll)
            $this->selectedRemittance   = array_column($this->remittances, 'id'); 
        else
            $this->selectedRemittance = [];
    }

    public function mount($providerId)
    {
        $this->provider = User::where('id', $providerId)->with(['userdetail', 'paymentPreference'])->first();
        $remittances = Remittance::where('provider_id', $providerId)->orderBy('issued_at', 'desc')->get();

        $this->stats['totalPaid'] = $remittances->where('provider_id',$providerId)->where('payment_status',2)->sum('amount');
        $this->stats['totalPending'] = $remittances->where('provider_id',$providerId)->where('payment_status',1 )->sum('amount');
        $this->stats['totalOverDue'] = $remittances->where('provider_id',$providerId)->sum('amount')-$this->stats['totalPaid'];
        $this->remittances = $remittances->toArray();

    }

    public function createPaymentPDF($remittanceId)
    {
        $remittance = Remittance::where('id', $remittanceId)->first()->toArray();
        $rmb = BookingReimbursement::where(['remittance_id' => $remittance['id']])->with('booking')->select(['reimbursement_number as number', 'amount', 'payment_status','booking_id'])->get()->toArray();
        $bookings = BookingProvider::where(['remittance_id' => $remittance['id']])
        ->select(['total_amount', 'override_price', 'is_override_price', 'payment_status','booking_id','booking_service_id'])
        ->with(['booking','booking.customer','booking_service', 'booking_service.service'])->get()->toArray();
        $payments = ProviderRemittancePayment::where(['remittance_id' => $remittance['id']])->select(['id as payment_id','number', 'total_amount as amount', 'payment_status'])->get()->toArray();

        $datalist=array_merge($rmb,$bookings, $payments);
        $data['payments'] = $datalist;
        $data['remittance'] = $remittance;
        $data['provider'] = $this->provider;

        $fileName = 'Remittance# ' .$remittance['number'];
        return $this->pdfService->generateRemittancesPdf($data,$fileName,1); // currently showing company with 1 id
        
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
