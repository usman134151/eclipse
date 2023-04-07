<?php

namespace App\Http\Livewire\App\Admin\Forms;

use App\Models\Tenant\Right;
use App\Models\Tenant\SectionRight;
use App\Models\Tenant\SystemRole;
use App\Models\Tenant\SystemSection;
use Livewire\Component;

class RolePermissionForm extends Component
{
	// public $component = 'system-permissions';
	public $roleName = '';
	public $sectionRights = [];

	public function render()
	{
		$data['rights'] = $this->getRights();
		$data['sections'] = $this->getSectionNames();

		return view('livewire.app.admin.forms.role-permission-form', $data);
	}

	public function showList($message = "")
	{
		$this->emit("showList", $message);
	}

	// public function switch($component)
	// {
	// 	$this->component = $component;
	// }

	// Validation Rules
	public function rules()
	{
		return [
			'roleName' => 'required|string|max:64|unique:system_roles,system_role_name',
		];
	}

	public function save()
	{
		$this->validate();

		$systemRole = SystemRole::create([
			'system_role_name' => $this->roleName,
			'status' => 1,
		]);

		if ($systemRole->count())
		{
			$sectionRightsArray = [];

			foreach ($this->sectionRights as $index => $sectionRight)
			{
				$systemRoleID = $systemRole->id;

				$sectionRightPieces = explode("-", $sectionRight);
				$sectiondID = $sectionRightPieces[0];
				$rightID = $sectionRightPieces[1];

				$sectionRightsArray[$index] = [
					'system_role_id' => $systemRoleID,
					'section_id' => $sectiondID,
					'right_id' => $rightID,
					'created_at' => now(),
					'updated_at' => now(),
				];
			}
		}

		$success = SectionRight::insert($sectionRightsArray);
		if ($success)
		{
			$this->clearFields();
			$this->showList("Role and permissions saved successfully");
		}
	}
	
	private function getRights()
	{
		return Right::select(['id', 'right_type'])->get();
	}

	private function getSectionNames()
	{
		$sections = SystemSection::query()
			->whereNull('parent_id')
			->select([
				'section_name',
				'id'
			])
			->with('childSection')
			->get();

		return $sections;
	}

	private function clearFields()
	{
		$this->roleName = '';
		$this->sectionRights = [];
	}
}