<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\ProviderSpecificSchedule;
use Carbon\Carbon;
use Livewire\Component;

class SpecificDateAvailibility extends Component
{
    public $showForm,$provider_id=0, $timeslot=[], $time_format=1;
    protected $listeners = ['showList' => 'resetForm', 'saveSpecificSlot','updateVal','clear'];

    public function render()
    {
        return view('livewire.app.common.panels.specific-date-availibility');
    }
    public function updateVal($attrName, $val)
    {
            $this->timeslot[$attrName] = $val;
    }
  
     public function rules()
	{
		return [
			'timeslot.scheduled_date' => [
				'date',
				'required',
				'date_format:m/d/Y', 'after:today'],
            // 'timeslot.from_time' => [
            //     'required',],
            // 'timeslot.to_time' => [
            //     'required',],
            ];
    }

    public function saveSpecificSlot(){
        $this->validate();

        $startHour = $this->timeslot['from_time_hour'];
        $startMin = $this->timeslot['from_time_min'];
        // $startType = $this->timeslot_start_type;

        $endHour = $this->timeslot['to_time_hour'];
        $endMin = $this->timeslot['to_time_min'];
        // $endType = $this->timeslot_end_type;
        // if ($this->schedule->time_format == 1) {
        //     // Convert start and end hours to 24-hour format if the start type or end type is set to PM
        //     if (strtolower($startType) === 'pm') {
        //         $startHour = ($startHour % 12) + 12;
        //     }
        //     if (strtolower($endType) === 'pm') {
        //         $endHour = ($endHour % 12) + 12;
        //     }
        // }


        // Check if the start hour is less than the end hour
        if ($startHour > $endHour) {
            // Start hour cannot be greater than end hour
            // You can handle the validation error here, e.g., show an error message or perform some other action
            $this->addError('timeValidation', 'Invalid time range. The start time must be before the end time.');
            return;
        } elseif ($startHour === $endHour && $startMin > $endMin) {
            // If start hour is equal to end hour, start minute cannot be greater than end minute
            // You can handle the validation error here, e.g., show an error message or perform some other action
            $this->addError('timeValidation', 'Invalid time range. The start time must be before the end time.');
            return;
        }

        // Create Carbon instances for start time and end time
        $this->timeslot['from_time'] = Carbon::createFromTime($startHour, $startMin);
        $this->timeslot['to_time'] = Carbon::createFromTime($endHour, $endMin);
        $this->timeslot['scheduled_date']= Carbon::parse($this->timeslot['scheduled_date']);
    
        // Insert the timeslot into the database
        ProviderSpecificSchedule::create($this->timeslot);
       
        $this->dispatchBrowserEvent('close-specific-panel');
        $this->emit('showConfirmation', ' Availability for Specific Date saved!');
        // $this->clear();

    }

    public function clear(){
        $this->timeslot = [
            'user_id' => $this->provider_id,
            'scheduled_date' => null,
            'from_time_hour' => '12',
            'from_time_min' => '59',

            'to_time_hour' => '12',
            'to_time_min' => '59',

            'notes' => ''
        ];
    }
    public function mount()
    {
       $this->clear();
       
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
