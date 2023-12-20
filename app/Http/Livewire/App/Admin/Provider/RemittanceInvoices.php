<?php

namespace App\Http\Livewire\App\Admin\Provider;

use App\Models\Tenant\Remittance;
use App\Models\Tenant\User;
use Livewire\Component;
use Livewire\WithPagination;

class RemittanceInvoices extends Component
{
	use WithPagination;
    public $showForm, $provider, $total=0, $stats=[], $providerId, $limit = 10;
    protected $listeners = ['showList' => 'resetForm'];
    public $status = [2 => ['code' => '/css/provider.svg#green-dot', 'title' => 'Paid'], 1 => ['code' => '/css/common-icons.svg#blue-dot', 'title' => 'Issued'], 0 => ['code' => '/css/provider.svg#red-dot', 'title' => 'Pending']];
    public $selectedRemittance = [], $isSelectAll = false;

    public function render()
    {
        return view('livewire.app.admin.provider.remittance-invoices',['remittances' => $this->fetchData()]);
    }

    public function mount($providerId)
    {
        $this->providerId = $providerId;       
    }

    public function fetchData()
    {
        $this->provider = User::where('id', $this->providerId)->with(['userdetail', 'paymentPreference'])->first();
        $remittances = Remittance::where('provider_id', $this->providerId)->orderBy('issued_at', 'desc');
        $remittances = $remittances->paginate($this->limit);
        $this->stats['totalPaid'] = $remittances->where('payment_status',2)->sum('amount');
        $this->stats['totalPending'] = $remittances->where('payment_status',1 )->sum('amount');
        return $remittances;        
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

    public function selectAll()
    {
        if ($this->isSelectAll)
            $this->selectedRemittance   = array_column($this->remittances, 'id'); 
        else
            $this->selectedRemittance = [];
    }

}
