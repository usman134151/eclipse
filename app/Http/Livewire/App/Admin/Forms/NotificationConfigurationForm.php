<?php

namespace App\Http\Livewire\App\Admin\Forms;
use App\Helpers\SetupHelper;
use App\Models\Tenant\BusinessSetup;
use App\Models\Tenant\NotificationTemplateRoleFrequencies;
use App\Models\Tenant\NotificationTemplateRoles;
use Livewire\Component;
use App\Models\Tenant\NotificationTemplates;
use App\Models\Tenant\Role;
use App\Models\Tenant\SystemRole;
use Illuminate\Validation\Rule;
use App\Services\App\NotificationService;

class NotificationConfigurationForm extends Component
{
	public $notification_type;//from route

	public $from_email;//from route

	public $editMode=false;
	public $notification;
	public $triggers;
	public $userTypes;
	public $adminRoles;
	public $customerApplyRoles;
	public $selectedUserTypes=[];
	public $selectedTypesData=[];

	public $tagValues=[];
	protected $listeners = ['editRecord' => 'edit' ,'updateVal','updateValArray'];

	public $setupValues = [
        'roles'=>['parameters'=>['SystemRole', 'id', 'system_role_name', '', '', 'system_role_name', false, 'notification.role_id','','roles',1]],
	];

	public function mount(NotificationTemplates $notification,$type){
		$this->tagValues=[
			"@admin_company",
			"@booking_start_at",
			"@consumer",
			"@booking_end_at",
			"@booking_duration",
			"@booking_location",
			"@services",
			"@service_type",
			"@dashboard",
			"@reports"
		];
		// dd($this->triggers);
		$this->from_email=BusinessSetup::first()->notification_email;
		$this->notification_type=$type;
        $this->notification=$notification;
		$this->notification->notification_type = $this->notification_type;
		$this->triggers=NotificationTemplates::where("notification_type","=",$type)->get();
		$this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
		$this->userTypes=Role::where('role_type','=',1)->get();
		$this->customerApplyRoles=Role::where('role_type','=',2)->get();
		$this->adminRoles=SystemRole::all();
    }

	public function addFrequency($key){
		$this->selectedTypesData[$key]['frequencies'][]=[
			'notification_template_role_id'=>null,
			'frequency_days'=>null,
			'frequency_hour'=>null,
			'frequency_min'=>null,
			'frequency_type'=>null,
		];
		$this->dispatchBrowserEvent('refreshSelectsOnly');
	}
	public function removeFrequency($key,$fkey){
		array_splice($this->selectedTypesData[$key]['frequencies'], $fkey, 1);
		$this->selectedTypesData[$key]['frequencies'] = array_values($this->selectedTypesData[$key]['frequencies']);
		$this->dispatchBrowserEvent('refreshSelectsOnly');
	}
	public function updateValArray($attrName,$key, $val){
		$this->selectedTypesData[$key][$attrName]=$val;
		$this->dispatchBrowserEvent('refreshSelectsOnly');
	}
	public function updateVal($attrName, $val)
	{
		// dd($this->adminRoles);
		if($attrName && $attrName=='selectedTypesData'){
			foreach ($val as $selectedType) {
				$existingType = collect($this->selectedTypesData)->firstWhere('role_id', $selectedType);
			
				if ($existingType === null) {
					$newType = [
						'role_id' => $selectedType,
						'name' => $this->userTypes->where('id', $selectedType)->first()->name,
						'display_name' => $this->userTypes->where('id', $selectedType)->first()->display_name,
						'notification_subject' => null,
						'notification_text' => null,
						'admin_roles' => null,
						'customer_roles' => null,
						'notification_email' => $this->from_email,
						'notification_reply_to' => null,
						'frequencies' => [],
					];
					$this->selectedTypesData[] = $newType;
				}
			}
			// Remove types that are not present in $val
			$this->selectedTypesData = collect($this->selectedTypesData)->filter(function ($type) use ($val) {
				return in_array($type['role_id'], $val);
			})->values()->all();
			$this->selectedTypesData = array_values($this->selectedTypesData);
			$this->selectedUserTypes = $val;
		}else if($attrName && $attrName=='trigger'){
			// $this->notification[$attrName] = $val;
			$this->setNotificationData($val);
		}
		$this->dispatchBrowserEvent('refreshSelects2');
	}
	private function setNotificationData($id){
		if($id){

			$this->notification=$this->triggers->where('id','=',$id)->first();
			// dd($this->notification);
			$roles=$this->notification->notificationTemplateRoles;
			$this->selectedUserTypes=[];
			$this->selectedTypesData=[];
			foreach ($roles as $role) {
				$newType = [
					'id'=>$role->id,
					'role_id' => $role->role_id,
					'name' => $this->userTypes->where('id', $role->role_id)->first()->name,
					'display_name' => $this->userTypes->where('id', $role->role_id)->first()->display_name,
					'notification_subject' => $role->notification_subject,
					'notification_text' => $role->notification_text,
					'admin_roles' => $role->admin_roles?json_decode($role->admin_roles):null,
					'customer_roles' => $role->customer_roles?json_decode($role->customer_roles):null,
					'notification_email' => $role->notification_email,
					'notification_reply_to' => $role->notification_reply_to,
					'frequencies' => [],
				];
				$roleAllFrequencies=$role->notificationTemplateRoleFrequencies;
				$frequencies=[];
				foreach($roleAllFrequencies as $frequency){
					$tempFreq=[
						'id'=>$frequency->id,
						'notification_template_role_id'=>$frequency->notification_template_role_id,
						'frequency_days'=>$frequency->frequency_days,
						'frequency_hour'=>$frequency->frequency_hour,
						'frequency_min'=>$frequency->frequency_min,
						'frequency_type'=>$frequency->frequency_type,
					];
					$frequencies[]=$tempFreq;
				}
				$newType['frequencies']=$frequencies;
				$this->selectedTypesData[] = $newType;
				$this->selectedUserTypes[] = $role->role_id;
			}
			// $this->dispatchBrowserEvent('refreshSelects2');
			// $this->validate();
		}
		$this->render();
		if($this->editMode){
			$this->dispatchBrowserEvent('editMode',['value' => $this->notification->id]);
		}else{	
			$this->dispatchBrowserEvent('refreshSelects2');
		}
		// $this->validate();
	}
	public function showList($message="")
	{
		$this->emit('showList',$message);
	}

	public function rules()
	{
		return [
			'notification.name' => 'required|string|max:255',
			'notification.slug' => 'required',
			'selectedTypesData' => 'required|array',
			'selectedTypesData.*.frequencies.*.frequency_type' => 'required|integer',
            'selectedTypesData.*.frequencies.*.frequency_days' => ['required_without_all:selectedTypesData.*.frequencies.*.frequency_hour,selectedTypesData.*.frequencies.*.frequency_min','nullable','integer'],
            'selectedTypesData.*.frequencies.*.frequency_hour' => ['required_without_all:selectedTypesData.*.frequencies.*.frequency_days,selectedTypesData.*.frequencies.*.frequency_min','nullable','integer'],
            'selectedTypesData.*.frequencies.*.frequency_min' => ['required_without_all:selectedTypesData.*.frequencies.*.frequency_days,selectedTypesData.*.frequencies.*.frequency_hour','nullable','integer'],
			'selectedTypesData.*.notification_subject' => 'required_if:notification_type,1',
			'selectedTypesData.*.notification_text' => [
				'required',
				function ($attribute, $value, $fail) {
					if ($this->notification_type == 2 && strlen($value) > 150) {
						$fail('The notification text must not exceed 150 characters.');
					} elseif ($this->notification_type == 3 && strlen($value) > 255) {
						$fail('The notification text must not exceed 255 characters.');
					}
				},
			],
			'selectedTypesData.*.admin_roles' => 'required_if:selectedTypesData.*.name,admin',
			'selectedTypesData.*.customer_roles' => 'required_if:selectedTypesData.*.name,customer',
			// 'selectedTypesData.*.notification_email' => 'required_if:selectedTypesData.*.name,customer,provider,staff|required_if:notification_type,1',
			'selectedTypesData.*.notification_reply_to' => 'required_if:selectedTypesData.*.name,customer,provider,staff',
			// 'notification.role_id' => 'required',

		];
	}
	public function messages()
	{
		return [
			'notification.name.required' => 'The notification name is required.',
			'notification.name.string' => 'The notification name must be a string.',
			'notification.name.max' => 'The notification name must not exceed 255 characters.',
			'notification.name.unique' => 'The notification name has already been taken.',
			'notification.slug.required' => 'The notification description is required.',
			'selectedTypesData.required' => 'The User Type is required.',
			'selectedTypesData.array' => 'The selected types data must be an array.',
			'selectedTypesData.*.frequencies.*.frequency_type.required' => 'The frequency type is required.',
			'selectedTypesData.*.frequencies.*.frequency_days.required_without_all' => 'The frequency days are required.',
			'selectedTypesData.*.frequencies.*.frequency_hour.required_without_all' => 'The frequency hours are required.',
			'selectedTypesData.*.frequencies.*.frequency_min.required_without_all' => 'The frequency minutes are required.',
			'selectedTypesData.*.frequencies.*.frequency_type.integer' => 'The frequency type should be integer.',
			'selectedTypesData.*.frequencies.*.frequency_days.integer' => 'The frequency days should be integer.',
			'selectedTypesData.*.frequencies.*.frequency_hour.integer' => 'The frequency hours should be integer.',
			'selectedTypesData.*.frequencies.*.frequency_min.integer' => 'The frequency minutes should be integer.',
			'selectedTypesData.*.notification_subject.required' => 'The notification subject is required.',
			'selectedTypesData.*.notification_subject.required_if' => 'The notification subject is required.',
			'selectedTypesData.*.notification_text.required' => 'The notification text is required.',
			'selectedTypesData.*.admin_roles.required_if' => 'The admin roles are required.',
			'selectedTypesData.*.customer_roles.required_if' => 'The customer roles are required.',
			'selectedTypesData.*.notification_email.required_if' => 'The notification email is required.',
			'selectedTypesData.*.notification_reply_to.required_if' => 'The notification reply-to is required.',
		];
	}
	
	public function save(){
		try{
			$this->validate();
			$notificationService = new NotificationService;
			$this->notification->body = 1;
			$this->notification = $notificationService->createNotification($this->notification);
			$ids = collect($this->selectedTypesData)->pluck('id')->filter()->values()->all();
			// NotificationTemplateRoles::where('notification_id',$this->notification->id)->whereNotIn('id', $ids)->delete();
			NotificationTemplateRoles::where('notification_id', $this->notification->id)
			->whereNotIn('id', $ids)
			->get()
			->each(function ($record) {
				$record->notificationTemplateRoleFrequencies()->delete(); // Replace 'relationName' with the actual relationship method name
				$record->delete();
			});
			foreach($this->selectedTypesData as $data){
				unset($data['name']);
				unset($data['display_name']);
				$frequencies=$data['frequencies'];
				unset($data['frequencies']);
				if($data['customer_roles'] && count($data['customer_roles'])){
					$data['customer_roles']=json_encode($data['customer_roles']);
				}
				if($data['admin_roles'] && count($data['admin_roles'])){
					$data['admin_roles']=json_encode($data['admin_roles']);
				}
				$data['notification_id']=$this->notification->id;
				$notificationTemplateRoles = NotificationTemplateRoles::createOrUpdate($data);
				
				$fids = collect($frequencies)->pluck('id')->filter()->values()->all();
				NotificationTemplateRoleFrequencies::where('notification_template_role_id',$notificationTemplateRoles->id)->whereNotIn('id', $fids)->delete();

				foreach($frequencies as $frequency){
					$frequency['notification_template_role_id']=$notificationTemplateRoles->id;
					$frequency['frequency_days']=$frequency['frequency_days']?$frequency['frequency_days']:0;
					$frequency['frequency_hour']=$frequency['frequency_hour']?$frequency['frequency_hour']:0;
					$frequency['frequency_min']=$frequency['frequency_min']?$frequency['frequency_min']:0;
					$newFrequency = NotificationTemplateRoleFrequencies::createOrUpdate($frequency);
				}
			}
			$this->showList("Data has been saved successfully");
			$this->notification = new NotificationTemplates;
		} catch (\Illuminate\Validation\ValidationException $e) {
			$this->dispatchBrowserEvent('refreshSelectsOnly');
            throw $e;
        } catch (\Exception $e){
			$this->dispatchBrowserEvent('refreshSelectsOnly');
			dd($e);
		}
	}
	public function edit(NotificationTemplates $notification){
        // $this->notification=$notification;
		$this->editMode=true;
		$this->setNotificationData($notification->id);
    }

	public function render()
	{
		return view('livewire.app.admin.forms.notification-configuration-form');
	}
}
