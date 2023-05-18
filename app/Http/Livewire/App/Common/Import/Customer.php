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

class Customer extends Component
{
    use WithFileUploads;
    public $file;
    public $users = [];
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
        //dd($rows);
        // Initialize a counter variable
        $i = 0;

        foreach ($rows as $row) {
            if($i>0){
                $user = [];

                $user['first_name'] = $row[0];
                $user['last_name'] = $row[1];
                $user['userDetails']['title'] = $row[2];
                //$user['dob'] = $row[3];
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
                $user['status']=1;
                $user['company_name']='';

              
                $this->users[] = $user;

            }
            $i++;

        }
        $this->dispatchBrowserEvent('refreshSelects');
    }

    public function save()
    {
        $userService = new UserService;

        foreach ($this->users as $userData) {
            $user = new User;
        
            // Loop through the input array and set each key-value pair to the corresponding model attribute
            foreach ($userData as $key => $value) {
                // Use the 'snake_case' version of the key to match the model attribute name
                $attribute = \Illuminate\Support\Str::snake($key);
                if($attribute!="user_details"){
                    
                    $user->{$attribute} = $value;
                }
                $user->name=$user->first_name.' '.$user->last_name;
            }
           // dd($user);
        
           // $user->save(); // Save the user model to the database
            
            // Call the createUser method of UserService and pass the user model along with other parameters
            $userService->createUser($user, $userData['userDetails'], 4, 0, [], 1);

        }
        $this->showList("Customer data has been imported successfully");
        $this->users = [];
    }

    public function showList($message = "")
	{
		// Save data
		$this->emit('showList', $message);
	}
}
