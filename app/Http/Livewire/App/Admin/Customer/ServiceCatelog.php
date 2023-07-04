<?php

namespace App\Http\Livewire\App\Admin\Customer;
use App\Models\Tenant\Company;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\AssociateService;
use Livewire\Component;

class ServiceCatelog extends Component
{
    public $accomodations,$services=[],$modelId,$modelType,$modelServices=[];
   

    public function render()
    {
        return view('livewire.app.admin.customer.service-catelog');
    }

    public function mount()
    {
       $this->accomodations=Accommodation::where('status',1)->get()->toArray();
       $this->fetchModelServices();
       
    }

    public function updateServices($accomodationId){
       
        $this->services=[];
        
        $this->services=ServiceCategory::select('id', 'name', 'disable_for_companies')
        ->where('status', 1)
        ->where('accommodations_id', $accomodationId)
        ->get()
        ->toArray();
        

        foreach($this->services as $index=>$service)
        {
            $serviceId = $service['id'];

            // Check if the service exists in the model_services array
            if (isset($this->modelServices[$serviceId])) {
                $modelService = $this->modelServices[$serviceId];
                $this->services[$index]['activated'] = $modelService;
            } else {
                if($this->services[$index]['disable_for_companies']==1)
                $this->services[$index]['activated']=0;
                else
                $this->services[$index]['activated']=1;
            }    
        }
        //dd($this->services);
    }
	public function updateService($index){
        AssociateService::updateOrCreate(
            ['service_id' => $this->services[$index]['id'], 'model_id' => $this->modelId, 'model_type' => $this->modelType],
            ['status' =>  $this->services[$index]['activated']]);
           // Update or add the record in $this->model_services array
            $this->modelServices[$this->services[$index]['id']] = $this->services[$index]['activated'];
    }
    public function fetchModelServices()
    {
        $this->modelServices = AssociateService::where('model_id', $this->modelId)
            ->where('model_type', $this->modelType)
            ->pluck('status', 'service_id')
            ->toArray();
            
    }

}
