<?php

namespace App\Http\Livewire\App\Admin\Forms;

use Livewire\Component;

class AddCompany extends Component
{
	public $component = 'company-info';
	public $phoneNumbers=[['phone_title'=>'','phone_number'=>'']];
	public function showList()
	{
		$this->emit('showList');
	}

	public function render()
	{
		return view('livewire.app.admin.forms.add-company');
	}
	public function switch($component)
	{
		$this->component = $component;
	}

	//front function

	public function addPhone(){
		$this->phoneNumbers[]=['phone_title'=>'','phone_number'=>''];
	}
	public function removePhone($index)
    {
        unset($this->phoneNumbers[$index]);
        $this->phoneNumbers = array_values($this->phoneNumbers);
    }
}
