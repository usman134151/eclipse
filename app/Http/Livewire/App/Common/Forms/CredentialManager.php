<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\Credential;
use App\Models\Tenant\CredentialDocument;
use App\Models\Tenant\ServiceCategory;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Image;


class CredentialManager extends Component
{

    use WithFileUploads;

    public $showForm;
    protected $listeners = [
                'showList' => 'resetForm',
                'editRecord' => 'edit'
            ];

    public $documents = [[
        // 'upload_only' => '',
        // 'acknowledge_document' => '',
        // 'sign_document' => '',
        // 'set_expiry' => '',
        // 'user_set_expiry' => '',
        'document_type_radio' => '',
        'expiration_within' => '',
        'formFile' => ''
    ]];

    public $credential;

    public $accommodations = [];
    public $accommodation_list = [];
    public $services = [];
    public $services_list = [];
    public $accommodation_search;
    public $service_search;
    public $title = null;
    public $attach_tags;
    public $attach_specializations;
    public $attach_accommodation_services;
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

    public function mount(Credential $credential)
    {
        $this->credential=$credential;
        $this->accommodations = Accommodation::select('id', 'name')->get()->toArray();
        $this->accommodation_list = $this->accommodations;   
    }

    // Validation Rules
    protected $rules = [
            'credential.title' => 'required|string|max:255',
            'credential.attach_tags' => 'nullable',
            'credential.attach_specializations' => 'nullable',
            'credential.attach_accommodation_services' => 'nullable',
            'credential.deactivate_associated_service' => 'nullable',
            'credential.reset_provider_priority' => 'nullable',
            'credential.hold_all_assignment_invitations' => 'nullable',
            'credential.lenient' => 'nullable'
        ];


    public function showList($message="")
    {
        $this->emit('showList',$message);
    }

    public function edit(Credential $credential){
        $this->label="Edit";
        $this->credential=$credential;
        $accommodations = $this->credential->accommodations;
        $documents = $this->credential->documents;
        $services = $this->credential->services;

        if(!empty($accommodations)){
            $this->accommodation_list = $accommodations->map(function ($accommodation) {
                    return collect($accommodation->toArray())
                        ->only(['id', 'name'])
                        ->all();
                });
        }

        if(!empty($this->accommodation_list)){
            $this->accommodation_list = $this->accommodation_list->toArray();
            foreach ($this->accommodation_list as $key => $value) {
                $this->selectAccommodation($key, $value['id'], $value['name']);
            }
            
            $this->services = Accommodation::with(['serviceCategories' => function($query){
                    $query->select('id','name','accommodations_id');
                }])->whereIn('id', array_column($this->selected_accommodations, 'id'))->get()->toArray();

            $this->services_list = $this->services;
            
        }

        if(!empty($services)){
            $this->services_list = $services->map(function ($service) {
                    return collect($service->toArray())
                        ->only(['id', 'name','accommodations_id'])
                        ->all();
                });

            if(!empty($this->services_list)){
                foreach ($this->services_list as $key => $value) {
                  
                    $this->selectServices($key, $value['id'], $value['name'],$value['accommodations_id'],$key);
                }
            }
           
        }

        $this->arrayMerge();
        $this->filterAccommodationService();

        $this->documents = [];

        if(!empty($documents)){
            foreach ($documents as $key => $value) {
                $this->documents[] = [
                    'upload_only' => '',
                    'acknowledge_document' => '',
                    'sign_document' => '',
                    'set_expiry' => '',
                    'user_set_expiry' => '',
                    'document_type_radio' => $value->document_type_radio ?? '',
                    'expiration_within' => $value->expiration_within_price ?? 0,
                    'formFile' => $value->formFile ?? ''
                ];
            }
        }
    }

    public function save(){
    
        $this->validate();
        // $this->credential->added_by=1;
        $this->credential->save();

        $credential_id = $this->credential->id;

        if(!empty($this->selected_services)){
            // sync credentials and accommodations
            $this->credential->services()->sync(array_column($this->selected_services, 'id'));
        }
        if(!empty($this->selected_accommodations)){
            // sync credentials and services category
            $this->credential->accommodations()->sync(array_column($this->selected_accommodations, 'id'));
        }

        $document_array = [];
        if (!empty($this->documents)) {
            foreach ($this->documents as $key => $value) {

                $imageName = '';
                if (isset($value['formFile']) && !empty($value['formFile'])) {
                    $imageName = $value['formFile']->store('public');
                }
                $document_array[$key]['document_type_radio'] = $value['document_type_radio'];
                $document_array[$key]['expiration_within_price'] = $value['expiration_within'] ? (float)$value['expiration_within'] : 0.0;
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

            CredentialDocument::where('credential_id', $credential_id)->delete();
            $documents = CredentialDocument::insert($document_array);
        }
        $this->showList("Record saved successfully");
        $this->credential=new Credential;
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
            'document_type_radio' => '',
            'expiration_within' => '',
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

        $searchResults = $this->searchArray($service, $this->service_search, 'name', $type = 'services');
        $this->services_list = $searchResults;
    }

    // Search function
    public function searchArray($array, $searchValue, $searchKey = null, $type = null)
    {
        $results = [];

        foreach ($array as $item) {
            if(!empty($type) && $type == 'services'){
                if(isset($item) && isset($item['service_categories']) && !empty($item['service_categories'])){
                    foreach ($item['service_categories'] as $key => $value) {
                        if ($searchKey && isset($value[$searchKey]) && stripos($value[$searchKey], $searchValue) !== false) {
                            $item['service_categories'][] = $value;
                            $results[] = $item;
                        } else {
                            foreach ($value as $value) {
                                if (stripos($value, $searchValue) !== false) {
                                    $item['service_categories'][] = $value;
                                    $results[] = $item;
                                    break;
                                }
                            }
                        }
                    }
                }
            }else{

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
        }
        // dd($results);
        return $results;
    }
    // select accommodations
    public function selectAccommodation($index, $id, $name)
    {
        $this->selected_accommodations[$index]['id'] = $id;
        $this->selected_accommodations[$index]['name'] = $name;
        unset($this->accommodation_list[$index]);
        $this->services = Accommodation::with(['serviceCategories' => function($query){
            $query->select('id','name','accommodations_id');
        }])->whereIn('id', array_column($this->selected_accommodations, 'id'))->get()->toArray();
        
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

        $this->services = Accommodation::with(['serviceCategories' => function($query){
            $query->select('id','name','accommodations_id');
        }])->whereIn('id', array_column($this->selected_accommodations, 'id'))->get()->toArray();
        $this->services_list = $this->services;
        
        $this->arrayMerge();
    }

    // select services
    public function selectServices($index, $id, $name, $accommodations_id, $key)
    {
        
        array_push($this->selected_services, ['id' => $id, 'name' => $name, 'accommodations_id' => $accommodations_id]);
        if(isset($this->services_list[$index]) && isset($this->services_list[$index]['service_categories']) && isset($this->services_list[$index]['service_categories'][$key])){
            unset($this->services_list[$index]['service_categories'][$key]);
        }
       
        $this->arrayMerge();
    }
    // select all services
    public function selectAllServices()
    {

        $this->selected_services = [];
        if(!empty($this->services_list)){
            foreach ($this->services_list as $key => $value) {
                if(isset($value['service_categories']) && !empty($value['service_categories'])){
                    foreach ($value['service_categories'] as $index => $val) {
                        array_push($this->selected_services,['id' => $val['id'], 'name' => $val['name'], 'accommodations_id' => $val['accommodations_id']]);
                    }
                }
            }
        }
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
                if (!empty($this->selected_services)) {
                    foreach ($this->selected_services as $index => $service) {
                        if($service['accommodations_id'] == $value['id']){
                            $this->selected_accommodations_services[$key]['accommodations']['service_categories'][$index]['id'] = $service['id'];
                            $this->selected_accommodations_services[$key]['accommodations']['service_categories'][$index]['name'] = $service['name'];
                        }
                        
                    }
                }
            }
        }else if(!empty($this->selected_accommodations_services)){
            foreach ($this->selected_accommodations_services as $key => $value) {
                if (!empty($this->selected_services)) {
                    foreach ($this->selected_services as $index => $service) {
                        if($service['accommodations_id'] == $value['accommodations']['id']){
                            $this->selected_accommodations_services[$key]['accommodations']['service_categories'][$index]['id'] = $service['id'];
                            $this->selected_accommodations_services[$key]['accommodations']['service_categories'][$index]['name'] = $service['name'];
                        }
                        
                    }
                }
            }
        }
    }
    // remove selected accommodation services
    public function removeSelectedAccommodationService($key, $index = null, $accommodations_id = 0)
    {   

        if(!is_null($index)){
            if(!empty($this->services_list)){
                foreach ($this->services_list as $key => $value) {
                    if($value['id'] == $accommodations_id){
                        if(isset($this->selected_accommodations_services[$key]['accommodations']) && isset($this->selected_accommodations_services[$key]['accommodations']['service_categories']) && isset($this->selected_accommodations_services[$key]['accommodations']['service_categories'][$index])){
                                array_push($this->services_list[$key]['service_categories'],['id' => $this->selected_accommodations_services[$key]['accommodations']['service_categories'][$index]['id'], 'name' => $this->selected_accommodations_services[$key]['accommodations']['service_categories'][$index]['name'], 'accommodations_id' => $this->selected_accommodations_services[$key]['accommodations']['id']]);
                        }
                        
                    }
                }
            }
            unset($this->selected_accommodations_services[$key]['accommodations']['service_categories'][$index]);
            unset($this->selected_services[$index]);
        }else{
            unset($this->selected_accommodations_services[$key]);
            unset($this->selected_accommodations[$key]);
            
            $this->services = Accommodation::with(['serviceCategories' => function($query){
                $query->select('id','name','accommodations_id');
            }])->whereIn('id', array_column($this->selected_accommodations, 'id'))->get()->toArray();

            $this->services_list = $this->services;

        }
        
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

        if (!empty($service)) {
            foreach ($service as $key => $value) {
                if (isset($this->selected_accommodations_services[$key]) && isset($this->selected_accommodations_services[$key]['services']) && !empty($this->selected_accommodations_services[$key]['services']) && $this->selected_accommodations_services[$key]['services']['id'] == $value['id']) {
                    unset($service[$key]);
                }
            }
        }
        $this->accommodation_list = $accommodation;
    }

    public function formSubmit()
    {
        
        $validator = $this->validate([
            'title' => 'required'
        ]);


        $credentials = new Credential();

        $credentials->title = $this->title;
        $credentials->attach_tags = $this->attach_tags;
        $credentials->attach_specializations = $this->attach_specializations;
        $credentials->attach_accommodation_services = $this->attach_accommodation_services;
        $credentials->deactivate_associated_service = $this->deactivate_associated_service;
        $credentials->reset_provider_priority = $this->reset_provider_priority;
        $credentials->hold_all_assignment_invitations = $this->hold_all_assignment_invitations;
        $credentials->lenient = $this->lenient;
        // $credentials->added_by = 1; //
        $credentials->save();
        $credential_id = $credentials->id;
        
        // sync credentials and accommodations
        $credentials->accommodations()->sync(array_column($this->selected_services, 'id'));
        // sync credentials and services category
        $credentials->services()->sync(array_column($this->selected_accommodations, 'id'));

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
                $document_array[$key]['document_type_radio'] = $value['document_type_radio'];
                $document_array[$key]['expiration_within_price'] = $value['expiration_within'] ? (float)$value['expiration_within'] : 0.0;
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
        $this->attach_accommodation_services = null;
        $this->deactivate_associated_service = null;
        $this->reset_provider_priority = null;
        $this->hold_all_assignment_invitations = null;
        $this->lenient = null;
        $this->selected_services = [];
        $this->selected_accommodations = [];
        $this->selected_accommodations_services = [];

        $this->documents = [
            'document_type_radio' => '',
            'expiration-within' => '',
            'formFile' => ''
        ];

        $this->messageFormSubmit = 'Form submit successfull';
    }
}
