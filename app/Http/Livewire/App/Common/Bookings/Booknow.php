<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
use App\Models\Tenant\Booking;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\UserAddress;
use Illuminate\Support\Collection;

class Booknow extends Component
{
    public $component = 'requester-info';
    
    public $showForm,$booking,$requesters =[],$bManagers=[],$supervisors=[],$consumers=[],$participants=[], $step=1,$userAddresses=[] ;
    protected $listeners = ['showList' => 'resetForm','updateVal', 'updateCompany',
        'updateSelectedIndustries' => 'selectIndustries',
        'updateSelectedDepartments',
        'saveCustomFormData'=>'save' ,'switch'];

    public $dates=[[
        'set_time_zone'=>'',
        'start_date'=>'',
        'start_time'=>'',
        'end_time'=>'',
        'Total_Billable_Service_duration'=>''

    ]];
    
    public $setupValues = [
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'booking.timezone_id','','timezone',0]],
    
        'companies' => ['parameters' => ['Company', 'id', 'name', '', '', 'name', false, 'booking.company_id', '', 'company_id', 3]],
    ];

    //modal variables
    public $selectedIndustries=[],  $selectedDepartments = [], $svDepartments=[],$industryNames=[], $departmentNames=[];

   

    public $services=[
        [   'accommodation_id'=>'',
            'service_id'=>'',
            'service_type'=>'',
            'specializations'=>[],
            'meetings' =>[['meeting_name' => '','phone_number' => '','access_code' => '']] //updated by Amna Bilal to define meeting links array within services array
            
        ]
    ];

    public $freqencies=[],$accommodations=[];

    public $serviceTypes=['1'=>['class'=>'inperson-rate','postfix'=>'','title'=>'In-Person'],
    '2'=>['class'=>'virtual-rate','postfix'=>'_v','title'=>'Virtual'],
    '4'=>['class'=>'phone-rate','postfix'=>'_p','title'=>'Phone'],
    '5'=>['class'=>'teleconference-rate','postfix'=>'_t','title'=>'Teleconference'],
  ];


    public function mount(Booking $booking)
    {
        $this->booking=$booking;
        if(!$this->booking->id){
            $this->booking->requester_information=0;
            $this->booking->frequency_id=32;
        }
        $accommodationsCollection = collect($this->accommodations);
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->frequencies=SetupValue::where('setup_id',6)->select('id','setup_value_label')->get()->toArray();
        $this->accommodations=Accommodation::with('services.specializations')->where('status',1)->get()->toArray();
        $serviceTypeLabels=SetupValue::where('setup_id',5)->pluck('setup_value_label')->toArray();
        for($i=0,$j=1;$i<4;$i++,$j++){
            if($j==3)
               $j=4;
            $this->serviceTypes[$j]['title']=$serviceTypeLabels[$i];
        }

        //loop to implode service type for services arrays

        foreach($this->accommodations as &$accommodation){
           foreach($accommodation['services'] as &$service)
           {
            if(!is_null($service['service_type'])){
           
                if(!is_array($service['service_type']))
                $service['service_type']=explode(',',$service['service_type']);
              
              
            }
           }
        }
      
        
        if($this->booking){
          //  $this->updateCompany();
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
       
      $this->updateUsers();
    }
    
   //refactor code
    public function updateUsers() {
        $departmentIds = array_column($this->selectedDepartments, 'department_id');
    
        $this->requesters = $this->getUsersByRole(6, $departmentIds, 'requesters');
        $this->supervisors = $this->getUsersByRole(5, $departmentIds, 'supervisors');
        $this->bManagers = $this->getUsersByRole(9, $departmentIds, 'bManagers');
        $this->consumers = $this->getUsersByRole(7, $departmentIds, 'consumers');
        $this->participants = $this->getUsersByRole(8, $departmentIds, 'bManagers');
        
    }
    
    private function getUsersByRole($roleId, $departmentIds, $property) {
        $query = User::query()
        ->where(['users.status' => 1])
        ->whereHas('roles', function ($query) use ($roleId) {
            $query->where('role_id', $roleId);
        })
        ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
        ->leftJoin('companies', 'companies.id', '=', 'users.company_name')
        ->when(isset($this->booking['company_id']), function ($query) {
            return $query->where('companies.id', '=', $this->booking['company_id']);
        })
        ->leftJoin('user_departments', 'user_departments.user_id', '=', 'users.id')
        ->where('user_departments.department_id', '=', $departmentIds)
        ->select('users.id', 'users.name', 'phone', 'email');

    return $query->get()->isEmpty()
        ? $this->getFallbackUsers($roleId)
        : $query->get();
    }
    
    private function getFallbackUsers($roleId) {
        return User::query()
            ->where(['users.status' => 1])
            ->whereHas('roles', function ($query) use ($roleId) {
                $query->where('role_id', $roleId);
            })
            ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
            ->leftJoin('companies', 'companies.id', '=', 'users.company_name')
            ->where('companies.id', '=', $this->booking['company_id'])
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
        $this->services[]=         [   'accommodation_id'=>'',
        'service_id'=>'',
        'service_type'=>'',
        'specializations'=>[],
        'meetings' =>[['meeting_name' => '','phone_number' => '','access_code' => '']] //updated by Amna Bilal to define meeting links array within services array
        
    ];

    }
    public function removeServices($index)
    {
        unset($this->services[$index]);
        $this->services = array_values($this->services);
    }


    public function updateVal($attrName, $val)
    {
       
        if ($attrName == "company_id") {

                $this->booking['company_id'] = $val;
                
                // Emit an event with data
                $this->emit('updateCompany', $val);
                $this->departmentNames = [];
            } elseif (preg_match('/accommodation_id_(\d+)/', $attrName, $matches)) {
                $index = intval($matches[1]);
               
        
                if (isset($this->services[$index])) {
                    $this->services[$index]['accommodation_id'] = $val;
                }
            }
            elseif (preg_match('/service_id_(\d+)/', $attrName, $matches)) {
                $index = intval($matches[1]);
               
        
                if (isset($this->services[$index])) {
                    $this->services[$index]['service_id'] = $val;
                }
            }
            elseif (preg_match('/service_consumer_(\d+)/', $attrName, $matches)) {
                $index = intval($matches[1]);
               
        
                if (isset($this->services[$index])) {
                    $this->services[$index]['service_consumer'] = $val;
                }
            }
            elseif (preg_match('/attendees_(\d+)/', $attrName, $matches)) {
                $index = intval($matches[1]);
               
        
                if (isset($this->services[$index])) {
                    $this->services[$index]['attendees'] = $val;
                }
            }  
            elseif($attrName=='customer_id'){
                $this->booking['customer_id']=$val;
                $this->refreshAddresses();
               
             }

        else
        $this->booking[$attrName] = $val;


         //extra checks to call additional functions


    }

    //functions to set modal values
    public function selectIndustries($selectedIndustries, $defaultIndustry, $industryNames)
    {
        //need to pass user to set values
        $this->selectedIndustries = $selectedIndustries;
        $this->industryNames = $industryNames;
        // $this->userdetail['industry'] = $defaultIndustry;
    }
    public function updateSelectedDepartments($selectedDepartments, $defaultDepartment, $departmentNames)
    {
        //need to pass user to set values
        $this->selectedDepartments = $selectedDepartments;
        // $this->userdetail['department'] = $defaultDepartment;
        $this->departmentNames = $departmentNames;
        $this->updateUsers();
       
    }

    public function rules(){
        return [
            'booking.frequency_id'=>'required',
            'booking.requester_information'=>'nullable',
            'booking.poc_phone'=>'nullable',
            'booking.company_id'=>'required',
            'booking.customer_id'=>'required',
            'booking.supervisor'=>'required',
            'booking.billing_manager_id'=>'nullable'

        ];
    }

    public function refreshAddresses(){
       //query to fetch addresses
      $addresses=UserAddress::where(['address_type'=>1,'user_id'=>$this->booking['customer_id']])->orderBy('id','desc')->limit('4')->get();
      foreach($addresses as $address){
        $this->userAddresses[]=$address->toArray();
         }
    }

    public function editAddress($index, $type)
	{
		$this->userAddresses[$index]['index'] = $index;	//passing ref index
		$this->emit('updateAddressType', $type, $this->userAddresses[$index]);
	}

}
