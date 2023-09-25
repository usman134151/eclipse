<?php

namespace App\Http\Livewire\App\Customer;

use Livewire\Component;

class PendingReviews extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
      
        return view('livewire.app.customer.pending-reviews');
    }

    public function mount()
    {
       
       
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
