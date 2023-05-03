<?php

namespace App\Http\Livewire\app\common\lists;

use App\Models\Tenant\User;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Providers extends PowerGridComponent
{
	use ActionButton;
	protected $listeners = ['refresh'=>'setUp'];
	public $name;
	public string $primaryKey = 'users.id';
	
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
	* @return Builder<\App\Models\Tenant\User>
	*/
	public function datasource(): Builder
	{
		return User::query()
		->whereHas('roles', function ($query) {
			$query->where('role_id', 2);
		});
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
		->addColumn('team', function (User $model) {
			return '<div class="row g-2 align-items-center"><div class="col-md-2"><img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Profile Image"></div><div class="col-md-10"><h6 class="fw-semibold">'. $model->name .'</h6><p>'. $model->email .'</p></div></div>';
		})
		->addColumn('phone', function () {
			return '(923) 023-9683';
		})
		->addColumn('upcoming_appointments', function () {
			return "<div class='text-center'>5</div>";
		})
		->addColumn('edit', function() {
			return "<div class='d-flex actions'><a href='#' title='Edit Provider' aria-label='Edit Provider' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg title='Edit Provider' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#pencil'></use></svg></a><a href='#' aria-label='View Provider' class='btn btn-sm btn-secondary rounded btn-hs-icon' wire:click='showProfile'><svg aria-label='View Provider' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#view'></use></svg></a><div class='d-flex actions'><div class='dropdown ac-cstm'><a href='javascript:void(0)' title='More Options' aria-label='More Options' class='btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle' data-bs-toggle='dropdown' data-bs-auto-close='outside' data-bs-popper-config='{&quot;strategy&quot;:&quot;fixed&quot;}'><svg aria-label='More Options' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#dropdown'></use></svg></a><div class='tablediv dropdown-menu'><a title='Edit' aria-label='Edit' href='#' class='dropdown-item'><i class='fa fa-eye'></i>View Schedule</a><a title='Edit' aria-label='Edit' href='#' class='dropdown-item'><i class='fa fa-eye'></i>View Payment</a><a title='Message Customer' aria-label='Message Customer' class='dropdown-item' href='#'><i class='fa fa-comment'></i>Chat with Provider</a><a href='javascript:void(0)' aria-label='Deactivate' title='Deactivate' class='dropdown-item'><i class='fa fa-times-circle'></i>Deactivate</a></div></div></div></div>";
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
			Column::make('Team', 'team', '')
				->field('team', 'users.name')
				->searchable()
				->makeinputtext()
				->sortable(),
				// ->editOnClick(),
			Column::make('Phone Number', 'phone', ''),
				// ->sortable(),
			Column::make('Upcoming Appointments', 'upcoming_appointments', ''),
			Column::make('Actions', 'edit')->visibleInExport(false),
		];
	}

	// A method to handle the toggleable columns update event
	public function onUpdatedToggleable(string $id, string $field, string $value): void
	{
		// Updates the specified field of the record with the new value
		User::query()->find($id)->update([
			$field => $value,
		]);
	}

	// A method to handle the editable columns update event
	public function onUpdatedEditable(string $id, string $field, string $value): void
	{
		// Updates the specified field of the record with the new value
		User::query()->find($id)->update([
			$field => $value,
		]);
	}

	function showProfile() {
		// Emits an event to show the customer profile
		$this->emit('showProfile');
	}
}
