<?php

namespace App\Http\Livewire\app\common\lists;

use App\Models\Tenant\AdminTeam;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class AdminTeams extends PowerGridComponent
{
	use ActionButton;
	public $name;
    public $deleteRecordId;
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
	* @return Builder<\App\Models\Tenant\AdminTeam>
	*/
	public function datasource(): Builder
	{
		return AdminTeam::query();
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
		->addColumn('team_name', function (AdminTeam $model) {
			return '<h6 class="fw-semibold">'. $model->team_name .'</h6><p>'. $model->team_email .'</p></div></div>';
		})
			->addColumn('team_phone')
			->addColumn('total_members', function (AdminTeam $model) {
				return "<div class='text-center'>".count($model->staff)."</div>";
			})

            ->addColumn('status', function (AdminTeam $model) {
                return ($model->status);
            })
            ->addColumn('edit',function(AdminTeam $model){
                return '<div class="d-flex actions">
                <a  wire:click="edit('.$model->id.')" title="Edit Team" aria-label="Edit Team"
                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
                    <use xlink:href="/css/common-icons.svg#pencil"></use>
                </svg>
            </a>
            <a @click="adminStaffDetails = true" href="javascript:void(0)" title="View Admin Staff" aria-label="View Admin Staff" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                    <svg aria-label="View" class="fill" width="20" height="28" viewBox="0 0 20 28" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/provider.svg#view"></use>
										            </svg>
                                                </a>
            <a href="#" title="Delete Team" aria-label="Delete Team" wire:click="deleteRecord('.$model->id.')"  class="btn btn-sm btn-secondary rounded btn-hs-icon">
            <svg aria-label="Edit Team" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use></svg>
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
    function edit($id){
        // Emits an event to show the form for editing a record
        $this->emit('showForm', AdminTeam::find($id));
    }

	 /**
	 * PowerGrid Columns.
	 *
	 * @return array<int, Column>
	 */
	public function columns(): array
	{
		return [
			Column::make('Team', 'team_name', '')
				->searchable()
				->makeinputtext()
				->sortable(),
			Column::make('Phone Number', 'team_phone')
                ->searchable()
                ->makeinputtext()
                ->sortable(),
			Column::make('Total Members', 'total_members'),
            Column::make('Status', 'status', '')->makeBooleanFilter('status', 'Activated', 'Deactivated')
			->toggleable(1, 'Activated', 'Dectivated'),
			Column::make('Action', 'edit'),
		];
	}

	// A method to handle the editable columns update event
	public function onUpdatedEditable(string $id, string $field, string $value): void
	{
		// Updates the specified field of the record with the new value
		AdminTeam::query()->find($id)->update([
			$field => $value,
		]);
	}
		// A method to handle the toggleable columns update event
	public function onUpdatedToggleable(string $id, string $field, string $value): void
	{
		// Updates the specified field of the record with the new value
		AdminTeam::query()->where('id',$id)->update([
			'status' => $value,
		]);

	}
	

	function showProfile() {
		// Emits an event to show the customer profile
		$this->emit('showProfile');
	}
    public function deleteRecord($id){
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
}
