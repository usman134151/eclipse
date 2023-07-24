@extends('layouts.tenant', ['title' => 'My Drive'])

@section('content')

<div class="" x-data="{pendingCredentials: false}" >
    
    <div class="content-header row">
            <div class="content-header-left col-12 mb-3">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h1 class="content-header-title float-start mb-0">
                            My Drive
                        </h1>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
                                        <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23">
                                            <use xlink:href="/css/common-icons.svg#home"></use>
                                        </svg>
                                    </a>
                                </li>
                                
                                <li class="breadcrumb-item">
                                    My Drive
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            
    </div>
     @livewire('app.common.provider.drive')
    @include('modals.common.view-button')    


</div>



@endsection