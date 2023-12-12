<?php

namespace App\Http\Livewire\App\Common\Lists;

use Livewire\Component;
use App\Models\Tenant\NotificationTemplates;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};


class NotificationConfiguration extends PowerGridComponent
{
    use ActionButton;
    protected $listeners = ['refresh'=>'setUp'];
    public $name;
    public $selectedRoleId;
    public $typeId;

    public $notification_type;
    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |--------------------------------------------------------------------------
    */
    public function setUp(): array
    {

        return [
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
    |--------------------------------------------------------------------------
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Tenant\NotificationTemplates>
     */
    public function datasource(): Builder
    {
        $query = NotificationTemplates::query()
        // ->join('notification_template_roles', 'notification_templates.id', '=', 'notification_template_roles.notification_id')
        ->join('trigger_types', 'notification_templates.trigger_type_id', '=', 'trigger_types.id')
        ->select([
            'notification_templates.id',
            'notification_templates.name',
            'notification_templates.trigger',
            // 'notification_templates.slug',
            'trigger_types.name as trigger_type',
            'notification_templates.status as status',
            'notification_templates.notification_type',
            // 'notification_template_roles.customer_roles'
        ]);
        $query->where('notification_templates.notification_type', $this->notification_type)
        ->with('notificationTemplateRoles.role');
        if ($this->typeId !== null) {
            $query->where('trigger_types.id', $this->typeId);
        }
        if ($this->selectedRoleId !== null) {
            $query->whereExists(function ($query) {
                $query->select('notification_template_roles.id')
                    ->from('notification_template_roles')
                    ->whereColumn('notification_templates.id', 'notification_template_roles.notification_id')
                    ->where('notification_template_roles.role_id', $this->selectedRoleId);
            });
        }
    return $query;
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
            ->addColumn('trigger_type', function (NotificationTemplates $model) {
                return ($model->trigger_type);
            })
            ->addColumn('role_id', function (NotificationTemplates $model) {
                return ($model->notificationTemplateRoles->pluck('role.display_name')->implode(', '));
            })
            ->addColumn('name')
            ->addColumn('trigger')
            // ->addColumn('slug')
            // ->addColumn('body')
            ->addColumn('status', function (NotificationTemplates $model) {
                return ($model->status);
            })
            ->addColumn('edit',function(NotificationTemplates $model){
                return '<div class="d-flex actions">
                <a href="#" title="Edit Notification" wire:click="edit('.$model->id.')"  aria-label="Edit Notification" class="btn btn-sm btn-secondary rounded btn-hs-icon">
                   <svg aria-label="Edit Notification" width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#edit-icon"></use></svg>
                </a>';
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
            Column::make('Type', 'trigger_type', ''),
            Column::make('Name', 'name', 'notification_templates.name')->searchable()->makeinputtext()->sortable()->editOnClick(),
            Column::make('TRIGGER', 'trigger', ''),
            // Column::make('TRIGGER DESCRIPTION', 'slug', '')->editOnClick(),
            // Column::make('Subject', 'body', '')->editOnClick(),
            Column::make('USER ROLES', 'role_id', 'roles.display_name')->searchable(),
            Column::make('Status', 'status', '')->makeBooleanFilter('status', 'Activated', 'Deactivated')
            ->toggleable(1, 'Activated', 'Dectivated'),
            Column::make('Actions', 'edit')->visibleInExport(false),
        ];
    }

    // A method to handle the edit button click event
    function edit($id){
        // Emits an event to show the form for editing a record
        $this->emit('showForm', NotificationTemplates::find($id));
    }

    // A method to handle the delete button click event


    // A method to handle the toggleable columns update event
    public function onUpdatedToggleable(string $id, string $field, string $value): void
    {
        // Updates the specified field of the record with the new value
        NotificationTemplates::query()->where('id',$id)->update([
            'status' => $value,
        ]);
    }

    // A method to handle the editable columns update event
    public function onUpdatedEditable(string $id, string $field, string $value): void
    {
        // Dumps the name of the field being updated

        // Updates the specified field of the record with the new value
        NotificationTemplates::query()->find($id)->update([
            $field => $value,
        ]);
    }

}
