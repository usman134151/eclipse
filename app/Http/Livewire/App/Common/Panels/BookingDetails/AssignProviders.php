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
    public $tags, $search;
    public $service_id = null, $booking_id = null, $custom_rates;
    protected $listeners = ['showList' => 'resetForm', 'refreshFilters', 'saveAssignedProviders' => 'save', 'updateVal', 'inviteProviders'];
    public $assignedProviders = [], $limit = null, $booking, $showError = false;
    public $paymentData = ["additional_label_provider" => '', "additional_charge_provider" => 0];
    public $providers, $providersPayment, $bookingService, $durationLabel, $durationTotal = 0, $totalAmount;
    public $b_hours_duration = 0, $a_hours_duration = 0;
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
        // dd($name,$value);
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
                        // $query->orWhereRaw("FIND_IN_SET($item, service_type)");
                        $query->where('service_categories.service_type', 'LIKE', "%$item%");
                    }
                });
            });
        }
        if (is_array($this->specializations) && count($this->specializations)) {
            $specializations = $this->specializations;
            // dd($this->services);
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
        if ($this->panelType != 2) {

            //charges caculations 
            //end of charges calculations 
            $this->providersPayment = [];
            foreach ($providers as $index => &$provider) {

                //fetch and set custom rates
                $service = $this->booking->booking_services->where('services', $this->service_id)->first();
                if ($service->service->rate_status == 1) {
                    $fetch[0] = 'hours_price' . $this->serviceTypes[$service->service_types]['postfix'] . ' as price';
                } elseif ($service->service->rate_status == 2) {
                    $fetch[0] = 'day_rate_price' . $this->serviceTypes[$service->service_types]['postfix'] . ' as price';
                } elseif ($service->service->rate_status == 4) {
                    $fetch[0] = 'fixed_rate' . $this->serviceTypes[$service->service_types]['postfix'] . ' as price';
                }
                $fetch[1] = 'emergency_hour' . $this->serviceTypes[$service->service_types]['postfix'] . ' as emergency';
                // dd($fetch, $service->service_types);
                $this->custom_rates[$provider['id']]['standard'] = StandardRate::where(['accommodation_service_id' => $this->service_id, 'user_id' => $provider['id']])->select($fetch)->first();
                $e_rates = null;

                if (
                    isset($this->custom_rates[$provider['id']])
                    && isset($this->custom_rates[$provider['id']]['standard'])
                    && isset($this->custom_rates[$provider['id']]['standard']['emergency'])
                ) {
                    $e_rates = json_decode($this->custom_rates[$provider['id']]['standard']['emergency'], true);
                }
                //    dd($this->custom_rates[$provider['id']]['standard']['emergency']);

                if (!is_null($service->specialization) && !is_array($service->specialization))
                    $specializations = json_decode($service->specialization, true);
                if (is_array($service->specialization))
                    foreach ($specializations as $i => $s) {

                        $s_rates = SpecializationRate::where(['accommodation_service_id' => $this->service_id, 'user_id' => $provider['id'], 'specialization' => $s])
                            ->select('specialization_rate' . $this->serviceTypes[$service->service_types]['postfix'] . ' as price')->first();
                        $this->custom_rates[$provider['id']]['specialization'][$i] = $s_rates ? json_decode($s_rates->price, true)[0] : null;
                        $this->custom_rates[$provider['id']]['specialization'][$i]['s_name'] =  Specialization::find($s)->name;
                    }

                $providerCharges = $this->getProviderCharges($provider['id']);
                $this->providersPayment[$index] = [
                    'additional_label_provider' => $this->paymentData['additional_label_provider'],
                    'additional_charge_provider' => $this->paymentData['additional_charge_provider'],
                    "is_override_price" => 1,
                    "business_hours_override_price" => $providerCharges['business_hours_override_price'],
                    "after_hours_override_price" => $providerCharges['after_hours_override_price'],
                    'total_amount' => ($providerCharges['business_hours_override_price'] * $this->b_hours_duration) + $providerCharges['after_hours_override_price'] * $this->a_hours_duration
                ];
                foreach ($this->assignedProviders as &$aProvider) {
                    if ($aProvider['provider_id'] == $provider['id']) {
                        $this->providersPayment[$index] = $aProvider; //overriding if already assigned

                        if (isset($aProvider['total_amount']) && $aProvider['total_amount'] == "0.00") {

                            $aProvider['total_amount'] = $this->updateTotal($index);
                        }
                    }
                }
            }
        }

        return $this->providers;
    }
    public function messages()
    {
        return [
            'providersPayment.*.business_hours_override_price.numeric' => 'Average rate should be a number',
            'providersPayment.*.after_hours_override_price.numeric' => 'Average rate should be a number',

        ];
    }
    public function rules()
    {
        return [
            // 'providersPayment.*.override_price' => 'nullable|numeric',
            'providersPayment.*.business_hours_override_price' => 'nullable|numeric',
            'providersPayment.*.after_hours_override_price' => 'nullable|numeric',

        ];
    }
    public function updateTotal($index)
    {
        $this->validate();
        // dd($this->providersPayment[$index]['override_price']);
        if (!isset($this->providersPayment[$index]['business_hours_override_price']) || trim($this->providersPayment[$index]['business_hours_override_price']) == '')
            $this->providersPayment[$index]['business_hours_override_price'] = 0;
        if (!isset($this->providersPayment[$index]['after_hours_override_price']) || trim($this->providersPayment[$index]['after_hours_override_price']) == '')
            $this->providersPayment[$index]['after_hours_override_price'] = 0;
        // $this->providersPayment[$index]['total_amount'] = number_format($this->providersPayment[$index]['override_price'] * $this->durationTotal, 2, '.', '');
        $this->providersPayment[$index]['total_amount'] = number_format(($this->providersPayment[$index]['business_hours_override_price'] * $this->b_hours_duration) + ($this->providersPayment[$index]['after_hours_override_price'] * $this->a_hours_duration), 2, '.', '');

        if (!is_null($this->providersPayment[$index]['additional_charge_provider']) && is_numeric($this->providersPayment[$index]['additional_charge_provider']))
            $this->providersPayment[$index]['total_amount'] = $this->providersPayment[$index]['total_amount'] + $this->providersPayment[$index]['additional_charge_provider'];
        $pid = $this->providers[$index]['id'];
        foreach ($this->assignedProviders as &$aProvider) {
            if ($aProvider['provider_id'] == $pid) {

                $aProvider['total_amount'] = $this->providersPayment[$index]['total_amount'];
                // $aProvider['override_price'] = $this->providersPayment[$index]['override_price'];
                $aProvider['after_hours_override_price'] = $this->providersPayment[$index]['after_hours_override_price'];
                $aProvider['business_hours_override_price'] = $this->providersPayment[$index]['business_hours_override_price'];
                $aProvider['additional_label_provider'] = $this->providersPayment[$index]['additional_label_provider'];
                $aProvider['additional_charge_provider'] = $this->providersPayment[$index]['additional_charge_provider'];

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
    public function getProviderCharges($providerId)
    {
        //checking if provider is configured for service
        return [
            'charges' => 0,
            //  'override_price' => 0,
            'business_hours_override_price' => 0, 'after_hours_override_price' => 0
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
        $this->panelType = $panelType;
        $this->service_id = $service_id;
        $this->tags = Tag::all();
        $this->booking = Booking::where('id', $this->booking_id)->first();
        $this->setupValues = SetupHelper::loadSetupValues($this->setupValues);
        if ($this->panelType != 3) {
            //setting filter defaults
            $booking_service = $this->booking->booking_services->where('services', $this->service_id)->first();
            if ($booking_service)
                $this->specializations =     json_decode($booking_service->specialization, true);
            $service = ServiceCategory::find($service_id);
            $this->services = [$this->service_id];
            $this->accommodations = $service ? [$service->accommodations_id] : [];
        }

        if (!is_null($this->booking->payment)) {
            $this->paymentData = ["additional_label_provider" => $this->booking->payment->additional_label_provider, "additional_charge_provider" => $this->booking->payment->additional_charge_provider];
            $this->totalAmount = formatPayment($this->booking->payment['total_amount']);
        } else {
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
                $booking_service = $this->booking->booking_services->where('services', $this->service_id)->first();

                if ($booking_service) {
                    $this->limit = $booking_service->provider_count;
                    $this->bookingService = $booking_service;
                }
        } else {
            $booking_service = $this->booking->booking_services->where('services', $this->service_id)->first();

            if ($booking_service) {
                $this->limit = $booking_service->provider_count;
                $this->bookingService = $booking_service;

                $this->assignedProviders = BookingProvider::where(['booking_id' => $this->booking_id, 'booking_service_id' => $booking_service->id])
                    ->get()->toArray();
                if (!is_null($booking_service['service_calculations'])) {
                    $booking_service['service_calculations'] = json_decode($booking_service['service_calculations'], true);
                } else
                    $booking_service['service_calculations'] = [];
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

        if ($this->limit && count($this->assignedProviders) <= $this->limit) {
            // $booking = Booking::where('id', $this->booking_id)->first();
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
                    }
                }

                $provider['booking_id'] = $this->booking_id;
                $provider['booking_service_id'] = $booking_service ? $booking_service->id : null;
                // dd($this->providersPayment);

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

                if (!in_array($provider['provider_id'], $previousAssigned)) {
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
            'additional_label_provider' => $this->providersPayment[$index]['additional_label_provider'],
            'additional_charge_provider' => $this->providersPayment[$index]['additional_charge_provider'],
            "is_override_price" => 1,
            "business_hours_override_price" => $this->providersPayment[$index]['business_hours_override_price'],
            "after_hours_override_price" => $this->providersPayment[$index]['after_hours_override_price'],
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
