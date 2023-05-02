<?php

namespace App\Http\Livewire\App\Common\Lists;

use App\Models\Tenant\User;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class AdminStaff extends PowerGridComponent
{
	use ActionButton;
	protected $listeners = ['refresh'=>'setUp'];
	public $name;
	public $status;
	public string $primaryKey = 'users.id';
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
				->showPerPage()
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
		->select([
			'users.id',
			'users.name',
			'users.email',
            'users.status',
		])
		->where('users.status',$this->status);
		
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
			return '<div class="row g-2 align-items-center"><div class="col-md-2"><img src="/tenant/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Profile Image"></div><div class="col-md-10"><h6 class="fw-semibold">'. $model->name .'</h6><p>'. $model->email .'</p></div></div>';
		})
		->addColumn('phone', function () {
			return '(923) 023-9683';
		})

        ->addColumn('status')
		
		->addColumn('edit', function() {
			return '<div class="d-flex actions">
            <a href="javascript:void(0)" title="Edit" aria-label="Edit" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="editTeam">
                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
                    <use xlink:href="/css/common-icons.svg#pencil"></use>
                </svg>
            </a>
            <a href="#" title="View" aria-label="View" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="showProfile">
                <svg class="fill" width="20" height="28" viewBox="0 0 20 28" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
                </svg>
            </a>
            <a href="javascript:void(0)" title="Delete" aria-label="Delete Team" class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="deleteConfirm">
                <svg aria-label="Delete" width="21" height="21" viewBox="0 0 21 21">
                    <use xlink:href="/css/common-icons.svg#recycle-bin"></use>
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
            Column::make('Admin', 'customer', '')
            ->field('customer', 'users.name'),
        
            // ->editOnClick(),
            Column::make('Phone Number', 'phone', ''),

           
			
			Column::make('Action', 'edit'),

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
