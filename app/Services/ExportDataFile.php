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
            'Notes',
            'Password'
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

$excelRows=[
    'F'=>$languageValues,
    'G'=> $genderValues,
    'H'=> $ethnicityValues
];
foreach($excelRows as $key=>$valueArr){
    for($i=2;$i<101;$i++){
        $validation = $sheet->getCell($key.$i)->getDataValidation();
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
        $validation->setFormula1('"' . implode(',', $valueArr) . '"');
                foreach ($rows as $row) {
                    $sheet->fromArray([$row]);
                    
                }
    }
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
            'Company',
            'Password'
        ];

       // $languageValues = SetupValue::where('setup_id', 1)->pluck('setup_value_label')->toArray();
        $languageValues = SetupValue::where('setup_id', 1)->pluck('setup_value_label')->all();
        $genderValues = SetupValue::where('setup_id', 2)->pluck('setup_value_label')->toArray();
        $ethnicityValues = SetupValue::where('setup_id', 3)->pluck('setup_value_label')->toArray();
        $companies=Company::where('status','1')->orderBy('name')->pluck('name')->toArray();
     
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



    $excelRows=[
        'F'=>$languageValues,
        'G'=> $genderValues,
        'H'=> $ethnicityValues
    ];
    foreach($excelRows as $key=>$valueArr){
        for($i=2;$i<101;$i++){
            $validation = $sheet->getCell($key.$i)->getDataValidation();
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
            $validation->setFormula1('"' . implode(',', $valueArr) . '"');
                    foreach ($rows as $row) {
                        $sheet->fromArray([$row]);
                        
                    }
        }
    }               
    for($i=2;$i<101;$i++){
            //yes/no dropdowns
            $colNumber=['R'.$i,'S'.$i,'T'.$i,'U'.$i,'V'.$i,'W'.$i];
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

     
        $industryValues = Industry::where('status', 1)->orderBy('name')->pluck('name')->toArray();
       // dd($industryValues);

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

        $fileName = 'companies-import.xlsx';
        $filePath = Storage::disk('local')->path($fileName);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        //$sheet->fromArray([$headers]);
        $sheet->fromArray([$headers]);
    
    



        for($i=2;$i<101;$i++){
            $validation = $sheet->getCell('B'.$i)->getDataValidation();
            $validation->setType('list');
           
            $validation->setShowDropDown(true);
           // dd(implode(',', $industryValues));
         //   $validation->setFormula1('"new industry its working worked?,Medical,Textile,Cruise,Administration Industry,Administrative,General,Education K12,FFC,Higher Education,Cricket,Empiric Marketing,MilTeching,Medsnake Media,Technology,Transport,Construction,Manufacturing,Agriculture,Aerospace,Automotive,Basic Metal,Chemical,Computer,Creative,Cultural,Defense,Electric Power,Electronics,Energy,Engineering,Entertainment,Farming,Fashion,Film,Financial Services,Fishery,Food,Forestry,Green,Health Services,Hospitality,Hotels,Robotics,Information,IT,Infrastructure,Insurance,Leisure,Low Technology,Meat,Media,Merchandising,Mining,Music,News Media,Oil and Gas,Pharmaceuticals ,Professional,Publishing,Pulp and Paper,Railway,Real estate,Retail,Scientific,Services,Software,Space,Sport,Steel ,Tobacco,Utility,Video Game,Water,Wholesale,Telecommunications,Wood,Waste Management,Art,Remediation Services,Recreation,Commerce,Shipping,Leather,Natural Resources,Securities,Stock Exchange,Labour,Marketing,Production,Law,Factory,Banking,Investment Banking,Biotechnology,Printing,Research,Trade,Automobile Assembler,Cable Goods,Personal Care Products,Glass and Ceramics,Tanneries,Exploration,Tourism,Mobile Phone"');
           $validation->setFormula1('"'.implode(',', $industryValues).'"');
                    foreach ($rows as $row) {
                        $sheet->fromArray([$row]);
                        
                    }

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




     
        

        
                        
        
        $writer = new Xlsx($spreadsheet);
        $writer->save($filePath);
        
    $fileResponse = response()->file($filePath, [
        'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
    ])->deleteFileAfterSend(true);

    return $fileResponse;


    }
}

