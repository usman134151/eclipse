<?php

namespace App\Http\Livewire\App\Common\Modals\Admin;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Services\App\BookingAssignmentService;


class ReturnAssignment extends Component
{
    public $showForm, $booking, $bookingService;
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

        $val = ServiceCategory::where('id',$service_id)->select('provider_return_window'.$this->serviceTypes[$this->bookingService->service_types]['postfix'])->first()->toArray();
        if($val)
        $return_window = json_decode($val['provider_return_window' . $this->serviceTypes[$this->bookingService->service_types]['postfix']],true);
        dd($return_window);
    }

    public function unassign()
    { 
            $provider_id = Auth::id();
            //delete booking_provider record
            $bookingPro = BookingProvider::where(['booking_id' => $this->booking->id,'booking_service_id'=>$this->bookingService->id, 'provider_id' => $provider_id])->first();
            if(!is_null($bookingPro)){
                $bookingPro->delete();
                $this->booking->status = 1;
                $this->booking->save();
            }


           //add email notification

            $message = "Provider '" . Auth::user()->name . "' surrendered from booking";
            // if ($this->data['unassign_reason'])
            //     $message .= ' (Reason: ' . $this->data['unassign_reason'] . ')';
            callLogs($this->booking->id, 'unassign', 'unassigned', $message);
            BookingAssignmentService::reTriggerAutoAssign($this->booking->id, $this->bookingService->id);
       
            // START : L7 EMAILS AND NOTIFICATION TRIGGERS 

            // $provider = Auth::user();
            // $user_role_id =  $this->role->getProviderId();
            // $templateId = Helper::getTemplate('assignment-returned', $user_role_id, 'email_template');
            // $sms_templateId = Helper::getTemplate('assignment-returned', $user_role_id, 'sms_template');
            // $notification_templateId = Helper::getTemplate('assignment-returned', $user_role_id, 'notification_template');
            // $params = [
            //     'email'       =>  $provider->email, //Provider Assignment Returned
            //     'user'        =>  $provider->name,
            //     'user_id'     =>  $provider->id,
            //     'sms_template' =>  $sms_templateId,
            //     'templateId'  =>  $templateId,
            //     'item_id'     =>  $this->booking->id,
            //     'mail_type'   => 'booking',
            //     'provider_id' => $provider_id,
            //     'phone'       =>  isset($provider->users_detail) ? clean($provider->users_detail->phone) : "",

            // ];
            // Helper::sendTemplatemail($params);

            // $noti = [
            //     'user_id'     =>  auth()->user()->id, // provider
            //     'templateId'  =>  $notification_templateId,
            //     'item_id'     => $this->booking->id,
            //     'item_type'   => 'booking',
            // ];
            // Helper::save_notification($noti);

            // $admin = $this->user->getAdmin();
            // $user_role_id =  $this->role->getAdminId();
            // $templateId = Helper::getTemplate('assignment-returned', $user_role_id, 'email_template');
            // $sms_templateId = Helper::getTemplate('assignment-returned', $user_role_id, 'sms_template');
            // $notification_templateId = Helper::getTemplate('assignment-returned', $user_role_id, 'notification_template');
            // $params = [
            //     'email'       =>  $admin->email, //admin Assignment Returned
            //     'user'        =>  $admin->name,
            //     'user_id'     =>  $admin->id,
            //     'sms_template' =>  $sms_templateId,
            //     'templateId'  =>  $templateId,
            //     'item_id'     =>  $this->booking->id,
            //     'mail_type'   => 'booking',
            //     'provider_id' => $provider_id,
            //     'phone'       =>  isset($admin->users_detail) ? clean($admin->users_detail->phone) : "",

            // ];

            // Helper::sendTemplatemail($params);
            // $noti = [
            //     'user_id'     =>  $admin->id, // admin
            //     'templateId'  =>  $notification_templateId,
            //     'item_id'     => $this->booking->id,
            //     'item_type'   => 'booking',
            //     'provider_id' => $provider_id,

            // ];
            // Helper::save_notification($noti);

            // $message = "Assignment returned request by "  . \Auth::user()->name;
            // $logs = array(
            //     'action_by' => \Auth::user()->id,
            //     'action_to' => $this->booking->id,
            //     'item_type' => 'Booking',
            //     'message' => $message,
            //     'type' => 'Booking return',
            //     'request_to' => json_encode($request->all())
            // );
            // Helper::addLogs($logs);
            
            // END : L7 EMAILS AND NOTIFICATION TRIGGERS 

        

        $this->emit('showConfirmation', 'Unassigned from booking successfully');
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
