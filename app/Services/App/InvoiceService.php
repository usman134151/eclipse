<?php

namespace App\Services\App;

use App\Models\Tenant\Booking;

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
            ->where('bookings.invoice_status', '=', '1')
            ->where('bookings.is_paid', '=', '0')
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

}
