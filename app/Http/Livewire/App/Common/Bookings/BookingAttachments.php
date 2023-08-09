<?php

namespace App\Http\Livewire\App\Common\Bookings;

use App\Models\Tenant\BookingDocument;
use App\Services\App\UploadFileService;
use Livewire\Component;

class BookingAttachments extends Component
{
    public $showForm, $booking_id=0, $documents=[];
    protected $listeners = ['showList' => 'resetForm', 'showConfirmation'=>'render'];

    public function render()
    {
        if ($this->booking_id) {
            $this->documents = BookingDocument::where('booking_id', $this->booking_id)->get();
        }
        return view('livewire.app.common.bookings.booking-attachments');
    }

    public function mount()
    {
       
       
    }

    public function isImage($extension)
    {
        // $extension = pathinfo($file, PATHINFO_EXTENSION);
        $imgExtArr = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg'];
        if (in_array($extension, $imgExtArr)) {
            return true;
        }
        return false;
    }

    public function deleteFile($file_record_id, $path)
    {
        $fileService = new UploadFileService();
        $fileService->deleteFile($path);
        BookingDocument::where('id', $file_record_id)->delete();
        $this->emit('showConfirmation','Document has been successfully deleted');
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
