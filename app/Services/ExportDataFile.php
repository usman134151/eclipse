<?php

namespace App\Services;

use App\Models\SetupValue;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\Booking;
use App\Models\Tenant\Industry;
use App\Models\Tenant\Company;
use App\Models\Tenant\NotificationTemplateRoles;
use App\Models\Tenant\NotificationTemplates;
use App\Models\Tenant\ServiceCategory;
use Carbon\Carbon;

use App\Models\Tenant\TriggerType;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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

        $excelRows = [
            'F' => $languageValues,
            'G' => $genderValues,
            'H' => $ethnicityValues
        ];
        foreach ($excelRows as $key => $valueArr) {
            for ($i = 2; $i < 101; $i++) {
                $validation = $sheet->getCell($key . $i)->getDataValidation();
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
        $companies = Company::where('status', '1')->orderBy('name')->pluck('name')->toArray();

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



        $excelRows = [
            'F' => $languageValues,
            'G' => $genderValues,
            'H' => $ethnicityValues
        ];
        foreach ($excelRows as $key => $valueArr) {
            for ($i = 2; $i < 101; $i++) {
                $validation = $sheet->getCell($key . $i)->getDataValidation();
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
        for ($i = 2; $i < 101; $i++) {
            //yes/no dropdowns
            $colNumber = ['R' . $i, 'S' . $i, 'T' . $i, 'U' . $i, 'V' . $i, 'W' . $i];
            $values = ['Yes', 'No'];
            for ($cols = 0; $cols < 6; $cols++) {
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





        for ($i = 2; $i < 101; $i++) {
            $validation = $sheet->getCell('B' . $i)->getDataValidation();
            $validation->setType('list');

            $validation->setShowDropDown(true);
            // dd(implode(',', $industryValues));
            //   $validation->setFormula1('"new industry its working worked?,Medical,Textile,Cruise,Administration Industry,Administrative,General,Education K12,FFC,Higher Education,Cricket,Empiric Marketing,MilTeching,Medsnake Media,Technology,Transport,Construction,Manufacturing,Agriculture,Aerospace,Automotive,Basic Metal,Chemical,Computer,Creative,Cultural,Defense,Electric Power,Electronics,Energy,Engineering,Entertainment,Farming,Fashion,Film,Financial Services,Fishery,Food,Forestry,Green,Health Services,Hospitality,Hotels,Robotics,Information,IT,Infrastructure,Insurance,Leisure,Low Technology,Meat,Media,Merchandising,Mining,Music,News Media,Oil and Gas,Pharmaceuticals ,Professional,Publishing,Pulp and Paper,Railway,Real estate,Retail,Scientific,Services,Software,Space,Sport,Steel ,Tobacco,Utility,Video Game,Water,Wholesale,Telecommunications,Wood,Waste Management,Art,Remediation Services,Recreation,Commerce,Shipping,Leather,Natural Resources,Securities,Stock Exchange,Labour,Marketing,Production,Law,Factory,Banking,Investment Banking,Biotechnology,Printing,Research,Trade,Automobile Assembler,Cable Goods,Personal Care Products,Glass and Ceramics,Tanneries,Exploration,Tourism,Mobile Phone"');
            $validation->setFormula1('"' . implode(',', $industryValues) . '"');
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

    public function generateExcelTemplateNotifications($notificationType)
    {
        $notifications = NotificationTemplates::where('notification_type', $notificationType)->get();
        if ($notifications && count($notifications)) {
            // dd("records found",$notifications);
            $headers = [
                'Trigger',
                'Admin',
                'Subject',
                'Provider',
                'Subject',
                'Customer',
                'Subject',
            ];
            $rows = [$headers];

            $triggerTypes = TriggerType::all();
            foreach ($triggerTypes as $triggerType) {

                $triggerTypeNotifications = $notifications->where('trigger_type_id', $triggerType->id);
                if ($triggerTypeNotifications && count($triggerTypeNotifications)) {
                    $row = [
                        $triggerType->name,
                        $triggerType->name,
                        $triggerType->name,
                        $triggerType->name,
                        $triggerType->name,
                        $triggerType->name,
                        $triggerType->name,
                    ];
                    $rows[] = $row;
                    foreach ($triggerTypeNotifications as $triggerTypeNotification) {
                        $row = ['--', '--', '--', '--', '--', '--', '--'];
                        $row[0] = $triggerTypeNotification->trigger;
                        $NotificationTemplateRoles = NotificationTemplateRoles::where('notification_id', $triggerTypeNotification->id)->get();
                        foreach ($NotificationTemplateRoles as $NotificationTemplateRole) {
                            if ($NotificationTemplateRole->role_id == 1) {
                                $row[1] = $NotificationTemplateRole->notification_text;
                                $row[2] = $NotificationTemplateRole->notification_subject;
                            } else if ($NotificationTemplateRole->role_id == 2) {
                                $row[3] = $NotificationTemplateRole->notification_text;
                                $row[4] = $NotificationTemplateRole->notification_subject;
                            } else if ($NotificationTemplateRole->role_id == 4) {
                                $row[5] = $NotificationTemplateRole->notification_text;
                                $row[6] = $NotificationTemplateRole->notification_subject;
                            }
                        }
                        $rows[] = $row;
                    }
                }
            }
            // dd($rows);
            $fileName = 'email-notifications-import.xlsx';
            $filePath = Storage::disk('local')->path($fileName);

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->fromArray($rows);

            $writer = new Xlsx($spreadsheet);
            $writer->save($filePath);

            $fileResponse = response()->file($filePath, [
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
            ])->deleteFileAfterSend(true);

            return $fileResponse;
        } else if ($notificationType == 1) {

            $fileName = 'sample-email-notifications-import.xlsx';
            $filePath = public_path('sample-notification-files/' . $fileName);

            $fileResponse = response()->file($filePath, [
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
            ])->deleteFileAfterSend(false);

            return $fileResponse;
        }
    }

    public function generateExcelTemplateBookings()
    {
        $headers = [
            'Booking Number',
            'Company',
            'Requester',
            'Industry',
            'Accommodation',
            'Service',
            'Service Type ',
            'Number of Providers',
            'Time Zone',
            'Booking Start Date',
            'Booking Start Hour',
            'Booking Start Min',
            'Booking End Date',
            'Booking End Hour',
            'Booking End Min',
        ];

        // $languageValues = SetupValue::where('setup_id', 1)->pluck('setup_value_label')->toArray();
        $timezoneValues = SetupValue::where('setup_id', 4)->pluck('setup_value_label')->all();
        // $genderValues = SetupValue::where('setup_id', 2)->pluck('setup_value_label')->toArray();
        // $ethnicityValues = SetupValue::where('setup_id', 3)->pluck('setup_value_label')->toArray();
        // $companies = Company::where('status', '1')->orderBy('name')->pluck('name')->toArray();

        $rows = [
            [
                '','','','','','',
                '','','','','','','',
                '', '', '', ''
            ]
        ];

        $fileName = 'booking-import-template.xlsx';
        $filePath = Storage::disk('local')->path($fileName);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        //$sheet->fromArray([$headers]);
        $sheet->fromArray([$headers]);

        // // set the DOB column format to date
        // $sheet->getStyle('D:D')->getNumberFormat()->setFormatCode('dd/mmm/yyyy');
        // $sheet->getStyle('K:K')
        // ->getNumberFormat()
        // ->setFormatCode(
        //     \PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_DATE_DATETIME
        // );

        // // // add data validation and date picker to the DOB column
        // $validation = $sheet->getCell('K2')->getDataValidation();
        // $validation->setType(\PhpOffice\PhpSpreadsheet\Cell\DataValidation::TYPE_CUSTOM);
        // $validation->setErrorStyle(\PhpOffice\PhpSpreadsheet\Cell\DataValidation::STYLE_STOP);
        // $validation->setAllowBlank(true);
        // $validation->setShowInputMessage(true);
        // $validation->setShowErrorMessage(true);
        // $validation->setShowDropDown(true);
        // $validation->setErrorTitle('Input error');
        // $validation->setError('Value is not a valid date.For example 10/May/2000 06:30 AM');
        // $validation->setPromptTitle('Pick a date');
        // $validation->setPrompt('Please pick a date from the calendar.');
        // $validation->setFormula1('DATE(1900,1,1)');
        // $validation->setFormula2('DATE(9999,12,31)');
        // $dateTime = time();

        // $excelDateValue = \PhpOffice\PhpSpreadsheet\Shared\Date::PHPToExcel(
        //     $dateTime
        // );
        // $sheet->setCellValue('K2', $excelDateValue);

        // foreach ($rows as $row) {
        //     $sheet->fromArray([$row]);
        // }


        // $excelRows = [
        //     'I' => $timezoneValues,
        // ];
        // foreach ($excelRows as $key => $valueArr) {
        //     for ($i = 2; $i < 101; $i++) {
        //         $validation = $sheet->getCell($key . $i)->getDataValidation();
        //         $validation->setType('list');
        //         $validation->setErrorStyle('stop');
        //         $validation->setAllowBlank(true);
        //         $validation->setShowInputMessage(true);
        //         $validation->setShowErrorMessage(true);
        //         $validation->setShowDropDown(true);
        //         $validation->setErrorTitle('Input error');
        //         $validation->setError('Value is not in list.');
        //         $validation->setPromptTitle('Pick from list');
        //         $validation->setPrompt('Please pick a value from the drop-down list.');
        //         $validation->setFormula1('"' . implode(',', $valueArr) . '"');
        //         foreach ($rows as $row) {
        //             $sheet->fromArray([$row]);
        //         }
        //     }
        // }
        // for ($i = 2; $i < 101; $i++) {
        //     //yes/no dropdowns
        //     $colNumber = ['R' . $i, 'S' . $i, 'T' . $i, 'U' . $i, 'V' . $i, 'W' . $i];
        //     $values = ['Yes', 'No'];
        //     for ($cols = 0; $cols < 6; $cols++) {
        //         $validation = $sheet->getCell($colNumber[$cols])->getDataValidation();
        //         $validation->setType('list');
        //         $validation->setErrorStyle('stop');
        //         $validation->setAllowBlank(true);
        //         $validation->setShowInputMessage(true);
        //         $validation->setShowErrorMessage(true);
        //         $validation->setShowDropDown(true);
        //         $validation->setErrorTitle('Input error');
        //         $validation->setError('Value is not in list.');
        //         $validation->setPromptTitle('Pick from list');
        //         $validation->setPrompt('Please pick a value from the drop-down list.');
        //         $validation->setFormula1('"' . implode(',', $values) . '"');
        //         foreach ($rows as $row) {
        //             $sheet->fromArray([$row]);
        //         }
        //     }
        // }
         
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

    public function exportExcelBookings($booking_ids = [])
    {
        $bookings = [];
        $bookings = Booking::whereIn('id', $booking_ids)->get();

        $tz = SetupValue::where('setup_id', 4)->select('id', 'setup_value_label')->get()->toArray();
        $timezones = [];
        foreach ($tz as $t) {
            $timezones[$t['id']] = $t['setup_value_label'];
        }
        $serviceType = [1 => 'in_person', 2 => 'virtual', 4 => 'phone', 5 => 'tele-conference'];
        // dd("records found",$notifications);
        $headers = [
            'Booking Number',
            'Company',
            'Requester',
            'Industry',
            'Accommodation',
            'Service',
            'Service Type ',
            'Number of Providers',
            'Time Zone',
            'Booking Start Date',
            'Booking Start Hour',
            'Booking Start Min',
            'Booking End Date',
            'Booking End Hour',
            'Booking End Min',

        ];

        $rows = [$headers];
        if ($bookings && count($bookings)) {

            foreach ($bookings as $booking) {

                $row = ['--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--', '--'];
                $row[0] = $booking->booking_number;
                $row[1] = $booking->company ? $booking->company->name : '';
                $row[2] = $booking->customer ? $booking->customer->name : '';
                $row[3] = $booking->industry ? $booking->industry->name : '';

                $service = $booking->services->first() ? $booking->services->first() : null;
                $row[4] = $service ? ($service->accommodation ? $service->accommodation->name : '') : '';
                $row[5] = $service ? $service->name : '';
                $row[6] = $service ? ($service->pivot->service_types ? $serviceType[$service->pivot->service_types] : '') : '';
                $row[7] = $service ? ($service->pivot->provider_count ? $service->pivot->provider_count : '') : '';
                $row[8] = $service ? ($service->pivot->time_zone ? (isset($timezones[$service->pivot->time_zone]) ? $timezones[$service->pivot->time_zone] : $service->pivot->time_zone) : '') : '';
                $start_time = Carbon::parse($service ? ($service->pivot->start_time ? $service->pivot->start_time : '') : $booking->booking_start_at);
                $row[9] = $start_time->format('m/d/Y');
                $row[10] = $start_time->format('H');
                $row[11] = $start_time->format('i');
                $end_time =
                Carbon::parse($service ? ($service->pivot->end_time ? $service->pivot->end_time : '') : $booking->booking_end_at);
                $row[12] = $end_time->format('m/d/Y');
                $row[13] = $end_time->format('H');
                $row[14] = $end_time->format('i');
                $rows[] = $row;
            }
            $fileName = 'bookings_export.xlsx';
            $filePath = Storage::disk('local')->path($fileName);

            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->fromArray($rows);

            $writer = new Xlsx($spreadsheet);
            $writer->save($filePath);

            $fileResponse = response()->file($filePath, [
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
            ])->deleteFileAfterSend(true);

            return $fileResponse;
        } else
            return;
    }
}
