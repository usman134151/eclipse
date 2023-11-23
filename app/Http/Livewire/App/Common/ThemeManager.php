<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\User;
use App\Models\Tenant\UserDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ThemeManager extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm', 'themeToggled' => 'toggleTheme' ];


    public function render()
    {
        return view('livewire.app.common.theme-manager');
    }

    public function mount()
    {        
    }

    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }

    public function toggleTheme()
    {
        $selectedTheme = Session::get('theme');
        $newTheme = ($selectedTheme == 0) ? 1 : 0;
        
        $userId = Auth::user()->id;
        $user = User::where('id', $userId)->with('userdetail')->first();
        if ($user) {
            UserDetail::where('user_id', $user->id)->update(['user_theme' => $newTheme]);
			Session::put('theme', $newTheme);
        }
    }
}
