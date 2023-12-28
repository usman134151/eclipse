<?php

namespace App\Http\Livewire\App\Admin\Provider;

use App\Models\Tenant\Remittance;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Livewire\Component;

class PendingPayments extends Component
{
    public $showForm, $providerId=0,$counter=0, $paymentGraph = [];
    protected $listeners = ['showList' => 'resetForm', 'openRemittancePaymentsPanel'];

    public function openRemittancePaymentsPanel($providerId)
    {
        if ($this->counter == 0) {
            $this->providerId = 0;
            $this->dispatchBrowserEvent('refresh-remittances-payment', ['providerId' => $providerId]);
            $this->counter = 1;
        } else {
            $this->providerId = $providerId;
            $this->counter = 0;
        }
    }

    
    public function render()
    {
        return view('livewire.app.admin.provider.pending-payments');
    }

    public function mount()
    {
       $this->paymentGraph = $this->getPaymentGraphData();
       
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm($message=null)
    {
        $this->showForm=false;
        if ($message) {
            // Emit an event to display a success message using the SweetAlert package
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Success',
                'text' => $message,
            ]);
        }
    }

    public function getPaymentGraphData()
    {
        $startDate = Carbon::now()->subMonths(11)->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();
        
        $payments = Remittance::selectRaw('DATE_FORMAT(paid_at, "%Y-%m") as paid_month')
            ->where('payment_status',2)
            ->selectRaw('SUM(amount) as total_amount')
            ->whereBetween('paid_at', [$startDate, $endDate])
            ->groupBy('paid_month')
            ->orderBy('paid_month')
            ->pluck('total_amount', 'paid_month')
            ->toArray();
    
        $allMonths = CarbonPeriod::create($startDate, '1 month', $endDate)->toArray();
    
        $labels = array_map(function ($month) {
            return $month->format('F Y');
        }, $allMonths);
    
        $paymentAmounts = array_map(function ($month) use ($payments) {
            $key = $month->format('Y-m');
            return isset($payments[$key]) ? $payments[$key] : 0;
        }, $allMonths);
    
        $datasets = [
            [
                'label' => 'Remittance',
                'data' => $paymentAmounts,
                'borderColor' => 'rgb(255, 99, 132)',
                'backgroundColor' => 'rgba(255, 99, 132, 0.5)',
            ],
        ];
    
        $data = [
            'labels' => $labels,
            'datasets' => $datasets,
        ];
    
        return $data;
    }    

}
