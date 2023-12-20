<?php

namespace App\Http\Livewire\App\Common\Lists;

use App\Models\Tenant\Specialization;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Specializations extends PowerGridComponent
{
    use ActionButton;
    protected $listeners = ['refresh'=>'setUp'];
    public $name;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |--------------------------------------------------------------------------
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
    |--------------------------------------------------------------------------
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Tenant\Specialization>
     */
    public function datasource(): Builder
    {
        return Specialization::query()->whereIn('status',[0,1]);
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |--------------------------------------------------------------------------
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
    |--------------------------------------------------------------------------
    */
    public function addColumns(): PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('name')
            ->addColumn('status', function (Specialization $model) {
                return ($model->status);
            })
            ->addColumn('edit',function(Specialization $model){
                return '<div class="d-flex actions">
                <a href="#" title="Edit Specialization" wire:click="edit('.$model->id.')"  aria-label="Edit Specialization" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                   <svg aria-label="Edit Specialization" width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use></svg>
                </a>

            <a href="#" title="Delete Specialization" aria-label="Delete Specialization" wire:click="deleteRecord('.$model->id.')"  class="btn btn-sm btn-secondary rounded btn-hs-icon">
            <svg aria-label="Delete Specialization" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use></svg>
            </a>
              </div>';
            });
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        // Returns an array of columns for the PowerGrid component
        return [
            Column::make('Name', 'name', '')->searchable()->makeinputtext()->sortable()->editOnClick(),
            Column::make('Status', 'status', '')->makeBooleanFilter('status', 'Activated', 'Deactivated')
            ->toggleable(1, 'Activated', 'Dectivated'),
            Column::make('Actions', 'edit')->visibleInExport(false),
        ];
    }

    // A method to handle the edit button click event
    function edit($id){
        // Emits an event to show the form for editing a record
        $this->emit('showForm', Specialization::find($id));
    }

    // A method to handle the delete button click event
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

    // A method to handle the toggleable columns update event
    public function onUpdatedToggleable(string $id, string $field, string $value): void
    {
        // Updates the specified field of the record with the new value
        Specialization::query()->where('id',$id)->update([
            'status' => $value,
        ]);
    }

    // A method to handle the editable columns update event
    public function onUpdatedEditable(string $id, string $field, string $value): void
    {
        // Dumps the name of the field being updated

        // Updates the specified field of the record with the new value
        Specialization::query()->find($id)->update([
            $field => $value,
        ]);
    }


}
