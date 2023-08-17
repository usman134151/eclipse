<?php

namespace App\Http\Livewire\App\Common\Bookings;

use Livewire\Component;
use App\Models\Tenant\Logs;
use Livewire\WithPagination;

class AssignmentLog extends Component
{
    use WithPagination;
    public $booking_id;
    public $limit=5;
    public $logs;
    public function render()
    {
        return view('livewire.app.common.bookings.assignment-log',['logs'=>$this->logs]);
    }
    public function mount()
    {
        $logs = Logs::where(['action_to' => $this->booking_id, 'item_type' => 'Booking'])
            ->latest()
            ->paginate(5);
        $this->logs = $logs->toArray();
        //dd($this->logs);
       
    }
    public function switch($component)
	{
		$this->component = $component;
        $this->dispatchBrowserEvent('refreshSelects');
	}

}
