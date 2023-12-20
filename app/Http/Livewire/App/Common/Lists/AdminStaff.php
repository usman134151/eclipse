<?php

namespace App\Http\Livewire\App\Common\Lists;

use App\Services\App\UserService;
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
	* @return Builder<\App\Models\Tenant\User>
	*/

	public function datasource(): Builder
    {
		

		return User::query()
		->where('status',$this->status)
		->whereHas('roles', function ($query) {
			$query->wherein('role_id',[1,3]);
		})->join('user_details', function ($userdetails) {
			$userdetails->on('user_details.user_id', '=', 'users.id');
		})->select([
			'users.id',
			'users.name',
			'users.email', 'user_details.profile_pic',
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
			if($model->profile_pic == null)
				$col= '<div class="row g-2 align-items-center"><div class="col-md-2"><a href="'.route('tenant.profile-staff',['userID'=>encrypt($model->id)]).'"><img style="width:64px;height:64px;top:1rem" src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Profile Image"></a></div><div class="col-md-10"><a href="'.route('tenant.profile-staff',['userID'=>encrypt($model->id)]).'"><h6 class="fw-semibold">'. $model->name .'</h6><p>'. $model->email .'</p></a></div></div>';
			else
				$col = '<div class="row g-2 align-items-center"><div class="col-md-2"><a href="'.route('tenant.profile-staff',['userID'=>encrypt($model->id)]).'"><img style="width:64px;height:64px;top:1rem" src="'. $model->profile_pic. '" class="img-fluid rounded-circle" alt="Profile Image" style="height: 86px;"></a></div><div class="col-md-10"><a href="'.route('tenant.profile-staff',['userID'=>encrypt($model->id)]).'"><h6 class="fw-semibold">' . $model->name . '</h6><p>' . $model->email . '</p></a></div></div>';
			return $col;
		})
		->addColumn('phone')

        ->addColumn('status', function (User $model) {
			return ($model->status);
		})

		->addColumn('edit', function(User $model) {
			$deleteButton = ($model->id != 1) ? "<a href='#' title='Delete Provider' aria-label='Delete Provider' wire:click='deleteItem(".$model->id.")' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg aria-label='Delete Accommodation' width='21' height='21' viewBox='0 0 21 21' fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/sprite.svg#delete-icon'></use></svg></a>" : "";
		
			return "<div class='d-flex actions'>
				<a href='".route('tenant.edit-staff',['userID'=>encrypt($model->id)]). "' title='Edit Team' aria-label='Edit Team' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg title='Edit Team' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#pencil'></use></svg></a>
				<a href='" . route('tenant.profile-staff', ['userID' => encrypt($model->id)]) . "' title='View Team' aria-label='View Team' class='btn btn-sm btn-secondary rounded btn-hs-icon' ><svg aria-label='View Team' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#view'><use></svg></a>" .
				$deleteButton .
				"</div>";
		});
	}
    function edit($id){
        // Emits an event to show the form for editing a record
        $this->emit('showForm', User::with(['userdetail'])->find($id));
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
			Column::make('Staff Member', 'Admin', '')
				->field('customer', 'users.name')
				->searchable()
				->makeinputtext()
				->sortable(),




            // ->editOnClick(),
            Column::make('Phone Number', 'phone', '')
			->searchable()
				->makeinputtext()
				->sortable(),

			Column::make('Status', 'status', '')->toggleable(1, 'Deactivated', 'Activated'),
		   Column::make('Actions', 'edit')->visibleInExport(false)
		];
	}





	 // A method to handle the toggleable columns update event
	 public function onUpdatedToggleable(string $id, string $field, string $value): void
	 {
		UserService::updateUserStatus($id,$value);

		 // Updates the specified field of the record with the new value

	    // User::query()->where('id',$id)->update([
		// 	 $field => $value,
		//  ]);
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
