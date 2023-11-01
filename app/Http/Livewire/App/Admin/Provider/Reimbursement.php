<?php

namespace App\Http\Livewire\App\Admin\Provider;

use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\ReimbursementAttachment;
use App\Models\Tenant\User;
use Livewire\Component;

class Reimbursement extends Component
{
	public $showForm, $reimbursementData;
	protected $listeners = ['showList' => 'resetForm'];

	function showForm()
	{
		$this->showForm = true;
	}

	public function resetForm()
	{
		$this->showForm = false;
	}

	public function mount()
	{
	}

	public function render()
	{
		$this->reimbursementData = $this->fetchData();
		return view('livewire.app.admin.provider.reimbursement');
	}

	public function fetchData()
	{
		$query = $reimbursements = BookingReimbursement::with('booking')->get();
		$data = [];
		$statusLabels = [
			0 => 'Pending',
			1 => 'Approved',
			2 => 'Denied',
		];
		$paymentLabels = [
			1 => 'Direct Deposit',
			2 => 'Mail a Check',
		];

		foreach ($reimbursements as $reimbursement) {
			// Access the booking relationship for each reimbursement
			$booking = $reimbursement->booking;
			$img = ReimbursementAttachment::where('reimbursement_id', $reimbursement->id)->get()->first();
			
			if($img != null){
				$img = $img['attachment_path'] != null ? $img->attachment_path : null;
			}
			$user = User::where('id', $reimbursement['provider_id'])->with('userdetail')->first();
			
			// dd($img,$reimbursement);

			// Store the provider name in your data array or do whatever you need with it
			$data[] = [
				'provider_name' => $user->name,
				'provider_email' => $user->email,
				'provider_profilePic' => $user->profile_pic,
				'booking_number' => $booking->booking_number,
				'booking_start_at' => $booking->booking_start_at,
				'booking_end_at' => $booking->booking_end_at,
				'amount' => $reimbursement->amount,
				'reason' => $reimbursement->reason,
				'review_status' => $statusLabels[$reimbursement->status],
				'issued_at' => $reimbursement->issued_at,
				'paid_at' => $reimbursement->paid_at,
				'payment_method' => $paymentLabels[$reimbursement->payment_method] ?? 'N/A',
				'file' => $img
			];
		}
		return $data;
	}

	public function downloadFile($file)
    {
		// dd($this->reimbursementData[$file]['file']);
		if($this->reimbursementData[$file]['file'] != null){
			$storedPath = $this->reimbursementData[$file]['file']; // This path comes from the database
			$correctedPath = str_replace('tenantabma/', '', $storedPath);
			$path = storage_path($correctedPath); // Adjust the path as per your file storage
			if (file_exists($path)) {
				return response()->download($path);
			}
			
			abort(404, 'File not found');
		}
	}
}
