<?php

namespace App\Http\Livewire\App\Common\Forms;

use App\Models\Tenant\Note;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Services\App\NotificationService;
use Carbon\Carbon;

class Notes extends Component
{
    //  1 ->company, 2 -> provider, 3->customer , 4-departments, 5-assignment, 6 -> provider team 
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
        if($this->noteId==null){
            //save
            $this->note['user_id'] = Auth::id();
            Note::create($this->note);
            if($this->note['record_type'] == 5)
            {
                $data['bookingComment'] = $this->note;
                // NotificationService::sendNotification('Booking: New Comment', $data);
            }
        }else{ //edit            
            $existingNote = Note::findOrFail($this->noteId);

            // Construct the edit log
            $editLog = [
                'edited_by' => Auth::user()->id,
                'edited_at' => Carbon::now()->toDateTimeString()
            ];
    
            // Update note_edit_log in the existing note
            $existingNote->note_edit_log = json_encode(
                array_merge(json_decode($existingNote->note_edit_log, true) ?: [], [$editLog])
            );
    
            // Update other fields if needed
            unset($this->note['id']); // Remove the 'id' from $this->note array to avoid updating it
            $authorId = Note::with('author:id')->where('id',$this->noteId)->first();
            $this->note['user_id'] = $authorId->author->id;
            $existingNote->fill($this->note);
    
            // Save the changes
            $existingNote->save();

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

    function getEditDetails($editRecord)
    {
        $latestEdit = collect(json_decode($editRecord, true))->last();
        $editor = User::find($latestEdit['edited_by']);
        $data['editorName'] = $editor ? $editor->name : null;
        $data['edited_at'] = $latestEdit['edited_at'];
        return $data;
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
