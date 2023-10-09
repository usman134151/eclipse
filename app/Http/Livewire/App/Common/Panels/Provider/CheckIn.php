<?php

namespace App\Http\Livewire\App\Common\Panels\Provider;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use App\Services\App\UploadFileService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CheckIn extends Component
{
    use WithFileUploads;

    public $showForm, $checkIn = true, $hours = null, $mins = null, $provider_signature = null, $customer_signature = null, $form_id = null , $files=['provider_signature'=>null,'customer_signature'=>null];
    protected $listeners = ['showList' => 'resetForm', 'setCheckInBookingId' => 'setBookingId'];
    public $booking_id = 0, $assignment = null, $booking_service = null, $checkin_details = [], $booking_provider=null;

    public function render()
    {

        return view('livewire.app.common.panels.provider.check-in');
    }

    public function clear()
    {
        $this->checkIn = true;
        $this->hours = null;
        $this->mins = null;
        $this->provider_signature = null;
        $this->customer_signature = null;
        $this->booking_id = 0;
        $this->assignment = null;
        $this->booking_service = null;
        $this->checkin_details = [];
        $this->form_id = null;
        $this->booking_provider=null;
    }


    public function rules()
    {
        return [
            'provider_signature' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv',
            'customer_signature' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv',
            'hours'=> 'required|numeric|between:0,23',
            'mins' => 'required|numeric|between:0,59'

        ];
    }
    public function save()
    {
        $this->validate();
        $this->emit('saveCustomForm');
        $fileService = new UploadFileService();
        if ($this->provider_signature)
            $p_sign = $fileService->saveFile('bookings/' . $this->booking_id, $this->provider_signature);
        if ($this->customer_signature)
            $c_sign = $fileService->saveFile('bookings/' . $this->booking_id, $this->customer_signature);

        $bookingProvider = BookingProvider::where(['booking_service_id'=> $this->booking_service->id,'provider_id'=>Auth::id()])->first();
        if (!$bookingProvider)   //prev version compatability
            $bookingProvider = $this->assignment->booking_provider->where('booking_id', $this->booking_id)->first();

        $values = [
            'actual_start_hour' => $this->hours ?? null ,
            'actual_start_min' => $this->mins ?? null,
            'provider_signature_path' => isset($p_sign) ? $p_sign : null,
            'customer_signature_path' => isset($c_sign) ? $c_sign : null,
            'actual_start_timestamp' => Carbon::createFromTime($this->hours, $this->mins),
            'added_at' => 'checkin'


        ];
        $bookingProvider->check_in_status = 1;
        $bookingProvider->check_in_procedure_values = $values;
        $bookingProvider->save();
        // dd($bookingProvider);
        
        $this->dispatchBrowserEvent('close-check-in-panel');
        $this->emit('showConfirmation', 'Checked in successfully');
    }

    public function mount($booking_service_id)
    {

        if ($this->booking_id) {
            $this->assignment = Booking::where('id', $this->booking_id)->first();
            $this->booking_service = BookingServices::where('id', $booking_service_id)->first();
            if ($this->booking_service)
                $this->checkin_details = json_decode($this->booking_service->service->check_in_procedure, true);

            $this->hours =      date_format(date_create($this->assignment->booking_start_at), 'H');
            $this->mins =      date_format(date_create($this->assignment->booking_start_at), 'i');
            if (isset($this->checkin_details['customize_form_id']))
                $this->form_id = $this->checkin_details['customize_form_id'];
            $this->booking_provider = BookingProvider::where(['booking_service_id' => $booking_service_id, 'provider_id' => Auth::id()])->first();
            if($this->booking_provider && $this->booking_provider->check_in_procedure_values){
                $values = $this->booking_provider->check_in_procedure_values;
                $this->hours = $values['actual_start_hour'] ?? null;
                $this->mins = $values['actual_start_min'] ?? null;
                $this->files['provider_signature'] = $values['provider_signature_path'] ?? null;
                $this->files['customer_signature'] = $values['provider_signature_path'] ?? null;
            }
        }
    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}
