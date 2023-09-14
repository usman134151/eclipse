<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class Dashboard extends Component
{
    public $tabNumber=1;
    public function render()
    {
        $this->dispatchBrowserEvent('refreshSelects');
        $this->dispatchBrowserEvent('refreshSelects2');

        return view('livewire.app.common.dashboard');

    }
    public function selectTab($tabNumber){
     
       // $this->tabNumber=$tabNumber;
      
    }
    public function updateVal($attrName, $val)
	{
		
	
		
	}

}
