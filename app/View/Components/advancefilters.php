<?php

namespace App\View\Components;

use App\Models\Tenant\Tag;
use App\Models\Tenant\User;
use Illuminate\View\Component;

class advancefilters extends Component
{
  public $tags = [], $filterProviders = [], $hideProvider=false;
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($type='' , $filterProviders=[], $hideProvider=false)
  {
    $this->tags = Tag::all();
    $this->filterProviders = $filterProviders;
    $this->hideProvider = $hideProvider;
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
