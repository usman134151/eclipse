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
        $businessSetup = BusinessSetup::select('business_name','company_logo','invoice_logo','invoice_header')->first()->toArray();
        
        $logo = public_path($businessSetup['company_logo'] != null ? $businessSetup['company_logo'] : '/tenant-resources/images/portrait/small/avatar-s-20.jpg');
        $companyLogo = file_exists($logo) ? $logo : public_path('/tenant-resources/images/portrait/small/avatar-s-20.jpg');
        
        $invoice_logo = $businessSetup['invoice_logo'] != null ? public_path($businessSetup['invoice_logo']) : $companyLogo;
        $invoiceLogo = file_exists($invoice_logo) ? $invoice_logo : public_path('/tenant-resources/images/portrait/small/avatar-s-20.jpg');

        $companyName = $businessSetup['business_name'] != null ? strtoupper($businessSetup['business_name']) : '';
        $invoice_header = $businessSetup['invoice_header'] != null ? $businessSetup['invoice_header'] : $companyName;
        $header = 
        '<div class="header-section">
            <img src="'.$invoiceLogo.'" alt="Company Logo" width="80" height="80">
            <h2 class="company-name">'. $invoice_header .'<br>'. strtoupper($title) . '</h2>
        </div>';
        return $header;
    }

    protected function generateFooter()
    {
        $businessSetup = BusinessSetup::select('invoice_footer')->first()->toArray();
        $default_footer = 'Copyright © Eclipse Scheduling, All rights Reserved';
        $invoice_footer =  $businessSetup['invoice_footer'] != null ? $businessSetup['invoice_footer'] : $default_footer;
        $footer =
            '<footer>
                '. $invoice_footer .'
            </footer>';
        return $footer;
    }

    public function generateRemittancesPdf($data , $fileTitle, $companyId)
    {
        $header = $this->generateHeader('Remittance');
        $footer = $this->generateFooter();
        $address = BusinessSetup::select('business_address')->first()->toArray();
        $serviceAddress = $address['business_address'] ?? $address['business_address'] != '' ? $address['business_address'] : 'N/A';

        // dd($data , $fileTitle, $companyId);
        $pdfContent = PDF::loadView('tenant.common.download_remittances_pdf', ['data' => $data, 'header' => $header, 'footer' => $footer , 'fileTitle' => $fileTitle, 'serviceAddress' => $serviceAddress])->output();
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
