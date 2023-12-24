<div>
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
                        <form class="form">
                            <div class="row">
                                <div class="col-md-12 mb-md-2">
                                    <h1 class="mt-2 ">Quickbook Setup</h1>
                                    <div class="row">
                                        <div class="col-md-12 m-4">
                                            {{-- <button class="btn btn-primary">Connect to Quickbooks</button>  --}}
                                            @if ($chkQbAuth > 0)
                                                <h2 class="">Your QuickBooks Integration is already done.</h2>
                                            @else
                                                <h2 class="">Connect QB's Company</h2>
                                                <a href="{{ $authUrl }}" class="btn btn-primary">Connect to Quickbooks</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
          <!-- Basic Floating Label Form section end -->
</div>
