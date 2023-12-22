<?php

namespace App\Http\Livewire\App\Common;

use App\Models\Tenant\Booking;
use App\Models\Tenant\Department;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\Schedule;
use Livewire\Component;
use PDF;
class DepartmentProfile extends Component
{
	public $showForm;
	public $department, $schedule, $timeslots=null;
	public $invoice_id = 0, $counter = 0;
	protected $listeners = [
		'showDepartmentDetails', 'showConfirmation','openInvoiceDetails','downloadInvoice'=> 'createInvoicePDF'
	];

	public function render()
	{
		$this->showDepartmentDetails($this->department);

		return view('livewire.app.common.department-profile');
	}

	public function mount($departmentId)
	{
		$this->department= Department::find($departmentId);
	}

	public function lockAccount()
	{
		$department = Department::find($this->department->id);
		$department->status = !$department->status;
		$department->save();
		$this->department->status = $department->status;
		$this->showConfirmation("Account Locked Successfully");
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
	function showForm()
	{
		$this->showForm=true;
	}

	public function resetForm()
	{
		$this->showForm=false;
	}

	public function showDepartmentDetails($department){
		$this->department=$department;
		$this->department['tags'] = json_decode($this->department->tags);
		$schedule =  Schedule::where(['model_id' => $department->id, 'model_type' => 4])->first();
		if ($schedule){
			$days = ["Monday" => 1, "Tuesday" => 2, "Wednesday" => 3, "Thursday" => 4, "Friday" => 5, "Saturday" => 6, "Sunday" => 7];

			$sch = $schedule->timeslots->groupBy('timeslot_day')->sortBy(fn ($val, $key) => $days[$key]);
			foreach ($sch as $dayName => $slots) {
				$this->timeslots[$dayName] = $slots->groupBy('timeslot_type')->toArray();
			}
		}
		$this->getDepartmentSchedule();
		
        $this->dispatchBrowserEvent('refreshSelects');

	}

	public function getDepartmentSchedule()
	{
		//reinit schedule
		$departmentSchedule = Schedule::where('model_id', $this->department->id)->where('model_type', 4)->get()->first();
		if (!is_null($departmentSchedule)) {
			$this->schedule = $departmentSchedule;
		} else {
			$this->schedule = new Schedule;
			$this->schedule->model_type = 4;
			$this->schedule->working_days = json_encode([]);
			$this->schedule->timezone_id = 0;

			$this->schedule->model_id = $this->department->id;
			$this->schedule->save();
		}
		//as this function is called from mount, cant be emitted from here. 
		//emitted when settings tab is clicked.
		// $this->emit('getRecord', $this->schedule->id, true);
	}

	public function saveSchedule($redirect = 1)
	{
		//save other fields as well
		$this->emit('saveSchedule');
		$this->showConfirmation("Department has been saved successfully");
		
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
			$orderData['company_logo'] = public_path($invoice->company->company_logo != null ? $invoice->company->company_logo : '/tenant-resources/images/portrait/small/avatar-s-20.jpg');

            $pdfContent = PDF::loadView('tenant.common.download_invoice_pdf', ['orderData' => $orderData])->output();
            return response()->streamDownload(
                fn () => print($pdfContent),
                "invoice_" . $invoice->invoice_number . ".pdf"
            );
        }
    }




}