<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\Navigator as NavigatorsModel;;
use App\Models\Tenant\UserNavigation;

class Navigator extends Component
{   
    public $showForm;
    public $navigators = [];
    public $userNavigators = [];
    public $userNavigation;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {   
        $this->userNavigators = $this->getNavigators();     
        return view('livewire.app.common.navigator');
    }

    public function mount()
    {   
        
    }

    // Updated by Waqar Mughal to get navigators for navigator of dashboard
    public function getNavigators(){        

        $userNavigation = UserNavigation::where('user_id', '=', auth()->user()->id)->first();   
        if($userNavigation == null)
        {
           return NavigatorsModel::orderBy('id', 'asc')->get();                         
        }
        else 
        {
           return UserNavigation::where('user_id',auth()->user()->id)->orderBy('position')->get(); 
        }
    
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

    // Updated by Waqar Mughal to, this calls after navigator drops 
    public function updateNavigateOrder($list){  
        foreach($list as $item){
            UserNavigation::updateOrInsert(
                                            ['user_id' => auth()->user()->id, 'navigator_id' => $item['value']], 
                                            ['position' => $item['order']]                                       
                            );
        }
    } 
    // End of update by Waqar Mughal

}
