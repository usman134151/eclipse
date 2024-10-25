<?php

namespace App\Http\Livewire\App\Common\Forms;
use Illuminate\Validation\Rule;


use App\Models\Tenant\Accommodation;
use Livewire\Component;

class AccommodationForm extends Component
{
	public $accommodation;
	public $label = "Add";
	protected $listeners = ['editRecord' => 'edit'];

	public function mount(Accommodation $accommodation) {
		$this->accommodation = $accommodation;
	}

	// Validation Rules
	public function rules()
	{
		return [
			'accommodation.name' => [
				'required',
				'string',
				'max:255',
				Rule::unique('accommodations', 'name')->ignore($this->accommodation->id)],
			'accommodation.description' => [
				'nullable',
				'string',
				'max:255',
            ]
		];
	}

	public function showList($message = "")
	{
		// Save data
		$this->emit('showList', $message);
	}

	public function edit(Accommodation $accommodation) {
		$this->label = "Edit";
		$this->accommodation = $accommodation;
	}

	public function save() {
		$this->validate();
		if(!is_null($this->accommodation->id)){
			$type = 'update';
		}
		else{
			$type = 'create';
		}
		$this->accommodation->added_by = 1;
		// $this->accommodation->status = 1;
		$this->accommodation->save();
		$this->showList("Accommodation saved successfully");
		addLogs([
			'action_by' => \Auth::id(),
			'action_to' => $this->accommodation->id,
			'item_type' => 'accommodation',
			'type' => $type,
			'message' => 'Accommodation '. $type .'d by '. \Auth::user()->name,
			'ip_address' => \request()->ip(),
		]);
		$this->accommodation = new Accommodation;
	}

	public function render()
	{
		return view('livewire.app.common.forms.accommodation-form');
	}
}
