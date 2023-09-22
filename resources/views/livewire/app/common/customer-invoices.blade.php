<div x-data="{ invoiceDetails: false }">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">Invoice Manager</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    <svg aria-label="dashboard" width="22" height="23" viewBox="0 0 22 23">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="http://127.0.0.1:8000">
                                    Customers
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Customer Invoices
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row  mb-4 mt-3">
                                <div class="col-md-12 mb-md-2">
                                    <div class="row">
                                        <p>Here you can view and manage invoices issued to customers.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row between-section-segment-spacing">
                                <div class="col-lg-8">
                                    <div class="border border-primary p-3">


                                        <div class="col-md-12 mb-3">
                                            <label class="form-label" for="Customer-invoices-summary">Customer invoices
                                                summary</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div>
                                                    <h2>$1735.6</h2>
                                                    <p>Overdue</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <h2>$6298.8</h2>
                                                    <p>Coming in the Next 30 Days</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <h2>20 Days</h2>
                                                    <p>Average Payment Timeline</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row between-section-segment-spacing">
                                <x-advancefilters type="invoice-filters" />
                            </div>
                            @livewire('app.common.lists.customer-invoices')

                            {{-- <div class="table-responsive">
                                <table id="remittances" class="table table-hover" aria-label="Remittance">
                                    <thead>
                                        <tr role="row">
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="" name=""
                                                        type="checkbox" tabindex="" aria-label="Select All Invoices">
                                                </div>
                                            </th>
                                            <th scope="col">Invoice</th>
                                            <th scope="col">Recipient(s)</th>
                                            <th scope="col">PO. NO</th>
                                            <th scope="col">Total Amount</th>
                                            <th scope="col">PDF</th>
                                            <th scope="col">Payment Method</th>
                                            <th scope="col">Payment Status</th>
                                            <th class="text-center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" aria-label="Select Invoice"
                                                        id="" name="" type="checkbox" tabindex="">
                                                </div>
                                            </td>
                                            <td><a @click="offcanvasOpen = true">87109</a>
                                                <p class="mt-1">08/24/2022</p>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="">
                                                        <img width="50" height="50"
                                                            src="/tenant-resources/images/portrait/small/image.png"
                                                            class="rounded-circle" alt="Company Profile Image">
                                                    </div>
                                                    <div class="">
                                                        <div class="fw-semibold fs-6 text-nowrap">Information
                                                            Technology</div>
                                                        <p>www.software.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">17837</td>
                                            <td class="text-center">$40.00</td>
                                            <td class="text-center">
                                                <svg aria-label="PDF" width="17" height="21"
                                                    viewBox="0 0 17 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#doc"></use>
                                                </svg>
                                            </td>
                                            <td class="text-center">Direct Deposit</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/provider.svg#green-dot"></use>
                                                    </svg>
                                                    <p>Paid</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#" title="back" aria-label="back"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        data-bs-toggle="modal" data-bs-target="#revertBackModal">
                                                        <svg aria-label="Revert" class="fill-stroke" width="22"
                                                            height="20" viewBox="0 0 22 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#revert"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" @click="invoiceDetails = true"
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
                                                                aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Download PDF" width="16"
                                                                    height="20" viewBox="0 0 16 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#download-file">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                       
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" aria-label="Select Invoice"
                                                        id="" name="" type="checkbox"
                                                        tabindex="">
                                                </div>
                                            </td>
                                            <td><a @click="offcanvasOpen = true">87109</a>
                                                <p class="mt-1">08/24/2022</p>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="">
                                                        <img width="50" height="50"
                                                            src="/tenant-resources/images/portrait/small/image.png"
                                                            class="rounded-circle" alt="Company Profile Image">
                                                    </div>
                                                    <div class="">
                                                        <div class="fw-semibold fs-6 text-nowrap">Information
                                                            Technology</div>
                                                        <p>www.software.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">17837</td>
                                            <td class="text-center">$40.00</td>
                                            <td class="text-center">
                                                <svg aria-label="PDF" width="17" height="21"
                                                    viewBox="0 0 17 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#doc"></use>
                                                </svg>
                                            </td>
                                            <td class="text-center">Direct Deposit</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/provider.svg#green-dot"></use>
                                                    </svg>
                                                    <p>Paid</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#" title="back" aria-label="back"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        data-bs-toggle="modal" data-bs-target="#revertBackModal">
                                                        <svg aria-label="Revert" class="fill-stroke" width="22"
                                                            height="20" viewBox="0 0 22 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#revert"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" @click="invoiceDetails = true"
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
                                                                aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Download PDF" width="16"
                                                                    height="20" viewBox="0 0 16 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#download-file">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <!-- <div class="tablediv dropdown-menu">
                                          <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Save</a>
                                          <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Save as</a>

                                        </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" aria-label="Select Invoice"
                                                        id="" name="" type="checkbox"
                                                        tabindex="">
                                                </div>
                                            </td>
                                            <td><a @click="offcanvasOpen = true">87109</a>
                                                <p class="mt-1">08/24/2022</p>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="">
                                                        <img width="50" height="50"
                                                            src="/tenant-resources/images/portrait/small/image.png"
                                                            class="rounded-circle" alt="Company Profile Image">
                                                    </div>
                                                    <div class="">
                                                        <div class="fw-semibold fs-6 text-nowrap">Information
                                                            Technology</div>
                                                        <p>www.software.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">17837</td>
                                            <td class="text-center">$40.00</td>
                                            <td class="text-center">
                                                <svg aria-label="PDF" width="17" height="21"
                                                    viewBox="0 0 17 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#doc"></use>
                                                </svg>
                                            </td>
                                            <td class="text-center">Direct Deposit</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/common-icons.svg#blue-dot"></use>
                                                    </svg>
                                                    <p>Issued</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#" title="back" aria-label="back"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        data-bs-toggle="modal" data-bs-target="#revertBackModal">
                                                        <svg aria-label="Revert" class="fill-stroke" width="22"
                                                            height="20" viewBox="0 0 22 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#revert"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" @click="invoiceDetails = true"
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
                                                                aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Download PDF" width="16"
                                                                    height="20" viewBox="0 0 16 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#download-file">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <!-- <div class="tablediv dropdown-menu">
                                          <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Save</a>
                                          <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Save as</a>

                                        </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" aria-label="Select Invoice"
                                                        id="" name="" type="checkbox"
                                                        tabindex="">
                                                </div>
                                            </td>
                                            <td><a @click="offcanvasOpen = true">87109</a>
                                                <p class="mt-1">08/24/2022</p>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="">
                                                        <img width="50" height="50"
                                                            src="/tenant-resources/images/portrait/small/image.png"
                                                            class="rounded-circle" alt="Company Profile Image">
                                                    </div>
                                                    <div class="">
                                                        <div class="fw-semibold fs-6 text-nowrap">Information
                                                            Technology</div>
                                                        <p>www.software.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">17837</td>
                                            <td class="text-center">$40.00</td>
                                            <td class="text-center">
                                                <svg aria-label="PDF" width="17" height="21"
                                                    viewBox="0 0 17 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#doc"></use>
                                                </svg>
                                            </td>
                                            <td class="text-center">Direct Deposit</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/provider.svg#green-dot"></use>
                                                    </svg>
                                                    <p>Paid</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#" title="back" aria-label="back"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        data-bs-toggle="modal" data-bs-target="#revertBackModal">
                                                        <svg aria-label="Revert" class="fill-stroke" width="22"
                                                            height="20" viewBox="0 0 22 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#revert"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" @click="invoiceDetails = true"
                                                        title="Invoice Details" aria-label="Invoice Details"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        <svg aria-label="Invoice Details" width="19"
                                                            height="20" viewBox="0 0 19 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/sprite.svg#dollar-assignment"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="javascript:void(0)" title="Download PDF"
                                                        aria-label="Download PDF"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        <svg aria-label="Download PDF" width="16" height="20"
                                                            viewBox="0 0 16 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#download-file"></use>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" aria-label="Select Invoice"
                                                        id="" name="" type="checkbox"
                                                        tabindex="">
                                                </div>
                                            </td>
                                            <td><a @click="offcanvasOpen = true">87109</a>
                                                <p class="mt-1">08/24/2022</p>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="">
                                                        <img width="50" height="50"
                                                            src="/tenant-resources/images/portrait/small/image.png"
                                                            class="rounded-circle" alt="Company Profile Image">
                                                    </div>
                                                    <div class="">
                                                        <div class="fw-semibold fs-6 text-nowrap">Information
                                                            Technology</div>
                                                        <p>www.software.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">17837</td>
                                            <td class="text-center">$40.00</td>
                                            <td class="text-center">
                                                <svg aria-label="PDF" width="17" height="21"
                                                    viewBox="0 0 17 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#doc"></use>
                                                </svg>
                                            </td>
                                            <td class="text-center">Direct Deposit</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/provider.svg#yellow-dot"></use>
                                                    </svg>

                                                    <p>Partial</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#" title="back" aria-label="back"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        data-bs-toggle="modal" data-bs-target="#revertBackModal">
                                                        <svg aria-label="Revert" class="fill-stroke" width="22"
                                                            height="20" viewBox="0 0 22 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#revert"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" @click="invoiceDetails = true"
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
                                                                aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Download PDF" width="16"
                                                                    height="20" viewBox="0 0 16 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#download-file">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <!-- <div class="tablediv dropdown-menu">
                                              <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Save</a>
                                              <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Save as</a>

                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" aria-label="Select Invoice"
                                                        id="" name="" type="checkbox"
                                                        tabindex="">
                                                </div>
                                            </td>
                                            <td><a @click="offcanvasOpen = true">87109</a>
                                                <p class="mt-1">08/24/2022</p>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="">
                                                        <img width="50" height="50"
                                                            src="/tenant-resources/images/portrait/small/image.png"
                                                            class="rounded-circle" alt="Company Profile Image">
                                                    </div>
                                                    <div class="">
                                                        <div class="fw-semibold fs-6 text-nowrap">Information
                                                            Technology</div>
                                                        <p>www.software.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">17837</td>
                                            <td class="text-center">$40.00</td>
                                            <td class="text-center">
                                                <svg aria-label="PDF" width="17" height="21"
                                                    viewBox="0 0 17 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#doc"></use>
                                                </svg>
                                            </td>
                                            <td class="text-center">Direct Deposit</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/provider.svg#green-dot"></use>
                                                    </svg>
                                                    <p>Paid</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#" title="back" aria-label="back"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        data-bs-toggle="modal" data-bs-target="#revertBackModal">
                                                        <svg aria-label="Revert" class="fill-stroke" width="22"
                                                            height="20" viewBox="0 0 22 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#revert"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" @click="invoiceDetails = true"
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
                                                                aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Download PDF" width="16"
                                                                    height="20" viewBox="0 0 16 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#download-file">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <!-- <div class="tablediv dropdown-menu">
                                              <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Save</a>
                                              <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Save as</a>

                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" aria-label="Select Invoice"
                                                        id="" name="" type="checkbox"
                                                        tabindex="">
                                                </div>
                                            </td>
                                            <td><a @click="offcanvasOpen = true">87109</a>
                                                <p class="mt-1">08/24/2022</p>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="">
                                                        <img width="50" height="50"
                                                            src="/tenant-resources/images/portrait/small/image.png"
                                                            class="rounded-circle" alt="Company Profile Image">
                                                    </div>
                                                    <div class="">
                                                        <div class="fw-semibold fs-6 text-nowrap">Information
                                                            Technology</div>
                                                        <p>www.software.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">17837</td>
                                            <td class="text-center">$40.00</td>
                                            <td class="text-center">
                                                <svg aria-label="PDF" width="17" height="21"
                                                    viewBox="0 0 17 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#doc"></use>
                                                </svg>
                                            </td>
                                            <td class="text-center">Direct Deposit</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/provider.svg#green-dot"></use>
                                                    </svg>
                                                    <p>Paid</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#" title="back" aria-label="back"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        data-bs-toggle="modal" data-bs-target="#revertBackModal">
                                                        <svg aria-label="Revert" class="fill-stroke" width="22"
                                                            height="20" viewBox="0 0 22 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#revert"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" @click="invoiceDetails = true"
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
                                                                aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Download PDF" width="16"
                                                                    height="20" viewBox="0 0 16 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#download-file">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <!-- <div class="tablediv dropdown-menu">
                                                <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Save</a>
                                                <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Save as</a>

                                              </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" aria-label="Select Invoice"
                                                        id="" name="" type="checkbox"
                                                        tabindex="">
                                                </div>
                                            </td>
                                            <td><a @click="offcanvasOpen = true">87109</a>
                                                <p class="mt-1">08/24/2022</p>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="">
                                                        <img width="50" height="50"
                                                            src="/tenant-resources/images/portrait/small/image.png"
                                                            class="rounded-circle" alt="Company Profile Image">
                                                    </div>
                                                    <div class="">
                                                        <div class="fw-semibold fs-6 text-nowrap">Information
                                                            Technology</div>
                                                        <p>www.software.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">17837</td>
                                            <td class="text-center">$40.00</td>
                                            <td class="text-center">
                                                <svg aria-label="PDF" width="17" height="21"
                                                    viewBox="0 0 17 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#doc"></use>
                                                </svg>
                                            </td>
                                            <td class="text-center">Direct Deposit</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/provider.svg#red-dot"></use>
                                                    </svg>

                                                    <p>Overdue</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#" title="back" aria-label="back"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        data-bs-toggle="modal" data-bs-target="#revertBackModal">
                                                        <svg aria-label="Revert" class="fill-stroke" width="22"
                                                            height="20" viewBox="0 0 22 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#revert"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" @click="invoiceDetails = true"
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
                                                                aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Download PDF" width="16"
                                                                    height="20" viewBox="0 0 16 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#download-file">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <!-- <div class="tablediv dropdown-menu">
                                                  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Save</a>
                                                  <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Save as</a>

                                                </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" aria-label="Select Invoice"
                                                        id="" name="" type="checkbox"
                                                        tabindex="">
                                                </div>
                                            </td>
                                            <td><a @click="offcanvasOpen = true">87109</a>
                                                <p class="mt-1">08/24/2022</p>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="">
                                                        <img width="50" height="50"
                                                            src="/tenant-resources/images/portrait/small/image.png"
                                                            class="rounded-circle" alt="Company Profile Image">
                                                    </div>
                                                    <div class="">
                                                        <div class="fw-semibold fs-6 text-nowrap">Information
                                                            Technology</div>
                                                        <p>www.software.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">17837</td>
                                            <td class="text-center">$40.00</td>
                                            <td class="text-center">
                                                <svg aria-label="PDF" width="17" height="21"
                                                    viewBox="0 0 17 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#doc"></use>
                                                </svg>
                                            </td>
                                            <td class="text-center">Direct Deposit</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/provider.svg#green-dot"></use>
                                                    </svg>
                                                    <p>Paid</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#" title="back" aria-label="back"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        data-bs-toggle="modal" data-bs-target="#revertBackModal">
                                                        <svg aria-label="Revert" class="fill-stroke" width="22"
                                                            height="20" viewBox="0 0 22 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#revert"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" @click="invoiceDetails = true"
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
                                                                aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Download PDF" width="16"
                                                                    height="20" viewBox="0 0 16 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#download-file">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <!-- <div class="tablediv dropdown-menu">
                                                  <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Save</a>
                                                  <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Save as</a>

                                                </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" aria-label="Select Invoice"
                                                        id="" name="" type="checkbox"
                                                        tabindex="">
                                                </div>
                                            </td>
                                            <td><a @click="offcanvasOpen = true">87109</a>
                                                <p class="mt-1">08/24/2022</p>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="">
                                                        <img width="50" height="50"
                                                            src="/tenant-resources/images/portrait/small/image.png"
                                                            class="rounded-circle" alt="Company Profile Image">
                                                    </div>
                                                    <div class="">
                                                        <div class="fw-semibold fs-6 text-nowrap">Information
                                                            Technology</div>
                                                        <p>www.software.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">17837</td>
                                            <td class="text-center">$40.00</td>
                                            <td class="text-center">
                                                <svg aria-label="PDF" width="17" height="21"
                                                    viewBox="0 0 17 21" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <use xlink:href="/css/common-icons.svg#doc"></use>
                                                </svg>
                                            </td>
                                            <td class="text-center">Direct Deposit</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <use xlink:href="/css/provider.svg#green-dot"></use>
                                                    </svg>
                                                    <p>Paid</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="#" title="back" aria-label="back"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        data-bs-toggle="modal" data-bs-target="#revertBackModal">
                                                        <svg aria-label="Revert" class="fill-stroke" width="22"
                                                            height="20" viewBox="0 0 22 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/provider.svg#revert"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" @click="invoiceDetails = true"
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
                                                                aria-label="Download PDF"
                                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                                <svg aria-label="Download PDF" width="16"
                                                                    height="20" viewBox="0 0 16 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use xlink:href="/css/provider.svg#download-file">
                                                                    </use>
                                                                </svg>
                                                            </a>
                                                            <!-- <div class="tablediv dropdown-menu">
                                                    <a title="Edit" aria-label="Edit" href="#" class="dropdown-item"><i class="fa fa-edit"></i>Save</a>
                                                    <a href="javascript:void(0)" aria-label="Deactivate" title="Deactivate" class="dropdown-item"><i class="fa fa-times-circle"></i>Save as</a>

                                                  </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> --}}
                            {{-- icon bar start --}}
                            <div class="d-flex actions gap-3 justify-content-end mb-2 flex-wrap">
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="#" title="back" aria-label="back"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal"
                                        data-bs-target="#revertBackModal">
                                        <svg aria-label="Revert" class="fill-stroke" width="22" height="20"
                                            viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/provider.svg#revert"></use>
                                        </svg>
                                    </a>
                                    <span class="text-sm">
                                        Revert
                                    </span>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="#" title="Invoice Details" aria-label="Invoice Details"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="Invoice Details" width="19" height="20"
                                            viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/sprite.svg#dollar-assignment"></use>
                                        </svg>
                                    </a>
                                    <span class="text-sm">
                                        Invoice Details
                                    </span>
                                </div>
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="javascript:void(0)" title="Download PDF" aria-label="Download PDF"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg aria-label="Download PDF" width="16" height="20"
                                            viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/provider.svg#download-file"></use>
                                        </svg>
                                    </a>
                                    <span class="text-sm">
                                        Download PDF
                                    </span>
                                </div>
                            </div>


                            <div class="justify-content-center form-actions d-flex flex-column flex-md-row gap-2">
                                <button class="btn btn-primary rounded">Resend Invoice</button>
                                <button class="btn btn-primary rounded" data-bs-toggle="modal"
                                    data-bs-target="#payInvoice">Record Payment</button>
                                <button class="btn btn-primary rounded" data-bs-toggle="modal"
                                    data-bs-target="#revertBackModal">Revert Invoice</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Floating Label Form section end -->
    </div>
    @include('modals.common.pay-invoice')
    @include('modals.common.revert-back')
    @include('panels.invoices.invoice-details')
</div>
<script>
    function updateVal(attrName, val) {

        Livewire.emit('updateVal', attrName, val);

    }
</script>
