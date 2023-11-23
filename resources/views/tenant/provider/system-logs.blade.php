@extends('layouts.tenant', ['title' => 'System Logs'])

@section('content')
{{-- @livewire('app.common.system-logs') --}}
    <div>
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">System Logs</h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                                        <svg aria-label="Go to Dashboard" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)">
                                        System Logs
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="loader-section" class="loader-section" wire:loading>
            <div class="d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                <div class="spinner-border" role="status" aria-live="polite">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        <!-- Basic multiple Column Form section start -->
        <section id="multiple-column-form">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-md-2">
                                    <p>Here you can carefully monitor and address changes to your account.</p>
                                </div>
                            </div>


                        </div>
                        @livewire('app.common.lists.logs', ['record_id' => Auth::id(), 'record_type' => 'user'])
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Floating Label Form section end -->
    </div>
@endsection