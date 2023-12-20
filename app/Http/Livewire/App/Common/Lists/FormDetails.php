<?php

namespace App\Http\Livewire\App\Common\Lists;

use App\Models\Tenant\CustomizeForms;
use App\Services\CustomizeForm;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class FormDetails extends PowerGridComponent
{
    use ActionButton;
    public $formId, $formDeleteable, $deleteRecordId;
    protected $listeners = ['refresh' => 'setUp', 'refreshDetailList' => 'refreshList'];

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
            Header::make()->showSearchInput()->showToggleColumns(), //updated by Maarooshaa to add column toggle
            Footer::make()
                ->showPerPage()
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
    * @return Builder<\App\Models\Tenant\CustomizeForms>
    */
    public function datasource(): Builder
    {
        return CustomizeForms::query()->where('form_name_id', $this->formId)
            ->leftJoin('industries','industries.id','industry_id')
            ->join('setup_values', 'setup_values.id', 'form_name_id')
            ->select([
            'customize_forms.id',
            'customize_forms.form_name_id', 'setup_values.setup_value_label as form_name',
			'request_form_name',
			'screen_name',
			'industry_id','industries.name as industry_name',
			'customize_forms.status'
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
        ->addColumn('form_name')
            ->addColumn('request_form_name')
            ->addColumn('industry_name')
            ->addColumn('screen_name')

        
        ->addColumn('status', function (CustomizeForms $model) {
            return ($model->status);
        })
        ->addColumn('view', function (CustomizeForms $model) {
            return '<div class="d-flex actions"><a  href="/admin/customize-form/edit-form/'.$model->id.'" title="Edit Form" aria-label="Edit Form" class="btn btn-sm btn-secondary rounded btn-hs-icon"><svg aria-label="Edit Form" width="20" height="20" viewBox="0 0 20 20"><use xlink:href="/css/common-icons.svg#pencil"></use></svg></a></div>';
        })                   
        ->addColumn('form_deleteable', function (CustomizeForms $model) {

            if ($this->formDeleteable) {
                return '<div class="d-flex actions"> <a href="#" title="Delete Form" aria-label="Delete Form" wire:click="deleteRecord(' . $model->id . ')"  class="btn btn-sm btn-secondary rounded btn-hs-icon">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use></svg>
                            </a> </div>';
            }
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
        $columns=[];
        if ($this->formId == 37) {
            $columns[] = Column::make('Name', 'request_form_name', '')->searchable()->makeinputtext()->sortable();
            $columns[] = Column::make('Industry', 'industry_name', '')->field('industry_name','industries.name','')->searchable()->makeinputtext()->sortable();
            
        }
        else {
            $columns[] = Column::make('Name', 'request_form_name', '')->searchable()->makeinputtext()->sortable();
        }
    
        if ($this->formId == 38) {
            $columns[] = Column::make('Industry', 'industry_name', '')->field('industry_name', 'industries.name', '')->searchable()->makeinputtext()->sortable();
        }
        if ($this->formId == 39) {
            $columns[]= Column::make('Form Name', 'form_name', '')->field('form_name', 'setup_values.setup_value_label')->searchable()->makeinputtext()->sortable();
        }

        if ($this->formId == 40) {
            $columns[] = Column::make('Screen Name', 'screen_name', '')->searchable()->makeinputtext()->sortable();
        }
        $columns[] = Column::make('Status', 'status', '')->toggleable(1, 'Deactivated', 'Activated');
        $columns[] = Column::make('Action', 'view', ''); 
        if ($this->formDeleteable) {
            $columns[] = Column::make('Action', 'form_deleteable', ''); 
        }

        return $columns;
    }

    // A method to handle the edit button click event
    function edit($id)
    {
        // Emits an event to show the form for editing a record
        $this->emit('showForm', CustomizeForms::find($id));
    }

    // A method to handle the delete button click event
    public function deleteRecord($id)
    {
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
        CustomizeForms::query()->find($id)->update([
            $field => $value,
        ]);
    }

    // A method to handle the editable columns update event
    public function onUpdatedEditable(string $id, string $field, string $value): void
    {
        // Dumps the setup_value_label of the field being updated

        // Updates the specified field of the record with the new value
        CustomizeForms::query()->find($id)->update([
            $field => $value,
        ]);
    }

}
