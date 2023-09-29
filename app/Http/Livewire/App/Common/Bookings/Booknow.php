<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\UserAddress;
use App\Models\Tenant\RoleUserDetail;
use App\Models\Tenant\UserDetail;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\Company;
use App\Services\App\BookingOperationsService;
use App\Models\Tenant\CustomizeForms;
use App\Models\Tenant\Payment;
use App\Services\App\AddressService;
use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;

use Carbon\Carbon;
use DateTime;
use Auth;
use Session;



class Booknow extends Component
{
    public $component = 'requester-info';
    
    public $booking_id,$showForm,$booking,$requesters =[],$bManagers=[],$supervisors=[],$consumers=[],$participants=[], $step=1,$userAddresses=[], $timezone, $schedule, $timezones, $formIds,$selectedAddressId, $bookingDetails,$selectedServices=[];
    protected $listeners = ['showList' => 'resetForm','updateVal', 'updateCompany',
        'updateSelectedIndustries' => 'selectIndustries',
        'updateSelectedDepartments','confirmation',
        'saveCustomFormData'=>'save' ,'switch','updateAddress' => 'addAddress'];

    public $dates=[],$isCustomer=false,$customerDetails=[],$cantRequest=false;
    public $foundService=['default_providers'=>2];
    public $payment,$discountedAmount=0,$totalAmount=0;
    
    
    public $setupValues = [
      
    
        'companies' => ['parameters' => ['Company', 'id', 'name', '', '', 'name', false, 'booking.company_id', '', 'company_id', 3]],
    ];

    

    //modal variables
    public $selectedIndustries=[],  $selectedDepartments = [], $svDepartments=[],$industryNames=[], $departmentNames=[];

   

    public $services=[
        [   'accommodation_id'=>'',
            'services'=>'',
            'service_types'=>'',
            'meetings' =>[['meeting_name' => '','phone_number' => '','access_code' => '']], //updated by Amna Bilal to define meeting links array within services array
            'time_zone'=>'',
            'is_manual_consumer' =>0,
            'is_manual_attendees' =>0,
            'service_consumer' => '',
            'attendees' => [],
            'provider_count'=>'',
            'specialization' =>[],
            'day_rate' =>'',
            'duration_day'=>'',
            'duration_hour'=>'',
            'duration_minute'=>'',
            'start_time'=>'',
            'end_time'=>'',
            'status'=>0,
            'auto_assign'=>false,
            'auto_notify'=>false
            
            
        ]
    ];

    public $freqencies=[],$accommodations=[];

    public $serviceTypes=['1'=>['class'=>'inperson-rate','postfix'=>'','title'=>'In-Person'],
    '2'=>['class'=>'virtual-rate','postfix'=>'_v','title'=>'Virtual'],
    '4'=>['class'=>'phone-rate','postfix'=>'_p','title'=>'Phone'],
    '5'=>['class'=>'teleconference-rate','postfix'=>'_t','title'=>'Teleconference'],
  ];

    public $assignedSupervisor="";public $isEdit,$selectRequestor=true;



    public function mount(Booking $booking)
    {




        $this->booking=$booking;
        $this->payment=new Payment;
        $this->payment['discounted_amount']=0;
        $this->payment['payment_method']=2;
        $this->schedule=Schedule::where('model_id',1)->where('model_type',1)->get()->first();
        $this->timezones=SetupValue::where('setup_id',4)->select('id','setup_value_label')->get()->toArray();
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
        $this->frequencies=SetupValue::where('setup_id',6)->select('id','setup_value_label')->get()->toArray();
        $this->accommodations = Accommodation::with(['services' => function ($query) {
            $query->where('status', 1)->with(['specializations' => function ($query) {
                $query->where('status', 1);
            }]);
        }])->where('status', 1)->get()->toArray();
        
       
        $serviceTypeLabels=SetupValue::where('setup_id',5)->pluck('setup_value_label')->toArray();
        for($i=0,$j=1;$i<4;$i++,$j++){
            if($j==3)
               $j=4;
            $this->serviceTypes[$j]['title']=$serviceTypeLabels[$i];
        }

        if (request()->bookingID != null) {
            $id=request()->bookingID;
            $this->isEdit=true;

            $this->booking=Booking::with('company','accommodation','booking_services_new_layout','industries','customer','payment','departments')->find($id);

            if(!is_null($this->booking->payment)){
                $this->payment=$this->booking->payment;
                $this->payment['discounted_amount']=0;
                $this->payment['payment_method']=2;
            }
              
            if(!is_null($this->booking->recurring_end_at) && $this->booking->recurring_end_at!=''){
                
                $this->booking->recurring_end_at =  Carbon::createFromFormat('Y-m-d', $this->booking->recurring_end_at)->format('m/d/Y');
                
            }
         // dd($this->booking);
            $this->updateCompany();
            $this->services=$this->booking->booking_services_new_layout->toArray();
            foreach($this->services as &$service)
            {
                $service['specialization']=json_decode($service['specialization'],true);
                $accId=$service['accommodation_id'];
                $accIndex = collect($this->accommodations)->search(function ($accommodation) use($accId) {
                    return $accommodation['id'] === $accId;
                });
                
            }
          
            $this->selectedIndustries=$this->booking->industries->pluck('id')->toArray();
            $this->industryNames = $this->booking->industries->pluck('name');
    
            $this->selectedDepartments=$this->booking->departments->pluck('pivot')->toArray();
            
            $this->departmentNames=$this->booking->departments->pluck('name')->toArray();

          // dd($this->departmentNames);
          // dd( $this->selectedIndustries);

         
           
            $this->refreshAddresses();
            foreach($this->services as  $index => &$service){
                $dayRate=false;
                if(!is_null($service['service_calculations'])){
                    $serviceCalculations=json_decode($service["service_calculations"],true);
                    if(key_exists('day_rate',$serviceCalculations)){
                      $dayRate=$serviceCalculations['day_rate'];
                    }
                }
                else{
                    $accommodationsCollection = collect($this->accommodations);

                    // Perform the search using the filter method

                    $serviceIdToFind = $service['services'];
                    $foundService = $accommodationsCollection
                        ->flatMap(fn($item) => $item['services'])
                        ->firstWhere('id', $serviceIdToFind);

                    if($foundService['rate_status']==2){
                        $dayRate=true;
                    }
                }
                 

                $service['meetings']=json_decode($service['meetings'], true);
                //date time mapping
                $startDate = new DateTime($service['start_time']);
                $endDate = new DateTime($service['end_time']);
                $this->dates[$index]=[
                    'start_date'=>$startDate->format('m/d/Y'),
                    'start_hour' => $startDate->format('H'),
                    'start_min'=>$startDate->format('i'),
                    'end_date'=>$endDate->format('m/d/Y'),
                    'end_hour' => $endDate->format('H'),
                    'end_min'=>$endDate->format('i'),
                    'start_am'=>'',
                    'end_am'=>'',
                    'duration_day' => '',
                    'duration_hour' => '',
                    'duration_minute' => '',
                    'time_zone' => $service['time_zone'],
                    'day_rate'=>$dayRate
        
                ];
               

                if(is_null($this->dates[$index]['time_zone'])){
                    if($this->schedule)
                        $this->dates[$index]['time_zone']=$this->schedule->timezone_id;
                }

             
                if($this->dates[$index])
                    $this->updateDurations($index);
                $this->booking_id=$this->booking->id;

            }

          

        }
        if(!$this->booking->id){ //init data in case of new booking
            $this->booking->requester_information='';
            $this->booking->frequency_id=1;
        
            $this->addDate();
           

           
            
       
           
        }
               //checking if customer user
              
               if(Auth::user()->roleUser->role_id==4){
                $this->customerDetails=UserDetail::where('user_id',Auth::user()->id)->first()->toArray();
               
                $this->isCustomer=true;
                $this->booking->company_id=Auth::user()->company_name;
                $this->companyName=Company::select('name')->where('id',Auth::user()->company_name)->first()->name;
                $this->updateCompany();
                $this->emit('updateCompany',  $this->booking->company_id);
                $customerRoles=Session::get('customerRoles');
                if(is_null($customerRoles))
                   $customerRoles=[];
               
                if(!in_array(10,$customerRoles) && !in_array(6,$customerRoles)) //need to reconfirm
                     $this->cantRequest=true;
                elseif(in_array(6,$customerRoles)){
                    $this->booking->customer_id=Auth::user()->id;
                    $this->selectRequestor=false;
                    $this->getUserRoleDetails($this->booking['customer_id']);
                    $this->refreshAddresses();
                   
                }
                   
                if(in_array(10,$customerRoles))
                    $this->selectRequestor=true;
              
                $this->booking->customer_id=Auth::user()->id;
                
            }
        $accommodationsCollection = collect($this->accommodations);
       
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
    
       
        $this->dispatchBrowserEvent('refreshSelects');
      
       

    }

    public function render()
    {
      //  dd($this->services);
       // $this->dispatchBrowserEvent('refreshSelects');
       
        return view('livewire.app.common.bookings.booknow');
    }

    

    public function save($redirect = 1,$draft=0,$step=1)
    {
       // dd($this->booking);
        //booking basic info

        if($step==1){
            $this->validate();
            if(!is_null($this->booking->recurring_end_at) && $this->booking->recurring_end_at!=''){
                
                $this->booking->recurring_end_at =  Carbon::createFromFormat('m/d/Y', $this->booking->recurring_end_at)->toDateString();
                $this->booking->is_recurring=1;
                
            }
             //get schedule too
             $slotNotFound=0;
            $this->schedule=BookingOperationsService::getSchedule($this->booking->company_id,$this->booking->customer_id);
            //cross checking schedules
            $dates=$this->dates;
           
            foreach($this->services as $service){
                $service['start_time'] =  Carbon::parse($dates[0]['start_date'].' '.$dates[0]['start_hour'].':'.$dates[0]['start_min'].':00')->format('Y-m-d H:i:s');
                $service['end_time'] =  Carbon::parse($dates[0]['end_date'].' '.$dates[0]['end_hour'].':'.$dates[0]['end_min'].':00')->format('Y-m-d H:i:s');
           //     dd($service);
                if($service['start_time']>$service['end_time']){
                    throw ValidationException::withMessages([
                        'slot' => ['Invalid time range selected - Service start time must be less than service end time'],
                    ]);
                }
              
                $slotCheck=BookingOperationsService::getBillableDuration($service,$this->schedule);
                
                if(!$slotCheck['business_hours'] && !$slotCheck['business_minutes'] && !$slotCheck['after_business_hours'] && !$slotCheck['after_business_minutes'])
                 {$slotNotFound=1;
                    if(!is_null($this->booking->recurring_end_at) && $this->booking->recurring_end_at!=''){
            
                        $this->booking->recurring_end_at =  Carbon::createFromFormat('Y-m-d', $this->booking->recurring_end_at)->format('m/d/Y');
                        
                        }
                   
                }
            }
            if ($slotNotFound === 1) {
                throw ValidationException::withMessages([
                    'slot' => ['The selected service time falls within the business\'s closed hours. Please choose a start and end time during the operating hours to proceed with your booking.'],
                ]);
            }

            if($this->booking->requester_information=='')
                $this->booking->requester_information=0;
            //calling booking service passing required data

                $this->booking=BookingOperationsService::createBooking($this->booking,$this->services,$this->dates,$this->selectedIndustries,$this->selectedDepartments,false,$this->isEdit);
           // else
           // {
           //     $this->booking->provider_count=$this->services[0]['provider_count'];

                //update booking
                if(is_null($this->booking->supervisor=='') || $this->booking->supervisor=='')
                    $this->booking->supervisor=0;
                $this->booking->save();
               
              //  BookingOperationsService::saveDetails($this->services,$this->dates,$this->selectedIndustries,$this->booking,$this->selectedDepartments);
              
           // }
           // dd($this->booking->physical_address_id);
           if(!is_null($this->booking->recurring_end_at) && $this->booking->recurring_end_at!=''){
            
            $this->booking->recurring_end_at =  Carbon::createFromFormat('Y-m-d', $this->booking->recurring_end_at)->format('m/d/Y');
            
            }
            $this->booking_id=$this->booking->id;
            $this->getForms();
            if(!is_null($this->booking->recurring_end_at) && $this->booking->recurring_end_at!=''){
                
              //  $this->booking->recurring_end_at =  Carbon::createFromFormat('Y-m-d', $this->booking->recurring_end_at)->toDateString();
              //  $this->booking->is_recurring=1;
                
            }


        }
        else{
          
            foreach($this->services as $service){
               
               $serviceCalculations=[
                "business_hour_charges" => $service["business_hour_charges"],
                "after_business_hour_charges" =>  $service["after_business_hour_charges"],
                "service_charges" => $service["service_charges"],
                "additional_payments" => $service["additional_payments"],
                "service_payment_total"=> $service["service_payment_total"],
                "additional_charges" =>  $service["additional_charges"],
                "additional_charges_total" => $service["additional_charges_total"],
                "specialization_total" => $service["specialization_total"],
                "specialization_charges" => $service["specialization_charges"],
                "expedited_charges" => $service["expedited_charges"],
                "duration_hour"=>$service['business_hours']+$service['after_business_hours'],
                "duration_minute"=>$service['business_minutes']+$service['after_business_minutes'],
                "total_duration"=>$service['total_duration'],
                'day_rate'=>$service['day_rate'],
                'business_hour_duration'=>($service['business_hours']*60)+($service['business_minutes']),
                'after_hour_duration'=>($service['after_business_hours']*60)+($service['after_business_minutes']),

               ];
               $serviceCalculations=json_encode($serviceCalculations);
             
                
                BookingServices::where('id', $service['id'])->where('booking_id', $this->booking->id)->update(['billed_total' => $service['billed_total'],'service_total'=>$service['total_charges'],'service_calculations'=>$serviceCalculations]);
            }
            $this->booking->type=1;
            //$this->booking->status=1;
            $this->booking->booking_status=1; //will change it later for consumers or other company users, need to check rights
            if(!is_null($this->booking->recurring_end_at) && $this->booking->recurring_end_at!=''){
                
                $this->booking->recurring_end_at =  Carbon::createFromFormat('m/d/Y', $this->booking->recurring_end_at)->toDateString();
                $this->booking->is_recurring=1;
                
            }

            //checking if cusotmer needs approval
            if($this->isCustomer){
                if(key_exists('user_configuration',$this->customerDetails) && !is_null($this->customerDetails['user_configuration'])){
                    $configurations=json_decode($this->customerDetails['user_configuration'],true);
                    if(!is_null($configurations) && key_exists('require_approval',$configurations) && $configurations['require_approval']=="true"){
                      
                        $this->booking->booking_status=0;
                    }
                }
            }

            $this->booking->save();
            $this->updateTotals();
            $this->payment['booking_id']=$this->booking->id;
            $this->payment['payment_method_type']='Other';
            $this->payment['payment_by']=Auth::user()->id;
            if($this->payment['additional_charge']=='' || is_null($this->payment['additional_charge']))
                 $this->payment['additional_charge']=0;
            if($this->payment['additional_charge_provider']=='' || is_null($this->payment['additional_charge_provider']))
                 $this->payment['additional_charge_provider']=0;    
            if($this->payment['coupon_discount_amount']=='' || is_null($this->payment['coupon_discount_amount']))
                 $this->payment['coupon_discount_amount']=0;        
                 
            $this->payment->save();

            if($this->booking->frequency_id>1){

                //multiple bookings 
                //check if new booking
                if ($this->isEdit) {
                   
                }
                else{
                    //new booking then replicate
                    BookingOperationsService::createRecurring($this->booking->id);
                }
              
                
            }

            return redirect()->to('/admin/bookings/unassigned');
        }
       
        if ($redirect) {
            $this->confirmation("Assignment Data has been saved successfully");
            
        } else {
            //if(count($this->formIds)==0)
            //$this->switch('payment-info');
      
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
        $this->emit('isBooking');
        $this->departmentNames = [];
      $this->updateUsers();
     // $this->refreshSelects('refreshSelects');
      $this->schedule=BookingOperationsService::getSchedule($this->booking->company_id,$this->booking->customer_id);
      
      if($this->schedule && $this->schedule['timezone_id'] && !$this->isEdit)
         {
            $this->dates=[];  
            $this->addDate();
         }   


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
     
        if($component=='requester-info'){
            foreach($this->services as &$service){
                if(!is_array($service['meetings'])){
                    $service['meetings']=json_decode($service['meetings'],true);
                }
            }
            if(!is_null($this->booking->recurring_end_at) && $this->booking->recurring_end_at!=''){
                
                $this->booking->recurring_end_at =  Carbon::createFromFormat('Y-m-d', $this->booking->recurring_end_at)->format('m/d/Y');
                
            }
          
        }
		$this->component = $component;
        if($component=="payment-info")
            $this->getBookingInfo();         
        $this->dispatchBrowserEvent('refreshSelects');
      

	}

    public function refreshSelects(){
       
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

    public function getTimeZone($timeZone){
        $timeZoneCity='';


        $selectedTimezone = collect($this->timezones)->firstWhere('id', $timeZone);

        if ($selectedTimezone) {
            $timezoneString = $selectedTimezone['setup_value_label'];

            // Extracting the timezone city from the string
            preg_match('/\(([^)]+)\)/', $timezoneString, $matches);
            $timeZoneCity = isset($matches[1]) ? $matches[1] : null;
        }    
        return $timeZoneCity;
    }

    

    public function addDate($givenHour=1,$dayRate=false){
     
        if($this->isEdit)
          return;
        if(is_null($givenHour)|| $givenHour==0 || $givenHour=='')
          $givenHour=1;
        if($this->schedule && $this->schedule['timezone_id'])
        $timeZone=$this->schedule->timezone_id;
        else 
            $timeZone=60;
        $timeZoneCity=$this->getTimeZone($timeZone);
    
            // If we were able to extract a city, use it to get the current date and time
            if ($timeZoneCity) {
                $currentDate = Carbon::now(new \DateTimeZone($timeZoneCity));
            } else {
                // If not, fall back to the default timezone
                $currentDate = Carbon::now();
            }

       
       
            $startDate= $currentDate->format('m/d/Y');    
  
            $currentHour = $currentDate->format('H');
            $currentMinute = $currentDate->format('i');
       

      
        //dd($currentDate->addHours($givenHour));
        $endHour = $currentDate->addHours($givenHour)->format('H');
        $endTime = $currentDate->format('i');

        $this->dates[] =[
            'start_date' =>$startDate,
            'start_hour' => $currentHour,
            'start_min' => $currentMinute,
            'end_date' => $currentDate->format('m/d/Y'), // Adjust if necessary, if the end date might be different
            'end_hour' => $endHour,
            'end_min' => $endTime,
            'start_am'=>'',
            'end_am'=>'',
            'duration_day' => '',
            'duration_hour' => '',
            'duration_minute' => '',
            'time_zone' => $timeZone,
            'day_rate'=>$dayRate

    ];
    
    //$this->dispatchBrowserEvent('refreshSelects');
    $this->updateDurations(count($this->dates)-1);
    }
    public function removeDate($index)
    {
        unset($this->dates[$index]);
        $this->dates = array_values($this->dates);
    }
    public function addService(){
        $this->services[]= [   
        'accommodation_id'=>'',
        'services'=>'',
        'service_types'=>'',
        'meetings' =>[['meeting_name' => '','phone_number' => '','access_code' => '']], //updated by Amna Bilal to define meeting links array within services array
        'time_zone'=>'',
        'is_manual_consumer' =>0,
        'is_manual_attendees' =>0,
        'service_consumer' => '',
        'attendees' => [],
        'provider_count'=>'',
        'specialization' =>[],
        'day_rate' =>'',
        'duration_day'=>'',
        'duration_hour'=>'',
        'duration_minute'=>'',
        'start_time'=>'',
        'end_time'=>'',
        'status'=>0,
        'auto_assign'=>false,
        'auto_notify'=>false
    ];
    $this->dispatchBrowserEvent('refreshSelects');
    }
    public function removeServices($index)
    {
        unset($this->services[$index]);
        $this->services = array_values($this->services);
        $this->dispatchBrowserEvent('refreshSelects');
    }


    public function updateVal($attrName, $val)
    {
        
       
        if ($attrName == "company_id") {

                $this->booking['company_id'] = $val;
                
                // Emit an event with data
                $this->emit('updateCompany', $val);
              
            } elseif (preg_match('/accommodation_id_(\d+)/', $attrName, $matches)) {
                $index = intval($matches[1]);
               
        
                if (isset($this->services[$index])) {
                    $this->services[$index]['accommodation_id'] = $val;
                    $this->updateServiceDefaults($index);
                }
            }
            elseif (preg_match('/services_(\d+)/', $attrName, $matches)) {
                $index = intval($matches[1]);
               
                //getting selected service to check if its day rate service
                if (isset($this->services[$index])) {
                    $this->services[$index]['services'] = $val;
                    $accommodationsCollection = collect($this->accommodations);

                    // Perform the search using the filter method

                    $serviceIdToFind = $this->services[$index]['services'];
                    $foundService = $accommodationsCollection
                        ->flatMap(fn($item) => $item['services'])
                        ->firstWhere('id', $serviceIdToFind);

                    if($foundService['rate_status']==2){
                        $this->dates[0]['day_rate']=true;
                        $this->updateDurations(0);
                    }
                    else{
                        $this->dates[0]['day_rate']=false;
                        $this->updateDurations(0);
                    }
                   
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
            elseif (preg_match('/start_date_(\d+)/', $attrName, $matches)) {
                $index = intval($matches[1]);
               
                //dd($val);
                if (isset($this->dates[$index])) {
                    $this->dates[$index]['start_date'] = $val;
                   
                    // Step 1: Parse the date
                    $date = Carbon::createFromFormat('m/d/Y', $this->dates[$index]['start_date']);

                    $this->dates[$index]['end_date']=$date->addDays($this->dates[$index]['duration_day'])->addHours( $this->dates[$index]['duration_hour'])->addMinutes($this->dates[$index]['duration_minute'])->format('m/d/Y');
                    $this->updateDurations($index);
                }
              
            }        
            elseif (preg_match('/timezone_(\d+)/', $attrName, $matches)) {
                $index = intval($matches[1]);
               
        
                if (isset($this->dates[$index])) {
                    $this->dates[$index]['time_zone'] = $val;
                    $this->updateDurations($index);
                  
                }
              
            }         
            elseif (preg_match('/end_date_(\d+)/', $attrName, $matches)) {
                $index = intval($matches[1]);
               
       
                if (isset($this->dates[$index])) {
                    $this->dates[$index]['end_date'] = $val;
                    $this->updateDurations($index);
                  
                }
              //  dd( $this->dates[$index]['end_date']);
            }  
            elseif($attrName=='customer_id'){
                $this->booking['customer_id']=$val;
                $this->getUserRoleDetails($this->booking['customer_id']);
                $this->refreshAddresses();
               
             }
             

        else
        $this->booking[$attrName] = $val;

        
         //extra checks to call additional functions


    }

    public function updateServiceDefaults($index,$key=0){
        //updating defaults
             $accommodationsCollection = collect($this->accommodations);

            // Perform the search using the filter method
        
            $serviceIdToFind = $this->services[$index]['services'];
            $foundService = $accommodationsCollection
                     ->flatMap(fn($item) => $item['services'])
                     ->firstWhere('id', $serviceIdToFind);
        //auto-notify and auto-assign
        
        //provider and consumer

        //start date and end date
        //start time and end time
        //show or hide day rate?


        if($key>0){
            $postfix=$this->serviceTypes[$key]['postfix'];
            $this->services[$index]['provider_count']=$foundService['default_providers'.$postfix];   
            $settings=json_decode($foundService['notification_settings'.$postfix],true);
          
            if(!is_null($settings) && count($settings) && key_exists('auto_assign',$settings[0])){
                $this->services[$index]['auto_assign']=$settings[0]['auto_assign'];
            } 
            if(!is_null($settings) &&  count($settings) &&  key_exists('broadcast',$settings[0])){
                $this->services[$index]['auto_notify']=$settings[0]['broadcast'];
            } 
          
          
            if($foundService['rate_status']==2)
              $dayRate=true;
            else 
              $dayRate=false;
           if(!$this->isEdit){
            $this->dates=[];
            $this->addDate($foundService['minimum_assistance_hours'.$postfix],$dayRate);  
           }
           
           
        }
         

             
        

    }

    public function getUserRoleDetails($customerId){
        //getting role billing manager and supervisor
        $userRoles=RoleUserDetail::where('associated_user',$customerId)
        ->where(function ($query) {
            $query->where('role_id', 5)
                ->orWhere('role_id', 9);
        })->orderBy('role_id')->orderBy('is_default','desc')->select('role_id','user_id')->get();
        $this->assignedSupervisor='checked';
        if(!is_null($userRoles)){
           $supervisorSet=0;
           $bManagerSet=0;
           $this->booking->supervisor='';
           $this->booking->billing_manager_id='';
           foreach($userRoles as $userRole)
           {
             if($userRole['role_id']==5 ){
                $this->booking->supervisor=$userRole['user_id'];
                $supervisorSet=1;

             }
             elseif($userRole['role_id']==9){
                $this->booking->billing_manager_id=$userRole['user_id'];
                $bManagerSet=1;
             }


           }
           if($supervisorSet==0 || $bManagerSet==0)
                $this->assignedSupervisor='';
        }

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

    public function updateDurations($index)
    {
      
        // Assuming you have the $date array in your Livewire component.
        try {
            $timeZoneCity=$this->getTimeZone($this->dates[$index]['time_zone']);
           
        if (isset($this->dates[$index]['start_date']) && isset($this->dates[$index]['end_date']) &&
            isset($this->dates[$index]['start_hour']) && isset($this->dates[$index]['start_min']) &&
            isset($this->dates[$index]['end_hour']) && isset($this->dates[$index]['end_min'])) {
               
                if($this->dates[$index]['time_zone']){
                  

                    $timeZoneIds = array_column($this->timezones, 'id'); // Assuming 'id' is the key that holds the ID
                    $timeZoneIndex = array_search($this->dates[$index]['time_zone'], $timeZoneIds);
                    
                    if ($timeZoneIndex !== false) {
                        $timezoneLabel = $this->timezones[$timeZoneIndex]['setup_value_label'];
                    }
                }
                   // dd($this->dates[$index]['start_date'] . $this->dates[$index]['start_hour'] . ':' . $this->dates[$index]['start_min'] . ':00');      
                    
                $startDateTime = Carbon::createFromFormat(
                    'm/d/YH:i:s', 
                    $this->dates[$index]['start_date'] . $this->dates[$index]['start_hour'] . ':' . $this->dates[$index]['start_min'] . ':00', 
                    new \DateTimeZone($timeZoneCity)
                );
              
                $endDateTime = Carbon::createFromFormat(
                    'm/d/YH:i:s', 
                    $this->dates[$index]['end_date'] . $this->dates[$index]['end_hour'] . ':' . $this->dates[$index]['end_min'] . ':00', 
                    new \DateTimeZone($timeZoneCity)
                );  
              
          //  if ($endDateTime >= $startDateTime) {
                $diff = $endDateTime->diff($startDateTime);
    
 
               if($this->dates[$index]['day_rate']){
                $days = $diff->days;
                $hours = $diff->h;
               
 
               }
               else{
                $days=0;
                $hours=(($diff->days * 24) + ($diff->h)); //+ $diff->i)/60
               }
                $minutes = $diff->i;
                $this->dates[$index]['duration_day']=$days;
                $this->dates[$index]['duration_hour']=$hours;
 
                $this->dates[$index]['duration_minute']=$minutes;
               //dd($this->dates);
               
            //} else {

                // Return an error message or handle the case where end date/time is not greater than start date/time.
               // return ['error' => 'End date/time must be greater than start date/time.'];
          //  }
           // dd($this->dates);
        }
    } catch (\Exception $e) {
        // Handle the exception, log the error, or debug further
      //  dd($e->getMessage());
    }
    
        return null; // Return null if the required fields are not set.
    }
    

    public function rules(){
        $rules= [
            'booking.frequency_id'=>'required',
            'booking.requester_information'=>'nullable',
            'booking.poc_phone'=>'nullable',
            'booking.company_id'=>'required',
            'booking.customer_id'=>'required',
            'booking.supervisor'=>'nullable',
            'booking.billing_manager_id'=>'nullable',
            'booking.recurring_end_at'=>'nullable',
            'booking.booking_title'=>'nullable',
            'selectedIndustries' => 'required|array|min:1',
            'booking.private_notes'=>'nullable',
            'booking.provider_notes'=>'nullable',
            'booking.customer_notes'=>'nullable',
            'booking.billing_notes'=>'nullable',
            'booking.payment_notes'=>'nullable',
            'booking.physical_address_id'=>'nullable',
            'booking.contact_point'=>'nullable',
            'booking.poc_phone'=>'nullable',
            'payment.coupon_type'=>'nullable',
            'payment.override_amount'=>'nullable|numeric',
            'payment.coupon_discount_amount'=>'nullable|numeric',
            'payment.additional_label'=>'nullable',
            'payment.additional_charge'=>'nullable|numeric',
            'payment.additional_label_provider'=>'nullable',
            'payment.additional_charge_provider'=>'nullable|numeric',
            'payment.discounted_amount'=>'nullable',
            'payment.payment_method'=>'sometimes|numeric'

        ];

        foreach ($this->services as $index => $service) {
            $rules['services.' . $index . '.accommodation_id'] = 'required';
            $rules['services.' . $index . '.services'] = 'required';
            $rules['services.' . $index . '.service_types'] = 'required';
            $rules['services.' . $index . '.provider_count'] = 'required';
        }
        foreach ($this->dates as $index => $date) {
            $rules['dates.' . $index . '.start_date'] = 'required';
            $rules['dates.' . $index . '.end_date'] = 'required|after_or_equal:dates.' . $index . '.start_date';

        }
        return $rules;
    }

    public function messages()
    {
        $messages = [];

        foreach ($this->dates as $index => $date) {
            $messages['dates.' . $index . '.end_date.required'] = 'End date is required';
            $messages['dates.' . $index . '.end_date.after_or_equal'] = 'End date must be greater than start date';
        }

        return $messages;
    }

    public function refreshAddresses(){
       //query to fetch addresses
       $this->userAddresses=[];
       $ids=[$this->booking['customer_id'],$this->booking['company_id']];
       for($i=0;$i<count($ids);$i++){
        $addresses=UserAddress::where(['address_type'=>1,'user_id'=>$ids[$i]])->orderBy('id','desc')->get();
        foreach($addresses as $address){
          $this->userAddresses[]=$address->toArray();
           }
       }

        
    }

    public function setBookingAddress($addressId)
    {
        $this->booking->physical_address_id=$addressId;
        $this->selectedAddressId = $addressId; 
       
    }
	public function addAddress($addressArr)
	{

		if (isset($addressArr['index'])) { //update existing
			$this->userAddresses[$addressArr['index']] = $addressArr;
		} else{
            //saving address for user first
            $addressService = new AddressService();
            $addressService->saveAddresses($this->booking['customer_id'],1,[$addressArr]);
            $this->refreshAddresses();
            $this->setBookingAddress($this->userAddresses[0]['id']);
        }
			
	}

    public function editAddress($index, $type)
	{
		$this->userAddresses[$index]['index'] = $index;	//passing ref index
		$this->emit('updateAddressType', $type, $this->userAddresses[$index]);
	}

    public function getForms(){
        $this->formIds=[];
       // dd($this->selectedIndustries);
        foreach($this->selectedIndustries as $industry){ //getting industry forms

            $industryForm=CustomizeForms::where('industry_id',$industry)->select('id')->first();
            if(!is_null($industryForm))
              $this->formIds[]=$industryForm->id;
            
        }
        foreach($this->accommodations as &$accommodation){
            foreach($accommodation['services'] as $service)
            {
                 foreach($this->services as $selectedService){
                 //getitng service forms
                    
                    if($selectedService['services']==$service['id'])
                        {
                            if(!in_array($service['request_form_id'],$this->formIds) && !is_null($service['request_form_id'])) //checking if form id already there, can happen if same form is selected for industry and servcies 
                                $this->formIds[]=$service['request_form_id'];    
                        }
                           
                }
            }
        } 
       
    //    if(count($this->formIds)==0){
    //        $this->switch('payment-info');
    //    }
    //    else
        $this->switch('request-details');
       
    }

    public function getBookingInfo(){
        $this->selectedServices=[];
        $bookingServices=BookingServices::where('booking_id',$this->booking->id)->get()->toArray();
       
        foreach($bookingServices as &$service){
            foreach($this->accommodations as $accommodation){
                if($accommodation['id'] == $service['accommodation_id']){
                    foreach($accommodation['services'] as $accommodationService)
                    {
                        if($service['services'] == $accommodationService['id']){
                            $postFix=$this->serviceTypes[$service['service_types']]['postfix'];
                            $serviceType=$this->serviceTypes[$service['service_types']]['title'];
                            $service['service_data']=$accommodationService;
                            $service['postFix']=$postFix;
                            $service["service_type"]=$serviceType;
                            $service['accommodation']=$accommodation;
                           
                            
                        }
                           
                    }
                }
            }
          
        }
   //   dd($bookingServices);
        $this->services=BookingOperationsService::getBookingCharges($this->booking,$bookingServices,$this->dates,$this->schedule);
        $this->updateTotals();
       // dd($this->booking->total_amount);
       // dd($this->bookingCharges);
       // $this->bookingDetails=BookingOperationsService::getBookingInfoNewLayout($this->booking);
       
    }
    public function updateTotals(){
       
        $this->validate([
            'payment.coupon_discount_amount' => 'nullable|numeric',
            'payment.additional_charge' => 'nullable|numeric',
            'payment.additional_charge_provider' => 'nullable|numeric',
            'payment.override_amount' => 'nullable|numeric',
        ]);

        foreach($this->services as $service)
        {
            if($service['billed_total'])
                $this->payment['sub_total']+=$service['billed_total'];
            else
            $this->payment['sub_total']+=$service['total_charges'];    
        }
        
//
        //discounts
      
       
        if($this->payment['coupon_type']==3 && !is_null($this->payment['coupon_discount_amount']) &&  $this->payment['coupon_discount_amount']!=''){
            //percentage of booking total discount
            $this->discountedAmount=$this->payment['discounted_amount']=($this->payment['sub_total']*$this->payment['coupon_discount_amount'])/100;
            $this->payment['sub_total']-= $this->payment['discounted_amount'];
            
        }
        elseif($this->payment['coupon_type']==2 && !is_null($this->payment['coupon_discount_amount']) &&  $this->payment['coupon_discount_amount']!=''){
            $this->discountedAmount= $this->payment['discounted_amount']=$this->payment['coupon_discount_amount'];
            $this->payment['sub_total']-=$this->payment['coupon_discount_amount'];
        }
        else{
            $this->payment['discounted_amount']=0;
        }

        if($this->payment['additional_charge']){
            $this->payment['sub_total']+=$this->payment['additional_charge'];
        }
        if($this->payment['additional_charge']){
            $this->payment['sub_total']+=$this->payment['additional_charge'];
        }

        if($this->payment['override_amount']){
            $this->payment['is_override']=1;
            $this->payment['total_amount']=$this->payment['override_amount'];
        }
        else{
            $this->payment['total_amount']=$this->payment['sub_total'];
        }
        $this->totalAmount= $this->payment['total_amount'];
       // dd($this->payment);

        //addtional payments and charges


    }
   

}
