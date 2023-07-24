@extends('layouts.tenant', ['title' => 'My Drive'])

@section('content')
<div class="" x-data="{pendingCredentials: false}" >
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
									<svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23">
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
            <div class="row">
                <h3>My Drive</h3>
                <p>Here you can manage your professional credentials and required documents. You will receive notifications when your credentials are approaching expiration or have expired.</p>
            </div>
            @livewire('app.common.forms.provider-credentials-drive',['showForm'=>true,'provider_id'=>Auth::id()])
        </div>
    </div>


        @include('panels.common.pending-credentials')
			 @include('modals.common.view-button')

</div>

@endsection