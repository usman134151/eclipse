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
          
        $navigators = [];

        foreach ($this->userNavigators as $userNavigator) {
            $navigators[] = [
                'navigator_id' => $userNavigator->navigator_id ?? $userNavigator->id,
                'navigator_label' => $userNavigator->Navigator->navigator_label ?? $userNavigator->navigator_label,
                'navigator_icon' => $userNavigator->Navigator->navigator_icon ?? $userNavigator->navigator_icon,
                'navigator_link' => $userNavigator->Navigator->navigator_link ?? $userNavigator->navigator_link,
            ];
        }
    
        $counter = [
            ['navigator_id'=>1,'count'=>47],
            ['navigator_id'=>2,'count'=>29],
            ['navigator_id'=>3,'count'=>42],
            ['navigator_id'=>4,'count'=>66],
            ['navigator_id'=>5,'count'=>18],
            ['navigator_id'=>6,'count'=>11],
            ['navigator_id'=>7,'count'=>25],
            ['navigator_id'=>8,'count'=>15],
            ['navigator_id'=>9,'count'=>9],
            ['navigator_id'=>10,'count'=>15]
        ];
    
        $this->userNavigators = array_map(function ($navigator) use ($counter) {
            $key = array_search($navigator['navigator_id'], array_column($counter, 'navigator_id'));
            if ($key !== false) {
                $navigator['count'] = $counter[$key]['count'];
            }
            return $navigator;
        }, $navigators);
      
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
