<?php

namespace App\Http\Livewire\App\Common\Import;

use App\Models\Tenant\Accommodation;
use App\Models\Tenant\Company;
use App\Models\Tenant\Industry;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Tenant\SetupValue;
use App\Helpers\SetupHelper;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Bookings extends Component
{
    public $companies, $industries, $accommodations, $services, $bookings;
    public $file;

    public $warningMessage = '', $errorMessage = '';
    protected $listeners = ['updateVal' => 'updateVal'];

    use WithFileUploads;

    public function render()
    {
        return view('livewire.app.common.import.bookings');
    }

    public function mount()
    {

        $this->companies = Company::get()->where('status', 1);
        $this->industries = Industry::get()->where('status', 1);
        $this->accommodations = Accommodation::get()->where('status', 1);
        $this->services = [];
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

                        // $booking['booking_number'] = $row[0];
                        // $booking['provider_count'] = $row[7];

                        // //dob formating
                        // if (is_numeric($row[3])) {
                        //     // Convert the timestamp to an Excel serialized date value
                        //     //   $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel($row[3]);
                        //     $excelDate = $row[3];
                        // } else {
                        //     // Convert the string date to an Excel serialized date value
                        //     $excelDate = \PhpOffice\PhpSpreadsheet\Shared\Date::stringToExcel($row[3]);
                        // }

                        // // Convert the Excel serialized date value to a DateTime object
                        // $dateObject = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($excelDate);

                        // // Format the DateTime object as 'd/m/Y'
                        // $booking['booking_dob'] = $dateObject->format('d/m/Y');

                        // //end of dob formatting
                        // $booking['email'] = $row[4];
                        // $booking['bookingDetails']['language_id'] = SetupHelper::getSetupValueByValue($row[5], 1);
                        // $booking['bookingDetails']['gender_id'] = SetupHelper::getSetupValueByValue($row[6], 2);
                        // $booking['bookingDetails']['ethnicity_id'] = SetupHelper::getSetupValueByValue($row[7], 3);
                        // $booking['bookingDetails']['booking_position'] = $row[8];
                        // $booking['bookingDetails']['phone'] = $row[9];
                        // $booking['bookingDetails']['country'] = $row[10];
                        // $booking['bookingDetails']['state'] = $row[11];
                        // $booking['bookingDetails']['city'] = $row[12];
                        // $booking['bookingDetails']['zip'] = $row[13];
                        // $booking['bookingDetails']['address_line1'] = $row[14];
                        // $booking['bookingDetails']['address_line2'] = $row[15];
                        // $booking['bookingDetails']['booking_introduction'] = $row[16];
                        // $booking['bookingRoles']['10'] = str_replace('No', '', $row[17]);
                        // $booking['bookingRoles']['5'] = str_replace('No', '', $row[18]);
                        // $booking['bookingRoles']['6'] = str_replace('No', '', $row[19]);
                        // $booking['bookingRoles']['7'] = str_replace('No', '', $row[20]);
                        // $booking['bookingRoles']['9'] = str_replace('No', '', $row[21]);
                        // $booking['bookingRoles']['8'] = str_replace('No', '', $row[22]);
                        // $booking['password'] = $row[24];
                        // $booking['status'] = 1;
                        // // dd($booking);

                        // $companyId = Company::where('name', $row[23])->first();

                        // if (!is_null($companyId)) {
                        //     $booking['company_name'] = $companyId->id;
                        // }


                        // $this->bookings[] = $booking;
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
