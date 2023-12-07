<?php

namespace App\Http\Livewire\App\Common\Import;

use Livewire\Component;

use Maatwebsite\Excel\Facades\Excel;
use App\Models\Tenant\User;
use App\Models\Tenant\Company;
use App\Models\Tenant\SetupValue;
use Livewire\WithFileUploads;
use App\Helpers\SetupHelper;
use App\Services\App\UserService;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;


class Customer extends Component
{
    use WithFileUploads;
    public $file;
    public $users = [];
    public $warningMessage='',$errorMessage='';
    public $email_invitation = 1;
    protected $listeners = ['updateVal' => 'updateVal'];
    
    //setup values
    public $companies, $languages, $ethnicities, $genders;

    public function render()
    {
        return view('livewire.app.common.import.customer');
    }

    public function mount(){
       $this->companies=Company::get()->where('status',1);
       $this->languages=SetupValue::get()->where('setup_id',1);
       $this->genders=SetupValue::get()->where('setup_id',2);
       $this->ethnicities=SetupValue::get()->where('setup_id',3);
    }

    public function updatedFile()
    {
        $this->validate([
            'file' => 'required|file|mimetypes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);


        $rows = Excel::toArray([], $this->file)[0];
        $this->users=[];
        $this->warningMessage='';
        //dd($rows);
        // Initialize a counter variable
        $i = 0;

        foreach ($rows as $row) {
            if($i>0){
                if($row[0]!=''){
                    try{
                        $user = [];

                        $user['first_name'] = $row[0];
                        $user['last_name'] = $row[1];
                        $user['userDetails']['title'] = $row[2];
                        //dob formating
                        if (is_numeric($row[3])) {
                            // Convert the timestamp to an Excel serialized date value
                         //   $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($row[3]);
                         $excelDate=$row[3];
                        } else {
                            // Convert the string date to an Excel serialized date value
                            $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::stringToExcel($row[3]);
                        }
                        
                        // Convert the Excel serialized date value to a DateTime object
                        $dateObject = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($excelDate);
                        
                        // Format the DateTime object as 'd/m/Y'
                        $user['user_dob'] = $dateObject->format('d/m/Y');
                        
                        //end of dob formatting
                        $user['email'] = $row[4];
                        $user['userDetails']['language_id']=SetupHelper::getSetupValueByValue($row[5],1);
                        $user['userDetails']['gender_id']=SetupHelper::getSetupValueByValue($row[6],2);
                        $user['userDetails']['ethnicity_id']=SetupHelper::getSetupValueByValue($row[7],3);
                        $user['userDetails']['user_position']=$row[8];
                        $user['userDetails']['phone']=$row[9];
                        $user['userDetails']['country']=$row[10];
                        $user['userDetails']['state']=$row[11];
                        $user['userDetails']['city']=$row[12];
                        $user['userDetails']['zip']=$row[13];
                        $user['userDetails']['address_line1']=$row[14];
                        $user['userDetails']['address_line2']=$row[15];
                        $user['userDetails']['user_introduction']=$row[16];
                        $user['userRoles']['10']=str_replace('No','',$row[17]);
                        $user['userRoles']['5']=str_replace('No','',$row[18]);
                        $user['userRoles']['6']=str_replace('No','',$row[19]);
                        $user['userRoles']['7']=str_replace('No','',$row[20]);
                        $user['userRoles']['9']=str_replace('No','',$row[21]);
                        $user['userRoles']['8']=str_replace('No','',$row[22]);
                        $user['password']=$row[24];
                        $user['status']=1;
                       // dd($user);
                        
                        $companyId=Company::where('name',$row[23])->first();
                       
                        if(!is_null($companyId)){
                            $user['company_name']=$companyId->id;
                        }
        
                      
                        $this->users[] = $user;
                    }
                    catch(\ErrorException $e){
                       $this->warningMessage="Please make sure that you are trying to upload valid file to import data.";
                    }
                   
                }


            }
            
            $i++;

        }
        if(count($this->users)==0 && $this->warningMessage==''){
            $this->warningMessage="Please ensure that the file contains records before proceeding with the import. Currently, the file is empty.";
        }
       
        $this->dispatchBrowserEvent('refreshSelects');
    }

    public function save()
    {
        $this->resetValidation();

        $validationRules = [
            'users.*.first_name' => 'required',
            'users.*.last_name' => 'required',
            'users.*.email' => 'required|email',
            'users.*.company_name' => 'required',

        ];
        
        try {
            $validatedData = $this->validate($validationRules);
        } catch (ValidationException $e) {
            $this->addErrorMessages($e);

            
            return;
        }

        $saved=[];
        $userService = new UserService;

        foreach ($this->users as $userData) {
            $user = new User;
            
            if(User::where('email', $userData['email'])->exists()){
                $user=\App\Models\Tenant\User::where('email',$userData['email'])->first();
                
             }
           
             // Loop through the input array and set each key-value pair to the corresponding model attribute
             foreach ($userData as $key => $value) {
                 // Use the 'snake_case' version of the key to match the model attribute name
                 $attribute = \Illuminate\Support\Str::snake($key);
                 if($attribute!="user_details" && $attribute!="user_roles"){
                     
                     $user->{$attribute} = $value;
                 }
                
                
             }
             if($user->user_dob){
                $user->user_dob = Carbon::createFromFormat('d/m/Y', $user->user_dob)->format('Y-m-d');
      
            }
            $user->name=$user->first_name.' '.$user->last_name;
            // Call the createUser method of UserService and pass the user model along with other parameters
            $savedUser= $userService->createUser($user, $userData['userDetails'], 4, $this->email_invitation, [], 1);

            $userService->storeCustomerRoles($userData['userRoles'],$savedUser->id);
           
        }
        $this->showList("Customer data has been imported successfully");
      
        $this->users = [];
    }

    public function showList($message = "")
	{
		// Save data
		$this->emit('showList', $message);
	}

    protected function addErrorMessages(ValidationException $e)
    {
        $errors = $e->validator->getMessageBag();
        $this->errorMessage="Please make sure all records are properly filled with first name, last name, email address and company is selected";
        foreach ($errors->messages() as $field => $messages) {
            foreach ($messages as $message) {
                $this->addError($field, $message);
            }
        }
    }
}
