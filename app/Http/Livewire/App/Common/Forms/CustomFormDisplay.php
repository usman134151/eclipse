<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;

class CustomFormDisplay extends Component
{
    public $showForm, $form_id,$assignment_id;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.forms.custom-form-display');
    }

    public function mount()
    {
    //    $data =  call customize form service function as see if we can use it to display details
       
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
