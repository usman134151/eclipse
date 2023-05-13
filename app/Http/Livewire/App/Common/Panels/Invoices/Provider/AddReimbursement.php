<?php

namespace App\Http\Livewire\App\Common\Panels\Invoices\Provider;

use Livewire\Component;

class AddReimbursement extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.invoices.provider.add-reimbursement');
    }

    public function mount()
    {
       
       
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
