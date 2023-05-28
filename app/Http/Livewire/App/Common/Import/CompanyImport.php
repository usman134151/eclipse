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
use Illuminate\Validation\ValidationException;

class CompanyImport extends Component
{
    use WithFileUploads;
    public $file;
    public $companies = [];
    protected $listeners = ['updateVal' => 'updateVal'];
    
    //setup values
    public $industries;
    public $warningMessage,$errorMessage;

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

        $this->warningMessage='';
        $rows = Excel::toArray([], $this->file)[0];
        $this->companies=[];
     //   dd($rows);
        // Initialize a counter variable
        $i = 0;

        foreach ($rows as $row) {
            if($i>0){
                try{
                    if($row[0]!=''){
                        $company = [];

                        $company['name'] = $row[0];
                        $company['industry_id']=0;
                        $industryId=Industry::where('name',$row[1])->first();
                        if(!is_null($industryId)){
                            $company['industry_id']=$industryId->id;
                        }
                        
        
                    
                        $this->companies[] = $company;
                    }
            }
            catch(\ErrorException $e){
            $this->warningMessage="Please make sure that you are trying to upload valid file to import data.";
            }


            }
            $i++;

        }
       // dd($this->companies);
       if(count($this->companies)==0 && $this->warningMessage==''){
        $this->warningMessage="Please ensure that the file contains records before proceeding with the import. Currently, the file is empty.";
    }
        $this->dispatchBrowserEvent('refreshSelects');
    }

    public function save()
    {
        $this->resetValidation();

        $validationRules = [
            'companies.*.name' => 'required',
            'companies.*.industry_id' => 'required',
           

        ];
        
        try {
            
            $validatedData = $this->validate($validationRules);
         
        } catch (ValidationException $e) {
          
            $this->addErrorMessages($e);
         
            return;
        }
        $saved=[];
       
        //dd($this->companies);
        foreach ($this->companies as $companyData) {
            $company = new Company;
            
            if(Company::where('name', $companyData['name'])->exists()){
                $company=\App\Models\Tenant\Company::where('name',$companyData['name'])->first();
                
             }
          //   dd($company);
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
    protected function addErrorMessages(ValidationException $e)
    {
        $errors = $e->validator->getMessageBag();
        $this->errorMessage="Please make sure all records are properly filled";
        
        foreach ($errors->messages() as $field => $messages) {
            foreach ($messages as $message) {
                $this->addError($field, $message);
            }
        }
    }
}
