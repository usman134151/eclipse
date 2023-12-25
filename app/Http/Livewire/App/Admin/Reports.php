<?php

namespace App\Http\Livewire\App\Admin;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\Company;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\User;
use Livewire\Component;

class Reports extends Component
{
    public $showForm, $topProviders, $topServices, $topInvoices, $totalInvoiceRevenue;
    protected $listeners = ['showList' => 'resetForm'];
    public $companyLabeldata= [];
    public $companydata= [];

    public function render()
    {
        return view('livewire.app.admin.reports');
    }

    public function mount()
    {
        $this->topInvoices = $this->getTopInvoices();
        $this->topProviders = $this->getTopProviders();
        $this->topServices = $this->getTopServices();
        
        $this->getCompanyGraphData();
    }

    public function getTopProviders()
    {
        // filter top providers where booking is closed
        $providerClosedBookingsCount = BookingProvider::whereHas('booking', function ($query) {
            $query->where('is_closed', 1);
        })
            ->groupBy('provider_id')
            ->selectRaw('provider_id, count(*) as closed_bookings_count')
            ->orderByDesc('closed_bookings_count')
            ->pluck('closed_bookings_count', 'provider_id');

        // $topProviders = User::whereIn('id', $providerClosedBookingsCount->keys())->pluck('name', 'id');
        $topProviders = User::whereIn('id', $providerClosedBookingsCount->keys())->pluck('name');

        // Merge the closed bookings count with user names
        // $providersWithCount = $topProviders->map(function ($name, $id) use ($providerClosedBookingsCount) {
        //     $count = $providerClosedBookingsCount->get($id);
        //     return ['name' => $name, 'closed_bookings_count' => $count];
        // });

        return $topProviders;
    }

    public function getTopServices()
    { // services with most bookings
        $serviceCounts = Booking::selectRaw('service_category, COUNT(*) as service_count')
            ->groupBy('service_category')
            ->orderByDesc('service_count')
            ->pluck('service_count', 'service_category');

        $topServices = ServiceCategory::whereIn('id', $serviceCounts->keys())->where('status',1)->pluck('name');
        
        $servicesWithBookingCount = $serviceCounts->map(function ($count, $serviceCategory) use ($topServices) {
            $serviceName = $topServices->get($serviceCategory); // Get service name for the current service category
            if($serviceName) {
                return [
                    'name' => $serviceName,
                    'booking_count' => $count // Assign the booking count for the current service category
                ];
            }
        })->filter();
            
        return $servicesWithBookingCount;
    }

    public function getTopInvoices()
    {
        // invoice_status paid => 2
        $invoices = Invoice::where('invoice_status', 2)
            ->select('company_id')
            ->selectRaw('SUM(total_price) as total_sum')
            ->groupBy('company_id')
            ->orderByDesc('total_sum')
            ->limit(6)
            ->pluck('total_sum', 'company_id');

        $companies = Company::whereIn('id', $invoices->keys())->pluck('name', 'id'); // Fetch company names

        // Merge the invoice totals with company names
        $companiesWithInvoices = $invoices->map(function ($sum, $companyId) use ($companies) {
            $companyName = $companies->get($companyId); // Get company name for the current company ID
            return [
                'name' => $companyName,
                'invoices_total' => $sum // Assign the invoice total for the current company ID
            ];
        });

        $this->totalInvoiceRevenue = $invoices->sum();


        return $companiesWithInvoices;
    }

    public function getCompanyGraphData()
    {
        $this->companyLabeldata = collect($this->topInvoices)->take(4)->pluck('name')->toArray();
        $this->companydata = collect($this->topInvoices)->take(4)->pluck('invoices_total')->toArray();
        // Calculate contribution percentages for each data point
        $total = array_sum($this->companydata);
        $percentages = array_map(function ($data) use ($total) {
            return number_format(($data / $total) * 100, 2) . '%';
        }, $this->companydata);

        // Concatenate company labels with percentages
        $labelsWithPercentages = array_map(function ($label, $percentage) {
            return $label . ' ' . $percentage;
        }, $this->companyLabeldata, $percentages);

        $this->companyLabeldata = $labelsWithPercentages;
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
