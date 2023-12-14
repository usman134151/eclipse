<?php

namespace App\Http\Livewire\App\Common\Panels\Provider;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\FeedbackRating;
use App\Models\Tenant\User;
use App\Services\App\NotificationService;
use App\Services\App\UploadFileService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CheckOut extends Component
{
    use WithFileUploads;

    public $showForm, $checkout = [], $isAdmin = false;
    protected $listeners = ['showList' => 'resetForm', 'updateVal'];
    public $booking_id = 0, $assignment = null, $step = 1, $booking_service = null, $checkout_details = null, $checked_in_details = null;
    public $upload_timesheet = null, $upload_signature = null, $booking_provider = null, $provider_id = null, $timestamps, $timeFormat = 24, $timeSlots = [];



    public function render()
    {
        return view('livewire.app.common.panels.provider.check-out');
    }

    public function setRating($val)
    {
        $this->checkout['rating'] = $val;
    }
    // last step 
    public function save()
    {
        $this->booking_provider->check_out_procedure_values = $this->checkout;
        $this->booking_provider->check_in_status = 3;

        $this->booking_provider->save();
        //refresh booking service data
        $checkedout_providers = BookingProvider::where('booking_service_id', $this->booking_service->id)->where('check_in_status', 3)->count();
        //check if all other providers have checked out -> then close service
        if ($this->booking_service->provider_count == $checkedout_providers) {
            // $service_permission = $this->booking_service->service->close_out_procedure ?  json_decode($this->booking_service->service->close_out_procedure, true) : null;
            // if ($service_permission['enable_button_customer'] != "true") {
            $this->booking_service->is_closed = true;
            $this->booking_service->save();

            //close assignment booking if service setting does not require customer approval. 
            // logic changed to allow Admin to close assignment after review ( Phase 1).
            // if (count($this->assignment->booking_services) == count($this->assignment->closed_booking_services)) {
            //     $this->assignment->is_closed = true;
            //     $this->assignment->save();
            // }
            // }
        }




        FeedBackRating::updateOrCreate([
            'feedback_to' => $this->assignment->customer_id,
            'feedback_from' => $this->provider_id,
            'booking_service_id' => $this->booking_service->id
        ], [
            'rating' => $this->checkout['rating'],
            'comments' => $this->checkout['feedback_comments'],
        ]);

        // addLogs([
        //     'action_by'     => $this->provider_id,
        //     'action_to'     => $this->assignment->id,
        //     'item_type'     => 'booking',
        //     'type'          => 'update',
        //     'message'         => "Booking checkout details updated by " . User::find($this->provider_id)->name,
        //     'ip_address'     => \request()->ip(),
        // ]);
        callLogs($this->assignment->id, 'Booking', "update", "Booking checkout details updated by " . User::find($this->provider_id)->name);
        if (session()->get('isProvider')) {
            $data['bookingData'] = $this->assignment;

            NotificationService::sendNotification('Booking: Provider Checked Out', $data);
        }

        $this->dispatchBrowserEvent('close-check-out');
        $this->emit('showConfirmation', 'Successfull Checkout at : ' .  date_format(date_create($this->checkout['actual_end_timestamp']), 'm/d/Y h:i A'));
    }

    public function mount($booking_service_id, $provider_id = null)
    {
        $this->timeFormat = session()->get('business_time_format');

        if ($provider_id == null)  //pass provider id when called from admin, else use auth::id
            $this->provider_id = Auth::id();

        else {
            $this->provider_id =  $provider_id;
            $this->isAdmin = true;
        }
        // dd($this->booking_id,$booking_service_id, $this->provider_id);

        $this->checkout = [
            'confirmation_upload_type' => 'print_and_sign',
            'rating' => 0,
            'feedback_comments' => '',

        ];

        $this->assignment = Booking::where('id', $this->booking_id)->first();
        $this->booking_service = BookingServices::where('id', $booking_service_id)->first();
        $this->checkout['actual_start_timestamp'] = Carbon::parse($this->booking_service->start_time);
        $this->checkout['actual_start_date'] = Carbon::parse($this->booking_service->start_time)->format('m/d/Y');
        $this->checkout['actual_start_hour'] = date_format(date_create($this->booking_service->start_time), $this->timeFormat == 12 ? 'h' : 'H');
        $this->checkout['actual_start_min'] = date_format(date_create($this->booking_service->start_time), 'i');
        if ($this->timeFormat == 12) {
            $this->timeSlots['start'] = date_format(date_create($this->booking_service->start_time), 'a');
        }


        if ($this->booking_service) {
            $this->checkout_details = json_decode($this->booking_service->service->close_out_procedure, true);  //getting service's close-out-procedure
            $this->booking_provider = BookingProvider::where(['booking_service_id' => $booking_service_id, 'provider_id' => $this->provider_id])->first();
            if ($this->booking_provider && ($this->booking_provider->check_out_procedure_values != null)) {
                $this->checkout = $this->booking_provider->check_out_procedure_values;
                if (!isset($this->checkout['confirmation_upload_type']))
                    $this->checkout['confirmation_upload_type'] = 'print_and_sign';
                $this->checkout['actual_start_timestamp'] = $this->checkout['actual_start_timestamp'] ?? Carbon::parse($this->booking_service->start_time);
                $this->checkout['actual_start_date'] = $this->checkout['actual_start_date'] ?? Carbon::parse($this->booking_service->start_time)->format('m/d/Y');
                $this->checkout['actual_start_hour'] = $this->checkout['actual_start_hour']  ?? date_format(date_create($this->booking_service->start_time),'H');
                $this->checkout['actual_start_min'] =  $this->checkout['actual_start_min'] ?? date_format(date_create($this->booking_service->start_time), 'i');
                $this->checkout['feedback_comments'] =  $this->checkout['feedback_comments'] ?? '';
                
            } else {
                //check if booking-service has check-in procedure enabled
                $check_in_procedure = json_decode($this->booking_service->service->check_in_procedure, true);
                if ($check_in_procedure) {
                    if (isset($check_in_procedure['enable_button']) && ($check_in_procedure['enable_button'])) {    //check-in procedure enabled

                        if ($this->booking_provider) {
                            $checked_in_details = $this->booking_provider->check_in_procedure_values;
                            if (isset($checked_in_details['actual_start_timestamp'])) {
                                $this->checkout['actual_start_timestamp'] = $checked_in_details['actual_start_timestamp'];
                                $this->checkout['actual_start_date'] = Carbon::parse($checked_in_details['actual_start_timestamp'])->format('m/d/Y');
                                $this->checkout['actual_start_hour'] = $checked_in_details['actual_start_hour'];
                                $this->checkout['actual_start_min'] = $checked_in_details['actual_start_min'];
                            }
                        }
                    }
                }
            }
            $this->checkout['actual_end_date'] = $this->checkout['actual_end_date'] ??  Carbon::now()->format('m/d/Y');
            $this->checkout['actual_end_hour'] = $this->checkout['actual_end_hour'] ??      date_format(date_create($this->booking_service->end_time),$this->timeFormat == 12 ? 'h' : 'H');
            $this->checkout['actual_end_min'] = $this->checkout['actual_end_min'] ??     date_format(date_create($this->booking_service->end_time), 'i');
            if ($this->timeFormat == 12) {
                $this->timeSlots['end'] = date_format(date_create($this->booking_service->end_time), 'a');
            }
        }
        if (!isset($this->checkout['rating']))
            $this->checkout['rating'] = 0;
    }

    public function rules()
    {
        $rules = [
            'checkout.actual_end_date' => 'required|date|after:checked_in_details.actual_start_date',
            'checkout.actual_end_hour' => 'required|numeric|between:0,23',
            'checkout.actual_end_min' => 'required|numeric|between:0,59',
            'checkout.actual_start_hour' => 'required|numeric|between:0,23',
            'checkout.actual_start_min' => 'required|numeric|between:0,59'
        ];
        if ($this->checkout['confirmation_upload_type'] == "print_and_sign")
            $rules['upload_timesheet'] = 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv';
        if ($this->checkout['confirmation_upload_type'] == "digital_signature")
            $rules['upload_signature'] = 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv';

        if (session()->get('isProvider')) {
            // $rules['timestamps.start'] = "required|date|before_or_equal:now";    // since value is uneditable rn, remove the check
            $rules['timestamps.end'] = "required|date|before_or_equal:now";
        }
        return $rules;
    }

    public function saveStepOne()
    {
        if ($this->timeFormat == 12) {
            $this->timestamps['start'] = Carbon::createFromFormat('m/d/Y h:i A', $this->checkout['actual_start_date'] . ' ' . ($this->checkout['actual_start_hour'] > 12 ? ($this->checkout['actual_start_hour']-12) : $this->checkout['actual_start_hour']) . ':' . $this->checkout['actual_start_min'] . ' '. $this->timeSlots['start']);
            $this->timestamps['end'] = Carbon::createFromFormat('m/d/Y h:i A', $this->checkout['actual_end_date'] . ' ' . ($this->checkout['actual_end_hour'] > 12 ? ($this->checkout['actual_end_hour']-12): $this->checkout['actual_end_hour']) . ':' . $this->checkout['actual_end_min'] .  ' ' . $this->timeSlots['end']);
    
        } else {
            $this->timestamps['start'] = Carbon::createFromFormat('m/d/Y H:i:s', $this->checkout['actual_start_date'] . ' ' . $this->checkout['actual_start_hour'] . ':' . $this->checkout['actual_start_min'] . ':00');
            $this->timestamps['end'] = Carbon::createFromFormat('m/d/Y H:i:s', $this->checkout['actual_end_date'] . ' ' . $this->checkout['actual_end_hour'] . ':' . $this->checkout['actual_end_min'] . ':00');
        }

        // dd($this->timestamps, $this->checkout['actual_start_date']);

        $this->validate();


        $this->checkout['actual_end_timestamp'] = $this->timestamps['end'];
        // Carbon::createFromFormat('m/d/Y H:i:s', $this->checkout['actual_end_date'] . ' ' . $this->checkout['actual_end_hour'] . ':' . $this->checkout['actual_end_min'] . ':00');

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

        $this->booking_provider->check_out_procedure_values = $this->checkout;
        if ($this->booking_provider->check_in_procedure_values == null) {
            $values = [
                'actual_start_hour' => $this->checkout['actual_start_hour'],
                'actual_start_min' => $this->checkout['actual_start_min'],
                'provider_signature_path' => null,
                'customer_signature_path' => null,
                'actual_start_timestamp' => $this->timestamps['start'],
                'added_at' => 'checkout'
            ];
            $this->booking_provider->check_in_procedure_values = $values;
        }
        $this->booking_provider->save();
        // dd($this->checkout); 
        if (isset($this->checkout_details['customize_form']) && $this->checkout_details['customize_form'] == true && isset($this->checkout_details['customize_form_id']))
            $this->setStep(2);
        else
            $this->setStep(3);
    }
    public function saveStepTwo()
    {
        $this->emit('saveCustomForm');
        $this->setStep(3);
    }

    public function saveStepThree()
    {
        $this->booking_provider->check_out_procedure_values = $this->checkout;
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
