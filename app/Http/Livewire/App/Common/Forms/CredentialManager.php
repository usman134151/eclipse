<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\Credentail;
use App\Models\Tenant\Documents;
use App\Models\Tenant\ServiceCategory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Image;


class CredentialManager extends Component
{

    use WithFileUploads;

    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
    public $documents = [[
        'upload_only' => '',
        'acknowledge_document' => '',
        'sign_document' => '',
        'set_expiry' => '',
        'user_set_expiry' => '',
        'expiration_within' => '',
        'formFile' => ''
    ]];
    public $accommodations = [];
    public $accommodation_list = [];
    public $services = [];
    public $services_list = [];
    public $accommodation_search;
    public $service_search;
    public $title = null;
    public $attach_tags;
    public $attach_specializations;
    public $attach_sccommodation_services;
    public $deactivate_associated_service;
    public $reset_provider_priority;
    public $hold_all_assignment_invitations;
    public $lenient;
    public $selected_accommodations_services = [];
    public $selected_services = [];
    public $selected_accommodations = [];
    public $messageFormSubmit;



    public function render()
    {
        return view('livewire.app.common.forms.credential-manager');
    }

    public function mount()
    {
        $this->accommodations = Accommodation::select('id', 'name')->get()->toArray();
        $this->accommodation_list = $this->accommodations;
        
    }
    public function showList()
    {
        $this->emit('showList');
    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
    public function addDocumentType()
    {
        $this->documents[] = [
            'upload_only' => '',
            'acknowledge_document' => '',
            'sign_document' => '',
            'set_expiry' => '',
            'user_set_expiry' => '',
            'expiration-within' => '',
            'expiration-within' => '',
            'formFile' => ''
        ];
    }
    public function removeDocumentType($index)
    {
        unset($this->documents[$index]);
        $this->documents = array_values($this->documents);
    }

    // search in accommodation list
    public function searchInAccommodation()
    {

        $accommodation = $this->accommodations;

        if (!empty($accommodation) && !empty($this->selected_accommodations_services)) {
            foreach ($accommodation as $key => $value) {
                if (isset($this->selected_accommodations_services[$key]) && isset($this->selected_accommodations_services[$key]['accommodations']) && !empty($this->selected_accommodations_services[$key]['accommodations']) && $this->selected_accommodations_services[$key]['accommodations']['id'] == $value['id']) {
                    unset($accommodation[$key]);
                }
            }
        }

        $searchResults = $this->searchArray($accommodation, $this->accommodation_search, 'name');
        $this->accommodation_list = $searchResults;
        // $this->filterAccommodationService();
    }
    // search in services list
    public function searchInServices()
    {

        $service = $this->services;
        if (!empty($service) && !empty($this->selected_accommodations_services)) {
            foreach ($service as $key => $value) {
                if (isset($this->selected_accommodations_services[$key]) && isset($this->selected_accommodations_services[$key]['services']) && !empty($this->selected_accommodations_services[$key]['services']) && $this->selected_accommodations_services[$key]['services']['id'] == $value['id']) {
                    unset($service[$key]);
                }
            }
        }

        $searchResults = $this->searchArray($service, $this->service_search, 'name');
        $this->services_list = $searchResults;
        // $this->filterAccommodationService();
    }

    // Search function
    public function searchArray($array, $searchValue, $searchKey = null)
    {
        $results = [];

        foreach ($array as $item) {
            if ($searchKey && isset($item[$searchKey]) && stripos($item[$searchKey], $searchValue) !== false) {
                $results[] = $item;
            } else {
                foreach ($item as $value) {
                    if (stripos($value, $searchValue) !== false) {
                        $results[] = $item;
                        break;
                    }
                }
            }
        }

        return $results;
    }
    // select accommodations
    public function selectAccommodation($index, $id, $name)
    {
        $this->selected_accommodations[$index]['id'] = $id;
        $this->selected_accommodations[$index]['name'] = $name;
        unset($this->accommodation_list[$index]);
        $this->services = ServiceCategory::select('id', 'name')->whereIn('accommodations_id', array_column($this->selected_accommodations, 'id'))->get()->toArray();
        $this->services_list = $this->services;

        $this->filterAccommodationService();

        $this->arrayMerge();
    }
    // select all accommodations
    public function selectAllAccommodation()
    {
        $this->selected_accommodations = [];
        $this->selected_accommodations = $this->accommodation_list;
        $this->accommodation_list = [];

        $this->arrayMerge();
    }

    // select services
    public function selectServices($index, $id, $name)
    {
        $this->selected_services[$index]['id'] = $id;
        $this->selected_services[$index]['name'] = $name;
        unset($this->services_list[$index]);

        $this->arrayMerge();
    }
    // select all services
    public function selectAllServices()
    {
        $this->selected_services = [];
        $this->selected_services = $this->services_list;
        $this->services_list = [];

        $this->arrayMerge();
    }

    // array merge accommodation and service
    public function arrayMerge()
    {

        if (!empty($this->selected_accommodations) && count($this->selected_accommodations) >= count($this->selected_services)) {
            foreach ($this->selected_accommodations as $key => $value) {

                $this->selected_accommodations_services[$key]['accommodations']['id'] = $value['id'];
                $this->selected_accommodations_services[$key]['accommodations']['name'] = $value['name'];
                if (!empty($this->selected_services) && isset($this->selected_services[$key])) {
                    $this->selected_accommodations_services[$key]['services']['id'] = $this->selected_services[$key]['id'];
                    $this->selected_accommodations_services[$key]['services']['name'] = $this->selected_services[$key]['name'];
                }
            }
        } else if (!empty($this->selected_services) && count($this->selected_services) >= count($this->selected_accommodations)) {
            foreach ($this->selected_services as $key => $value) {

                $this->selected_accommodations_services[$key]['services']['id'] = $value['id'];
                $this->selected_accommodations_services[$key]['services']['name'] = $value['name'];
                if (!empty($this->selected_accommodations) && isset($this->selected_accommodations[$key])) {
                    $this->selected_accommodations_services[$key]['accommodations']['id'] = $this->selected_accommodations[$key]['id'];
                    $this->selected_accommodations_services[$key]['accommodations']['name'] = $this->selected_accommodations[$key]['name'];
                }
            }
        }
    }
    // remove selected accommodation services
    public function removeSelectedAccommodationService($index)
    {
        unset($this->selected_accommodations_services[$index]);
        unset($this->selected_accommodations[$index]);
        unset($this->selected_services[$index]);
        $this->services = ServiceCategory::select('id', 'name')->whereIn('accommodations_id', array_column($this->selected_accommodations, 'id'))->get()->toArray();
        $this->services_list = $this->services;
        if(empty($this->selected_accommodations)){
            $this->selected_accommodations_services = [];
        }
        $this->filterAccommodationService();
    }
    // filter accommodations and services list from selected accommodations
    public function filterAccommodationService()
    {
        $accommodation = $this->accommodations;
        $service = $this->services;
        if (!empty($accommodation) && !empty($this->selected_accommodations_services)) {
            foreach ($accommodation as $key => $value) {
                if (isset($this->selected_accommodations_services[$key]) && isset($this->selected_accommodations_services[$key]['accommodations']) && !empty($this->selected_accommodations_services[$key]['accommodations']) && $this->selected_accommodations_services[$key]['accommodations']['id'] == $value['id']) {
                    unset($accommodation[$key]);
                }
            }
        }

        if (!empty($service) && !empty($this->selected_accommodations_services)) {
            foreach ($service as $key => $value) {
                if (isset($this->selected_accommodations_services[$key]) && isset($this->selected_accommodations_services[$key]['services']) && !empty($this->selected_accommodations_services[$key]['services']) && $this->selected_accommodations_services[$key]['services']['id'] == $value['id']) {
                    unset($service[$key]);
                }
            }
        }

        $this->accommodation_list = $accommodation;
        if(!empty($accommodation)){
            $this->services_list = $service;
        }else{
            $this->services_list = [];
        }
    }

    public function formSubmit()
    {

        $validator = $this->validate([
            'title' => 'required'
        ]);


        $credentail = new Credentail();

        $credentail->title = $this->title;
        $credentail->attach_tags = $this->attach_tags;
        $credentail->attach_specializations = $this->attach_specializations;
        $credentail->attach_sccommodation_services = $this->attach_sccommodation_services;
        $credentail->deactivate_associated_service = $this->deactivate_associated_service;
        $credentail->reset_provider_priority = $this->reset_provider_priority;
        $credentail->hold_all_assignment_invitations = $this->hold_all_assignment_invitations;
        $credentail->lenient = $this->lenient;
        // $credentail->added_by = 1; //
        $credentail->save();
        $credential_id = $credentail->id;
        
        // sync credentials and accommodations
        $credentail->accommodations()->sync(array_column($this->selected_services, 'id'));
        // sync credentials and services category
        $credentail->services()->sync(array_column($this->selected_accommodations, 'id'));

        $document_array = [];
        if (!empty($this->documents)) {
            foreach ($this->documents as $key => $value) {

                $imageName = '';
                if (isset($value['formFile']) && !empty($value['formFile'])) {
                    $imageName = $value['formFile']->store('public');
                }
                $document_array[$key]['upload_only'] = $value['upload_only'];
                $document_array[$key]['acknowledge_document'] = $value['acknowledge_document'];
                $document_array[$key]['sign_document'] = $value['sign_document'];
                $document_array[$key]['set_expiry'] = $value['set_expiry'];
                $document_array[$key]['user_set_expiry'] = $value['user_set_expiry'];
                $document_array[$key]['expiration_within_price'] = $value['expiration_within'] ? $value['expiration_within'] : 0.0;
                $document_array[$key]['upload_file'] = $imageName;
                $document_array[$key]['credential_id'] = $credential_id;

                if (isset($value['formFile']) && !empty($value['formFile'])) {
                    $image = Storage::disk('public')->get(str_replace('public/', '', $imageName));
                    $image = Image::make($image)->resize(400, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->encode('jpg');
                    Storage::put('public/thumb_' . str_replace('public/', '', $imageName), $image);
                }
            }

            $documents = Documents::insert($document_array);
        }

        $this->title = null;
        $this->attach_tags = null;
        $this->attach_specializations = null;
        $this->attach_sccommodation_services = null;
        $this->deactivate_associated_service = null;
        $this->reset_provider_priority = null;
        $this->hold_all_assignment_invitations = null;
        $this->lenient = null;
        $this->selected_services = [];
        $this->selected_accommodations = [];
        $this->selected_accommodations_services = [];

        $this->documents = [
            'upload_only' => '',
            'acknowledge_document' => '',
            'sign_document' => '',
            'set_expiry' => '',
            'user_set_expiry' => '',
            'expiration-within' => '',
            'expiration-within' => '',
            'formFile' => ''
        ];

        $this->messageFormSubmit = 'Form submit successfull';
    }
}
