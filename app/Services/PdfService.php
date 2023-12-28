<?php 
namespace App\Services;

use App\Models\Tenant\Company;
use Dompdf\Dompdf;
use Dompdf\Options;
use PDF;
class PdfService
{
    protected $header, $footer;

    protected function generateHeader($companyId)
    {
        $company = Company::where('id', $companyId)->first();
        $companyLogo = public_path($company->company_logo != null ? $company->company_logo : '/tenant-resources/images/portrait/small/avatar-s-20.jpg');;
        $companyName = $company->name;
        $header = 
        '<div class="header-section">
            <img src="'.$companyLogo.'" alt="Company Logo" width="80" height="80">
            <h3 class="company-name">'. strtoupper($companyName).'</h3>
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
        $header = $this->generateHeader($companyId);
        $footer = $this->generateFooter();
        // dd($data , $fileTitle, $companyId);
        $pdfContent = PDF::loadView('tenant.common.download_remittances_pdf', ['data' => $data, 'header' => $header, 'footer' => $footer , 'fileTitle' => $fileTitle])->output();
            return response()->streamDownload(
                fn () => print($pdfContent),
                $fileTitle . ".pdf"
            );
    }
}
