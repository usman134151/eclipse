<div>
    <div id="loader-section" class="loader-section" wire:loading>
        <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
            <div class="spinner-border" role="status" aria-live="polite">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    {{-- BEGIN: Content --}}
    @if($showProfile)
    @livewire('app.common.customer-details',['user'=>$user, 'isTeamMember' => true])
    @else
    {{-- BEGIN: Header --}}
    <div class="content-header row">
        <div class="content-header-left col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h1 class="content-header-title float-start mb-0">Team Members</h1>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/" title="Go to Dashboard" aria-label="Go to Dashboard">
                                    <a href="http://127.0.0.1:8000" title="Go to Dashboard"
                                        aria-label="Go to Dashboard">
                                        <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
                                    </a>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Profile
                            </li>
                            <li class="breadcrumb-item">
                                Team Members
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
                                @livewire('app.customer.company-team-members', ['company_id' => Auth::user()->company_name])
                                {{-- icon bar start --}}
                                <div class="d-flex actions gap-3 justify-content-md-end mb-2">
                                    <div class="d-flex gap-2 align-items-center">
                                        <div class="d-flex gap-2 align-items-center">
                                            <a href="#" title="Send Message" aria-label="Send Message"
                                                class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                                <svg aria-label="Send Message" class="fill" width="21"
                                                    height="20" viewBox="0 0 21 20" fill="none"
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
                                            <svg aria-label="Edit User" class="fill" width="20" height="20"
                                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="/css/customer.svg#edit"></use>
                                            </svg>
                                        </a>
                                        <span class="text-sm">
                                            Edit User
                                        </span>
                                        <a href="#" title="View Company" aria-label="View"
                                            class="btn btn-sm btn-secondary rounded btn-hs-icon">
                                            <svg aria-label="View User Details" class="fill" width="20"
                                                height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use xlink:href="/css/customer.svg#view"></use>
                                            </svg>
                                        </a>
                                        <span class="text-sm">
                                            View User Details
                                        </span>
                                    </div>

                                </div>
                                {{-- icon bar start end --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @endif
</div>