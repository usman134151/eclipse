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
									<x-icon name="home"/>
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
        <div class="row mb-0 mt-3">
            <p>Here you can manage your preferred method of compensation for remittance payments.</p>
        </div>
          <div class="col-12 form-actions">
            <div class="mb-0" role="tablist" id="myTab">
                <button type="submit"  class="btn btn-outline-primary active" id="direct-deposit-tab" data-bs-toggle="tab" data-bs-target="#direct-deposit" type="button" role="tab" aria-controls="direct-deposit" aria-selected="true">Direct Deposit</button>
                <button type="button"  class="btn btn-primary mx-2"  id="mail-a-check-tab" data-bs-toggle="tab" data-bs-target="#mail-a-check" type="button" role="tab" aria-controls="mail-a-check" aria-selected="false">Mail a Check</button>
            </div>
                <a href="#" class="text-sm">Bank Account Information</a>
        </div>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="direct-deposit" role="tabpanel" aria-labelledby="direct-deposit-tab">
                <div class="row">
                    <div class="col-lg-5 mb-4">
                        <label class="form-label" for="bank-name">
                            Bank Name
                        </label>
                        <input type="text" id="bank-name" class="form-control" name="bank-name" placeholder="Enter Bank Name"/>
                    </div>
                    <div class="col-lg-5 mb-4">
                        <label class="form-label" for="bank-name">
                            Routing Number
                        </label>
                        <div class="d-flex align-items-center w-100">
                            <div class="position-relative flex-grow-1">
                                <input type="text" id="routing-number" class="form-control" name="routing-number" placeholder="______________"/>
                            </div>
                            <button type="button" class="btn px-2">
                                <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 0C6.54545 0 1.88727 3.52467 0 8.5C1.88727 13.4753 6.54545 17 12 17C17.4545 17 22.1127 13.4753 24 8.5C22.1127 3.52467 17.4545 0 12 0ZM12 14.1667C8.98909 14.1667 6.54545 11.628 6.54545 8.5C6.54545 5.372 8.98909 2.83333 12 2.83333C15.0109 2.83333 17.4545 5.372 17.4545 8.5C17.4545 11.628 15.0109 14.1667 12 14.1667ZM12 5.1C10.1891 5.1 8.72727 6.61867 8.72727 8.5C8.72727 10.3813 10.1891 11.9 12 11.9C13.8109 11.9 15.2727 10.3813 15.2727 8.5C15.2727 6.61867 13.8109 5.1 12 5.1Z" fill="black"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 mb-4">
                        <label class="form-label" for="account-number">
                            Account Number
                        </label>
                        <div class="d-flex align-items-center w-100">
                            <div class="position-relative flex-grow-1">
                                <input type="text" id="account-number" class="form-control" name="account-number" placeholder="______________"/>
                            </div>
                            <button type="button" class="btn px-2">
                                <svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 0C6.54545 0 1.88727 3.52467 0 8.5C1.88727 13.4753 6.54545 17 12 17C17.4545 17 22.1127 13.4753 24 8.5C22.1127 3.52467 17.4545 0 12 0ZM12 14.1667C8.98909 14.1667 6.54545 11.628 6.54545 8.5C6.54545 5.372 8.98909 2.83333 12 2.83333C15.0109 2.83333 17.4545 5.372 17.4545 8.5C17.4545 11.628 15.0109 14.1667 12 14.1667ZM12 5.1C10.1891 5.1 8.72727 6.61867 8.72727 8.5C8.72727 10.3813 10.1891 11.9 12 11.9C13.8109 11.9 15.2727 10.3813 15.2727 8.5C15.2727 6.61867 13.8109 5.1 12 5.1Z" fill="black"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="mail-a-check" role="tabpanel" aria-labelledby="mail-a-check-tab">
                <div class="row">
                    <h2>Select Address</h2>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Select Profile Default Address
                            </label>
                            </div>
                            <div class="mb-3 mx-4">
                                <span class="text-secondary">Mrs Smith 98 Shirley Street PIMPAMAQLD 4209 AUSTRALIA</span>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary btn-has-icon rounded mb-4" data-bs-toggle="modal" data-bs-target="#addAddressModal">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0C4.47727 0 0 4.47727 0 10C0 15.5227 4.47727 20 10 20C15.5227 20 20 15.5227 20 10C20 4.47727 15.5227 0 10 0ZM10.9091 13.6364C10.9091 13.8775 10.8133 14.1087 10.6428 14.2792C10.4723 14.4497 10.2411 14.5455 10 14.5455C9.75889 14.5455 9.52766 14.4497 9.35718 14.2792C9.18669 14.1087 9.09091 13.8775 9.09091 13.6364V10.9091H6.36364C6.12253 10.9091 5.8913 10.8133 5.72081 10.6428C5.55032 10.4723 5.45455 10.2411 5.45455 10C5.45455 9.75889 5.55032 9.52766 5.72081 9.35718C5.8913 9.18669 6.12253 9.09091 6.36364 9.09091H9.09091V6.36364C9.09091 6.12253 9.18669 5.8913 9.35718 5.72081C9.52766 5.55032 9.75889 5.45455 10 5.45455C10.2411 5.45455 10.4723 5.55032 10.6428 5.72081C10.8133 5.8913 10.9091 6.12253 10.9091 6.36364V9.09091H13.6364C13.8775 9.09091 14.1087 9.18669 14.2792 9.35718C14.4497 9.52766 14.5455 9.75889 14.5455 10C14.5455 10.2411 14.4497 10.4723 14.2792 10.6428C14.1087 10.8133 13.8775 10.9091 13.6364 10.9091H10.9091V13.6364Z" fill="white"/>
                                    </svg>
                                    <span>Add Address</span>
                                </button>
                            </div>
                    </div>
                </div>
            </div>
          </div>
       
       
        <div class="col-12 justify-content-center form-actions d-flex">
            <button type="submit"  class="btn btn-primary rounded">Save</button>
        </div>
    </div>
   </div>
   @include('modals.common.add-address')
</div>
