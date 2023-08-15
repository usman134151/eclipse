<?php

namespace App\Http\Livewire\App\Customer;

use Livewire\Component;
use App\Helpers\SetupHelper;
use App\Models\Tenant\User;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $showForm, $user;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.customer.profile');
    }

    public function mount()
    {
        $this->user = User::where('id', Auth::id())->with(['userdetail','company'])->first()->toArray();

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
