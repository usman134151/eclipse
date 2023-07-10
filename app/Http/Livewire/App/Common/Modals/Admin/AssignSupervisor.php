<?php

namespace App\Http\Livewire\App\Common\Modals\Admin;

use App\Models\Tenant\User;
use App\Services\App\UserService;
use Livewire\Component;

class AssignSupervisor extends Component
{
    public $showForm,$allUsers=[],$selectedSupervisors=[],$isDefault=false,$user_id,$selectAll=false;
    protected $listeners = ['showList' => 'resetForm', 'updateCompany'=>'setData','setValues', 'selectSelfSupervisor'];

    public function render()
    {
        return view('livewire.app.common.modals.admin.assign-supervisor');
    }
  

    public function setData($company_id)
    {
        $this->allUsers = User::query()
        ->where(['users.status'=>1])
        ->whereHas('roles', function ($query) {
            $query->where('role_id', 5);
        })
		-> leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
            ->leftJoin('companies', 'companies.id', '=', 'users.company_name')
            ->where('companies.id', '=', $company_id)
        ->select('users.id', 'users.name','phone','email','profile_pic')
        ->get();

        // $this->selectedSupervisors=[];
        // $this->isDefault=false;
    }

    public function mount(){
        // dd('in model');
        // $this->setData()
    }
    public function updateSelectAll(){
        if($this->selectAll==true)
            $this->selectedSupervisors = $this->allUsers->pluck('id')->toArray();
        else
        $this->selectedSupervisors=[];
    }

    // used to implement "Assign Same User" checkbox ( glitchy )
    public function selectSelfSupervisor($value){

        // if($value){
        //     if (!in_array($this->user_id, $this->selectedSupervisors)&&(in_array($this->user_id,$this->allUsers->pluck('id')->toArray())))
        //     $this->selectedSupervisors[]=$this->user_id;  //not already selected and exists in supervisor role
        // }else{
        //     $key =array_search($this->user_id,$this->selectedSupervisors);
        //     if ($key >= 0){
        //         unset($this->selectedSupervisors[$key]);
        //         $this->selectedSupervisors = array_values($this->selectedSupervisors);
        //     }
        // }
        //     $this->updateData();
    }

    public function setValues($user_id)
    {
        $this->user_id=$user_id;

        $userService = new UserService;
        $data = $userService->getUserRolesDetails($this->user_id, 5, 1);

        $this->selectedSupervisors = $data->pluck('user_id')->toArray();

        if($data->where('is_default', 1)->isNotEmpty())
        $this->isDefault = $data->where('is_default', true)->pluck('user_id')[0];
        $this->updateData();

    }

    // Child Laravel component's updateData function
    public function updateData()
    {
        // Emit an event to the parent component with the selected values
        $this->emitUp('updateSelectedSupervisors', $this->selectedSupervisors,$this->isDefault);
    }

    function showForm()
    {     
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}
