<?php

namespace App\Http\Livewire\app\common\lists;

use App\Models\Tenant\Setup;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class SetupList extends PowerGridComponent
{
	use ActionButton;

	public $selectedSetupId;
	public $setup_value_label;
    public $setupDeleteable;  // updated by shanila to add a new column in tables which can be deletable

	/*
	|--------------------------------------------------------------------------
	|  Features Setup
	|--------------------------------------------------------------------------
	| Setup Table's general features
	|
	*/
	public function setUp(): array
	{
		//$this->showCheckBox();

		return [

			Header::make()->showSearchInput(), //updated by Amna Bilal to add toggle column option
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
	* @return Builder<\App\Models\Tenant\Setup>
	*/
	public function datasource(): Builder
	{
		return Setup::query()
			->leftJoin('setup_values', function ($setupValues) {
				$setupValues->on('setup_values.setup_id', '=', 'setup.id');
			})
			->selectRaw(
				'setup.id,
				setup.setup_value,
				COUNT(setup_values.setup_id) as values_added',
			)->groupByRaw('setup_values.setup_id, setup.id, setup.setup_value');
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
		->addColumn('setup_value')
		->addColumn('values_added')
		->addColumn('status', function (Setup $model) {
			return ($model->status);
		})
		->addColumn('edit', function(Setup $model) {
            $model = Setup::find($model->id);
			return '<div class="d-flex actions"><a  wire:click.prevent="showDetails('.$model->id.',\''.$model->setup_value.'\',\''.$model->setup_deleteable.'\')" x-on:click="setupDetails = true" href="#" title="View Setup" aria-label="View Setup" class="btn btn-sm btn-secondary rounded btn-hs-icon"><svg aria-label="View Setup" width="20" height="20" viewBox="0 0 20 20"><use xlink:href="/css/common-icons.svg#view"></use></svg></a></div>';
		});   // updated by shanila to add a new column in tables which can be deletable

	}

	public function showDetails($setupId,$setupLabel, $setupDeleteable)
	{
        //dd($setupDeleteable);
		$this->selectedSetupId = $setupId;
        $this->setupDeleteable = $setupDeleteable; // updated by shanila to add a new column in tables which can be deletable

		$this->emitUp('refreshSetupDetails',$setupId,$setupLabel,$setupDeleteable); // updated by shanila to add a new column in tables which can be deletable

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
			Column::make('Setup Value', 'setup_value', '')
				->searchable()
				->sortable(),
			Column::make('Values Added', 'values_added', ''),
			Column::make('Actions', 'edit')->visibleInExport(false) //updated by Amna Bilal to hide action from export
		];
	}


	/*
	|--------------------------------------------------------------------------
	| Actions Method
	|--------------------------------------------------------------------------
	| Enable the method below only if the Routes below are defined in your app.
	|
	*/

	 /**
	 * PowerGrid Setup Action Buttons.
	 *
	 * @return array<int, Button>
	 */

	/*
	public function actions(): array
	{
	   return [
		   Button::make('edit', 'Edit')
			   ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
			   ->route('setup.edit', ['setup' => 'id']),

		   Button::make('destroy', 'Delete')
			   ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
			   ->route('setup.destroy', ['setup' => 'id'])
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
	 * PowerGrid Setup Action Rules.
	 *
	 * @return array<int, RuleActions>
	 */

	/*
	public function actionRules(): array
	{
	   return [

		   //Hide button edit for ID 1
			Rule::button('edit')
				->when(fn($setup) => $setup->id === 1)
				->hide(),
		];
	}
	*/
}
