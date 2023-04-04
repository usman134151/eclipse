<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\Navigator as NavigatorsModel;;


class Navigator extends Component
{   
    public $showForm;
    public $navigators= [];
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {   
        return view('livewire.app.common.navigator');
    }

    public function mount()
    {
        $this->navigators = $this->getNavigators();
    }

    // Updated by Waqar Mughal to get navigators for navigator of dashboard
    public function getNavigators(){        
        return NavigatorsModel::orderBy('id', 'asc')->get();
    }
    // End of update by Waqar Mughal

    
    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}
