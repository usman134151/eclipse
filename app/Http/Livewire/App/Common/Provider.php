<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Tag;
use App\Models\Tenant\User;
use App\Services\App\UserService;
use Livewire\Component;
use App\Services\ExportDataFile;
use App\Helpers\SetupHelper;
class Provider extends Component
{
	public $showForm;
	public $showProfile;
	public $importFile;
	public $status,$user;
    protected $listeners = [
		'refreshFilters',
		'showList' => 'resetForm',
		'showProfile' => 'showProfile',
		'showForm' => 'showForm', // show form when the parent component requests it
		'updateRecordId' => 'updateRecordId', // update the ID of the record being edited/deleted
		'delete' => 'deleteRecord',

	];
	protected $exportDataFile;

	public $provider_ids=[];
	public $preferred_provider_ids=[];
	public $tag_names=[];
	public $service_type_ids=[];
	public $services=[];
	public $specializations=[];
	public $gender;
	public $ethnicity;
	public $certifications=[];

    public $tags;
    public $providers;

	public $setupValues = [
        'accommodations' => ['parameters' => ['Accommodation', 'id', 'name', 'status', 1, 'name', true, 'accommodations', '', 'accommodations', 2]],
        'specializations' => ['parameters' => ['Specialization', 'id', 'name', 'status', 1, 'name', true, 'specializations', '', 'specialization_search_filter', 4]],
        'services' => ['parameters' => ['ServiceCategory', 'id', 'name', 'status', 1, 'name', true, 'services', '', 'Service_filter', 3]],
        "service_type_ids"=>['parameters'=>['SetupValue', 'id','setup_value_label', 'setup_id', 5, 'setup_value_label', true,'service_type_ids','','setup_value_label',4]],
        'ethnicity' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 3, 'setup_value_label', true,'ethnicity','','ethnicity',6]],
        'gender' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 2, 'setup_value_label', true,'gender','','gender',5]],
        'certifications' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 8, 'setup_value_label', true,' certifications','',' certifications',9]],
        
    ];

    public function __construct()
    {
        $this->exportDataFile = new ExportDataFile;
    }

    public function downloadExportFile()
    {
        return $this->exportDataFile->generateExcelTemplate();
    }

	public function render()
	{
		
		return view('livewire.app.common.provider');
	}

	public function importFile(){
		$this->importFile=true;

	}


	public function deleteRecord()
	{
		// Delete the record from the database using the model
		UserService::deleteAccount($this->recordId);
		// Emit an event to reset the form and display a confirmation message
		$this->emitSelf('showList', 'Record has been deleted');
	}

	public function mount($showProfile, $status = 1)
	{
		$this->status = $status;
		$this->showProfile = $showProfile;
		if ($showProfile) {
			$this->user = User::where('id', request()->providerID)->with(['userdetail', 'teams','services'])->first()->toArray();
		}
		
        $this->tags=Tag::all();
        $this->providers=User::where('status',1)
             ->whereHas('roles', function ($query) {
                 $query->wherein('role_id',[2]);
             })->get([
                 'id',
                 'name',
             ]);
			 $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);	 
	}
	public function refreshFilters($name,$value){
	//	 dd($name,$value);
		if($name=="Service_filter"){
			$this->services = $value;
		}else if($name=="specialization_search_filter"){
			$this->specializations = $value;
		}else if($name=="setup_value_label"){
			$this->service_type_ids = $value;
		}else if($name=="tags_selected"){
			$this->tag_names = $value;
		}else if($name=="providers_selected"){
			$this->provider_ids = $value;
		}else if($name=="preferred_provider_ids"){
			$this->preferred_provider_ids = $value;
		}else if($name=="gender"){
			$this->gender = $value;
		}else if($name=="ethnicity"){
			$this->ethnicity = $value;
		}else if($name=="certifications"){
			$this->certifications = $value;
		}
	}
	function showForm($user = null)
	{
        if ($user) {
			$this->user = $user;
			$this->emit('editRecord', $user);
		}
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/provider/create-provider']);
        $this->dispatchBrowserEvent('refreshSelects');
	}

	public function resetForm($message='')
	{
		$this->showForm=false;
		$this->showProfile = false;
		$this->importFile=false;
        if ($message) {
			$this->confirmationMessage = $message;
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/provider']);
		$this->dispatchBrowserEvent('refreshSelects');

	}

	public function showProfile($user=null)
	{
        if ($user) {
			$this->user = $user;

			$this->emit('showDetails', $user);
		}

		$this->showProfile = true;
	}
    public function delete()
	{
		$this->dispatchBrowserEvent('swal:modal', [
			'type' => 'success',
			'title' => 'Team Deleted Successfully!',
			'text' => 'This is a sweet alert!',
		]);
	}
    public function updateRecordId($id)
	{
		$this->recordId = $id;
	}
}
