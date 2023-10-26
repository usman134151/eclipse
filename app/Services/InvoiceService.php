<?php

namespace App\Services;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\Invoice;

class InvoiceService
{
    public function calculateRequest($id, $type, $bookingStatus) // type 1 for customer and type 2 for company. bookingStatus 1 for closed 0 for open
    {
        $completedBookingIds = Booking::where('is_closed', $bookingStatus)->pluck('id');
        if ($type == 1)
            $completedBookingIds = $completedBookingIds->where('user_id', $id);
        else if ($type == 2)
            $completedBookingIds = $completedBookingIds->where('company_id', $id);

        return BookingServices::whereIn('booking_id', $completedBookingIds)->sum('duration_hour');
    }

    public function calculateInvoices($companyId, $type, $userRoles = null, $userId = null) // type 1 for customer and type 2 for company. bookingStatus 1 for closed
    {
        if ($type == 2)
            $userRoles = ['company_admin'];

        $totals = [
            'totalInvoice' => 0,
            'dueInvoice' => 0,
            'overDueInvoice' => 0,
            'paidInvoice' => 0,
            'accountCredit' => 0,
        ];

        if (in_array('company_admin', $userRoles)) {
            $totals['totalInvoice'] = Invoice::where('company_id', $companyId)->sum('total_price');
            $totals['dueInvoice'] = Invoice::where('company_id', $companyId)->whereDate('invoice_due_date', '>=', now())->sum('outstanding_amount');
            $totals['overDueInvoice'] = Invoice::where('company_id', $companyId)->whereDate('invoice_due_date', '<', now())->sum('outstanding_amount');
        } elseif (in_array('supervisor', $userRoles)) {
            $totals['totalInvoice'] = Invoice::where('company_id', $companyId)->where('supervisor_id', $userId)->sum('total_price');
            $totals['dueInvoice'] = Invoice::where('company_id', $companyId)->where('supervisor_id', $userId)->whereDate('invoice_due_date', '>=', now())->sum('outstanding_amount');
            $totals['overDueInvoice'] = Invoice::where('company_id', $companyId)->where('supervisor_id', $userId)->whereDate('invoice_due_date', '<', now())->sum('outstanding_amount');
        } elseif (in_array('billing_manager', $userRoles)) {
            $totals['totalInvoice'] = Invoice::where('company_id', $companyId)->where('billing_manager_id', $userId)->sum('total_price');
            $totals['dueInvoice'] = Invoice::where('company_id', $companyId)->where('billing_manager_id', $userId)->whereDate('invoice_due_date', '>=', now())->sum('outstanding_amount');
            $totals['overDueInvoice'] = Invoice::where('company_id', $companyId)->where('billing_manager_id', $userId)->whereDate('invoice_due_date', '<', now())->sum('outstanding_amount');
        }

        $totals['paidInvoice'] = $totals['totalInvoice'] - $totals['dueInvoice'] - $totals['overDueInvoice'];
        $totals['accountCredit'] = $totals['totalInvoice'] - $totals['paidInvoice'];

        return $totals;
    }

}
