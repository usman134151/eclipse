<?php

namespace App\Http\Livewire\App\Customer;

use App\Models\Tenant\RoleUserDetail;
use App\Models\Tenant\User;
use App\Models\Tenant\UserDetail;
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
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Tenant\User>
     */
    public function datasource(): Builder
    {
        $sv_users = [];
        $bm_users = [];
        $access_users = [];
        if (in_array(5, session()->get('customerRoles'))) //supervisor
            $sv_users =  RoleUserDetail::select('associated_user')
                ->where(['user_id' => Auth::id(), 'role_id' => 5])->get()->pluck('associated_user')->toArray();

        if (in_array(9, session()->get('customerRoles'))) //billing manager
            $bm_users =  RoleUserDetail::select('associated_user')
                ->where(['user_id' => Auth::id(), 'role_id' => 9])->get()->pluck('associated_user')->toArray();

        // if (in_array(6, session()->get('customerRoles')) || in_array(7, session()->get('customerRoles'))|| in_array(8, session()->get('customerRoles'))) {
        $us = UserDetail::where('user_id', Auth::id())->select('user_configuration')->first();

        if ($us->user_configuration != "null" &&  $us->user_configuration != null) {
            $j_us = json_decode($us->user_configuration, true);
          
            if (!is_null($j_us) && key_exists('have_access_to', $j_us) && $j_us['have_access_to'] == true && isset($j_us['have_access_to']))
                $access_users = $j_us['have_access_to'];
        }
        // }

        $merged_users = array_merge($sv_users, $bm_users, $access_users);

        if(!in_array(10, session()->get('customerRoles')) && count($merged_users)==0)
           return User::query()->where('id','-1');

        $companyId = (string) $this->company_id;
        $query = User::query()->where('company_name', $companyId)->whereNotNull('company_name')
            ->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
            ->join('role_user', 'role_user.user_id', '=', 'users.id') // Join with role_user table
            ->where('role_user.role_id', 4)
            ->where('status','1') // Where role_id is 4
            ->select([
                'users.id as id',
                'company_name',
                'users.name',
                'users.email',
                'user_details.phone',
                'users.status as status',
                'user_details.user_id', 'profile_pic'
            ])->with('departments');
            // dd($merged_users);
        // Check if the session has specific roles
        if (!in_array(10, session()->get('customerRoles'))) {
            // Apply the whereIn condition to the query
       
                $query->whereIn('users.id', $merged_users);
        }
        $query->orderBy('users.name');


        return $query;
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
                    $col = '<div class="row g-2 align-items-center"><div class="col-md-2"><img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Profile Image"></div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.team-member-profile', ['customerID' => encrypt($model->id)]) . '">' . $model->name . '</a></h6><p>' . $model->email . '</p></div></div>';
                else
                    $col = '<div class="row g-2 align-items-center"><div class="col-md-2"><img style="width:64px;height:64px;top:1rem"  src="' . $model->profile_pic . '" class="img-fluid rounded-circle" alt="Customer Profile Image"></div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.team-member-profile', ['customerID' => encrypt($model->id)]) . '">' . $model->name . '</a></h6><p>' . $model->email . '</p></div></div>';
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
                if ((in_array(6, session()->get('customerRoles')) || in_array(7, session()->get('customerRoles')) || in_array(8, session()->get('customerRoles')) || in_array(9, session()->get('customerRoles')))&&  !in_array(10, session()->get('customerRoles'))) 
                    return "";
                else
                    return 
                "<div class='d-flex actions'>
                <a href='" . route('tenant.customer-edit-team', ['customerID' => encrypt($model->id)]) . "'  title='Edit Customer' aria-label='Edit Team' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg title='Edit Customer' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#pencil'></use></svg></a>
                <a href='" . route('tenant.team-member-profile', ['customerID' => encrypt($model->id)]) 
				. "' title='View Customer' aria-label='View Customer' class='btn btn-sm btn-secondary rounded btn-hs-icon'  >
				<svg aria-label='View Customer' width='20' height='20' viewBox='0 0 20 20'>
				<use xlink:href='/css/common-icons.svg#view'>
				<use>
				</svg>
				</a>
                </div>";
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
