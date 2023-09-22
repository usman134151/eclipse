<?php

namespace App\Http\Livewire\App\Common\Panels\Invoices;

use App\Http\Livewire\App\Common\Panels\Remittance\Payment;
use App\Models\Tenant\Booking;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\User;
use App\Models\Tenant\UserAddress;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CreateInvoice extends Component
{
    public $showForm, $selectedBookingsIds = [], $managers, $addresses, $invoice = ['billing_address_id' => null, 'billing_manager_id' => null],
        $exclude_notif = false, $bookings = [];
    protected $listeners = ['showList' => 'resetForm'];

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
        // $this->invoice['invoice_status'] = 0;
        // Invoice::create($this->invoice);


        if (!empty($this->selectedBookingsIds)) {
            // $bookingIds = $this->selectedBookingsIds;

            $invoiceNumber = Carbon::parse($this->invoice['invoice_due_date'])->format('Y-m-d H:i:s');
            // $this->invoice['po_number'] = isset($request->po_number) ? $request->po_number : null;
            // $supervisor_id = $request->supervisor_id;
            // $this->invoice['invoice_number'] = $request->invoice_number;
            // $paymentMethod = $request->payment_method;



            // $book = Booking::whereIn('id', $bookingIds)->get();
            if ($this->bookings) {
                // $data['bookings'] = $this->bookings;
                // $data['admin'] = $this->user->getAdmin();
                $invoice_issue_date =  Carbon::today();
                //              $totalPrice = $this->invoiceTotal($bookingIds);
                $totalPrice = $this->invoiceTotalV1($this->bookings);
                $totalDuePrice = $this->invoiceTotalV1($this->bookings);
                $data['total_price'] = numberFormat($totalPrice);
                $data['cancellation_price'] = numberFormat($totalDuePrice);
                // $supervisorCompanies = getCompanies();
                // $states = getUSAStates();
                // $data['states'] = $states;
                // $data['companies'] = $supervisorCompanies;
                $data['invoice_number'] = $this->invoice['invoice_number'];
                $data['po_number'] = $this->invoice['po_number'] ?? null;
                $data['invoice_issue_date'] = formatDateNew($invoice_issue_date);
                $data['invoice_due_date'] = formatDateNew($invoiceNumber);

                // dd($fileName);
                if ($this->invoice['invoice_number']) {
                    $invoice = Invoice::insertGetId(
                        [
                            'company_id' => $this->bookings[0]->company_id,
                            'invoice_number' => $this->invoice['invoice_number'],
                            'invoice_date' => $invoice_issue_date,
                            'po_number' => $this->invoice['po_number'] ?? null,
                            'invoice_due_date' => $invoiceNumber,
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
                    foreach ($this->bookings as $key => $bookingId) {
                        $booking = Booking::where('id', $bookingId->id)->first();

                        $message = "New invoice " . $this->invoice['invoice_number'] . " created by " . Auth::user()->name;
                        $logs = array(
                            'action_by' => Auth::user()->id,
                            'action_to' => $booking->id,
                            'item_type' => 'Booking',
                            'message' => $message,
                            'type' => 'Invoice created',
                            'request_to' => ''
                        );
                        addLogs($logs);
                        $booking->invoice_id = $invoice;
                        $booking->invoice_status = "1";
                        $booking->save();
                    }
                }
            }
        }
        $this->dispatchBrowserEvent('close-create-invoice');
        $this->emit('showList', 'Invoice created successfully');
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



    function showForm()
    {
        $this->showForm = true;
    }
    public function resetForm()
    {
        $this->showForm = false;
    }
}
