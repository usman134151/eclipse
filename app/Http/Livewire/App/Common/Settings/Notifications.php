<?php

namespace App\Http\Livewire\App\Common\Settings;

use App\Models\Tenant\NotificationSetting;
use Livewire\Component;

class Notifications extends Component
{
    public $showForm, $model_type,$model_id, $text=false,$email=false,$notification=false;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        $text = NotificationSetting::where(['model_id' => $this->model_id, 'model_type' => $this->model_type, 'notification_type' => '1'])->first();
        $email = NotificationSetting::where(['model_id' => $this->model_id, 'model_type' => $this->model_type, 'notification_type' => '2'])->first();
        $notification = NotificationSetting::where(['model_id' => $this->model_id, 'model_type' => $this->model_type, 'notification_type' => '3'])->first();
        if($text)
            $this->text = $text->status;
        if ($email)
            $this->email = $email->status;
        if ($notification)
            $this->notification = $notification->status;
        return view('livewire.app.common.settings.notifications');
    }

    public function save()
    {
        // dd($this->text,$this->email, $this->notification);
        NotificationSetting::updateOrCreate(['model_id'=>$this->model_id,'model_type'=>$this->model_type,'notification_type'=>'1'],['status'=>$this->text == true ?? 1]);
        NotificationSetting::updateOrCreate(['model_id' => $this->model_id, 'model_type' => $this->model_type, 'notification_type' => '2'], ['status' => $this->email == true ?? 1]);
        NotificationSetting::updateOrCreate(['model_id' => $this->model_id, 'model_type' => $this->model_type, 'notification_type' => '3'], ['status' => $this->notification == true ?? 1]);
        $this->emit('showConfirmation','Notification Settings have been saved successfully!');
       
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
