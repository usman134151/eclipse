<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class AddCustomizedForm extends Component
{
    public $questions=[[
        'feild_name'=>'',
        'form_type'=>'',
        'placeholder'=>'',
        'required'=>''

    ]];
	public function showList()
	{
		$this->emit('showList');
	}

	public function render()
	{
		return view('livewire.app.common.forms.add-customized-form');
	}
    public function addQuestion(){
        $this->questions[] = [
            'feild_name'=>'',
            'form_type'=>'',
            'placeholder'=>'',
            'required'=>''
        ];
    }
    public function removeQuestion($index)
    {
        unset($this->questions[$index]);
        $this->questions = array_values($this->questions);
    }
}
