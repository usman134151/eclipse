<?php

namespace App\Http\Livewire\App\Common\Modals;
use App\Models\Tenant\Industry;
use Livewire\Component;

class AddIndustry extends Component
{
    public $selectedIndustries=[],$defaultIndustry,$industries;
    public function render()
    {
        return view('livewire.app.common.modals.add-industry');
    }

    public function mount()
    {
        $this->industries= Industry::where('status', 1)->get();
		$this->selectedIndustries = array_fill_keys(Industry::pluck('id')->toArray(), false);
       
    }

    // Child Laravel component's updateData function
    public function updateData()
    {
    
    // Emit an event to the parent component with the selected industries and default industry
    $this->emitUp('updateSelectedIndustries', $this->selectedIndustries, $this->defaultIndustry);
    }




}
