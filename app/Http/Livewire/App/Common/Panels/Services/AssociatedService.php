<?php

namespace App\Http\Livewire\App\Common\Panels\Services;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\ServiceSpecialization;
use App\Models\Tenant\Specialization;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\StandardRate;
use App\Helpers\SetupHelper;
use App\Services\App\ServiceCatagoryService;


use Livewire\Component;

class AssociatedService extends Component
{
    public $service,$modelId,$modelType,$modelName,$standardRate;
    protected $listeners = ['associateService','updateModel'];
    public $serviceTypes=['1'=>['class'=>'inperson-rate','postfix'=>'','title'=>'In-Person'],
    '2'=>['class'=>'virtual-rate','postfix'=>'_v','title'=>'Virtual'],
    '4'=>['class'=>'phone-rate','postfix'=>'_p','title'=>'Phone'],
    '5'=>['class'=>'teleconference-rate','postfix'=>'_t','title'=>'Teleconference'],
  ];
    public $billingTypes=['1'=>['class'=>'hour-rate','postfix'=>'hour_price'],
    '2'=>['class'=>'day-rate','postfix'=>'day_rate_price'],
    '4'=>['class'=>'fixed-rate','postfix'=>'fixed_rate'],
    
    ];     
    public $additionalCharge=false;
    public $serviceCharge=[
            
            "1"=>[['label'=>'','price'=>'','multiply_duration'=>'','multiply_providers'=>'']],
            "2"=>[['label'=>'','price'=>'','multiply_duration'=>'','multiply_providers'=>'']],
            "4"=>[['label'=>'','price'=>'','multiply_duration'=>'','multiply_providers'=>'']],
            "5"=>[['label'=>'','price'=>'','multiply_duration'=>'','multiply_providers'=>'']]
    ];
    public $servicePayment=[
            
        "1"=>[['label'=>'','price'=>'','charge_customer'=>'','multiply_providers'=>'']],
        "2"=>[['label'=>'','price'=>'','charge_customer'=>'','multiply_providers'=>'']],
        "4"=>[['label'=>'','price'=>'','charge_customer'=>'','multiply_providers'=>'']],
        "5"=>[['label'=>'','price'=>'','charge_customer'=>'','multiply_providers'=>'']]
    ];
    public $emergencyCharge=false;
    public $emergencyHour=[
        "1"=>[['hour'=>'','price_type'=>'$','price'=>'','exclude_holidays'=>'','multiply_duration'=>'','multiply_providers'=>'','exclude_after_hour'=>'']],
        "2"=>[['hour'=>'','price_type'=>'$','price'=>'','exclude_holidays'=>'','multiply_duration'=>'','multiply_providers'=>'','exclude_after_hour'=>'']],
        "4"=>[['hour'=>'','price_type'=>'$','price'=>'','exclude_holidays'=>'','multiply_duration'=>'','multiply_providers'=>'','exclude_after_hour'=>'']],
        "5"=>[['hour'=>'','price_type'=>'$','price'=>'','exclude_holidays'=>'','multiply_duration'=>'','multiply_providers'=>'','exclude_after_hour'=>'']]
    ];

    public $cancelCharge=false;
    public $cancelCharges=[
        "1"=>[['hour'=>'','price_type'=>'$','price'=>'','exclude_holidays'=>'','multiply_duration'=>'','multiply_providers'=>'','exclude_after_hour'=>'','cancellation'=>'','modification'=>'','rescheduling'=>'','service_min'=>'']],
        "2"=>[['hour'=>'','price_type'=>'$','price'=>'','exclude_holidays'=>'','multiply_duration'=>'','multiply_providers'=>'','exclude_after_hour'=>'','cancellation'=>'','modification'=>'','rescheduling'=>'','service_min'=>'']],
        "4"=>[['hour'=>'','price_type'=>'$','price'=>'','exclude_holidays'=>'','multiply_duration'=>'','multiply_providers'=>'','exclude_after_hour'=>'','cancellation'=>'','modification'=>'','rescheduling'=>'','service_min'=>'']],
        "5"=>[['hour'=>'','price_type'=>'$','price'=>'','exclude_holidays'=>'','multiply_duration'=>'','multiply_providers'=>'','exclude_after_hour'=>'','cancellation'=>'','modification'=>'','rescheduling'=>'','service_min'=>'']]
    ];


    public $specializations;
    public $showSpecialization=false;
    public $serviceSpecialization=[[
        'specialization_id'=>0,
        'common'=>['price_type'=>'$',"hide_from_customers"=>false,"hide_from_providers"=>false,"multiply_provider"=>false,"multiply_service_duration"=>false,'disable'=>false],
        "1"=>['price'=>''],
        "2"=>['price'=>''],
        "4"=>['price'=>''],
        "5"=>['price'=>'']
        
    ]];
    public $setupValues = [
        'accomodations' => ['parameters' => ['Accommodation', 'id', 'name', '', '', 'name', false, 'service.accommodations_id','','accommodations_id',1]],
        'customerForms' => ['parameters' => ['CustomizeForms', 'id', 'request_form_name', 'form_name_id', '37', 'request_form_name', false, 'service.request_form_id','','request_form_id',1]]
    ];

    public function render()
    {
       // dd($this->service->hours_price);
        return view('livewire.app.common.panels.services.associated-service');
    }

    public function mount()
    {
       
       
    }
    public function rules()
	{
       
		return [

			
           
            'service.hours_price' => 'nullable|numeric|max:999999.99',
            'service.hours_price_v' => 'nullable|numeric|max:999999.99',
            'service.hours_price_p' => 'nullable|numeric|max:999999.99',
            'service.hours_price_t' => 'nullable|numeric|max:999999.99',

            'service.after_hours_price' => 'nullable|numeric|max:999999.99',
            'service.after_hours_price_v' => 'nullable|numeric|max:999999.99',
            'service.after_hours_price_p' => 'nullable|numeric|max:999999.99',
            'service.after_hours_price_t' => 'nullable|numeric|max:999999.99',

            'service.fixed_rate' => 'nullable|numeric|max:999999.99',
            'service.fixed_rate_v' => 'nullable|numeric|max:999999.99',
            'service.fixed_rate_p' => 'nullable|numeric|max:999999.99',
            'service.fixed_rate_t' => 'nullable|numeric|max:999999.99',

            'service.day_rate_price' => 'nullable|numeric|max:999999.99',
            'service.day_rate_price_v' => 'nullable|numeric|max:999999.99',
            'service.day_rate_price_p' => 'nullable|numeric|max:999999.99',
            'service.day_rate_price_t' => 'nullable|numeric|max:999999.99',

           

		];
	}
    function associateService($service){
       
        if(is_array($service))
        {
            $this->service = ServiceCategory::with('specializations')->find($service['id']);
           
        }
        $this->service->specializaition=ServiceSpecialization::where('service_id',$this->service->id)->get()->toArray();
      
        if(is_null($this->service->rate_status)){
            $this->service->rate_status=1;
            $this->service->status=1;
            $this->service->frequency_id=['one_time','daily','weekly','weekdaily','monthly'];
            $this->service->standard_in_person_multiply_provider=true;
            $this->service->standard_rate_virtual_multiply_provider=true;
            $this->service->standard_in_person_multiply_provider_p=true;
            $this->service->standard_in_person_multiply_provider_t=true;
            $this->service->request_start_time=1;
            $this->service->request_end_time=1;
            $this->service->request_end_address=0;
            $this->service->request_no_of_providers=1;
            $this->service->request_service_consumer=1;
            $this->service->request_participants=1;

        }
       
		$this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
       // $this->setupCheckboxes['service_types']=['rendered'=>''];
        $this->loadValues($this->service);
        $this->specializations=Specialization::all()->where('status',1);
        $serviceTypeLabels=SetupValue::where('setup_id',5)->pluck('setup_value_label')->toArray();
        for($i=0,$j=1;$i<4;$i++,$j++){
            if($j==3)
               $j=4;
            $this->serviceTypes[$j]['title']=$serviceTypeLabels[$i];
        }

        //$this->getRates();
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
                 
                $serviceChargeCols=[$service->service_charge,$service->service_charge_v,$service->service_charge_p,$service->service_charge_t];
                $index=0;
                foreach($this->serviceCharge as $key=>$value){
                     // Get the current index
                   
                    $data = json_decode($serviceChargeCols[$index], true);
                   
                    if (!empty($data) && is_array($data)) {
                        $this->additionalCharge=true; 
                       $inloopIndex=0;
                       foreach($data as $dataSet){
                        $this->serviceCharge[$key][$inloopIndex]=$dataSet[0];
                        $inloopIndex++;
                       }
                       
                    }
                    $index++;
                }

                $servicePaymentCols=[$service->service_payment,$service->service_payment_v,$service->service_payment_p,$service->service_payment_t];
                $index=0;
                foreach($this->servicePayment as $key=>$value){
                     // Get the current index
                   
                    $data = json_decode($servicePaymentCols[$index], true);
                   
                    if (!empty($data) && is_array($data)) {
                        $this->additionalCharge=true; 
                       $inloopIndex=0;
                       foreach($data as $dataSet){
                        $this->servicePayment[$key][$inloopIndex]=$dataSet[0];
                        $inloopIndex++;
                       }
                       
                    }
                    $index++;
                }
                $emergencyCols=[$service->emergency_hour,$service->emergency_hour_v,$service->emergency_hour_p,$service->emergency_hour_t];
                $index=0;
                foreach($this->emergencyHour as $key=>$value){
                     // Get the current index
                   
                    $data = json_decode($emergencyCols[$index], true);
                   
                    if (!empty($data) && is_array($data)) {
                       $this->emergencyCharge=true; 
                       $inloopIndex=0;
                       foreach($data as $dataSet){
                        $this->emergencyHour[$key][$inloopIndex]=$dataSet[0];
                        $inloopIndex++;
                       }
                       
                    }
                    $index++;
                }

                $cancelCols=[$service->cancellation_hour1,$service->cancellation_hour1_v,$service->cancellation_hour1_p,$service->cancellation_hour1_t];
                $index=0;
                foreach($this->cancelCharges as $key=>$value){
                     // Get the current index
                   
                    $data = json_decode($cancelCols[$index], true);
                   
                    if (!empty($data) && is_array($data)) {
                       $this->cancelCharge=true; 
                       $inloopIndex=0;
                       foreach($data as $dataSet){
                        $this->cancelCharges[$key][$inloopIndex]=$dataSet[0];
                        $inloopIndex++;
                       }
                       
                    }
                    $index++;
                }

                if(!is_null($this->service->specializaition) && count($this->service->specializaition)){
                    $this->showSpecialization=true;
                    $this->serviceSpecialization=[];
                    foreach($this->service->specializaition as $specialization){
                        //find common values 
                        $price=json_decode($specialization['specialization_price'],true);
                        $price_v=json_decode($specialization['specialization_price_v'],true);
                        $price_p=json_decode($specialization['specialization_price_p'],true);
                        $price_t=json_decode($specialization['specialization_price_t'],true);
                        $commonValues=[];
                        if(!is_null($price) && is_array($price)){
                           
                            $price=$price[0];
                           foreach($price as $key=>$value){
                            $commonValues[$key]=$value;
                           }
                           // $commonValues=['price_type'=>$price["price_type"],"hide_from_customers"=>$price["hide_from_customers"],"hide_from_providers"=>$price["hide_from_providers"],"multiply_provider"=>$price['multiply_provider'],"multiply_service_duration"=>$price['multiply_service_duration'],'disable'=>$price['disable']];
                            $price=$price['price'];
                        }
                        if(!is_null($price_v)){
                            $price_v=$price_v[0];
                            foreach($price_v as $key=>$value){
                                $commonValues[$key]=$value;
                               }
                            $price_v=$price_v['price'];
                        }
                        if(!is_null($price_t)){
                            $price_t=$price_t[0];
                            foreach($price_t as $key=>$value){
                                $commonValues[$key]=$value;
                               }
                            $price_t=$price_t['price'];
                        }
                        if(!is_null($price_p)){
                            $price_p=$price_p[0];
                            foreach($price_p as $key=>$value){
                                $commonValues[$key]=$value;
                               }
                            $price_p=$price_p['price'];
                        }
                        $this->serviceSpecialization[]=[
                            'specialization_id'=>$specialization['specialization_id'],
                            'common'=>$commonValues,
                            "1"=>['price'=>$price],
                            "2"=>['price'=>$price_v],
                            "4"=>['price'=>$price_p],
                            "5"=>['price'=>$price_t]
                            
                        ];
                    }
                  
                  
                }
              
                
        }

        public function addCharges($type){
            $this->serviceCharge[$type][]=['label'=>'','price'=>'','multiply_duration'=>'','multiply_providers'=>''];
        }

        public function addPayment($type){
            $this->servicePayment[$type][]=['label'=>'','price'=>'','charge_customer'=>'','multiply_providers'=>''];
        }

        public function addEmergency($type){
            $this->emergencyHour[$type][]=['hour'=>'','price_type'=>'$','price'=>'','exclude_holidays'=>'','multiply_duration'=>'','multiply_providers'=>'','exclude_after_hour'=>''];
        }
        public function addCancelCharge($type){
            $this->cancelCharges[$type][]=['hour'=>'','price_type'=>'$','price'=>'','exclude_holidays'=>'','multiply_duration'=>'','multiply_providers'=>'','exclude_after_hour'=>'','cancellation'=>'','modification'=>'','rescheduling'=>'','service_min'=>''];
        }

        public function addSpecialization(){
        $this->serviceSpecialization[]=[
                'specialization_id'=>0,
                'common'=>['price_type'=>'$',"hide_from_customers"=>false,"hide_from_providers"=>false,"multiply_provider"=>false,"multiply_service_duration"=>false,'disable'=>false],
                "1"=>['price'=>''],
                "2"=>['price'=>''],
                "4"=>['price'=>''],
                "5"=>['price'=>'']
                
        ];
        }
        public function updateModel($modelId,$modelName,$modelType){

            $this->modelId=$modelId;
            $this->modelName=$modelName;
            $this->modelType=$modelType;
            
           
            $existingRate = StandardRate::where('user_id', $this->modelId)
            ->where('accommodation_service_id', $this->service->id)
            ->where('model_type', $this->modelType)
            ->first();

            $this->associateService($this->service->toArray());   
    
            if ($existingRate) {
                
                $this->standardRate = $existingRate;
                $serviceAttributes = $this->service->getAttributes();

                foreach ($this->standardRate->getAttributes() as $attribute => $value) {
                    if (array_key_exists($attribute, $serviceAttributes) && $attribute!='id') {
                        $this->service->$attribute = $value;
                       
                    }
                }
                
            } else {
                $this->standardRate = new StandardRate();

                
            }
           
         
          
           
           
        }

        public function saveServiceRates(){
           
                        //will refactor later, not a good way
                        $chargeData=[];
                        foreach($this->serviceTypes as $type=>$parameters){
                            $chargeData[$type]='';
                            $cIndex=1;
                            foreach($this->serviceCharge[$type] as $data){
                                if($data['label']!='' && $data['price']!=''){
                                    $chargeData[$type].=json_encode([$data]);
                                    if(count($this->serviceCharge[$type])>$cIndex)
                                    $chargeData[$type].=",";
                                }
                               
            
                                $cIndex++;  
                            }
                        }
            
                        $this->service->service_charge=str_replace("],]", "]]","[".$chargeData["1"]."]");
                        $this->service->service_charge_v=str_replace("],]", "]]","[".$chargeData["2"]."]");
                        $this->service->service_charge_p=str_replace("],]", "]]","[".$chargeData["4"]."]");
                        $this->service->service_charge_t=str_replace("],]", "]]","[".$chargeData["5"]."]");
                        
            
                        $paymentData=[];
                        foreach($this->serviceTypes as $type=>$parameters){
                            $paymentData[$type]='';
                            $cIndex=1;
                            foreach($this->servicePayment[$type] as $data){
                                if($data['label']!='' && $data['price']!='' ){
                                $paymentData[$type].=json_encode([$data]);
                                if(count($this->servicePayment[$type])>$cIndex)
                                $paymentData[$type].=",";
                                }
            
                                $cIndex++;  
                            }
                        }
            
                            
                        $this->service->service_payment=str_replace("],]", "]]","[".$paymentData["1"]."]");
                        $this->service->service_payment_v=str_replace("],]", "]]","[".$paymentData["2"]."]");
                        $this->service->service_payment_p=str_replace("],]", "]]","[".$paymentData["4"]."]");
                        $this->service->service_payment_t=str_replace("],]", "]]","[".$paymentData["5"]."]");
            
                        $emergencyData=[];
                        foreach($this->serviceTypes as $type=>$parameters){
                            $emergencyData[$type]='';
                            $cIndex=1;
                            foreach($this->emergencyHour[$type] as $data){
                                if($data['hour']!='' && $data['price']!=''){
                                    $emergencyData[$type].=json_encode([$data]);
                                    if(count($this->emergencyHour[$type])>$cIndex)
                                      $emergencyData[$type].=",";
                                }
            
                                $cIndex++;  
                            }
                        }
            
                            
                        $this->service->emergency_hour=str_replace("],]", "]]","[".$emergencyData["1"]."]");
                        $this->service->emergency_hour_v=str_replace("],]", "]]","[".$emergencyData["2"]."]");
                        $this->service->emergency_hour_p=str_replace("],]", "]]","[".$emergencyData["4"]."]");
                        $this->service->emergency_hour_t=str_replace("],]", "]]","[".$emergencyData["5"]."]");
            
                        $cancelData=[];
                        foreach($this->serviceTypes as $type=>$parameters){
                            $cancelData[$type]='';
                            $cIndex=1;
                            foreach($this->cancelCharges[$type] as $data){
                                if($data['hour']!='' && $data['price']!=''){
                                    $cancelData[$type].=json_encode([$data]);
                                    if(count($this->cancelCharges[$type])>$cIndex)
                                      $cancelData[$type].=",";
                                }
            
                                $cIndex++;  
                            }
                        }
            
                            
                        $this->service->cancellation_hour1=str_replace("],]", "]]","[".$cancelData["1"]."]");
                        $this->service->cancellation_hour1_v=str_replace("],]", "]]","[".$cancelData["2"]."]");
                        $this->service->cancellation_hour1_p=str_replace("],]", "]]","[".$cancelData["4"]."]");
                        $this->service->cancellation_hour1_t=str_replace("],]", "]]","[".$cancelData["5"]."]");
            

            $serviceAttributes = $this->service->getAttributes();
           
            $standardRateAttributes = $this->standardRate->getFillable();
         
            foreach ($standardRateAttributes as $attribute) {
              
                    $this->standardRate->$attribute = $this->service->$attribute;
               
            }
            $this->standardRate->user_id = $this->modelId;
            $this->standardRate->model_type = $this->modelType;
            $this->standardRate->accommodation_id = $this->service->accommodations_id;
            $this->standardRate->accommodation_service_id = $this->service->id;
         
            $this->standardRate->save();
            $this->associateService($this->service->toArray());   
            $message="Rates saved sucessfully for ".$this->modelName." associated with ".$this->service->name;
            $this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
        }

        public function resetConfigurations(){
            StandardRate::where('user_id', $this->modelId)
            ->where('accommodation_service_id', $this->service->id)
            ->where('model_type', $this->modelType)
            ->delete();

            $this->updateModel($this->modelId,$this->modelName,$this->modelType);
        }

        

}
