<?php

namespace App\Http\Livewire\App\Common\Forms;
use App\Helpers\SetupHelper;

use Livewire\Component;

class CouponForm extends Component
{
    public $setupValues = [
        'accomodations' => ['parameters' => ['Accommodation', 'id', 'name', '', '', 'name', false, 'accommodation','','accommodation']]
	];
	public function showList()
	{
		$this->emit('showList');
	}
    public function mount()
    {
        $this->loadSetupValues();

    }
	public function render()
	{
		return view('livewire.app.common.forms.coupon-form');
	}
    public function loadSetupValues(){ //added by shanila to add function to get all setup values rendered on mount
		foreach($this->setupValues as $key=>$setupValue){

			$this->setupValues[$key]['rendered'] = SetupHelper::createDropDown($setupValue['parameters'][0], $setupValue['parameters'][1],$setupValue['parameters'][2], $setupValue['parameters'][3], $setupValue['parameters'][4], $setupValue['parameters'][5], $setupValue['parameters'][6],$setupValue['parameters'][7],$setupValue['parameters'][8],$setupValue['parameters'][9]);
		}


	}

}
