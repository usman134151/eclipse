<?php

namespace App\Http\Livewire\App\Customer;

use App\Models\Tenant\User;
use App\Services\App\UserService;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class CompanyTeamMembers extends PowerGridComponent
{
    use ActionButton;
    public $company_id;

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
     * @return Builder<\App\Models\Tenant\User>
     */
    public function datasource(): Builder
    {
        return User::query()->where('company_name', $this->company_id)
		// ->whereHas('roles', function ($query) {
		// 	$query->where('role_id', 4);
		// })
		// ->leftJoin('companies', 'companies.id', '=', 'users.company_name')
		->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
		->select([
			'users.id as id',
			'users.name',
			'users.email',
			'user_details.phone',
			'users.status as status',
			'user_details.user_id', 'profile_pic'
		])->with('departments');
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
            ->addColumn('user', function (User $model) {
                if ($model->profile_pic == null)
                    $col = '<div class="row g-2 align-items-center"><div class="col-md-2"><img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Profile Image"></div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.customer-profile', ['customerID' => encrypt($model->id)]) . '">' . $model->name . '</a></h6><p>' . $model->email . '</p></div></div>';
                else
                    $col = '<div class="row g-2 align-items-center"><div class="col-md-2"><img style="width:64px;height:64px;top:1rem"  src="' . $model->profile_pic . '" class="img-fluid rounded-circle" alt="Customer Profile Image"></div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.customer-profile', ['customerID' => encrypt($model->id)]) . '">' . $model->name . '</a></h6><p>' . $model->email . '</p></div></div>';
                return $col;
            })
            ->addColumn('phone', function (User $model) {
                return $model->phone;
            })
            ->addColumn('departments', function (User $model) {
                $col = "<span class='text-primary'>";
                foreach ($model->departments as $dept) {
                    $col .= $dept->name . ", ";
                }
                $col .= "</span>";
                return $col;
            })

            ->addColumn('role', function (User $model) {
                $service = new UserService();
                $col = "";
                $customer_roles =  array_keys($service->getCustomerRoles($model->id));
                if (in_array(10, $customer_roles))
                    $col .= 'Admin, ';
                if (in_array(9, $customer_roles))
                    $col .= 'Billing Manager, ';
                if (in_array(8, $customer_roles))
                    $col .= 'Participant, ';
                if (in_array(7, $customer_roles))
                    $col .= 'Service Consumer, ';
                if (in_array(6, $customer_roles))
                    $col .= 'Requester, ';
                if (in_array(5, $customer_roles))
                    $col .= 'Supervisor, ';


                return $col;
            })
            ->addColumn('active_bookings', function (User $model) {
                $col = "<span class='text-primary'>02 Bookings</span>";

                return $col;
            })


            ->addColumn('edit', function (User $model) {
                return "<div class='d-flex actions'><a href='" . route('tenant.customer-edit', ['customerID' => encrypt($model->id)]) . "'  title='Edit Customer' aria-label='Edit Team' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg title='Edit Customer' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#pencil'></use></svg></a><a href='" . route('tenant.customer-profile', ['customerID' => encrypt($model->id)]) . "' title='View Customer' aria-label='View Customer' class='btn btn-sm btn-secondary rounded btn-hs-icon'  ><svg aria-label='View Customer' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#view'><use></svg></a><div class='d-flex actions'><div class='dropdown ac-cstm'><a href='javascript:void(0)' title='More Options' aria-label='More Options' class='btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle' data-bs-toggle='dropdown' data-bs-auto-close='outside' data-bs-popper-config='{&quot;strategy&quot;:&quot;fixed&quot;}'><svg aria-label='More Options' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#dropdown'></use></svg></a><div class='tablediv dropdown-menu'><a title='View customer's Invoice' aria-label='View customer's Invoice' href='#' class='dropdown-item'><i class='fa fa-eye'></i>View Customer's Invoices</a><a title='Chat' aria-label='Chat' class='dropdown-item' href='#'><i class='fa fa-comment'></i>Chat</a><a href='javascript:void(0)' aria-label='Deactivate' title='Deactivate' class='dropdown-item'><i class='fa fa-times-circle'></i>Deactivate</a></div></div></div></div>";
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
            Column::make('User', 'user', '')
                ->field('user', 'users.name')
                ->searchable()
                ->sortable(),
            Column::make('Phone Number', 'phone')
                ->searchable()->sortable(),
            Column::make('Departments', 'departments', '')
                ->field('departments', ''),
            Column::make('Role', 'role', 'roles.display_name'),
            Column::make('Active Bookings', 'active_bookings', ''),
            Column::make('Actions', 'edit')->visibleInExport(false),
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid User Action Buttons.
     *
     * @return array<int, Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::make('edit', 'Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('user.edit', ['user' => 'id']),

           Button::make('destroy', 'Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('user.destroy', ['user' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid User Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($user) => $user->id === 1)
                ->hide(),
        ];
    }
    */
}
