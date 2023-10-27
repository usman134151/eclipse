<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Booking;
use App\Models\Tenant\Payment;
use Livewire\Component;

class ModificationConfirmation extends Component
{
    public $showForm, $booking, $override_charges, $params = [], $waiveModification = false;
    protected $listeners = ['showList' => 'resetForm', 'setModificationCharges'];

    public function render()
    {
        return view('livewire.app.common.modals.modification-confirmation');
    }

    public function setModificationCharges($booking, $redirect, $draft, $step)
    {

        $this->booking = $booking;
        $this->params = [$redirect, $draft, $step];
    }
    public function rules()
    {
        return [
            'override_charges' => 'nullable|numeric',
        ];
    }
    public function confirm()
    {

        $this->validate();
        $charges = 0;
        if (trim($this->override_charges) == null)
            $charges = round($this->booking['payment']['modification_fee']);
        else
            $charges = $this->override_charges;
        if ($this->waiveModification)
            $charges = null;

        Payment::where('booking_id', $this->booking['id'])->update(['modification_fee' => $charges]);
        $this->emit('confirmedModificationFee', true, $this->params[0], $this->params[1], $this->params[2]);
        $this->emit('closeConfirmationModal');
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
