<?php

namespace App\Http\Livewire\app\common\lists;

use App\Models\Tenant\SectionRight;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class RolePermissions extends PowerGridComponent
{
	use ActionButton;
	public string $sortField = 'section_rights.system_role_id';
	protected $listeners = ['refresh'=>'setUp'];
	/*
	|--------------------------------------------------------------------------
	|  Features Setup
	|--------------------------------------------------------------------------
	| Setup Table's general features
	|
	*/
	public function setUp(): array
	{
		$this->showCheckBox();

		return [
			Exportable::make('export')
				->striped()
				->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
			Header::make()->showSearchInput()->showToggleColumns(),
			Footer::make()
                ->showPerPage(config('app.per_page'))
				->showRecordCount()->pagination('livewire.app.common.bookings.booking-nav'), //updated by Hammad to add custom pagination
		];
	}

	/*
	|--------------------------------------------------------------------------
	|  Datasource
	|--------------------------------------------------------------------------
	| Provides data to your Table using a Model or Collection
	|
	*/

	/**
	* PowerGrid datasource.
	*
	* @return Builder<\App\Models\Tenant\SectionRight>
	*/
	public function datasource(): Builder
	{
		return SectionRight::query()
		->rightJoin('system_roles', function ($systemRoles) {
			$systemRoles->on('system_roles.id', '=', 'section_rights.system_role_id');
		})
		->selectRaw(
			'system_roles.id as role, section_rights.system_role_id, system_roles.system_role_name as role_name, COUNT(section_rights.system_role_id) as number_of_permissions'
		)
		->groupBy('system_roles.id', 'system_roles.system_role_name', 'section_rights.system_role_id');
	}

	/*
	|--------------------------------------------------------------------------
	|  Relationship Search
	|--------------------------------------------------------------------------
	| Configure here relationships to be used by the Search and Table Filters.
	|
	*/

	/**
	 * Relationship search.
	 *
	 * @return array<string, array<int, string>>
	 */
	public function relationSearch(): array
	{
		return [];
	}

	/*
	|--------------------------------------------------------------------------
	|  Add Column
	|--------------------------------------------------------------------------
	| Make Datasource fields available to be used as columns.
	| You can pass a closure to transform/modify the data.
	|
	| ❗ IMPORTANT: When using closures, you must escape any value coming from
	|    the database using the `e()` Laravel Helper function.
	|
	*/
	public function addColumns(): PowerGridEloquent
	{
		return PowerGrid::eloquent()
			->addColumn('role_name')
			->addColumn('no_of_permissions')
			->addColumn('users', function () {
				return '2';
			})
			->addColumn('edit', function(SectionRight $model) {
				$id = $model->system_role_id ?? $model->role;
				return "<div class='d-flex actions'><a href='#' wire:click='edit(". $id .")' title='Edit' aria-label='Edit' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg title='Edit' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#pencil'></use></svg></a><a href='#' wire:click='deleteRecord(". $id .")' title='Delete' aria-label='Delete' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg aria-label='Delete' width='21' height='21' viewBox='0 0 21 21'>
				<use xlink:href='/css/common-icons.svg#recycle-bin'></use></svg></a></div>";
			});
	}

	/*
	|--------------------------------------------------------------------------
	|  Include Columns
	|--------------------------------------------------------------------------
	| Include the columns added columns, making them visible on the Table.
	| Each column can be configured with properties, filters, actions...
	|
	*/

	 /**
	 * PowerGrid Columns.
	 *
	 * @return array<int, Column>
	 */
	public function columns(): array
	{
		return [
			Column::make('Name', 'role_name', '')
				->field('role_name', 'system_roles.system_role_name')
				->searchable()
				->makeinputtext()
				->sortable(),
			Column::make('No. of Permissions', 'number_of_permissions', '')
				->sortable(),
			Column::make('Users', 'users', ''),
			Column::make('Actions', 'edit')->visibleInExport(false),
		];
	}

	function edit($id) {
		// Emits an event to show the form for editing a record
		$this->emit('showForm', $id);
	}

	// A method to handle the delete button click event
	public function deleteRecord($id) {
		// Sets the ID of the record to be deleted
		$this->systemRoleID = $id;
		// Emits an event to update the ID of the record to be deleted
		$this->emit('updateRecordId', $id);
		// Dispatches a browser event to show a confirmation modal
		$this->dispatchBrowserEvent('swal:confirm', [
			'type' => 'warning',
			'title' => 'Delete Operation',
			'text' => 'Are you sure you want to delete this record?',
		]);
	}

	/*
	|--------------------------------------------------------------------------
	| Actions Method
	|--------------------------------------------------------------------------
	| Enable the method below only if the Routes below are defined in your app.
	|
	*/

	 /**
	 * PowerGrid SectionRight Action Buttons.
	 *
	 * @return array<int, Button>
	 */

	/*
	public function actions(): array
	{
	   return [
		   Button::make('edit', 'Edit')
			   ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
			   ->route('section-right.edit', ['section-right' => 'id']),

		   Button::make('destroy', 'Delete')
			   ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
			   ->route('section-right.destroy', ['section-right' => 'id'])
			   ->method('delete')
		];
	}
	*/

	/*
	|--------------------------------------------------------------------------
	| Actions Rules
	|--------------------------------------------------------------------------
	| Enable the method below to configure Rules for your Table and Action Buttons.
	|
	*/

	 /**
	 * PowerGrid SectionRight Action Rules.
	 *
	 * @return array<int, RuleActions>
	 */

	/*
	public function actionRules(): array
	{
	   return [

		   //Hide button edit for ID 1
			Rule::button('edit')
				->when(fn($section-right) => $section-right->id === 1)
				->hide(),
		];
	}
	*/
}
