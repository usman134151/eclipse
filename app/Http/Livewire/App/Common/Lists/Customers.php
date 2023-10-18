<?php

namespace App\Http\Livewire\App\Common\Lists;

use App\Models\Tenant\User;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Customers extends PowerGridComponent
{
	use ActionButton;
	protected $listeners = ['refresh' => 'setUp'];
	public $name;
	//public string $primaryKey = 'users.id';
	public $status;
	// public string $sortField = 'users.id';

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
		// return User::query()
		// 	->with(['company', 'role'])
		// 	->whereHas('role', function ($query){
		// 		$query->where('role_id', 4);
		// 	});

		return User::query()
			->where('users.status', $this->status)
			->whereHas('roles', function ($query) {
				$query->where('role_id', 4);
			})
			->leftJoin('companies', 'companies.id', '=', 'users.company_name')
			->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
			->select([
				'users.id as id',
				'users.name',
				'users.email',
				'companies.name as company',
				'user_details.phone',
				'users.status as status',
				'user_details.user_id', 'profile_pic'
			]);
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
			->addColumn('customer', function (User $model) {
				if ($model->profile_pic == null)
					$col = '<div class="row g-2 align-items-center"><div class="col-md-2"><a href="'.route('tenant.customer-profile', ['customerID' => encrypt($model->id)]).'"><img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Profile Image"></a></div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.customer-profile', ['customerID' => encrypt($model->id)]) . '">' . $model->name . '</h6><p>' . $model->email . '</p></a></div></div>';
				else
					$col = '<div class="row g-2 align-items-center"><div class="col-md-2"><a href="'.route('tenant.customer-profile', ['customerID' => encrypt($model->id)]).'"><img style="width:64px;height:64px;top:1rem"  src="' . $model->profile_pic . '" class="img-fluid rounded-circle" alt="Customer Profile Image"></a></div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.customer-profile', ['customerID' => encrypt($model->id)]) . '">' . $model->name . '</h6><p>' . $model->email . '</p></a></div></div>';
				return $col;
			})
			->addColumn('phone')
			->addColumn('company')

			->addColumn('role')
			->addColumn('status', function (User $model) {
				//	dd($model);
				return ($model->status);
			})
			->addColumn('edit', function (User $model) {
				if (session()->get('isCustomer'))
					$del = "";
				else
					$del = "<a href='javascript:void(0)' aria-label='Deactivate' title='Delete' wire:click='deleteItem(" . $model->id . ")' class='dropdown-item'><i class='fa fa-trash'></i>Delete</a>";

				return "<div class='d-flex actions'><a href='" . route('tenant.customer-edit', ['customerID' => encrypt($model->id)]) . "'  title='Edit Customer' aria-label='Edit Team' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg title='Edit Customer' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#pencil'></use></svg></a><a href='" . route('tenant.customer-profile', ['customerID' => encrypt($model->id)]) . "' title='View Customer' aria-label='View Customer' class='btn btn-sm btn-secondary rounded btn-hs-icon'  ><svg aria-label='View Customer' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#view'><use></svg></a><div class='d-flex actions'><div class='dropdown ac-cstm'><a href='javascript:void(0)' title='More Options' aria-label='More Options' class='btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle' data-bs-toggle='dropdown' data-bs-auto-close='outside' data-bs-popper-config='{&quot;strategy&quot;:&quot;fixed&quot;}'><svg aria-label='More Options' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#dropdown'></use></svg></a><div class='tablediv dropdown-menu'><a title='View customer's Invoice' aria-label='View customer's Invoice' href='#' class='dropdown-item'><i class='fa fa-eye'></i>View Customer's Invoices</a><a title='Chat' aria-label='Chat' class='dropdown-item' href='#'><i class='fa fa-comment'></i>Chat</a><a href='javascript:void(0)' aria-label='Deactivate' title='Deactivate' class='dropdown-item'><i class='fa fa-times-circle'></i>Deactivate</a>" . $del . "</div></div></div></div>";
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
			Column::make('Customer', 'customer', '')
				->field('customer', 'users.name')
				->searchable()
				->makeinputtext()
				->sortable(),
			// ->editOnClick(),
			Column::make('Phone', 'phone', 'user_details.phone')
				->searchable()->makeinputtext()->sortable(),
			Column::make('Company', 'company', 'companies.name')
				->searchable()->makeinputtext()->sortable(),

			Column::make('Role', 'role', 'roles.display_name')
				->searchable()
				->sortable(),
			Column::make('Status', 'status', '')->toggleable(1, 'Activated', 'Dectivated'),
			Column::make('Actions', 'edit')->visibleInExport(false),
		];
	}

	// A method to handle the toggleable columns update event
	public function onUpdatedToggleable(string $id, string $field, string $value): void
	{


		// Updates the specified field of the record with the new value
		User::query()->where('id', $id)->update([
			'status' => $value,
		]);
		$this->dispatchBrowserEvent('swal:modal', [
			'type' => 'success',
			'title' => 'Success',
			'text' => 'Status updated',
		]);
	}

	public function deleteItem($id)
	{
		$this->emit('updateRecordId', $id);

		// Dispatches a browser event to show a confirmation modal
		$this->dispatchBrowserEvent('swal:confirm', [
			'type' => 'warning',
			'title' => 'Delete Operation',
			'text' => 'Are you sure you want to delete this record?',
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

	// A method to handle the edit button click event
	function edit($id)
	{

		// Emits an event to show the form for editing a record
		// $this->emit('showForm', User::with(['userdetail','industries','company','addresses'])->find($id));
	}
	function showProfile($id)
	{

		// Emits an event to show the customer profile

		$this->emit('showProfile', User::with(['userdetail', 'industries', 'company'])->find($id));
	}
}
