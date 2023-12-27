<?php

namespace App\Http\Livewire\App\Admin;

use App\Models\Tenant\Booking;
use App\Models\Tenant\BookingProvider;
use App\Models\Tenant\Company;
use App\Models\Tenant\Invoice;
use App\Models\Tenant\InvoicePayment;
use App\Models\Tenant\Remittance;
use App\Models\Tenant\ServiceCategory;
use App\Models\Tenant\User;
use Carbon\Carbon;
use Livewire\Component;

class Reports extends Component
{
    public $date;
    public $showForm, $topProviders, $topServices, $topInvoices, $totalInvoiceRevenue, $revenues, $totalRevenue, $assignments, $totalAssignmentPayments, $cancellations, $payments, $totalPayments;
    protected $listeners = ['showList' => 'resetForm'];
    public $graph = [];


    public function render()
    {
        $this->refreshData();
        return view('livewire.app.admin.reports');
    }

    public function mount()
    {
        $this->getDateRange('last_30_days');
        $this->refreshData();
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
            ->take(5)
            ->pluck('closed_bookings_count', 'provider_id');

        $topProviders = User::whereIn('id', $providerClosedBookingsCount->keys())->pluck('name', 'id');

        // Merge the closed bookings count with user names
        $providersWithCount = $topProviders->map(function ($name, $id) use ($providerClosedBookingsCount) {
            $count = $providerClosedBookingsCount->get($id);
            return ['name' => $name, 'closed_bookings_count' => $count];
        })->toArray();

        usort($providersWithCount, function ($a, $b) {
            return $b['closed_bookings_count'] <=> $a['closed_bookings_count'];
        });

        return $providersWithCount;
    }

    public function getTopServices()
    { // services with most bookings
        $serviceCounts = Booking::selectRaw('service_category, COUNT(*) as service_count')
            ->groupBy('service_category')
            ->orderByDesc('service_count')
            ->pluck('service_count', 'service_category');

        $topServices = ServiceCategory::whereIn('id', $serviceCounts->keys())->where('status', 1)->pluck('name');

        $servicesWithBookingCount = $serviceCounts->map(function ($count, $serviceCategory) use ($topServices) {
            $serviceName = $topServices->get($serviceCategory); // Get service name for the current service category
            if ($serviceName) {
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

    public function getRevenue()
    {
        // converted dates according to invoice payments table format
        $startDate = Carbon::createFromFormat('Y-m-d', $this->date['start_date'])->format('m/d/Y');
        $endDate = Carbon::createFromFormat('Y-m-d', $this->date['end_date'])->format('m/d/Y');

        // getting amount paid based on date
        $payments = InvoicePayment::select('paid_date')
            ->selectRaw('SUM(paid_amount) as total_paid_amount')
            ->where('paid_date', '>=', $startDate)
            ->where('paid_date', '<=', $endDate)
            ->groupBy('paid_date')
            ->orderByDesc('paid_date')
            ->take(5)
            ->get()
            ->toArray();

        // Extract 'total_paid_amount' values into a separate array
        $totalPaidAmounts = array_column($payments, 'total_paid_amount');

        // Calculate the sum of 'total_paid_amount' values
        $this->totalRevenue = array_sum($totalPaidAmounts);
        return $payments;
    }

    public function getAssignments()
    {
        $bookings = Booking::where('invoice_status', 'LIKE', 2)
            ->with(['payment', 'invoices.invoicePayments' => function ($query) {
                $query->pluck('paid_date'); // Include 'paid_date' in the selection
            }])
            ->get();
        $bookingDetails = $bookings->map(function ($booking) {
            return [
                'booking_number' => $booking->booking_number,
                'paid_date' => $booking->invoices->invoicePayments->pluck('paid_date')->toArray()[0],
                'total_amount' => optional($booking->payment)->total_amount,
            ];
        })->toArray();

        // converted dates according to invoice payments table format
        $startDate = Carbon::createFromFormat('Y-m-d', $this->date['start_date'])->format('m/d/Y');
        $endDate = Carbon::createFromFormat('Y-m-d', $this->date['end_date'])->format('m/d/Y');

        $filteredBookings = collect($bookingDetails)
            ->filter(function ($booking) use ($startDate, $endDate) {
                return isset($booking['paid_date']) &&
                    ($booking['paid_date'] >= $startDate && $booking['paid_date'] <= $endDate);
            })
            ->sortByDesc('total_amount')
            ->values()
            ->take(5)
            ->all();
        // Extract 'total_amount' values into a separate array
        $totalAmounts = array_column($filteredBookings, 'total_amount');

        // Calculate the sum of 'total_amount' values
        $this->totalAssignmentPayments = array_sum($totalAmounts);

        return $filteredBookings;
    }

    public function getCancellations()
    {
        $startDate = Carbon::createFromFormat('Y-m-d', $this->date['start_date'])->startOfDay()->addSeconds(1);
        $endDate = Carbon::createFromFormat('Y-m-d', $this->date['end_date'])->endOfDay()->subSeconds(1);
        $bookings = Booking::select('company_id')
        ->selectRaw('COUNT(*) as canceled_bookings_count')
        ->selectRaw('MAX(booking_cancelled_at) as cancellation_date') // getting the latest cancellation date
        ->where('status', 3)
            ->with('company')
            ->groupBy('company_id')
            ->orderByDesc('canceled_bookings_count')
            ->take(5)
            ->get();

        // Process the result to build the desired array format
        $bookingData = $bookings->map(function ($booking) {
            return [
                'company_name' => $booking->company->name,
                'canceled_bookings_count' => $booking->canceled_bookings_count,
                'cancellation_date' => $booking->cancellation_date,
            ];
        })->toArray();

        $filteredBookingData = array_filter($bookingData, function ($booking) use ($startDate, $endDate) {
            $cancellationDate = $booking['cancellation_date'];
            return ($cancellationDate >= $startDate && $cancellationDate <= $endDate);
        });

        return $filteredBookingData;
    }

    public function getPayments()
    {
        $startDate = Carbon::createFromFormat('Y-m-d', $this->date['start_date'])->startOfDay();
        $endDate = Carbon::createFromFormat('Y-m-d', $this->date['end_date'])->endOfDay();
        $payments = Remittance::selectRaw('provider_id, MAX(paid_at) as latest_paid_date, SUM(amount) as total_amount')
        ->with(['provider' => function ($query) {
            $query->select('id', 'name'); // Select only the 'id' and 'name' columns from 'providers' table
        }])
        ->where('payment_status', 2)
        ->groupBy('provider_id')
        ->orderByDesc('total_amount')
        ->get()
        ->toArray();

        $filteredPayments = array_filter($payments, function ($payment) use ($startDate, $endDate) {
            $paidDate = $payment['latest_paid_date'];
            return ($paidDate >= $startDate && $paidDate <= $endDate);
        });

        // Extract 'total_amount' values into a separate array
        $total_amounts = array_column($filteredPayments, 'total_amount');

        // Calculate the sum of 'total_amount' values
        $this->totalPayments = array_sum($total_amounts);

        return $filteredPayments;
    }

    public function generateGraphData($data, $labelKey, $dataKey)
    {
        $dataArray = [];
        $dataArray['label'] = collect($data)->take(5)->pluck($labelKey)->toArray();
        $dataArray['data'] = collect($data)->take(5)->pluck($dataKey)->toArray();

        // Calculate contribution percentages for each data point
        $total = array_sum($dataArray['data']);
        $percentages = array_map(function ($data) use ($total) {
            return number_format(($data / $total) * 100, 2) . '%';
        }, $dataArray['data']);

        // Concatenate labels with percentages
        $labelsWithPercentages = array_map(function ($label, $percentage) {
            return $label . ' ' . $percentage;
        }, $dataArray['label'], $percentages);

        $dataArray['label'] = $labelsWithPercentages;
        return $dataArray;
    }


    function getDateRange($range)
    {
        $endDate = Carbon::today(); // Current date

        switch ($range) {
            case 'last_7_days':
                $startDate = $endDate->copy()->subDays(6);
                break;
            case 'last_30_days':
                $startDate = $endDate->copy()->subDays(29);
                break;
            case 'last_month':
                $startDate = $endDate->copy()->subMonth()->startOfMonth();
                $endDate = $endDate->copy()->subMonth()->endOfMonth();
                break;
            case 'this_month':
                $startDate = $endDate->copy()->startOfMonth();
                break;
            case 'this_year':
                $startDate = $endDate->copy()->startOfYear();
                break;
            case 'last_year':
                $startDate = $endDate->copy()->subYear()->startOfYear();
                $endDate = $endDate->copy()->subYear()->endOfYear();
                break;
            default:
                $startDate = null;
                break;
        }

        $this->date = [
            'start_date' => $startDate ? $startDate->toDateString() : null,
            'end_date' => $endDate ? $endDate->toDateString() : null,
        ];
    }

    public function refreshData()
    {
        $this->payments = $this->getPayments();
        $this->cancellations = $this->getCancellations();
        $this->assignments = $this->getAssignments();
        $this->revenues = $this->getRevenue();
        $this->topInvoices = $this->getTopInvoices();
        $this->topProviders = $this->getTopProviders();
        $this->topServices = $this->getTopServices();

        $this->graph['companyGraph'] = $this->generateGraphData($this->topInvoices, 'name', 'invoices_total');
        $this->graph['providerGraph'] = $this->generateGraphData($this->topProviders, 'name', 'closed_bookings_count');
        $this->graph['assignmentGraph'] = $this->generateGraphData($this->assignments, 'booking_number', 'total_amount');
        $this->graph['servicesGraph'] = $this->generateGraphData($this->topServices, 'name', 'booking_count');
        $this->graph['revenuesGraph'] = $this->generateGraphData($this->revenues, 'paid_date', 'total_paid_amount');
        $this->graph['cancellationsGraph'] = $this->generateGraphData($this->cancellations, 'company_name', 'canceled_bookings_count');

        $this->emit('refreshCharts');
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
