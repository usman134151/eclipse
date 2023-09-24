<?php

namespace App\Http\Livewire\App\Common\Import;

use Livewire\Component;
use App\Models\Tenant\Booking;
use App\Models\Tenant\Payment;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\Company;
use App\Models\Tenant\Industry;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Helpers\SetupHelper;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\User;
use App\Services\App\BookingOperationsService;
use Auth;

class Bookings extends Component
{
    use WithFileUploads;

    public $companies, $industries, $accommodations, $services, $bookings, $statuses, $serviceType = [], $timezones = [], $requesters = [];
    public $file = null;

    public $warningMessage = '', $errorMessage = '';
    protected $listeners = ['updateVal' => 'updateVal'];


    public function render()
    {
        return view('livewire.app.common.import.bookings');
    }
    public function save(){
       

       //getting record ready for booking
       foreach($this->bookings as $bookingData){
        if (
            !array_key_exists('accommodation_id', $bookingData) || 
            !array_key_exists('service_id', $bookingData) || 
            !array_key_exists('service_type', $bookingData) || 
            !array_key_exists('timezone', $bookingData) || 
            !array_key_exists('industry_id', $bookingData)
        ) {
            $this->warningMessage= $this->errorMessage = "Please fill in all required fields before importing";
            return;
        }
      
       
    
        $services=[];$dates=[];$selectedDepartments=[];$selectedIndustries=[];
        $type=1;$unassigned=1; $status=1; //defaults
        //draft type=2;
        //status 1 for unassigned , 2 for past 
        if($bookingData['status']=='Draft'){
            $type=2;
        }
        elseif($bookingData['status']=='Cancelled'){
            $status=3;
        }
        elseif($bookingData['status']=='Completed'){
            $status=2; $unassigned=2;
        }     
        elseif($bookingData['status']=='Unassigned'){
            $status=1; $unassigned=1;
        } 
        elseif($bookingData['status']=='Paid'){
            $status=2; $unassigned=2;
        } 
        $services[0]=['accommodation_id'=>$bookingData['accommodation_id'],'services'=>$bookingData['service_id'],'provider_count'=>$bookingData['provider_count'],'service_types'=>$bookingData['service_type'],'meetings'=>[],'specialization'=>'','service_consumer'=>[],'attendees'=>[]];
        $override_amount=$bookingData['override_amount'];
        if(key_exists("industry_id",$bookingData))
            $selectedIndustries=[$bookingData["industry_id"]];
        else
            $selectedIndustries=[];
        $dates[0]=[
            'start_date' =>$bookingData['booking_start_date'],
            'start_hour' => $bookingData['start_hour'],
            'start_min' => $bookingData['start_min'],
            'end_date' => $bookingData['booking_end_date'], // Adjust if necessary, if the end date might be different
            'end_hour' => $bookingData['end_hour'],
            'end_min' => $bookingData['end_hour'],
         
            'duration_day' => '',
            'duration_hour' => '',
            'duration_minute' => '',
            'time_zone'=>$bookingData['timezone'],
            'day_rate'=>false

        ];
      
        $bookingData=["booking_number"=>$bookingData['booking_number'],"company_id" => $bookingData['company_id'], "customer_id" => $bookingData["customer_id"], "industry_id" =>  $bookingData["industry_id"],'user_id'=>Auth::id(),'frequncy_id'=>1,'type'=>$type,'status'=>$unassigned,'booking_status'=>$status];
        //checking if booking exists
      
        $booking=Booking::where('booking_number',$bookingData['booking_number'])->first();
        $payment=new Payment;
        $payment->discounted_amount=0;
        $payment->payment_method_type=2;
        if(is_null($booking)){
            $booking=new Booking($bookingData);
        }
           
        else{
            
            if(!is_null($booking->payment)){
                $payment=$booking->payment;
           
            }

            
            $booking->update($bookingData);
        }
          
          $booking=BookingOperationsService::createBooking($booking, $services, $dates,$selectedIndustries,$selectedDepartments,true);
          //saving payment
          $payment->booking_id=$booking->id;
          $payment->is_override=1;
          $payment->total_amount=$override_amount;
          $payment->override_amount=$override_amount;
          $payment->payment_method_type='Other';
          $payment->payment_by=Auth::user()->id;  
          $payment->save();
       }
       $this->showList("Booking data has been imported successfully");
      
       $this->bookings = [];

    }
    public function showList($message = "")
	{
		// Save data
		$this->emit('showList', $message);
	}
    public function mount()
    {

        $this->companies = Company::get()->where('status', 1);
        $this->industries = Industry::get()->where('status', 1);
        $this->accommodations = Accommodation::get()->where('status', 1);
        $services = ServiceCategory::where('status', 1)->select('id', 'name', 'accommodations_id')->get();
        $this->serviceType = ['in_person' => 1, 'virtual' => 2, 'phone' => 4, 'tele-conference' => 5];
        $this->timezones = SetupValue::where('setup_id', 4)->select('id', 'setup_value_label')->get()->toArray();
        $req = User::query()
            ->where(['users.status' => 1])
            ->whereHas('roles', function ($query) {
                $query->where('role_id', 6);
            })
            ->select('users.id', 'users.name', 'company_name')->get();
        $this->requesters = $req->groupBy('company_name')->toArray();
        $this->services = $services->groupBy('accommodations_id')->toArray();
        $this->statuses = ["Cancelled", "Completed", "Draft", "Unassigned", "Paid"];

    }

    public function updatedFile()
    {

        $this->validate([
            'file' => 'required|file|mimetypes:application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);

        $rows = Excel::toArray([], $this->file)[0];
        $this->bookings = [];
        $this->warningMessage = '';
        //dd($rows);
        // Initialize a counter variable
        $i = 0;

        foreach ($rows as $row) {
            
            if ($i > 0) {
                if ($row[0] != '') {
                    try {
                        $booking = ['company_id','accommodation_id','customer_id','service_id','service_type','provider_count','timezone','booking_start_date','booking_end_date','start_hour','start_min','end_hour','end_min'];

                        $booking['booking_number'] = $row[0];

                        $company = Company::where('name', $row[1])->first();

                        if (!is_null($company))
                            $booking['company_id'] = $company->id;


                        $requester = User::where('name', $row[2])->first();
                        if ($requester)
                            $booking['customer_id'] = $requester->id;


                        $industry = Industry::where('name', $row[3])->first();
                        if (!is_null($industry))
                            $booking['industry_id'] = $industry->id;

                        $accom = Accommodation::where('name', $row[4])->first();
                        if (!is_null($accom))
                            $booking['accommodation_id'] = $accom->id;

                        $service = ServiceCategory::where('name', $row[5])->first();
                        if (!is_null($service))
                            $booking['service_id'] = $service->id;

                        $booking['service_type'] = $this->serviceType[$row[6]];

                        $booking['provider_count'] = $row[7];

                        $booking['timezone'] = SetupHelper::getSetupValueByValue($row[8], 4);

                        //dob formating
                        if (is_numeric($row[9])) {
                            // Convert the timestamp to an Excel serialized date value
                            //   $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($row[3]);
                            $excelDate = $row[9];
                        } else {
                            // Convert the string date to an Excel serialized date value
                            $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::stringToExcel($row[9]);
                        }

                        // Convert the Excel serialized date value to a DateTime object
                        $start_date_Object = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($excelDate);

                        // Format the DateTime object as 'd/m/Y'
                        $booking['booking_start_date'] = $start_date_Object->format('m/d/Y');
                        
                        /* formating
                        if (is_numeric($row[10])) {
                            // Convert the timestamp to an Excel serialized date value
                            //   $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($row[3]);
                            $excelDate = $row[10];
                        } else {
                            // Convert the string date to an Excel serialized date value
                            $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::stringToExcel($row[10]);
                        } 
                       
                        // Convert the Excel serialized date value to a DateTime object
                        $start_time_Object = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject((int)$row[10]);
                           
                        $booking['start_hour'] = $start_time_Object->format('H');
                        $booking['start_min'] = $start_time_Object->format('i');
                        */
                        $startTime=explode(":",$row[10]);
                        if(count($startTime)>1 && !is_null($startTime[0]))
                            $booking['start_hour']=$startTime[0];

                        if(count($startTime)>1 && !is_null($startTime[1]))
                            $booking['start_min']=$startTime[1];
                        
                        //dob formating
                        if (is_numeric($row[11])) {
                            // Convert the timestamp to an Excel serialized date value
                            //   $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($row[3]);
                            $excelDate = $row[11];
                        } else {
                            // Convert the string date to an Excel serialized date value
                            $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::stringToExcel($row[11]);
                        }

                        // Convert the Excel serialized date value to a DateTime object
                        $end_date_Object = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($excelDate);

                        // Format the DateTime object as 'd/m/Y'
                        $booking['booking_end_date'] = $end_date_Object->format('m/d/Y');

                        /* formating
                        if (is_numeric($row[12])) {
                            // Convert the timestamp to an Excel serialized date value
                            //   $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($row[3]);
                            $excelDate = $row[12];
                        } else {
                            // Convert the string date to an Excel serialized date value
                            $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::stringToExcel($row[12]);
                        }

                        // Convert the Excel serialized date value to a DateTime object
                        $end_time_Object = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($excelDate);

                        $booking['end_hour'] = $end_time_Object->format('H');
                        $booking['end_min'] = $end_time_Object->format('H'); */
                        $endTime=explode(":",$row[12]);
                        if(count($endTime)>1 && !is_null($endTime[0]))
                            $booking['end_hour']=$endTime[0];

                        if(count($endTime)>1 && !is_null($endTime[1]))
                            $booking['end_min']=$endTime[1];

                        $booking['status'] = $row[13];
                        $booking['is_override'] = 1;
                        $booking['override_amount'] = $row[14];

                        $this->bookings[] = $booking;
                    } catch (\ErrorException $e) {
                        dd($e);
                        $this->warningMessage = "Please make sure that you are trying to upload valid file to import data.";
                    }
                }
            }

            $i++;
        }
        if (count($this->bookings) == 0 && $this->warningMessage == '') {
            $this->warningMessage = "Please ensure that the file contains records before proceeding with the import. Currently, the file is empty.";
        }

        $this->dispatchBrowserEvent('refreshSelects');
    }

}
