<?php

namespace App\Http\Livewire\App\Admin\Provider;
use App\Models\Tenant\User;
use Livewire\WithPagination;

use Livewire\Component;

class Remittance extends Component
{
	use WithPagination;
	public $showForm, $limit = 10, $providerId=null,$counter=0, $rem_counter, $selectedBookings=[];
	protected $listeners = ['showList' => 'resetForm', 'openRemittanceGeneratorPanel', 'openIssueRemitancesPanel', 'updateVal'];
	public $filterProviders , $name_seacrh_filter ,$provider_ids = [], $filter_payment_method;

	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm($message)
	{
		$this->showForm=false;
		if ($message) {
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
	}

	public function mount()
	{
		$this->filterProviders = User::where('status', 1)
		->whereHas('roles', function ($query) {
			$query->whereIn('role_id', [2]);
		})->select([
			'users.id',
			'users.name',
		])->get()->toArray();	}

	public function render()
	{
		return view('livewire.app.admin.provider.remittance');
	}

	public function openRemittanceGeneratorPanel($providerId){
		if ($this->counter == 0) {
			$this->providerId = 0;
			$this->dispatchBrowserEvent('open-provider-remittances', ['providerId' => $providerId]);
			$this->counter = 1;
		} else {
			$this->providerId = $providerId;
			$this->counter = 0;
		}
	}

	public function openIssueRemitancesPanel($selectedBookings)
	{

		if ($this->rem_counter == 0) {
			$this->selectedBookings = [];
			$this->dispatchBrowserEvent('refresh-issue-remittances', ['ids' => $selectedBookings]);
			$this->rem_counter = 1;
		} else {
			$this->selectedBookings = $selectedBookings;
			$this->rem_counter = 0;
			$this->dispatchBrowserEvent('refreshSelects');
			$this->dispatchBrowserEvent('refreshSelects2');
		}
	}

	public function applyFilters()
    {
        $this->emit('updateVal', "name_seacrh_filter", $this->name_seacrh_filter);
        $this->emit('updateVal', "filter_payment_method", $this->filter_payment_method);
        $this->emit('updateVal', "provider_ids", $this->provider_ids);
        
    }

	public function resetFilters(){
        $this->emit('updateVal', "name_seacrh_filter", null);
        $this->emit('updateVal', "filter_payment_method", null);
        $this->emit('updateVal', "provider_ids", []);
    }

	public function updateVal($attrName, $val){
		$this->$attrName = $val;
    }
  

}