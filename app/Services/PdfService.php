<?php 
namespace App\Services;

use App\Models\Tenant\BusinessSetup;
use App\Models\Tenant\Company;
use Dompdf\Dompdf;
use Dompdf\Options;
use PDF;
class PdfService
{
    protected $header, $footer;

    protected function generateHeader($title)
    {
        $businessSetup = BusinessSetup::select('business_name','company_logo')->first()->toArray();
        $logo = public_path($businessSetup['company_logo'] != null ? $businessSetup['company_logo'] : '/tenant-resources/images/portrait/small/avatar-s-20.jpg');
        $companyLogo = file_exists($logo) ? $logo : public_path('/tenant-resources/images/portrait/small/avatar-s-20.jpg');

        $companyName = $businessSetup['business_name'];
        $header = 
        '<div class="header-section">
            <img src="'.$companyLogo.'" alt="Company Logo" width="80" height="80">
            <h2 class="company-name">'. strtoupper($companyName) .'<br>'. strtoupper($title) . '</h2>
        </div>';
        return $header;
    }

    protected function generateFooter()
    {
        $footer = 
            '<footer>
                Copyright © Eclipse Scheduling, All rights Reserved
            </footer>';
        return $footer;
    }

    public function generateRemittancesPdf($data , $fileTitle, $companyId)
    {
        $header = $this->generateHeader('Remittance');
        $footer = $this->generateFooter();
        // dd($data , $fileTitle, $companyId);
        $pdfContent = PDF::loadView('tenant.common.download_remittances_pdf', ['data' => $data, 'header' => $header, 'footer' => $footer , 'fileTitle' => $fileTitle])->output();
            return response()->streamDownload(
                fn () => print($pdfContent),
                $fileTitle . ".pdf"
            );
    }

    public function generateCustomerInvoicePdf($data , $fileTitle)
    {
        $header = $this->generateHeader('');
        $footer = $this->generateFooter();
        $pdfContent = PDF::loadView('tenant.common.download_invoice_pdf', ['orderData' => $data, 'header' => $header, 'footer' => $footer ])->output();
            return response()->streamDownload(
                fn () => print($pdfContent),
                $fileTitle . ".pdf"
            );
    }
}
