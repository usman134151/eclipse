<?php

namespace App\Http\Livewire\App\Common\Modals;

use Livewire\Component;

class Unassign extends Component
{
    public $showForm, $booking_id = null, $provider_id = null, $booking_service_id = null, $data=[];
    protected $listeners = ['showList' => 'resetForm', 'openUnassignModal' => 'setBooking','updateVal'];

    public function render()
    {
        return view('livewire.app.common.modals.unassign');
    }

    public function updateVal($attrName, $val){
        $this->data[$attrName]= $val;
    }
    public function mount()
    {
        $this->data=[
            'unassign_reason'=>'',
            'unassign_date'=>null,
            'hour'=>null,
            'min'=>null,
        ];
    }

    public function setBooking($booking_service_id = null, $provider_id, $booking_id)
    {
        $this->dispatchBrowserEvent('refreshSelects');

        $this->booking_id = $booking_id;
        $this->booking_service_id = $booking_service_id;
        $this->provider_id = $provider_id;
    }

    public function save(){
        $this->emit('closeUnassignModel');
    }
    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}
