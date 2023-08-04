<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\ProviderSpecificSchedule;
use Carbon\Carbon;
use Livewire\Component;

class SpecificDateAvailibility extends Component
{
    public $showForm, $provider_id = 0, $timeslots = [], $time_format = 1, $scheduled_date, $notes = '';
    protected $listeners = ['showList' => 'resetForm', 'saveSpecificSlot', 'updateVal', 'clear'];

    public function render()
    {
        return view('livewire.app.common.panels.specific-date-availibility');
    }
    public function updateVal($attrName, $val)
    {
        $this->$attrName = $val;
    }

    public function rules()
    {
        return [
            'scheduled_date' => [
                'date',
                'required',
                'date_format:m/d/Y', 'after:today'
            ],
            // 'timeslot.from_time' => [
            //     'required',],
            // 'timeslot.to_time' => [
            //     'required',],
        ];
    }

    public function saveSpecificSlot()
    {
        $this->validate();

        foreach ($this->timeslots as $timeslot) {
            $startHour = $timeslot['from_time_hour'];
            $startMin = $timeslot['from_time_min'];
            // $startType = $timeslot_start_type;

            $endHour = $timeslot['to_time_hour'];
            $endMin = $timeslot['to_time_min'];
            // $endType = $timeslot_end_type;
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
            $timeslot['from_time'] = Carbon::createFromTime($startHour, $startMin);
            $timeslot['to_time'] = Carbon::createFromTime($endHour, $endMin);
            $timeslot['scheduled_date'] = Carbon::parse($this->scheduled_date);
            $timeslot['notes'] = $this->notes;
            $timeslot['user_id'] = $this->provider_id;


            // Insert the timeslot into the database
            ProviderSpecificSchedule::create($timeslot);
        }
        $this->dispatchBrowserEvent('close-specific-panel');
        $this->emit('showConfirmation', ' Availability for Specific Date saved!');

    }

    public function clear()
    {
        $this->scheduled_date = null;
        $this->notes = '';
        $this->timeslots = [];

        $this->addSlot();
    }

    public function addSlot()
    {
        $this->timeslots[] = [
            'from_time_hour' => '12',
            'from_time_min' => '59',

            'to_time_hour' => '12',
            'to_time_min' => '59',

        ];
    }

    public function removeSlot($index)
    {
        unset($this->timeslots[$index]);
        $this->timeslots = array_values($this->timeslots);
    }

    public function mount()
    {
        $this->clear();
    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}
