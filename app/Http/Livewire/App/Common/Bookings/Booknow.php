<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
use App\Models\Tenant\Booking;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\Accommodation;

class Booknow extends Component
{
    public $component = 'requester-info';
    public $booking;
    public $showForm,$assignment,$requesters =[],$bManagers=[],$supervisors=[], $step=1 ;
    protected $listeners = ['showList' => 'resetForm','updateVal', 'updateCompany',
        'updateSelectedIndustries' => 'selectIndustries',
        'updateSelectedDepartments' => 'selectDepartments',
        'saveCustomFormData'=>'save' ,'switch'];

    public $dates=[[
        'set_time_zone'=>'',
        'start_date'=>'',
        'start_time'=>'',
        'end_time'=>'',
        'Total_Billable_Service_duration'=>''

    ]];
    
    public $setupValues = [
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'assignment.timezone_id','','timezone',0]],
    
        'companies' => ['parameters' => ['Company', 'id', 'name', '', '', 'name', false, 'assignment.company_id', '', 'company_id', 3]],
    ];

    //modal variables
    public $selectedIndustries=[],  $selectedDepartments = [], $svDepartments=[],$industryNames=[], $departmentNames=[];

   

    public $services=[
        [   'accommodation_id'=>'',
            'service_id'=>'',
            'meetings' =>['meeting_name' => '','phone_number' => '','access_code' => ''] //updated by Amna Bilal to define meeting links array within services array
            
        ]
    ];

    public $freqencies=[],$accommodations=[];


    public function mount(Booking $booking)
    {
        $this->booking=$booking;
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->frequencies=SetupValue::where('setup_id',6)->select('id','setup_value_label')->get()->toArray();
        $this->accommodations=Accommodation::with('services')->where('status',1)->get()->toArray();
       
        if($this->assignment){
            $this->updateCompany();
        }else{
            $this->assignment=[
                'company_id'=>null,
                'requester' => null,
                'supervisor' => null,
                'billing_manager' => null,

            ];
        }
    

    }

    public function render()
    {
       
        return view('livewire.app.common.bookings.booknow');
    }

    

    public function save($redirect = 1)
    {
        // $this->validate();
        
        if ($redirect) {
            $this->confirmation("Assignment Data has been saved successfully");
        } else {
            $this->switch('payment-info');
      
            $this->dispatchBrowserEvent('refreshSelects');
        }
    }

    public function confirmation($message = '')
    {
        if ($message) {
            // Emit an event to display a success message using the SweetAlert package
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'Success',
                'text' => $message,
            ]);
        }
    }


    // update all dropdown values when company is changed
    public function updateCompany(){
        $this->requesters = User::query()->where(['users.status' => 1])
            ->whereHas('roles', function ($query) {
                $query->where('role_id', 6);
            })
            ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
            ->leftJoin('companies', 'companies.id', '=', 'users.company_name')
            ->where('companies.id', '=', $this->assignment['company_id'])
            ->select('users.id', 'users.name', 'phone', 'email')
            ->get();
        $this->supervisors = User::query()->where(['users.status' => 1])
            ->whereHas('roles', function ($query) {
                $query->where('role_id', 5);
            })
            ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
            ->leftJoin('companies', 'companies.id', '=', 'users.company_name')
            ->where('companies.id', '=', $this->assignment['company_id'])
            ->select('users.id', 'users.name', 'phone', 'email')
            ->get();
        $this->bManagers = User::query()->where(['users.status' => 1])
            ->whereHas('roles', function ($query) {
                $query->where('role_id', 8);
            })
            ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
            ->leftJoin('companies', 'companies.id', '=', 'users.company_name')
            ->where('companies.id', '=', $this->assignment['company_id'])
            ->select('users.id', 'users.name', 'phone', 'email')
            ->get();
    }

    function showForm()
    {
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }
    public function switch($component)
	{
		$this->component = $component;
        $this->dispatchBrowserEvent('refreshSelects');

	}
    public function addMeeting($serviceIndex)
    {
        $this->services[$serviceIndex]['meetings'][] = [
            'meeting_name' => '',
            'phone_number' => '',
            'access_code' => '',
        ]; //updated by Amna Bilal to add new item in meetings array within service array on index passed
    }
    public function removeMeeting($index,$serviceIndex)
    {
        unset($this->services[$serviceIndex]['meetings'][$index]);
        $this->services[$serviceIndex]['meetings'] = array_values($this->services[$serviceIndex]['meetings']); //updated by Amna Bilal to meeting remove link from service array
    }
    public function adddate(){
        $this->dates[] = [
            'set_time_zone'=>'',
            'start_date'=>'',
            'start_time'=>'',
            'end_time'=>'',
            'Total_Billable_Service_duration'=>''
        ];
    }
    public function removeDate($index)
    {
        unset($this->dates[$index]);
        $this->dates = array_values($this->dates);
    }
    public function addService(){
        $this->services[]= ['meetings' => [['meeting_name' => '','phone_number' => '','access_code' => '']]]; //updated by Amna Bilal to define meeting links array within services array

    }
    public function removeServices($index)
    {
        unset($this->services[$index]);
        $this->services = array_values($this->services);
    }


    public function updateVal($attrName, $val)
    {
       
        if ($attrName == "company_id") {

                $this->assignment['company_id'] = $val;
                // Emit an event with data
                $this->emit('updateCompany', $val);
                $this->departmentNames = [];
            } elseif (preg_match('/accommodation_id_(\d+)/', $attrName, $matches)) {
                $index = intval($matches[1]);
               
        
                if (isset($this->services[$index])) {
                    $this->services[$index]['accommodation_id'] = $val;
                }
            }
        // else
        // $this->$attrName = $val;
    }

    //functions to set modal values
    public function selectIndustries($selectedIndustries, $defaultIndustry, $industryNames)
    {
        //need to pass user to set values
        $this->selectedIndustries = $selectedIndustries;
        $this->industryNames = $industryNames;
        // $this->userdetail['industry'] = $defaultIndustry;
    }
    public function selectDepartments($selectedDepartments, $defaultDepartment, $departmentNames)
    {
        //need to pass user to set values
        $this->selectedDepartments = $selectedDepartments;
        // $this->userdetail['department'] = $defaultDepartment;
        $this->departmentNames = $departmentNames;
    }

    public function rules(){
        return [
            'booking.frequency_id'=>'required',
        ];
    }

}
