<?php

namespace App\Http\Livewire\App\Common\Panels\Services;
use App\Models\Tenant\Company;
use App\Models\Tenant\AssociateService;
use App\Models\Tenant\Department;
use App\Models\Tenant\User;

use Livewire\Component;

class AssociateModel extends Component
{
    public $service,$modelList,$searchParameter,$modelArr,$modelType='company';
    
    protected $listeners = ['associateService','updateDepartments','updateUsers','updateDepartmentUsers'];

    public function render()
    {
        return view('livewire.app.common.panels.services.associate-model');
    }

    public function mount()
    {
       if($this->modelType=='company'){
        $this->modelList=Company::select('id','name','company_logo')->where('status',1)->orderby('name')->get()->toArray();
       }
       else{
        $this->modelList=[];
       }

       
       $this->modelArr=$this->modelList;
       
     
    }
    public function refreshList(){
       
        //getting companies mapped with current service
        $this->modelServices = AssociateService::where('service_id', $this->service['id'])
        ->where('model_type', $this->modelType)
        ->pluck('status', 'model_id')
        ->toArray();
        //merging results
        foreach($this->modelList as $index=>$model)
        {
            $modelId = $model['id'];

            // Check if the service exists in the model_services array
            if (isset($this->modelServices[$modelId])) {
                $modelService = $this->modelServices[$modelId];
                $this->modelList[$index]['activated'] = $modelService;
            } else {
                if($this->service['disable_for_companies']==1)
                $this->modelList[$index]['activated']=0;
                else
                $this->modelList[$index]['activated']=1;
            }    
        }



    }
    function associateService($service){
        $this->service=$service;
       
        $this->refreshList();
    }
    public function updateModel($index){
        AssociateService::updateOrCreate(
            ['model_id' => $this->modelList[$index]['id'], 'service_id' => $this->service['id'], 'model_type' => $this->modelType],
            ['status' =>  $this->modelList[$index]['activated']]);
           // Update or add the record in $this->model_services array
            $this->modelServices[$this->modelList[$index]['id']] = $this->modelList[$index]['activated'];
    }

    public function filterResults($list="modelArr",$arr="modelList",$searchParameter='searchParameter'){
        $this->$arr = [];
      
        foreach ($this->$list as $item) {
            if (stripos($item['name'], $this->$searchParameter) !== false) {
                $this->$arr[] = $item;
            }
        }
       // dd($this->accommodations);
        return  $this->$arr;
    }

    public function updateDepartments($companyId){
        
        if($this->modelType=='department'){
            
            $this->modelList=Department::select('id','name','department_logo')->where('company_id',$companyId)->orderby('name')->get()->toArray();
            $this->modelArr=$this->modelList;
            $this->refreshList();
        }

    }
    public function reloadDepartment($companyId){
        $this->emit('updateDepartments', $companyId);

    }
    public function updateUsers($companyId){
      
        if($this->modelType=='customer'){
            
            $this->modelList=User::select('id','name')->where('company_name',$companyId)->orderby('name')->get()->toArray();
           
            $this->modelArr=$this->modelList;
            $this->refreshList();
        }

    }
    public function reloadUsers($companyId){
        
        $this->emit('updateUsers', $companyId);

    }
    public function updateDepartmentUsers($departmentId){
      
        if($this->modelType=='customer'){
            
            $this->modelList=User::join('user_departments', 'users.id', '=', 'user_departments.user_id')
            ->where('user_departments.department_id', '=', $departmentId)
            ->get()->toArray();
           
            $this->modelArr=$this->modelList;
            $this->refreshList();
        }

    }
    public function reloadDepartmentUsers($companyId){
        
        $this->emit('updateDepartmentUsers', $companyId);

    }
}
