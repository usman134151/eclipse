<?php

namespace App\Http\Livewire\App\Common\Panels\BookingDetails;

use App\Models\Tenant\Tag;
use App\Models\Tenant\User;
use Livewire\Component;
use Livewire\WithPagination;

class AssignProviders extends Component
{
	use WithPagination;

    public $showForm;
    public $allproviders;
    public $tags;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        // dd($this->providers);
        $providers=User::where('status',1)
                ->whereHas('roles', function ($query) {
                    $query->wherein('role_id',[2]);
                })->get();
        return view('livewire.app.common.panels.booking-details.assign-providers',[
            'providers'=>$providers
        ]);
    }

    public function mount()
    {
       
       $this->allproviders=User::where('status',1)
                            ->whereHas('roles', function ($query) {
                               $query->wherein('role_id',[2]);
                           })->get();
        $this->tags=Tag::all();

       
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
