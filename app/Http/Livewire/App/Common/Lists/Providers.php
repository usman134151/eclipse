<?php

namespace App\Http\Livewire\App\Common\Lists;

use App\Models\Tenant\User;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Providers extends PowerGridComponent
{
	use ActionButton;
	protected $listeners = ['refresh' => 'setUp'];
	public $name;
	public $status;

	public $provider_ids=[];
	public $tag_names=[];
	public $service_type_ids=[];
	public $preferred_provider_ids=[];
	public $services=[];
	public $specializations=[];
	public $gender;
	public $ethnicity;
	public $certifications=[];

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

		$query = User::query()
			->where('status', $this->status)
			->whereHas('roles', function ($query) {
				$query->wherein('role_id', [2]);
			})->join('user_details', function ($userdetails) {
				$userdetails->on('user_details.user_id', '=', 'users.id');
			})->select([
				'users.id',
				'users.name',
				'users.email',
				'user_details.phone','user_details.profile_pic','user_details.tags',
				'status'
			]);
			if(count($this->tag_names)){
				$query->whereJsonContains('tags', $this->tag_names);
			}
			if(count($this->provider_ids)){
				$query->whereIn('users.id', $this->provider_ids);
			}
			if(count($this->services)){
				$services=$this->services;
				$query->where(function ($query) use ($services) {
					foreach ($services as $service) {
						$query->whereHas('services', function ($query) use ($service) {
							$query->where('provider_accommodation_services.status','=',1)->where('service_id', $service);
						});
					}
				});
		    }
			if(count($this->service_type_ids)){
				//as ids are different in dropdown and in table need to replace for filter
				$replacements = [
					28 => 1,
					29 => 2,
					30 => 4,
					31 => 5
				];
				$filterArray = array_map(function ($item) use ($replacements) {
					return isset($replacements[$item]) ? $replacements[$item] : $item;
				}, $this->service_type_ids);
				$query->whereHas('services', function ($query) use ($filterArray) {
					$query->where('provider_accommodation_services.status','=',1)->where(function ($query) use ($filterArray) {
						foreach ($filterArray as $item) {
							// $query->orWhereRaw("FIND_IN_SET($item, service_type)");
							$query->where('service_type', 'LIKE', "%$item%");
						}
					});
				});
		     }
			if(count($this->specializations)){
				$specializations=$this->specializations;
				// dd($this->services);
				$query->whereHas('services', function ($query) use ($specializations) {
					$query->where('provider_accommodation_services.status','=',1)
							->whereHas('specializations', function ($query) use ($specializations) {
								$query->whereIn('specialization_id', $specializations);
							}, '=', count($specializations));
				});
		     }
			if($this->gender){
				$query->where('user_details.gender_id', $this->gender);
			}
			if($this->ethnicity){
				$query->where('user_details.ethnicity_id', $this->ethnicity);
			}
			if(count($this->certifications)){
				$certifications=$this->certifications;
				$query->where(function ($query) use ($certifications) {
					foreach ($certifications as $certId) {
						$query->where('certification', 'LIKE', "%$certId%");
					}
				});
			}
			if(count($this->preferred_provider_ids)){
				$preferred_provider_ids=$this->preferred_provider_ids;
				$query->where(function ($query) use ($preferred_provider_ids) {
					foreach ($preferred_provider_ids as $prefId) {
						$query->where('favored_users', 'LIKE', "%$prefId%");
					}
				});
			}
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
			->addColumn('customer', function (User $model) {
				if ($model->profile_pic == null)
					$col = '<div class="row g-2 align-items-center"><div class="col-md-2"><img style="" src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Profile Image"></div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.provider-profile', ['providerID' => $model->id]) . '">' . $model->name . '</a></h6><p>' . $model->email . '</p></div></div>';
				else
					$col = '<div class="row g-2 align-items-center"><div class="col-md-2 provider_image_panel">			
				<div class="provider_image" style="width:64px;height:64px;top:1rem;max-width:100%"> <img class="user_img cropfile" src="' . $model->profile_pic . '" style="max-width:100%;"></div>
				</div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.provider-profile', ['providerID' => $model->id]) . '">' . $model->name . '</a></h6><p>' . $model->email . '</p></div></div>';
				return $col;
			})
			->addColumn('phone')
			->addColumn('upcoming', function (User $model) {
				return rand(0, 20);
			})
			->addColumn('status', function (User $model) {
				return ($model->status);
			})

			->addColumn('edit', function (User $model) {
				return "<div class='d-flex actions'>
            <a href='" . route('tenant.provider-edit', ['providerID' => $model->id]) . "' title='Edit Team' aria-label='Edit Team' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg title='Edit Team' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#pencil'></use></svg></a>
            <a href='" . route('tenant.provider-profile', ['providerID' => $model->id]) . "' title='View Provider' aria-label='View Provider' class='btn btn-sm btn-secondary rounded btn-hs-icon' ><svg aria-label='View Provider' width='20' height='20' viewBox='0 0 20 20'><use xlink:href='/css/common-icons.svg#view'><use></svg></a>
            <a href='#' title='Delete Provider' aria-label='Delete Provider' wire:click='deleteItem(".$model->id.")' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg aria-label='Delete Accommodation' width='21' height='21' viewBox='0 0 21 21' fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/sprite.svg#delete-icon'></use></svg></a></div>";
			});
	}
	public function deleteItem($id)
	{
		$this->emit('updateRecordId', $id);

		// Dispatches a browser event to show a confirmation modal
		$this->dispatchBrowserEvent('swal:confirm', [
			'type' => 'warning',
			'title' => 'Delete Operation',
			'text' => 'Are you sure you want to delete this record?',
		]);
	}

	function edit($id)
	{
		// Emits an event to show the form for editing a record
		$this->emit('showForm', User::with(['userdetail'])->find($id));
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
			Column::make('Name', 'Provider', '')
				->field('customer', 'users.name')
				->searchable()
				->makeinputtext()
				->sortable(),




			// ->editOnClick(),
			Column::make('Phone Number', 'phone', '')
				->searchable()
				->makeinputtext()
				->sortable(),
			Column::make('Upcoming Appointments', 'upcoming', ''),


			Column::make('Status', 'status', '')
				->toggleable(1, 'Deactivated', 'Activated'),
			Column::make('Actions', 'edit')->visibleInExport(false)
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
