<?php

namespace App\Http\Livewire\App\Admin\Customer;
use App\Models\Tenant\Company;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\AssociateService;
use Livewire\Component;

class ServiceCatelog extends Component
{
    public $accomodations,$accomodationsList,$services=[],$searchParameter,$modelId,$modelType,$modelServices=[],$servicesList=[],$serviceSearch;
    protected $listeners = ['resetCatalog'];

    public function render()
    {
        return view('livewire.app.admin.customer.service-catelog',[
            'accommodations' => $this->accomodations,
        ]);
    }

    public function mount()
    {
        $this->resetCatalog();
       
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
        
        $this->services=ServiceCategory::select('id', 'name', 'disable_for_companies')
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
            } else {
                if($this->services[$index]['disable_for_companies']==1)
                $this->services[$index]['activated']=0;
                else
                $this->services[$index]['activated']=1;
            }    
        }
        $this->servicesList=$this->services;
      
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



}
