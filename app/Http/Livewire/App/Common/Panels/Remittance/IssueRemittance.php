<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use App\Models\Tenant\User;
use Livewire\Component;

class IssueRemittance extends Component
{
    public $showForm, $selectedRows=[], $provider;
    protected $listeners = ['showList' => 'resetForm', 'issueRemittances'];

    public function render()
    {
        return view('livewire.app.common.panels.remittance.issue-remittance');
    }

    public function mount($providerId)
    {
        $this->provider = User::find($providerId);
       
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}
