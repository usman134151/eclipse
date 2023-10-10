<?php

namespace App\Services\App;

use App\Models\Tenant\Booking;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\InvoicePayment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class InvoiceService
{
    public static function getTotalPendingDues($companyId)
    {
        $bookings = Booking::where('bookings.company_id', '=', $companyId)
            ->where('bookings.invoice_status', '=', '1')
            ->where('bookings.is_paid', '=', '0')
            ->leftJoin('payments', 'bookings.id', '=', 'payments.booking_id')
            ->selectRaw('SUM(payments.total_amount) as totalSum')
            ->first();
        return $bookings ? $bookings->totalSum : 0;
    }

    public static function getTotalOverDues($companyId)
    {
        $bookings = Booking::where('bookings.company_id', '=', $companyId)
            ->where('bookings.invoice_status', '=', '3')
            ->leftJoin('payments', 'bookings.id', '=', 'payments.booking_id')
            ->selectRaw('SUM(payments.total_amount) as totalSum')
            ->first();
        return $bookings ? $bookings->totalSum : 0;
    }

    public static function getTotalPaidAmount($companyId)
    {
        $bookings = Booking::where('bookings.company_id', '=', $companyId)
            ->where('bookings.is_paid', '=', '1')
            ->leftJoin('payments', 'bookings.id', '=', 'payments.booking_id')
            ->selectRaw('SUM(payments.total_amount) as totalSum')
            ->first();
        return $bookings ? $bookings->totalSum : 0;
    }

    public static function getTotalNotInvoiced($companyId)
    {
        $bookings = Booking::where('bookings.company_id', '=', $companyId)
            ->where('bookings.invoice_status', '=', '0')
            ->where('bookings.is_closed', '=', '1')
            ->leftJoin('payments', 'bookings.id', '=', 'payments.booking_id')
            ->selectRaw('SUM(payments.total_amount) as totalSum')
            ->first();
        return $bookings ? $bookings->totalSum : 0;
    }

    //pay invoice and change its status.
    public static function payInvoice($invoiceId, $paymentManger)
    {
        $invoice = Invoice::find($invoiceId);

        if ($invoice->total_price > 0 && $paymentManger['payment_amount'] > 0) {
            if ($paymentManger['payment_method'] != 1)
                $invoice->invoice_status = "3";

            // paid amount is greater than pending amount then charge only pending
            $payment_amount = min($paymentManger['payment_amount'], $invoice->outstanding_amount);
            $payment_date = $paymentManger['payment_date'];
            $outAmount = $invoice->outstanding_amount - $payment_amount;
            if ($payment_amount) {
                InvoicePayment::insertGetId(
                    [
                        'invoice_id' => $invoiceId,
                        'paid_amount' => isset($payment_amount) ? $payment_amount : '',
                        'payment_method' => $paymentManger['payment_method'],
                        'outstanding_amount' => isset($outAmount) ? $outAmount : '',
                        'paid_date' => isset($payment_date) ? $payment_date : '',
                        'created_by' => Auth::user()->id,
                        'approved_by_admin' => '1',
                        'approved_by' => Auth::user()->id,
                        'created_at' => now()
                    ]
                );
                Invoice::where('id', $invoiceId)->decrement('outstanding_amount', $payment_amount);

                if ($outAmount == 0) {
                    $invoice->invoice_status = "2";
                    $invoice->save();
                    Booking::where('invoice_id', $invoiceId)->update(['invoice_status' => '2']);
                } else
                    $invoice->invoice_status = "4";

                $invoice->supervisor_payment_status = "1";

                $invoice->payment_method = $paymentManger['payment_method'];
                $invoice->paid_on = Carbon::now();
                $invoice->save();
            }
        }
        return $invoice;
    }

    //revert invoice and delete it.
    public static function revertInvoice($invoice)
    {
        $bookings = Booking::where('invoice_id', $invoice->id)->get();
        foreach ($bookings as $booking) {
            $booking->invoice_id = 0;
            $booking->invoice_status = "0";
            $booking->save();
        }
        $invoice->delete();
    }
}
