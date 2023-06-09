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
    public $serviceTypes=['1'=>['class'=>'inperson-rate','postfix'=>'','title'=>'In-Person'],
                          '2'=>['class'=>'virtual-rate','postfix'=>'_v','title'=>'Virtual'],
                          '4'=>['class'=>'phone-rate','postfix'=>'_p','title'=>'Phone'],
                          '5'=>['class'=>'teleconference-rate','postfix'=>'_t','title'=>'Teleconference'],
                        ];
    public $billingTypes=['1'=>['class'=>'hour-rate','postfix'=>'hour_price'],
                        '2'=>['class'=>'day-rate','postfix'=>'day_rate_price'],
                        '4'=>['class'=>'fixed-rate','postfix'=>'fixed_rate'],
                       
                      ];        
    public $checkIn = ["enable_button"=>false,"require_provider_invoice"=>false,"enable_digital_signature"=>false,"customize_form"=>false,"customize_form_id"=>0,"notify_customers"=>false,"customers"=>false ];  
    public $checkOut = ["enable_button_provider"=>false,"enable_button_customers" => false,"customers"=>false,  "provider_payment" => false, "customer_invoice" => false,"enable_digital_signature" =>false, "customize_form" => false,"customize_form_id" =>0,"time_extension" => true,'statuses'=>false,'status_types'=>['completed'=>false,'noshow'=>false,'cancelled'=>false,'noshow_billing'=>0,'noshow_payment'=>0,'cancelled_billing'=>0,'cancelled_payment'=>0]];    
    public $runningLate = [ "enable_button" =>false,"notify_customer"=>false,"customers" =>false,"notify_team_provider" =>false,"customize_form"=>false,"customize_form_id" =>0];                          
    public $providerSettings=['company_name'=>false,'full_service_address'=>false,'requester'=>false,'consumer'=>false,'participants'=>false,'step2'=>false];
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
           'service.payment_deduct_hour'=>'nullable',

           'service.request_start_time' => 'sometimes|nullable',
           'service.request_end_time' => 'sometimes|nullable',
           'service.request_end_address' => 'sometimes|nullable',
           'service.request_no_of_providers' => 'sometimes|nullable',
           'service.request_service_consumer' => 'sometimes|nullable',
           'service.request_participants' => 'sometimes|nullable',

           //step 5 rules
           'service.billing_companies' => 'sometimes|nullable',
           'service.payment_providers' => 'sometimes|nullable',
           'service.billing_timezone' => 'sometimes|nullable',
           'service.billing_timezone_v' => 'sometimes|nullable',
           'service.billing_timezone_t' => 'sometimes|nullable',
           'service.billing_timezone_p' => 'sometimes|nullable',
           'service.payment_timezone' => 'sometimes|nullable',
           'service.payment_timezone_v' => 'sometimes|nullable',
           'service.payment_timezone_t' => 'sometimes|nullable',
           'service.payment_timezone_p' => 'sometimes|nullable',
           'service.billing_rule' => 'sometimes|nullable',
           'service.billing_rule_v' => 'sometimes|nullable',
           'service.billing_rule_t' => 'sometimes|nullable',
           'service.billing_rule_p' => 'sometimes|nullable',
           'service.payment_rule' => 'sometimes|nullable',
           'service.payment_rule_v' => 'sometimes|nullable',
           'service.payment_rule_t' => 'sometimes|nullable',
           'service.payment_rule_p' => 'sometimes|nullable',
           'service.min_payment_duration' => 'sometimes|nullable',
           'service.min_payment_duration_p' => 'sometimes|nullable',
           'service.min_payment_duration_t' => 'sometimes|nullable',
           'service.min_payment_duration_v' => 'sometimes|nullable',
           'service.check_in_procedure' => 'nullable',
           'service.close_out_procedure' => 'nullable',
           'service.running_late_procedure'=>'nullable',
           'service.provider_display_settings'=>'nullable'


		];
	}

    public function save($redirect=1,$step=1){
		$this->validate();
         $this->service->added_by = Auth::id();
         $this->service->service_status = 1;
        $categoryService = new ServiceCatagoryService;
        
        // $s = $service_category['accommodations_id']='';
       
            $this->service->frequency_id=implode(',',$this->service->frequency_id);
            $this->service->service_type=implode(',',$this->service->service_type);
            
        if($step==1){  
            $this->service->provider_return_window=json_encode([$this->providerReturn["1"]]);
            $this->service->provider_return_window_v=json_encode([$this->providerReturn["2"]]);
            $this->service->provider_return_window_p=json_encode([$this->providerReturn["4"]]);
            $this->service->provider_return_window_t=json_encode([$this->providerReturn["5"]]);
        }
        elseif($step==5){
         //   dd($this->checkIn);
        $this->service->check_in_procedure=json_encode($this->checkIn);
        $this->service->close_out_procedure=json_encode($this->checkOut);
        $this->service->running_late_procedure=json_encode($this->runningLate);
        $this->service->provider_display_settings=json_encode($this->providerSettings);
        }

      
      
       

        $this->service = $categoryService->createService($this->service);
        
        if($redirect){
			$this->showList("Service has been saved successfully");
			$this->service = new ServiceCategory;
		}
        else{  //reconvert values 
            $this->reconvertValues();
            $this->step++;
        }
    }    
    public function reconvertValues(){
        if(!is_array($this->service->service_type))
          $this->service->service_type=explode(',',$this->service->service_type);
        if(!is_array($this->service->frequency_id))  
        $this->service->frequency_id=explode(',',$this->service->frequency_id);
        
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
           
            if(!is_array($this->service->service_type))
            $this->service->service_type=explode(',',$this->service->service_type);
           // $this->service->service_type=$selectedValues;
           //dd($this->service->service_type);
        }
        else{
            $this->service->service_type=[];
        }
        if(!is_null($this->service->frequency_id)){
          if(!is_array($this->service->frequency_id))  
          $this->service->frequency_id=explode(',',$this->service->frequency_id);
           // $this->service->frequency_id=$selectedFValues;
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
                $this->checkIn=json_decode($this->service->check_in_procedure, true);
                $this->checkOut=json_decode($this->service->close_out_procedure, true);
                $this->runningLate=json_decode($this->service->running_late_procedure, true);
                $this->providerSettings=json_decode($this->service->provider_display_settings, true);
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
