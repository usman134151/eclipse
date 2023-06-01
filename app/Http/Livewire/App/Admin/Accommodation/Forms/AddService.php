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
    public $serviceTypes=['1'=>['class'=>'inperson-rate','postfix'=>'','title'=>'In-Person Rates'],
                          '2'=>['class'=>'virtual-rate','postfix'=>'_v','title'=>'Virtual Rates'],
                          '4'=>['class'=>'phone-rate','postfix'=>'_p','title'=>'Phone Rates'],
                          '5'=>['class'=>'teleconference-rate','postfix'=>'_t','title'=>'Teleconference Rates'],
                        ];
    public $billingTypes=['1'=>['class'=>'hour-rate','postfix'=>'hour_price'],
                        '2'=>['class'=>'day-rate','postfix'=>'day_rate_price'],
                        '4'=>['class'=>'fixed-rate','postfix'=>'fixed_rate'],
                       
                      ];                    
    public $setupCheckboxes=[];
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
        $this->setupCheckboxes['service_types']=['rendered'=>''];
        $this->loadValues($this->service);
       // dd($this->service);

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
            'service.service_type' =>'required',
            'service.frequency_id'=>'required',
            'service.rate_status'=>'required',
            'service.status'=>'',
            'service.description' => [
				'required',
				'string',
				'max:255',
                ]

		];
	}

    public function save($redirect=1){
		$this->validate();
         $this->service->added_by = 1;
         $this->service->service_status = 1;
        $categoryService = new ServiceCatagoryService;
        // $s = $service_category['accommodations_id']='';
        $this->service->frequency_id=implode(',',$this->service->frequency_id);
        $this->service->service_type=implode(',',$this->service->service_type);
        $this->service = $categoryService->createService($this->service);

        if($redirect){
			$this->showList("Service has been saved successfully");
			$this->service = new ServiceCategory;
		}
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
      
        $this->loadValues($this->service);
    

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

    public function loadValues($service){
        $selectedValues=[];$selectedFValues=[];
        if(!is_null($this->service->service_type)){
             $selectedValues=explode(',',$this->service->service_type);
             $this->service->service_type=$selectedValues;
           
        }
        else{
            $this->service->service_type=[];
        }
        if(!is_null($this->service->frequency_id)){
            $selectedFValues=explode(',',$this->service->frequency_id);
            $this->service->frequency_id=$selectedFValues;
       }
       else{
        $this->service->frequency_id=[];
       } 
        $this->setupCheckboxes['service_types']= ['parameters'=>['SetupValue', 'id','setup_value_label','setup_id', '5', 'id', $selectedValues,1,'form-check form-check-inline','service_type','wire:model.defer=service.service_type',[1,2,4,5],'onclick= updateRates($(this))']];
        $this->setupCheckboxes['frequency_id']= ['parameters'=>['SetupValue', 'id','setup_value_label','setup_id', '6', 'id', $selectedFValues,1,'form-check','frequency_id','wire:model=service.frequency_id',['one_time','daily','weekly','weekdaily','monthly'],'']];
          //  dd($this->setupCheckboxes);
        $this->setupCheckboxes=SetupHelper::loadSetupCheckboxes($this->setupCheckboxes);
    }



}
