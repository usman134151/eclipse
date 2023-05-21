<?php

namespace App\Http\Livewire\App\Common\Import;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Tenant\Industry;
use App\Models\Tenant\Company;
use App\Models\Tenant\SetupValue;
use Livewire\WithFileUploads;
use App\Helpers\SetupHelper;
use App\Services\App\UserService;
use Carbon\Carbon;


class CompanyImport extends Component
{
    use WithFileUploads;
    public $file;
    public $companies = [];
    protected $listeners = ['updateVal' => 'updateVal'];
    
    //setup values
    public $industries;

    public function render()
    {
        return view('livewire.app.common.import.company');
    }

    public function mount(){
       $this->industries=Industry::get()->where('status',1);

    }

    public function updatedFile()
    {
        $this->validate([
            'file' => 'required|file|mimetypes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);


        $rows = Excel::toArray([], $this->file)[0];
        $this->companies=[];
     //   dd($rows);
        // Initialize a counter variable
        $i = 0;

        foreach ($rows as $row) {
            if($i>0){
                if($row[0]!=''){
                    $company = [];

                    $company['name'] = $row[0];
                    $industryId=Industry::where('name',$row[1])->first();
                    if(!is_null($industryId)){
                        $company['industry_id']=$industryId->id;
                    }
                    
    
                  
                    $this->companies[] = $company;
                }


            }
            $i++;

        }
       // dd($this->companies);
       
        $this->dispatchBrowserEvent('refreshSelects');
    }

    public function save()
    {
       
        $saved=[];
       

        foreach ($this->companies as $companyData) {
            $company = new Company;
            
            if(Company::where('name', $companyData['name'])->exists()){
                $company=\App\Models\Tenant\Company::where('name',$companyData['name'])->first();
                
             }
             $company->industry_id=$companyData['industry_id'];
             $company->name=$companyData['name'];   
             $company->added_by=Auth::id();
                
             

        
            // Call the createUser method of UserService and pass the company model along with other parameters
            $saved[]= $company->save();
           
        }
        $this->showList("Companies data has been imported successfully");
      
        $this->companies = [];
    }

    public function showList($message = "")
	{
		// Save data
		$this->emit('showList', $message);
	}
}
