<?php

namespace App\Http\Livewire\App\Common\Forms;

use Livewire\Component;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\Credential;
use App\Models\Tenant\CredentialDocument;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\Specialization;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Image;


class CredentialManager extends Component
{

    use WithFileUploads;

    public $showForm;
    protected $listeners = [
                'showList' => 'resetForm',
                'editRecord' => 'edit', 'updateVal'
            ];
    

    public $documents = [[
        // 'upload_only' => '',
        // 'acknowledge_document' => '',
        // 'sign_document' => '',
        // 'set_expiry' => '',
        // 'user_set_expiry' => '',
        'document_type_radio' => 'upload_only',
        'expiration_type' => 'set_expiry',
        'expiry'=>null,
        'formFile' => null,
        'temp_file'=>null
    ]];

    public $credential;
    public $specializations;

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
        $this->specializations = Specialization::select('id', 'name')->get()->toArray();

        $this->dispatchBrowserEvent('refreshSelects');
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
            'credential.specializations'=>'nullable',
            'credential.lenient' => 'nullable',

            'documents.*.formFile' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv',
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
        if($credential->specializations!=null)
            $this->credential->specializations = json_decode($credential->specializations,true);


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
                    'expiry' => $value->expiry ?? null,
                    'document_type_radio' => $value->document_type ?? '',
                    'expiration_type' => $value->expiration_type ?? 0,
                    'formFile' => null,
                    'temp_file' => $value->upload_file ?? '',

                ];
            }
        }
    }

    public function save(){
    
        $this->validate();
        // $this->credential->added_by=1;
        // dd($this->credential);
        
        $this-> credential->specializations = json_encode($this->credential->specializations);

        $this->credential->save();

        $credential_id = $this->credential->id;

        //if checkout unchecked, remove details
        if(!$this->credential->attach_accommodation_services){
            $this->selected_accommodations =[];
            $this->selected_services = [];

        }

        // if(!empty($this->selected_services)){ 
            // sync credentials and accommodations
            $this->credential->services()->sync(array_column($this->selected_services, 'id'));
        // }
        // if(!empty($this->selected_accommodations)){
            // sync credentials and services category
            $this->credential->accommodations()->sync(array_column($this->selected_accommodations, 'id'));
        // }


        $document_array = [];
        if (!empty($this->documents)) {
            foreach ($this->documents as $key => $value) {
                // if($value['formFile']!=null&&$value['tempFile']!=null){ //ensuring document has been attached
              
                    $document_array[$key]['document_type'] = $value['document_type_radio'];
                    $document_array[$key]['expiration_type'] = $value['expiration_type'];
                    $document_array[$key]['credential_id'] = $credential_id;
                    if($value['expiration_type']=='set_expiry')
                        $document_array[$key]['expiry'] = $value['expiry'];
                    else
                        $document_array[$key]['expiry'] = null;

                    if (isset($value['formFile']) && !empty($value['formFile'])) {
                        $document_array[$key]['upload_file'] = $this->saveFile($value['formFile'],$value['temp_file']);
                
                    }else{
                        $document_array[$key]['upload_file']= $value['temp_file'];
                    }
                // }
            }

            CredentialDocument::where('credential_id', $credential_id)->delete();
            $documents = CredentialDocument::insert($document_array);
        }
        $this->showList("Record saved successfully");
        $this->credential=new Credential;
    }

    public function saveFile($temp_file,$existing_file=null)
    {

        if ($temp_file) {
            if ($existing_file != null) {
                //delete existing file
                if (File::exists(public_path($existing_file)))
                File::delete(public_path($existing_file));
            }
            $name = time().'_'.$temp_file->getClientOriginalName();
            $uploadPath = $temp_file->storeAs('/credentials', $name, 'public');
            //dd($uploadPath);
            return '/tenant' . tenant('id') . '/app/public/credentials/' . $name;  //change domain here and in config/filesystems
        } else
        return null;
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
            'document_type_radio' => 'upload_only',
            'expiration_type' => 'set_expiry',
            'expiry'=>null,
            'formFile' => null,
            'temp_file'=>null,
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

    public function updateVal($attrName, $val)
    {

            $this->credential[$attrName] = $val;
    }
}


