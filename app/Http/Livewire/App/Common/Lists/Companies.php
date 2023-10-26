<?php

namespace App\Http\Livewire\app\common\lists;

use App\Models\Tenant\Company;
use App\Models\Tenant\Department;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Companies extends PowerGridComponent
{
	use ActionButton;
	public $name;
	public  $selectedCompanyId;

	/*
	|--------------------------------------------------------------------------
	|  Features Setup
	|--------------------------------------------------------------------------
	| Setup Table's general features
	|
	*/
	protected $listeners = ['refresh'=>'setUp'];
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
	* @return Builder<\App\Models\Tenant\Company>
	*/
	public function datasource(): Builder
	{
		return Company::query()->where('status', '<', 2)->with('phones');
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
			->addColumn('displayname', function (Company $model) {
				if ($model->company_logo == null)
					$col = '<div class="row g-2 align-items-center"><div class="col-md-2"><a href="'.route('tenant.company-profile', ['companyID' => encrypt($model->id)]).'"><img src="/tenant-resources/images/portrait/small/avatar-s-20.jpg" class="img-fluid rounded-circle" alt="Customer Profile Image"></a></div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.company-profile', ['companyID' => encrypt($model->id)]) . '">' . $model->name . '</h6></a></div></div>';
				else
					$col = '<div class="row g-2 align-items-center"><div class="col-md-2"><a href="'.route('tenant.company-profile', ['companyID' => encrypt($model->id)]).'"><img style="width:64px;height:64px;top:1rem"  src="' . $model->company_logo . '" class="img-fluid rounded-circle" alt="Customer Profile Image"></a></div><div class="col-md-10"><h6 class="fw-semibold"><a href="' . route('tenant.company-profile', ['companyID' => encrypt($model->id)]) . '">' . $model->name . '</h6></a></div></div>';
				return $col;
			})
			->addColumn('phone', function (Company $model) {
			    if(count($model->phones)){

					return $model->phones[0]->phone_number;
				}
				else{
					return 'N/A';
				}


			})
			->addColumn('departments', function (Company $model) {
			return "<div class='text-center'>" . count($model->departments) . "</div>";
			})
			->addColumn('users', function (Company $model) {
				
				return "<div class='text-center'>".count($model->user)."</div>";
			})
			->addColumn('status', function (Company $model) {
                return ($model->status);
            })
			->addColumn('edit', function (Company $model) {
				return "<div class='d-flex actions'><a href='".route('tenant.company-edit',['companyID'=>encrypt($model->id)]). "' title='Edit Company' aria-label='Edit Company' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg aria-label='Edit Company' class='fill' width='20' height='28' viewBox='0 0 20 28'fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/sprite.svg#edit-icon'></use></svg></a>
				<a href='" . route('tenant.company-profile', ['companyID' => encrypt($model->id)]) . "'title='View Company' aria-label='View Company' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg aria-label='View Company' class='fill' width='20' height='28' viewBox='0 0 20 28'fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/provider.svg#view'></use></svg></a><div class='d-flex actions'><div class='dropdown ac-cstm'><a href='javascript:void(0)' class='btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle' title='More Options' aria-label='More Options' data-bs-toggle='dropdown' data-bs-auto-close='outside' data-bs-popper-config='{&quot;strategy&quot;:&quot;fixed&quot;}'><svg aria-label='More Options' class='fill' width='20' height='20' viewBox='0 0 20 20'fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/sprite.svg#dropdown'></use></svg></a><div class='tablediv dropdown-menu'><a title='View Company Users' aria-label='View Company Users' href='#' wire:click.prevent='showUsers(" . $model->id . ",\"" . htmlentities($model->name, ENT_QUOTES) . "\")'  @click='companyUsers = true' class='dropdown-item'><i class='fa fa-users me-1 '></i>View Company Users</a><a href='#' title='View Company Departments' aria-label='View Company Departments' class='dropdown-item' wire:click.prevent='showDetails(".$model->id.",\"". htmlentities($model->name, ENT_QUOTES). "\")'  @click='departmentList = true'><i class='fa fa-building me-1'></i> View Company Departments</a><a href='javascript:void(0)' aria-label='Delete' title='Delete' wire:click='deleteItem(" . $model->id . ")' class='dropdown-item'><i class='fa fa-trash me-1'></i> Delete</a></div></div></div></div>";
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
	public function showDetails($companyId, $companyLabel)
	{
		$this->selectedCompanyId = $companyId;

		$this->emit('refreshDepartmentDetails', $companyId, $companyLabel);
	}

	public function showUsers($cu_companyId, $cu_companyLabel)
	{
		$this->emit('refreshCompanyUsers', $cu_companyId, $cu_companyLabel);
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
			Column::make('Name', 'displayname')
				->field('displayname','companies.name')
				->searchable()
				->makeinputtext()
				->sortable(),
				// ->editOnClick()
			Column::make('Phone Number', 'phone'),
			Column::make('Total Departments', 'departments'),
			Column::make('Company User', 'users'),
			Column::make('Status', 'status', '')->makeBooleanFilter('status', 'Activated', 'Deactivated')
			->toggleable(1, 'Activated', 'Dectivated'),
			Column::make('Action', 'edit')->visibleInExport(false),
		];
	}

		// A method to handle the toggleable columns update event
		public function onUpdatedToggleable(string $id, string $field, string $value): void
		{
			
			
			// Updates the specified field of the record with the new value
			Company::query()->where('id',$id)->update([
				'status' => $value,
			]);

		}
	// A method to handle the editable columns update event
	public function onUpdatedEditable(string $id, string $field, string $value): void
	{
		// Updates the specified field of the record with the new value
		Company::query()->find($id)->update([
			$field => $value,
		]);
	}
    // A method to handle the edit button click event
    function edit($id){

        // Emits an event to show the form for editing a record
        $this->emit('showForm', Company::with('phones','addresses')->find($id));
    }
	function showProfile($id) {
		// Emits an event to show the customer profile
        $this->emit('showProfile', Company::with(['phones','addresses'])->find($id));
	}
}
