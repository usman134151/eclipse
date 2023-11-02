<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingInvitation;
use App\Models\Tenant\BookingInvitationProvider;
use App\Models\Tenant\Tag;
use App\Models\Tenant\User;
use Livewire\Component;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\Specialization;
use App\Models\Tenant\SpecializationRate;
use App\Models\Tenant\Payment;
use App\Models\Tenant\StandardRate;
use App\Models\Tenant\UserDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Illuminate\Support\Collection;
use App\Helpers\SetupHelper;

class AssignProviders extends Component
{
    use WithPagination;

    public $provider_ids = [];
    public $preferred_provider_ids = [];
    public $tag_names = [];
    public $service_type_ids = [];
    public $services = [];
    public $specializations = [];
    public $gender;
    public $ethnicity;
    public $certifications = [];
    public $accommodations = [];
    public $distance;

    public $showForm, $panelType = 1;
    public $tags, $search, $service_payments = [];
    public $service_id = null, $booking_id = null, $custom_rates, $booking_service=null;
    protected $listeners = ['showList' => 'resetForm', 'refreshFilters', 'saveAssignedProviders' => 'save', 'updateVal', 'inviteProviders','reMount'];
    public $assignedProviders = [], $limit = null, $booking, $showError = false;
    public $paymentData = ["additional_label_provider" => '', "additional_charge_provider" => 0];
    public $providers, $providersPayment, $bookingService, $durationLabel, $durationTotal = 0, $totalAmount;
    public $b_hours_duration = 0, $a_hours_duration = 0, $expedited_hours = 0, $booking_specializations = [];
    public $setupValues = [
        'accommodations' => ['parameters' => ['Accommodation', 'id', 'name', 'status', 1, 'name', true, 'accommodations', '', 'accommodationsassignProvider', 2]],
        'specializations' => ['parameters' => ['Specialization', 'id', 'name', 'status', 1, 'name', true, 'specializations', '', 'specializationsassignProvider', 4]],
        'services' => ['parameters' => ['ServiceCategory', 'id', 'name', 'status', 1, 'name', true, 'services', '', 'servicesassignProvider', 3]],
        "service_type_ids" => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 5, 'setup_value_label', true, 'service_type_ids', '', 'service_type_idsassignProvider', 4]],
        'ethnicity' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 3, 'setup_value_label', true, 'ethnicity', '', 'ethnicityassignProvider', 6]],
        'gender' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 2, 'setup_value_label', true, 'gender', '', 'genderassignProvider', 5]],
        'certifications' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 8, 'setup_value_label', true, ' certifications', '', ' certificationsassignProvider', 9]],

    ];


    public $serviceTypes = [
        '1' => ['class' => 'inperson-rate', 'postfix' => '', 'title' => 'In-Person'],
        '2' => ['class' => 'virtual-rate', 'postfix' => '_v', 'title' => 'Virtual'],
        '4' => ['class' => 'phone-rate', 'postfix' => '_p', 'title' => 'Phone'],
        '5' => ['class' => 'teleconference-rate', 'postfix' => '_t', 'title' => 'Teleconference'],
    ];
    public function updateVal($name, $value)
    {

        if ($name == "servicesassignProvider") {
            $this->services = $value;
        } else if ($name == "specializationsassignProvider") {
            $this->specializations = $value;
        } else if ($name == "setup_value_labelassignProvider") {
            $this->service_type_ids = $value;
        } else if ($name == "tags_selected-assignProviderassignProvider") {
            $this->tag_names = $value;
        } else if ($name == "providers_selected") {
            $this->provider_ids = $value;
        } else if ($name == "preferred_provider_ids") {
            $this->preferred_provider_ids = $value;
        } else if ($name == "genderassignProvider") {
            $this->gender = $value;
        } else if ($name == "ethnicityassignProvider") {
            $this->ethnicity = $value;
        } else if ($name == "certificationsassignProvider") {
            $this->certifications = $value;
        } else if ($name == "accommodationsassignProvider") {
            $this->accommodations = $value;
        } else if ($name == "distance_filter") {
            $this->distance = $value;
        }

        $this->providers = $this->refreshProviders();
    }

    public function render()
    {


        return view('livewire.app.common.panels.booking-details.assign-providers');
    }



    public function refreshFilters($name, $value)
    {
        if ($name == "Service_filter") {
            $this->services = $value;
        } else if ($name == "specialization_search_filter") {
            $this->specializations = $value;
        } else if ($name == "setup_value_label") {
            $this->service_type_ids = $value;
        } else if ($name == "tags_selected-assignProvider") {
            $this->tag_names = $value;
        } else if ($name == "providers_selected") {
            $this->provider_ids = $value;
        } else if ($name == "preferred_provider_ids") {
            $this->preferred_provider_ids = $value;
        } else if ($name == "gender") {
            $this->gender = $value;
        } else if ($name == "ethnicity") {
            $this->ethnicity = $value;
        } else if ($name == "certifications") {
            $this->certifications = $value;
        } else if ($name == "accommodation_filter") {
            $this->accommodations = $value;
        } else if ($name == "distance_filter") {
            $this->distance = $value;
        }

        $this->providers = $this->refreshProviders();

        $this->dispatchBrowserEvent('refreshSelects2');
    }
    public function refreshProviders()
    {
     
        $returnCols = [
            'users.id',
            'users.name',
            'user_details.city',
            'user_details.state',
            'user_details.country',
            'users.email',
            'user_details.phone', 'user_details.profile_pic', 'user_details.tags',
            'users.status',

        ];
        $query = User::where('users.status', 1)
            ->whereHas('roles', function ($query) {
                $query->wherein('role_id', [2]);
            })->join('user_details', function ($userdetails) {
                $userdetails->on('user_details.user_id', '=', 'users.id');
            });

        if ($this->panelType == 3) {
            $query->join('booking_invitation_providers', function ($query) {
                $query->where('booking_id', $this->booking_id);
                $query->on('booking_invitation_providers.provider_id', 'users.id');
            });
            $returnCols[] = 'booking_invitation_providers.notes';
        }
        $query->select($returnCols);

        if ($this->search) {
            $query->where('users.name', 'LIKE', "%" . $this->search . "%");
        }
        if (count($this->tag_names)) {
            $query->whereJsonContains('tags', $this->tag_names);
        }
        if (count($this->provider_ids)) {
            $query->whereIn('users.id', $this->provider_ids);
        }
        if (count($this->services)) {
            $services = $this->services;
            $query->whereHas('services', function ($query) use ($services) {
                $query->whereIn('service_categories.id', $services);
                $query->where('provider_accommodation_services.status', '=', 1);
            });
        }
        if (count($this->accommodations)) {
            $accommodations = $this->accommodations;
            $query->whereHas('accommodations', function ($query) use ($accommodations) {
                $query->whereIn('accommodations.id', $accommodations);
                $query->where('provider_accommodation_services.status', '=', 1);
            });
        }
        if (count($this->service_type_ids)) {
            //as ids are different in dropdown and in table need to replace for filter
            $replacements = [
                28 => 1,
                29 => 2,
                30 => 4,
                31 => 5
            ];
            $filterArray = array_map(function ($item) use ($replacements) {
                return isset($replacements[$item]) ? $replacements[$item] : $item;
            }, $this->service_type_ids);
            $query->whereHas('services', function ($query) use ($filterArray) {
                $query->where('provider_accommodation_services.status', '=', 1)->where(function ($query) use ($filterArray) {
                    foreach ($filterArray as $item) {
                        $query->where('service_categories.service_type', 'LIKE', "%$item%");
                    }
                });
            });
        }
        if (is_array($this->specializations) && count($this->specializations)) {
            $specializations = $this->specializations;
            $query->whereHas('services', function ($query) use ($specializations) {
                $query->where('provider_accommodation_services.status', '=', 1)
                    ->whereHas('specializations', function ($query) use ($specializations) {
                        $query->whereIn('specialization_id', $specializations);
                    });
            });
        }
        if ($this->gender) {
            $query->where('user_details.gender_id', $this->gender);
        }
        if ($this->ethnicity) {
            $query->where('user_details.ethnicity_id', $this->ethnicity);
        }
        if (count($this->certifications)) {
            $certifications = $this->certifications;
            $query->where(function ($query) use ($certifications) {
                foreach ($certifications as $certId) {
                    $query->where('certification', 'LIKE', "%$certId%");
                }
            });
        }
        if (count($this->preferred_provider_ids)) {
            $preferred_provider_ids = $this->preferred_provider_ids;
            $query->where(function ($query) use ($preferred_provider_ids) {
                foreach ($preferred_provider_ids as $prefId) {
                    $query->where('favored_users', 'LIKE', "%$prefId%");
                }
            });
        }

        if ($this->distance) {
            $miles  = $this->distance;

            if ($this->booking->physicalAddress) {
                $distanceIDS = UserDetail::select(DB::raw("(((acos(sin((" . $this->booking->physicalAddress->latitude . "*pi()/180)) * sin((`latitude`*pi()/180)) + cos((" . $this->booking->physicalAddress->latitude . "*pi()/180)) * cos((`latitude`*pi()/180)) * cos(((" . $this->booking->physicalAddress->longitude . "- `longitude`)*pi()/180)))) * 180/pi()) * 60 * 1.1515) as distance, user_id"))->havingRaw('distance <= ' . $miles)->pluck('user_id')->toArray();
                $query->wherein('users.id', $distanceIDS);
            }
        }
        $providers = $this->providers = $query->get();
       
        $this->getProviderCharges($this->service_id,$this->booking_service,$this->specializations,$providers);

        // dd($this->providersPayment, $this->providers->toArray());
        return $this->providers;
    }
    public function messages()
    {
        return [
            'providersPayment.*.service_payment_details.b_hours_duration.numeric' => 'Average rate should be a number',
            'providersPayment.*.service_payment_details.a_hours_duration.numeric' => 'Average rate should be a number',
            'providersPayment.*.service_payment_details.b_hours_rate.numeric' => 'Average rate should be a number',
            'providersPayment.*.service_payment_details.a_hours_rate.numeric' => 'Average rate should be a number',
            'providersPayment.*.service_payment_details.expedited_rate.numeric' => 'Average rate should be a number',
            'providersPayment.*.service_payment_details.specialization_charges.*.provider_charges.numeric' => 'Average rate should be a number',

        ];
    }
    public function rules()
    {
        return [
            // 'providersPayment.*.override_price' => 'nullable|numeric',
            'providersPayment.*.service_payment_details.b_hours_duration' => 'nullable|numeric',
            'providersPayment.*.service_payment_details.a_hours_duration' => 'nullable|numeric',
            'providersPayment.*.service_payment_details.b_hours_rate' => 'nullable|numeric',
            'providersPayment.*.service_payment_details.a_hours_rate' => 'nullable|numeric',
            'providersPayment.*.service_payment_details.expedited_rate' => 'nullable|numeric',
            'providersPayment.*.service_payment_details.specialization_charges.*.provider_charges' => 'nullable|numeric',

        ];
    }
    public function updateTotal($index)
    {
        $this->validate();
        // dd($this->providersPayment[$index]['override_price']);
        if (!isset($this->providersPayment[$index]['service_payment_details']['b_hours_rate']) || trim($this->providersPayment[$index]['service_payment_details']['b_hours_rate']) == '')
            $this->providersPayment[$index]['service_payment_details']['b_hours_rate'] = 0;
        if (!isset($this->providersPayment[$index]['service_payment_details']['a_hours_rate']) || trim($this->providersPayment[$index]['service_payment_details']['a_hours_rate']) == '')
            $this->providersPayment[$index]['service_payment_details']['a_hours_rate'] = 0;
        if (!isset($this->providersPayment[$index]['service_payment_details']['b_hours_duration']) || trim($this->providersPayment[$index]['service_payment_details']['b_hours_duration']) == '')
            $this->providersPayment[$index]['service_payment_details']['b_hours_duration'] = 0;
        if (!isset($this->providersPayment[$index]['service_payment_details']['a_hours_duration']) || trim($this->providersPayment[$index]['service_payment_details']['a_hours_duration']) == '')
            $this->providersPayment[$index]['service_payment_details']['a_hours_duration'] = 0;
        if (!isset($this->providersPayment[$index]['service_payment_details']['expedited_rate']) || trim($this->providersPayment[$index]['service_payment_details']['expedited_rate']) == '')
            $this->providersPayment[$index]['service_payment_details']['expedited_rate'] = 0;
        if (!isset($this->providersPayment[$index]['service_payment_details']['expedited_duration']) || trim($this->providersPayment[$index]['service_payment_details']['expedited_duration']) == '')
            $this->providersPayment[$index]['service_payment_details']['expedited_duration'] = 0;
        if (!isset($this->providersPayment[$index]['additional_payments']))
            $this->providersPayment[$index]['additional_payments'] = [];
        $this->providersPayment[$index]['total_amount'] = number_format(($this->providersPayment[$index]['service_payment_details']['b_hours_rate'] * $this->providersPayment[$index]['service_payment_details']['b_hours_duration']) + ($this->providersPayment[$index]['service_payment_details']['a_hours_rate'] * $this->providersPayment[$index]['service_payment_details']['a_hours_duration'])
            + ($this->providersPayment[$index]['service_payment_details']['expedited_rate'] * $this->providersPayment[$index]['service_payment_details']['expedited_duration']), 2, '.', '');


        if (count($this->providersPayment[$index]['additional_payments']) && key_exists('additional_charge_provider',$this->providersPayment[$index]['additional_payments'])) {
            //foreach ($this->providersPayment[$index]['additional_payments'] as $key => $payment) {
                $this->providersPayment[$index]['total_amount'] = $this->providersPayment[$index]['total_amount']
                    + $this->providersPayment[$index]['additional_payments']['additional_charge_provider'] ?? 0;
            //}
        }


        if (count($this->booking_specializations)) {
            if(key_exists('specialization_charges',$this->providersPayment[$index]['service_payment_details'])){
                foreach ($this->providersPayment[$index]['service_payment_details']['specialization_charges'] as $key => $specialization) {
                    $this->providersPayment[$index]['total_amount'] = $this->providersPayment[$index]['total_amount'] + $this->providersPayment[$index]['service_payment_details']['specialization_charges'][$key]['provider_charges'] ?? 0;
                }
            }

        }
        $pid = $this->providers[$index]['id'];
        foreach ($this->assignedProviders as &$aProvider) {
            if ($aProvider['provider_id'] == $pid) {

                $aProvider['total_amount'] = $this->providersPayment[$index]['total_amount'];
                $aProvider['service_payment_details'] = $this->providersPayment[$index]['service_payment_details'];
                $aProvider['additional_payments'] = $this->providersPayment[$index]['additional_payments'];
                $aProvider['additional_label_provider'] = isset($this->providersPayment[$index]['additional_payments'][0]['additional_label_provider']) ? $this->providersPayment[$index]['additional_payments'][0]['additional_label_provider'] : null;
                $aProvider['additional_charge_provider'] = isset($this->providersPayment[$index]['additional_payments'][0]['additional_charge_provider']) ? $this->providersPayment[$index]['additional_payments'][0]['additional_charge_provider'] : null;
            }
        }
        return $this->providersPayment[$index]['total_amount'];
    }
    public function overrideTotal($index)
    {

        $pid = $this->providers[$index]['id'];
        foreach ($this->assignedProviders as &$aProvider) {
            if ($aProvider['provider_id'] == $pid) {

                $aProvider['total_amount'] = $this->providersPayment[$index]['total_amount'];
            }
        }
    }
    public function getProviderCharges($serviceId,$service,$specialization,$providers)
    {
      
        $postFix=($this->serviceTypes[$service['service_types']]['postfix']);
        if ($this->panelType != 2) {

            $this->providersPayment = [];
            foreach ($providers as $index => &$provider) {
                //check if provider is assigned provider
                $assigned=false;
                
                foreach ($this->assignedProviders as &$aProvider) {

                    if ($aProvider['provider_id'] == $provider['id']) {
                        $assigned=true;

                        
                        $this->providersPayment[$index] = $aProvider; //overriding if already assigned
                        if(!is_null($aProvider['service_payment_details']) && is_array($aProvider['service_payment_details']) && !key_exists('specialization_charges',$aProvider['service_payment_details'])){
                            $this->providersPayment[$index]['service_payment_details']['specialization_charges']=$this->booking_specializations;
                        }
                        elseif(is_null($aProvider['service_payment_details']) || !is_array($aProvider['service_payment_details'])){
                            $assigned=false; //to cover old bookings with no data of service details
                        }
                        if (isset($aProvider['total_amount']) && $aProvider['total_amount'] == "0.00") {
        
                            $aProvider['total_amount'] = $this->updateTotal($index);
                        }
                        if (!isset($aProvider['additional_payments']) && !is_null($aProvider['additional_payments']))
                            $this->providersPayment[$index]['additional_payments'] = $additionalPayments;
                        
                    }
                  
                }
                if(!$assigned){
                //else fetch and set custom rates
                $this->providersPayment[$index]['additional_payments']=$this->paymentData;
                $standardRate=StandardRate::where('accommodation_service_id',$serviceId)->where('user_id',$provider['id'])->first();
                if($standardRate){
                  
                    $this->providersPayment[$index]['service_payment_details']=[
                        'b_hours_duration' => $this->b_hours_duration,
                        'b_hours_rate' =>$standardRate['hours_price'.$postFix] ,
                        'a_hours_duration' => $this->a_hours_duration,
                        'a_hours_rate' => $standardRate['after_hours_price'.$postFix],
                        'expedited_duration' => $this->expedited_hours,
                        'expedited_rate' => 0 , //$standardRate['emergency_hour'.$postFix],
                        'specialization_charges' => $this->booking_specializations,
                       
                    ];
                 //  dd($standardRate['hours_price'.$postFix]);

                }
                else{
                    //zero rate assignment
                   
                    $this->providersPayment[$index]['service_payment_details']=[
                        'b_hours_duration' => $this->b_hours_duration,
                        'b_hours_rate' =>0 ,
                        'a_hours_duration' => $this->a_hours_duration,
                        'a_hours_rate' => 0,
                        'expedited_duration' => $this->expedited_hours,
                        'expedited_rate' => 0,
                        'specialization_charges' => $this->booking_specializations,
                        
                    ];
                }
                $this->providersPayment[$index]['total_amount'] = $this->updateTotal($index);
                }

                 


            }
          

        }
        
      
        

        


    }
    public function getServicePayments()
    {
        return [
            'b_hours_duration' => $this->b_hours_duration,
            'b_hours_rate' => 0,
            'a_hours_duration' => $this->a_hours_duration,
            'a_hours_rate' => 0,
            'expedited_duration' => $this->expedited_hours,
            'expedited_rate' => 0,
            'specialization_charges' => $this->booking_specializations,
        ];
    }

    public function resetFilters()
    {
        $this->provider_ids = [];
        $this->preferred_provider_ids = [];
        $this->tag_names = [];
        $this->service_type_ids = [];
        $this->services = [];
        $this->specializations = [];
        $this->gender = null;
        $this->ethnicity = null;
        $this->certifications = [];
        $this->accommodations = [];
        $this->distance = null;
        $this->search = null;

        $this->dispatchBrowserEvent('refreshSelects2');
    }


    public function mount($service_id = null, $panelType = 1)
    {
       $this->reMount($service_id,$panelType);
    }

    public function reMount($service_id,$panelType){
        $this->panelType = $panelType;
        $this->service_id = $service_id;
        
        $this->tags = Tag::all();
        $this->booking = Booking::where('id', $this->booking_id)->with('payment')->first();
        $booking_service = $this->booking->booking_services->where('services', $this->service_id)->first();
        if(is_null($booking_service))
            $booking_service = $this->booking->booking_services->first();
     
        $this->setupValues = SetupHelper::loadSetupValues($this->setupValues);
        if ($this->panelType != 3) {
            //setting filter defaults
           
            if ($booking_service)
                $this->specializations =     json_decode($booking_service->specialization, true);
            $service = ServiceCategory::find($service_id);
            $this->services = [$this->service_id];
            $this->accommodations = $service ? [$service->accommodations_id] : [];
            $this->booking_service=$booking_service;
           
        }

        if (!is_null($this->booking->payment)) {
            $this->paymentData = ["additional_label_provider" => $this->booking->payment->additional_label_provider, "additional_charge_provider" => $this->booking->payment->additional_charge_provider];
            $this->totalAmount = formatPayment($this->booking->payment['total_amount']);
        } else {
            $this->paymentData=["additional_label_provider" => '', "additional_charge_provider" => 0];
            $this->totalAmount = 'n/a';
        }

        if ($panelType == 2) {
            $this->assignedProviders  = BookingInvitationProvider::where('invitation_id', function ($query) {
                $query->from('booking_invitations')
                    ->where(['booking_id' => $this->booking_id, 'service_id' => $this->service_id])
                    ->select('id');
            })

                ->get()
                ->pluck('provider_id')
                ->toArray();
           
            if ($booking_service) {
                $this->limit = $booking_service->provider_count;
                $this->bookingService = $booking_service;
            }
        } else {
           

            if ($booking_service) {
                $this->limit = $booking_service->provider_count;
                $this->bookingService = $booking_service;

                $this->assignedProviders = BookingProvider::where(['booking_id' => $this->booking_id, 'booking_service_id' => $booking_service->id])
                    ->get()->toArray();
                if (!is_null($booking_service['service_calculations'])) {
                    $booking_service['service_calculations'] = json_decode($booking_service['service_calculations'], true);
                } else
                    $booking_service['service_calculations'] = [];
                if (isset($booking_service['service_calculations']['expedited_charges']) && count($booking_service['service_calculations']['expedited_charges'])) {
                    if ($booking_service['service_calculations']['expedited_charges']['charges'])
                        $this->expedited_hours = $booking_service['service_calculations']['expedited_charges']['hour'];
                }
                // dd($booking_service['service_calculations']);
                if (isset($booking_service['service_calculations']['specialization_charges']) && count($booking_service['service_calculations']['specialization_charges'])) {
                    $this->booking_specializations = $booking_service['service_calculations']['specialization_charges'];
                    foreach ($booking_service['service_calculations']['specialization_charges'] as $key => $specialization) {
                        $this->booking_specializations[$key]['label'] = $specialization['label'];
                        $this->booking_specializations[$key]['provider_charges'] = 0;
                    }
                }
                if ($booking_service['day_rate']) {
                    $this->durationLabel = 'day(s)';

                    if (key_exists('total_duration', $booking_service['service_calculations'])) {
                        $this->durationTotal = number_format($booking_service['service_calculations']['total_duration']['days'] + ($booking_service['service_calculations']['total_duration']['hours'] / 24) + ($booking_service['service_calculations']['total_duration']['mins'] / 60 / 24));
                    }
                    if (key_exists('business_hour_duration', $booking_service['service_calculations'])) {
                        $this->b_hours_duration =  round($booking_service['service_calculations']['business_hour_duration'] / 60 / 24, 1);
                    }
                    if (key_exists('after_hour_duration', $booking_service['service_calculations']))
                        $this->a_hours_duration =  round($booking_service['service_calculations']['after_hour_duration'] / 60 / 24, 1);
                } else {
                    $this->durationLabel = ' hour(s)';
                    if (key_exists('total_duration', $booking_service['service_calculations'])) {
                        $this->durationTotal = number_format(($booking_service['service_calculations']['total_duration']['hours']) + ($booking_service['service_calculations']['total_duration']['mins'] / 60 / 24), 2);
                    }
                    if (key_exists('business_hour_duration', $booking_service['service_calculations'])) {
                        $this->b_hours_duration = round($booking_service['service_calculations']['business_hour_duration'] / 60, 1);
                    }
                    if (key_exists('after_hour_duration', $booking_service['service_calculations']))
                        $this->a_hours_duration =  round($booking_service['service_calculations']['after_hour_duration'] / 60, 1);
                }
            }
        }
        $this->booking_service=$booking_service;
        
        $this->providers = $this->refreshProviders();
        $this->dispatchBrowserEvent('refreshSelects');
        $this->dispatchBrowserEvent('refreshSelects2');
    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
    public function save()
    {

        $this->validate();
        if ($this->limit && count($this->assignedProviders) <= $this->limit) {
            $booking_service = BookingServices::where(['services' => $this->service_id, 'booking_id' => $this->booking_id])->first();
            // delete existing records
            $prev = BookingProvider::where(['booking_id' => $this->booking_id, 'booking_service_id' => null])->orWhere(['booking_service_id' => $booking_service->id]);
            if ($prev->count()) {
                $previousAssigned = $prev->get()->pluck('provider_id')->toArray();
            } else
                $previousAssigned = [];

            $data = null;

            foreach ($this->assignedProviders as $provider) {
                $user          = User::find($provider['provider_id']);

                // remove user_id from to-be-deleted array 
                if (($key = array_search($user->id, $previousAssigned)) !== false) {
                    unset($previousAssigned[$key]);
                }

                if (!empty($user)) {

                    $templateId = getTemplate('Booking: Provider Assigned (manual-assign)', 'email_template');

                    if (!in_array($provider['provider_id'], $previousAssigned)) {
                        $params = [
                            'email'       =>  $user->email, //
                            'user'        =>  $user->name,
                            'user_id'     =>  $user->id,
                            'templateId'  =>  $templateId,
                            'booking_id'     => $this->booking_id,
                            'mail_type'   => 'booking',
                            'templateName' => 'New Assignment',
                            'bookingData' => $this->booking,
                            'booking_service_id' => $booking_service->id,



                        ];

                        sendTemplatemail($params);
                        callLogs($this->booking->id,'assign','assigned',"Provider '".$user->name."' assigned to booking");
                    }
                }

                $provider['booking_id'] = $this->booking_id;
                $provider['booking_service_id'] = $booking_service ? $booking_service->id : null;

                BookingProvider::updateOrCreate(
                    [
                        'booking_id' => $provider['booking_id'],
                        'provider_id' => $provider['provider_id'],
                        'booking_service_id' => $provider['booking_service_id'],
                    ],
                    $provider
                );
            }
            $status = 1;
            //sending notification for unassign
            foreach ($previousAssigned as $unassign_prov) {
                $user          = User::find($unassign_prov);

                $templateId = getTemplate('Booking: Provider Unassigned', 'email_template');

                if (isset($provider) && !in_array($provider['provider_id'], $previousAssigned)) {
                    $params = [
                        'email'       =>  $user->email, //
                        'user'        =>  $user->name,
                        'user_id'     =>  $user->id,
                        'templateId'  =>  $templateId,
                        'booking_id'     => $this->booking_id,
                        'mail_type'   => 'booking',
                        'templateName' => 'Unassigned From Assignment',
                        'bookingData' => $this->booking,
                        'booking_service_id' => $booking_service->id,



                    ];

                    sendTemplatemail($params);
                    callLogs($this->booking->id,'assign','assigned',"Provider '".$user->name."' unassigned from booking");
                }
            }
            BookingProvider::whereIn('provider_id', $previousAssigned)->delete();


            if ($this->limit == count($this->assignedProviders))
                $status = 2;
            Booking::where('id', $this->booking_id)->update(['status' => $status]);

            $this->dispatchBrowserEvent('close-assign-providers');
            
            $this->emit('showConfirmation', 'Providers have been assigned successfully');
        }
    }

    public function inviteProviders()
    {
        if (count($this->assignedProviders) > 0) {
            $this->showError = false;
            $bookingInv  = BookingInvitation::firstOrCreate(['booking_id' => $this->booking_id, 'service_id' => $this->service_id]);
            $booking_service = BookingServices::where(['services' => $this->service_id, 'booking_id' => $this->booking_id])->first();

            foreach ($this->assignedProviders as $provider_id) {
                $invData           = ['booking_id'   => $this->booking_id, 'deleted_at'   => null];
                $existed  = BookingInvitationProvider::where(['booking_id' => $this->booking_id, 'provider_id' => $provider_id, 'invitation_id' => $bookingInv->id]);
                if ($existed->count() == 0) {   //invitation doesnt exist 

                    $user          = User::find($provider_id);
                    if (!empty($user)) {
                        // $permission = $this->booking->bookingNotificationCheck("provider");
                        // if (!$permission) {
                        // $user_role_id =  2;
                        $templateId = getTemplate('Booking: Invitation', 'email_template');

                        $params = [
                            'email'       =>  $user->email, //Provider Assignment invite
                            'user'        =>  $user->name,
                            'user_id'     =>  $user->id,
                            'sms_template' =>  isset($sms_templateId) ? $sms_templateId : '',
                            'templateId'  =>  $templateId,
                            'booking_id'     =>  $this->booking_id,
                            'mail_type'   => 'booking',
                            'provider_id' => $user->id,
                            'phone'       =>  isset($user->users_detail) ? clean($user->users_detail->phone) : "",
                            'booking_service_id' => $booking_service->id,

                        ];
                        sendTemplatemail($params);

                        $invData['provider_id']     = $provider_id;
                        $invData['invitation_id']   = $bookingInv->id;
                    }
                }
                BookingInvitationProvider::updateOrCreate($invData, $invData);
            }

            $message = "Booking Invitations sent by" . Auth::user()->name;
            $logs = array(
                'action_by' => Auth::user()->id,
                'action_to' => $this->booking_id,
                'item_type' => 'Booking',
                'message' => $message,
                'type' => 'Assignment Invitation',
                'request_to' => '',
            );
            addLogs($logs);
            $this->dispatchBrowserEvent('close-assign-providers');
            $this->emit('showConfirmation', 'Providers have been invited successfully');
        } else
            $this->showError = true;
    }

    //add provider to list
    public function add($provider_id, $index)
    {

        $this->assignedProviders[] = [
            'provider_id' => $provider_id,
            'additional_label_provider' => $this->providersPayment[$index]['additional_payments']['additional_label_provider'],
            'additional_charge_provider' => $this->providersPayment[$index]['additional_payments']['additional_charge_provider'],
            "is_override_price" => 1,
            "additional_payments" => $this->providersPayment[$index]['additional_payments'],
            "service_payment_details" => $this->providersPayment[$index]['service_payment_details'],
            "total_amount" => $this->providersPayment[$index]['total_amount']

        ];
    }

    //remove provider from list
    public function remove($provider, $index)
    {
        foreach ($this->assignedProviders as $index => $assignedProvider) {
            if (isset($assignedProvider['provider_id']) && $assignedProvider['provider_id'] == $provider) {
                unset($this->assignedProviders[$index]);
                break; // Exit loop once the provider is found and removed
            }
        }
    }
}
