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
    public $upload_timesheet = null, $upload_signature = null;
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
        $this->dispatchBrowserEvent('close-check-out');
    }

    public function mount($booking_service_id)
    {

        $this->checkout = [
            'status' => true,
            'confirmation_upload_type' => 'print_and_sign'
        ];
        if ($this->booking_id) {
            $this->assignment = Booking::where('id', $this->booking_id)->first();
            $this->booking_service = BookingServices::where('id', $booking_service_id)->first();
            // {"enable_button_provider":"true","customize_form_id":"25","customize_form":"true"
            // ,"customers":"8","enable_button_customer":"true","time_extension":"true",
            // "customer_invoice":"true","enable_digital_signature":"true"}

            if ($this->booking_service) {
                $this->checkout_details = json_decode($this->booking_service->service->close_out_procedure, true);

                //has details that have been saved at check-in
                $check_in_procedure = json_decode($this->booking_service->service->check_in_procedure, true);
                if ($check_in_procedure) {
                    if (isset($check_in_procedure['enable_button']) && ($check_in_procedure['enable_button'])) {

                        $booking_provider = BookingProvider::where(['booking_service_id' => $booking_service_id, 'provider_id' => Auth::id()])->first();
                        $this->checked_in_details = json_decode($booking_provider->check_in_procedure_values, true);
                        if (isset($this->checked_in_details['actual_start_timestamp']))
                            $this->checked_in_details['actual_start_date'] = Carbon::parse($this->checked_in_details['actual_start_timestamp'])->format('d/m/Y');
                        else
                            $this->checked_in_details['actual_start_date'] = Carbon::parse($this->assignment->booking_start_at)->format('d/m/Y');

                        // createFromTime($this->checked_in_details['actual_start_hour'], $this->checked_in_details['actual_start_min']);
                    }
                }
            }
            $this->checkout['actual_end_date'] = Carbon::now()->format('d/m/Y');
            // dd($this->checked_in_details['actual_start_timestamp']);
            $this->checkout['actual_end_hour'] =      date_format(date_create($this->assignment->booking_end_at), 'H');
            $this->checkout['actual_end_min'] =      date_format(date_create($this->assignment->booking_end_at), 'i');
            if (isset($this->checkout_details['customize_form_id']))
                $this->checkout['form_id'] = $this->checkout_details['customize_form_id'];
        }
    }


    protected $rules = [
        'checkout.actual_end_date' => 'required|date|after:checked_in_details.actual_start_date',
        'upload_timesheet' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv',
        'upload_signature' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv',

    ];

    public function saveStepOne()
    {

        $this->validate();
        $this->checkout['actual_start_date'] = $this->checked_in_details['actual_start_date'];
        $this->checkout['actual_start_hour'] = $this->checked_in_details['actual_start_hour'];
        $this->checkout['actual_start_min'] = $this->checked_in_details['actual_start_min'];
        if (isset($this->checked_in_details['actual_start_timestamp']))
            $this->checkout['actual_start_timestamp'] = $this->checked_in_details['actual_start_timestamp'];
        else
            $this->checkout['actual_start_timestamp'] = Carbon::createFromFormat('d/m/Y H:i:s', $this->checked_in_details['actual_start_date'] . ' ' . $this->checked_in_details['actual_start_hour'] . ':' . $this->checked_in_details['actual_start_min'] . ':00');
        $this->checkout['actual_end_timestamp'] = Carbon::createFromFormat('d/m/Y H:i:s', $this->checkout['actual_end_date'] . ' ' . $this->checkout['actual_end_hour'] . ':' . $this->checkout['actual_end_min'] . ':00');

        $fileService = new UploadFileService();
        if ($this->upload_timesheet && $this->checkout['confirmation_upload_type'] == "print_and_sign")
            $this->checkout['uploaded_timesheet'] = $fileService->saveFile('bookings/' . $this->booking_id, $this->upload_timesheet);
        if ($this->upload_signature && $this->checkout['confirmation_upload_type'] == "digital_signature")
            $this->checkout['customer_signature'] = $fileService->saveFile('bookings/' . $this->booking_id, $this->upload_signature);


        $booking_provider = BookingProvider::where(['booking_service_id' => $this->booking_service->id, 'provider_id' => Auth::id()])->first();
        $booking_provider->check_out_procedure_values = json_encode($this->checkout);
        $booking_provider->save();
        // dd($this->checkout); 

        $this->setStep(2);
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


    public function isImage($file)
    {
        $extension = $file->getClientOriginalExtension();
        $imgExtArr = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'svg'];
        if (in_array($extension, $imgExtArr)) {
            return true;
        }
        return false;
    }
}
