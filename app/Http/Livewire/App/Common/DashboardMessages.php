<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\AnnouncementMessage;
use Illuminate\Support\Carbon;
use Livewire\Component;

class DashboardMessages extends Component
{
    public $userType;
    public $displayTo;
    public $messages;

    public function mount(){
        $messages=[];
        
        
        if($this->displayTo=="login_screen"){
            $messages=AnnouncementMessage::where('on_log_in_screen',1)->get()->toArray();
        }else if($this->userType==1){
            $messages=AnnouncementMessage::where('on_dashboard',1)->where('display_to_admin',1)->get()->toArray();
        }else if($this->userType==2){
            $messages=AnnouncementMessage::where('on_dashboard',1)->where('display_to_customers',1)->get()->toArray();
        }else if($this->userType==3){
            $messages=AnnouncementMessage::where('on_dashboard',1)->where('display_to_providers',1)->get()->toArray();
        }
        $messagesNoExpired=[];
        foreach($messages as $messagee){
            if($messagee['days']){
                try {
                    $expiry_date=Carbon::parse($messagee['days']);
                    if(!$expiry_date->isPast()){
                        $messagesNoExpired[]=$messagee;
                    }
                } catch (\Exception $e) {
                }
            }else{
                $messagesNoExpired[]=$messagee;
            }
        }
        $this->messages=$messagesNoExpired;
    }
    public function render()
    {
        return view('livewire.app.common.dashboard-messages');
    }

}
