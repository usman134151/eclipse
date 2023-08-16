@extends('layouts.tenant', ['title' => 'Team Members'])

@section('content')
<div x-data="{ departmentList:false, departmentProfile:false ,companyUsers:false,departmentUsers:false }">
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
                                    <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                                        <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23"><use xlink:href="/css/common-icons.svg#home"></use></svg> 
                                        </a>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                Profile
                            </li>
                            <li class="breadcrumb-item">
                                Company Profile
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
    @livewire('app.customer.company-team-members',['company_id'=>Auth::user()->company_name])
@endsection
