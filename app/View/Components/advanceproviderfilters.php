<?php

namespace App\View\Components;

use App\Models\Tenant\Tag;
use App\Models\Tenant\User;
use Illuminate\View\Component;

class AdvanceProviderFilters extends Component
{

    public function __construct()
    {
        //
    }

    public function render()
    {

        return view('components.advanceproviderfilters');
    }
}
