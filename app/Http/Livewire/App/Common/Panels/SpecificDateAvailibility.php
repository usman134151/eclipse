<?php

namespace App\Http\Livewire\App\Common\Panels;

use Livewire\Component;

class SpecificDateAvailibility extends Component
{
    public $showForm,$provider_id=0, $timeslot=[], $time_format=1;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.panels.specific-date-availibility');
    }

    public function mount()
    {
       $this->timeslot = [
            'user_id'=>$this->provider_id,
            'scheduled_date'=>null,
            'from_time_hour'=>'12',
            'from_time_min' => '59',

            'to_time_hour'=>'12',
            'to_time_min' => '59',

            'notes'=>null
       ];
       
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
