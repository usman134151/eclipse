<?php

namespace App\Http\Livewire\App\Common\Lists;

use App\Models\Tenant\SetupValue;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class SetupDetails extends PowerGridComponent
{
    use ActionButton;
    protected $listeners = ['refresh'=>'setUp','refreshDetailList' => 'refreshList'];
    public $setup_value_label;
    public $setupId;
    public $setupDeleteable;// updated by shanila to add a new column in tables which can be deletable

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |--------------------------------------------------------------------------
    */
    public function refreshList($setupDeleteable)
    {
        // updated by shanila to add a new column in tables which can be deletable
        $this->setupDeleteable = $setupDeleteable;
        // Handle the event data
        // ...
        //dd($setupId);
    }

    public function setUp(): array
    {
        $this->showCheckBox();


        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput()->showToggleColumns(), //updated by Amna Bilal to add column toggle
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
     * @return Builder<\App\Models\Tenant\SetupValue>
     */
    public function datasource(): Builder
    {


        return SetupValue::query()->where('setup_id',$this->setupId);
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
            ->addColumn('setup_value_label')
            ->addColumn('status', function (SetupValue $model) {
                return ($model->status);
            })
            // updated by shanila to add a new column in tables which can be deletable
            ->addColumn('setup_deleteable', function(SetupValue $model) {

                if($this->setupDeleteable){
                    return '<div class="d-flex actions"> <a href="#" title="Delete Setupvalue" aria-label="Delete Setupvalue" wire:click="deleteRecord('.$model->id.')"  class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use></svg>
                                </a> </div>';
                }

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
        $columns = [
            Column::make('Setup Value Label', 'setup_value_label', '')->searchable()->makeinputtext()->sortable()->editOnClick(),
           
        ];


        if (!$this->setupDeleteable){
            $columns[] = Column::make('', 'setup_value_alt_id', '');// updated by shanila to make column
        }

        $columns[]= Column::make('Status', 'status', '')->makeBooleanFilter('status', 'Deactivated', 'Activated')->toggleable(1, 'Deactivated', 'Activated');
        if ($this->setupDeleteable) {
            $columns[] = Column::make('Action', 'setup_deleteable', '');// updated by shanila to make column
        }
        return $columns;
    }
    // A method to handle the edit button click event
    function edit($id){
        // Emits an event to show the form for editing a record
        $this->emit('showForm', SetupValue::find($id));
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
        SetupValue::query()->find($id)->update([
            $field => $value,
        ]);
    }

    // A method to handle the editable columns update event
    public function onUpdatedEditable(string $id, string $field, string $value): void
    {
        // Dumps the setup_value_label of the field being updated

        // Updates the specified field of the record with the new value
        SetupValue::query()->find($id)->update([
            $field => $value,
        ]);
    }


}
