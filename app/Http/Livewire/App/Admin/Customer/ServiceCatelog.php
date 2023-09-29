<?php

namespace App\Http\Livewire\App\Admin\Customer;
use App\Models\Tenant\Company;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\AssociateService;
use App\Models\Tenant\ProviderAccommodationServices;
use Livewire\Component;
use Auth;
class ServiceCatelog extends Component
{
    public $accomodations,$accomodationsList,$services=[],$searchParameter,$modelId,$modelType,$modelServices=[],$providerPriority=[],$servicesList=[],$serviceSearch,$parentId,$parentType,$showRates=true;
    protected $listeners = ['resetCatalog','updateSetRate'];
    public $isCustomer=false;

    public function render()
    {
        
        return view('livewire.app.admin.customer.service-catelog',[
            'accommodations' => $this->accomodations,
        ]);
    }

    public function mount()
    {
        if(Auth::user()->roleUser->role_id==4){
            $this->isCustomer=true;
        }
        $this->resetCatalog();
       
    }
    public function updateSetRate($value){
        $this->showRates=$value;
    }
    public function resetCatalog(){
        $this->accomodationsList=Accommodation::where('status',1)->get()->toArray();
        $this->accomodations=$this->accomodationsList;
        $this->fetchModelServices();
        $this->updateServices();
    }

    public function updateServices($accomodationId=null){
       
        $this->services=[];
        $this->servicesList=[];
        
        $this->services=ServiceCategory::select('id', 'name', 'disable_for_companies','accommodations_id')
        ->where('status', 1)
        ->when($accomodationId, function ($query, $accomodationId) {
            return $query->where('accommodations_id', $accomodationId);
        })
        ->get()
        ->toArray();
        

        foreach($this->services as $index=>$service)
        {
            $serviceId = $service['id'];

            // Check if the service exists in the model_services array
            if (isset($this->modelServices[$serviceId])) {
                $modelService = $this->modelServices[$serviceId];
                $this->services[$index]['activated'] = $modelService;
                if($this->modelType=='provider')
                    $this->services[$index]['provider_priority']=$this->providerPriority[$serviceId];
            } else {
                if($this->modelType!='provider'){
                    if($this->services[$index]['disable_for_companies']==1)
                    $this->services[$index]['activated']=0;
                    else
                    $this->services[$index]['activated']=1;
                }
                else{
                    $this->services[$index]['activated']=0;
                    $this->services[$index]['provider_priority']='';
                }
                   
            }    
        }
        $this->servicesList=$this->services;
      
    }
	public function updateService($index){
        if(!$this->services[$index]['activated']){
            $this->services[$index]['activated']=0;
        }
     
        if($this->modelType!='provider')
            AssociateService::updateOrCreate(
                ['service_id' => $this->services[$index]['id'], 'model_id' => $this->modelId, 'model_type' => $this->modelType],
                ['status' =>  $this->services[$index]['activated']]);
        else
            ProviderAccommodationServices::updateOrCreate(
                ['service_id' => $this->services[$index]['id'], 'user_id' => $this->modelId,'accommodation_id'=>$this->services[$index]['accommodations_id']],
                ['status' =>  $this->services[$index]['activated']]);         
           // Update or add the record in $this->model_services array
            $this->modelServices[$this->services[$index]['id']] = $this->services[$index]['activated'];
    }
    public function updatePriority($index){
    
        if (is_numeric($this->services[$index]['provider_priority'])) {
            ProviderAccommodationServices::updateOrCreate(
                ['service_id' => $this->services[$index]['id'], 'user_id' => $this->modelId,'accommodation_id'=>$this->services[$index]['accommodations_id']],
                ['provider_priority' =>  $this->services[$index]['provider_priority']]);  
                $this->providerPriority[$this->services[$index]['id']] = $this->services[$index]['provider_priority'];
            } 
            else{
                $this->services[$index]['provider_priority']=0;
            }       
      
    }
    public function fetchModelServices()
    {
        if($this->modelType=='provider'){
            $this->modelServices = ProviderAccommodationServices::where('user_id', $this->modelId)
            ->pluck('status', 'service_id')
            ->toArray();
        
            $this->providerPriority=ProviderAccommodationServices::where('user_id', $this->modelId)
            ->pluck('provider_priority', 'service_id')
            ->toArray();

          
            
        }

        else
            $this->modelServices = AssociateService::where('model_id', $this->modelId)
                ->where('model_type', $this->modelType)
                ->pluck('status', 'service_id')
                ->toArray();
            
    }

    public function filterResults($list="accomodationsList",$arr="accomodations",$searchParameter='searchParameter'){
        $this->$arr = [];
      
        foreach ($this->$list as $item) {
            if (stripos($item['name'], $this->$searchParameter) !== false) {
                $this->$arr[] = $item;
            }
        }
       // dd($this->accommodations);
        return  $this->$arr;
    }
    public function associateService($serviceId){
        // Emits an event to show the form for editing a record
        $this->emit('associateService', ServiceCategory::find($serviceId));
        
    }
    public function reloadDepartment($companyId,$serviceId){
      
        $this->associateService($serviceId);
        $this->emit('updateDepartments', $companyId);
        $this->dispatchBrowserEvent('updateModelVars', [
            'elem' => 'departmentIco',
            
        ]);

    }

    public function updateServiceData($serviceId){
        $this->associateService($serviceId);
     
        $this->emit('updateModel', $this->modelId,'',$this->modelType,$this->parentId,$this->parentType);
        $this->dispatchBrowserEvent('updateModelVars', [
            'elem' => 'serviceIco',
            
        ]);

    }
    public function reloadDepartmentUsers($serviceId){
        $this->associateService($serviceId);
        $this->emit('updateDepartmentUsers', $this->modelId);

    }
    public function reloadUsers($serviceId){
        $this->associateService($serviceId);
        $this->emit('updateUsers', $this->modelId);
        $this->dispatchBrowserEvent('updateModelVars', [
            'elem' => 'customerIco',
            
        ]);

    }



}
