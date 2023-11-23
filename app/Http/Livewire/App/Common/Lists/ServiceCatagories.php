<?php

namespace App\Http\Livewire\app\common\lists;

use App\Models\Tenant\ServiceCategory;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};
use Auth;
use Illuminate\Support\Facades\DB;
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
		return ServiceCategory::query()->where('status', '<', 2);
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
            ->addColumn('icon', function (ServiceCategory $model) {
                return '<a @click.prevent="associateCompanies = true;$wire.updateService('.$model->id.')">
                    <svg aria-label="Associate Companies & Customers" width="60" height="41" viewBox="0 0 60 41" fill="none"
                      xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/common-icons.svg#chain"></use>
                    </svg> Associate Companies & Customers
                </a>';
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
            <a href="#" wire:click="copyService('.$model->id.')" class="btn btn-sm btn-secondary rounded btn-hs-icon" title="Duplicate Service" aria-label="Duplicate Service">
            <svg aria-label="Duplicate Service" width="19" height="19" viewBox="0 0 19 19" fill="currentColor" stroke="currentColor">
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
        $this->emit('showForm', ServiceCategory::with('specializations')->find($id));
    }
    function updateService($id){
        // Emits an event to show the form for editing a record
        $this->emit('associateService', ServiceCategory::find($id));
    }
	public function copyService($serviceId)
    {
        // Find the original service record
        $originalService = ServiceCategory::with('specializations')->findOrFail($serviceId);
        
        // Create a copy of the service record
        $newService = $originalService->replicate();
		$newService->name=$newService->name.'_copy';

        $newService->save();
        
		

		// Copy the relations
		foreach ($originalService->specializations as $specialization) {
			$newSpecialization = $specialization->replicate();
			$newSpecialization->save();
		
			// Copy additional fields in the relationship
			$pivotData = DB::table('service_specializations')
				->where('service_id', $originalService->id)
				->where('specialization_id', $specialization->id)
				->first();
		
			$pivotData = (array) $pivotData;
			unset($pivotData['id']); // Remove the primary key if present
		
			$pivotData['service_id'] = $newService->id;
		
			DB::table('service_specializations')
				->insert(array_merge($pivotData, [
					'specialization_id' => $newSpecialization->id
				]));
		}
		




        
        // Return the new service object
       

		 // Emits an event to show the form for editing a record
		 $this->emit('showForm', ServiceCategory::with('specializations')->find($newService->id));
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
				Column::make('', 'icon'),

				Column::make('Status', 'status', '')->makeBooleanFilter('status', 'Activated', 'Deactivated')
				->toggleable(1, 'Activated', 'Dectivated'),
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

		// A method to handle the toggleable columns update event
		public function onUpdatedToggleable(string $id, string $field, string $value): void
		{
			
			
			// Updates the specified field of the record with the new value
			ServiceCategory::query()->where('id',$id)->update([
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
