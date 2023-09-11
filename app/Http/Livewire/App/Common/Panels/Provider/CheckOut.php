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

class CheckOut extends Component
{
    use WithFileUploads;
    public $showForm, $checkout = [];
    protected $listeners = ['showList' => 'resetForm', 'updateVal'];
    public $booking_id = 0, $assignment = null, $step = 1, $booking_service = null, $checkout_details = null, $checked_in_details = null;
    public $upload_timesheet = null, $upload_signature = null, $booking_provider=null;
    public function setCheckout()
    {
        if ($this->checkout['status'])
            $this->checkout['timestamp'] = Carbon::now();
        else
            $this->checkout['timestamp'] = null;
    }

    public function render()
    {
        return view('livewire.app.common.panels.provider.check-out');
    }

    public function save()
    {
        $this->booking_provider->check_out_procedure_values = json_encode($this->checkout);
        $this->booking_provider->check_in_status = 3;

        $this->booking_provider->save();
        $this->dispatchBrowserEvent('close-check-out');
        $this->emit('showConfirmation', 'Successfull Checkout at : ' .  date_format(date_create($this->checkout['actual_end_timestamp']), 'm/d/Y h:i A') );
    }

    public function mount($booking_service_id)
    {

        $this->checkout = [
            'status' => false,
            'confirmation_upload_type' => 'print_and_sign'

        ];
        $this->assignment = Booking::where('id', $this->booking_id)->first();
        $this->booking_service = BookingServices::where('id', $booking_service_id)->first();

        $this->checkout['actual_start_date'] = Carbon::parse($this->assignment->booking_start_at)->format('d/m/Y');

        if ($this->booking_service) {
            $this->checkout_details = json_decode($this->booking_service->service->close_out_procedure, true);  //getting service's close-out-procedure
            $this->booking_provider = BookingProvider::where(['booking_service_id' => $booking_service_id, 'provider_id' => Auth::id()])->first();
            if ($this->booking_provider && ($this->booking_provider->check_out_procedure_values != null)) {
                $this->checkout = json_decode($this->booking_provider->check_out_procedure_values, true);
            } else {
                //check if booking-service has check-in procedure enabled
                $check_in_procedure = json_decode($this->booking_service->service->check_in_procedure, true);
                if ($check_in_procedure) {
                    if (isset($check_in_procedure['enable_button']) && ($check_in_procedure['enable_button'])) {    //check-in procedure enabled

                        if ($this->booking_provider) {
                            $checked_in_details = json_decode($this->booking_provider->check_in_procedure_values, true);
                            if (isset($checked_in_details['actual_start_timestamp'])) {
                                $this->checkout['actual_start_timestamp'] = $checked_in_details['actual_start_timestamp'];
                                $this->checkout['actual_start_date'] = Carbon::parse($checked_in_details['actual_start_timestamp'])->format('d/m/Y');
                            }
                        }
                    }
                }
                $this->checkout['actual_end_date'] = Carbon::now()->format('d/m/Y');
                $this->checkout['actual_end_hour'] =      date_format(date_create($this->assignment->booking_end_at), 'H');
                $this->checkout['actual_end_min'] =      date_format(date_create($this->assignment->booking_end_at), 'i');
            }
        }
    }

    public function rules()
    {
        $rules = [
            'checkout.actual_end_date' => 'required|date|after:checked_in_details.actual_start_date',

        ];
        if ($this->checkout['confirmation_upload_type'] == "print_and_sign")
            $rules['upload_timesheet'] = 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv';
        if ($this->checkout['confirmation_upload_type'] == "digital_signature")
            $rules['upload_signature'] = 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv';
        return $rules;
    }

    public function saveStepOne()
    {

        $this->validate();
        $this->checkout['actual_end_timestamp'] = Carbon::createFromFormat('d/m/Y H:i:s', $this->checkout['actual_end_date'] . ' ' . $this->checkout['actual_end_hour'] . ':' . $this->checkout['actual_end_min'] . ':00');

        $fileService = new UploadFileService();
        if ($this->checkout['confirmation_upload_type'] == "print_and_sign") {
            unset($this->checkout['digital_signature']);
            $this->upload_signature = null;
            if ($this->upload_timesheet)
                $this->checkout['uploaded_timesheet'] = $fileService->saveFile('bookings/' . $this->booking_id, $this->upload_timesheet, $this->checkout['uploaded_timesheet'] ?? null, $this->assignment->booking_number . '_' . time() . '_timesheet');
        }
        if ($this->checkout['confirmation_upload_type'] == "digital_signature") {
            unset($this->checkout['uploaded_timesheet']);
            $this->upload_timesheet = null;
            if ($this->upload_signature)
                $this->checkout['digital_signature']['customer_signature'] = $fileService->saveFile('bookings/' . $this->booking_id, $this->upload_signature, $this->checkout['digital_signature']['customer_signature'] ?? null, $this->assignment->booking_number . '_' . time() . '_checkout_customer_signature');
        }

        $this->booking_provider->check_out_procedure_values = json_encode($this->checkout);
        if($this->booking_provider->check_in_procedure_values ==null){
            $values = [
                'actual_start_hour' => $this->checkout['actual_start_hour'],
                'actual_start_min' => $this->checkout['actual_start_min'],
                'provider_signature_path' => null,
                'customer_signature_path' => null,
                'actual_start_timestamp' => Carbon::createFromFormat('d/m/Y H:i:s', $this->checkout['actual_start_date'] . ' ' . $this->checkout['actual_start_hour'] . ':' . $this->checkout['actual_start_min'] . ':00'),
                'added_at'=>'checkout'
            ];
            $this->booking_provider->check_in_procedure_values = json_encode($values);
        }
        $this->booking_provider->save();
        // dd($this->checkout); 

        $this->setStep(2);
    }
    public function saveStepTwo()
    {
        $this->emit('saveCustomForm');
        $this->setStep(3);
    }

    public function saveStepThree()
    {
        $this->booking_provider->check_out_procedure_values = json_encode($this->checkout);
        $this->booking_provider->save();
        $this->setStep(4);
    }



    public function setStep($step)
    {
        $this->step = $step;
    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
    public function updateVal($attrName, $val)
    {
        if ($attrName == 'actual_start_date')
            $this->checked_in_details['actual_start_date'] = $val;
        if ($attrName == 'actual_end_date')
            $this->checkout['actual_end_date'] = $val;
        // dd($this->checkout);
        // $this->$attrName = $val;
    }


    public function isImage($file, $isString = false)
    {
        if ($isString == false)
            $extension = $file->getClientOriginalExtension();
        else {
            $extension = pathinfo($file, PATHINFO_EXTENSION);
        }
        $imgExtArr = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg'];
        if (in_array($extension, $imgExtArr)) {
            return true;
        }
        return false;
    }
}
