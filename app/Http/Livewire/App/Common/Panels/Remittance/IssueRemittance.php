<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use Livewire\Component;

class IssueRemittance extends Component
{
    public $showForm, $selectedRows=[];
    protected $listeners = ['showList' => 'resetForm', 'issueRemittances'];

    public function render()
    {
        return view('livewire.app.common.panels.remittance.issue-remittance');
    }

    public function mount()
    {
       dd($this->selectedRows);
       
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
