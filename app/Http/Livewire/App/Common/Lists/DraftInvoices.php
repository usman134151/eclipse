<?php

namespace App\Http\Livewire\App\Common\Lists;

use App\Models\Tenant\Booking;
use App\Models\Tenant\Company;
use App\Models\Tenant\Payment;
use App\Models\Tenant\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};
use DB;

final class DraftInvoices extends PowerGridComponent
{
	use ActionButton;
	protected $listeners = ['refresh' => 'setUp'];
	public $name;
	// public $status, $filter_companies=null, $filter_specialization=[], $filter_service_type_ids=[], $filter_bmanager=null;

	// for adv search filters
	public function updateVal($attrName, $val)
	{
		$this->$attrName = $val;
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

		$subQuery = DB::table('companies')
			->leftJoin('bookings', function ($join) {
				$join->on('companies.id', '=', 'bookings.company_id')
					->where('bookings.type', '=', 1)
					->where('bookings.booking_status', '=', '1')
					->where('bookings.is_closed', '>', '0')

					->where('bookings.status', '!=', '3');
			})
			->leftJoin('payments', 'bookings.id', '=', 'payments.booking_id')
			->where('companies.status', '=', 1)
			->select('companies.id', 'companies.name', 'companies.company_logo')
			->selectRaw('
			COUNT(bookings.id) AS booking_total,
			SUM(CASE WHEN bookings.invoice_status = "0" THEN 1 ELSE 0 END) AS pending_invoices,
			SUM(
				CASE
					WHEN bookings.status = 4 THEN payments.cancellation_charges
					ELSE payments.total_amount + payments.modification_fee + payments.reschedule_booking_charges
				END
			) AS invoiceTotal
		')
			->groupBy('companies.id', 'companies.name', 'companies.company_logo')  // <-- Add companies.name here
			->having('pending_invoices', '>', 0);

		// if($this->filter_companies){
		// 	$subQuery->where('bookings.company_id',$this->filter_companies);
		// }
		// dd(Company::fromSub($subQuery, 'sub')->select(['sub.*'])->get());
		return Company::fromSub($subQuery, 'sub')
			->select(['sub.*']);
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
			->addColumn('company_name', function (Company $modal) {
				$logo = $modal->company_logo != null ? $modal->company_logo : '/tenant-resources/images/portrait/small/image.png';
				return '<div class="d-flex gap-2 align-items-center">
							<div>
								<img width="50" height="50" src="' . $logo . '" class="rounded-circle" alt="Company Profile Image">
							</div>
							<div class="pt-2">
								<div class="font-family-secondary leading-none">
								<a @click="invoiceGeneratorbookings = true" wire:click="openCompanyBookingsPanel(' . $modal->id . ')" title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
									' . $modal->name . '
								</a>
								</div>
							</div>
						</div>';
			})
			->addColumn('pending', function (Company $modal) {
				return $modal->pending_invoices;
			})->addColumn('bookings', function (Company $modal) {
				return $modal->booking_total;
			})
			// ->addColumn('method', function () {
			// 	return 'Direct Deposit';
			// })

			// ->addColumn('chat', function (Company $modal) {
			// 	return '
			// 	<div class="d-flex actions justify-content-center">
			// 		<a href="/chat/'.$modal->id.'" target="_blank" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
			// 			<svg aria-label="Chat" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			// 				<use xlink:href="/css/common-icons.svg#chat"></use>
			// 			</svg>
			// 		</a>
			// 	</div>';
			// })
			->addColumn('next', function (Company $modal) {
				return '
				<div class="d-flex actions justify-content-center">
					<a @click="invoiceGeneratorbookings = true" wire:click="openCompanyBookingsPanel(' . $modal->id . ')" title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
						<svg aria-label="Bookings" class="fill-stroke" width="12" height="15" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<use xlink:href="/css/common-icons.svg#bookings"></use>
						</svg>
					</a>
				</div>';
			});
	}

	public function openCompanyBookingsPanel($company_id)
	{
		$this->emit('openCompanyPendingBookings', $company_id);
	}
	// function edit($id)
	// {
	// 	// Emits an event to show the form for editing a record
	// 	$this->emit('showForm', User::with(['userdetail'])->find($id));
	// }

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
			Column::make('Company', 'company_name','')
				->field('company_name', 'name')
				->searchable(),
			Column::make('TOTAL PENDING', 'pending'),
			Column::make('No. OF BOOKINGS', 'bookings'),
			// Column::make('PREFERRED PAYMENT METHOD', 'method'),
			// Column::make('CHAT', 'chat'),
			Column::make('<svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.875 1L10.75 7.5L5.875 14" stroke="white" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1L5.875 7.5L1 14" stroke="white" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>', 'next',)
		];
	}





	// A method to handle the toggleable columns update event
	public function onUpdatedToggleable(string $id, string $field, string $value): void
	{

		// Updates the specified field of the record with the new value

		User::query()->where('id', $id)->update([
			$field => $value,
		]);
		$this->dispatchBrowserEvent('swal:modal', [
			'type' => 'success',
			'title' => 'Success',
			'text' => 'Status updated',
		]);
	}
	function showProfile($id)
	{

		// Emits an event to show the customer profile
		$this->emit('showProfile');

		$this->emit('showProfile', User::with(['userdetail'])->find($id));
	}
}
