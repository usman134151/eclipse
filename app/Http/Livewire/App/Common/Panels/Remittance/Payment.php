<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use App\Models\Tenant\Remittance;
use App\Models\Tenant\User;
use Livewire\Component;

class Payment extends Component
{
    public $showForm, $provider, $remittances, $total=0;
    protected $listeners = ['showList' => 'resetForm'];
    public $status = [2 => ['code' => '/css/provider.svg#green-dot', 'title' => 'Paid'], 1 => ['code' => '/css/common-icons.svg#blue-dot', 'title' => 'Issued'], 0 => ['code' => '/css/provider.svg#red-dot', 'title' => 'Pending']];
    public $selectedRemittance = [], $isSelectAll = false;

    public function render()
    {
        return view('livewire.app.common.panels.remittance.payment');
    }

    public function revertAll(){
        $this->emit('revertMultipleRemittances',$this->selectedRemittance);
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
        $this->remittances = Remittance::where('provider_id', $providerId)->orderBy('issued_at', 'desc')->get()->toArray();
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
