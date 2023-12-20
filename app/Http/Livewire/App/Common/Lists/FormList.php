<?php
// updated by shanila

namespace App\Http\Livewire\App\Common\Lists;

use App\Models\Tenant\SetupValue;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class FormList extends PowerGridComponent
{
    use ActionButton;
    protected $listeners = ['refresh'=>'setUp'];
    public $setup_value_label;
    public $setupId, $selectedFormId, $formDeleteable;

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


        return SetupValue::query()->where('setup_id',7);
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
            ->addColumn('view',function(SetupValue $model){
                 return '<div class="d-flex actions"><a  wire:click.prevent="showDetails(' . $model->id . ',\'' . $model->setup_value_label . '\',\'0\')"  x-on:click="formDetails = true" href="#" title="View Forms" aria-label="View Forms" class="btn btn-sm btn-secondary rounded btn-hs-icon"><svg aria-label="View Form" width="20" height="20" viewBox="0 0 20 20"><use xlink:href="/css/common-icons.svg#view"></use></svg></a></div>';
            });// updated by shanila to add a show details

    }
    public function showDetails($formId, $formLabel, $formDeleteable)
    {
        // dd($formId,$formLabel,$formDeleteable);
        $this->selectedFormId = $formId;
        $this->formDeleteable = $formDeleteable;

        $this->emit('refreshFormDetails', $formId, $formLabel, $formDeleteable); 

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
            Column::make('Form Types', 'setup_value_label', ''),
            Column::make('Status', 'status', '')
                ->toggleable(1, 'Deactivated', 'Activated'),
            Column::make('Action', 'view', '')
        ];
    }
     // A method to show details
     function view($id){
        // Emits an event to show details
        $this->emit('showForm', SetupValue::find($id));
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
