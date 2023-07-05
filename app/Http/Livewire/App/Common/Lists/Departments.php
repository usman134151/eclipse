<?php

namespace App\Http\Livewire\app\common\lists;

use App\Models\Tenant\Company;
use App\Models\Tenant\Department;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Departments extends PowerGridComponent
{
	use ActionButton;
	public $name;
    public $companyId;

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
	* @return Builder<\App\Models\Tenant\Department>
	*/
	public function datasource(): Builder
	{
		return Department::query()->with('phones')->where('company_id',$this->companyId);
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
			->addColumn('phone', function (Department $model) {
			    if(count($model->phones)){

					return $model->phones[0]->phone_number;
				}
				else{
					return 'N/A';
				}


			})
			->addColumn('users', function () {
				return "<div class='text-center'>5</div>";
			})
			->addColumn('edit', function (Department $model) {
				return "<div class='d-flex actions'><a href='".url('/admin/department/edit-department/'.$model->id)."' title='Edit Department' wire:click=\"edit($model->id)\"  aria-label='Edit Department' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg aria-label='Edit' class='fill' width='20' height='28' viewBox='0 0 20 28'fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/sprite.svg#edit-icon'></use></svg></a>
				<a href='javascript:void(0)' wire:click=\"showDepartmentProfile($model->id)\" title='View Department' aria-label='View Department' class='btn btn-sm btn-secondary rounded btn-hs-icon' wire:click='showProfile'><svg aria-label='View' class='fill' width='20' height='28' viewBox='0 0 20 28'fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/provider.svg#view'></use></svg></a><div class='d-flex actions'><div class='dropdown ac-cstm'><a href='javascript:void(0)' class='btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle' title='More Options' aria-label='More Options' data-bs-toggle='dropdown' data-bs-auto-close='outside' data-bs-popper-config='{&quot;strategy&quot;:&quot;fixed&quot;}'><svg aria-label='More Options' class='fill' width='20' height='20' viewBox='0 0 20 20'fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/sprite.svg#dropdown'></use></svg></a><div class='tablediv dropdown-menu'><a title='View Department Users' aria-label='View Department Users' href='#' class='dropdown-item'><i class='fa fa-users'></i>View Department Users</a><a href='#' title='View Department Departments' aria-label='View Department Departments' class='dropdown-item' @click='departmentList = true'><i class='fa fa-building'></i>View Department Departments</a><a href='javascript:void(0)' aria-label='Deactivate Department' title='Deactivate Department' class='dropdown-item'><i class='fa fa-trash'></i>Deactivate Department</a></div></div></div></div>";
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
			Column::make('Department User', 'users'),
			Column::make('Action', 'edit')->visibleInExport(false),
		];
	}

	// A method to handle the editable columns update event
	public function onUpdatedEditable(string $id, string $field, string $value): void
	{
		// Updates the specified field of the record with the new value
		Department::query()->find($id)->update([
			$field => $value,
		]);
	}
    // A method to handle the edit button click event
    function edit($id){

        // Emits an event to show the form for editing a record
        $this->emit('showForm', Department::with('phones')->find($id));
    }
	function showDepartmentProfile($id) {
		// Emits an event to show the customer profile
       
        $this->emit('showDepartmentProfile', Department::with(['phones','addresses'])->find($id));
	}
}
