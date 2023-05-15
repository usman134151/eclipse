<?php

namespace App\Http\Livewire\App\Common\Import;

use Livewire\Component;

use Maatwebsite\Excel\Facades\Excel;
use App\Models\Tenant\User;
use Livewire\WithFileUploads;
class Customer extends Component
{
    use WithFileUploads;
    public $file;
    public $users = [];

    public function render()
    {
        return view('livewire.app.common.import.customer');
    }

    public function updatedFile()
    {
        $rows = Excel::toArray([], $this->file)[0];
        //dd($rows);
        // Initialize a counter variable
        $i = 0;

        foreach ($rows as $row) {
            if($i>0){
                $user = [];
            
                $user['first_name'] = $row[0];
                $user['last_name'] = $row[1];
                $user['title'] = $row[2];
                $user['dob'] = $row[3];
                $user['email'] = $row[4];
                $user['userDetails']['language_id']=$row[5];
                $user['userDetails']['gender_id']=$row[6];
                $user['userDetails']['ethnicity_id']=$row[7];
                $user['userDetails']['user_position']=$row[8];
                dd($user);
                $this->users[] = $user;

            }
            $i++;

        }
       
    }

    public function save()
    {
        //dd($this->users);
        
//now this is normal array again so have to reconvert it to user model object and call user services function
        foreach($this->users as $userData){
            $user=new User();
            $user = new User();

            // Loop through the input array and set each key-value pair to the corresponding model attribute
            foreach ($userData as $key => $value) {
                // Use the 'snake_case' version of the key to match the model attribute name
                $attribute = \Illuminate\Support\Str::snake($key);
                $user->{$attribute} = $value;
            }

            dd($user);
        }
        $this->users = [];
    }
}
