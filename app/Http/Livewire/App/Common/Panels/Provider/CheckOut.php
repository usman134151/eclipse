<?php

namespace App\Http\Livewire\App\Common\Panels\Provider;

use App\Models\Tenant\Booking;
use Livewire\Component;

class CheckOut extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
    public $booking_id = 0, $assignment = null,$step=1;


    public function render()
    {
        return view('livewire.app.common.panels.provider.check-out');
    }

    public function save(){
        $this->dispatchBrowserEvent('close-check-out');
    }

    public function mount()
    {
        if ($this->booking_id)
            $this->assignment = Booking::where('id', $this->booking_id)->first();
    
    }

    public function setStep($step){
        // dd($this->step, $step);

        $this->step=$step;
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
