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
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
              </svg>
            </a>

        <a href="#" title="Delete Specialization" aria-label="Delete Specialization" wire:click="deleteRecord('.$model->id.')" >
          <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_7637_25118)">
            <circle cx="15" cy="15" r="15" fill="url(#paint0_linear_7637_25118)"></circle>
            <circle cx="15" cy="15" r="15" fill="url(#paint1_linear_7637_25118)"></circle>
            <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint2_linear_7637_25118)"></circle>
            <circle cx="15" cy="15" r="15" transform="rotate(90 15 15)" fill="url(#paint3_linear_7637_25118)"></circle>
            </g>
            <path d="M12.4 9.2H16.6C16.6 8.64305 16.3787 8.1089 15.9849 7.71508C15.5911 7.32125 15.057 7.1 14.5 7.1C13.943 7.1 13.4089 7.32125 13.0151 7.71508C12.6212 8.1089 12.4 8.64305 12.4 9.2ZM10.3 9.2C10.3 8.08609 10.7425 7.0178 11.5302 6.23015C12.3178 5.4425 13.3861 5 14.5 5C15.6139 5 16.6822 5.4425 17.4698 6.23015C18.2575 7.0178 18.7 8.08609 18.7 9.2H23.95C24.2285 9.2 24.4955 9.31062 24.6925 9.50754C24.8894 9.70445 25 9.97152 25 10.25C25 10.5285 24.8894 10.7955 24.6925 10.9925C24.4955 11.1894 24.2285 11.3 23.95 11.3H23.0239L22.0936 22.157C22.0042 23.2054 21.5245 24.182 20.7494 24.8937C19.9744 25.6053 18.9605 26.0001 17.9083 26H11.0917C10.0395 26.0001 9.02559 25.6053 8.25056 24.8937C7.47552 24.182 6.99584 23.2054 6.9064 22.157L5.9761 11.3H5.05C4.77152 11.3 4.50445 11.1894 4.30754 10.9925C4.11062 10.7955 4 10.5285 4 10.25C4 9.97152 4.11062 9.70445 4.30754 9.50754C4.50445 9.31062 4.77152 9.2 5.05 9.2H10.3ZM17.65 15.5C17.65 15.2215 17.5394 14.9545 17.3425 14.7575C17.1455 14.5606 16.8785 14.45 16.6 14.45C16.3215 14.45 16.0545 14.5606 15.8575 14.7575C15.6606 14.9545 15.55 15.2215 15.55 15.5V19.7C15.55 19.9785 15.6606 20.2455 15.8575 20.4425C16.0545 20.6394 16.3215 20.75 16.6 20.75C16.8785 20.75 17.1455 20.6394 17.3425 20.4425C17.5394 20.2455 17.65 19.9785 17.65 19.7V15.5ZM12.4 14.45C12.6785 14.45 12.9455 14.5606 13.1425 14.7575C13.3394 14.9545 13.45 15.2215 13.45 15.5V19.7C13.45 19.9785 13.3394 20.2455 13.1425 20.4425C12.9455 20.6394 12.6785 20.75 12.4 20.75C12.1215 20.75 11.8545 20.6394 11.6575 20.4425C11.4606 20.2455 11.35 19.9785 11.35 19.7V15.5C11.35 15.2215 11.4606 14.9545 11.6575 14.7575C11.8545 14.5606 12.1215 14.45 12.4 14.45ZM8.998 21.9785C9.04273 22.5029 9.28273 22.9913 9.67046 23.3472C10.0582 23.703 10.5654 23.9003 11.0917 23.9H17.9083C18.4342 23.8998 18.9409 23.7023 19.3282 23.3465C19.7155 22.9907 19.9552 22.5025 19.9999 21.9785L20.9155 11.3H8.0845L9.0001 21.9785H8.998Z" fill="black"></path>
            <defs>
            <linearGradient id="paint0_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
            <stop offset="0.0150376" stop-color="#C4C4C4"></stop>
            <stop offset="1" stop-color="white" stop-opacity="0.01"></stop>
            </linearGradient>
            <linearGradient id="paint1_linear_7637_25118" x1="0" y1="-0.1541" x2="0" y2="30" gradientUnits="userSpaceOnUse">
            <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"></stop>
            <stop offset="1" stop-opacity="0.01"></stop>
            </linearGradient>
            <linearGradient id="paint2_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
            <stop offset="0.0150376" stop-color="#C4C4C4"></stop>
            <stop offset="1" stop-color="white" stop-opacity="0.01"></stop>
            </linearGradient>
            <linearGradient id="paint3_linear_7637_25118" x1="-9.53674e-07" y1="-0.154101" x2="-9.53674e-07" y2="30" gradientUnits="userSpaceOnUse">
            <stop offset="0.0114183" stop-color="white" stop-opacity="0.01"></stop>
            <stop offset="1" stop-opacity="0.01"></stop>
            </linearGradient>
            <clipPath id="clip0_7637_25118">
            <rect width="30" height="30" fill="white"></rect>
            </clipPath>
            </defs>
            </svg>
            
        </a>
          </div>';
            return '<a href="#" wire:click="edit('.$model->id.')"  class="btn btn-sm btn-secondary rounded btn-hs-icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.2555 4.11766L15.8304 0.680256C15.3834 0.258855 14.7977 0.017061 14.1846 0.000869084C13.5715 -0.0153228 12.9739 0.195217 12.5054 0.592439L1.25527 11.8832C0.85122 12.2921 0.599641 12.8281 0.54276 13.4012L0.00525375 18.6325C-0.0115852 18.8163 0.0121717 19.0015 0.074831 19.175C0.13749 19.3485 0.237509 19.5059 0.367758 19.6362C0.484559 19.7524 0.623081 19.8444 0.775379 19.9069C0.927678 19.9693 1.09076 20.0009 1.25527 20H1.36777L6.58033 19.5233C7.15133 19.4662 7.68538 19.2137 8.09284 18.8082L19.343 7.51743C19.7796 7.05447 20.0156 6.43667 19.9992 5.7994C19.9828 5.16213 19.7154 4.55738 19.2555 4.11766ZM6.35532 17.0142L2.60528 17.3655L2.94279 13.6019L10.0054 6.60163L13.3804 9.98885L6.35532 17.0142ZM15.0054 8.30778L11.6554 4.94565L14.0929 2.43659L17.5054 5.86145L15.0054 8.30778Z" fill="black"></path>
            </svg>
        </a>';
            //return '<a href="#" wire:click="edit('.$model->id.')"><i class="fa fa-pencil-square-o"></i>Edit</a>';
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
            Column::make('Name', 'name', '')->searchable()->makeinputtext()->sortable()->editOnClick(1),
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
    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

     /**
     * PowerGrid Specialization Action Buttons.
     *
     * @return array<int, Button>
     */

    
   /* public function actions(): array
    {
       return [
           Button::make('edit', 'Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('admin.specialization.create', ['specialization' => 'id']),

           Button::make('destroy', 'Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('admin.specialization.create', ['specialization' => 'id'])
               ->method('delete')
        ];
    } */
    

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

     /**
     * PowerGrid Specialization Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($specialization) => $specialization->id === 1)
                ->hide(),
        ];
    }
    */
}
