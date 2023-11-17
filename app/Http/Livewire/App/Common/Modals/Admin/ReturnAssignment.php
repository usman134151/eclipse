<?php

namespace App\Http\Livewire\App\Common\Modals\Admin;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Services\App\BookingAssignmentService;
use App\Services\App\NotificationService;
use Carbon\Carbon;

class ReturnAssignment extends Component
{
    public $showForm, $booking, $bookingService, $bookingProvider, $requireApproval = false , $provider_response=""; 
    protected $listeners = ['showList' => 'resetForm', 'openReturnAssignmentModal' => 'setDetails'];
    private $serviceTypes = [
        '1' => ['class' => 'inperson-rate', 'postfix' => '', 'title' => 'In-Person'],
        '2' => ['class' => 'virtual-rate', 'postfix' => '_v', 'title' => 'Virtual'],
        '4' => ['class' => 'phone-rate', 'postfix' => '_p', 'title' => 'Phone'],
        '5' => ['class' => 'teleconference-rate', 'postfix' => '_t', 'title' => 'Teleconference'],
    ];

    public function render()
    {
        return view('livewire.app.common.modals.admin.return-assignment');
    }

    public function setDetails($booking_id, $service_id = null)
    {
        $this->booking = Booking::where('id', $booking_id)->first();

        if (is_null($service_id))
            //if service_id not set, fetch first service from booking_services 
            $service_id = $this->booking->services->first()->id;

        $this->bookingService = $this->booking->booking_services->where('services', $service_id)->first();
        $this->bookingProvider = BookingProvider::where(['booking_id' => $this->booking->id, 'booking_service_id' => $this->bookingService->id, 'provider_id' => Auth::id()])->first();

        $minimumHours = 0;

        // fetch service provider return window
        $val = ServiceCategory::where('id', $service_id)->select('provider_return_window' . $this->serviceTypes[$this->bookingService->service_types]['postfix'])->first()->toArray();
        if ($val) { //if set, fetch and convert into min-hours
            $returnWindowArr = json_decode($val['provider_return_window' . $this->serviceTypes[$this->bookingService->service_types]['postfix']], true);
            $hour = 0;
            $minute = 0;
            if (isset($returnWindowArr[0][0]['hour']) && !is_null($returnWindowArr[0][0]['hour']) && (int)$returnWindowArr[0][0]['hour'] != 0)
                $hour = (int)$returnWindowArr[0][0]['hour'];
            if (isset($returnWindowArr[0][0]['minute']) && !is_null($returnWindowArr[0][0]['minute']) && (int)$returnWindowArr[0][0]['minute'] != 0)
                $minute = (int)$returnWindowArr[0][0]['minute'];
            $minimumHours = $hour  + ($minute / 60);
        }
        $returnWindow = Carbon::parse($this->bookingService->start_time)->subDay($minimumHours);
        if ($this->bookingProvider->return_status != '2') {
            if ($returnWindow > Carbon::now() && $this->booking->status != 3 && $this->booking->type == 1) {
                $this->requireApproval = false;
            } else {
                //return window has passed, hence requires admin approval
                $this->requireApproval = true;
            }
        }
    }

    public function unassign()
    {
        $data['bookingData'] = $this->booking;

        if ($this->requireApproval == true) {
            //send approval request to admin 
             $this->bookingProvider->return_status = 2;
             $this->bookingProvider->provider_response = $this->provider_response ?? '';
             $this->bookingProvider->save();
             $message = "Return Request submitted to Admin successfully";
            NotificationService::sendNotification('Booking: Provider Return Request', $data);

        } else {       
             //delete booking_provider record
            if (!is_null($this->bookingProvider)) {
                
                // sending notification before removing the record.
                NotificationService::sendNotification('Booking: Returned by Provider', $data);

                $this->bookingProvider->delete();
                $this->booking->status = 1;
                $this->booking->save();
                
                $message = "Provider '" . Auth::user()->name . "' surrendered from booking";
                callLogs($this->booking->id, 'unassign', 'unassigned', $message);
                BookingAssignmentService::reTriggerAutoAssign($this->booking->id, $this->bookingService->id);

                $message = "Unassigned from booking successfully";

            }
        }


        $this->emit('showConfirmation', $message);
        $this->emit('closeReturnAssignmentModal');
    }

    public function mount()
    {
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
