<div>
	<section id="multiple-column-form">
		<div class="content-header row">
			<div class="content-header-left col-md-9 col-12 mb-2">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<h1 class="content-header-title float-start mb-0">Change Password</h1>
						<div class="breadcrumb-wrapper">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="javascript:void(0)" title="Go to Dashboard" aria-label="Go to Dashboard">
										<svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
											<use xlink:href="/css/sprite.svg#home"></use>
										</svg>
									</a>
								</li>
								<li class="breadcrumb-item">
									Settings
								</li>
								<li class="breadcrumb-item">
									Change Password
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<form class="form">
							<div class="row">
								<div class="col-md-12 mb-md-2">
									<p>
										For the safety of your account and your information, do not share your account credentials with anyone. To change your account password, enter your old password followed by a new, strong password.
										Passwords must contain an upper and lowercase letter, a number and a special character.
									</p>
									<div class="row">
										<div class="col-md-4">
											<div class="mb-4">
												<label class="form-label" for="current_password">
													Current Password
												</label>
												<input
													type="password"
													id="current_password"
													name="current_password"
													class="form-control"
													placeholder="Enter Current Password"
													wire:model="current_password"
												/>
												@error('current_password')
													<span class="d-inline-block text-danger mt-2">
														{{ $message }}
													</span>
												@enderror
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="mb-4">
												<label class="form-label" for="password">
													New Password
												</label>
												<input
													type="password"
													id="password"
													name="password"
													class="form-control"
													placeholder="Enter New Password"
													wire:model="password"
												/>
												@error('password')
													<span class="d-inline-block text-danger mt-2">
														{{ $message }}
													</span>
												@enderror
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="mb-4">
												<label class="form-label" for="password_confirmation">
													Confirm Password
												</label>
												<input
													type="password"
													id="password_confirmation"
													name="password_confirmation"
													class="form-control"
													placeholder="Confirm Your Password"
													wire:model="password_confirmation"
												/>
												@error('password_confirmation')
													<span class="d-inline-block text-danger mt-2">
														{{ $message }}
													</span>
												@enderror
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="d-flex col-12 form-actions">
								<button type="submit" class="btn btn-primary rounded mx-2" wire:click.prevent="changePassword">
									Change Password
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>