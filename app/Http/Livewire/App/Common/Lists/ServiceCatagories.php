<?php

namespace App\Http\Livewire\app\common\lists;

use App\Models\Tenant\ServiceCategory;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class ServiceCatagories extends PowerGridComponent
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
	* @return Builder<\App\Models\Tenant\ServiceCategory>
	*/
	public function datasource(): Builder
	{
		return ServiceCategory::query();
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
			->addColumn('company', function () {
				return "Associate Companies & Customers";
			})

            ->addColumn('status', function (ServiceCategory $model) {
                return ($model->status);
            })
            ->addColumn('edit',function(ServiceCategory $model){
                return '<div class="d-flex actions">
                <a  wire:click="edit('.$model->id.')" title="Edit Service" aria-label="Edit Service"
                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                <svg aria-label="Edit" width="20" height="20" viewBox="0 0 20 20">
                    <use xlink:href="/css/common-icons.svg#pencil"></use>
                </svg>
            </a>
            <a href="#" class="btn btn-sm btn-secondary rounded btn-hs-icon" title="Duplicate Service" aria-label="Duplicate Service">
            <svg aria-label="Duplicate Service" width="19" height="19" viewBox="0 0 19 19">
                <use xlink:href="/css/common-icons.svg#duplicate">
                </use>
            </svg>
        </a>
            <a href="#" title="Delete Service" aria-label="Delete Service" wire:click="deleteRecord('.$model->id.')"  class="btn btn-sm btn-secondary rounded btn-hs-icon">
            <svg aria-label="Edit Service" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use></svg>
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
        $this->emit('showForm', ServiceCategory::find($id));
    }

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
				->sortable(),
            Column::make('', 'company')
				->searchable()
				->makeinputtext()
				->sortable(),
            Column::make('Status', 'status', '')
                ->toggleable(1, 'Deactivated', 'Activated'),
			Column::make('Action', 'edit'),
		];
	}

	// A method to handle the editable columns update event
	public function onUpdatedEditable(string $id, string $field, string $value): void
	{
		// Updates the specified field of the record with the new value
		ServiceCategory::query()->find($id)->update([
			$field => $value,
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
