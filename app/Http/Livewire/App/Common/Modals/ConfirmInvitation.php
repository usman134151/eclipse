<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingInvitationProvider;
use App\Models\Tenant\Role;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ConfirmInvitation extends Component
{
    public $showForm, $data = [

    ];
    public  $booking_id, $invitation_id;
    protected $listeners = ['showList' => 'resetForm', 'openProviderInvitationResponseModal' => 'setBooking'];

    public function mount(){
        $this->data = [
            'status' => 1, 'notes' => ''
        ];
    }
    public function render()
    {
        return view('livewire.app.common.modals.confirm-invitation');
    }
    public function setBooking($booking_id, $invitation_id)
    {
        $this->booking_id = $booking_id;
        $this->invitation_id = $invitation_id;
        $this->data = [
            'status' => 1, 'notes' => ''
        ];
        // 'booking_id'=>$booking_id,'invitation_id'=>$invitation_id,'provider_id'=>
    }
    public function save()
    {
        BookingInvitationProvider::where(['booking_id' => $this->booking_id, 'invitation_id' => $this->invitation_id, 'provider_id' => Auth::id()])
            ->update($this->data);
        $role = new Role();
        $booking = Booking::find($this->booking_id);
        if ($this->data['status'] == 1) {

            $user_role_id =  $role->getProviderId();
            $templateId = getTemplate('assignment-acceptance-confirmation', $user_role_id, 'email_template');
            $sms_templateId = getTemplate('assignment-acceptance-confirmation', $user_role_id, 'sms_template');
            $notification_templateId = getTemplate('assignment-acceptance-confirmation', $user_role_id, 'notification_template');
            $params = [
                'email'       =>  auth()->user()->email, //Assignment Acceptance/Confirmation to provider
                'user'        =>  auth()->user()->name,
                'user_id'     =>  auth()->user()->id,
                'templateId'  =>  $templateId,
                'item_id'     => $booking->id,
                'mail_type'   => 'booking',
                'sms_template' =>  $sms_templateId,
                'phone'       =>  isset(auth()->user()->userdetail) ? clean(auth()->user()->userdetail->phone) : "",
            ];
            sendTemplatemail($params);

            // $noti = [
            //     'user_id'     =>  auth()->user()->id,
            //     'templateId'  =>  $notification_templateId,
            //     'item_id'     => $booking->id,
            //     'item_type'   => 'booking',
            // ];
            // save_notification($noti);

            // $admin  = User::find(Auth::id())->getAdmin();
            // $user_role_id =  $role->getAdminId();
            // $templateId = getTemplate('assignment-acceptance-confirmation', $user_role_id, 'email_template');
            // $sms_templateId = getTemplate('assignment-acceptance-confirmation', $user_role_id, 'sms_template');
            // $notification_templateId = getTemplate('assignment-acceptance-confirmation', $user_role_id, 'notification_template');
            // $params = [
            //     'email'       =>  $admin->email, //Assignment Acceptance/Confirmation to admin
            //     'user'        =>  $admin->name,
            //     'user_id'     =>  $admin->id,
            //     'templateId'  =>  $templateId,
            //     'item_id'     => $booking->id,
            //     'mail_type'   => 'booking',
            //     'sms_template' =>  $sms_templateId,
            //     'phone'       =>  isset($admin->userdetail) ? clean($admin->userdetail->phone) : "",
            // ];
            // sendTemplatemail($params);

            // $noti = [
            //     'user_id'     =>  $admin->id,
            //     'templateId'  =>  $notification_templateId,
            //     'item_id'     => $booking->id,
            //     'item_type'   => 'booking',
            //     'provider_id' =>  auth()->user()->id,

            // ];
            // save_notification($noti);

            // $assignedproviders  = BookingProvider::where(['booking_id' => $booking->id])->count();
            // if ($assignedproviders == $booking->provider_count) {
            //     $user_role_id =  $this->role->getConsumerId();
            //     $templateId = getTemplate('update-provider-assign-request', $user_role_id, 'email_template');
            //     $sms_templateId = getTemplate('update-provider-assign-request', $user_role_id, 'sms_template');
            //     $notification_templateId = getTemplate('update-provider-assign-request', $user_role_id, 'notification_template');
            //     $booking->update(['status' => 2]);
            //     $params = [
            //         'email'       =>  $booking->customer->email, //
            //         'user'        =>  $booking->customer->email,
            //         'user_id'     =>  $booking->user_id,
            //         'templateId'  =>  $templateId,
            //         'item_id'     => $booking->id,
            //         'mail_type'   => 'booking',
            //         'sms_template' =>  $sms_templateId,
            //         'phone'       =>  isset($booking->customer->userdetail) ? clean($booking->customer->userdetail->phone) : "",
            //     ];
            //     sendTemplatemail($params);

                // $noti = [
                //     'user_id'     =>  $booking->user_id,
                //     'templateId'  =>  $notification_templateId,
                //     'item_id'     => $booking->id,
                //     'item_type'   => 'booking',
                // ];
                // save_notification($noti);
            // }
        }

        $this->emit('closeConfirmInvitationModal');
        $this->emit('showConfirmation', 'Invitation response sent successfully');
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
