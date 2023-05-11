<?php

namespace App\Http\Livewire\App\Admin\Accommodation\Forms;

use Livewire\Component;

class AddService extends Component
{
    public $component = 'basic-service-setup';
    public $step = 1;
	public function render()
	{
		return view('livewire.app.admin.accommodation.forms.add-service');
	}

	public function showList()
	{
		$this->emit('showList');
	}
    public function switch($component)
	{
		$this->component = $component;
	}
    public function save(){
        $this->step =2;
    }
    public function serviceRates(){
        $this->step =3;
    }
    public function ServiceFrom(){
        $this->step = 4;
    }
    public function ServiceConfig(){
        $this->step = 5;
    }
    public function advanceOptions(){
        $this->step = 6;
    }

}
