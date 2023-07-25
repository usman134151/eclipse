<?php

namespace App\Http\Livewire\App\Provider;

use App\Models\Tenant\Schedule;
use Livewire\Component;

class ManageAvailability extends Component
{
    public $showForm,$provider_id;
    //variables for availability (default-availability-panel)
    public $schedule;

    protected $listeners = ['showList' => 'resetForm'];

    public function getProviderSchedule()
    {
        //reinit schedule
        $providerSchedule = Schedule::where('model_id', $this->provider_id)->where('model_type', 3)->get()->first();
        if (!is_null($providerSchedule)) {
            $this->schedule = $providerSchedule;
        } else {
            $this->schedule = new Schedule;
            $this->schedule->model_type = 3;
            $this->schedule->working_days = json_encode([]);
            $this->schedule->timezone_id = 0;

            $this->schedule->model_id = $this->provider_id;
            $this->schedule->save();
        }
        $this->emit('getRecord', $this->schedule->id, true);
    }


  
	
    public function render()
    {
        return view('livewire.app.provider.manage-availability');
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
