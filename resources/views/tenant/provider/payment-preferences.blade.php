@extends('layouts.tenant', ['title' => 'Payment Preferences'])

@section('content')
<div>
    <div class="content-header row">
		<div class="content-header-left col-12 mb-3">
			<div class="row breadcrumbs-top">
				<div class="col-12">
					<h1 class="content-header-title float-start mb-0">
						Payment Preferences
					</h1>
					<div class="breadcrumb-wrapper">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
									<svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor">
                                        <use xlink:href="/css/common-icons.svg#home"></use>
                                      </svg>
								</a>
							</li>
							<li class="breadcrumb-item">
								Settings
							</li>
							<li class="breadcrumb-item">
								Payment Preferences
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
   <div class="card">
    <div class="card-body">
  	@livewire('app.provider.payment-preferences',['provider_id'=>Auth::id()])
   </div>
   </div>
   @include('modals.common.add-address')
</div>
@endsection