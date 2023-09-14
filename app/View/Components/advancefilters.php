<?php

namespace App\View\Components;

use App\Models\Tenant\Tag;
use App\Models\Tenant\User;
use Illuminate\View\Component;

class advancefilters extends Component
{
  public $tags = [], $providers = [];
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->tags = Tag::all();
    $this->providers = User::where('status', 1)
      ->whereHas('roles', function ($query) {
        $query->whereIn('role_id', [2]);
      })->select([
        'users.id',
        'users.name',
      ])->get();
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.advancefilters');
  }
}
