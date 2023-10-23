<?php

namespace App\Http\Livewire\App\Common\Panels\Invoices;

use App\Models\Tenant\Booking;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\User;
use App\Models\Tenant\UserAddress;
use App\Models\Tenant\InvoiceAttachment;
use App\Services\App\UploadFileService;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateInvoice extends Component
{

    use WithFileUploads;

    public $showForm, $selectedBookingsIds = [], $managers, $addresses, $invoice = ['billing_address_id' => null, 'billing_manager_id' => null],
        $exclude_notif = false, $bookings = [], $days=0, $file = null, $selected_Record_type;
    protected $listeners = [];

    public function rules()
    {

        return [
            'invoice.invoice_due_date' => 'required|date|after:yesterday|date_format:m/d/Y',
            // 'invoice.billing_address_id' => 'required',
            // 'invoice.billing_manager_id' => 'required',
            'invoice.invoice_number' => [
                'required',
                Rule::unique('invoices', 'invoice_number')
                // ->ignore($this->user->id)
            ],
            'file' => 'nullable|file|mimes:png,jpg,jpeg,gif,bmp,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,rtf,zip,rar,tar.gz,tgz,tar.bz2,tbz2,7z,mp3,wav,aac,flac,wma,mp4,avi,mov,wmv,mkv,csv',
        ];
    }

    public function render()
    {
        return view('livewire.app.common.panels.invoices.create-invoice');
    }

    public function mount($selectedBookingsIds)
    {

        $this->bookings = Booking::whereIn('id', $selectedBookingsIds)->get();
        $this->invoice['invoice_number'] = genetrateInvoiceNumber($this->bookings->first()->company);
        $this->invoice['invoice_due_date'] = Carbon::today()->format('m/d/Y');

        $this->managers = User::whereIn('id', $this->bookings->pluck('billing_manager_id')->toArray())->with('userdetail', 'billing_addresses')->get();
        $this->addresses = UserAddress::where(['user_id' => $this->bookings->first()->company_id, 'user_address_type' => 2, 'address_type' => 2])->get()->toArray();
    }

    public function createInvoice()
    {
        $this->validate();


        if (!empty($this->selectedBookingsIds)) {

            if ($this->bookings) {
                $totalPrice = $this->invoiceTotalV1($this->bookings);
                if ($this->invoice['invoice_number']) {
                    $invoice = Invoice::insertGetId(
                        [
                            'company_id' => $this->bookings[0]->company_id,
                            'invoice_number' => $this->invoice['invoice_number'],
                            'invoice_date' => Carbon::now(),
                            'po_number' => $this->invoice['po_number'] ?? null,
                            'invoice_due_date' => Carbon::createFromFormat('m/d/Y', $this->invoice['invoice_due_date']),
                            'total_price' => $totalPrice,
                            'outstanding_amount' => $totalPrice,
                            // 'invoice_pdf' => $fileName,
                            'billing_manager_id' => $this->invoice['billing_manager_id'],
                            'billing_address_id' => $this->invoice['billing_address_id'],
                            // 'payment_method' => $paymentMethod,
                            'supervisor_payment_status' => "0",
                            'invoice_status' => "1",
                        ]
                    );
                    foreach ($this->bookings as $key => $booking) {

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
                        $booking->invoice_id = $invoice;
                        $booking->invoice_status = "1";
                        $booking->save();
                    }
                }
            }
        }
        if ($this->file != null) {
            $fileService = new UploadFileService();
            $attachmentPath  = $fileService->saveFile('invoice/' . $invoice, $this->file);
            $type = $this->selected_Record_type != null ? $this->selected_Record_type : '0'; // default 0, 1 for reimbrusement, 2 for timesheet
            InvoiceAttachment::create([
                'invoice_id' => $invoice, // $invoice holds the ID of the associated invoice
                'attachment_path' => $attachmentPath,
                'type' => $type, 
            ]);
        }

        $this->dispatchBrowserEvent('close-create-invoice');
        $this->emit('showList', 'Invoice created successfully');
    }

    public function incDate($days=0){
        $this->days = $days;
        $this->invoice['invoice_due_date'] = Carbon::now()->addDays($days)->format('m/d/Y');
    }



    public function invoiceTotalV1($bookings)
    {
        try {
            if ($bookings) {
                $total = 0;
                foreach ($bookings as $booking) {
                    $total += $booking->getInvoicePrice();
                }
                return $total;
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }



   
}
