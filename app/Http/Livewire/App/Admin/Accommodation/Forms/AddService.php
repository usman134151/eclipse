<?php

namespace App\Http\Livewire\App\Admin\Accommodation\Forms;

use Livewire\Component;
use App\Models\Tenant\ServiceCategory;
use App\Helpers\SetupHelper;
use App\Services\App\ServiceCatagoryService;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\Rule;
class AddService extends Component
{
    public $service;
    public $component = 'basic-service-setup';
    public $step = 1;
    protected $listeners = ['editRecord' => 'edit' ,'updateVal'];

    public $setupValues = [
        'accomodations' => ['parameters' => ['Accommodation', 'id', 'name', '', '', 'name', false, 'service.accommodations_id','','accommodations_id',1]]
	];
    public function mount(ServiceCategory $service){
        $this->service=$service;
		$this->setupValues=SetupHelper::loadSetupValues($this->setupValues);

	}
    public function rules()
	{
		return [
			'service.name' => [
				'required',
				'string',
				'max:255',
				Rule::unique('service_categories', 'name')->ignore($this->service->id)],
            'service.accommodations_id'=>'required',
            'service.description' => [
				'required',
				'string',
				'max:255']

		];
	}
    public function save($redirect=1){
		$this->validate();
         $this->service->added_by = 1;
         $this->service->service_status = 1;
        $categoryService = new ServiceCatagoryService;
        // $s = $service_category['accommodations_id']='';
        $this->service = $categoryService->createService($this->service);

        if($redirect){
			$this->showList("Service has been saved successfully");
			$this->service = new ServiceCategory;
		}


	}
    public function updateVal($attrName, $val)
	{

		   $this->service[$attrName] = $val;

	}
	public function render()
	{
		return view('livewire.app.admin.accommodation.forms.add-service');
	}

	public function showList($message="")
	{

		$this->emit('showList',$message);
	}
    public function edit(ServiceCategory $service){
        $this->service=$service;

    }
    public function switch($component)
	{
		$this->component = $component;
	}
    public function serviceRates(){
        $this->step =3;
    }
    public function ServiceFrom(){
        $this->step = 4;
    }
    public function ServiceConfig(){
        $this->step = 5;
    }
    public function advanceOptions(){
        $this->step = 6;
    }

}
