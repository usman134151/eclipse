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
	public $label = "Create New";
	public $roleName = '';
	public $roleID = '';
	public $sectionRights = [];
	public $message = '';

	protected $listeners = ['editRecord' => 'edit'];

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
			'roleName' => 'required|string|max:64',
		];
	}

	public function edit($id) {
		$rightsArray = [];
		$userRolePermission = SectionRight::with('systemRole')
			->where('system_role_id', $id)
			->get();
		
		$this->roleName = $userRolePermission->first()->systemRole->system_role_name;
		foreach ($userRolePermission as $key => $permission)
		{
			$rightsArray[$key] = $permission->section_id . '-' . $permission->right_id;
		}
		$this->sectionRights = $rightsArray;
		$this->roleID = $id;
		$this->label = "Edit";
	}

	public function save($id = null)
	{
		$this->validate();

		if ($id)
		{
			$systemRole = SystemRole::find($id);
			$systemRole->system_role_name = $this->roleName;
			$roleNameChanged = $systemRole->save();
			if ($roleNameChanged)
			{
				$deleteSectionRights = SectionRight::where('system_role_id', $id)->delete();
				if ($deleteSectionRights)
				{
					$sectionRightsArray = $this->fetchSectionRights($id);

					$success = SectionRight::insert($sectionRightsArray);
					$this->message = 'Role and permissions updated successfully';
				}
			}
		}
		else
		{
			$systemRole = SystemRole::create([
				'system_role_name' => $this->roleName,
				'status' => 1,
			]);
	
			if ($systemRole->count())
			{
				$sectionRightsArray = $this->fetchSectionRights($systemRole->system_role_id);
				$success = SectionRight::insert($sectionRightsArray);
				$this->message = 'Role and permissions saved successfully';
			}
		}
		if ($success)
		{
			$this->clearFields();
			$this->showList($this->message);
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

	private function fetchSectionRights($id)
	{
		$sectionRightsArray = [];
		foreach ($this->sectionRights as $index => $sectionRight)
		{
			$sectionRightPieces = explode("-", $sectionRight);
			$sectionID = $sectionRightPieces[0];
			$rightID = $sectionRightPieces[1];

			$sectionRightsArray[$index] = [
				'system_role_id' => $id,
				'section_id' => $sectionID,
				'right_id' => $rightID,
				'created_at' => now(),
				'updated_at' => now(),
			];
		}
		return $sectionRightsArray;
	}

	private function clearFields()
	{
		$this->roleName = '';
		$this->sectionRights = [];
	}
}