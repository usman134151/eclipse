<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class Customer extends Component
{
<<<<<<< HEAD
    public $showForm;
    protected $listeners = ['showList' => 'resetForm'];

    public function render()
    {
        return view('livewire.app.common.customer');
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

=======
	public $showForm;
	protected $listeners = ['showList'=>'resetForm'];

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
	}

	public function mount() {}

	public function render()
	{
		return view('livewire.app.common.customer');
	}
>>>>>>> bb8370cea39f57f5d9ccae6af6aa8c31705d9707
}
