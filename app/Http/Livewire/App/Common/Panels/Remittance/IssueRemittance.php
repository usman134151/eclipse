<?php

namespace App\Http\Livewire\App\Common\Panels\Remittance;

use App\Http\Livewire\App\Common\Modals\BookingReimbursements;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\Remittance;
use App\Models\Tenant\User;
use Carbon\Carbon;
use Livewire\Component;

class IssueRemittance extends Component
{
    public $showForm, $list = [], $provider, $selectedBookings = [], $selectedRMB = [], $totalAmount = 0;
    protected $listeners = ['showList' => 'resetForm', 'issueRemittances'];

    public function render()
    {
        return view('livewire.app.common.panels.remittance.issue-remittance');
    }

    public function mount($selectedRows, $providerId)
    {
        $this->provider = User::find($providerId);
        foreach ($selectedRows as $index => $row) {
            // dd(key_exists('reimbursement_id', $row));
            if (key_exists('reimbursement_id', $row)) {
                // fetch reimbursement data
                $rmb =  BookingReimbursement::where('id', $row['reimbursement_id'])->first()->toArray();
                $reason = '';
                if (!empty($rmb['reason'])) {
                    $reason = json_decode($rmb['reason'], true);
                    $rmb['reason'] = $reason['type'] === 'Other' ? $reason['details'] : $reason['type'];
                }
                $this->selectedRMB[] = $rmb['id'];
                $this->list[$index][0] = $rmb;
            } else {
                //fetch booking details + associated reimbursements
                $bookingRecords = BookingProvider::where(['provider_id' => $providerId, 'booking_id' => $row['booking_id']])->with([
                    'reimbursements', 'booking_service', 'booking_service.service', 'booking', 'booking.company',
                    'booking.customer', 'booking.booking_supervisor', 'booking.billing_manager'
                ])->get()->toArray();
                $sum = 0;
                foreach ($bookingRecords as $record) {
                    if ($record['is_override_price'])
                        $sum = $sum + $record['override_price'];
                    else
                        $sum = $sum + $record['total_amount'];
                }

                //accesing reimbursement reason 
                foreach ($bookingRecords[0]['reimbursements'] as $index => $rmb) {
                    $reason = '';
                    if (!empty($rmb['reason'])) {
                        $reason = json_decode($rmb['reason'], true);
                        $bookingRecords[0]['reimbursements'][$index]['reason'] = $reason['type'] === 'Other' ? $reason['details'] : $reason['type'];
                    }
                    $this->selectedRMB[] = $rmb['id'];
                    // $sum = $sum + $rmb['amount'];

                }

                $bookingRecords[0]['sum'] = $sum;

                $this->list[$index] = $bookingRecords;
                $this->selectedBookings[] = $row['booking_id'];
            }
        }
        // dd($this->list);
    }
    public function createRemittance()
    {
        $remittanceArr = [
            'number' => genetrateRemittanceNumber($this->provider),
            'provider_id' => $this->provider->id,
            'amount' => $this->totalAmount,
            'payment_status' => 0, 'payment_method' => null, 
            'issued_at' => Carbon::now(),
        ];
        $remittance = Remittance::create($remittanceArr);
        foreach($this->selectedBookings as $bookingId){
            BookingProvider::where(['provider_id'=>$this->provider->id, 'booking_id'=>$bookingId])->update(['remittance_id'=>$remittance->id]);
        }
        foreach ($this->selectedRMB as $rmbId) {
            BookingReimbursement::where(['provider_id' => $this->provider->id, 'id' => $rmbId])->update(['remittance_id' => $remittance->id]);
        }

        $this->dispatchBrowserEvent('issued-remittance');
        $this->emit('showList', 'Remittance created successfully');

    }
    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}
