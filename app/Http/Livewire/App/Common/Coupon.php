<?php

namespace App\Http\Livewire\App\Common;

use Livewire\Component;

class Coupon extends Component
{
	public $showForm;
	public $listTitle="Coupons";
    public $listDescription="Here you can create and manage coupon campaigns based on specific services, targeting first-time and repeating customers.";
	protected $listeners = [
        'showList' => 'resetForm', // reset form when the parent component shows a list
        'showForm' => 'showForm', // show form when the parent component requests it
        'delete' => 'deleteRecord', // delete the record with the specified ID
        'updateRecordId' => 'updateRecordId', // update the ID of the record being edited/deleted
    ];

	function showForm()
	{
		$this->showForm=true;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/all-coupon/create-coupon']); 
	}

	public function resetForm()
	{
		$this->showForm=false;
		$this->dispatchBrowserEvent('update-url', ['url' => '/admin/all-coupon']);
	}

	public function mount()
	{}

	public function render()
	{
		return view('livewire.app.common.coupon');
	}
}
