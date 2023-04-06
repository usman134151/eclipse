<?php

namespace App\Http\Livewire\App\Admin\Forms;

use App\Models\Tenant\Right;
use App\Models\Tenant\SystemSection;
use Livewire\Component;

class RolePermissionForm extends Component
{
	public $component = 'system-permissions';

	public function render()
	{
		$data['rights'] = $this->getRights();
		$data['sections'] = $this->getSectionNames();
		return view('livewire.app.admin.forms.role-permission-form', $data);
	}

	public function showList()
	{
		$this->emit("showList");
	}

	public function switch($component)
	{
		$this->component = $component;
	}
	
	private function getRights()
	{
		return Right::select(['right_type'])->get();
	}

	private function getSectionNames()
	{
		$collection = SystemSection::query()
			->join('system_sections as s', function ($childSection) {
				$childSection->on('system_sections.id', '=', 's.parent_id');
			})
			->select([
				's.section_name',
				's.parent_id',
			])
			->with('parentSection')
			->get()
			->groupBy('parent_id');

		$sections = $collection->mapWithKeys(function ($item, $key) {
			$newKey = $item->first()->parentSection->section_name;
			return [$newKey => $item];
		});

		return $sections;
	}
}