<?php

namespace App\Http\Livewire\app\common\lists;

use App\Models\Tenant\Company;
use App\Models\Tenant\Department;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class Departments extends PowerGridComponent
{
	use ActionButton;
	public $name;
	public $isSupervisor = false;
	public $companyId;
	public $companyLabel;
	public $listpage = false;


	/*
	|--------------------------------------------------------------------------
	|  Features Setup
	|--------------------------------------------------------------------------
	| Setup Table's general features
	|
	*/
	protected $listeners = ['refresh' => 'setUp'];
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
	 * @return Builder<\App\Models\Tenant\Department>
	 */
	public function datasource(): Builder
	{
		if ($this->isSupervisor)
			return Department::query()->with(['phones', 'supervisors', 'users'])->where('company_id', $this->companyId)
				->whereHas('supervisors', function ($query) {
					$query->where('user_departments.user_id', Auth::id());
				});

		else
			return Department::query()->with(['phones', 'supervisors', 'users'])->where('company_id', $this->companyId);
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
			->addColumn('displayname', function (Department $model) {
			if (session()->get("isCustomer"))
				$base = 'customer-department-profile';
			else
				$base = 'department-profile';

				return "<a href='" . route('tenant.'.$base, ['departmentID' => $model->id]) . "'>" . $model->name . "</a>";
			})
			->addColumn('phone', function (Department $model) {
				if (count($model->phones)) {

					return $model->phones[0]->phone_number;
				} else {
					return 'N/A';
				}
			})

			->addColumn('users', function (Department $model) {
				return "<div class='text-center'>" . count($model->users) . "</div>";
			})
			->addColumn('supervisors', function (Department $model) {
				// return "<div class='text-center'>".count($model->users)."</div>";

				$col = ' <div class="uploaded-data d-flex align-items-center">';
				if (count($model->supervisors) > 0) {
					// dd($model->supervisors->first()->userdetail);
					// $s = $model->supervisors->userdetail->toArray();

					foreach ($model->supervisors as $index => $s) {
						$col .= '<img style="width:50px;height:50px;top:1rem" src="';
						if ($s->userdetail->profile_pic != null)
							$image_path = $s->userdetail->profile_pic;
						else
							$image_path = '/tenant-resources/images/portrait/small/avatar-s-20.jpg';

						$col .= $image_path . '" class="" title="' . $s->name . '"alt="Profile Image">';
						if ($index == 3)
							break;
					}
					if (count($model->supervisors) > 4)
						$col .= '<div class="more"><span class="value">' . count($model->supervisors) - 4 . '</span> more</div>';
				}
				$col .= '</div>';
				return $col;
			})
			->addColumn('edit', function (Department $model) {
				if (session()->get("isCustomer")) {
					$base = 'customer';
				} else
					$base = 'admin';
				return "<div class='d-flex actions'><a href='" . url('/' . $base . '/department/edit-department/' . $model->id) . "' title='Edit Department' aria-label='Edit Department' class='btn btn-sm btn-secondary rounded btn-hs-icon'><svg aria-label='Edit Department' class='fill' width='20' height='28' viewBox='0 0 20 28'fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/sprite.svg#edit-icon'></use></svg></a>
				<a href='javascript:void(0)'  @click='departmentProfile = true' wire:click=\"showDepartmentProfile($model->id,'$model->name')\" title='View Department' aria-label='View Department' class='btn btn-sm btn-secondary rounded btn-hs-icon' wire:click='showProfile'><svg aria-label='View Department' class='fill' width='20' height='28' viewBox='0 0 20 28'fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/provider.svg#view'></use></svg></a><div class='d-flex actions'><div class='dropdown ac-cstm'><a href='javascript:void(0)' class='btn btn-sm btn-secondary rounded btn-hs-icon dropdown-toggle' title='More Options' aria-label='More Options' data-bs-toggle='dropdown' data-bs-auto-close='outside' data-bs-popper-config='{&quot;strategy&quot;:&quot;fixed&quot;}'><svg aria-label='More Options' class='fill' width='20' height='20' viewBox='0 0 20 20'fill='none' xmlns='http://www.w3.org/2000/svg'><use xlink:href='/css/sprite.svg#dropdown'></use></svg></a><div class='dropdown-menu'><a title='View Department Users' aria-label='View Department Users' href='javascript:void(0)' wire:click.prevent='showDepartmentUsers(" . $model->id . ",\"" . $model->name . "\")'  @click='departmentUsers = true' class='dropdown-item'><i class='fa fa-users me-1'></i>View Department Users</a></div></div></div></div>";
			});
	}

	public function showDepartmentUsers($du_companyId, $du_companyLabel)
	{
		$this->emit('refreshDepartmentUsers', $du_companyId, $du_companyLabel);
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
				->field('displayname', 'departments.name')
				->searchable()
				// ->makeinputtext()
				->sortable(),
			Column::make('Phone Number', 'phone'),
			Column::make('Supervisors', 'supervisors'),
			Column::make('Department User', 'users'),
			Column::make('Action', 'edit')->visibleInExport(false),
		];
	}

	// A method to handle the editable columns update event
	public function onUpdatedEditable(string $id, string $field, string $value): void
	{
		// Updates the specified field of the record with the new value
		Department::query()->find($id)->update([
			$field => $value,
		]);
	}
	// A method to handle the edit button click event
	function edit($id)
	{

		// Emits an event to show the form for editing a record
		$this->emit('showForm', Department::with('phones')->find($id));
	}
	function showDepartmentProfile($departmentId, $departmentLabel)
	{
		// Emits an event to show the  profile

		if (isset($this->companyLabel))		//open profile in panel
			$this->emit('refreshDepartmentProfile', $departmentId, $departmentLabel);

		else	//reroute to profile page 
		{
			if (session()->get("isCustomer"))
				$base = 'customer';
			else
				$base = 'admin';
			return redirect(url($base . '/department/profile/' . $departmentId));
		}
		// $this->emit('showDepartmentProfile', Department::with(['phones', 'addresses'])->find($departmentId)); //on department page

	}

	// function showDepartmentProfile($id) {
	// 	// Emits an event to show the customer profile

	//     $this->emit('showDepartmentProfile', Department::with(['phones','addresses'])->find($id));
	// }
}
