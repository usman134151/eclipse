<?php

namespace App\Http\Livewire\App\Common\Import;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Tenant\User;
use App\Models\Tenant\Company;
use App\Models\Tenant\SetupValue;
use Livewire\WithFileUploads;
use App\Helpers\SetupHelper;
use App\Models\Tenant\NotificationTemplateRoles;
use App\Models\Tenant\NotificationTemplates;
use App\Models\Tenant\Role;
use App\Models\Tenant\TriggerType;
use App\Services\App\UserService;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class Notification extends Component
{
    use WithFileUploads;
    public $notification_type;
    public $file;
    public $notifications;
    public $warningMessage='',$errorMessage='';
    protected $listeners = ['updateVal' => 'updateVal'];
    //setup values
    public $triggerTypes;
    public $userTypes;

    public function render()
    {
        return view('livewire.app.common.import.notification');
    }


    public function mount(){
       
		$this->triggerTypes=TriggerType::all();
        // dd($this->triggerTypes);
        $this->userTypes=Role::get();
        

     }

    public function updatedFile()
    {
        $this->validate([
            'file' => 'required|file|mimetypes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
       
        $rows = Excel::toArray([], $this->file)[0];
        $this->notifications=[];
        $this->warningMessage='';
        //dd($rows);
        // Initialize a counter variable
        $i = 0;
        
       $triggerTypeId=2;
     

        foreach ($rows as $row) {
            if($i>0){
                try{
                    if($row[0]){
                        $triggerTypeFound=null;
                        foreach($this->triggerTypes as $triggerType){
                            if($row[0]==$triggerType->name){
                                $triggerTypeId=$triggerType->id;
                                $triggerTypeFound=1;
                                break;
                            }
                        }
                        if(!$triggerTypeFound){
                            $NotificationTemplateRoles=[];
                            if($this->notification_type==1){
                                if($row[1] && $row[2] && $row[1]!="--" && $row[2]!="--"){
                                    $roleAdmin=[
                                        'role_id' => 1, //Admin
                                        'notification_subject' => Str::limit($row[2], 250),
                                        'notification_text'   => $row[1],
                                    ];
                                    $NotificationTemplateRoles[]=$roleAdmin;
                                }
                                if($row[3] && $row[4] && $row[3]!="--" && $row[4]!="--"){
                                    $roleProvider=[
                                        'role_id' => 2, //Provider
                                        'notification_subject' => Str::limit($row[4], 250),
                                        'notification_text'   => $row[3],
                                    ];
                                    $NotificationTemplateRoles[]=$roleProvider;
                                }
                                if($row[5] && $row[6] && $row[5]!="--" && $row[6]!="--"){
                                    $roleCustomer=[
                                        'role_id' => 4, //Customer
                                        'notification_subject' => Str::limit($row[6], 250),
                                        'notification_text'   => $row[5],
                                    ];
                                    $NotificationTemplateRoles[]=$roleCustomer;
                                }
                            }
                            else{
                                if($row[1] && $row[1]!="--"){
                                    $roleAdmin=[
                                        'role_id' => 1, //Admin
                                        'notification_subject' => Str::limit($row[1], 250),
                                        'notification_text'   => $row[1],
                                    ];
                                    $NotificationTemplateRoles[]=$roleAdmin;
                                }
                                if($row[2] && $row[2]!="--"){
                                    $roleProvider=[
                                        'role_id' => 2, //Provider
                                        'notification_subject' => Str::limit($row[2], 250),
                                        'notification_text'   => $row[2],
                                    ];
                                    $NotificationTemplateRoles[]=$roleProvider;
                                }
                                if($row[3] && $row[3]!="--"){
                                    $roleCustomer=[
                                        'role_id' => 4, //Customer
                                        'notification_subject' => Str::limit($row[3], 250),
                                        'notification_text'   => $row[3],
                                    ];
                                    $NotificationTemplateRoles[]=$roleCustomer;
                                }                               
                            }


                            $notification = [
                                'trigger_type_id'  => $triggerTypeId,
                                'trigger'  => $row[0],
                                'name' => $row[0],
                                'slug' => Str::slug($row[0], '_'),
                                'notification_type' => $this->notification_type,
                                'notificationTemplateRoles'=>$NotificationTemplateRoles
                            ];
                            
                            $this->notifications[] = $notification;
                        }
                    }
                }
                catch(\ErrorException $e){
                $this->warningMessage="Please make sure that you are trying to upload valid file to import data.";
                }
            }
            $i++;

        }
       
        if(count($this->notifications)==0 && $this->warningMessage==''){
            $this->warningMessage="Please ensure that the file contains records before proceeding with the import. Currently, the file is empty.";
        }
        $this->dispatchBrowserEvent('refreshSelects');
    }

    public function save()
    {
      
        $this->resetValidation();

        $validationRules = [
            'notifications.*.trigger_type_id' => 'required',
            'notifications.*.trigger' => 'required',
            'notifications.*.name' => 'required',
            'notifications.*.slug' => 'required',
            'notifications.*.notification_type' => 'required',
            'notifications.*.notificationTemplateRoles.*.role_id' => 'required',
            'notifications.*.notificationTemplateRoles.*.notification_subject' => 'required',
            'notifications.*.notificationTemplateRoles.*.notification_text' => 'required',

        ];
        $validationMessages = [
            'notifications.*.trigger_type_id.required' => "Field is required",
            'notifications.*.trigger.required' => "Field is required",
            'notifications.*.name.required' => "Field is required",
            'notifications.*.slug.required' => "Field is required",
            'notifications.*.notification_type.required' => "Field is required",
            'notifications.*.notificationTemplateRoles.*.role_id.required' => "Field is required",
            'notifications.*.notificationTemplateRoles.*.notification_subject.required' => "Field is required",
            'notifications.*.notificationTemplateRoles.*.notification_text.required' => "Field is required",

        ];
        try {
            $validatedData = $this->validate($validationRules,$validationMessages);
        } catch (ValidationException $e) {
          
            $this->addErrorMessages($e);
            return;
        }
       
        NotificationTemplates::where('notification_type',$this->notification_type)->delete();
        foreach ($this->notifications as $notification) {
            $notificationTemplate = NotificationTemplates::updateOrCreate(
                ['trigger' => $notification['trigger'], 'notification_type' =>$this->notification_type], // Search criteria
                [      // Data to update or create
                    'trigger_type_id'  =>$notification['trigger_type_id'],
                    'trigger'  =>$notification['trigger'],
                    'name' =>$notification['name'],
                    'slug' =>$notification['slug'],
                   
                ]
            );
            NotificationTemplateRoles::where('notification_id',$notificationTemplate->id)->delete();
            foreach($notification['notificationTemplateRoles'] as $notificationTemplateRole){
                $role=new NotificationTemplateRoles([
                    'notification_id'  => $notificationTemplate->id,
                    'role_id' => $notificationTemplateRole['role_id'], //
                    'notification_subject' => Str::limit($notificationTemplateRole['notification_subject'], 250),
                    'notification_text'   => $notificationTemplateRole['notification_text'],
                ]);
                $role->save();
                if($notificationTemplateRole['role_id']==4){//Customer
                    $rolesToAssociate=Role::where('role_type','=',2)->get();
                    if($rolesToAssociate && count($rolesToAssociate)){
                        foreach($rolesToAssociate as $roleTo){
                            $role=new NotificationTemplateRoles([
                                'notification_id'  => $notificationTemplate->id,
                                'role_id' => $roleTo->id, //
                                'notification_subject' => Str::limit($notificationTemplateRole['notification_subject'], 250),
                                'notification_text'   => $notificationTemplateRole['notification_text'],
                            ]);
                            $role->save();
                        }
                    }
                }
            }

        }
        $this->showList("Notifications data has been imported successfully");
        $this->notifications = [];
    }

    public function showList($message = "")
	{
		// Save data
		$this->emit('showList', $message);
	}
    protected function addErrorMessages(ValidationException $e)
    {
        $errors = $e->validator->getMessageBag();
        $this->errorMessage="Please make sure all records are properly filled";
        
        foreach ($errors->messages() as $field => $messages) {
            foreach ($messages as $message) {
                $this->addError($field, $message);
            }
        }
    }

}
