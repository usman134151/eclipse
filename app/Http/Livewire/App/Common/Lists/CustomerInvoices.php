<?php

namespace App\Http\Livewire\App\Common\Lists;

use App\Models\Tenant\Invoice;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Rules\{Rule, RuleActions};
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use PowerComponents\LivewirePowerGrid\{Button, Column, Exportable, Footer, Header, PowerGrid, PowerGridComponent, PowerGridEloquent};

final class CustomerInvoices extends PowerGridComponent
{
    use ActionButton;
    public $status = [2 => ['code' => '/css/provider.svg#green-dot', 'title' => 'Paid'], 1 => ['code' => '/css/common-icons.svg#blue-dot', 'title' => 'Issued'], 3 => ['code' => '/css/provider.svg#red-dot', 'title' => 'Overdue'], 4 => ['code' => '/css/provider.svg#yellow-dot', 'title' => 'Partial']];
    protected $listeners = ['refresh' => 'setUp'];
    public $invoice_status = '', $company_id = null , $supervisor_id , $billing_manager_id;
    public $filter_bmanager, $filter_companies, $filter_payment_status, $filter_select_Date, $filterRadio , $filter_end_Date;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp(): array
    {
        $this->showCheckBox();
        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage(config('app.per_page'))
                ->showRecordCount()->pagination('livewire.app.common.bookings.booking-nav'), //updated by Hammad to add custom pagination
        ];
    }

    protected function getListeners(): array
    {
        return array_merge(
            parent::getListeners(),
            [
                'updateVal'   => 'updateVal',
                'resetFilters'   => 'resetFilters',

            ]
        );
    }

    public function updateVal($attrName, $val)
    {
        $this->$attrName = $val;
    }

    public function resetFilters()
    {
        $this->filter_bmanager = null;
        $this->filter_companies = null;
        $this->filter_payment_status = null;
        $this->filter_select_Date = null;
        $this->filter_end_Date = null;
        $this->filterRadio = null;

    }
  

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */

    /**
     * PowerGrid datasource.
     *
     * @return Builder<\App\Models\Tenant\Invoice>
     */
    public function datasource(): Builder
    {
        $query = Invoice::query();
        // ->where(['invoice_status'=>1, 'supervisor_payment_status'=>0])
        if ($this->company_id && session()->get('isCustomer'))
            $query->where('company_id', $this->company_id);
        if ($this->invoice_status == 'pending' && session()->get('isCustomer'))
            $query->where('invoice_status', '!=', '2');
        if ($this->invoice_status == 'paid' && session()->get('isCustomer'))
            $query->where('invoice_status', '2');


        $query->join('companies', 'companies.id', 'invoices.company_id');
        $query->select(['companies.name', 'companies.company_logo', 'invoices.*']);
        // $query->orderBy('invoice_due_date');

        if($this->supervisor_id)
            $query->where('supervisor_id', $this->supervisor_id);
            
        if($this->billing_manager_id){
            $query->where('billing_manager_id', $this->billing_manager_id);
        }

        if($this->company_id){
            $query->where('company_id', $this->company_id);
        }


        if ($this->filter_companies)
            $query->where('company_id', $this->filter_companies);

        if ($this->filter_bmanager)
            $query->where('billing_manager_id', $this->filter_bmanager);
        
        if ($this->filter_payment_status)
            $query->where('invoice_status', $this->filter_payment_status);
        
        if ($this->filter_select_Date)
        {
            $formattedDate = \Carbon\Carbon::createFromFormat('m/d/Y', $this->filter_select_Date)->format('Y-m-d');
            $endDate = $this->filter_end_Date == '' ?  $formattedDate : \Carbon\Carbon::createFromFormat('m/d/Y', $this->filter_end_Date)->format('Y-m-d');
            if($this->filterRadio == "issued")
                $query->whereDate('invoice_date',">=", $formattedDate)->whereDate('invoice_date',"<=", $endDate);
            else if($this->filterRadio == "due")
                $query->whereDate('invoice_due_date',">=", $formattedDate)->whereDate('invoice_due_date',"<=", $endDate);

        }

        
        
        return $query;
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */

    /**
     * Relationship search.
     *
     * @return array<string, array<int, string>>
     */
    public function relationSearch(): array
    {
        return [];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    | ❗ IMPORTANT: When using closures, you must escape any value coming from
    |    the database using the `e()` Laravel Helper function.
    |
    */
    public function addColumns(): PowerGridEloquent
    {
        $cols =  PowerGrid::eloquent()
            ->addColumn('invoice_number')
            ->addColumn('name')

            ->addColumn('invoice_detail', function (Invoice $model) {
                if ($this->invoice_status == 'paid' && session()->get('isCustomer'))
                    $data = '<a href="#">' . $model->invoice_number . '</a><p class="mt-1">' . date_format(date_create($model->paid_on), "m/d/Y h:i A") . '</p>';
                elseif ($this->invoice_status == 'pending' && session()->get('isCustomer'))
                    $data =  '<a >' . $model->invoice_number . '</a><p class="mt-1">' . date_format(date_create($model->invoice_date), "m/d/Y") . '</p>';

                else
                    $data =  '<a @click="offcanvasOpen = true">' . $model->invoice_number . '</a><p class="mt-1">' . date_format(date_create($model->invoice_due_date), "m/d/Y") . '</p>';
                return $data;
            });

        if (!session()->get('isCustomer'))
            $cols->addColumn('recipient', function (Invoice $model) {
                if ($model->company_logo == null)
                    $col = '<div class="d-flex gap-2 align-items-center"><div class=""><img width="50" style="width:64px;height:64px;top:1rem" src="/tenant-resources/images/portrait/small/image.png" class="img-fluid rounded-circle" alt="Company Profile Image"></div><div class=""><div class="fw-semibold fs-6 text-nowrap">' . $model->name . '</div></div></div>';
                else
                    $col = '<div class="d-flex gap-2 align-items-center"><div class=""><img wire:ignore width="50" style="width:64px;height:64px;top:1rem" src="' . $model->company_logo . '" class="img-fluid rounded-circle" alt="Company Profile Image"></div><div class=""><div class="fw-semibold fs-6 text-nowrap">' . $model->name . '</div></div></div>';
                return $col;
            });

        $cols->addColumn('po_number')
            ->addColumn('total_amount', function (Invoice $model) {
                return numberFormat($model->total_price);
            })

            ->addColumn('due_date', function (Invoice $model) {
                return date_format(date_create($model->invoice_due_date), "m/d/Y");
            })
            ->addColumn('pdf', function (Invoice $model) {
                return '<svg aria-label="PDF" width="17" height="21" wire:click="$emit(\'downloadInvoice\',' . $model->id . ')"
                                                    viewBox="0 0 17 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#doc"></use>
                                                </svg>';
            })

            ->addColumn('payment_method', function (Invoice $model) {
                $payment_method = [
                    1 => 'Direct Deposit',
                    2 => 'Cash payment',
                    3 => 'Check',
                    4 => 'Bank Transfer',
                ];
                if($model->invoice_status == 2)
                    return array_key_exists($model->payment_method, $payment_method) ? $payment_method[$model->payment_method] : 'N/A';
                else
                    return 'N/A';
            })


            ->addColumn('status', function (Invoice $model) {
                return '<div class="d-flex align-items-center gap-2"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="' . $this->status[$model->invoice_status]['code'] . '"></use></svg><p>' . $this->status[$model->invoice_status]['title'] . '</p></div>';
            })
            ->addColumn('edit', function (Invoice $model) {
                $view_b = '<a href="#" title="Revert" aria-label="back"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="$emit(\'revertInvoice\',' . $model->id . ')"
                                                        data-bs-toggle="modal" data-bs-target="#revertBackModal">
                                                        <svg aria-label="Revert" class="fill-stroke" width="22"
                                                            height="20" viewBox="0 0 22 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#revert"></use>
                                                        </svg>
                                                    </a>';
                $details_b = '
                                                    <a href="#" @click="invoiceDetailsPanel = true" wire:click="$emit(\'openInvoiceDetails\',' . $model->id . ')"
                                                        title="Invoice Details" aria-label="Invoice Details"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        <svg aria-label="Invoice Details" width="19"
                                                            height="20" viewBox="0 0 19 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/sprite.svg#dollar-assignment"></use>
                                                        </svg>
                                                    </a>';
                $pdf_b = '<div class="d-flex actions">
                                                        <div class="dropdown ac-cstm">
                                                            <a href="javascript:void(0)" title="Download PDF"
                                                                 wire:click="$emit(\'downloadInvoice\',' . $model->id . ')"
                                                                aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Download PDF" width="16"
                                                                    height="20" viewBox="0 0 16 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#download-file">
                                                                    </use>
                                                                </svg>
                                                            </a></div></div>';
                $actions = '<div class="d-flex actions">';
                if (session()->get('isCustomer'))
                    $actions .= $details_b;
                else
                    $actions .= $view_b . $details_b . $pdf_b;

                $actions .= '</div>';
                return  $actions;
            });
        return $cols;
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */

    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        $cols = [
            Column::make('Invoice', 'invoice_detail')
                ->field('invoice_detail', 'invoice_number')
                ->searchable()
                ->sortable(),
            Column::make('Due', 'due_date'),

            Column::make('Po. No', 'po_number', 'po_number')->searchable(),
            Column::make('Total Amount', 'total_amount'),
            Column::make('PDF', 'pdf'),
            Column::make('Payment Method', 'payment_method'),
            Column::make('Payment Status', 'status'),


            Column::make('Actions', 'edit')->visibleInExport(false),
        ];
        if (!session()->get('isCustomer'))
            $cols[1] =            Column::make('Recipient', 'recipient', 'companies.name')
                ->searchable()->sortable();


        return $cols;
    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable the method below only if the Routes below are defined in your app.
    |
    */

    /**
     * PowerGrid Invoice Action Buttons.
     *
     * @return array<int, Button>
     */

    /*
    public function actions(): array
    {
       return [
           Button::make('edit', 'Edit')
               ->class('bg-indigo-500 cursor-pointer text-white px-3 py-2.5 m-1 rounded text-sm')
               ->route('invoice.edit', ['invoice' => 'id']),

           Button::make('destroy', 'Delete')
               ->class('bg-red-500 cursor-pointer text-white px-3 py-2 m-1 rounded text-sm')
               ->route('invoice.destroy', ['invoice' => 'id'])
               ->method('delete')
        ];
    }
    */

    /*
    |--------------------------------------------------------------------------
    | Actions Rules
    |--------------------------------------------------------------------------
    | Enable the method below to configure Rules for your Table and Action Buttons.
    |
    */

    /**
     * PowerGrid Invoice Action Rules.
     *
     * @return array<int, RuleActions>
     */

    /*
    public function actionRules(): array
    {
       return [

           //Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($invoice) => $invoice->id === 1)
                ->hide(),
        ];
    }
    */
}
