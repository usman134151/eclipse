<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Services\App\NotificationService;

class Notes extends Component
{
    public $showForm, $note= ['record_type'=>null, 'record_id'=>null,'notes_text'=>null],   $notesArr=[],$label="Add",$noteId=null;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.forms.notes');
    }

    public function mount($showForm,$record_id,$record_type)
    {
        // dd(Note::where('id',2)->first()->author->userdetail->profile_pic);
       $this->note['record_id'] =$record_id;
       $this->note['record_type']=$record_type;
        $this->note['user_id'] = Auth::id();
       
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
        $this->notesArr = Note::where(['record_id' => $this->note['record_id'], 'record_type' => $this->note['record_type']])->get();
        
    }
    public function editNote($noteid){
        $this->label = "Edit";
        $this->noteId=$noteid;
        $this->note = Note::where('id',$noteid)->select('id','notes_text','record_id','record_type')->first()->toArray();
    }

    public function addNote(){
        $this->validate();
        $this->note['user_id'] = Auth::id();
        if($this->noteId==null){
            //save
            Note::create($this->note);
            if($this->note['record_type'] == 5)
            {
                $data['bookingComment'] = $this->note;
                // NotificationService::sendNotification('Booking: New Comment', $data);
            }
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

    public function canEdit($note)
    {
        if($note['user_id'] == Auth::id())
            return true;
        else if(session()->get('isSuperAdmin'))
            return true;
        return false;
    }

    public function canDelete($note)
    {
        if($note['user_id'] == Auth::id())
            return true;
        else if(session()->get('isSuperAdmin'))
            return true;
        return false;
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
