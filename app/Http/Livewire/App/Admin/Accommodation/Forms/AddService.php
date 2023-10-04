<?php

namespace App\Http\Livewire\App\Admin\Accommodation\Forms;

use Livewire\Component;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\ServiceSpecialization;
use App\Models\Tenant\Specialization;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\CustomizeForms;
use App\Helpers\SetupHelper;
use App\Services\App\ServiceCatagoryService;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\Rule;
use Auth;

class AddService extends Component
{
    public $service;
    public $label = "Add", $customForms = [], $companyUsers = [];
    public $log_type = 'create';
    public $component = 'basic-service-setup';
    public $step = 1;
    public $providerReturn = [
        '1' => [['hour' => '0', 'minute' => '0', 'exclude_holidays' => false, 'by_request' => false, 'exclude_after_hours' => false]],
        '2' => [['hour' => '0', 'minute' => '0', 'exclude_holidays' => false, 'by_request' => false, 'exclude_after_hours' => false]],
        '4' => [['hour' => '0', 'minute' => '0', 'exclude_holidays' => false, 'by_request' => false, 'exclude_after_hours' => false]],
        '5' => [['hour' => '0', 'minute' => '0', 'exclude_holidays' => false, 'by_request' => false, 'exclude_after_hours' => false]]
    ];
    public $notificationSettings = [
        '1' => ['broadcast' => false, 'auto_assign' => false, 'broadcast_via_email' => false, 'broadcast_via_sms' => false, 'broadcast_via_push' => false, 'provider_priority' => false, 'service_address' => false, 'radius' => 0, "unit" => "miles", "count" => 0, "interval" => 0, "interval_unit" => "min", 'auto_assign_type' => 0],
        '2' => ['broadcast' => false, 'auto_assign' => false, 'broadcast_via_email' => false, 'broadcast_via_sms' => false, 'broadcast_via_push' => false, 'provider_priority' => false, 'auto_assign_type' => 0],
        '4' => ['broadcast' => false, 'auto_assign' => false, 'broadcast_via_email' => false, 'broadcast_via_sms' => false, 'broadcast_via_push' => false, 'provider_priority' => false, 'auto_assign_type' => 0],
        '5' => ['broadcast' => false, 'auto_assign' => false, 'broadcast_via_email' => false, 'broadcast_via_sms' => false, 'broadcast_via_push' => false, 'provider_priority' => false, 'auto_assign_type' => 0],
    ];
    protected $listeners = ['editRecord' => 'edit', 'updateVal', 'updateFields'];


    public $setupValues = [
        'accomodations' => ['parameters' => ['Accommodation', 'id', 'name', '', '', 'name', false, 'service.accommodations_id', '', 'accommodations_id', 1]],
        'customerForms' => ['parameters' => ['CustomizeForms', 'id', 'request_form_name', 'form_name_id', '37', 'request_form_name', false, 'service.request_form_id', '', 'request_form_id', 1]]
    ];
    public $serviceTypes = [
        '1' => ['class' => 'inperson-rate', 'postfix' => '', 'title' => 'In-Person'],
        '2' => ['class' => 'virtual-rate', 'postfix' => '_v', 'title' => 'Virtual'],
        '4' => ['class' => 'phone-rate', 'postfix' => '_p', 'title' => 'Phone'],
        '5' => ['class' => 'teleconference-rate', 'postfix' => '_t', 'title' => 'Teleconference'],
    ];
    public $billingTypes = [
        '1' => ['class' => 'hour-rate', 'postfix' => 'hour_price'],
        '2' => ['class' => 'day-rate', 'postfix' => 'day_rate_price'],
        '4' => ['class' => 'fixed-rate', 'postfix' => 'fixed_rate'],

    ];
    public $checkIn = ["enable_button" => false, "require_provider_invoice" => false, "enable_digital_signature" => false, "customize_form" => false, "customize_form_id" => 0, "notify_customers" => false, "customers" => false];
    public $checkOut = ["enable_button_provider" => false, "enable_button_customers" => false, "customers" => false,  "provider_payment" => false, "customer_invoice" => false, "enable_digital_signature" => false, "customize_form" => false, "customize_form_id" => 0, "time_extension" => true, 'statuses' => false, 'status_types' => ['completed' => false, 'noshow' => false, 'cancelled' => false, 'noshow_billing' => 0, 'noshow_payment' => 0, 'cancelled_billing' => 0, 'cancelled_payment' => 0]];
    public $runningLate = ["enable_button" => false, "notify_customer" => false, "customers" => false, "notify_team_provider" => false, "customize_form" => false, "customize_form_id" => 0];
    public $providerSettings = ['company_name' => false, 'full_service_address' => false, 'requester' => false, 'consumer' => false, 'participants' => false, 'step2' => false];
    public $setupCheckboxes = [];

    public $billingIncrements = ['1' => ['BH' => '00', 'BM' => '00', 'PH' => '00', 'PM' => '00'], '2' => ['BH' => '00', 'BM' => '00', 'PH' => '00', 'PM' => '00'], '4' => ['BH' => '00', 'BM' => '00', 'PH' => '00', 'PM' => '00'], '5' => ['BH' => '00', 'BM' => '00', 'PH' => '00', 'PM' => '00']];
    public $additionalCharge = false;
    public $serviceCharge = [

        "1" => [['label' => '', 'price' => '', 'multiply_duration' => '', 'multiply_providers' => '']],
        "2" => [['label' => '', 'price' => '', 'multiply_duration' => '', 'multiply_providers' => '']],
        "4" => [['label' => '', 'price' => '', 'multiply_duration' => '', 'multiply_providers' => '']],
        "5" => [['label' => '', 'price' => '', 'multiply_duration' => '', 'multiply_providers' => '']]
    ];
    public $servicePayment = [

        "1" => [['label' => '', 'price' => '', 'charge_customer' => '', 'multiply_providers' => '']],
        "2" => [['label' => '', 'price' => '', 'charge_customer' => '', 'multiply_providers' => '']],
        "4" => [['label' => '', 'price' => '', 'charge_customer' => '', 'multiply_providers' => '']],
        "5" => [['label' => '', 'price' => '', 'charge_customer' => '', 'multiply_providers' => '']]
    ];
    public $emergencyCharge = false;
    public $emergencyHour = [
        "1" => [['hour' => '', 'price_type' => '$', 'price' => '', 'exclude_holidays' => '', 'multiply_duration' => '', 'multiply_providers' => '', 'exclude_after_hour' => '']],
        "2" => [['hour' => '', 'price_type' => '$', 'price' => '', 'exclude_holidays' => '', 'multiply_duration' => '', 'multiply_providers' => '', 'exclude_after_hour' => '']],
        "4" => [['hour' => '', 'price_type' => '$', 'price' => '', 'exclude_holidays' => '', 'multiply_duration' => '', 'multiply_providers' => '', 'exclude_after_hour' => '']],
        "5" => [['hour' => '', 'price_type' => '$', 'price' => '', 'exclude_holidays' => '', 'multiply_duration' => '', 'multiply_providers' => '', 'exclude_after_hour' => '']]
    ];

    public $cancelCharge = false;
    public $cancelCharges = [
        "1" => [['hour' => '', 'price_type' => '$', 'price' => '', 'exclude_holidays' => '', 'multiply_duration' => '', 'multiply_providers' => '', 'exclude_after_hour' => '', 'cancellation' => '', 'modification' => '', 'rescheduling' => '', 'service_min' => '']],
        "2" => [['hour' => '', 'price_type' => '$', 'price' => '', 'exclude_holidays' => '', 'multiply_duration' => '', 'multiply_providers' => '', 'exclude_after_hour' => '', 'cancellation' => '', 'modification' => '', 'rescheduling' => '', 'service_min' => '']],
        "4" => [['hour' => '', 'price_type' => '$', 'price' => '', 'exclude_holidays' => '', 'multiply_duration' => '', 'multiply_providers' => '', 'exclude_after_hour' => '', 'cancellation' => '', 'modification' => '', 'rescheduling' => '', 'service_min' => '']],
        "5" => [['hour' => '', 'price_type' => '$', 'price' => '', 'exclude_holidays' => '', 'multiply_duration' => '', 'multiply_providers' => '', 'exclude_after_hour' => '', 'cancellation' => '', 'modification' => '', 'rescheduling' => '', 'service_min' => '']]
    ];


    public $specializations;
    public $showSpecialization = false;
    public $serviceSpecialization = [[
        'specialization_id' => 0,
        'common' => ['price_type' => '$', "hide_from_customers" => false, "hide_from_providers" => false, "multiply_provider" => false, "multiply_service_duration" => false, 'disable' => false],
        "1" => ['price' => ''],
        "2" => ['price' => ''],
        "4" => ['price' => ''],
        "5" => ['price' => '']

    ]];

    /*=[[
        'in_person'=>'',
        'virtual'=>'',
        'phone'=>'',
        'teleconference'=>'',
        'hide_from_customers'=>'',
        'hide_from_providers'=>"",
        'duration'=>'',
        'no_of_providers'=>'',
        'disable'=>''
    ]] */

    public function mount(ServiceCategory $service)
    {

        $this->service = $service;
        if (is_null($this->service->rate_status)) {
            $this->service->rate_status = 1;
            $this->service->status = 1;
            $this->service->frequency_id = ['one_time', 'daily', 'weekly', 'weekdaily', 'monthly'];
            $this->service->standard_in_person_multiply_provider = true;
            $this->service->standard_rate_virtual_multiply_provider = true;
            $this->service->standard_in_person_multiply_provider_p = true;
            $this->service->standard_in_person_multiply_provider_t = true;
            $this->service->request_start_time = 1;
            $this->service->request_end_time = 1;
            $this->service->request_end_address = 0;
            $this->service->request_no_of_providers = 1;
            $this->service->request_service_consumer = 1;
            $this->service->request_participants = 1;
        }


        $this->setupValues = SetupHelper::loadSetupValues($this->setupValues);
        $this->setupCheckboxes['service_types'] = ['rendered' => ''];
        $this->loadValues($this->service);
        $this->specializations = Specialization::all()->where('status', 1);
        $serviceTypeLabels = SetupValue::where('setup_id', 5)->pluck('setup_value_label')->toArray();
        for ($i = 0, $j = 1; $i < 4; $i++, $j++) {
            if ($j == 3)
                $j = 4;
            $this->serviceTypes[$j]['title'] = $serviceTypeLabels[$i];
        }
        // 'customerForms' => ['parameters' => ['CustomizeForms', 'id', 'request_form_name', 'form_name_id', '37', 'request_form_name', false, 'service.request_form_id','','request_form_id',1]]

        $this->customForms = CustomizeForms::where(['form_name_id' => 37, 'status' => 1])->select('request_form_name', 'id')->get()->toArray();
        $this->companyUsers = [
            0 => ['id' => 10, 'name' => 'Company Admin'],
            5 => ['id' => 5, 'name' => 'Supervisor'],
            1 => ['id' => 9, 'name' => 'Billing Manager'],
            4 => ['id' => 6, 'name' => 'Requester'],
            2 => ['id' => 8, 'name' => 'Participant'],
            3 => ['id' => 7, 'name' => 'Service Consumer'],

        ];

        $this->dispatchBrowserEvent('refreshSelects');
    }
    public function rules()
    {

        return [

            'service.name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('service_categories', 'name')->ignore($this->service->id)
            ],
            'service.accommodations_id' => 'required',
            'service.service_type' => 'required',
            'service.frequency_id' => 'required',
            'service.rate_status' => 'required',
            'service.status' => '',
            'service.description' => [
                'nullable',
                'string',
                'max:255',
            ],
            'service.disable_for_companies' => 'nullable',
            'service.display_in_quote' => 'nullable',
            'service.display_in_application' => 'nullable',
            'service.standard_rate_virtual_multiply_provider' => 'nullable',
            'service.standard_in_person_multiply_provider' => 'nullable',
            'service.standard_in_person_multiply_provider_p' => 'nullable',
            'service.standard_in_person_multiply_provider_t' => 'nullable',

            'service.hours_price' => 'nullable|numeric|max:999999.99',
            'service.hours_price_v' => 'nullable|numeric|max:999999.99',
            'service.hours_price_p' => 'nullable|numeric|max:999999.99',
            'service.hours_price_t' => 'nullable|numeric|max:999999.99',

            'service.after_hours_price' => 'nullable|numeric|max:999999.99',
            'service.after_hours_price_v' => 'nullable|numeric|max:999999.99',
            'service.after_hours_price_p' => 'nullable|numeric|max:999999.99',
            'service.after_hours_price_t' => 'nullable|numeric|max:999999.99',

            'service.fixed_rate' => 'nullable|numeric|max:999999.99',
            'service.fixed_rate_v' => 'nullable|numeric|max:999999.99',
            'service.fixed_rate_p' => 'nullable|numeric|max:999999.99',
            'service.fixed_rate_t' => 'nullable|numeric|max:999999.99',

            'service.day_rate_price' => 'nullable|numeric|max:999999.99',
            'service.day_rate_price_v' => 'nullable|numeric|max:999999.99',
            'service.day_rate_price_p' => 'nullable|numeric|max:999999.99',
            'service.day_rate_price_t' => 'nullable|numeric|max:999999.99',

            'service.provider_limit' => 'nullable|numeric|max:999999.99',
            'service.provider_limit_v' => 'nullable|numeric|max:999999.99',
            'service.provider_limit_p' => 'nullable|numeric|max:999999.99',
            'service.provider_limit_t' => 'nullable|numeric|max:999999.99',

            'service.minimum_assistance_hours' => 'nullable|numeric|max:999999.99',
            'service.minimum_assistance_hours_v' => 'nullable|numeric|max:999999.99',
            'service.minimum_assistance_hours_p' => 'nullable|numeric|max:999999.99',
            'service.minimum_assistance_hours_t' => 'nullable|numeric|max:999999.99',

            'service.minimum_assistance_min' => 'nullable|numeric|max:999999.99',
            'service.minimum_assistance_min_v' => 'nullable|numeric|max:999999.99',
            'service.minimum_assistance_min_p' => 'nullable|numeric|max:999999.99',
            'service.minimum_assistance_min_t' => 'nullable|numeric|max:999999.99',

            'service.maximum_assistance_hours' => 'nullable|numeric|max:999999.99',
            'service.maximum_assistance_hours_v' => 'nullable|numeric|max:999999.99',
            'service.maximum_assistance_hours_p' => 'nullable|numeric|max:999999.99',
            'service.maximum_assistance_hours_t' => 'nullable|numeric|max:999999.99',

            'service.maximum_assistance_min' => 'nullable|numeric|max:999999.99',
            'service.maximum_assistance_min_v' => 'nullable|numeric|max:999999.99',
            'service.maximum_assistance_min_p' => 'nullable|numeric|max:999999.99',
            'service.maximum_assistance_min_t' => 'nullable|numeric|max:999999.99',

            'service.min_providers' => 'nullable|numeric|max:999999.99',
            'service.min_providers_v' => 'nullable|numeric|max:999999.99',
            'service.min_providers_p' => 'nullable|numeric|max:999999.99',
            'service.min_providers_t' => 'nullable|numeric|max:999999.99',

            'service.max_providers' => 'nullable|numeric|max:999999.99',
            'service.max_providers_v' => 'nullable|numeric|max:999999.99',
            'service.max_providers_p' => 'nullable|numeric|max:999999.99',
            'service.max_providers_t' => 'nullable|numeric|max:999999.99',

            'service.default_providers' => 'nullable|numeric|max:999999.99',
            'service.default_providers_v' => 'nullable|numeric|max:999999.99',
            'service.default_providers_p' => 'nullable|numeric|max:999999.99',
            'service.default_providers_t' => 'nullable|numeric|max:999999.99',



            'service.bill_status' => 'nullable',
            'service.payment_deduct_hour' => 'nullable',

            'service.request_start_time' => 'sometimes|nullable',
            'service.request_end_time' => 'sometimes|nullable',
            'service.request_end_address' => 'sometimes|nullable',
            'service.request_no_of_providers' => 'sometimes|nullable',
            'service.request_service_consumer' => 'sometimes|nullable',
            'service.request_participants' => 'sometimes|nullable',

            //step 5 rules
            'service.billing_companies' => 'sometimes|nullable',
            'service.payment_providers' => 'sometimes|nullable',
            'service.billing_timezone' => 'sometimes|nullable',
            'service.billing_timezone_v' => 'sometimes|nullable',
            'service.billing_timezone_t' => 'sometimes|nullable',
            'service.billing_timezone_p' => 'sometimes|nullable',
            'service.payment_timezone' => 'sometimes|nullable',
            'service.payment_timezone_v' => 'sometimes|nullable',
            'service.payment_timezone_t' => 'sometimes|nullable',
            'service.payment_timezone_p' => 'sometimes|nullable',
            'service.billing_rule' => 'sometimes|nullable',
            'service.billing_rule_v' => 'sometimes|nullable',
            'service.billing_rule_t' => 'sometimes|nullable',
            'service.billing_rule_p' => 'sometimes|nullable',
            'service.payment_rule' => 'sometimes|nullable',
            'service.payment_rule_v' => 'sometimes|nullable',
            'service.payment_rule_t' => 'sometimes|nullable',
            'service.payment_rule_p' => 'sometimes|nullable',
            'service.min_payment_duration' => 'sometimes|nullable|regex:/^[0-9:]+$/',
            'service.min_payment_duration_p' => 'sometimes|nullable|regex:/^[0-9:]+$/',
            'service.min_payment_duration_t' => 'sometimes|nullable|regex:/^[0-9:]+$/',
            'service.min_payment_duration_v' => 'sometimes|nullable|regex:/^[0-9:]+$/',
            'service.check_in_procedure' => 'nullable',
            'service.close_out_procedure' => 'nullable',
            'service.running_late_procedure' => 'nullable',
            'service.provider_display_settings' => 'nullable',
            'service.notification_settings' => 'sometimes|nullable',
            'service.notification_settings_v' => 'sometimes|nullable',
            'service.notification_settings_t' => 'sometimes|nullable',
            'service.notification_settings_p' => 'sometimes|nullable',
            'billingIncrements.*.*' => 'numeric',
            'service.request_form_id' => 'sometimes|nullable'

        ];
    }

    public function messages()
    {
        return [
            'billingIncrements.*.*.numeric' => 'Only numeric values are accepted in increment fields.',
            'service.hours_price.*' => 'The Hours Price fields must be numeric and less than or equal to 999999.99.',
            'service.after_hours_price.*' => 'The After Hours Price fields must be numeric and less than or equal to 999999.99.',
            'service.fixed_rate.*' => 'The Fixed Rate fields must be numeric and less than or equal to 999999.99.',
            'service.day_rate_price.*' => 'The Day Rate Price fields must be numeric and less than or equal to 999999.99.',
            'service.provider_limit.*' => 'Only numeric values are acceptable in Service Capacity & Capabilities.',
            'service.minimum_assistance_hours.*' => 'Only numeric values are acceptable in Service Capacity & Capabilities.',
            'service.minimum_assistance_min.*' => 'Only numeric values are acceptable in Service Capacity & Capabilities.',
            'service.maximum_assistance_hours.*' => 'Only numeric values are acceptable in Service Capacity & Capabilities.',
            'service.maximum_assistance_min.*' => 'Only numeric values are acceptable in Service Capacity & Capabilities.',
            'service.min_providers.*' => 'Only numeric values are acceptable in Service Capacity & Capabilities.',
            'service.max_providers.*' => 'Only numeric values are acceptable in Service Capacity & Capabilities.',
            'service.default_providers.*' => 'Only numeric values are acceptable in Service Capacity & Capabilities.',
            'service.min_payment_duration.*' => 'Only numeric values are acceptable in Min. payment duration.',
        ];
    }

    public function save($redirect = 1, $step = 1)
    {
        $this->validate();
        $this->service->added_by = Auth::id();
        $this->service->service_status = 1;
        $categoryService = new ServiceCatagoryService;
        $specializationRecords = [];

        // $s = $service_category['accommodations_id']='';

        $this->service->frequency_id = implode(',', $this->service->frequency_id);
        $this->service->service_type = implode(',', $this->service->service_type);

        if ($step == 1) {
            $this->service->provider_return_window = json_encode([$this->providerReturn["1"]]);
            $this->service->provider_return_window_v = json_encode([$this->providerReturn["2"]]);
            $this->service->provider_return_window_p = json_encode([$this->providerReturn["4"]]);
            $this->service->provider_return_window_t = json_encode([$this->providerReturn["5"]]);
        } elseif ($step == 2) {
            foreach ($this->serviceTypes as $key => $paraments) {
                if ($this->billingIncrements[$key]['BH'] == '')
                    $this->billingIncrements[$key]['BH'] = 0;
                if ($this->billingIncrements[$key]['BM'] == '')
                    $this->billingIncrements[$key]['BM'] = 0;
                if ($this->billingIncrements[$key]['PH'] == '')
                    $this->billingIncrements[$key]['PH'] = 0;
                if ($this->billingIncrements[$key]['PM'] == '')
                    $this->billingIncrements[$key]['PM'] = 0;
            }
            $this->service->billing_increment = $this->billingIncrements[1]['BH'] + round(($this->billingIncrements[1]['BM'] / 60), 2);
            $this->service->billing_increment_v = $this->billingIncrements[2]['BH'] + round(($this->billingIncrements[2]['BM'] / 60), 2);
            $this->service->billing_increment_p = $this->billingIncrements[4]['BH'] + round(($this->billingIncrements[4]['BM'] / 60), 2);
            $this->service->billing_increment_t = $this->billingIncrements[5]['BH'] + round(($this->billingIncrements[5]['BM'] / 60), 2);

            $this->service->payment_increment = $this->billingIncrements[1]['PH'] + round(($this->billingIncrements[1]['PM'] / 60), 2);
            $this->service->payment_increment_v = $this->billingIncrements[2]['PH'] + round(($this->billingIncrements[2]['PM'] / 60), 2);
            $this->service->payment_increment_p = $this->billingIncrements[4]['PH'] + round(($this->billingIncrements[4]['PM'] / 60), 2);
            $this->service->payment_increment_t = $this->billingIncrements[5]['PH'] + round(($this->billingIncrements[5]['PM'] / 60), 2);

            //will refactor later, not a good way
            $chargeData = [];
            foreach ($this->serviceTypes as $type => $parameters) {
                $chargeData[$type] = '';
                $cIndex = 1;
                foreach ($this->serviceCharge[$type] as $data) {
                    if ($data['label'] != '' && $data['price'] != '') {
                        $chargeData[$type] .= json_encode([$data]);
                        if (count($this->serviceCharge[$type]) > $cIndex)
                            $chargeData[$type] .= ",";
                    }


                    $cIndex++;
                }
            }

            $this->service->service_charge = str_replace("],]", "]]", "[" . $chargeData["1"] . "]");
            $this->service->service_charge_v = str_replace("],]", "]]", "[" . $chargeData["2"] . "]");
            $this->service->service_charge_p = str_replace("],]", "]]", "[" . $chargeData["4"] . "]");
            $this->service->service_charge_t = str_replace("],]", "]]", "[" . $chargeData["5"] . "]");


            $paymentData = [];
            foreach ($this->serviceTypes as $type => $parameters) {
                $paymentData[$type] = '';
                $cIndex = 1;
                foreach ($this->servicePayment[$type] as $data) {
                    if ($data['label'] != '' && $data['price'] != '') {
                        $paymentData[$type] .= json_encode([$data]);
                        if (count($this->servicePayment[$type]) > $cIndex)
                            $paymentData[$type] .= ",";
                    }

                    $cIndex++;
                }
            }


            $this->service->service_payment = str_replace("],]", "]]", "[" . $paymentData["1"] . "]");
            $this->service->service_payment_v = str_replace("],]", "]]", "[" . $paymentData["2"] . "]");
            $this->service->service_payment_p = str_replace("],]", "]]", "[" . $paymentData["4"] . "]");
            $this->service->service_payment_t = str_replace("],]", "]]", "[" . $paymentData["5"] . "]");

            $emergencyData = [];
            foreach ($this->serviceTypes as $type => $parameters) {
                $emergencyData[$type] = '';
                $cIndex = 1;
                foreach ($this->emergencyHour[$type] as $data) {
                    if ($data['hour'] != '' && $data['price'] != '') {
                        $emergencyData[$type] .= json_encode([$data]);
                        if (count($this->emergencyHour[$type]) > $cIndex)
                            $emergencyData[$type] .= ",";
                    }

                    $cIndex++;
                }
            }


            $this->service->emergency_hour = str_replace("],]", "]]", "[" . $emergencyData["1"] . "]");
            $this->service->emergency_hour_v = str_replace("],]", "]]", "[" . $emergencyData["2"] . "]");
            $this->service->emergency_hour_p = str_replace("],]", "]]", "[" . $emergencyData["4"] . "]");
            $this->service->emergency_hour_t = str_replace("],]", "]]", "[" . $emergencyData["5"] . "]");

            $cancelData = [];
            foreach ($this->serviceTypes as $type => $parameters) {
                $cancelData[$type] = '';
                $cIndex = 1;
                foreach ($this->cancelCharges[$type] as $data) {
                    if ($data['hour'] != '' && $data['price'] != '') {
                        $cancelData[$type] .= json_encode([$data]);
                        if (count($this->cancelCharges[$type]) > $cIndex)
                            $cancelData[$type] .= ",";
                    }

                    $cIndex++;
                }
            }


            $this->service->cancellation_hour1 = str_replace("],]", "]]", "[" . $cancelData["1"] . "]");
            $this->service->cancellation_hour1_v = str_replace("],]", "]]", "[" . $cancelData["2"] . "]");
            $this->service->cancellation_hour1_p = str_replace("],]", "]]", "[" . $cancelData["4"] . "]");
            $this->service->cancellation_hour1_t = str_replace("],]", "]]", "[" . $cancelData["5"] . "]");

            //specializtions data

            $index = 0;

            foreach ($this->serviceSpecialization as $specialization) {
                if (!is_null($specialization['specialization_id'])) {
                    $specialization['common']['price'] = $specialization["1"]['price'];
                    $specializationRecords[$index]["specialization_price"] = array_merge($specialization["1"], $specialization['common']);
                    $specialization['common']['price'] = $specialization["2"]['price'];
                    $specializationRecords[$index]["specialization_price_v"] = array_merge($specialization["2"], $specialization['common']);
                    $specialization['common']['price'] = $specialization["4"]['price'];
                    $specializationRecords[$index]["specialization_price_p"] = array_merge($specialization["4"], $specialization['common']);
                    $specialization['common']['price'] = $specialization["5"]['price'];
                    $specializationRecords[$index]["specialization_price_t"] = array_merge($specialization["5"], $specialization['common']);
                    $specializationRecords[$index]['specialization_id'] = $specialization['specialization_id'];
                }

                $index++;
            }

            //end of refactor

        } elseif ($step == 5) {
            //   dd($this->checkIn);
            $this->service->check_in_procedure = json_encode($this->checkIn);
            $this->service->close_out_procedure = json_encode($this->checkOut);
            $this->service->running_late_procedure = json_encode($this->runningLate);
            $this->service->provider_display_settings = json_encode($this->providerSettings);
        } elseif ($step == 6) {
            $this->service->notification_settings = json_encode([$this->notificationSettings["1"]]);
            $this->service->notification_settings_v = json_encode([$this->notificationSettings["2"]]);
            $this->service->notification_settings_p = json_encode([$this->notificationSettings["4"]]);
            $this->service->notification_settings_t = json_encode([$this->notificationSettings["5"]]);
        }

        //    dd( $this->service->payment_increment);


        $this->service = $categoryService->createService($this->service, $specializationRecords);



        if ($redirect) {

            $this->showList("Service has been saved successfully");
            addLogs([
                'action_by' => \Auth::id(),
                'action_to' => $this->service->id,
                'item_type' => 'service',
                'type' => $this->log_type,
                'message' => 'Service ' . $this->log_type . 'd by ' . \Auth::user()->name,
                'ip_address' => \request()->ip(),
            ]);
            $this->service = new ServiceCategory;
        } else {  //reconvert values 
            $this->reconvertValues();
            $this->step++;
        }
    }
    public function reconvertValues()
    {
        if (!is_array($this->service->service_type))
            $this->service->service_type = explode(',', $this->service->service_type);
        if (!is_array($this->service->frequency_id))
            $this->service->frequency_id = explode(',', $this->service->frequency_id);
        $this->dispatchBrowserEvent('refreshSelects');
    }
    public function back()
    {
        $this->step--;
        $this->loadValues($this->service);
    }
    public function updateVal($attrName, $val)
    {
        if ($attrName == "checkin_customers") {
            $this->checkIn['customers'] = $val;
        } elseif ($attrName == "checkout_customers") {
            $this->checkOut['customers'] = $val;
        } elseif ($attrName == "runninglate_customers") {
            $this->runningLate['customers'] = $val;
        } else
            $this->service[$attrName] = $val;
    }
    public function render()
    {

        return view('livewire.app.admin.accommodation.forms.add-service');
    }

    public function showList($message = "")
    {

        $this->emit('showList', $message);
    }
    public function edit(ServiceCategory $service)
    {

        $this->service = $service;
        $this->label = "Edit";
        $this->log_type = 'update';
        $this->service->specializaition = ServiceSpecialization::where('service_id', $this->service->id)->get()->toArray();
        //mapping to serviceSpecialization array

        if (!is_null($this->service->specializaition) && count($this->service->specializaition)) {
            $this->showSpecialization = true;
            $this->serviceSpecialization = [];
            foreach ($this->service->specializaition as $specialization) {
                //find common values 
                $price = json_decode($specialization['specialization_price'], true);
                $price_v = json_decode($specialization['specialization_price_v'], true);
                $price_p = json_decode($specialization['specialization_price_p'], true);
                $price_t = json_decode($specialization['specialization_price_t'], true);
                $commonValues = [];
                if (!is_null($price) && is_array($price)) {

                    $price = $price[0];
                    foreach ($price as $key => $value) {
                        $commonValues[$key] = $value;
                    }
                    // $commonValues=['price_type'=>$price["price_type"],"hide_from_customers"=>$price["hide_from_customers"],"hide_from_providers"=>$price["hide_from_providers"],"multiply_provider"=>$price['multiply_provider'],"multiply_service_duration"=>$price['multiply_service_duration'],'disable'=>$price['disable']];
                    $price = $price['price'];
                }
                if (!is_null($price_v)) {
                    $price_v = $price_v[0];
                    foreach ($price_v as $key => $value) {
                        $commonValues[$key] = $value;
                    }
                    $price_v = $price_v['price'];
                }
                if (!is_null($price_t)) {
                    $price_t = $price_t[0];
                    foreach ($price_t as $key => $value) {
                        $commonValues[$key] = $value;
                    }
                    $price_t = $price_t['price'];
                }
                if (!is_null($price_p)) {
                    $price_p = $price_p[0];
                    foreach ($price_p as $key => $value) {
                        $commonValues[$key] = $value;
                    }
                    $price_p = $price_p['price'];
                }
                $this->serviceSpecialization[] = [
                    'specialization_id' => $specialization['specialization_id'],
                    'common' => $commonValues,
                    "1" => ['price' => $price],
                    "2" => ['price' => $price_v],
                    "4" => ['price' => $price_p],
                    "5" => ['price' => $price_t]

                ];
            }
        }

        $this->loadValues($this->service);
    }
    public function switch($component)
    {
        $this->component = $component;
    }
    public function serviceRates()
    {
        $this->step = 3;
    }
    public function ServiceFrom()
    {
        $this->step = 4;
    }
    public function ServiceConfig()
    {
        $this->step = 5;
    }
    public function advanceOptions()
    {
        $this->step = 6;
    }

    public function loadValues($service)
    {
        $selectedValues = [];
        $selectedFValues = [];
        if (!is_null($this->service->service_type)) {

            if (!is_array($this->service->service_type))
                $this->service->service_type = explode(',', $this->service->service_type);
            // $this->service->service_type=$selectedValues;
            //dd($this->service->service_type);
        } else {
            $this->service->service_type = [];
        }
        if (!is_null($this->service->frequency_id)) {
            if (!is_array($this->service->frequency_id))
                $this->service->frequency_id = explode(',', $this->service->frequency_id);
            // $this->service->frequency_id=$selectedFValues;
        } else {
            $this->service->frequency_id = [];
        }
        $this->setupCheckboxes['service_types'] = ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', '5', 'id', $selectedValues, 1, 'form-check form-check-inline', 'service_type', 'wire:model.defer=service.service_type', [1, 2, 4, 5], 'onclick= updateRates($(this))']];
        $this->setupCheckboxes['frequency_id'] = ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', '6', 'id', $selectedFValues, 1, 'form-check', 'frequency_id', 'wire:model.defer=service.frequency_id', ['one_time', 'daily', 'weekly', 'weekdaily', 'monthly'], '']];
        //  dd($this->setupCheckboxes);
        $this->setupCheckboxes = SetupHelper::loadSetupCheckboxes($this->setupCheckboxes);
        //provider return window

        $this->checkIn = json_decode($this->service->check_in_procedure, true);
        $this->checkOut = json_decode($this->service->close_out_procedure, true);
        $this->runningLate = json_decode($this->service->running_late_procedure, true);
        $this->providerSettings = json_decode($this->service->provider_display_settings, true);
        $providerReturnValues = [$service->provider_return_window, $service->provider_return_window_v, $service->provider_return_window_p, $service->provider_return_window_t];
        $index = 0;
        foreach ($this->providerReturn as $key => $value) {
            // Get the current index

            $data = json_decode($providerReturnValues[$index], true);

            if (!empty($data) && is_array($data)) {
                $this->providerReturn[$key] = $data[0];
            }
            $index++;
        }
        $notificationSettingsValues = [$service->notification_settings, $service->notification_settings_v, $service->notification_settings_p, $service->notification_settings_t];
        $index = 0;
        foreach ($this->notificationSettings as $key => $value) {
            // Get the current index

            $data = json_decode($notificationSettingsValues[$index], true);

            if (!empty($data) && is_array($data)) {
                $this->notificationSettings[$key] = $data[0];
            }
            $index++;
        }

        $billingIncrementCols = [$service->billing_increment, $service->billing_increment_v, $service->billing_increment_p, $service->billing_increment_t];
        $paymentIncrementCols = [$service->payment_increment, $service->payment_increment_v, $service->payment_increment_p, $service->payment_increment_t];
        $index = 0;
        foreach ($this->billingIncrements as $key => $data) {
            if ($billingIncrementCols[$index] > 0) {

                $this->billingIncrements[$key]['BH'] = floor($billingIncrementCols[$index]);
                $this->billingIncrements[$key]['BM'] = floor(($billingIncrementCols[$index] - $this->billingIncrements[$key]['BH']) * 60);
            }
            if ($paymentIncrementCols[$index] > 0) {
                $this->billingIncrements[$key]['PH'] = floor($paymentIncrementCols[$index]);
                $this->billingIncrements[$key]['PM'] = floor(($paymentIncrementCols[$index] - $this->billingIncrements[$key]['PH']) * 60);
            }

            $index++;
        }

        $serviceChargeCols = [$service->service_charge, $service->service_charge_v, $service->service_charge_p, $service->service_charge_t];
        $index = 0;
        foreach ($this->serviceCharge as $key => $value) {
            // Get the current index

            $data = json_decode($serviceChargeCols[$index], true);

            if (!empty($data) && is_array($data)) {
                $this->additionalCharge = true;
                $inloopIndex = 0;
                foreach ($data as $dataSet) {
                    $this->serviceCharge[$key][$inloopIndex] = $dataSet[0];
                    $inloopIndex++;
                }
            }
            $index++;
        }

        $servicePaymentCols = [$service->service_payment, $service->service_payment_v, $service->service_payment_p, $service->service_payment_t];
        $index = 0;
        foreach ($this->servicePayment as $key => $value) {
            // Get the current index

            $data = json_decode($servicePaymentCols[$index], true);

            if (!empty($data) && is_array($data)) {
                $this->additionalCharge = true;
                $inloopIndex = 0;
                foreach ($data as $dataSet) {
                    $this->servicePayment[$key][$inloopIndex] = $dataSet[0];
                    $inloopIndex++;
                }
            }
            $index++;
        }
        $emergencyCols = [$service->emergency_hour, $service->emergency_hour_v, $service->emergency_hour_p, $service->emergency_hour_t];
        $index = 0;
        foreach ($this->emergencyHour as $key => $value) {
            // Get the current index

            $data = json_decode($emergencyCols[$index], true);

            if (!empty($data) && is_array($data)) {
                $this->emergencyCharge = true;
                $inloopIndex = 0;
                foreach ($data as $dataSet) {
                    $this->emergencyHour[$key][$inloopIndex] = $dataSet[0];
                    $inloopIndex++;
                }
            }
            $index++;
        }

        $cancelCols = [$service->cancellation_hour1, $service->cancellation_hour1_v, $service->cancellation_hour1_p, $service->cancellation_hour1_t];
        $index = 0;
        foreach ($this->cancelCharges as $key => $value) {
            // Get the current index

            $data = json_decode($cancelCols[$index], true);

            if (!empty($data) && is_array($data)) {
                $this->cancelCharge = true;
                $inloopIndex = 0;
                foreach ($data as $dataSet) {
                    $this->cancelCharges[$key][$inloopIndex] = $dataSet[0];
                    $inloopIndex++;
                }
            }
            $index++;
        }
    }

    public function setStep($stepNo)
    {

        if (!is_null($this->service->name))
            $this->step = $stepNo;

        $this->dispatchBrowserEvent('refreshSelects');
    }

    public function addCharges($type)
    {
        $this->serviceCharge[$type][] = ['label' => '', 'price' => '', 'multiply_duration' => '', 'multiply_providers' => ''];
    }

    public function addPayment($type)
    {
        $this->servicePayment[$type][] = ['label' => '', 'price' => '', 'charge_customer' => '', 'multiply_providers' => ''];
    }

    public function addEmergency($type)
    {
        $this->emergencyHour[$type][] = ['hour' => '', 'price_type' => '$', 'price' => '', 'exclude_holidays' => '', 'multiply_duration' => '', 'multiply_providers' => '', 'exclude_after_hour' => ''];
    }
    public function addCancelCharge($type)
    {
        $this->cancelCharges[$type][] = ['hour' => '', 'price_type' => '$', 'price' => '', 'exclude_holidays' => '', 'multiply_duration' => '', 'multiply_providers' => '', 'exclude_after_hour' => '', 'cancellation' => '', 'modification' => '', 'rescheduling' => '', 'service_min' => ''];
    }

    public function addSpecialization()
    {
        $this->serviceSpecialization[] = [
            'specialization_id' => 0,
            'common' => ['price_type' => '$', "hide_from_customers" => false, "hide_from_providers" => false, "multiply_provider" => false, "multiply_service_duration" => false, 'disable' => false],
            "1" => ['price' => ''],
            "2" => ['price' => ''],
            "4" => ['price' => ''],
            "5" => ['price' => '']

        ];
    }

    public function updateFields($values)
    {
        dd($values);
    }
}
