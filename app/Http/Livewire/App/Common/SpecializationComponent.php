<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;
use App\Models\Tenant\Specialization;

class Specializationmain extends Component
{
    public $showForm;
    public $confirmationMessage;
    public $recordId;
    protected $listeners = ['showList' => 'resetForm','showForm'=>'showForm','delete'=>'deleteRecord','updateRecordId'=>'updateRecordId'];

    public function mount()
    {
       
       
    }

    function showForm($specialization=null){

        if($specialization){
            $this->specialization=$specialization;
            $this->emit('editRecord',$specialization);
        }

        $this->showForm=true;
    }
    public function resetForm($message)
    {
        if($message){
            $this->confirmationMessage=$message;
       
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Success',
                'text' => $message,
            ]);
        }

        $this->showForm=false;
    }
    public function updateRecordId($id){
        $this->recordId=$id;
    }
    public function deleteRecord(){
       
        //Specialization::delete($this->recordId);
       
    }
    public function render()
    {
       
        return view('livewire.app.common.specialization');
    }
}
