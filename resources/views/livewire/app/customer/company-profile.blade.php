<div x-data="{ departmentList:false, departmentProfile:false }">
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    {{-- BEGIN: Content --}}
    {{-- BEGIN: Header --}}
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">Company directory</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    <x-icon name="home" />
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Profile
                            </li>
                            <li class="breadcrumb-item">
                                Company Profie
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Basic multiple column form section Start --}}
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row mb-5">
                                    <div class="col-md-8">
                                        <h3 class="text-primary">Company Directory</h3>
                                        <p>
                                            Here you can view colleagues who also have a service account.
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="dropdown ">

                                        <button class="btn btn-secondary dropdown-toggle btn-outline-primary "
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg width="23" height="26" viewBox="0 0 23 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z"
                                                    fill="#023DB0" />
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column flex-md-row justify-content-between mb-2 gap-3">
                                <div class="d-inline-flex align-items-center gap-4">
                                    <label for="show_records_number" class="form-label-sm mb-0">Show</label>
                                    <select class="form-select form-select-md" id="show_records_number">
                                        <option>10</option>
                                        <option>15</option>
                                        <option>20</option>
                                        <option>25</option>
                                    </select>
                                </div>
                                <div class="d-inline-flex align-items-center gap-4">
                                    <label for="search" class="form-label-sm mb-0">Search</label>
                                    <input type="search" class="form-control form-control-md" id="search" name="search"
                                        placeholder="Search here" autocomplete="on">
                                </div>
                            </div>

                            <div class="table-responsive mb-2">
                                <table id="unassigned_data" class="table table-hover"
                                    aria-label="Admin Staff Teams Table">
                                    <thead>
                                        <tr role="row">
                                            <th scope="col" class="text-center">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    aria-label="Select All Teams">
                                            </th>
                                            <th scope="col">User</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col" class="text-center">Departments</th>
                                            <th scope="col" class="text-center">Role</th>
                                            <th scope="col" class="text-center">Active Bookings</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 1; $i <= 10; $i++) <tr role="row"
                                            class="{{ ($i % 2 == 0) ? 'even' : 'odd'}} align-middle">
                                            <td class="text-center">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    aria-label="Select Team">
                                            </td>
                                            <td>
                                                <div class="row g-2">
                                                    <div class="col-md-2">
                                                        <img src="/tenant/images/portrait/small/image4.png"
                                                            class="img-fluid rounded-circle"
                                                            alt="Image of Team Profile">
                                                    </div>
                                                    <div class="col-md-10">
                                                        <h6 class="fw-semibold">
                                                            Dori Griffiths
                                                        </h6>
                                                        <p>
                                                            dorigriffit@gmail.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p>(923) 023-9683</p>
                                            </td>
                                            <td class="text-center text-primary">Language Interpreter </td>
                                            <td class="text-center">Admin</td>
                                            <td class="text-center text-primary">02 Bookings</td>
                                            <td>
                                                <div class="d-flex actions">
                                                    <a href="javascript:void(0)" title="Send Message "
                                                        aria-label="Send Message"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        wire:click="showProfile">
                                                        <svg class="fill" width="21" height="20" viewBox="0 0 21 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/customer.svg#company-icon"></use>
                                                        </svg>
                                                    </a>

                                                    <a href="/customer/myprofile" title="View User"
                                                        aria-label="View User"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon"
                                                        wire:click="showProfile">
                                                        <svg class="fill" width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/customer.svg#view"></use>
                                                        </svg>
                                                    </a>
                                                    <a href="#" title="Edit User" aria-label="Edit User"
                                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                        <svg class="fill" width="20" height="20" viewBox="0 0 20 20"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <use xlink:href="/css/customer.svg#edit"></use>
                                                        </svg>
                                                    </a>

                                                </div>
                                            </td>
                                            </tr>
                                            @endfor
                                    </tbody>
                                </table>
                            </div>


                            <div class="d-flex flex-column flex-md-row justify-content-between">
                                <div>
                                    <p class="fw-semibold">Showing 1 to 10 of 100 entries</p>
                                </div>
                                <nav aria-label="Page Navigation">
                                    <ul class="pagination justify-content-start justify-content-lg-end">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            {{-- icon bar start--}}
                            <div class="d-flex actions gap-3 justify-content-md-end mb-2">
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="d-flex gap-2 align-items-center">
                                        <a href="#" title="Send Message" aria-label="Send Message"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg class="fill" width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="/css/customer.svg#company-icon"></use>
                                            </svg>
                                        </a>
                                        <span class="text-sm">
                                            Send Message
                                        </span>
                                    </div>
                                    <a href="#" title="Edit Company" aria-label="Edit Company"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg class="fill" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <use xlink:href="/css/customer.svg#edit"></use>
                                    </svg>
                                    </a>
                                    <span class="text-sm">
                                        Edit User
                                    </span>
                                    <a href="#" title="View Company" aria-label="View"
                                        class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                        <svg class="fill" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use xlink:href="/css/customer.svg#view"></use>
                                        </svg>
                                    </a>
                                    <span class="text-sm">
                                        View User Details
                                    </span>
                                </div>

                            </div>
                            {{-- icon bar start end--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>