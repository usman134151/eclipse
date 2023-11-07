<?php

namespace App\Http\Livewire\App\Common\Modals;

use Livewire\Component;

class ProviderReturnAssignmentModal extends Component
{
    public $showForm, $return_review;
    protected $listeners = ['showList' => 'resetForm', 'openReturnAssignmentModal'];

    public function render()
    {
        return view('livewire.app.common.modals.provider-return-assignment-modal');
    }

    public function mount($return_review = 1)
    {
       $this->return_review=$return_review;
       
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
