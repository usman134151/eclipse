<?php

namespace App\Http\Livewire\app\common\lists;

use Carbon\Carbon;


use App\Models\Tenant\Log;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class SystemLogs extends PowerGridComponent
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
				->showPerPage()
				->showRecordCount()
				->showPerPage(config('app.per_page_big'))->pagination('livewire.app.common.bookings.booking-nav'), //updated by Hammad to add custom pagination
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
	* @return Builder<\App\Models\Tenant\Log>
	*/
	public function datasource(): Builder
	{
		return Log::query()->orderByDesc('created_at');
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
        ->addColumn('created_at_formatted', function (Log $model) {
            return modifyDateTimeFormat($model->created_at);
        })
	
        ->addColumn('message', function (Log $model) {
            return $model->message;
        })
        ->addColumn('ip_address', function (Log $model) {
            return $model->ip_address;
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
        $this->emit('showForm', Log::find($id));
    }

	 /**
	 * PowerGrid Columns.
	 *
	 * @return array<int, Column>
	 */
	public function columns(): array
	{
		return [
			Column::make('DATE & TIME', 'created_at_formatted')
			  ->sortable('desc'),
			Column::make('MESSAGE', 'message')
			->searchable()->makeinputtext()->sortable(),
            Column::make('IP ADDRESS', 'ip_address'),
		];
	}

	// A method to handle the editable columns update event
	public function onUpdatedEditable(string $id, string $field, string $value): void
	{
		// Updates the specified field of the record with the new value
		Log::query()->find($id)->update([
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
