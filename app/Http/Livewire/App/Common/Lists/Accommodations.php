<?php

namespace App\Http\Livewire\app\common\lists;

use App\Models\Tenant\Accommodation;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Accommodations extends PowerGridComponent
{
	use ActionButton;
	protected $listeners = ['refresh' => 'setUp'];
	public $name;

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
			Header::make()->showSearchInput()->showToggleColumns(), //updated by Amna Bilal to add toggle column option
			Footer::make()
                ->showPerPage(config('app.per_page'))
				->showRecordCount(),
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
	* @return Builder<\App\Models\Tenant\Accommodation>
	*/
	public function datasource(): Builder
	{
		return Accommodation::query()->where('status','<',2);
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
		->addColumn('name')
		->addColumn('description')
		->addColumn('status', function (Accommodation $model) {
			return ($model->status);
		})
		->addColumn('edit',function(Accommodation $model){
			return '<div class="d-flex actions">
			<a href="#" title="Edit Accommodation" wire:click="edit('.$model->id.')" aria-label="Edit Accommodation" class="btn btn-sm btn-secondary rounded btn-hs-icon">
			<svg aria-label="Delete Accommodation" width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<use xlink:href="/css/sprite.svg#edit-icon"></use>
			</svg>
			</a>
			<a href="#" title="Delete Accommodation" aria-label="Delete Accommodation" wire:click="deleteRecord('.$model->id.')" class="btn btn-sm btn-secondary rounded btn-hs-icon">
			<svg aria-label="Delete Accommodation" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
			<use xlink:href="/css/sprite.svg#delete-icon"></use>
			</svg>
			</a>
			</div>';
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
			Column::make('Name', 'name', '')
				->searchable()
				->makeinputtext()
				->sortable()
				->editOnClick(),

			Column::make('Status', 'status', '')
				->makeBooleanFilter('status', 'Activated', 'Deactivated')
				->toggleable(1, 'Activated', 'Deactivated'),

			Column::make('Actions', 'edit')->visibleInExport(false) //updated by Amna Bilal to hide action from export
		];
	}

	// A method to handle the edit button click event
	function edit($id) {
		// Emits an event to show the form for editing a record
		$this->emit('showForm', Accommodation::find($id));
	}

	// A method to handle the delete button click event
	public function deleteRecord($id) {
		// Sets the ID of the record to be deleted
		$this->deleteRecordId = $id;
		// Emits an event to update the ID of the record to be deleted
		$this->emit('updateRecordId', $id);
		// Dispatches a browser event to show a confirmation modal
		$this->dispatchBrowserEvent('swal:confirm', [
			'type' => 'warning',
			'title' => 'Delete Operation',
			'text' => 'Are you sure you want to delete this record?',
		]);
	}

	// A method to handle the toggleable columns update event
	public function onUpdatedToggleable(string $id, string $field, string $value): void
	{
		// Updates the specified field of the record with the new value
		Accommodation::query()->find($id)->update([
			$field => $value,
		]);
	}

	// A method to handle the editable columns update event
	public function onUpdatedEditable(string $id, string $field, string $value): void
	{
		// Dumps the name of the field being updated

		// Updates the specified field of the record with the new value
		Accommodation::query()->find($id)->update([
			$field => $value,
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
	 * PowerGrid Accommodation Action Buttons.
	 *
	 * @return array<int, Button>
	 */

	/*
	public function actions(): array
	{
	   return [
		   Button::make('edit', 'Edit')
			   ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
			   ->route('accommodation.edit', ['accommodation' => 'id']),

		   Button::make('destroy', 'Delete')
			   ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
			   ->route('accommodation.destroy', ['accommodation' => 'id'])
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
	 * PowerGrid Accommodation Action Rules.
	 *
	 * @return array<int, RuleActions>
	 */

	/*
	public function actionRules(): array
	{
	   return [

		   //Hide button edit for ID 1
			Rule::button('edit')
				->when(fn($accommodation) => $accommodation->id === 1)
				->hide(),
		];
	}
	*/
}
