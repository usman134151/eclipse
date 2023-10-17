<?php

namespace App\Http\Livewire\App\Admin;

use App\Models\Tenant\Company;
use App\Models\Tenant\Schedule;
use App\Models\Tenant\User;
use App\Models\Tenant\Booking;
use App\Models\Tenant\Invoice;
use Livewire\Component;
use PDF;
class CompanyProfile extends Component
{
    public $company, $isCustomer=false;
	public $showDepartmentProfile;
	public $du_counter = 0, $du_departmentId, $du_departmentLabel,  $du_departmentDetails = false; //for company users
	public $schedule;
	public $invoice_id = 0, $counter = 0;

	protected $listeners = [
		'showDetails',
		'showDepartmentProfile', 'refreshDepartmentUsers',
		'showConfirmation',
		'openInvoiceDetails',
		'downloadInvoice'=> 'createInvoicePDF'
	];

	public function render()
	{
		return view('livewire.app.admin.company-profile');
	}

	public function mount($company=null)
	{
		if($company)
			$this->showDetails($company);
	}

	public function getCompanySchedule()
	{
		//reinit schedule
		$companySchedule = Schedule::where('model_id', $this->company['id'])->where('model_type', 2)->get()->first();
		if (!is_null($companySchedule)) {
			$this->schedule = $companySchedule;
		} else {
			$this->schedule = new Schedule;
			$this->schedule->model_type = 2;
			$this->schedule->working_days = json_encode([]);
			$this->schedule->timezone_id = 0;

			$this->schedule->model_id = $this->company['id'];
			$this->schedule->save();
		}


		$this->emit('getRecord', $this->schedule->id, true);
	}

	public function saveSchedule($redirect = 1)
	{
		$this->emit('saveSchedule');
		$this->showConfirmation("Company has been saved successfully");

	}
	
		
    public function showDetails($company){
		$this->company=$company;
		$this->company['users'] = User::where('company_name',$company['id'])->get()->count();
			
		$this->company['admins'] = User::query() //setting admins
			->where(['users.status' => 1])
			->whereHas('roles', function ($query) {
				$query->where('role_id', 10);
			})
			->leftJoin('user_details', 'user_details.user_id', '=', 'users.id')
			->leftJoin('companies', 'companies.id', '=', 'users.company_name')
			->where('companies.id', '=', $this->company['id'])
			->select('users.id', 'users.name')
			->get()->toArray();

		$this->company['tags'] = json_decode($this->company['tags']);
		$d_schedule =  Schedule::where(['model_id'=>$company['id'],'model_type'=>2])->first();
		if($d_schedule){
			$days = ["Monday" => 1, "Tuesday" => 2, "Wednesday" => 3, "Thursday" => 4, "Friday" => 5, "Saturday" => 6, "Sunday" => 7];

			$sch = $d_schedule->timeslots->groupBy('timeslot_day')->sortBy(fn ($val, $key) => $days[$key]);
			foreach($sch as $dayName=> $slots){
				$this->company['schedule'][$dayName] = $slots->groupBy('timeslot_type')->toArray();
			}
		}
		// dd($this->company['schedule']);

        $this->dispatchBrowserEvent('refreshSelects');
		$this->getCompanySchedule();

	}
	public function showConfirmation($message = "")
	{
		if ($message) {
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
	}

	public function lockAccount()
	{
		$company = Company::find($this->company['id']);
		$company->status = !$company->status;
		$company->save();
		$this->company['status'] = $company->status;

		$this->dispatchBrowserEvent('swal:modal', [
			'type' => 'success',
			'title' => 'Success',
			'text' => 'Company Account Locked Successfully',
		]);
	}

	public function showDepartmentProfile($department=null)
	{	
		if ($department) {
		$this->department = $department;

		$this->emit('showDepartmentDetails', $department);
	}
	

		$this->showDepartmentProfile = true;
	}

	public function showList($userId=1)
	{
        $company=Company::find($userId);
		$this->emit('showList');
	}

	//for department-list department users modal

	public function refreshDepartmentUsers($users_departmentId, $users_departmentLabel) //for department users
	{
		if ($this->du_counter == 0) {
			$this->du_departmentId = 0;
			$this->du_departmentLabel = $users_departmentLabel;
			$this->dispatchBrowserEvent('refresh-department-users', ['departmentId' => $users_departmentId, 'departmentLabel' => $users_departmentLabel]);
			$this->du_counter = 1;
			$this->du_departmentDetails = true;
		} else {
			$this->du_departmentId = $users_departmentId;
			$this->du_counter = 0;
		}
	}

	public function openInvoiceDetails($invoice_id)
    {
        if ($this->counter == 0) {
            $this->invoice_id = 0;
            $this->dispatchBrowserEvent('refresh-invoice-details', ['invoice_id' => $invoice_id]);
            $this->counter = 1;
        } else {
            $this->invoice_id = $invoice_id;
            $this->counter = 0;
        }
    }

	function createInvoicePDF($invoice_id = 0)
    {
        // $orderData = [];
        $invoice = Invoice::where('id', $invoice_id)->with(['company', 'billing_manager', 'billingAddress',])->first();
        if ($invoice) {

            $bookings = Booking::whereIn('id', $invoice->bookings->pluck('id'))->get();
            $orderData['invoice'] = $invoice;
            $orderData['bookings'] = $bookings ?? [];

            $pdfContent = PDF::loadView('tenant.common.download_invoice_pdf', ['orderData' => $orderData])->output();
            return response()->streamDownload(
                fn () => print($pdfContent),
                "invoice_" . $invoice->invoice_number . ".pdf"
            );
        }
    }

}
