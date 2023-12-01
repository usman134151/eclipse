<?php

namespace App\Http\Livewire\App\Common\Lists;

use App\Models\Tenant\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class PendingPayments extends PowerGridComponent
{
    use ActionButton;

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
        $query = User::where('status', 1)->whereHas(
            'roles',
            function ($query) {
                $query->where('role_id', 2);
            }
        )

            ->join('remittances', 'remittances.provider_id', 'users.id')
            ->leftJoin('payment_preferences', 'payment_preferences.provider_id', 'users.id')
            // ->where('payment_status', '<', 2)
            ->join('user_details', function ($userdetails) {
                $userdetails->on('user_details.user_id', '=', 'users.id');
            })
            ->select('users.id', 'users.name', 'users.email', 'user_details.profile_pic', 'payment_preferences.method')

            ->selectRaw('
			COUNT(remittances.id) AS pending_remittances,
			SUM(remittances.amount) AS pending_total
		')

            ->groupBy('users.id', 'users.name', 'users.email', 'profile_pic', 'method');

        // dd($query->get());
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
            ->addColumn('provider_name', function (User $modal) {
                $logo = $modal->profile_pic != null ? $modal->profile_pic : '/tenant-resources/images/portrait/small/avatar-s-20.jpg';
                return '<div class="d-flex gap-2 align-items-center">
							<div>
								<img width="50" height="50" src="' . $logo . '" class="rounded-circle" alt="User Profile Image">
							</div>
							<div class="pt-2">
								<div class="font-family-secondary leading-none">
								<a @click="payment=true" wire:click="$emit(\'openRemittancePaymentsPanel\',\'' . $modal->id . '\')" title="' . $modal->name . '" aria-label="Booking" class="btn btn-hs-icon p-0">
									' . $modal->name . '
								</a>
								</div>
                                <a href="#" class="font-family-secondary">' . $modal->email . '</small></a>
							</div>
						</div>';
            })
            ->addColumn('pending_total', function (User $modal) {
                return '<div class="text-center">' . numberFormat($modal->pending_total) . '</div>';
            })

            ->addColumn('pending_remittances', function (User $modal) {
                return '<div class="text-center">' . $modal->pending_remittances . '</div>';
            })->addColumn('no_of_invoices', function (User $modal) {
                return 'N/A';
            })
            ->addColumn('method', function (User $modal) {
                if (isset($modal->method) && $modal->method == 2)
                    return 'Mail a Cheque';
                else
                    return 'Direct Deposit';
            })
            ->addColumn('chat', function (User $modal) {
                return '<div class="d-flex actions justify-content-center">
                                                    <a href="#" title="Chat" aria-label="Chat"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        <svg aria-label="Chat" width="18" height="18"
                                                            viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/common-icons.svg#chat-icon">
                                                            </use>
                                                        </svg>
                                                    </a>
                                                </div>';
            })


            ->addColumn('next', function (User $modal) {
                return '
				<div class="d-flex actions justify-content-center">
					<a   @click="payment=true" wire:click="$emit(\'openRemittancePaymentsPanel\',\'' . $modal->id . '\')" title="Generate Remittance" aria-label="Booking" class="btn btn-hs-icon p-0">
						<svg aria-label="Bookings" class="fill-stroke" width="12" height="15" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<use xlink:href="/css/common-icons.svg#bookings"></use>
						</svg>
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
            Column::make('Provider', 'provider_name', '')
                ->field('provider_name', 'name')
                ->searchable(),
            Column::make('TOTAL PENDING', 'pending_total'),
            Column::make('Remittances', 'pending_remittances'),
            Column::make('No. oF Invoices', 'no_of_invoices'),
            Column::make('PREFERRED PAYMENT METHOD', 'method'),
            Column::make('Chat', 'chat'),
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
