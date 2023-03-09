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
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
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
    * @return Builder<\App\Models\Tenant\Specialization>
    */
    public function datasource(): Builder
    {
        return Specialization::query();
        
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
        ->addColumn('status', function (Specialization $model) {
            return ($model->status);
          })
        ->addColumn('edit',function(Specialization $model){
            return '<div class="d-flex actions">
            <a href="#" title="Edit Specialization" wire:click="edit('.$model->id.')"  aria-label="Edit Specialization" class="btn btn-sm btn-secondary rounded btn-hs-icon">
               <svg width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use></svg>
            </a>

        <a href="#" title="Delete Specialization" aria-label="Delete Specialization" wire:click="deleteRecord('.$model->id.')"  class="btn btn-sm btn-secondary rounded btn-hs-icon">
        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#delete-icon"></use></svg>
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

     /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::make('Name', 'name', '')->searchable()->makeinputtext()->sortable()->editOnClick(),
            Column::make('Status', 'status', '')->makeBooleanFilter('status', 'Deactivated', 'Activated')
            ->toggleable(1, 'Deactivated', 'Activated'),
            Column::make('Actions','edit')
        ]
;
    }

    function edit($id){
        
        
        $this->emit('showForm',Specialization::find($id));
    }




    public function deleteRecord($id){
        $this->deleteRecordId=$id;
        $this->emit('updateRecordId',$id);
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'title' => 'Delete Operation',
            'text' => 'Are you sure you want to delete this record?',
        ]);
       
        
    }

    public function onUpdatedToggleable(string $id, string $field, string $value): void
{
    Specialization::query()->find($id)->update([
        $field => $value,
    ]);
}
public function onUpdatedEditable(string $id, string $field, string $value): void
{
    dd($field);
    Specialization::query()->find($id)->update([
        $field => $value,
    ]);
}
  
}
