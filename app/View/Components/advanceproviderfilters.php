<?php

namespace App\View\Components;

use App\Models\Tenant\Tag;
use App\Models\Tenant\User;
use Illuminate\View\Component;

class advanceproviderfilters extends Component
{
    public $tags;
    public $providers;

    public function __construct()
    {
        //
        $this->tags=Tag::all();
        $this->providers=User::where('status',1)
             ->whereHas('roles', function ($query) {
                 $query->wherein('role_id',[2]);
             })->get([
                 'id',
                 'name',
             ]);
    }

    public function render()
    {         
        return view('components.advanceproviderfilters');
    }
}
