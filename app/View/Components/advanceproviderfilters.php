<?php

namespace App\View\Components;

use App\Models\Tenant\Tag;
use App\Models\Tenant\User;
use Illuminate\View\Component;

class advanceproviderfilters extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {           
        $tags=Tag::all();
        $providers=User::where('status',1)
             ->whereHas('roles', function ($query) {
                 $query->wherein('role_id',[2]);
             })->get([
                 'id',
                 'name',
             ]);
        return view('components.advanceproviderfilters',['tags'=>$tags,'providers'=>$providers]);
    }
}
