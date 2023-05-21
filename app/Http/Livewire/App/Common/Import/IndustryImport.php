<?php

namespace App\Http\Livewire\App\Common\Import;

use Livewire\Component;

use Maatwebsite\Excel\Facades\Excel;
use App\Models\Tenant\Industry;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

use Carbon\Carbon;

class IndustryImport extends Component
{
    use WithFileUploads;
    public $file;
    public $industries = [];
    protected $listeners = ['updateVal' => 'updateVal'];
    


    public function render()
    {
        return view('livewire.app.common.import.industry');
    }


    public function updatedFile()
    {
        $this->validate([
            'file' => 'required|file|mimetypes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);


        $rows = Excel::toArray([], $this->file)[0];
        $this->industries=[];
        //dd($rows);
        // Initialize a counter variable
        $i = 0;

        foreach ($rows as $row) {
            if($i>0){
                if($row[0]!=''){
                    $industry = [];

                    $industry['name'] = $row[0];
                  
                    
    
                  
                    $this->industries[] = $industry;
                }


            }
            $i++;

        }
       
        $this->dispatchBrowserEvent('refreshSelects');
    }

    public function save()
    {
       
        $saved=[];
       

        foreach ($this->industries as $industryData) {
            $industry = new Industry;
            
            if(Industry::where('name', $industryData['name'])->exists()){
                $industry=\App\Models\Tenant\Industry::where('name',$industryData['name'])->first();
                
             }
             else{
                $industry->name=$industryData['name'];
             }
             $industry->added_by=Auth::id();
                
                
             

        
            // Call the createUser method of UserService and pass the user model along with other parameters
            $saved[]= $industry->save();
           
        }
        $this->showList("Industry data has been imported successfully");
      
        $this->industries = [];
    }

    public function showList($message = "")
	{
		// Save data
		$this->emit('showList', $message);
	}
}
