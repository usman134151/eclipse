<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\Note;
use Livewire\Component;

class Notes extends Component
{
    public $showForm, $note= ['record_type'=>null, 'record_id'=>null,'notes_text'=>null],   $notesArr=[],$label="Add",$noteId=null;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.forms.notes');
    }

    public function mount($record_id,$record_type)
    {
       $this->note['record_id'] =$record_id;
       $this->note['record_type']=$record_type;
       
       $this->refreshData();
       
    }

    public function rules()
    {
        return [
            'note.notes_text' => 
                'required'
            ];
    }


    public function refreshData(){
        $this->resetValidation();
        $this->note['notes_text']=null; 
        $this->label="Add"; 
        $this->noteId = null;
        $this->notesArr = Note::where(['record_id' => $this->note['record_id'], 'record_type' => $this->note['record_type']])->get()->toArray();
        
    }
    public function editNote($noteid){
        $this->label = "Edit";
        $this->noteId=$noteid;
        $this->note = Note::where('id',$noteid)->select('id','notes_text','record_id','record_type')->first()->toArray();
    }

    public function addNote(){
        $this->validate();

        if($this->noteId==null){
            //save
            Note::create($this->note);
        }else{ //edit
            unset($this->note['id']);
            Note::where('id', $this->noteId)->update($this->note);
        }
        $this->refreshData();

    }

    function deleteNote($noteid){
        Note::find($noteid)->delete();
        $this->refreshData();


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
