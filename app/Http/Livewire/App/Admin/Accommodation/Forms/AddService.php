<?php

namespace App\Http\Livewire\App\Admin\Accommodation\Forms;

use Livewire\Component;
use App\Models\Tenant\ServiceCategory;
use App\Helpers\SetupHelper;
use App\Services\App\ServiceCatagoryService;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\Rule;
class AddService extends Component
{
    public $service;
    public $component = 'basic-service-setup';
    public $step = 1;
    protected $listeners = ['editRecord' => 'edit' ,'updateVal'];

    public $setupValues = [
        'accomodations' => ['parameters' => ['Accommodation', 'id', 'name', '', '', 'name', false, 'service.accommodations_id','','accommodations_id',1]]
	];
    public $inpersons=[[
        'label'=>'',
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'duration'=>''

    ]];
    public $inpersonssecound=[[
        'label'=>'',
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'charge_to_customer'=>''

    ]];
    public $virtuals=[[
        'label'=>'',
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'duration'=>''

    ]];
    public $invirtualssecound=[[
        'label'=>'',
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'charge_to_customer'=>''

    ]];
    public $phones=[[
        'label'=>'',
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'duration'=>''

    ]];
    public $inphonessecound=[[
        'label'=>'',
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'charge_to_customer'=>''

    ]];
    public $teleconferences=[[
        'label'=>'',
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'duration'=>''

    ]];
    public $teleconferencessecound=[[
        'label'=>'',
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'charge_to_customer'=>''

    ]];
    public $service_inpersons=[[
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'exclude_after_hours'=>'',
        'exclude_closed_hours'=>''
    ]];
    public $service_virtuals=[[
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'exclude_after_hours'=>'',
        'exclude_closed_hours'=>''
    ]];
    public $service_phones=[[
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'exclude_after_hours'=>'',
        'exclude_closed_hours'=>''
    ]];
    public $service_teleconferences=[[
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'exclude_after_hours'=>'',
        'exclude_closed_hours'=>''
    ]];
    public $inpersonscancel=[[
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'cancellations'=>'',
        'exclude_after_hours'=>'',
        'modifications' =>'',
        'exclude_closed_hours'=>'',
        'rescheduling'=>'',
        'bill_service_minimums'=>''
    ]];
    public $virtualscancel=[[
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'cancellations'=>'',
        'exclude_after_hours'=>'',
        'modifications' =>'',
        'exclude_closed_hours'=>'',
        'rescheduling'=>'',
        'bill_service_minimums'=>''
    ]];
    public $phonescancel=[[
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'cancellations'=>'',
        'exclude_after_hours'=>'',
        'modifications' =>'',
        'exclude_closed_hours'=>'',
        'rescheduling'=>'',
        'bill_service_minimums'=>''
    ]];
    public $teleconferencescancel=[[
        'hours'=>'',
        'charges'=>'',
        'duration'=>'',
        'no_of_providers'=>'',
        'cancellations'=>'',
        'exclude_after_hours'=>'',
        'modifications' =>'',
        'exclude_closed_hours'=>'',
        'rescheduling'=>'',
        'bill_service_minimums'=>''
    ]];
    public $speclizations=[[
        'in_person'=>'',
        'virtual'=>'',
        'phone'=>'',
        'teleconference'=>'',
        'hide_from_customers'=>'',
        'hide_from_providers'=>"",
        'duration'=>'',
        'no_of_providers'=>'',
        'disable'=>''
    ]];
    public function mount(ServiceCategory $service){
        $this->service=$service;
		$this->setupValues=SetupHelper::loadSetupValues($this->setupValues);

	}
    public function rules()
	{
		return [
			'service.name' => [
				'required',
				'string',
				'max:255',
				Rule::unique('service_categories', 'name')->ignore($this->service->id)],
            'service.accommodations_id'=>'required',
            'service.description' => [
				'required',
				'string',
				'max:255']

		];
	}
    public function save($redirect=1){
		$this->validate();
         $this->service->added_by = 1;
         $this->service->service_status = 1;
        $categoryService = new ServiceCatagoryService;
        // $s = $service_category['accommodations_id']='';
        $this->service = $categoryService->createService($this->service);

        if($redirect){
			$this->showList("Service has been saved successfully");
			$this->service = new ServiceCategory;
		}


	}
    public function addPerson(){
        $this->inpersons[]=[
            'label'=>'',
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'duration'=>''
        ];
    }
    public function addPersonSecound(){
        $this->inpersonssecound[]=[
            'label'=>'',
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'charge_to_customer'=>''
        ];
    }
    public function addVirtual(){
        $this->virtuals[]=[
            'label'=>'',
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'duration'=>''
        ];
    }
    public function addVirtualSecound(){
        $this->invirtualssecound[]=[
            'label'=>'',
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'charge_to_customer'=>''
        ];
    }
    public function addPhone(){
        $this->phones[]=[
            'label'=>'',
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'duration'=>''
        ];
    }
    public function addphoneSecound(){
        $this->inphonessecound[]=[
            'label'=>'',
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'charge_to_customer'=>''
        ];
    }
    public function addTeleconference(){
        $this->teleconferences[]=[
            'label'=>'',
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'duration'=>''
        ];
    }
    public function addpTeleconferenceSecound(){
        $this->teleconferencessecound[]=[
            'label'=>'',
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'charge_to_customer'=>''
        ];
    }
    public function addServiceInPerson(){
        $this->service_inpersons[] = [
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'exclude-after-hours'=>'',
            'exclude_closed_hours'=>''
        ];
    }
    public function addServiceVirtual(){
        $this->service_virtuals[] = [
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'exclude-after-hours'=>'',
            'exclude_closed_hours'=>''
        ];
    }
    public function addServicePhone(){
        $this->service_phones[] = [
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'exclude-after-hours'=>'',
            'exclude_closed_hours'=>''
        ];
    }
    public function addServiceTeleconference(){
        $this->service_teleconferences[] = [
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'exclude-after-hours'=>'',
            'exclude_closed_hours'=>''
        ];
    }
    public function addInpersonCancel(){
        $this->inpersonscancel[] = [
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'cancellations'=>'',
            'exclude_after_hours'=>'',
            'modifications' =>'',
            'exclude_closed_hours'=>'',
            'rescheduling'=>'',
            'bill_service_minimums'=>''
        ];
    }
    public function addVirtualCancel(){
        $this->virtualscancel[] = [
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'cancellations'=>'',
            'exclude_after_hours'=>'',
            'modifications' =>'',
            'exclude_closed_hours'=>'',
            'rescheduling'=>'',
            'bill_service_minimums'=>''
        ];
    }
    public function addPhoneCancel(){
        $this->phonescancel[] = [
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'cancellations'=>'',
            'exclude_after_hours'=>'',
            'modifications' =>'',
            'exclude_closed_hours'=>'',
            'rescheduling'=>'',
            'bill_service_minimums'=>''
        ];
    }
    public function addTeleconferenceCancel(){
        $this->teleconferences[] = [
            'hours'=>'',
            'charges'=>'',
            'duration'=>'',
            'no_of_providers'=>'',
            'cancellations'=>'',
            'exclude_after_hours'=>'',
            'modifications' =>'',
            'exclude_closed_hours'=>'',
            'rescheduling'=>'',
            'bill_service_minimums'=>''
        ];
    }
    public function addSpeclizations()
    {
        $this->speclizations[]=[
            'in_person'=>'',
            'virtual'=>'',
            'phone'=>'',
            'teleconference'=>'',
            'hide_from_customers'=>'',
            'hide_from_providers'=>"",
            'duration'=>'',
            'no_of_providers'=>'',
            'disable'=>''
        ];
    }
    public function updateVal($attrName, $val)
	{

		   $this->service[$attrName] = $val;

	}
	public function render()
	{
		return view('livewire.app.admin.accommodation.forms.add-service');
	}

	public function showList($message="")
	{

		$this->emit('showList',$message);
	}
    public function edit(ServiceCategory $service){
        $this->service=$service;

    }
    public function switch($component)
	{
		$this->component = $component;
	}
    public function serviceRates(){
        $this->step =3;
    }
    public function ServiceFrom(){
        $this->step = 4;
    }
    public function ServiceConfig(){
        $this->step = 5;
    }
    public function advanceOptions(){
        $this->step = 6;
    }

}
