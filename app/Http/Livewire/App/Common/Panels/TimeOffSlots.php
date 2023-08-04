<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\ProviderVacation;
use Carbon\Carbon;
use Livewire\Component;

class TimeOffSlots extends Component
{
    public $showForm,$provider_id,$slot=[];
    protected $listeners = ['showList' => 'resetForm', 'saveTimeOff','updateVal','clear'];

    public function render()
    {
        return view('livewire.app.common.panels.time-off-slots');
    }

    public function mount()
    {
       $this->slot= ['from_date' => '', 'to_date' => '', 'user_id' => $this->provider_id, 'notes' => ''];
       
    }

    public function updateVal($attrName, $val)
    {
        $this->slot[$attrName] = $val;
    }
  

    public function rules()
    {
        return [
            'slot.from_date' => [
                'date',
                'required',
                'date_format:m/d/Y', 'after:today'
            ],

            'slot.to_date' => [
                'date',
                'required',
                'date_format:m/d/Y', 'after:slot.from_date'
            ],
           
        ];
    }

    public function saveTimeOff(){
        $this->validate();
        $this->slot['from_date']= Carbon::parse($this->slot['from_date']);
        $this->slot['to_date'] = Carbon::parse($this->slot['to_date']);

        ProviderVacation::create($this->slot);


        $this->dispatchBrowserEvent('close-timeoff-panel');
        $this->emit('showConfirmation', ' Time off dates saved!');
       

    }

    public function clear()
    {
        $this->slot = ['from_date' => '', 'to_date' => '', 'user_id' => $this->provider_id, 'notes' => ''];

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
