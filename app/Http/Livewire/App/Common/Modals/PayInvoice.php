<?php

namespace App\Http\Livewire\App\Common\Modals;

use App\Models\Tenant\Invoice;
use Livewire\Component;

class PayInvoice extends Component
{
    public $showForm, $invoice, $payment=[];
    protected $listeners = ['payInvoiceId'];

    public function payInvoiceId($invoice_id)
    {
        $this->invoice = Invoice::find($invoice_id);
        // dd($this->invoice);
    }
    public function render()
    {
        return view('livewire.app.common.modals.pay-invoice');
    }



    public function payInvoice()
    {
                // if ($this->invoice) {
                //     $invoice_id = $this->invoice->id;
                //     $payment_type = $request->inv_pay_option;

                //     if ($invoice_id)
                //         $inv = Invoice::where('id', $invoice_id)->first();
                //     if ($inv && $inv->total_price > 0) {
                //         if ($payment_type == 1) {
                //             if ($inv->payment_method != '1' && !is_null($inv->payment_method)) {
                //                 $res['success']     = false;
                //                 $res['error_message']   = __('lang.inv_alrey_paid');
                //                 echo json_encode($res);
                //                 die();
                //             }
                //             $customerStripeId = isset($inv->supervisor->users_detail) ? $inv->supervisor->users_detail->stripe_customer_id : '';
                //             if ($customerStripeId)
                //                 $stripeCustomerRes = $this->createStripeCustomer($request, $inv->supervisor, $customerStripeId);
                //             else
                //                 $stripeCustomerRes = $this->createStripeCustomer($request, $inv->supervisor);

                //             if (!$stripeCustomerRes['success']) {
                //                 $res['success']     = false;
                //                 $res['error_message']      = $errors;
                //                 echo json_encode($res);
                //                 die();
                //             } else {
                //                 $stripeCustomerId = $stripeCustomerRes['stripe_customer_id'];
                //                 $stripeCustomerCardId = $stripeCustomerRes['card_id'];
                //             }
                //             $request->request->add(['stripe_customer_id' => $stripeCustomerId]); //add stripe customer id into request

                //             $stripe = $this->stripeCustomerInvoiceCharge($request, $inv->total_price, $stripeCustomerCardId);
                //             // echo '<pre>'; print_r($stripe); die;
                //             $payment_id = InvoicePayment::insertGetId(
                //                 [
                //                     'invoice_id' => $invoice_id,
                //                     'approved_by_admin' => 1,
                //                     'payment_method' => 1,
                //                     'approved_by' => 1,
                //                     'paid_amount' => $inv->total_price,
                //                     'paid_date' => now(),
                //                     'created_by' => Auth::user()->id,
                //                     'created_at' => now()
                //                 ]
                //             );
                //             $request->request->add(['payment_method' => '1']);
                //             $request->request->add(['invoice_id' => $invoice_id]); //add invoice id into request
                //             $request->request->add(['invoice_payment_id' => $payment_id]); //add invoice id into request
                //             $createReceipt = $this->createReceipt($request);
                //             $inv->invoice_status = "2";
                //             $inv->outstanding_amount = '0';

                //             // create payment in qb
                //             if ($inv->qb_invoice_id) {
                //                 $checkConnected = Helper::checkQBConnected();
                //                 if ($checkConnected)
                //                     app('App\Http\Controllers\Admin\QuickbookController')->createQbInvPayment($invoice_id);
                //             }
                //         } else {
                //             $inv->invoice_status = "3";

                //             if ($inv->payment_method == '1') {
                //                 $res['success']     = false;
                //                 $res['error_message']   = __('lang.inv_alrey_paid');
                //                 echo json_encode($res);
                //                 die();
                //             }

                //             $payment_amount = $request->payment_amount;
                //             $payment_date = $request->payment_date;
                //             $outAmount = $inv->outstanding_amount - $payment_amount;
                //             if ($payment_amount) {
                //                 $payment_id = InvoicePayment::insertGetId(
                //                     [
                //                         'invoice_id' => $invoice_id,
                //                         'paid_amount' => isset($payment_amount) ? $payment_amount : '',
                //                         'payment_method' => $payment_type,
                //                         'outstanding_amount' => isset($outAmount) ? $outAmount : '',
                //                         'paid_date' => isset($payment_date) ? $payment_date : '',
                //                         'created_by' => Auth::user()->id,
                //                         'approved_by_admin' => '1',
                //                         'approved_by' => Auth::user()->id,
                //                         'created_at' => now()
                //                     ]
                //                 );
                //                 Invoice::where('id', $invoice_id)->decrement('outstanding_amount', $payment_amount);

                //                 $request->request->add(['payment_method' => $payment_type]);
                //                 $request->request->add(['invoice_id' => $invoice_id]); //add invoice id into request
                //                 $request->request->add(['invoice_payment_id' => $payment_id]);
                //                 $createReceipt = $this->createReceipt($request, $payment_amount);

                //                 $paidInv = self::getCustomerApprovedInvPaid($invoice_id);
                //                 if ($paidInv == $inv->total_price) {
                //                     $inv->invoice_status = "2";
                //                     $inv->save();
                //                     Booking::where('invoice_id', $invoice_id)->update(['invoice_status' => '2']);
                //                 }
                //             } else {
                //                 $res['success']         = false;
                //                 $res['data']            = false;
                //                 $res['exist']            = false;
                //                 $res['delayTime']       = '2000';
                //                 $res['error_message']   = __('lang.inv_outstanding_error');
                //                 echo json_encode($res);
                //                 die();
                //             }
                //         }
                //         $inv->supervisor_payment_status = "1";

                //         if (isset($stripe) && !empty($stripe))
                //             $stripe = $stripe->id;

                //         $inv->payment_method = $payment_type;
                //         $inv->payment_reference = isset($stripe) ? $stripe : '';
                //         $inv->paid_on = Carbon::now();
                //         $inv->save();
                //         // send notification to admin
                //         $adminData = $this->user->getAdmin();
                //         $user_role_id =  $this->role->getAdminId();
                //         $templateId = Helper::getTemplate('payment-received', $user_role_id, 'email_template');
                //         if (isset($adminData->users_setting) && $adminData->users_setting->email_enabled == "0") {
                //             $params = [
                //                 'email'       =>  $adminData->email,
                //                 'user'        =>  $adminData->name,
                //                 'user_id'     =>  $adminData->id,
                //                 'templateId'  =>  $templateId,
                //                 'item_id'     => $inv->bookings[0]->id,
                //                 'mail_type'   => 'booking',
                //             ];

                //             $otherParams = [
                //                 'supervisor' => $inv->supervisor->name,
                //                 'invoice_number' => $inv->invoice_number,
                //                 'invoice_issue_date' => $inv->invoice_date,
                //                 'invoice_due_date' => $inv->invoice_due_date,
                //                 'invoice_total' => Helper::numberFormat($inv->total_price),
                //             ];
                //             $res = Helper::sendTemplatEmail($params, $otherParams);
                //         }

                //         $bookings = Booking::where('invoice_id', $inv->id)->get();
                //         if ($bookings) {
                //             foreach ($bookings as $key => $bookingId) {
                //                 $booking = Booking::where('id', $bookingId->id)->first();
                //                 $message = "Invoice " . $inv->invoice_number . " paid by " . \Auth::user()->name;
                //                 $logs = array(
                //                     'action_by' => \Auth::user()->id,
                //                     'action_to' => $inv->id,
                //                     'item_type' => 'Invoice',
                //                     'message' => $message,
                //                     'type' => 'Invoice paid',
                //                     'request_to' => json_encode($request->all())
                //                 );

                //                 Helper::addLogs($logs);
                //                 if ($payment_type == 1) {
                //                     $booking->invoice_status = "2";
                //                     $booking->save();
                //                 }
                //             }
                //         }

                //         if (Auth::user()->allAdmin()) {
                //             $redirect_url = url('admin/customer-invoices');
                //         } else {
                //             $redirect_url = url('supervisor/invoices');
                //         }
                //         DB::commit();
                //         $response['success']        = true;
                //         $response['delayTime']      = '1000';
                //         $response['url']             = $redirect_url;
                //         $response['success_message'] = __('lang.invoice_paid_success');
                //         $response['modelhide']      = '#invoicePayModal';
                //     } else {
                //         $response['success']         = false;
                //         $response['delayTime']       = '2001';
                //         $response['error_message']   = __('lang.err');
                //     }
                // }          
        $this->emit('payInvoiceModalDismissed');  // emit to close modal
        $this->dispatchBrowserEvent('close-invoice-details');  // emit to close modal
        $this->emit('showList', 'Payment Recorded successfully');
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
