@extends('layouts.tenant', ['title' => 'Notifications'])

@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h1 class="content-header-title float-start mb-0">Notifications</h1>
          <div class="breadcrumb-wrapper">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
                  <svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                    <use xlink:href="/css/common-icons.svg#home"></use>
                    </svg>
                </a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">
                    Settings
                </a>
              </li>
              <li class="breadcrumb-item">
                Notifications
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
   <div class="container">
      <div class="card">
          <div class="card-body">
              <div class="row mb-4">
                <p class="mt-3">
                    Here you can control how you are notified about Profile activity.
                </p>
              </div>
                @livewire('app.common.settings.notifications',['model_type'=>3,'model_id'=>Auth::id()])
          </div>
      </div>
   </div>
@endsection