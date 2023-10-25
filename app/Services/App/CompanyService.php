<?php

namespace app\Services\App;

use App\Models\Tenant\Company;
use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingServices;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\Phone;
use App\Services\App\AddressService;

class CompanyService
{

    public function createCompany($company, $phones, $userAddresses)
    {
        if (isset($company->id))
            $type = 'update';
        else
            $type = 'create';
        $company->save();
        foreach ($phones as $phoneData) {
            if (key_exists('id', $phoneData)) {
                Phone::where('id', $phoneData['id'])->update(['phone_number' => $phoneData['phone_number'], 'phone_title' => $phoneData['phone_title']]);
            } else {
                //empty field check
                if (trim($phoneData['phone_number']) != "" || trim($phoneData['phone_title']) != "") {
                    $phone = new Phone($phoneData);
                    $company->phones()->save($phone);
                }
            }
        }
        $addressService = new AddressService();
        $addressService->saveAddresses($company->id, 2, $userAddresses);

        addLogs([
            'action_by'     => \Auth::id(),
            'action_to'     => $company->id,
            'item_type'     => 'company',
            'type'          => $type,
            'message'         => "Company details " . $type . "d by " . \Auth::user()->name,
            'ip_address'     => \request()->ip(),
        ]);
        return $company;
    }


    public function getCompanyDetails($id)
    {
        return Company::with(['phones', 'addresses'])->find($id);
    }

    public function calculateCompletedRequest($companyId)
    {
        $completedBookingIds = Booking::where('company_id', $companyId)->where('is_closed', 1)->pluck('id');
        return BookingServices::whereIn('booking_id', $completedBookingIds)->sum('duration_hour');
    }

    public function calculateOpenRequest($companyId)
    {
        $openBookingIds = Booking::where('company_id', $companyId)->where('is_closed', 0)->pluck('id');
        return BookingServices::whereIn('booking_id', $openBookingIds)->sum('duration_hour');
    }

    public function calculateInvoices($companyId)
    {
        $totals = [
            'totalInvoice' => 0,
            'dueInvoice' => 0,
            'overDueInvoice' => 0,
            'paidInvoice' => 0,
            'accountCredit' => 0,
        ];


        $totals['totalInvoice'] = Invoice::where('company_id', $companyId)->sum('total_price');
        $totals['dueInvoice'] = Invoice::where('company_id', $companyId)->whereDate('invoice_due_date', '>=', now())->sum('outstanding_amount');
        $totals['overDueInvoice'] = Invoice::where('company_id', $companyId)->whereDate('invoice_due_date', '<', now())->sum('outstanding_amount');
        $totals['paidInvoice'] = $totals['totalInvoice'] - $totals['dueInvoice'] - $totals['overDueInvoice'];
        
        return $totals;
    }
}
