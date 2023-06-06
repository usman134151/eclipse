<?php

namespace App\Http\Livewire\App\Admin\Accommodation\Forms;

use Livewire\Component;
use App\Models\Tenant\ServiceCategory;
use App\Helpers\SetupHelper;
use App\Services\App\ServiceCatagoryService;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\Rule;
use Auth;
class AddService extends Component
{
    public $service;public $label= "Add";
    public $component = 'basic-service-setup';
    public $step = 1;
    public $providerReturn = ['1'=>[['hour'=>'0','minute'=>'0','exclude_holidays'=>false,'by_request'=>false,'exclude_after_hours'=>false]],
                              '2'=>[['hour'=>'0','minute'=>'0','exclude_holidays'=>false,'by_request'=>false,'exclude_after_hours'=>false]],
                              '4'=>[['hour'=>'0','minute'=>'0','exclude_holidays'=>false,'by_request'=>false,'exclude_after_hours'=>false]],
                              '5'=>[['hour'=>'0','minute'=>'0','exclude_holidays'=>false,'by_request'=>false,'exclude_after_hours'=>false]]
                            ];
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
        if(is_null($this->service->rate_status)){
            $this->service->rate_status=1;
            $this->service->status=1;
        }
       
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
				'nullable',
				'string',
				'max:255',
            ],
           'service.disable_for_companies'=>'nullable',
           'service.display_in_quote'=>'nullable',
           'service.display_in_application'=>'nullable', 
           'service.standard_rate_virtual_multiply_provider'=>'nullable',
           'service.standard_in_person_multiply_provider'=>'nullable',
           'service.standard_in_person_multiply_provider_p'=>'nullable',
           'service.standard_in_person_multiply_provider_t'=>'nullable',
           
           'service.hours_price'=>'nullable',
           'service.hours_price_v'=>'nullable',
           'service.hours_price_p'=>'nullable',
           'service.hours_price_t'=>'nullable',  

           'service.after_hours_price'=>'nullable',
           'service.after_hours_price_v'=>'nullable',
           'service.after_hours_price_p'=>'nullable',
           'service.after_hours_price_t'=>'nullable',  

           'service.fixed_rate'=>'nullable',
           'service.fixed_rate_v'=>'nullable',
           'service.fixed_rate_p'=>'nullable',
           'service.fixed_rate_t'=>'nullable',  

           'service.day_rate_price'=>'nullable',
           'service.day_rate_price_v'=>'nullable',
           'service.day_rate_price_p'=>'nullable',
           'service.day_rate_price_t'=>'nullable',  

           'service.provider_limit'=>'nullable',
           'service.provider_limit_v'=>'nullable',
           'service.provider_limit_p'=>'nullable',
           'service.provider_limit_t'=>'nullable',  

           'service.minimum_assistance_hours'=>'nullable',
           'service.minimum_assistance_hours_v'=>'nullable',
           'service.minimum_assistance_hours_p'=>'nullable',
           'service.minimum_assistance_hours_t'=>'nullable',

           'service.minimum_assistance_min'=>'nullable',
           'service.minimum_assistance_min_v'=>'nullable',
           'service.minimum_assistance_min_p'=>'nullable',
           'service.minimum_assistance_min_t'=>'nullable',


           'service.maximum_assistance_hours'=>'nullable',
           'service.maximum_assistance_hours_v'=>'nullable',
           'service.maximum_assistance_hours_p'=>'nullable',
           'service.maximum_assistance_hours_t'=>'nullable',

           'service.maximum_assistance_min'=>'nullable',
           'service.maximum_assistance_min_v'=>'nullable',
           'service.maximum_assistance_min_p'=>'nullable',
           'service.maximum_assistance_min_t'=>'nullable',

           'service.min_providers'=>'nullable',
           'service.min_providers_v'=>'nullable',
           'service.min_providers_p'=>'nullable',
           'service.min_providers_t'=>'nullable', 

           'service.max_providers'=>'nullable',
           'service.max_providers_v'=>'nullable',
           'service.max_providers_p'=>'nullable',
           'service.max_providers_t'=>'nullable', 

           'service.default_providers'=>'nullable',
           'service.default_providers_v'=>'nullable',
           'service.default_providers_p'=>'nullable',
           'service.default_providers_t'=>'nullable', 

           'service.bill_status'=>'nullable',
           'service.payment_deduct_hour'=>'nullable'

		];
	}

    public function save($redirect=1){
		$this->validate();
         $this->service->added_by = Auth::id();
         $this->service->service_status = 1;
        $categoryService = new ServiceCatagoryService;
        
        // $s = $service_category['accommodations_id']='';
        $this->service->frequency_id=implode(',',$this->service->frequency_id);
        $this->service->service_type=implode(',',$this->service->service_type);
        
      
        $this->service->provider_return_window=json_encode([$this->providerReturn["1"]]);
        $this->service->provider_return_window_v=json_encode([$this->providerReturn["2"]]);
        $this->service->provider_return_window_p=json_encode([$this->providerReturn["4"]]);
        $this->service->provider_return_window_t=json_encode([$this->providerReturn["5"]]);
      
       
        $this->service = $categoryService->createService($this->service);
        $this->step=2;
        if($redirect){
			$this->showList("Service has been saved successfully");
			$this->service = new ServiceCategory;
		}
    }    

    public function back(){
        $this->step--;
        $this->loadValues($this->service);
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
        $this->label= "Edit";


       
     
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
        $this->setupCheckboxes['frequency_id']= ['parameters'=>['SetupValue', 'id','setup_value_label','setup_id', '6', 'id', $selectedFValues,1,'form-check','frequency_id','wire:model.defer=service.frequency_id',['one_time','daily','weekly','weekdaily','monthly'],'']];
          //  dd($this->setupCheckboxes);
        $this->setupCheckboxes=SetupHelper::loadSetupCheckboxes($this->setupCheckboxes);
                //provider return window
                $providerReturnValues=[$service->provider_return_window,$service->provider_return_window_v,$service->provider_return_window_p,$service->provider_return_window_t];
                $index=0;
                foreach($this->providerReturn as $key=>$value){
                     // Get the current index
                   
                    $data = json_decode($providerReturnValues[$index], true);
                 
                    if (!empty($data) && is_array($data)) {
                        $this->providerReturn[$key] = $data[0];
                    }
                    $index++;
                }
    }



}
