<?php

namespace App\Http\Livewire\App\Admin\Provider;
use App\Models\Tenant\User;
use Livewire\WithPagination;

use Livewire\Component;

class Remittance extends Component
{
	use WithPagination;
	public $showForm, $limit = 10, $providerId=null,$counter=0, $rem_counter, $selectedBookings=[];
	protected $listeners = ['showList' => 'resetForm', 'openRemittanceGeneratorPanel', 'openIssueRemitancesPanel'];

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
	{}

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
}