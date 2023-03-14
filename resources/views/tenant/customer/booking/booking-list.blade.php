@extends('layouts.tenant')

@section('content')
{{-- BEGIN: Content --}}
<div class="content-header row">
    <div class="content-header-left col-md-12 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h1 class="content-header-title float-start mb-0">
                    {{ $bookingType }} Services
                </h1>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg aria-label="Home" width="22" height="23"viewBox="0 0 22 23" fill="none"
                                  xmlns="http://www.w3.org/2000/svg"><use xlink:href="/css/sprite.svg#home"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">
                                Services
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            {{ $bookingType }} Services
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-lg-flex justify-content-end mb-4">
    <a href="/admin/booknow/create" class="btn btn-primary rounded btn-sm">
        Scheduled Services
    </a>
</div>
@livewire('app.common.bookings.booking-list', ['bookingType'=>$bookingType])
{{-- End: Content --}}
@endsection
