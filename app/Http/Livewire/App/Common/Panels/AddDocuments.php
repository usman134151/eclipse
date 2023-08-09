<?php

namespace App\Http\Livewire\App\Common\Panels;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddDocuments extends Component
{
    public $showForm,$booking_id=0, $document =[], $file=null;
    protected $listeners = ['showList' => 'resetForm', 'setBookingId'];

    public function render()
    {
        return view('livewire.app.common.panels.add-documents');
    }
    public function setBookingId($booking_id){
        $this->booking_id = $booking_id;
        $this->initFields(); 

    }

    public function initFields(){
        $this->document=[
            'booking_id'=>$this->booking_id,
            'document_title'=>null,
            'document_name'=>null,
            'document_type'=>null,
            'description'=>null,
            'shared'=>0,
            'added_by'=>Auth::id(),
            'request_from_user'=>false
        ];
    }

    public function mount()
    {
        $this->initFields(); 

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
