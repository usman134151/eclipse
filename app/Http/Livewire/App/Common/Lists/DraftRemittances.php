<?php

namespace App\Http\Livewire\App\Common\Lists;

use App\Models\Tenant\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class DraftRemittances extends PowerGridComponent
{
    use ActionButton;
    public $provider_ids, $name_seacrh_filter, $filter_payment_method;


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
        $query = User::where('status', 1)->whereHas(
            'roles',
            function ($query) {
                $query->where('role_id', 2);
            }
        )
            // TODO :: ADD checks like in remGen
            ->join('booking_providers', 'booking_providers.provider_id', 'users.id')
            ->leftJoin('payment_preferences', 'payment_preferences.provider_id', 'users.id')
            ->where(['payment_status' => 0,  'remittance_id' => 0])
            ->where('booking_providers.invoice_id',null) //remove bookings that have been added to provider-invoicces
            ->join('user_details', function ($userdetails) {
                $userdetails->on('user_details.user_id', '=', 'users.id');
            })
            ->select('users.id', 'users.name', 'user_details.profile_pic', 'payment_preferences.method')

            ->selectRaw('
			COUNT(booking_providers.provider_id) AS pending_bookings,
			SUM(
				CASE
					WHEN booking_providers.is_override_price = 1 THEN override_price
					ELSE booking_providers.total_amount 
				END
			) AS pending_total
		')
            // SUM(CASE WHEN bookings.invoice_status = "0" THEN 1 ELSE 0 END) AS pending_invoices,

            ->groupBy('users.id', 'users.name', 'profile_pic', 'method');

        // dd($query->get());

        if ($this->provider_ids) {
            $query->whereIn('users.id', $this->provider_ids);
        }

        if ($this->filter_payment_method) {
            $query->where('payment_preferences.method', $this->filter_payment_method);
        }

        if ($this->name_seacrh_filter) {
            $name = $this->name_seacrh_filter;
            $query->whereHas('company', function ($query) use ($name) {
                $query->where('name', 'LIKE', '%' . $name . '%');
            });
        }



        return $query;
    }

    protected function getListeners(): array
    {
        return array_merge(
            parent::getListeners(),
            [
                'updateVal'   => 'updateVal',

            ]
        );
    }

    public function updateVal($attrName, $val)
    {
        $this->$attrName = $val;
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
            ->addColumn('provider_name', function (User $modal) {
                $logo = $modal->profile_pic != null ? $modal->profile_pic : '/tenant-resources/images/portrait/small/avatar-s-20.jpg';
                return '<div class="d-flex gap-2 align-items-center">
							<div>
								<img width="50" height="50" src="' . $logo . '" class="rounded-circle" alt="User Profile Image">
							</div>
							<div class="pt-2">
								<div class="font-family-secondary leading-none">
								<a @click="remittanceGeneratorBooking = true"  wire:click="$emit(\'openRemittanceGeneratorPanel\',\'' . $modal->id . '\')" title="' . $modal->name . '" aria-label="Booking" class="btn btn-hs-icon p-0">
									' . $modal->name . '
								</a>
								</div>
							</div>
						</div>';
            })
            ->addColumn('pending_total', function (User $modal) {
                return numberFormat($modal->pending_total);
            })->addColumn('pending_bookings', function (User $modal) {
                return $modal->pending_bookings;
            })
            // ->addColumn('invoices', function (User $modal) {
            //     return "10";
            // })
            ->addColumn('method', function (User $modal) {
                if (isset($modal->method) && $modal->method == 2)
                    return 'Mail a Cheque';
                else
                    return 'Direct Deposit';
            })


            ->addColumn('next', function (User $modal) {
                return '
				<div class="d-flex actions justify-content-center">
					<a  @click="remittanceGeneratorBooking = true"  wire:click="$emit(\'openRemittanceGeneratorPanel\',\'' . $modal->id . '\')" title="Generate Remittance" aria-label="Booking" class="btn btn-hs-icon p-0">
						<svg aria-label="Bookings" class="fill-stroke" width="12" height="15" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<use xlink:href="/css/common-icons.svg#bookings"></use>
						</svg>
					</a>
				</div>';
                // wire:click="openCompanyBookingsPanel(' . $modal->id . ')" 
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
            Column::make('Provider', 'provider_name', '')
                ->field('provider_name', 'name')
                ->searchable(),
            Column::make('TOTAL PENDING', 'pending_total'),
            // Column::make('No. OF Invoices', 'invoices'),
            Column::make('Pending Bookings', 'pending_bookings'),
            Column::make('PREFERRED PAYMENT METHOD', 'method'),
            Column::make('<svg  width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.875 1L10.75 7.5L5.875 14" stroke="white" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1L5.875 7.5L1 14" stroke="white" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>', 'next',)
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
