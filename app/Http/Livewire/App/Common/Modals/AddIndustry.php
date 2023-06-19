<?php

namespace App\Http\Livewire\App\Common\Modals;
use App\Models\Tenant\Industry;
use App\Models\Tenant\User;
use App\Models\Tenant\Company;
use Livewire\Component;

class AddIndustry extends Component
{
    public $selectedIndustries=[],$defaultIndustry,$industries;
    protected $listeners = ['editRecord' => 'setIndustries','updateCompany'];

    public function render()
    {
        return view('livewire.app.common.modals.add-industry');

    }

    public function mount()
    {
        $this->industries= Industry::where('status', 1)->get();
    }

    public function setIndustries(User $user){
        $this->selectedIndustries = $user->industries()->allRelatedIds()->toArray();
        if(!is_null($user->userdetail))
            $this->defaultIndustry = $user->userdetail->industry;
    }

    public function updateCompany($companyId){
       
        $company=Company::where('id',$companyId)->first();
        if($company->industry_id){
            $this->selectedIndustries = [$company->industry_id];
            $this->defaultIndustry=$company->industry_id;
            $this->updateData();
        }

        
    }

    // Child Laravel component's updateData function
    public function updateData()
    {
        $industryNames=[];
        foreach($this->selectedIndustries as $ind){
            $industryRecord= $this->industries->firstWhere('id',$ind);
            if(!is_null($industryRecord)){
                $industryNames[]= $industryRecord->name;
            }
        }
    // Emit an event to the parent component with the selected industries and default industry
    $this->emitUp('updateSelectedIndustries', $this->selectedIndustries, $this->defaultIndustry, $industryNames);
    }




}
