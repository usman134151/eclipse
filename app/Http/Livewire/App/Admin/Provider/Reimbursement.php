<?php

namespace App\Http\Livewire\App\Admin\Provider;

use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\ReimbursementAttachment;
use App\Models\Tenant\User;
use Livewire\Component;
use Livewire\WithPagination;


class Reimbursement extends Component
{
	use WithPagination;
	public $showForm, $limit = 10;
	protected $listeners = ['showList' => 'resetForm', 'updateVal'];

	// filters
	public $provider_ids=[], $filterProviders, $booking_number_filter, $name_seacrh_filter, $tag_names =[], $review_status_filter,
	$payment_status_filter, $filter_payment_method;

	function showForm()
	{
		$this->showForm = true;
	}

	public function resetForm($message)
	{
		$this->showForm = false;
		if ($message) {
			// Emit an event to display a success message using the SweetAlert package
			$this->dispatchBrowserEvent('swal:modal', [
				'type' => 'success',
				'title' => 'Success',
				'text' => $message,
			]);
		}
	}

	public function mount()
	{
		$this->filterProviders = User::where('status', 1)
			->whereHas('roles', function ($query) {
				$query->whereIn('role_id', [2]);
			})->select([
				'users.id',
				'users.name',
			])->get()->toArray();
	}

	public function render()
	{
		return view('livewire.app.admin.provider.reimbursement', ['reimbursementData' => $this->fetchData()]);
	}

	public function fetchData()
	{
		$statusLabels = [
			0 => 'Pending',
			1 => 'Approved',
			2 => 'Denied',
		];
		$paymentLabels = [
			1 => 'Direct Deposit',
			2 => 'Mail a Cheque',
		];

		$reimbursements = BookingReimbursement::with('booking');
		$reimbursements = $this->applySearchFilter($reimbursements);
		$reimbursements = $reimbursements->paginate($this->limit);

		foreach ($reimbursements as $index => $reimbursement) {
			// Access the booking relationship for each reimbursement
			$booking = $reimbursement->booking;
			$file = ReimbursementAttachment::where('reimbursement_id', $reimbursement->id)->get()->first();
			
			if($file != null){
				$file = $file['attachment_path'] != null ? $file->attachment_path : null;
			}
			$user = User::where('id', $reimbursement['provider_id'])->with('userdetail')->first();
			
			$reason = '';
			if(!empty($reimbursement->reason))
            {
                $reason = json_decode($reimbursement['reason'],true);
                $reason = $reason['type'] === 'Other' ? $reason['details'] : $reason['type'];
            }

			// Store the provider name in your data array or do whatever you need with it
			$reimbursement->provider_name = $user->name;
			$reimbursement->provider_email = $user->email;
			$reimbursement->provider_profilePic = $user->userdetail->profile_pic;
			$reimbursement->booking_number = $booking ? $booking->booking_number : null;
			$reimbursement->booking_start_at = $booking ? $booking->booking_start_at :null;
			$reimbursement->booking_end_at = $booking ? $booking->booking_end_at :null;
			$reimbursement->amount = $reimbursement->amount;
			$reimbursement->reason = $reason;
			$reimbursement->review_status = $statusLabels[$reimbursement->status];
			$reimbursement->issued_at = $reimbursement->issued_at;
			$reimbursement->paid_at = $reimbursement->paid_at;
			$reimbursement->payment_method = $paymentLabels[$reimbursement->payment_method] ?? 'N/A';
			$reimbursement->file = $file;
		}

		return $reimbursements;
	}

	public function downloadFile($file)
    {
		if($file['file'] != null){
			// $storedPath = $file['file']; // This path comes from the database
			// $correctedPath = str_replace('tenantabma/', '', $storedPath);
			// $path = storage_path($correctedPath); // Adjust the path as per your file storage
			// if (file_exists($path)) {
			// 	return response()->download($path);
			// }

			$storedPath = $file['file']; // This path comes from the database
			$correctedPath = str_replace('/tenantabma/', '', $storedPath);

			$path = storage_path($correctedPath); // Adjust the path as per your file storage
			if (file_exists($path)) {
				return response()->download($path);
			}
			
			abort(404, 'File not found');
		}
	}

	public function applySearchFilter($query)
	{
		if ($this->booking_number_filter) {
			$bookingNumber = $this->booking_number_filter;
			$query->whereHas('booking', function ($query) use ($bookingNumber) {
				$query->where('bookings.booking_number', 'LIKE', "%" . $bookingNumber . "%");
			});
		}
		if ($this->name_seacrh_filter) {
			$name = $this->name_seacrh_filter;
			$query->whereHas('booking', function ($query) use ($name) {
				$query->whereHas('company', function ($query) use ($name) {
					$query->where('companies.name', 'LIKE', "%" . $name . "%");
				});
			});
		}
		if (count($this->provider_ids)) {
			$provider_ids = $this->provider_ids;
			$query->whereIn('provider_id', $provider_ids);
		}
		if (!is_null($this->review_status_filter)) {
				$query->where('status', 'LIKE', "%" . $this->review_status_filter . "%");
		}
		if (!is_null($this->payment_status_filter)) {
				$query->where('payment_status', 'LIKE', "%" . $this->payment_status_filter . "%");
		}
		if (!is_null($this->filter_payment_method)) {
				$query->where('payment_method', 'LIKE', "%" . $this->filter_payment_method . "%");
		}
		return $query;
	}

	public function applyFilters()
	{
		$this->render();
	}

	public function resetFilters()
	{
		$this->provider_ids = [];
		$this->booking_number_filter = null;
		$this->name_seacrh_filter = null;
		$this->review_status_filter = null;
		$this->payment_status_filter = null;
		$this->filter_payment_method = null;

		$this->dispatchBrowserEvent('refreshSelects2');
	}

	public function updateVal($attrName, $val)
	{
		$this->$attrName = $val;
		$this->dispatchBrowserEvent('refreshSelects2');
	}
}
