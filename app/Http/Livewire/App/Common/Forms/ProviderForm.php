<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\SetupValue;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Tenant\SystemRole;
use App\Models\Tenant\Team;
use App\Services\App\UploadFileService;
use App\Services\App\UserService;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use App\Models\Tenant\Tag;
use App\Models\Tenant\UserDetail;
use Livewire\WithFileUploads;

class ProviderForm extends Component
{
    use WithFileUploads;
    public $isProvider = false; // true when component called from provider panel
    public $user, $userid, $isAdd = true, $image = null, $teamNames = [], $label = "Add", $allTags = [], $tags = [];
    public $ethnicity;
    public $timezone;
    public $gender;
    public $languages;
    public  $counter = 0, $credentialId, $credentialLabel = "", $credentialDetails = false;

    public $documentActive, $serviceActive, $scheduleActive, $profileActive;
    public $schedule;
    public $component = 'profile';
    public $userdetail = [
        'gender_id', 'country' => "", 'timezone_id', 'ethnicity_id', 'title', 'address_line1' => "", 'address_line2' => "", 'zip', 'permission', 'city' => "", 'payment_settings',
        'state' => "", 'phone', 'education', 'note', 'user_introduction', 'user_experience', 'certificate', 'profile_pic' => null, 'user_introduction_file' => null, 'provider_type' => null
    ];

    public $setupValues = [
        'languages' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 1, 'setup_value_label', false, 'userdetail.language_id', '', 'language_id', 0]],
        'ethnicities' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 3, 'setup_value_label', false, 'userdetail.ethnicity_id', '', 'ethnicity_id', 1]],
        'gender' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 2, 'setup_value_label', false, 'userdetail.gender_id', '', 'gender_id', 2]],
        'timezones' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 4, 'setup_value_label', false, 'userdetail.timezone_id', '', 'timezone_id', 3]],
        'countries' => ['parameters' => ['Country', 'name', 'name', '', '', 'name', false, 'userdetail.country', '', 'country', 4]],
        'certifications' => ['parameters' => ['SetupValue', 'id', 'setup_value_label', 'setup_id', 8, 'setup_value_label', true, 'userdetail.certification', '', 'certification', 5]],
    ];


    public $inpersons = [[
        'hours' => '',
        'charges' => '',
        'duration' => '',
        'exclude_after_hours' => '',
        'exclude_closed_hours' => ''

    ]];
    public $invirtuals = [[
        'hours' => '',
        'charges' => '',
        'duration' => '',
        'exclude_after_hours' => '',
        'exclude_closed_hours' => ''

    ]];
    public $phones = [[
        'hours' => '',
        'charges' => '',
        'duration' => '',
        'exclude_after_hours' => '',
        'exclude_closed_hours' => ''

    ]];
    public $teleconfrences = [[
        'hours' => '',
        'charges' => '',
        'duration' => '',
        'exclude_after_hours' => '',
        'exclude_closed_hours' => ''

    ]];
    public $scheduled_inpersons = [[
        'hours' => '',
        'charges' => '',
        'cancellations' => '',
        'exclude-after-hours' => '',
        'modification' => '',
        'exclude_closed_hours' => '',
        'rescheduling' => '',
        'bill_service_minimum' => '',
        'duration' => '',

    ]];
    public $scheduled_virtules = [[
        'hours' => '',
        'charges' => '',
        'cancellations' => '',
        'exclude-after-hours' => '',
        'modification' => '',
        'exclude_closed_hours' => '',
        'rescheduling' => '',
        'bill_service_minimum' => '',
        'duration' => '',

    ]];
    public $scheduled_phones = [[
        'hours' => '',
        'charges' => '',
        'cancellations' => '',
        'exclude-after-hours' => '',
        'modification' => '',
        'exclude_closed_hours' => '',
        'rescheduling' => '',
        'bill_service_minimum' => '',
        'duration' => '',

    ]];
    public $scheduled_teleconfrences = [[
        'hours' => '',
        'charges' => '',
        'cancellations' => '',
        'exclude-after-hours' => '',
        'modification' => '',
        'exclude_closed_hours' => '',
        'rescheduling' => '',
        'bill_service_minimum' => '',
        'duration' => '',

    ]];
    public $speclizations = [[
        'in_person' => '',
        'virtual' => '',
        'phone' => '',
        'teleconference' => '',
        'hide_from_customers' => '',
        'hide_from_providers' => "",
        'duration' => ''
    ]];
    public $step = 1, $email_invitation = 1;
    protected $listeners = [
        'updateVal' => 'updateVal',
        'editRecord' => 'edit', 'stepIncremented',
        'updateSelectedTeams',
        'OpenProviderCredential', //for upload panel
        'openActiveCredentialModal',    //for document view modal
        'viewCredentialModal'
    ];
    public $providers;
    public $selectedTeams = [], $media_file = null, $provider_details = ['set_rate' => 'no', 'staff_provider_rate_type' => 'per_hour_rate', 'show_as_certified' => false];
    public function render()
    {


        //null check to avoid break
        if (!is_array($this->tags))
            $this->tags = [];

        $roles = SystemRole::get();
        return view('livewire.app.common.forms.provider-form', [
            'roles' => $roles
        ]);
    }
    public function mount(User $user)
    {


        $this->setupValues = SetupHelper::loadSetupValues($this->setupValues);
        $this->user = $user;

        // initialization 
        $this->userdetail['certification'] = [];
        $this->userdetail['favored_users'] = [];
        $this->userdetail['unfavored_users'] = [];
        $this->allTags = Tag::pluck('name')->toArray();

        $this->providers = User::query()
            ->where('status', 1)
            ->whereHas('roles', function ($query) {
                $query->where('role_id', 2);
            })
            ->select('id', 'name')
            ->get();

        if (request()->providerID != null) {

            $provider_id = request()->providerID;
            $user = User::with(['userdetail', 'teams', 'addresses'])->find($provider_id);

            $this->edit($user);
        }

        //edit from provider panel
        if ($this->isProvider) {
            $this->edit($user);
            $this->dispatchBrowserEvent('hideFields');
        }
        $this->userid = $user->id;
    }


    public function showList($message = "")
    {
        // Save data
        $this->emit('showList', $message);
    }

    public function switch($component)
    {
        $this->component = $component;
    }
    public function rules()
    {
        return [
            'user.first_name' => [
                'required',
                'string',
                'max:255'
            ],
            'user.last_name' => [
                'required',
                'string',
                'max:255'
            ],
            'user.user_dob' => [
                'nullable',
                'date',
                'date_format:m/d/Y',
                'before:today'
            ],
            'user.email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($this->user->id)
            ],
            'userdetail.user_introduction' => [
                'nullable',
                'string',
                'max:255'
            ],
            'userdetail.address_line1' => [
                'nullable',
                'string',
                'max:255'
            ],
            'userdetail.address_line2' => [
                'nullable',
                'string',
                'max:255'
            ],
            'userdetail.zip' => [
                'nullable',
                'string',
                'max:255'
            ],
            'userdetail.city' => [
                'nullable',
                'string',
                'max:255'
            ],
            'userdetail.state' => [
                'nullable',
                'string',
                'max:255'
            ],
            'userdetail.title' => [
                'nullable',
                'string',
                'max:255'
            ],
            'userdetail.education' => [
                'nullable',
                'string',
                'max:255'
            ],
            'userdetail.note' => [
                'nullable',
                'string',
                'max:255'
            ],
            'userdetail.phone' => [
                'nullable',
                'string',
                'max:255'
            ],
            'userdetail.ethnicity_id' => [
                'nullable'
            ],
            'userdetail.timezone_id' => [
                'nullable'
            ],
            'userdetail.gender_id' => [
                'nullable'
            ],
            'userdetail.country' => [
                'nullable'
            ],
            'userdetail.user_experience' => [
                'nullable', 'max:255'
            ],
            'image' => 'nullable|image|mimes:jpg,png,jpeg',
            'media_file' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv',

        ];
    }
    public function ProviderService($redirect = 1)
    {
        $rules = ['userdetail.provider_type' => 'nullable',];
        $this->validate($rules);

        if ($this->userdetail['provider_type'] != "staff_provider")    //setting values on BL
        {
            $this->provider_details['set_rate'] = 'no';
            $this->provider_details['staff_provider_rate'] = null;
            $this->provider_details['staff_provider_rate_type'] = null;
        }
        UserDetail::where('user_id', $this->user->id)->update(['provider_type' => $this->userdetail['provider_type'], 'provider_details' => json_encode($this->provider_details)]);

        if ($redirect) {
            $this->showList("Provider has been saved successfully");
            $this->user = new User;
        } else
            $this->setStep(3, 'documentActive', 'upload-document');
    }

    public function uploadDocument($redirect = 1)
    {

        if ($redirect) {
            $this->showList("Provider has been saved successfully");
            $this->user = new User;
        } else
            $this->setStep(4, 'scheduleActive', 'schedule');
    }

    public function updateTags()
    {
        foreach ($this->allTags as $tag) {
            Tag::firstOrCreate(['name' => $tag]);
        }
    }

    public function save($redirect = 1)
    {
        $this->validate();
        if ($this->user->user_dob) {
            $this->user->user_dob = Carbon::parse($this->user->user_dob);

        }
        $this->user->name = $this->user->first_name . ' ' . $this->user->last_name;
        $this->user->added_by = Auth::id();
        $this->user->status = 1;
        // process multiselect values
        $this->userdetail['certification'] = implode(', ', $this->userdetail['certification']);
        $this->userdetail['favored_users'] = implode(', ', $this->userdetail['favored_users']);
        $this->userdetail['unfavored_users'] = implode(', ', $this->userdetail['unfavored_users']);
        $this->userdetail['tags'] = json_encode($this->tags);

        $this->userdetail['provider_details'] = json_encode($this->provider_details);
        $this->updateTags();


        $fileService = new UploadFileService();

        if ($this->image != null) {
            $this->userdetail['profile_pic'] = $fileService->saveFile('profile_pic', $this->image, $this->userdetail['profile_pic']);
        }

        if ($this->media_file != null) {
            $this->userdetail['user_introduction_file'] = $fileService->saveFile('files', $this->media_file, $this->userdetail['user_introduction_file']);
        }
        $userService = new UserService;
        $this->user = $userService->createUser($this->user, $this->userdetail, 2, $this->email_invitation, [], $this->isAdd);

        if (!$this->isProvider)  //cant update teams from provider panel
            $userService->addProviderTeams($this->selectedTeams, $this->user);



        $this->userdetail['certification'] = explode(', ', $this->userdetail['certification']);
        $this->userdetail['favored_users'] = explode(', ', $this->userdetail['favored_users']);
        $this->userdetail['unfavored_users'] = explode(', ', $this->userdetail['unfavored_users']);
        if ($this->user->user_dob)
            $this->user->user_dob = Carbon::parse($this->user->user_dob)->format('m/d/Y');
      
        if ($redirect) {
            if ($this->isProvider) {
                $this->emit('showConfirmation', 'Profile updated successfully');
                $this->dispatchBrowserEvent('hideFields');
            } else {
                $this->showList("Provider has been saved successfully");
                $this->user = new User;
            }
        } else {
            $this->step = 2;
            //setting values for next
            $this->userid = $this->user->id;
            $this->dispatchBrowserEvent('refreshSelects');
        }
    }

    public function edit(User $user)
    {
        $this->user = $user;
        $user['userdetail']['certification'] = explode(", ", $user['userdetail']['certification']);
        $user['userdetail']['favored_users'] = explode(", ", $user['userdetail']['favored_users']);
        $user['userdetail']['unfavored_users'] = explode(", ", $user['userdetail']['unfavored_users']);
        $this->provider_details = json_decode($user['userdetail']['provider_details'], true);
        if (is_null($this->provider_details))
            $this->provider_details = ['set_rate' => 'no', 'staff_provider_rate_type' => 'per_hour_rate', 'show_as_certified' => false];

        if ($user['userdetail']['tags'] != null)
            $this->tags = json_decode($user['userdetail']['tags'], true);
        else
            $this->tags = [];


        $this->userdetail = $user['userdetail']->toArray();
        $this->label = "Edit";
        $this->user = $user;
        $this->isAdd = false;
        if ($this->user->user_dob)
            $this->user->user_dob = Carbon::parse($this->user->user_dob)->format('m/d/Y');
        //removing edit-user from provider list
        $this->providers = $this->providers->filter(function ($provider, $key) {
            return $provider->id != $this->user->id;
        });

        $this->updateSelectedTeams($this->user->teams()->allRelatedIds());
        if ($this->userdetail['provider_type'] == 'contract_provider') {
            $this->provider_details['set_rate'] = 'yes';
        }
        // dd($this->use)
        // $this->dispatchBrowserEvent('refreshSelects');

    }

    public function getProviderSchedule()
    {
        //reinit schedule
        $providerSchedule = Schedule::where('model_id', $this->user->id)->where('model_type', 3)->get()->first();
        if (!is_null($providerSchedule)) {
            $this->schedule = $providerSchedule;
        } else {
            $this->schedule = new Schedule;
            $this->schedule->model_type = 3;
            $this->schedule->working_days = json_encode([]);
            $this->schedule->timezone_id = 0;

            $this->schedule->model_id = $this->user->id;
            $this->schedule->save();
        }


        $this->scheduleActive = "active";

        $this->switch('schedule');

        $this->emit('getRecord', $this->schedule->id, true);
    }

    public function saveSchedule()
    {
        $this->emit('saveSchedule');
        $this->showList("Company has been saved successfully");
        $this->user = new User;
        $this->schedule = new Schedule;
    }
    public function setStep($step, $tabName, $component)
    {
        $tabs = ['profileActive', 'serviceActive', 'scheduleActive', 'documentActive'];
        foreach ($tabs as $key)
            $this->$key = '';
        $this->step = $step;
        $this->$tabName = "active";
        $this->switch($component);
        if ($this->step == 4)
            $this->getProviderSchedule();
        if ($this->step == 1) {
            if ($this->user->user_dob)
                $this->user->user_dob = Carbon::parse($this->user->user_dob)->format('m/d/Y');
        }

        $this->dispatchBrowserEvent('refreshSelects');
    }

    public function stepIncremented()
    {

        $this->step = $this->step + 1;
        if ($this->step == 3) {
            $this->serviceActive = 'active';
            $this->documentActive = '';
        }
    }

    public function updateVal($attrName, $val)
    {

        if ($attrName == 'user_dob') {
            $this->user['user_dob'] = $val;
        } elseif ($attrName == 'tags') {
            $this->tags = explode(',', $val);
            $this->allTags = array_unique(array_merge($this->allTags, $this->tags));
            $this->allTags = array_values($this->allTags);
        } elseif ($attrName == 'set_rate') {
            $this->provider_details['set_rate'] = $val;
        } elseif ($attrName == 'staff_provider_rate_type') {
            $this->provider_details['staff_provider_rate_type'] = $val;
        } elseif ($attrName == 'travel_rate_unit') {
            $this->provider_details['travel_rate_unit'] = $val;
        } elseif ($attrName == 'country') {
            $this->userdetail['country'] = $val;
        } else
            $this->userdetail[$attrName] = $val;

        if ($this->isProvider) {
            $this->dispatchBrowserEvent('hideFields');
        }
    }
    public function addscheduledInPerson()
    {
        $this->scheduled_inpersons[] = [
            'hours' => '',
            'charges' => '',
            'cancellations' => '',
            'exclude-after-hours' => '',
            'modification' => '',
            'exclude_closed_hours' => '',
            'rescheduling' => '',
            'bill_service_minimum' => '',
            'duration' => '',
        ];
    }
    public function addscheduledVirtual()
    {
        $this->scheduled_virtules[] = [
            'hours' => '',
            'charges' => '',
            'cancellations' => '',
            'exclude-after-hours' => '',
            'modification' => '',
            'exclude_closed_hours' => '',
            'rescheduling' => '',
            'bbill_service_minimum' => '',
            'duration' => '',
        ];
    }
    public function addscheduledPhone()
    {
        $this->scheduled_phones[] = [
            'hours' => '',
            'charges' => '',
            'cancellations' => '',
            'exclude-after-hours' => '',
            'modification' => '',
            'exclude_closed_hours' => '',
            'rescheduling' => '',
            'bill_service_minimum' => '',
            'duration' => '',
        ];
    }
    public function addscheduledTeleconference()
    {
        $this->scheduled_teleconfrences[] = [
            'hours' => '',
            'charges' => '',
            'cancellations' => '',
            'exclude-after-hours' => '',
            'modification' => '',
            'exclude_closed_hours' => '',
            'rescheduling' => '',
            'bill_service_minimum' => '',
            'duration' => '',
        ];
    }
    public function addInPerson()
    {
        $this->inpersons[] = [
            'hours' => '',
            'charges' => '',
            'duration' => '',
            'exclude-after-hours' => '',
            'exclude_closed_hours' => ''
        ];
    }
    public function addInVirtual()
    {
        $this->invirtuals[] = [
            'hours' => '',
            'charges' => '',
            'duration' => '',
            'exclude-after-hours' => '',
            'exclude_closed_hours' => ''
        ];
    }
    public function addPhone()
    {
        $this->phones[] = [
            'hours' => '',
            'charges' => '',
            'duration' => '',
            'exclude-after-hours' => '',
            'exclude_closed_hours' => ''
        ];
    }
    public function addTeleconference()
    {
        $this->teleconfrences[] = [
            'hours' => '',
            'charges' => '',
            'duration' => '',
            'exclude-after-hours' => '',
            'exclude_closed_hours' => ''
        ];
    }
    public function addSpeclizations()
    {
        $this->speclizations[] = [
            'in_person' => '',
            'virtual' => '',
            'phone' => '',
            'teleconference' => '',
            'hide_from_customers' => '',
            'hide_from_providers' => "",
            'duration' => ''
        ];
    }
    public function removeInPerson($index)
    {
        unset($this->inpersons[$index]);
        $this->inpersons = array_values($this->inpersons);
    }
    public function removeInVirtual($index)
    {
        unset($this->invirtuals[$index]);
        $this->invirtuals = array_values($this->invirtuals);
    }
    public function removePhone($index)
    {
        unset($this->phones[$index]);
        $this->phones = array_values($this->phones);
    }
    public function removeteleConference($index)
    {
        unset($this->teleconfrences[$index]);
        $this->teleconfrences = array_values($this->teleconfrences);
    }
    public function removescheduledInPerson($index)
    {
        unset($this->scheduled_inpersons[$index]);
        $this->scheduled_inpersons = array_values($this->scheduled_inpersons);
    }
    public function removescheduledVirvual($index)
    {
        unset($this->scheduled_virtules[$index]);
        $this->scheduled_virtules = array_values($this->scheduled_virtules);
    }
    public function removescheduledPhone($index)
    {
        unset($this->scheduled_phones[$index]);
        $this->scheduled_phones = array_values($this->scheduled_phones);
    }
    public function removescheduledTeleconference($index)
    {
        unset($this->scheduled_teleconfrences[$index]);
        $this->scheduled_teleconfrences = array_values($this->scheduled_teleconfrences);
    }
    public function removeSpeclization($index)
    {
        unset($this->speclizations[$index]);
        $this->speclizations = array_values($this->speclizations);
    }

    //modal functions

    public function updateSelectedTeams($selectedTeams)
    {
        $this->selectedTeams = $selectedTeams;
        $this->teamNames = Team::whereIn('id', $selectedTeams)->pluck('name');
    }

    public function updateData()
    {
        $this->emit('setData', $this->selectedTeams);
    }

    public function OpenProviderCredential($credentialId, $credentialLabel)
    {
        if ($this->counter == 0) {
            $this->credentialId = 0;
            $this->credentialLabel = $credentialLabel;
            $this->dispatchBrowserEvent('open-credential', ['credentialId' => $credentialId, 'credentialLabel' => $credentialLabel]);
            $this->counter = 1;
            $this->credentialDetails = true;
        } else {
            $this->credentialId = $credentialId;
            $this->counter = 0;
        }
        $this->dispatchBrowserEvent('refreshSelects');
    }
    public function openActiveCredentialModal($user_doc_id)
    {
        $this->emit('openActiveCredential', $user_doc_id);
    }


    // open view document modal from my-drive
    public function viewCredentialModal($doc_id)
    {
        $this->emit('viewCredential', $doc_id);
    }


    public function setRate()
    {
        if ($this->userdetail['provider_type'] == 'contract_provider') {
            $this->provider_details['set_rate'] = 'yes';
        }


        $this->emit('updateSetRate', $this->provider_details['set_rate']);
    }
}
