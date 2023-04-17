<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;

class Booknow extends Component
{
    public $component = 'requester-info';
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];
    public $meetings = [[
        'name' => 'Meeting Link 1',
        'meeting_name' => '',
        'phone_number' => '',
        'access_code' => '',
    ]];
        public function render()
    {
        return view('livewire.app.common.bookings.booknow');
    }

    public function mount()
    {


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
    public function addMeeting()
    {
        $count = count($this->meetings) + 1;
        $this->meetings[] = [
            'name' => "Meeting Link $count",
            'meeting_name' => '',
            'phone_number' => '',
            'access_code' => '',
        ];
    }
}
