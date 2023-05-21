<?php

namespace App\Services;

use App\Models\SetupValue;
use App\Models\Tenant\Industry;
use App\Models\Tenant\Company;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Excel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class ExportDataFile
{
    public function generateExcelTemplate()
    {
        $headers = [
            'First Name',
            'Last Name',
            'Pronouns',
            'DOB (dd/Month/yyyy)',
            'Email Address',
            'Language',
            'Gender',
            'Ethnicity',
            'Provider ID',
            'Phone number',
            'Country',
            'State/Province',
            'City',
            'Zip Code',
            'Address Line 1',
            'Address Line 2',
            'Education',
            'Experience',
            'Notes'
        ];

       // $languageValues = SetupValue::where('setup_id', 1)->pluck('setup_value_label')->toArray();
        $languageValues = SetupValue::where('setup_id', 1)->pluck('setup_value_label')->all();
        $genderValues = SetupValue::where('setup_id', 2)->pluck('setup_value_label')->toArray();
        $ethnicityValues = SetupValue::where('setup_id', 3)->pluck('setup_value_label')->toArray();

        $rows = [
            [
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',

            ]
        ];

        $fileName = 'provider-import.xlsx';
        $filePath = Storage::disk('local')->path($fileName);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        //$sheet->fromArray([$headers]);
        $sheet->fromArray([$headers]);
    // set the DOB column format to date
    $sheet->getStyle('D:D')->getNumberFormat()->setFormatCode('dd/mmm/yyyy');

    // add data validation and date picker to the DOB column
    $validation = $sheet->getCell('D2')->getDataValidation();
    $validation->setType(\PhpOffice\PhpSpreadsheet\Cell\DataValidation::TYPE_CUSTOM);
    $validation->setErrorStyle(\PhpOffice\PhpSpreadsheet\Cell\DataValidation::STYLE_STOP);
    $validation->setAllowBlank(true);
    $validation->setShowInputMessage(true);
    $validation->setShowErrorMessage(true);
    $validation->setShowDropDown(true);
    $validation->setErrorTitle('Input error');
    $validation->setError('Value is not a valid date.For example 10/May/2000');
    $validation->setPromptTitle('Pick a date');
    $validation->setPrompt('Please pick a date from the calendar.');
    $validation->setFormula1('DATE(1900,1,1)');
    $validation->setFormula2('DATE(9999,12,31)');
    
    

    foreach ($rows as $row) {
        $sheet->fromArray([$row]);
    }




$validation = $sheet->getCell('F2')->getDataValidation();
$validation->setType('list');
$validation->setErrorStyle('stop');
$validation->setAllowBlank(true);
$validation->setShowInputMessage(true);
$validation->setShowErrorMessage(true);
$validation->setShowDropDown(true);
$validation->setErrorTitle('Input error');
$validation->setError('Value is not in list.');
$validation->setPromptTitle('Pick from list');
$validation->setPrompt('Please pick a value from the drop-down list.');
$validation->setFormula1('"' . implode(',', $languageValues) . '"');
        foreach ($rows as $row) {
            $sheet->fromArray([$row]);
            
        }


        $validation = $sheet->getCell('G2')->getDataValidation();
        $validation->setType('list');
        $validation->setErrorStyle('stop');
        $validation->setAllowBlank(true);
        $validation->setShowInputMessage(true);
        $validation->setShowErrorMessage(true);
        $validation->setShowDropDown(true);
        $validation->setErrorTitle('Input error');
        $validation->setError('Value is not in list.');
        $validation->setPromptTitle('Pick from list');
        $validation->setPrompt('Please pick a value from the drop-down list.');
        $validation->setFormula1('"' . implode(',', $genderValues) . '"');
                foreach ($rows as $row) {
                    $sheet->fromArray([$row]);
                }

                $validation = $sheet->getCell('H2')->getDataValidation();
                $validation->setType('list');
                $validation->setErrorStyle('stop');
                $validation->setAllowBlank(true);
                $validation->setShowInputMessage(true);
                $validation->setShowErrorMessage(true);
                $validation->setShowDropDown(true);
                $validation->setErrorTitle('Input error');
                $validation->setError('Value is not in list.');
                $validation->setPromptTitle('Pick from list');
                $validation->setPrompt('Please pick a value from the drop-down list.');
                $validation->setFormula1('"' . implode(',', $ethnicityValues) . '"');
                        foreach ($rows as $row) {
                            $sheet->fromArray([$row]);
                        }
                
                        
        
                $writer = new Xlsx($spreadsheet);
        $writer->save($filePath);
        
    $fileResponse = response()->file($filePath, [
        'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
    ])->deleteFileAfterSend(true);

    return $fileResponse;

      //  $fileResponse = response()->download($filePath, $fileName)->deleteFileAfterSend(true);
        //$fileResponse->headers->set('Content-Disposition', 'attachment; filename="' . $fileName . '"');
        //return $fileResponse;
        
       // $fileResponse = response()->download($filePath, $fileName)->deleteFileAfterSend(true);

        //return new Response($fileResponse->getContent(), $fileResponse->getStatusCode(), $fileResponse->headers->all());
    }

    public function generateExcelTemplateCustomer()
    {
        $headers = [
            'First Name',
            'Last Name',
            'Pronouns',
            'DOB (dd/Month/yyyy)',
            'Email Address',
            'Language',
            'Gender',
            'Ethnicity',
            'Position',
            'Phone number',
            'Country',
            'State/Province',
            'City',
            'Zip Code',
            'Address Line 1',
            'Address Line 2',
            'Service Consumer Introduction',
            'Admin',
            'Supervisor',
            'Requester',
            'Service Consumer',
            'Billing Manager',
            'Participant',
            'Company'
        ];

       // $languageValues = SetupValue::where('setup_id', 1)->pluck('setup_value_label')->toArray();
        $languageValues = SetupValue::where('setup_id', 1)->pluck('setup_value_label')->all();
        $genderValues = SetupValue::where('setup_id', 2)->pluck('setup_value_label')->toArray();
        $ethnicityValues = SetupValue::where('setup_id', 3)->pluck('setup_value_label')->toArray();
        $companies=Company::where('status','1')->pluck('name')->toArray();
     
        $rows = [
            [
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                ''

            ]
        ];

        $fileName = 'customer-import.xlsx';
        $filePath = Storage::disk('local')->path($fileName);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        //$sheet->fromArray([$headers]);
        $sheet->fromArray([$headers]);
  
    // set the DOB column format to date
    $sheet->getStyle('D:D')->getNumberFormat()->setFormatCode('dd/mmm/yyyy');

    // add data validation and date picker to the DOB column
    $validation = $sheet->getCell('D2')->getDataValidation();
    $validation->setType(\PhpOffice\PhpSpreadsheet\Cell\DataValidation::TYPE_CUSTOM);
    $validation->setErrorStyle(\PhpOffice\PhpSpreadsheet\Cell\DataValidation::STYLE_STOP);
    $validation->setAllowBlank(true);
    $validation->setShowInputMessage(true);
    $validation->setShowErrorMessage(true);
    $validation->setShowDropDown(true);
    $validation->setErrorTitle('Input error');
    $validation->setError('Value is not a valid date.For example 10/May/2000');
    $validation->setPromptTitle('Pick a date');
    $validation->setPrompt('Please pick a date from the calendar.');
    $validation->setFormula1('DATE(1900,1,1)');
    $validation->setFormula2('DATE(9999,12,31)');

    foreach ($rows as $row) {
        $sheet->fromArray([$row]);
    }




$validation = $sheet->getCell('F2')->getDataValidation();
$validation->setType('list');
$validation->setErrorStyle('stop');
$validation->setAllowBlank(true);
$validation->setShowInputMessage(true);
$validation->setShowErrorMessage(true);
$validation->setShowDropDown(true);
$validation->setErrorTitle('Input error');
$validation->setError('Value is not in list.');
$validation->setPromptTitle('Pick from list');
$validation->setPrompt('Please pick a value from the drop-down list.');
$validation->setFormula1('"' . implode(',', $languageValues) . '"');
        foreach ($rows as $row) {
            $sheet->fromArray([$row]);
            
        }


        $validation = $sheet->getCell('G2')->getDataValidation();
        $validation->setType('list');
        $validation->setErrorStyle('stop');
        $validation->setAllowBlank(true);
        $validation->setShowInputMessage(true);
        $validation->setShowErrorMessage(true);
        $validation->setShowDropDown(true);
        $validation->setErrorTitle('Input error');
        $validation->setError('Value is not in list.');
        $validation->setPromptTitle('Pick from list');
        $validation->setPrompt('Please pick a value from the drop-down list.');
        $validation->setFormula1('"' . implode(',', $genderValues) . '"');
                foreach ($rows as $row) {
                    $sheet->fromArray([$row]);
                }

                $validation = $sheet->getCell('H2')->getDataValidation();
                $validation->setType('list');
                $validation->setErrorStyle('stop');
                $validation->setAllowBlank(true);
                $validation->setShowInputMessage(true);
                $validation->setShowErrorMessage(true);
                $validation->setShowDropDown(true);
                $validation->setErrorTitle('Input error');
                $validation->setError('Value is not in list.');
                $validation->setPromptTitle('Pick from list');
                $validation->setPrompt('Please pick a value from the drop-down list.');
                $validation->setFormula1('"' . implode(',', $ethnicityValues) . '"');
                        foreach ($rows as $row) {
                            $sheet->fromArray([$row]);
                        }
                
            //yes/no dropdowns
            $colNumber=['R2','S2','T2','U2','V2','W2'];
            $values=['Yes','No'];
            for($cols=0;$cols<6;$cols++){
                $validation = $sheet->getCell($colNumber[$cols])->getDataValidation();
                $validation->setType('list');
                $validation->setErrorStyle('stop');
                $validation->setAllowBlank(true);
                $validation->setShowInputMessage(true);
                $validation->setShowErrorMessage(true);
                $validation->setShowDropDown(true);
                $validation->setErrorTitle('Input error');
                $validation->setError('Value is not in list.');
                $validation->setPromptTitle('Pick from list');
                $validation->setPrompt('Please pick a value from the drop-down list.');
                $validation->setFormula1('"' . implode(',', $values) . '"');
                        foreach ($rows as $row) {
                            $sheet->fromArray([$row]);
                            
                        }

            }
                       

            $validation = $sheet->getCell('X2')->getDataValidation();
            $validation->setType('list');
            $validation->setErrorStyle('stop');
            $validation->setAllowBlank(true);
            $validation->setShowInputMessage(true);
            $validation->setShowErrorMessage(true);
            $validation->setShowDropDown(true);
            $validation->setErrorTitle('Input error');
            $validation->setError('Value is not in list.');
            $validation->setPromptTitle('Pick from list');
            $validation->setPrompt('Please pick a value from the drop-down list.');
            $validation->setFormula1('"' . implode(',', $companies) . '"');
                    foreach ($rows as $row) {
                        $sheet->fromArray([$row]);
                    }    
            $writer = new Xlsx($spreadsheet);
            $writer->save($filePath);
        
            $fileResponse = response()->file($filePath, [
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
            ])->deleteFileAfterSend(true);

            return $fileResponse;

      //  $fileResponse = response()->download($filePath, $fileName)->deleteFileAfterSend(true);
        //$fileResponse->headers->set('Content-Disposition', 'attachment; filename="' . $fileName . '"');
        //return $fileResponse;
        
       // $fileResponse = response()->download($filePath, $fileName)->deleteFileAfterSend(true);

        //return new Response($fileResponse->getContent(), $fileResponse->getStatusCode(), $fileResponse->headers->all());
    }

    public function generateCompanyExcelTemplate()
    {
        $headers = [
            'Company Name',
            'Industry',

        ];

     
        $industryValues = Industry::where('status', 1)->pluck('name')->toArray();

        $rows = [
            [
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',

            ]
        ];

        $fileName = 'company-import.xlsx';
        $filePath = Storage::disk('local')->path($fileName);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        //$sheet->fromArray([$headers]);
        $sheet->fromArray([$headers]);
    
    

        foreach ($rows as $row) {
            $sheet->fromArray([$row]);
        }




        $validation = $sheet->getCell('B2')->getDataValidation();
        $validation->setType('list');
        $validation->setErrorStyle('stop');
        $validation->setAllowBlank(true);
        $validation->setShowInputMessage(true);
        $validation->setShowErrorMessage(true);
        $validation->setShowDropDown(true);
        $validation->setErrorTitle('Input error');
        $validation->setError('Value is not in list.');
        $validation->setPromptTitle('Pick from list');
        $validation->setPrompt('Please pick a value from the drop-down list.');
        $validation->setFormula1('"' . implode(',', $industryValues) . '"');
                foreach ($rows as $row) {
                    $sheet->fromArray([$row]);
                    
                }


        
                        
        
                $writer = new Xlsx($spreadsheet);
        $writer->save($filePath);
        
    $fileResponse = response()->file($filePath, [
        'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
    ])->deleteFileAfterSend(true);

    return $fileResponse;


    }

    public function generateIndustryExcelTemplate()
    {
        $headers = [
        
            'Industry',

        ];

     
      

        $rows = [
            [
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',
                '',

            ]
        ];

        $fileName = 'industry-import.xlsx';
        $filePath = Storage::disk('local')->path($fileName);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        //$sheet->fromArray([$headers]);
        $sheet->fromArray([$headers]);
    
    

        foreach ($rows as $row) {
            $sheet->fromArray([$row]);
        }




     
                foreach ($rows as $row) {
                    $sheet->fromArray([$row]);
                    
                }


        
                        
        
        $writer = new Xlsx($spreadsheet);
        $writer->save($filePath);
        
    $fileResponse = response()->file($filePath, [
        'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
    ])->deleteFileAfterSend(true);

    return $fileResponse;


    }
}

