<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\ReimbursementAttachment;
use App\Models\Tenant\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Services\App\UploadFileService;
use Illuminate\Support\Facades\Auth;



class AddReimbursement extends Component
{
    use WithFileUploads;
    public $selectedValue;

    public $showForm;
    protected $listeners = ['showList' => 'resetForm', 'getProviderAssignments','updateSelectedValue'];
    // protected $listeners = ['showList' => 'resetForm', 'getProviderAssignments', 'updateVal' => 'updateVal'];
    public $providers = [], $assignments = [], $reimbursement, $file = null;

    // Validation Rules
    public $other = [
        'details' => '',
    ];
    public $time = [
        'hours' => '',
        'mins' => '',
    ];

    public $rules = [
        'reimbursement.provider_id' => 'required',
        'reimbursement.booking_id' => 'required',
        'reimbursement.reason' => 'nullable',
        'reimbursement.file' => 'nullable',
        'reimbursement.amount' => 'nullable',
        'reimbursement.charge_to_customer' => 'nullable',
        'file' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv',
    ];

    public function updateSelectedValue($value)
    {
        $this->selectedValue = $value;
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
        // $this->reimbursement->provider_id = null;
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
    //     if ($attrName === 'booking_id' || $attrName === 'provider_id') {
    //         $this->reimbursement->$attrName = $val;
    //     } else {
    //         $this->reimbursement->$attrName = $val;
    //     }
        
    //     // Update the $bookingId variable separately
    //     if ($attrName === 'booking_id') {
    //         $this->bookingId = $val;
    //     }

    // }


    public function save()
    {
        $this->reimbursement->booking_id = $this->selectedValue;

        $this->validate();
        // dd($this->reimbursement,$this->other,$this->time);
        // $this->validate();

        $reasonData = null; 

        if ($this->reimbursement->reason === "compensated-travel-time") {
            $reasonData = [
                'type' => 'Time',
                'hours' => $this->time['hours'],
                'mins' => $this->time['mins'],
            ];
        } elseif ($this->reimbursement->reason === "other") {
            $reasonData = [
                'type' => 'Other',
                'details' => $this->other['details'],
            ];
        } elseif ($this->reimbursement->reason === "mileage") {
            $reasonData = [
                'type' => 'Mileage',
            ];
        }

        $reimbursement = BookingReimbursement::insertGetId(
            [
                'booking_id' => $this->reimbursement->booking_id,
                'provider_id' => $this->reimbursement->provider_id,
                'amount' => $this->reimbursement->amount,
                'reason' => $reasonData != null ? json_encode($reasonData): null,
                'charge_to_customer' => $this->reimbursement->charge_to_customer == true  ? 1 : 0,
                'added_by' => Auth::user()->id 
            ]
        );
        
        if ($this->file != null) {
            $fileService = new UploadFileService();
            $attachmentPath  = $fileService->saveFile('reimbursement/' . $reimbursement, $this->file);
            ReimbursementAttachment::create([
                'reimbursement_id' => $reimbursement, // $invoice holds the ID of the associated invoice
                'attachment_path' => $attachmentPath,
            ]);
        }
       
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
