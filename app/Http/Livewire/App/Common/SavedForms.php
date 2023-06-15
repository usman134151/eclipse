<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class SavedForms extends Component
{
	public $showForm;
	protected $listeners = ['showList'=>'resetForm'];

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
	}

	public function mount()
	{}

	public function render()
	{
		return view('livewire.app.common.saved-forms');
	}

	public function updateVal($attrName, $val)
     {
        if($attrName=='user_dob'){
            $this->user['user_dob']=$val;
        }
        else
         $this->userdetail[$attrName] = $val;


     }
}
