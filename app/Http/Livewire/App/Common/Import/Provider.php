<?php

namespace App\Http\Livewire\App\Common\Import;

use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Tenant\User;
use Livewire\WithFileUploads;


class Provider extends Component
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
