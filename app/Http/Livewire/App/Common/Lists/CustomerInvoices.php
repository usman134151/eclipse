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
            Header::make()->showSearchInput()->showToggleColumns(),
            Footer::make()
                ->showPerPage(config('app.per_page'))
                ->showRecordCount(),
        ];
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
        return Invoice::query()
            // ->where(['invoice_status'=>1, 'supervisor_payment_status'=>0])
            ->with('company')->orderBy('invoice_due_date');

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
        return PowerGrid::eloquent()
            ->addColumn('invoice_detail', function (Invoice $model) {
                return '<a @click="offcanvasOpen = true">' . $model->invoice_number . '</a><p class="mt-1">' . date_format(date_create($model->invoice_due_date), "d/m/Y") . '</p>';
            })
            ->addColumn('recipient', function (Invoice $model) {
                if ($model['company']['company_logo'] == null)
                    $col = '<div class="d-flex gap-2 align-items-center"><div class=""><img width="50" style="width:64px;height:64px;top:1rem" src="/tenant-resources/images/portrait/small/image.png" class="img-fluid rounded-circle" alt="Company Profile Image"></div><div class=""><div class="fw-semibold fs-6 text-nowrap">' . $model['company']['name'] . '</div></div></div>';
                else
                    $col = '<div class="d-flex gap-2 align-items-center"><div class=""><img wire:ignore width="50" style="width:64px;height:64px;top:1rem" src="' . $model['company']['company_logo'] . '" class="img-fluid rounded-circle" alt="Company Profile Image"></div><div class=""><div class="fw-semibold fs-6 text-nowrap">' . $model['company']['name'] . '</div></div></div>';
                return $col;
            })
            ->addColumn('po_number')
            ->addColumn('total_amount', function (Invoice $model) {
                return numberFormat($model->total_price);
            })
            ->addColumn('pdf', function (Invoice $model) {
                return '<svg aria-label="PDF" width="17" height="21" wire:click="$emit(\'downloadInvoice\','.$model->id.')"
                                                    viewBox="0 0 17 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#doc"></use>
                                                </svg>';
            })

            ->addColumn('payment_method', function (Invoice $model) {
                return 'Direct Deposit';
            })

            ->addColumn('status', function (Invoice $model) {
                return '<div class="d-flex align-items-center gap-2"><svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><use xlink:href="' . $this->status[$model->invoice_status]['code'] . '"></use></svg><p>' . $this->status[$model->invoice_status]['title'] . '</p></div>';
            })
            ->addColumn('edit', function (Invoice $model) {
                return '<div class="d-flex actions">
                                                    <a href="#" title="back" aria-label="back"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon" wire:click="$emit(\'revertInvoice\',' . $model->id . ')"
                                                        data-bs-toggle="modal" data-bs-target="#revertBackModal">
                                                        <svg aria-label="Revert" class="fill-stroke" width="22"
                                                            height="20" viewBox="0 0 22 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#revert"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" @click="invoiceDetailsPanel = true" wire:click="$emit(\'openInvoiceDetails\',' . $model->id . ')"
                                                        title="Invoice Details" aria-label="Invoice Details"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        <svg aria-label="Invoice Details" width="19"
                                                            height="20" viewBox="0 0 19 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/sprite.svg#dollar-assignment"></use>
                                                        </svg>
                                                    </a>
                                                    <div class="d-flex actions">
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
                                                            </a></div></div></div>';
            });
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
        return [
            Column::make('Invoice', 'invoice_detail', '')
                ->field('invoice_detail', 'invoices.invoice_number')
                ->searchable()
                ->sortable(),
            // ->editOnClick(),
            Column::make('Recipient', 'recipient')
                ->searchable()->sortable(),
            Column::make('Po. No', 'po_number', 'companies.name'),
            Column::make('Total Amount', 'total_amount'),
            Column::make('PDF', 'pdf'),
            Column::make('Payment Method', 'payment_method'),
            Column::make('Payment Status', 'status'),


            Column::make('Actions', 'edit')->visibleInExport(false),
        ];
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
