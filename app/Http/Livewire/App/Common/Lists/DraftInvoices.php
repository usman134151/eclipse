<?php

namespace App\Http\Livewire\App\Common\Lists;

use App\Models\Tenant\Booking;
use App\Models\Tenant\Company;
use App\Models\Tenant\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class DraftInvoices extends PowerGridComponent
{
	use ActionButton;
	protected $listeners = ['refresh' => 'setUp'];
	public $name;
	public $status;


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

		$query = Company::where('status','=',1);
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

			->addColumn('name', function (Company $modal) {
				$logo=$modal->company_logo !=null ? $modal->company_logo : '/tenant-resources/images/portrait/small/image.png';
				return '<div class="d-flex gap-2 align-items-center">
							<div>
								<img width="50" height="50" src="'.$logo.'" class="rounded-circle" alt="Company Profile Image">
							</div>
							<div class="pt-2">
								<div class="font-family-secondary leading-none">
									'.$modal->name.'
								</div>
								<a href="#" class="font-family-secondary">
									<small>
										examplecompany@gmail.com
									</small>
								</a>
							</div>
						</div>';
			})
			->addColumn('pending', function (Company $modal) {
				$now          = Carbon::now();
				$company_customer_ids=$modal->user()->where('status',1)->pluck('id')->toArray();
				$bookings=Booking::where(['type' => 1,'booking_status' => '1','invoice_status'=>'0'])->whereIn('customer_id',$company_customer_ids)
                    ->where("status","!=","3")
                    ->whereRaw("booking_end_at < '$now'")
                    ->get();
				$total_price=0;
				foreach($bookings as $booking){
					$total_price+=$booking->getInvoicePrice();
				}
				return '$'.$total_price;
			})->addColumn('bookings', function (Company $modal) {
				$now          = Carbon::now();
				$company_customer_ids=$modal->user()->where('status',1)->pluck('id')->toArray();
				$bookings=Booking::where(['type' => 1,'booking_status' => '1','invoice_status'=>'0'])->whereIn('customer_id',$company_customer_ids)
                    ->where("status","!=","3")
                    ->whereRaw("booking_end_at < '$now'")
                    ->count();

				return $bookings;
			})->addColumn('method', function () {
				return 'Direct Deposit';
			})

			->addColumn('chat', function () {
				return '
				<div class="d-flex actions justify-content-center">
					<a href="#" title="Chat" aria-label="Chat" class="btn btn-sm btn-secondary rounded btn-hs-icon">
						<svg aria-label="Chat" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<use xlink:href="/css/common-icons.svg#chat"></use>
						</svg>
					</a>
				</div>';
			})
			->addColumn('next', function () {
				return '
				<div class="d-flex actions justify-content-center">
					<a @click="invoiceGeneratorbookings = true" href="#" title="Booking" aria-label="Booking" class="btn btn-hs-icon p-0">
						<svg aria-label="Bookings" class="fill-stroke" width="12" height="15" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<use xlink:href="/css/common-icons.svg#bookings"></use>
						</svg>
					</a>
				</div>';
			});
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
			Column::make('Provider', 'name', '')
				->searchable()
				->sortable(),
			Column::make('TOTAL PENDING', 'pending', ''),
			Column::make('No. OF BOOKINGS', 'bookings', ''),
			Column::make('PREFERRED PAYMENT METHOD', 'method', '')
				->searchable()
				->sortable(),
			Column::make('CHAT', 'chat', ''),
			Column::make('<svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.875 1L10.75 7.5L5.875 14" stroke="white" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M1 1L5.875 7.5L1 14" stroke="white" stroke-width="1.625" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>', 'next', '')
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