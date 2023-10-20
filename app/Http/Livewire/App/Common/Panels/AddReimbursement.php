<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\User;
use Livewire\Component;

class AddReimbursement extends Component
{
    public $showForm;
    protected $listeners = ['showList' => 'resetForm', 'getProviderAssignments'];
    // protected $listeners = ['showList' => 'resetForm', 'getProviderAssignments', 'updateVal' => 'updateVal'];
    public $providers = [], $assignments = [], $reimbursement;

    // Validation Rules
    public $other = [
        'details' => '',
    ];
    public $time = [
        'hours' => '',
        'mins' => '',
    ];

    public function rules()
    {
        return [
            'reimbursement.provider_id' => [
                'required',
            ],
            'reimbursement.booking_id' => [
                'required',
            ],
            'reimbursement.reason' => [
                'nullable',
            ],
            'reimbursement.file' => [
                'nullable',
            ],
            'reimbursement.amount' => [
                'nullable',
            ],
            'reimbursement.charge_to_customer' => [
                'nullable',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.app.common.panels.add-reimbursement');
    }

    public function mount(BookingReimbursement $reimbursement)
    {
        $this->reimbursement = $reimbursement;

        $this->providers = User::where('status', 1)
            ->whereHas('roles', function ($query) {
                $query->wherein('role_id', [2]);
            })->select([
                'users.id',
                'users.name',
            ])->get();
    }

    public function getProviderAssignments($id)
    {
        $this->assignments = [];
        $this->reimbursement->provider_id = null;
        if (!empty($id)) {
            $this->reimbursement->provider_id = $id;
            $this->assignments = BookingProvider::where('provider_id', $id)
                ->join('bookings', 'bookings.id', '=', 'booking_providers.booking_id')
                ->select('bookings.id', 'bookings.booking_number')
                ->distinct()
                ->get();
        }
    }

    // public function updateVal($attrName, $val)
    // {
    //     if ($attrName == 'booking_id') {
    //         $this->reimbursement->booking_id = $val;
    //     } else
    //         $this->reimbursement[$attrName] = $val;
    // }


    public function save()
    {
        //$this->validate();

        dd($this->reimbursement);
       
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
