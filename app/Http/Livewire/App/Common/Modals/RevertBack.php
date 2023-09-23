<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\Invoice;
use Livewire\Component;

class RevertBack extends Component
{
    public $showForm, $invoice = null;
    protected $listeners = [ 'revertInvoice'];

    public function render()
    {
        return view('livewire.app.common.modals.revert-back');
    }

    public function revertInvoice($invoice_id)
    {
        $this->invoice = Invoice::find($invoice_id);
    }

    public function revert()
    {
        if ($this->invoice) {
            $bookings = Booking::where('invoice_id', $this->invoice->id)->get();

            foreach ($bookings as $key => $booking) {

                // $message = "New invoice " . $this->invoice['invoice_number'] . " created by " . Auth::user()->name;
                // $logs = array(
                //     'action_by' => Auth::user()->id,
                //     'action_to' => $booking->id,
                //     'item_type' => 'Booking',
                //     'message' => $message,
                //     'type' => 'Invoice created',
                //     'request_to' => ''
                // );
                // addLogs($logs);
                $booking->invoice_id = 0;
                $booking->invoice_status = "0";
                $booking->save();
            }
            $this->invoice->delete();
        }
        $this->emit('showList', 'Invoice reverted successfully');

        $this->emit('revertModalDismissed');  // emit to close modal

    }

   
}
