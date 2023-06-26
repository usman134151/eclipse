<?php

namespace App\Http\Livewire\App\Admin\Customer;
use App\Models\Tenant\Company;
use App\Models\Tenant\Accommodation;
use App\Models\Tenant\ServiceCategory;

use Livewire\Component;

class ServiceCatelog extends Component
{
    public $showForm,$accomodations,$services=[];
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.admin.customer.service-catelog');
    }

    public function mount()
    {
       $this->accomodations=Accommodation::where('status',1)->get()->toArray();
       
    }

    public function updateServices($accomodationId){
       
        $this->services=[];
        $this->services=ServiceCategory::where('status', 1)
        ->where(function ($query) {
            $query->where('disable_for_companies', null)
                ->orWhere('disable_for_companies', 0);
        })
        ->where('accommodations_id', $accomodationId)
        ->get()
        ->toArray();

    }
	

}
