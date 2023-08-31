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
use App\Models\Tenant\UserDetail;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

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
    public $service_id = null, $booking_id = null;
    protected $listeners = ['showList' => 'resetForm', 'refreshFilters', 'saveAssignedProviders' => 'save', 'updateVal', 'inviteProviders'];
    public $assignedProviders = [], $limit = null, $booking, $showError = false;

    public function updateVal($attrName, $val)
    {
        $this->$attrName = $val;
    }

    public function render()
    {
        $query = User::where('users.status', 1)
            ->whereHas('roles', function ($query) {
                $query->wherein('role_id', [2]);
            })->join('user_details', function ($userdetails) {
                $userdetails->on('user_details.user_id', '=', 'users.id');
            });
        if ($this->panelType == 3) {
            $query->whereIn('users.id', function ($q)  {
                $q->from('booking_invitation_providers')
                ->where('booking_id', $this->booking_id)
                ->select('provider_id');
            });
        }
        $query->select([
            'users.id',
            'users.name',
            'users.email',
            'user_details.phone', 'user_details.profile_pic', 'user_details.tags',
            'users.status'
        ]);

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
            $query->where(function ($query) use ($services) {
                foreach ($services as $service) {
                    $query->whereHas('services', function ($query) use ($service) {
                        $query->where('provider_accommodation_services.status', '=', 1)->where('service_id', $service);
                    });
                }
            });
        }
        if (count($this->accommodations)) {
            $accommodations = $this->accommodations;
            $query->where(function ($query) use ($accommodations) {
                foreach ($accommodations as $accommodation) {
                    $query->whereHas('accommodations', function ($query) use ($accommodation) {
                        $query->where('provider_accommodation_services.status', '=', 1)->where('accommodation_id', $accommodation);
                    });
                }
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
                        $query->where('service_type', 'LIKE', "%$item%");
                    }
                });
            });
        }
        if (count($this->specializations)) {
            $specializations = $this->specializations;
            // dd($this->services);
            $query->whereHas('services', function ($query) use ($specializations) {
                $query->where('provider_accommodation_services.status', '=', 1)
                    ->whereHas('specializations', function ($query) use ($specializations) {
                        $query->whereIn('specialization_id', $specializations);
                    }, '=', count($specializations));
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


        return view('livewire.app.common.panels.booking-details.assign-providers', [
            'providers' => $query->get()
        ]);
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
        } else if ($name == "tags_selected") {
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

        $this->dispatchBrowserEvent('refreshSelects2');
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
        if ($panelType == 2) {
            $this->assignedProviders  = BookingInvitationProvider::where('invitation_id',function($query){
                $query->from('booking_invitations')
                ->where(['booking_id'=>$this->booking_id,'service_id'=>$this->service_id])
                ->select('id');
            })
            
            ->get()->pluck('provider_id')->toArray();
        } else {
            $booking_service = $this->booking->booking_services->where('services', $this->service_id)->first();

            if ($booking_service) {
                $this->limit = $booking_service->provider_count;
                $this->assignedProviders = BookingProvider::where(['booking_id' => $this->booking_id, 'booking_service_id' => $booking_service->id])
                    ->get()->pluck('provider_id')->toArray();
            }
        }
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
            BookingProvider::where(['booking_id' => $this->booking_id, 'booking_service_id' => null])->orWhere(['booking_service_id' => $booking_service->id])->delete();
            $data = null;
            foreach ($this->assignedProviders as $provider) {
                $data['provider_id'] = $provider;
                $data['booking_id'] = $this->booking_id;
                $data['booking_service_id'] = $booking_service ? $booking_service->id : null;


                BookingProvider::create($data);
            }

            if($this->limit == count($this->assignedProviders))
                Booking::where('id',$this->booking_id)->update(['status'=>2]);

            $this->dispatchBrowserEvent('close-assign-providers');
            $this->emit('showConfirmation', 'Providers have been assigned successfully');
        }
    }

    public function inviteProviders()
    {
        if (count($this->assignedProviders) > 0) {
            $this->showError = false;
            
            $bookingInv  = BookingInvitation::firstOrCreate(['booking_id' => $this->booking_id, 'service_id' => $this->service_id]);
            foreach ($this->assignedProviders as $provider_id) {
                $invData           = ['booking_id'   => $this->booking_id, 'deleted_at'   => null];
                $existed  = BookingInvitationProvider::where(['booking_id' => $this->booking_id, 'provider_id' => $provider_id, 'invitation_id' => $bookingInv->id]);
                if ($existed->count() == 0) {   //invitation doesnt exist 

                    $user          = User::find($provider_id);
                    if (!empty($user)) {
                        // $permission = $bookingData->bookingNotificationCheck("provider");
                        // if (!$permission) {
                        //     $user_role_id =  $this->role->getProviderId();
                        //     $templateId = Helper::getTemplate('direct-assignment-request-invitation', $user_role_id, 'email_template');
                        //     $sms_templateId = Helper::getTemplate('direct-assignment-request-invitation', $user_role_id, 'sms_template');
                        //     $notification_templateId = Helper::getTemplate('direct-assignment-request-invitation', $user_role_id, 'notification_template');

                        //     $params = [
                        //         'email'       =>  $user->email, //Provider Assignment invite
                        //         'user'        =>  $user->name,
                        //         'user_id'     =>  $user->id,
                        //         'sms_template' =>  $sms_templateId,
                        //         'templateId'  =>  $templateId,
                        //         'item_id'     =>  $booking_id,
                        //         'mail_type'   => 'booking',
                        //         'provider_id' => $user->id,
                        //         'phone'       =>  isset($user->users_detail) ? clean($user->users_detail->phone) : "",

                        //     ];
                        //     Helper::sendTemplatemail($params);

                        //     $noti = [
                        //         'user_id'     =>  $user->id,
                        //         'templateId'  =>  $notification_templateId,
                        //         'item_id'     => $booking_id,
                        //         'item_type'   => 'booking',
                        //         // 'provider_id' =>  auth()->user()->id,
                        //         // 'provider'    =>  auth()->user()->name,
                        //     ];
                        //     Helper::save_notification($noti);
                        // }
                        $invData['provider_id']     = $provider_id;
                        $invData['invitation_id']   = $bookingInv->id;
                        BookingInvitationProvider::updateOrCreate($invData, $invData);
                    }
                }
            }
            $this->dispatchBrowserEvent('close-assign-providers');
            $this->emit('showConfirmation', 'Providers have been invited successfully');
        } else
            $this->showError = true;
    }

    //add provider to list
    public function add($provider_id)
    {
        $this->assignedProviders[] = $provider_id;
    }

    //remove provider from list
    public function remove($provider_id)
    {
        unset($this->assignedProviders[array_search($provider_id, $this->assignedProviders)]);
    }
}
