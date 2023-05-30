<?php

namespace App\Http\Livewire\App\Common\Lists;

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
	public $status;


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
		->where('status',$this->status)
		->whereHas('roles', function ($query) {
			$query->wherein('role_id',[2]);
		})->join('user_details', function ($userdetails) {
			$userdetails->on('user_details.user_id', '=', 'users.id');
		})->select([
			'users.id',
			'users.name',
			'users.email',
			'user_details.phone',
			'status'
		])

;

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
		->addColumn('phone')
		->addColumn('upcoming', function (User $model) {
			return rand(0,20);
		})
        ->addColumn('status', function (User $model) {
			return ($model->status);
		})

		->addColumn('edit', function(User $model) {
			return "<div class='d-flex actions'>
            <a href='#' wire:click=\"edit($model->id)\" title='Edit Team' aria-label='Edit Team' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg title='Edit Team' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#pencil'></use></svg></a>
            <a href='#' title='View Team' aria-label='View Team' class='btn btn-sm btn-secondary rounded btn-hs-icon'  wire:click=\"showProfile($model->id)\"><svg aria-label='View Team' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#view'><use></svg></a>
            </div>";
		});
	}
    function edit($id){
        // Emits an event to show the form for editing a record
        $this->emit('showForm', User::with(['userdetail'])->find($id));
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
			Column::make('Name', 'Provider', '')
				->field('customer', 'users.name')
				->searchable()
				->makeinputtext()
				->sortable(),




            // ->editOnClick(),
            Column::make('Phone Number', 'phone', '')
			->searchable()
				->makeinputtext()
				->sortable(),
			Column::make('Upcoming Appointments', 'upcoming', ''),
			
	
			Column::make('Status', 'status', '')
			->toggleable(1, 'Deactivated', 'Activated'),
		   Column::make('Actions', 'edit')->visibleInExport(false)
		];
	}





	 // A method to handle the toggleable columns update event
	 public function onUpdatedToggleable(string $id, string $field, string $value): void
	 {

		 // Updates the specified field of the record with the new value

	    User::query()->where('id',$id)->update([
			 $field => $value,
		 ]);
		 $this->dispatchBrowserEvent('swal:modal', [
			'type' => 'success',
			'title' => 'Success',
			'text' => 'Status updated',
		]);
		

	 }
     function showProfile($id) {

		// Emits an event to show the customer profile
		$this->emit('showProfile');

		$this->emit('showProfile', User::with(['userdetail'])->find($id));
	}

}
