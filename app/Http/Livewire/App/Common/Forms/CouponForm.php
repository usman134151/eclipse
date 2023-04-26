<?php

namespace App\Http\Livewire\App\Common\Forms;
use App\Helpers\SetupHelper;

use Livewire\Component;

class CouponForm extends Component
{
    public $setupValues = [
        'accomodations' => ['parameters' => ['Accommodation', 'id', 'name', '', '', 'name', false, 'accommodation','','accommodation',0]]
	];
	public function showList()
	{
		$this->emit('showList');
	}
    public function mount()
    {
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);

    }
	public function render()
	{
		return view('livewire.app.common.forms.coupon-form');
	}

}
