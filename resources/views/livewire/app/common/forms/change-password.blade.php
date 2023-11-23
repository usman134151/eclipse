<div x-data="{ currentPassword: true, password: @entangle('hidePassword'), confirmPassword: true }">
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
										<svg width="22" height="23" viewBox="0 0 22 23" fill="currentColor" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
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
												<div class="input-group input-group-merge">
													<input
														type="password"
														:type="currentPassword ? 'password' : 'text'"
														id="current_password"
														name="current_password"
														class="form-control"
														placeholder="Enter Current Password"
														wire:model.defer="current_password"
													/>
													<span class="input-group-text cursor-pointer">
														<svg aria-label="View" class="d-block" width="20" height="20" fill="none" @click="currentPassword = !currentPassword" :class="{'d-none': !currentPassword, 'd-block':currentPassword }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
															<path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
														</svg>
														<svg aria-label="View" class="d-none" width="20" height="20" fill="none" @click="currentPassword = !currentPassword" :class="{'d-block': !currentPassword, 'd-none':currentPassword }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
															<path fill="currentColor" d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"></path>
														</svg>
													</span>
												</div>
												@error('current_password')
													<span class="d-inline-block invalid-feedback mt-2">
														{{ $message }}
													</span>
												@enderror
											</div>
										</div>
									</div>
									<div class="row align-items-center">
										<div class="col-md-4">
											<div class="mb-2">
												<label class="form-label" for="password">
													New Password
												</label>
												<div class="input-group input-group-merge">
													<input
														type="password"
														:type="password ? 'password' : 'text'"
														id="password"
														name="password"
														class="form-control"
														placeholder="Enter New Password"
														wire:model="password"
													/>
													<span class="input-group-text cursor-pointer">
														<svg aria-label="View" class="d-block" width="20" height="20" fill="none" @click="password = !password" :class="{'d-none': !password, 'd-block':password }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
															<path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
														</svg>
														<svg aria-label="View" class="d-none" width="20" height="20" fill="none" @click="password = !password" :class="{'d-block': !password, 'd-none':password }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
															<path fill="currentColor" d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"></path>
														</svg>
													</span>
												</div>
											</div>
											<span class="fw-bold">Password strength:</span>
											{{ $strengthLevels[$strengthScore] ?? 'Weak' }}
											<progress value="{{ $strengthScore }}" max="4" class="w-100"></progress>
											@error('password')
												<span class="d-inline-block invalid-feedback">
													{{ $message }}
												</span>
											@enderror
										</div>
										<div class="col-md-4">
											<div class="d-flex pb-4">
												<button type="button" class="btn btn-secondary btn-outline-secondary" wire:click="generatePassword">
													Generate
												</button>
											</div>
										</div>
									</div>
									<div class="row my-4">
										<div class="col-md-4">
											<div class="mb-4">
												<label class="form-label" for="password_confirmation">
													Confirm Password
												</label>
												<div class="input-group input-group-merge">
													<input
														type="password"
														:type="confirmPassword ? 'password' : 'text'"
														id="password_confirmation"
														name="password_confirmation"
														class="form-control"
														placeholder="Confirm Your Password"
														wire:model.defer="password_confirmation"
													/>
													<span class="input-group-text cursor-pointer">
														<svg aria-label="View" class="d-block" width="20" height="20" fill="none" @click="confirmPassword = !confirmPassword" :class="{'d-none': !confirmPassword, 'd-block':confirmPassword }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
															<path fill="currentColor" d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path>
														</svg>
														<svg aria-label="View" class="d-none" width="20" height="20" fill="none" @click="confirmPassword = !confirmPassword" :class="{'d-block': !confirmPassword, 'd-none':confirmPassword }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
															<path fill="currentColor" d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"></path>
														</svg>
													</span>
												</div>
												@error('password_confirmation')
													<span class="d-inline-block invalid-feedback mt-2">
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