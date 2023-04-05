<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class CustomerForm extends Component
{
    public $ethnicity;
    public $timezone;
    public $gender;
    public $languages;
	public $component = 'customer-info';

	public function render()
	{
		return view('livewire.app.common.forms.customer-form');
	}

	public function showList()
	{
		$this->emit('showList');
	}

	public function switch($component)
	{
		$this->component = $component;
	}
}
