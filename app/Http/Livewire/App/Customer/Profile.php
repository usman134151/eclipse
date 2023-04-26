<?php

namespace App\Http\Livewire\App\Customer;

use Livewire\Component;
use App\Helpers\SetupHelper;
class Profile extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
    public $setupValues = [
        'languages' => ['parameters' => ['SetupValue', 'id','setup_value_label','setup_id',1,'setup_value_label',false,'customer.languges_id','','languages',0]],
        'industries'=>['parameters'=>['Industry', 'id', 'name', '', '', 'name', false, 'company.industry_id','','industry',1]],
        'countries' => ['parameters' => ['Country', 'id', 'name', '', '', 'name', false, 'provider.country_id','','country',4]]

	];

    public function render()
    {
        return view('livewire.app.customer.profile');
    }

    public function mount()
    {
        $this->setupValues=SetupHelper::loadSetupValues($this->setupValues);
    }

    function showForm()
    {
       $this->showForm=true;
    }
    public function resetForm()
    {
        $this->showForm=false;
    }

}
