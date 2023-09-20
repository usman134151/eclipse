<?php

namespace App\Http\Livewire\App\Common\Import;

use Livewire\Component;

use App\Models\Tenant\Accommodation;
use App\Models\Tenant\Company;
use App\Models\Tenant\Industry;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Helpers\SetupHelper;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\User;

class Bookings extends Component
{
    use WithFileUploads;

    public $companies, $industries, $accommodations, $services, $bookings, $serviceType = [], $timezones = [], $requesters = [];
    public $file = null;

    public $warningMessage = '', $errorMessage = '';
    protected $listeners = ['updateVal' => 'updateVal'];


    public function render()
    {
        return view('livewire.app.common.import.bookings');
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


        // 'Booking Number',
        // 'Company',
        // 'Requester',
        // 'Industry',
        // 'Accommodation',
        // 'Service',
        // 'Service Type ',
        // 'Number of Providers',
        // 'Time Zone',
        // 'Booking Start Date',
        // 'Booking End Date',
        foreach ($rows as $row) {
            if ($i > 0) {
                if ($row[0] != '') {
                    try {
                        $booking = [];

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

                        // // Format the DateTime object as 'd/m/Y'
                        $booking['booking_start_date'] = $start_date_Object->format('m/d/Y');
                        $booking['start_hour'] = $row[10];
                        $booking['start_min'] = $row[11];



                        //dob formating
                        if (is_numeric($row[12])) {
                            // Convert the timestamp to an Excel serialized date value
                            //   $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($row[3]);
                            $excelDate = $row[12];
                        } else {
                            // Convert the string date to an Excel serialized date value
                            $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::stringToExcel($row[12]);
                        }

                        // Convert the Excel serialized date value to a DateTime object
                        $end_date_Object = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($excelDate);

                        // // Format the DateTime object as 'd/m/Y'
                        $booking['booking_end_date'] = $end_date_Object->format('m/d/Y');
                        $booking['end_hour'] = $row[13];
                        $booking['end_min'] = $row[14];

                        $this->bookings[] = $booking;
                    } catch (\ErrorException $e) {
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
