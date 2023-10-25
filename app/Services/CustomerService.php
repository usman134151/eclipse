<?php
namespace App\Services;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\Invoice;

class CustomerService
{
    public function calculateCompletedRequest($userId)
    {
        $completedBookingIds = Booking::where('user_id', $userId)->where('is_closed', 1)->pluck('id');
        return BookingServices::whereIn('booking_id', $completedBookingIds)->sum('duration_hour');
    }

    public function calculateOpenRequest($userId)
    {
        $openBookingIds = Booking::where('user_id', $userId)->where('is_closed', 0)->pluck('id');
        return BookingServices::whereIn('booking_id', $openBookingIds)->sum('duration_hour');
    }

    public function calculateInvoices($userRoles, $userId, $companyName)
    {
        $totals = [
            'totalInvoice' => 0,
            'dueInvoice' => 0,
            'overDueInvoice' => 0,
            'paidInvoice' => 0,
            'accountCredit' => 0,
        ];

        if (in_array('company_admin', $userRoles)) {
            $totals['totalInvoice'] = Invoice::where('company_id', $companyName)->sum('total_price');
            $totals['dueInvoice'] = Invoice::where('company_id', $companyName)->whereDate('invoice_due_date', '>=', now())->sum('outstanding_amount');
            $totals['overDueInvoice'] = Invoice::where('company_id', $companyName)->whereDate('invoice_due_date', '<', now())->sum('outstanding_amount');
            $totals['paidInvoice'] = $totals['totalInvoice'] - $totals['dueInvoice'] - $totals['overDueInvoice'];
            $totals['accountCredit'] = $totals['totalInvoice'] - $totals['paidInvoice'];
        } elseif (in_array('supervisor', $userRoles)) {
            $totals['totalInvoice'] = Invoice::where('company_id', $companyName)->where('supervisor_id', $userId)->sum('total_price');
            $totals['dueInvoice'] = Invoice::where('company_id', $companyName)->where('supervisor_id', $userId)->whereDate('invoice_due_date', '>=', now())->sum('outstanding_amount');
            $totals['overDueInvoice'] = Invoice::where('company_id', $companyName)->where('supervisor_id', $userId)->whereDate('invoice_due_date', '<', now())->sum('outstanding_amount');
            $totals['paidInvoice'] = $totals['totalInvoice'] - $totals['dueInvoice'] - $totals['overDueInvoice'];
            $totals['accountCredit'] = $totals['totalInvoice'] - $totals['paidInvoice'];
        } elseif (in_array('billing_manager', $userRoles)) {
            $totals['totalInvoice'] = Invoice::where('company_id', $companyName)->where('billing_manager_id', $userId)->sum('total_price');
            $totals['dueInvoice'] = Invoice::where('company_id', $companyName)->where('billing_manager_id', $userId)->whereDate('invoice_due_date', '>=', now())->sum('outstanding_amount');
            $totals['overDueInvoice'] = Invoice::where('company_id', $companyName)->where('billing_manager_id', $userId)->whereDate('invoice_due_date', '<', now())->sum('outstanding_amount');
            $totals['paidInvoice'] = $totals['totalInvoice'] - $totals['dueInvoice'] - $totals['overDueInvoice'];
            $totals['accountCredit'] = $totals['totalInvoice'] - $totals['paidInvoice'];
        }

        return $totals;
    }
}
