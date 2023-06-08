<?php

namespace App\Http\Livewire\App\Common\Modals;
use App\Models\Tenant\Industry;
use App\Models\Tenant\User;
use Livewire\Component;

class AddIndustry extends Component
{
    public $selectedIndustries=[],$defaultIndustry,$industries;
    protected $listeners = ['editRecord' => 'setIndustries'];

    public function render()
    {
        return view('livewire.app.common.modals.add-industry');

    }

    public function mount()
    {
        $this->industries= Industry::where('status', 1)->get();
    }

    public function setIndustries(User $user){
        $this->selectedIndustries = $user->industries()->allRelatedIds()->toArray();
        $this->defaultIndustry = $user->userdetail->industry;
    }

    // Child Laravel component's updateData function
    public function updateData()
    {
    
    // Emit an event to the parent component with the selected industries and default industry
    $this->emitUp('updateSelectedIndustries', $this->selectedIndustries, $this->defaultIndustry);
    }




}
