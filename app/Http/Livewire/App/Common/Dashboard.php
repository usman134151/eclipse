<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class Dashboard extends Component
{
    public $tabNumber=1;
    public function render()
    {
        return view('livewire.app.common.dashboard');
        $this->dispatchBrowserEvent('refreshSelects');
    }
    public function selectTab($tabNumber){
     
        $this->tabNumber=$tabNumber;
      
    }
    public function updateVal($attrName, $val)
	{
		
	
		
	}

}
