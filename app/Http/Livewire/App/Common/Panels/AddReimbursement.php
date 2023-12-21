<?php

namespace App\Http\Livewire\App\Common\Panels;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\BookingReimbursement;
use App\Models\Tenant\ReimbursementAttachment;
use App\Models\Tenant\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Services\App\UploadFileService;
use Illuminate\Support\Facades\Auth;
use App\Services\App\NotificationService;
use Carbon\Carbon;

class AddReimbursement extends Component
{
    use WithFileUploads;
    public $selectedValue;

    public $showForm;
    protected $listeners = ['showList' => 'resetForm', 'getProviderAssignments',  'updateVal','setBookingIdR'];
    public $providers = [], $assignments = [], $reimbursement, $file = null, $booking_id;

    public $other = [
        'details' => '',
    ];
    public $time = [
        'hours' => '',
        'mins' => '',
    ];

    // Validation Rules
    public function rules()
    {
        $rules = [
            'reimbursement.provider_id' => 'required',
            'reimbursement.booking_id' => 'nullable',
            'reimbursement.reason' => 'required',
            'reimbursement.file' => 'nullable',
            'reimbursement.amount' => 'nullable|numeric',
            'reimbursement.charge_to_customer' => 'nullable',
            'file' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv',
        ];
        if (session()->get('isProvider'))
            $rules["reimbursement.booking_id"] = 'required';
        return $rules;
    }


    public function render()
    {
        return view('livewire.app.common.panels.add-reimbursement');
    }

    public function mount(BookingReimbursement $reimbursement)
    {
        $this->reimbursement = $reimbursement;

        $this->reimbursement->reason = 'other';
        if (session()->get('isProvider')) {
            $this->reimbursement->provider_id = Auth::user()->id;
            $this->assignments = BookingProvider::where('provider_id', Auth::user()->id)
                ->join('bookings', 'bookings.id', '=', 'booking_providers.booking_id')
                ->select('bookings.id', 'bookings.booking_number')
                ->distinct()
                ->get();
        } else {
            $this->providers = User::where('status', 1)
                ->whereHas('roles', function ($query) {
                    $query->wherein('role_id', [2]);
                })->select([
                    'users.id',
                    'users.name',
                ])->get();
        }
        $this->dispatchBrowserEvent('refreshSelects');
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
            $this->selectedValue = null;
        }
    }

    public function updateVal($attrName, $val)
    {

        $this->reimbursement->$attrName = $val;
        if ($attrName == "provider_id")
            $this->getProviderAssignments($val);
    }


    public function save()
    {
        $this->reimbursement->booking_id = $this->selectedValue;
        $this->validate();

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

        $type = "create";
        $reim_number = genetrateReimbursementNumber($this->reimbursement->provider_id);

        $reimbursement = BookingReimbursement::insertGetId(
            [
                'booking_id' => $this->reimbursement->booking_id,
                'provider_id' => $this->reimbursement->provider_id,
                'amount' => $this->reimbursement->amount,
                'reason' => $reasonData != null ? json_encode($reasonData) : null,
                'charge_to_customer' => $this->reimbursement->charge_to_customer == true  ? 1 : 0,
                'added_by' => Auth::user()->id,
                'reimbursement_number' => $reim_number,
                'status' => (session()->get('isProvider') ? 0 : 1),    //require approval if added by admin
                'approved_by' => (session()->get('isProvider') ? null : Auth::id()),    //require approval if added by admin
                'approved_at' => (session()->get('isProvider') ? null : Carbon::now()),    //require approval if added by admin

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

        if (session()->get('isProvider')) {
            $booking = Booking::find($this->reimbursement->booking_id);
            $data['bookingData'] =  $booking ? $booking : [];
            $data['reimbursementRequestData'] = BookingReimbursement::where('id', $reimbursement)->first();
            NotificationService::sendNotification('Payments: Reimbursement Requested', $data, 6, true);
        } else
            callLogs($reimbursement, 'Reimbursement', $type);

        $this->emit('showList', 'Reimbursement added successfully');
        $this->dispatchBrowserEvent('close-add-reimbursement');
        $this->refreshForm();
    }

    function showForm()
    {
        $this->showForm = true;
    }

    public function resetForm()
    {
        $this->showForm = false;
    }

    public function refreshForm()
    {
        $this->reimbursement = new BookingReimbursement(); // Reset to a new instance
        $this->other = [
            'details' => '',
        ];
        $this->time = [
            'hours' => '',
            'mins' => '',
        ];
        $this->selectedValue = null;
        $this->file = null;
    }

    public function setBookingIdR($data)
    {
        $bookingId = intval($data[0]);
        $this->selectedValue = $bookingId;
        $this->booking_id=$data[1];
    }
}
