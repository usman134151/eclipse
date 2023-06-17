<?php

namespace App\Http\Livewire\app\common\lists;

use App\Models\Tenant\Company;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Companies extends PowerGridComponent
{
	use ActionButton;
	public $name;

	/*
	|--------------------------------------------------------------------------
	|  Features Setup
	|--------------------------------------------------------------------------
	| Setup Table's general features
	|
	*/
	protected $listeners = ['refresh'=>'setUp'];
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
	* @return Builder<\App\Models\Tenant\Company>
	*/
	public function datasource(): Builder
	{
		return Company::query()->with('phones');
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
			->addColumn('phone', function (Company $model) {
			    if(count($model->phones)){

					return $model->phones[0]->phone_number;
				}
				else{
					return 'N/A';
				}


			})
			->addColumn('departments', function () {
				return "<div class='text-center'>5</div>";
			})
			->addColumn('users', function () {
				return "<div class='text-center'>5</div>";
			})
			->addColumn('status', function (Company $model) {
                return ($model->status);
            })
			->addColumn('edit', function (Company $model) {
				return "<div class='d-flex actions'><a href='#' title='Edit Company' wire:click=\"edit($model->id)\"  aria-label='Edit Company' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg aria-label='Edit' class='fill' width='20' height='28' viewBox='0 0 20 28'fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/sprite.svg#edit-icon'></use></svg></a>
				<a href='javascript:void(0)' wire:click=\"showProfile($model->id)\" title='View Company' aria-label='View Company' class='btn btn-sm btn-secondary rounded btn-hs-icon' wire:click='showProfile'><svg aria-label='View' class='fill' width='20' height='28' viewBox='0 0 20 28'fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/provider.svg#view'></use></svg></a><div class='d-flex actions'><div class='dropdown ac-cstm'><a href='javascript:void(0)' class='btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle' title='More Options' aria-label='More Options' data-bs-toggle='dropdown' data-bs-auto-close='outside' data-bs-popper-config='{&quot;strategy&quot;:&quot;fixed&quot;}'><svg aria-label='More Options' class='fill' width='20' height='20' viewBox='0 0 20 20'fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/sprite.svg#dropdown'></use></svg></a><div class='tablediv dropdown-menu'><a title='View Company Users' aria-label='View Company Users' href='#' class='dropdown-item'><i class='fa fa-users'></i>View Company Users</a><a href='#' title='View Company Departments' aria-label='View Company Departments' class='dropdown-item' @click='departmentList = true'><i class='fa fa-building'></i>View Company Departments</a><a href='javascript:void(0)' aria-label='Deactivate Company' title='Deactivate Company' class='dropdown-item'><i class='fa fa-trash'></i>Deactivate Company</a></div></div></div></div>";
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
			Column::make('Name', 'name')
				->searchable()
				->makeinputtext()
				->sortable()
				->editOnClick(),
			Column::make('Phone Number', 'phone'),
			Column::make('Total Departments', 'departments'),
			Column::make('Company User', 'users'),
			Column::make('Status', 'status', '')->makeBooleanFilter('status', 'Activated', 'Deactivated')
			->toggleable(1, 'Activated', 'Dectivated'),
			Column::make('Action', 'edit')->visibleInExport(false),
		];
	}

		// A method to handle the toggleable columns update event
		public function onUpdatedToggleable(string $id, string $field, string $value): void
		{
			
			
			// Updates the specified field of the record with the new value
			Company::query()->where('id',$id)->update([
				'status' => $value,
			]);

		}
	// A method to handle the editable columns update event
	public function onUpdatedEditable(string $id, string $field, string $value): void
	{
		// Updates the specified field of the record with the new value
		Company::query()->find($id)->update([
			$field => $value,
		]);
	}
    // A method to handle the edit button click event
    function edit($id){

        // Emits an event to show the form for editing a record
        $this->emit('showForm', Company::with('phones','addresses')->find($id));
    }
	function showProfile($id) {
		// Emits an event to show the customer profile
        $this->emit('showProfile', Company::with(['phones','addresses'])->find($id));
	}
}
