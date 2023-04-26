<?php

namespace App\Http\Livewire\App\Customer\Booking;

use Livewire\Component;
use App\Helpers\SetupHelper;

class Booknow extends Component
{
    public $component = 'requester-info';
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
    public $setupValues = [
        'industries'=>['parameters'=>['Industry', 'id', 'name', '', '', 'name', false, 'request.industry_id',	'','industry',0]],
        'timezones' => ['parameters' => ['SetupValue', 'id','setup_value_label', 'setup_id', 4, 'setup_value_label', false,'request.timezone_id','','timezone',1]],
        'accomodations' => ['parameters' => ['Accommodation', 'id', 'name', '', '', 'name', false, 'request.accommodation_id','','accommodation',2]]
	];

    public function render()
    {
        return view('livewire.app.customer.booking.booknow');
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
    public function switch($component)
	{
		$this->component = $component;
	}

}
