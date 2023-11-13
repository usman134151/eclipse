<div>
	<div class="content-header row">
		<div class="content-header-left col-md-9 col-12 mb-2">
		<div class="row breadcrumbs-top">
			<div class="col-12">
			<h1 class="content-header-title float-start mb-0">Dashboard</h1>
			<div class="breadcrumb-wrapper">
				<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="http://127.0.0.1:8000" title="Go to Dashboard" aria-label="Go to Dashboard">
						<svg aria-label="Home" width="22" height="23" viewBox="0 0 22 23">
							<use xlink:href="/css/common-icons.svg#home"></use>
						  </svg>
					</a>
				</li>
				<li class="breadcrumb-item">
					<a href="javascript:void(0)">
					Dashboard
					</a>
				</li>
				</ol>
			</div>
			</div>
		</div>
		</div>
	</div>
	@livewire('app.common.dashboard-messages', ['userType' => 3,'displayTo'=>'dashboard'])
	<div class="row mb-5">
		<ul class="d-grid grid-cols-6 gap-4 list-unstyled mb-5" id="myTab" role="tablist">
		<li class="" role="presentation">
			<a class="dashborad-block active" id="calendar-tab" data-bs-toggle="tab" data-bs-target="#calendar-tab-pane" type="button" role="tab" aria-controls="calendar-tab-pane" aria-selected="true">
			<div class="text-center block-text">Assignments Calendar</div>
			<div class="text-center block-icon">
				<svg aria-label="Assignments Calendar" class="fill" width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M51.958 6.5897L38.4462 6.58975V3.22656C38.4462 2.29422 37.691 1.53906 36.7587 1.53906C35.8264 1.53906 35.0712 2.29422 35.0712 3.22656V6.58891H21.5712V3.22656C21.5712 2.29422 20.816 1.53906 19.8837 1.53906C18.9514 1.53906 18.1962 2.29422 18.1962 3.22656V6.58891H4.70801C2.84416 6.58891 1.33301 8.10006 1.33301 9.96391V52.1514C1.33301 54.0152 2.84416 55.5264 4.70801 55.5264H51.958C53.8218 55.5264 55.333 54.0152 55.333 52.1514V9.96391C55.333 8.10085 53.8218 6.5897 51.958 6.5897ZM51.958 52.1514H4.70801V9.96391H18.1962V11.6641C18.1962 12.5964 18.9514 13.3516 19.8837 13.3516C20.816 13.3516 21.5712 12.5964 21.5712 11.6641V9.96475H35.0712V11.6649C35.0712 12.5972 35.8264 13.3524 36.7587 13.3524C37.691 13.3524 38.4462 12.5972 38.4462 11.6649V9.96475H51.958V52.1514ZM40.1455 28.5272H43.5205C44.452 28.5272 45.208 27.7712 45.208 26.8397V23.4647C45.208 22.5332 44.452 21.7772 43.5205 21.7772H40.1455C39.214 21.7772 38.458 22.5332 38.458 23.4647V26.8397C38.458 27.7712 39.214 28.5272 40.1455 28.5272ZM40.1455 42.0264H43.5205C44.452 42.0264 45.208 41.2712 45.208 40.3389V36.9639C45.208 36.0324 44.452 35.2764 43.5205 35.2764H40.1455C39.214 35.2764 38.458 36.0324 38.458 36.9639V40.3389C38.458 41.272 39.214 42.0264 40.1455 42.0264ZM30.0205 35.2764H26.6455C25.714 35.2764 24.958 36.0324 24.958 36.9639V40.3389C24.958 41.2712 25.714 42.0264 26.6455 42.0264H30.0205C30.952 42.0264 31.708 41.2712 31.708 40.3389V36.9639C31.708 36.0332 30.952 35.2764 30.0205 35.2764ZM30.0205 21.7772H26.6455C25.714 21.7772 24.958 22.5332 24.958 23.4647V26.8397C24.958 27.7712 25.714 28.5272 26.6455 28.5272H30.0205C30.952 28.5272 31.708 27.7712 31.708 26.8397V23.4647C31.708 22.5324 30.952 21.7772 30.0205 21.7772ZM16.5205 21.7772H13.1455C12.214 21.7772 11.458 22.5332 11.458 23.4647V26.8397C11.458 27.7712 12.214 28.5272 13.1455 28.5272H16.5205C17.452 28.5272 18.208 27.7712 18.208 26.8397V23.4647C18.208 22.5324 17.452 21.7772 16.5205 21.7772ZM16.5205 35.2764H13.1455C12.214 35.2764 11.458 36.0324 11.458 36.9639V40.3389C11.458 41.2712 12.214 42.0264 13.1455 42.0264H16.5205C17.452 42.0264 18.208 41.2712 18.208 40.3389V36.9639C18.208 36.0332 17.452 35.2764 16.5205 35.2764Z" stroke-width="1.77469"/>
				</svg>
			</div>
			<div>
			<!--	<div class="text-center block-number">50</div>-->
			</div>
			</a>
		</li>
		<li class="" role="presentation">
			<a class="dashborad-block" id="assignments-tab" data-bs-toggle="tab" data-bs-target="#assignments-tab-pane" type="button" role="tab" aria-controls="assignments-tab-pane" aria-selected="false">
			<div class="text-center block-text">Assignments List</div>
			<div class="text-center block-icon">
				<svg aria-label="Assignments List" class="fill" width="54" height="61" viewBox="0 0 54 61" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M12.1215 48.3232H32.7326V42.4049H12.1215V48.3232ZM12.1215 36.4866H41.566V30.5682H12.1215V36.4866ZM12.1215 24.6499H41.566V18.7316H12.1215V24.6499ZM6.23264 54.2416H47.4549V12.8132H6.23264V54.2416ZM0.34375 60.1599V6.8949H18.5993C19.2373 5.1194 20.3051 3.68913 21.8029 2.6041C23.2986 1.51908 24.9789 0.976562 26.8438 0.976562C28.7086 0.976562 30.3898 1.51908 31.8876 2.6041C33.3834 3.68913 34.4502 5.1194 35.0882 6.8949H53.3438V60.1599H0.34375ZM26.8438 10.5939C27.4817 10.5939 28.0098 10.3838 28.4279 9.96355C28.844 9.54532 29.0521 9.01563 29.0521 8.37448C29.0521 7.73333 28.844 7.20265 28.4279 6.78245C28.0098 6.36422 27.4817 6.1551 26.8438 6.1551C26.2058 6.1551 25.6787 6.36422 25.2626 6.78245C24.8445 7.20265 24.6354 7.73333 24.6354 8.37448C24.6354 9.01563 24.8445 9.54532 25.2626 9.96355C25.6787 10.3838 26.2058 10.5939 26.8438 10.5939Z"/>
				</svg>
			</div>
			<div>
				<!--<div class="text-center block-number">200</div>-->
			</div>
			</a>
		</li>
		<li class="" role="presentation">
			<a class="dashborad-block" id="available-assignments" data-bs-toggle="tab" data-bs-target="#available-assignments-pane" type="button" role="tab" aria-controls="available-assignments-pane" aria-selected="false">
			<div class="text-center block-text">Available Assignments</div>
			<div class="text-center block-icon">
				<svg aria-label="Available Assignments" class="fill icon-availability" viewBox="0 0 1440 809.999993" height="" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="3b00f15639"><path d="M 610.59375 289.5 L 829.300781 289.5 L 829.300781 520.5 L 610.59375 520.5 Z M 610.59375 289.5 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#3b00f15639)"><path fill="" d="M 647.039062 319.894531 L 634.902344 319.894531 C 628.488281 319.894531 623.242188 324.855469 622.789062 331.152344 L 622.75 332.054688 L 622.75 350.285156 L 817.164062 350.285156 L 817.164062 332.054688 C 817.164062 325.636719 812.203125 320.386719 805.933594 319.933594 L 805.011719 319.894531 L 792.855469 319.894531 L 792.875 332.054688 C 792.875 335.398438 790.148438 338.125 786.789062 338.125 C 783.449219 338.125 780.722656 335.398438 780.722656 332.054688 L 780.699219 319.894531 L 659.191406 319.894531 L 659.191406 332.054688 C 659.191406 335.398438 656.488281 338.125 653.125 338.125 C 649.765625 338.125 647.058594 335.398438 647.058594 332.054688 Z M 744.871094 407.667969 L 745.445312 408.179688 C 747.636719 410.375 747.800781 413.820312 745.9375 416.199219 L 745.445312 416.773438 L 714.332031 447.902344 C 713.265625 448.949219 711.625 449.070312 710.457031 448.25 L 710.027344 447.902344 L 703.589844 441.464844 L 692.582031 430.472656 C 690.207031 428.113281 690.207031 424.257812 692.582031 421.878906 C 694.941406 419.5 698.792969 419.5 701.171875 421.878906 L 712.179688 432.851562 L 736.855469 408.179688 C 739.03125 405.984375 742.492188 405.820312 744.871094 407.667969 Z M 811.324219 465.785156 L 786.789062 465.785156 L 785.886719 465.824219 C 779.921875 466.257812 775.125 471.015625 774.675781 476.980469 L 774.632812 477.945312 L 774.632812 502.492188 C 781.847656 497.816406 788.59375 492.34375 794.882812 486.046875 C 801.175781 479.75 806.648438 473.003906 811.324219 465.785156 Z M 817.164062 362.445312 L 622.75 362.445312 L 622.75 496.175781 C 622.75 502.574219 627.707031 507.847656 633.980469 508.296875 L 634.902344 508.339844 L 746 508.339844 L 746 508.316406 L 756.410156 508.316406 L 757.109375 508.277344 C 759.917969 507.949219 762.128906 505.734375 762.457031 502.945312 L 762.5 502.226562 L 762.5 477.945312 L 762.519531 476.734375 C 763.132812 464.265625 773.097656 454.300781 785.539062 453.664062 L 786.789062 453.625 L 811.097656 453.625 L 811.796875 453.582031 C 814.601562 453.273438 816.796875 451.058594 817.125 448.25 L 817.164062 447.554688 Z M 786.789062 289.5 C 790.148438 289.5 792.855469 292.226562 792.855469 295.570312 L 792.855469 307.730469 L 805.011719 307.730469 C 818.4375 307.730469 829.320312 318.621094 829.320312 332.054688 L 829.320312 452.640625 C 829.320312 456.71875 828.296875 460.738281 826.328125 464.328125 C 820.28125 475.363281 812.65625 485.472656 803.492188 494.640625 C 794.3125 503.828125 784.207031 511.457031 773.179688 517.503906 C 769.589844 519.472656 765.574219 520.5 761.496094 520.5 L 634.902344 520.5 C 621.476562 520.5 610.59375 509.609375 610.59375 496.175781 L 610.59375 332.054688 C 610.59375 318.621094 621.476562 307.730469 634.902344 307.730469 L 647.039062 307.730469 L 647.058594 295.570312 C 647.058594 292.226562 649.765625 289.5 653.125 289.5 C 656.488281 289.5 659.191406 292.226562 659.191406 295.570312 L 659.191406 307.730469 L 780.699219 307.730469 L 780.722656 295.570312 C 780.722656 292.226562 783.449219 289.5 786.789062 289.5 "/></g></svg>
			</div>
			<div>
				<!--<div class="text-center block-number">50</div>-->
			</div>
			</a>
		</li>
		<li class="" role="presentation">
			<a class="dashborad-block" id="map-tab" data-bs-toggle="tab" data-bs-target="#map-tab-pane" type="button" role="tab" aria-controls="map-tab-pane" aria-selected="false">
			<div class="text-center block-text">Assignments Map</div>
			<div class="text-center block-icon">
				<svg aria-label="Assignments Map" class="stroke" width="55" height="55" viewBox="0 0 60 68" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M50.0555 47.6875C54.2067 49.4729 56.7241 51.8151 56.7241 54.3835C56.7241 59.9759 44.7806 64.5085 30.0495 64.5085C15.3185 64.5085 3.375 59.9759 3.375 54.3835C3.375 51.8185 5.89241 49.4695 10.0436 47.6875" stroke-width="6.2114" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M46.7211 22.1313C46.7211 32.5702 30.0495 51.0078 30.0495 51.0078C30.0495 51.0078 13.3779 32.5702 13.3779 22.1313C13.3779 11.6958 20.8435 3.75781 30.0495 3.75781C39.2556 3.75781 46.7211 11.6958 46.7211 22.1313V22.1313Z" stroke-width="6.2114" stroke-linecap="round" stroke-linejoin="round"/>
				<path d="M30.0496 24C31.8911 24 33.384 22.489 33.384 20.625C33.384 18.761 31.8911 17.25 30.0496 17.25C28.2082 17.25 26.7153 18.761 26.7153 20.625C26.7153 22.489 28.2082 24 30.0496 24Z" stroke-width="6.2114" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</div>
			<div>
				<!--<div class="text-center block-number">15</div>-->
			</div>
			</a>
		</li>
		<li class="" role="presentation">
			<a class="dashborad-block" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications-tab-pane" type="button" role="tab" aria-controls="notifications-tab-pane" aria-selected="false">
			<div class="text-center block-text">Notifications List</div>
			<div class="text-center block-icon">
				<svg aria-label="Notifications List" class="fill" width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M27.3652 54.5313C30.3442 54.5313 32.7815 52.0389 32.7815 48.9928H21.949C21.949 52.0389 24.3863 54.5313 27.3652 54.5313ZM43.614 37.9159V24.0697C43.614 15.5682 39.1997 8.45125 31.4274 6.56817V4.6851C31.4274 2.38663 29.613 0.53125 27.3652 0.53125C25.1175 0.53125 23.3031 2.38663 23.3031 4.6851V6.56817C15.5578 8.45125 11.1165 15.5405 11.1165 24.0697V37.9159L5.70024 43.4543V46.2236H49.0302V43.4543L43.614 37.9159ZM38.1977 40.6851H16.5327V24.0697C16.5327 17.202 20.622 11.6082 27.3652 11.6082C34.1085 11.6082 38.1977 17.202 38.1977 24.0697V40.6851ZM15.3953 4.90663L11.5227 0.946635C5.02321 6.01433 0.744372 13.8236 0.365234 22.6851H5.78148C5.97332 19.1732 6.93739 15.7508 8.60191 12.6726C10.2664 9.5945 12.5885 6.93995 15.3953 4.90663V4.90663ZM48.949 22.6851H54.3652C53.959 13.8236 49.6802 6.01433 43.2078 0.946635L39.3622 4.90663C42.157 6.94996 44.4687 9.60743 46.1277 12.6839C47.7866 15.7604 48.7507 19.1778 48.949 22.6851Z"/>
				</svg>
			</div>
			<div>
			<!--	<div class="text-center block-number">50</div>-->
			</div>
			</a>
		</li>
		</ul>
		<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="calendar-tab-pane" role="tabpanel" aria-labelledby="calendar-tab" tabindex="0">
			<h3>Assignment Calendar</h3>
			<!-- Filters -->
			<div class="d-flex justify-content-start gap-4 mb-4">
			<div class="d-flex justify-content-start gap-2">
				<div class="mb-4 mb-lg-0 position-relative">
				<!-- Begin : it will be replaced with livewire module-->
				<svg aria-label="Select Date" class="icon-date sm cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
				</svg>
				<input type="" class="form-control form-control-sm w-auto js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
				<!-- End : it will be replaced with livewire module -->
				</div>
				<div class="mb-4 mb-lg-0">
				<select class="form-select form-select-sm rounded bg-secondary text-white rounded" aria-label="Advance Filter" id="show_status">
					<option>Advance Filter</option>
				</select>
				</div>
				<div class="mb-4 mb-lg-0">
				<button type="button" class="btn btn-xs btn-outline-dark rounded">Clear all</button>
				</div>
			</div>

			</div>
			<!-- /Filters -->
            @livewire('app.common.calendar', ['providerProfile' => false, 'user_id' => Auth::id(), 'hideProvider' => true], key(time()))
			{{-- <div>
			<img src="/tenant-resources/images/img-placeholder-calendar.png" class="img-fluid" alt="Dashboard Calender"/>
			</div> --}}
		</div>
		<div class="tab-pane fade" id="assignments-tab-pane" role="tabpanel" aria-labelledby="assignments-tab" tabindex="0">
			<h2 class="text-dark">Assignment List</h2>
			<!-- Filters -->
			<div class="d-flex justify-content-start gap-4 mb-5">
			<div class="d-flex justify-content-start gap-2">
				<div class="mb-4 mb-lg-0 position-relative">
				<!-- Begin : it will be replaced with livewire module-->
				<svg aria-label="Select Date" class="icon-date sm cursor-pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M18.75 1.87104L13.7456 1.87106V0.625146C13.7456 0.279753 13.4659 0 13.1206 0C12.7753 0 12.4956 0.279753 12.4956 0.625146V1.87075H7.49563V0.625146C7.49563 0.279753 7.21594 0 6.87063 0C6.52531 0 6.24563 0.279753 6.24563 0.625146V1.87075H1.25C0.559687 1.87075 0 2.43057 0 3.12104V18.7497C0 19.4402 0.559687 20 1.25 20H18.75C19.4403 20 20 19.4402 20 18.7497V3.12104C20 2.43086 19.4403 1.87104 18.75 1.87104ZM18.75 18.7497H1.25V3.12104H6.24563V3.75088C6.24563 4.09625 6.52531 4.37603 6.87063 4.37603C7.21594 4.37603 7.49563 4.09625 7.49563 3.75088V3.12136H12.4956V3.75119C12.4956 4.09658 12.7753 4.37634 13.1206 4.37634C13.4659 4.37634 13.7456 4.09658 13.7456 3.75119V3.12136H18.75V18.7497ZM14.375 9.99795H15.625C15.97 9.99795 16.25 9.71788 16.25 9.3728V8.12251C16.25 7.77743 15.97 7.49736 15.625 7.49736H14.375C14.03 7.49736 13.75 7.77743 13.75 8.12251V9.3728C13.75 9.71788 14.03 9.99795 14.375 9.99795ZM14.375 14.9988H15.625C15.97 14.9988 16.25 14.7191 16.25 14.3737V13.1234C16.25 12.7783 15.97 12.4982 15.625 12.4982H14.375C14.03 12.4982 13.75 12.7783 13.75 13.1234V14.3737C13.75 14.7194 14.03 14.9988 14.375 14.9988ZM10.625 12.4982H9.375C9.03 12.4982 8.75 12.7783 8.75 13.1234V14.3737C8.75 14.7191 9.03 14.9988 9.375 14.9988H10.625C10.97 14.9988 11.25 14.7191 11.25 14.3737V13.1234C11.25 12.7786 10.97 12.4982 10.625 12.4982ZM10.625 7.49736H9.375C9.03 7.49736 8.75 7.77743 8.75 8.12251V9.3728C8.75 9.71788 9.03 9.99795 9.375 9.99795H10.625C10.97 9.99795 11.25 9.71788 11.25 9.3728V8.12251C11.25 7.77712 10.97 7.49736 10.625 7.49736ZM5.625 7.49736H4.375C4.03 7.49736 3.75 7.77743 3.75 8.12251V9.3728C3.75 9.71788 4.03 9.99795 4.375 9.99795H5.625C5.97 9.99795 6.25 9.71788 6.25 9.3728V8.12251C6.25 7.77712 5.97 7.49736 5.625 7.49736ZM5.625 12.4982H4.375C4.03 12.4982 3.75 12.7783 3.75 13.1234V14.3737C3.75 14.7191 4.03 14.9988 4.375 14.9988H5.625C5.97 14.9988 6.25 14.7191 6.25 14.3737V13.1234C6.25 12.7786 5.97 12.4982 5.625 12.4982Z" fill="black"/>
				</svg>
				<input type="" class="form-control form-control-sm w-auto js-single-date" placeholder="MM/DD/YYYY" name="selectDate" aria-label="Select Date">
				<!-- End : it will be replaced with livewire module -->
				</div>
				<div class="mb-4 mb-lg-0">
				<select class="form-select form-select-sm rounded bg-secondary text-white rounded" aria-label="Advance Filter" id="show_status">
					<option>Advance Filter</option>
				</select>
				</div>
				<div class="mb-4 mb-lg-0">
				<button type="button" class="btn btn-xs btn-outline-dark rounded">Clear all</button>
				</div>
			</div>
			<div class="d-flex justify-content-start gap-2">
				<div class="mb-4 mb-lg-0">
				<button type="button" class="btn btn-xs btn-primary rounded">Today</button>
				</div>
				<div class="mb-4 mb-lg-0">
				<button type="button" class="btn btn-xs btn-inactive rounded">Upcoming</button>
				</div>
				<div class="mb-4 mb-lg-0">
				<button type="button" class="btn btn-xs btn-inactive rounded">Unassigned</button>
				</div>
				<div class="mb-4 mb-lg-0">
				<button type="button" class="btn btn-xs btn-inactive rounded">Previous</button>
				</div>
				<div class="mb-4 mb-lg-0">
				<button type="button" class="btn btn-xs btn-inactive rounded">Cancelled</button>
				</div>
			</div>

			<!-- Begin : show button on conditional basis -->
			<!-- <div class="d-inline-flex align-items-center ms-auto text-end gap-4">
				<button type="button" class="btn btn btn-primary rounded">Calendar Sync</button>
				</div> -->
			<!-- End : show button on conditional basis -->

			</div>
			<!-- /Filters -->
			<!-- Today's Assignment -->
			<div>
			<div class="d-lg-flex justify-content-between mb-4">
				<h2 class="mb-lg-0 text-dark">Today’s Assignment</h2>
				<div class="d-inline-flex align-items-center gap-4">
					<div class="dropdown">
						<button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Export Button">
						  <svg aria-label="Export" width="23" height="26" viewBox="0 0 23 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10 0.5V8.625C10 9.12228 10.1975 9.5992 10.5492 9.95083C10.9008 10.3025 11.3777 10.5 11.875 10.5H20V17.6963L18.3837 16.08C18.2676 15.9639 18.1298 15.8719 17.978 15.8091C17.8263 15.7463 17.6637 15.7141 17.4996 15.7141C17.3354 15.7142 17.1728 15.7466 17.0211 15.8095C16.8695 15.8723 16.7317 15.9645 16.6156 16.0806C16.4996 16.1968 16.4075 16.3346 16.3447 16.4863C16.282 16.638 16.2497 16.8006 16.2497 16.9648C16.2498 17.129 16.2822 17.2916 16.3451 17.4432C16.408 17.5949 16.5001 17.7327 16.6162 17.8488L18.0175 19.25H12.5C12.1685 19.25 11.8505 19.3817 11.6161 19.6161C11.3817 19.8505 11.25 20.1685 11.25 20.5C11.25 20.8315 11.3817 21.1495 11.6161 21.3839C11.8505 21.6183 12.1685 21.75 12.5 21.75H18.0175L16.6162 23.1513C16.3817 23.3856 16.2499 23.7036 16.2497 24.0352C16.2496 24.3668 16.3812 24.6848 16.6156 24.9194C16.85 25.1539 17.168 25.2858 17.4996 25.2859C17.8311 25.286 18.1492 25.1544 18.3837 24.92L19.9787 23.3238C19.9002 23.9256 19.6053 24.4783 19.1492 24.8787C18.6931 25.2791 18.1069 25.5 17.5 25.5H2.5C1.83696 25.5 1.20107 25.2366 0.732233 24.7678C0.263392 24.2989 0 23.663 0 23V3C0 2.33696 0.263392 1.70107 0.732233 1.23223C1.20107 0.763392 1.83696 0.5 2.5 0.5H10ZM20 17.6963L21.9187 19.6163C22.1531 19.8507 22.2847 20.1685 22.2847 20.5C22.2847 20.8315 22.1531 21.1493 21.9187 21.3838L20 23.3038V17.6963ZM12.5 0.55375C12.9736 0.654194 13.4078 0.889989 13.75 1.2325L19.2675 6.75C19.61 7.09216 19.8458 7.5264 19.9462 8H12.5V0.55375Z" fill="#023DB0"/>
							</svg>
						</button>
						<ul class="dropdown-menu">
						  <li><a class="dropdown-item" href="#">Action</a></li>
						  <li><a class="dropdown-item" href="#">Another action</a></li>
						  <li><a class="dropdown-item" href="#">Something else here</a></li>
						</ul>
					  </div>
				</div>
			</div>
			<div class="d-flex justify-content-between mb-2">
				<div class="d-inline-flex align-items-center gap-4">
				<div class="d-inline-flex align-items-center gap-4">
					<label for="show_records_numbers" class="form-label-sm mb-0">Show</label>
					<select class="form-select form-select-sm" id="show_records_numbers">
					<option>10</option>
					<option>15</option>
					<option>20</option>
					<option>25</option>
					</select>
				</div>
				</div>
				<div class="d-inline-flex align-items-center gap-4">
				<label for="search-assignment" class="form-label-sm mb-0">Search</label>
				<input type="search" class="form-control form-control-sm" id="search-assignment" name="search" placeholder="Search here" autocomplete="on"/>
				</div>
			</div>
			<!-- Hoverable rows start -->
			<div class="row" id="table-hover-row">
				<div class="col-12">
				<div class="card">
					<div class="table-responsive">
					<table id="unassigned_data" class="table table-fs-md table-hover" aria-label="Admin Staff Teams Table">
						<thead>
						<tr role="row">
							<th scope="col" class="text-center">
							<input class="form-check-input" type="checkbox" value="" aria-label="Select All Teams">
							</th>
							<th scope="col">Booking ID</th>
							<th scope="col">Accommodation</th>
							<th scope="col">Address</th>
							<th scope="col">Company</th>
							<th scope="col">Pay</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<tr role="row" class="odd">
							<td class="text-center">
							<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
							<a href="#">100995-6</a>
							<div>
								<div class="time-date">08/24/2022</div>
								<div class="time-date">9:59 AM to<br> 4:22 PM</div>
							</div>
							</td>
							<td>
							<div>Shelby Sign Language</div>
							<div>Shelby Sign Language</div>
							<div>Service: Language interpreting</div>
							</td>
							<td>
							<div class="badge bg-info mb-1 fw-normal">In-Person</div>
							<div>98 Shirley Street PIMPAMA QLD 4209</div>
							</td>
							<td>
							<div class="form-check form-switch">
								<div>Demo Company</div>
								<div>NO. of Providers: 5</div>
							</div>
							</td>
							<td>$100</td>
							<td>
							<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
							</div>
							</td>
							<td>
							<div class="d-flex actions">
								<a href="#" title="Map View" aria-label="Map View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#mapModal">
								<svg aria-label="Map View" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 10.1911C8.55 10.1911 9.021 9.99134 9.413 9.59185C9.80433 9.19304 10 8.71338 10 8.15287C10 7.59236 9.80433 7.11236 9.413 6.71287C9.021 6.31406 8.55 6.11465 8 6.11465C7.45 6.11465 6.97933 6.31406 6.588 6.71287C6.196 7.11236 6 7.59236 6 8.15287C6 8.71338 6.196 9.19304 6.588 9.59185C6.97933 9.99134 7.45 10.1911 8 10.1911ZM8 17.6815C10.0333 15.7792 11.5417 14.0508 12.525 12.4963C13.5083 10.9425 14 9.56263 14 8.35669C14 6.50531 13.4207 4.98921 12.262 3.80841C11.104 2.62828 9.68333 2.03822 8 2.03822C6.31667 2.03822 4.89567 2.62828 3.737 3.80841C2.579 4.98921 2 6.50531 2 8.35669C2 9.56263 2.49167 10.9425 3.475 12.4963C4.45833 14.0508 5.96667 15.7792 8 17.6815ZM8 20C7.86667 20 7.73333 19.9745 7.6 19.9236C7.46667 19.8726 7.35 19.8047 7.25 19.7197C4.81667 17.5287 3 15.4949 1.8 13.6183C0.6 11.7411 0 9.98726 0 8.35669C0 5.80892 0.804334 3.77919 2.413 2.26752C4.021 0.755839 5.88333 0 8 0C10.1167 0 11.979 0.755839 13.587 2.26752C15.1957 3.77919 16 5.80892 16 8.35669C16 9.98726 15.4 11.7411 14.2 13.6183C13 15.4949 11.1833 17.5287 8.75 19.7197C8.65 19.8047 8.53333 19.8726 8.4 19.9236C8.26667 19.9745 8.13333 20 8 20Z" fill="black"/>
								</svg>
								</a>
							</div>
							</td>
						</tr>
						<tr role="row" class="even">
							<td class="text-center">
							<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
							<a href="#">100995-6</a>
							<div>
								<div class="time-date">08/24/2022</div>
								<div class="time-date">9:59 AM to<br> 4:22 PM</div>
							</div>
							</td>
							<td>
							<div>Shelby Sign Language</div>
							<div>Shelby Sign Language</div>
							<div>Service: Language interpreting</div>
							</td>
							<td>
							<div class="badge bg-info mb-1 fw-normal">In-Person</div>
							<div>98 Shirley Street PIMPAMA QLD 4209</div>
							</td>
							<td>
							<div class="form-check form-switch">
								<div>Demo Company</div>
								<div>NO. of Providers: 5</div>
							</div>
							</td>
							<td>$100</td>
							<td>
							<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
							</div>
							</td>
							<td>
							<div class="d-flex actions">
								<a href="#" title="Map View" aria-label="Map View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#mapModal">
								<svg aria-label="Map View" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 10.1911C8.55 10.1911 9.021 9.99134 9.413 9.59185C9.80433 9.19304 10 8.71338 10 8.15287C10 7.59236 9.80433 7.11236 9.413 6.71287C9.021 6.31406 8.55 6.11465 8 6.11465C7.45 6.11465 6.97933 6.31406 6.588 6.71287C6.196 7.11236 6 7.59236 6 8.15287C6 8.71338 6.196 9.19304 6.588 9.59185C6.97933 9.99134 7.45 10.1911 8 10.1911ZM8 17.6815C10.0333 15.7792 11.5417 14.0508 12.525 12.4963C13.5083 10.9425 14 9.56263 14 8.35669C14 6.50531 13.4207 4.98921 12.262 3.80841C11.104 2.62828 9.68333 2.03822 8 2.03822C6.31667 2.03822 4.89567 2.62828 3.737 3.80841C2.579 4.98921 2 6.50531 2 8.35669C2 9.56263 2.49167 10.9425 3.475 12.4963C4.45833 14.0508 5.96667 15.7792 8 17.6815ZM8 20C7.86667 20 7.73333 19.9745 7.6 19.9236C7.46667 19.8726 7.35 19.8047 7.25 19.7197C4.81667 17.5287 3 15.4949 1.8 13.6183C0.6 11.7411 0 9.98726 0 8.35669C0 5.80892 0.804334 3.77919 2.413 2.26752C4.021 0.755839 5.88333 0 8 0C10.1167 0 11.979 0.755839 13.587 2.26752C15.1957 3.77919 16 5.80892 16 8.35669C16 9.98726 15.4 11.7411 14.2 13.6183C13 15.4949 11.1833 17.5287 8.75 19.7197C8.65 19.8047 8.53333 19.8726 8.4 19.9236C8.26667 19.9745 8.13333 20 8 20Z" fill="black"/>
								</svg>
								</a>
							</div>
							</td>
						</tr>
						<tr role="row" class="odd">
							<td class="text-center">
							<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
							<a href="#">100995-6</a>
							<div>
								<div class="time-date">08/24/2022</div>
								<div class="time-date">9:59 AM to<br> 4:22 PM</div>
							</div>
							</td>
							<td>
							<div>Shelby Sign Language</div>
							<div>Shelby Sign Language</div>
							<div>Service: Language interpreting</div>
							</td>
							<td>
							<div class="badge bg-info mb-1 fw-normal">In-Person</div>
							<div>98 Shirley Street PIMPAMA QLD 4209</div>
							</td>
							<td>
							<div class="form-check form-switch">
								<div>Demo Company</div>
								<div>NO. of Providers: 5</div>
							</div>
							</td>
							<td>$100</td>
							<td>
							<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
							</div>
							</td>
							<td>
							<div class="d-flex actions">
								<a href="#" title="Map View" aria-label="Map View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#mapModal">
								<svg aria-label="Map View" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 10.1911C8.55 10.1911 9.021 9.99134 9.413 9.59185C9.80433 9.19304 10 8.71338 10 8.15287C10 7.59236 9.80433 7.11236 9.413 6.71287C9.021 6.31406 8.55 6.11465 8 6.11465C7.45 6.11465 6.97933 6.31406 6.588 6.71287C6.196 7.11236 6 7.59236 6 8.15287C6 8.71338 6.196 9.19304 6.588 9.59185C6.97933 9.99134 7.45 10.1911 8 10.1911ZM8 17.6815C10.0333 15.7792 11.5417 14.0508 12.525 12.4963C13.5083 10.9425 14 9.56263 14 8.35669C14 6.50531 13.4207 4.98921 12.262 3.80841C11.104 2.62828 9.68333 2.03822 8 2.03822C6.31667 2.03822 4.89567 2.62828 3.737 3.80841C2.579 4.98921 2 6.50531 2 8.35669C2 9.56263 2.49167 10.9425 3.475 12.4963C4.45833 14.0508 5.96667 15.7792 8 17.6815ZM8 20C7.86667 20 7.73333 19.9745 7.6 19.9236C7.46667 19.8726 7.35 19.8047 7.25 19.7197C4.81667 17.5287 3 15.4949 1.8 13.6183C0.6 11.7411 0 9.98726 0 8.35669C0 5.80892 0.804334 3.77919 2.413 2.26752C4.021 0.755839 5.88333 0 8 0C10.1167 0 11.979 0.755839 13.587 2.26752C15.1957 3.77919 16 5.80892 16 8.35669C16 9.98726 15.4 11.7411 14.2 13.6183C13 15.4949 11.1833 17.5287 8.75 19.7197C8.65 19.8047 8.53333 19.8726 8.4 19.9236C8.26667 19.9745 8.13333 20 8 20Z" fill="black"/>
								</svg>
								</a>
							</div>
							</td>
						</tr>
						<tr role="row" class="even">
							<td class="text-center">
							<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
							<a href="#">100995-6</a>
							<div>
								<div class="time-date">08/24/2022</div>
								<div class="time-date">9:59 AM to<br> 4:22 PM</div>
							</div>
							</td>
							<td>
							<div>Shelby Sign Language</div>
							<div>Shelby Sign Language</div>
							<div>Service: Language interpreting</div>
							</td>
							<td>
							<div class="badge bg-info mb-1 fw-normal">In-Person</div>
							<div>98 Shirley Street PIMPAMA QLD 4209</div>
							</td>
							<td>
							<div class="form-check form-switch">
								<div>Demo Company</div>
								<div>NO. of Providers: 5</div>
							</div>
							</td>
							<td>$100</td>
							<td>
							<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
							</div>
							</td>
							<td>
							<div class="d-flex actions">
								<a href="#" title="Map View" aria-label="Map View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#mapModal">
								<svg aria-label="Map View" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 10.1911C8.55 10.1911 9.021 9.99134 9.413 9.59185C9.80433 9.19304 10 8.71338 10 8.15287C10 7.59236 9.80433 7.11236 9.413 6.71287C9.021 6.31406 8.55 6.11465 8 6.11465C7.45 6.11465 6.97933 6.31406 6.588 6.71287C6.196 7.11236 6 7.59236 6 8.15287C6 8.71338 6.196 9.19304 6.588 9.59185C6.97933 9.99134 7.45 10.1911 8 10.1911ZM8 17.6815C10.0333 15.7792 11.5417 14.0508 12.525 12.4963C13.5083 10.9425 14 9.56263 14 8.35669C14 6.50531 13.4207 4.98921 12.262 3.80841C11.104 2.62828 9.68333 2.03822 8 2.03822C6.31667 2.03822 4.89567 2.62828 3.737 3.80841C2.579 4.98921 2 6.50531 2 8.35669C2 9.56263 2.49167 10.9425 3.475 12.4963C4.45833 14.0508 5.96667 15.7792 8 17.6815ZM8 20C7.86667 20 7.73333 19.9745 7.6 19.9236C7.46667 19.8726 7.35 19.8047 7.25 19.7197C4.81667 17.5287 3 15.4949 1.8 13.6183C0.6 11.7411 0 9.98726 0 8.35669C0 5.80892 0.804334 3.77919 2.413 2.26752C4.021 0.755839 5.88333 0 8 0C10.1167 0 11.979 0.755839 13.587 2.26752C15.1957 3.77919 16 5.80892 16 8.35669C16 9.98726 15.4 11.7411 14.2 13.6183C13 15.4949 11.1833 17.5287 8.75 19.7197C8.65 19.8047 8.53333 19.8726 8.4 19.9236C8.26667 19.9745 8.13333 20 8 20Z" fill="black"/>
								</svg>
								</a>
							</div>
							</td>
						</tr>
						<tr role="row" class="odd">
							<td class="text-center">
							<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
							<a href="#">100995-6</a>
							<div>
								<div class="time-date">08/24/2022</div>
								<div class="time-date">9:59 AM to<br> 4:22 PM</div>
							</div>
							</td>
							<td>
							<div>Shelby Sign Language</div>
							<div>Shelby Sign Language</div>
							<div>Service: Language interpreting</div>
							</td>
							<td>
							<div class="badge bg-info mb-1 fw-normal">In-Person</div>
							<div>98 Shirley Street PIMPAMA QLD 4209</div>
							</td>
							<td>
							<div class="form-check form-switch">
								<div>Demo Company</div>
								<div>NO. of Providers: 5</div>
							</div>
							</td>
							<td>$100</td>
							<td>
							<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
							</div>
							</td>
							<td>
							<div class="d-flex actions">
								<a href="#" title="Map View" aria-label="Map View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#mapModal">
								<svg aria-label="Map View" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 10.1911C8.55 10.1911 9.021 9.99134 9.413 9.59185C9.80433 9.19304 10 8.71338 10 8.15287C10 7.59236 9.80433 7.11236 9.413 6.71287C9.021 6.31406 8.55 6.11465 8 6.11465C7.45 6.11465 6.97933 6.31406 6.588 6.71287C6.196 7.11236 6 7.59236 6 8.15287C6 8.71338 6.196 9.19304 6.588 9.59185C6.97933 9.99134 7.45 10.1911 8 10.1911ZM8 17.6815C10.0333 15.7792 11.5417 14.0508 12.525 12.4963C13.5083 10.9425 14 9.56263 14 8.35669C14 6.50531 13.4207 4.98921 12.262 3.80841C11.104 2.62828 9.68333 2.03822 8 2.03822C6.31667 2.03822 4.89567 2.62828 3.737 3.80841C2.579 4.98921 2 6.50531 2 8.35669C2 9.56263 2.49167 10.9425 3.475 12.4963C4.45833 14.0508 5.96667 15.7792 8 17.6815ZM8 20C7.86667 20 7.73333 19.9745 7.6 19.9236C7.46667 19.8726 7.35 19.8047 7.25 19.7197C4.81667 17.5287 3 15.4949 1.8 13.6183C0.6 11.7411 0 9.98726 0 8.35669C0 5.80892 0.804334 3.77919 2.413 2.26752C4.021 0.755839 5.88333 0 8 0C10.1167 0 11.979 0.755839 13.587 2.26752C15.1957 3.77919 16 5.80892 16 8.35669C16 9.98726 15.4 11.7411 14.2 13.6183C13 15.4949 11.1833 17.5287 8.75 19.7197C8.65 19.8047 8.53333 19.8726 8.4 19.9236C8.26667 19.9745 8.13333 20 8 20Z" fill="black"/>
								</svg>
								</a>
							</div>
							</td>
						</tr>
						<tr role="row" class="even">
							<td class="text-center">
							<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
							<a href="#">100995-6</a>
							<div>
								<div class="time-date">08/24/2022</div>
								<div class="time-date">9:59 AM to<br> 4:22 PM</div>
							</div>
							</td>
							<td>
							<div>Shelby Sign Language</div>
							<div>Shelby Sign Language</div>
							<div>Service: Language interpreting</div>
							</td>
							<td>
							<div class="badge bg-info mb-1 fw-normal">In-Person</div>
							<div>98 Shirley Street PIMPAMA QLD 4209</div>
							</td>
							<td>
							<div class="form-check form-switch">
								<div>Demo Company</div>
								<div>NO. of Providers: 5</div>
							</div>
							</td>
							<td>$100</td>
							<td>
							<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
							</div>
							</td>
							<td>
							<div class="d-flex actions">
								<a href="#" title="Map View" aria-label="Map View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#mapModal">
								<svg aria-label="Map View" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 10.1911C8.55 10.1911 9.021 9.99134 9.413 9.59185C9.80433 9.19304 10 8.71338 10 8.15287C10 7.59236 9.80433 7.11236 9.413 6.71287C9.021 6.31406 8.55 6.11465 8 6.11465C7.45 6.11465 6.97933 6.31406 6.588 6.71287C6.196 7.11236 6 7.59236 6 8.15287C6 8.71338 6.196 9.19304 6.588 9.59185C6.97933 9.99134 7.45 10.1911 8 10.1911ZM8 17.6815C10.0333 15.7792 11.5417 14.0508 12.525 12.4963C13.5083 10.9425 14 9.56263 14 8.35669C14 6.50531 13.4207 4.98921 12.262 3.80841C11.104 2.62828 9.68333 2.03822 8 2.03822C6.31667 2.03822 4.89567 2.62828 3.737 3.80841C2.579 4.98921 2 6.50531 2 8.35669C2 9.56263 2.49167 10.9425 3.475 12.4963C4.45833 14.0508 5.96667 15.7792 8 17.6815ZM8 20C7.86667 20 7.73333 19.9745 7.6 19.9236C7.46667 19.8726 7.35 19.8047 7.25 19.7197C4.81667 17.5287 3 15.4949 1.8 13.6183C0.6 11.7411 0 9.98726 0 8.35669C0 5.80892 0.804334 3.77919 2.413 2.26752C4.021 0.755839 5.88333 0 8 0C10.1167 0 11.979 0.755839 13.587 2.26752C15.1957 3.77919 16 5.80892 16 8.35669C16 9.98726 15.4 11.7411 14.2 13.6183C13 15.4949 11.1833 17.5287 8.75 19.7197C8.65 19.8047 8.53333 19.8726 8.4 19.9236C8.26667 19.9745 8.13333 20 8 20Z" fill="black"/>
								</svg>
								</a>
							</div>
							</td>
						</tr>
						<tr role="row" class="odd">
							<td class="text-center">
							<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
							<a href="#">100995-6</a>
							<div>
								<div class="time-date">08/24/2022</div>
								<div class="time-date">9:59 AM to<br> 4:22 PM</div>
							</div>
							</td>
							<td>
							<div>Shelby Sign Language</div>
							<div>Shelby Sign Language</div>
							<div>Service: Language interpreting</div>
							</td>
							<td>
							<div class="badge bg-info mb-1 fw-normal">In-Person</div>
							<div>98 Shirley Street PIMPAMA QLD 4209</div>
							</td>
							<td>
							<div class="form-check form-switch">
								<div>Demo Company</div>
								<div>NO. of Providers: 5</div>
							</div>
							</td>
							<td>$100</td>
							<td>
							<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
							</div>
							</td>
							<td>
							<div class="d-flex actions">
								<a href="#" title="Map View" aria-label="Map View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#mapModal">
								<svg aria-label="Map View" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 10.1911C8.55 10.1911 9.021 9.99134 9.413 9.59185C9.80433 9.19304 10 8.71338 10 8.15287C10 7.59236 9.80433 7.11236 9.413 6.71287C9.021 6.31406 8.55 6.11465 8 6.11465C7.45 6.11465 6.97933 6.31406 6.588 6.71287C6.196 7.11236 6 7.59236 6 8.15287C6 8.71338 6.196 9.19304 6.588 9.59185C6.97933 9.99134 7.45 10.1911 8 10.1911ZM8 17.6815C10.0333 15.7792 11.5417 14.0508 12.525 12.4963C13.5083 10.9425 14 9.56263 14 8.35669C14 6.50531 13.4207 4.98921 12.262 3.80841C11.104 2.62828 9.68333 2.03822 8 2.03822C6.31667 2.03822 4.89567 2.62828 3.737 3.80841C2.579 4.98921 2 6.50531 2 8.35669C2 9.56263 2.49167 10.9425 3.475 12.4963C4.45833 14.0508 5.96667 15.7792 8 17.6815ZM8 20C7.86667 20 7.73333 19.9745 7.6 19.9236C7.46667 19.8726 7.35 19.8047 7.25 19.7197C4.81667 17.5287 3 15.4949 1.8 13.6183C0.6 11.7411 0 9.98726 0 8.35669C0 5.80892 0.804334 3.77919 2.413 2.26752C4.021 0.755839 5.88333 0 8 0C10.1167 0 11.979 0.755839 13.587 2.26752C15.1957 3.77919 16 5.80892 16 8.35669C16 9.98726 15.4 11.7411 14.2 13.6183C13 15.4949 11.1833 17.5287 8.75 19.7197C8.65 19.8047 8.53333 19.8726 8.4 19.9236C8.26667 19.9745 8.13333 20 8 20Z" fill="black"/>
								</svg>
								</a>
							</div>
							</td>
						</tr>
						<tr role="row" class="even">
							<td class="text-center">
							<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
							<a href="#">100995-6</a>
							<div>
								<div class="time-date">08/24/2022</div>
								<div class="time-date">9:59 AM to<br> 4:22 PM</div>
							</div>
							</td>
							<td>
							<div>Shelby Sign Language</div>
							<div>Shelby Sign Language</div>
							<div>Service: Language interpreting</div>
							</td>
							<td>
							<div class="badge bg-info mb-1 fw-normal">In-Person</div>
							<div>98 Shirley Street PIMPAMA QLD 4209</div>
							</td>
							<td>
							<div class="form-check form-switch">
								<div>Demo Company</div>
								<div>NO. of Providers: 5</div>
							</div>
							</td>
							<td>$100</td>
							<td>
							<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
							</div>
							</td>
							<td>
							<div class="d-flex actions">
								<a href="#" title="Map View" aria-label="Map View" class="btn btn-sm btn-secondary rounded btn-hs-icon" data-bs-toggle="modal" data-bs-target="#mapModal">
								<svg aria-label="Map View" width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8 10.1911C8.55 10.1911 9.021 9.99134 9.413 9.59185C9.80433 9.19304 10 8.71338 10 8.15287C10 7.59236 9.80433 7.11236 9.413 6.71287C9.021 6.31406 8.55 6.11465 8 6.11465C7.45 6.11465 6.97933 6.31406 6.588 6.71287C6.196 7.11236 6 7.59236 6 8.15287C6 8.71338 6.196 9.19304 6.588 9.59185C6.97933 9.99134 7.45 10.1911 8 10.1911ZM8 17.6815C10.0333 15.7792 11.5417 14.0508 12.525 12.4963C13.5083 10.9425 14 9.56263 14 8.35669C14 6.50531 13.4207 4.98921 12.262 3.80841C11.104 2.62828 9.68333 2.03822 8 2.03822C6.31667 2.03822 4.89567 2.62828 3.737 3.80841C2.579 4.98921 2 6.50531 2 8.35669C2 9.56263 2.49167 10.9425 3.475 12.4963C4.45833 14.0508 5.96667 15.7792 8 17.6815ZM8 20C7.86667 20 7.73333 19.9745 7.6 19.9236C7.46667 19.8726 7.35 19.8047 7.25 19.7197C4.81667 17.5287 3 15.4949 1.8 13.6183C0.6 11.7411 0 9.98726 0 8.35669C0 5.80892 0.804334 3.77919 2.413 2.26752C4.021 0.755839 5.88333 0 8 0C10.1167 0 11.979 0.755839 13.587 2.26752C15.1957 3.77919 16 5.80892 16 8.35669C16 9.98726 15.4 11.7411 14.2 13.6183C13 15.4949 11.1833 17.5287 8.75 19.7197C8.65 19.8047 8.53333 19.8726 8.4 19.9236C8.26667 19.9745 8.13333 20 8 20Z" fill="black"/>
								</svg>
								</a>
							</div>
							</td>
						</tr>
						</tbody>
					</table>
					</div>
				</div>
				</div>
			</div>
			<!-- Hoverable rows end -->
			<div class="d-flex justify-content-between">
				<div>
				<p class="fw-semibold mb-lg-0 text-sm font-family-secondary">Showing 1 to 5 of 100 entries</p>
				</div>
				<nav aria-label="Page Navigation">
				<ul class="pagination">
					<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item active"><a class="page-link" href="#">4</a></li>
					<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
					</li>
				</ul>
				</nav>
			</div>
			</div>
			<!-- /Today's Assignment -->
		</div>
		<div class="tab-pane fade" id="available-assignments-pane" role="tabpanel" aria-labelledby="available-assignments" tabindex="0">
			<h3>Assignment List</h3>
			<!-- Buttons -->
			<div class="d-flex align-items-center gap-3 mb-4">
				<a href="#" class="btn btn-inactive btn-sm rounded px-4">Assignment Invitations</a>
				<a href="#" class="btn btn-primary btn-sm rounded px-4">Unassigned Assignments</a>
			</div>
			<!-- /Buttons -->
			<h3>Unassigned Assignments</h3>
			<div>
			<!-- Unassigned Assignment -->
			<div class="d-flex justify-content-between mb-2">
				<div class="d-inline-flex align-items-center gap-4">
					<div class="d-inline-flex align-items-center gap-4">
					<label for="show_record_number" class="form-label-sm mb-0">Show</label>
					<select class="form-select form-select-sm" id="show_record_number">
						<option>10</option>
						<option>15</option>
						<option>20</option>
						<option>25</option>
					</select>
					</div>
					<div>
					<div class="form-check form-switch mb-lg-0">
						<input class="form-check-input" type="checkbox" role="switch" id="ManagePermissions" aria-label="Permission Toggle">
						<label class="form-check-label" for="ManagePermissions">Manage Permissions</label>
					</div>
					</div>
				</div>
				<div class="d-inline-flex align-items-center gap-4">
					<label for="search-record" class="form-label-sm mb-0">Search</label>
					<input type="search" class="form-control form-control-sm" id="search-record" name="search" placeholder="Search here" autocomplete="on"/>
				</div>
			</div>
			<!-- Hoverable rows start -->
			<div class="row" id="table-hover-row">
				<div class="col-12">
					<div class="card">
					<div class="table-responsive">
						<table id="" class="table table-fs-md table-hover" aria-label="">
						<thead>
							<tr role="row">
							<th scope="col" class="text-center">
								<input class="form-check-input" type="checkbox" value="" aria-label="">
							</th>
							<th scope="col">Service Date</th>
							<th scope="col">Assignments Details</th>
							<th scope="col">Industry</th>
							<th scope="col">Accommodation</th>
							<th scope="col">Location</th>
							<th>No. of provider</th>
							<th>Status</th>
							<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr role="row" class="odd">
							<td class="text-center">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
								<div>08/24/2022</div>
								<div>9:59 AM to <br>4:22 PM</div>
							</td>
							<td>
								<div>100995-6</div>
								<div>In-Person</div>
								<div>Assignment</div>
							</td>
							<td>
								Information Technology
							</td>
							<td>
								<div>Shelby Sign Language</div>
								<div>Specialization: Closed-Captioning</div>
								<div>Service: Language interpreting</div>
							</td>
							<td>
								98 Shirley Street PIMPAMA QLD 4209
							</td>
							<td class="text-center">
								5
							</td>
							<td>
								<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
								</div>
							</td>
							<td>
								<div class="d-flex actions">
								<a href="#" title="Accept" aria-label="Accept" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Accept" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.57178 9.34781C4.59446 9.08389 4.70428 8.85022 4.86594 8.63743C5.43482 7.88744 6.70976 7.54359 7.60197 8.09699C8.12729 8.42284 8.54855 8.84229 8.89924 9.33845C9.19052 9.7507 9.45371 10.1835 9.73708 10.6188C9.93474 10.3372 10.1342 10.0477 10.3387 9.76187C12.0961 7.30704 14.0253 5.00235 16.263 2.97094C17.6359 1.7248 19.2111 0.799105 20.9059 0.0671207C21.1986 -0.0596174 21.4431 -0.0102903 21.6944 0.244266C21.5792 0.351921 21.4647 0.458497 21.3513 0.566152C19.8711 1.96855 18.423 3.40336 17.1084 4.96346C16.3559 5.85603 15.6585 6.79504 14.9409 7.71677C13.4957 9.57248 12.4141 11.6604 11.1859 13.6547C10.7117 14.4249 10.2422 15.1979 9.76732 15.9674C9.57865 16.2734 9.33022 16.2691 9.14083 15.9566C8.52658 14.9419 8.04231 13.8639 7.58469 12.7715C7.20231 11.8599 6.77313 10.9702 6.22765 10.1417C5.95798 9.73198 5.64005 9.39461 5.11762 9.34997C4.94155 9.33521 4.76188 9.34781 4.57178 9.34781Z" fill="black"/>
									<path d="M17.8628 6.17614L16.4229 7.62067C16.8388 8.54168 17.0696 9.56459 17.0696 10.6415C17.0696 14.6975 13.7931 17.9851 9.7508 17.9851C5.7085 17.9851 2.43204 14.6975 2.43204 10.6415C2.43204 6.58552 5.7085 3.29789 9.7508 3.29789C10.7615 3.29789 11.7235 3.50384 12.5984 3.87505L14.0487 2.41973C12.7648 1.74247 11.3019 1.35938 9.7508 1.35938C4.64167 1.35938 0.5 5.51509 0.5 10.6415C0.5 15.7679 4.64167 19.9233 9.7508 19.9233C14.8599 19.9233 19.0016 15.7676 19.0016 10.6411C19.0016 9.02307 18.5886 7.50077 17.8628 6.17614Z" fill="black"/>
									</svg>
								</a>
								<a href="#" title="Decline" aria-label="Decline" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Decline" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20.0093 7.74768C21.2445 13.1218 17.9359 18.4915 12.62 19.739C7.30377 20.9865 1.9934 17.6423 0.758548 12.2692C-0.476303 6.89623 2.83083 1.52731 8.14708 0.278687C10.843 -0.354025 13.9555 0.0591975 16.1115 1.84162L14.5975 3.37805C14.379 3.23582 14.1542 3.1048 13.9228 2.98535C13.6911 2.8659 13.4545 2.7584 13.2125 2.66284C12.9701 2.56765 12.724 2.48441 12.4735 2.41386C12.2233 2.34331 11.9699 2.28582 11.7139 2.24103C11.4579 2.19624 11.2001 2.16451 10.9407 2.14584C10.6818 2.12681 10.4221 2.12158 10.1624 2.12904C9.90276 2.13651 9.64382 2.15741 9.38597 2.19101C9.1285 2.22498 8.87286 2.27164 8.61979 2.33174C4.42453 3.31645 1.81453 7.55208 2.78896 11.7922C3.7634 16.0323 7.95352 18.6714 12.1491 17.6859C16.3448 16.7005 18.9533 12.4667 17.98 8.22473C17.829 7.56552 17.3853 6.45239 17.0908 5.87941L18.5401 4.36351C18.8872 4.8764 19.1843 5.41728 19.4312 5.98616C19.6784 6.55505 19.8708 7.14259 20.0093 7.74768ZM12.54 9.71226L20.5 1.57584C20.4438 1.5191 20.385 1.46498 20.3233 1.41421C20.262 1.36307 20.1981 1.31529 20.132 1.27087C20.0659 1.22608 19.9975 1.18502 19.9274 1.14731C19.8572 1.10924 19.7856 1.07527 19.7118 1.04429C19.6383 1.01368 19.5638 0.986803 19.4874 0.963659C19.4113 0.940516 19.3342 0.921105 19.2563 0.9058C19.1781 0.890123 19.0995 0.878551 19.0205 0.871085C18.9412 0.863246 18.8619 0.859514 18.7822 0.859887C18.7028 0.859887 18.6235 0.864366 18.5445 0.872205C18.4652 0.880417 18.3866 0.892736 18.3087 0.908413C18.2308 0.924464 18.1537 0.944248 18.0777 0.968138C18.002 0.991655 17.9271 1.0189 17.854 1.05026C17.7805 1.08124 17.7089 1.11596 17.6388 1.15403C17.569 1.19248 17.501 1.23392 17.4353 1.27908C17.3692 1.32388 17.3056 1.37203 17.2446 1.42354C17.1833 1.47505 17.1249 1.52918 17.0687 1.58629L10.8199 7.9821L8.80932 5.94958C8.75312 5.89284 8.69399 5.83872 8.63265 5.78758C8.57094 5.73681 8.50703 5.68866 8.44092 5.64424C8.37444 5.59944 8.30612 5.55801 8.23597 5.52031C8.16582 5.48223 8.09383 5.44789 8.02037 5.41691C7.94654 5.3863 7.87161 5.35905 7.79558 5.33591C7.71918 5.31239 7.64205 5.29298 7.56382 5.2773C7.48595 5.26162 7.40698 5.24968 7.32801 5.24184C7.24868 5.234 7.16897 5.2299 7.08927 5.2299C7.00993 5.2299 6.93023 5.234 6.85089 5.24184C6.77193 5.24968 6.69296 5.26162 6.61509 5.2773C6.53686 5.29298 6.45972 5.31239 6.38333 5.33591C6.3073 5.35905 6.23237 5.3863 6.15854 5.41691C6.08508 5.44789 6.01309 5.48223 5.94294 5.52031C5.87278 5.55801 5.80447 5.59944 5.73799 5.64424C5.67187 5.68866 5.60796 5.73681 5.54626 5.78758C5.48492 5.83872 5.42578 5.89284 5.36959 5.94958L9.10132 9.72234L5.36959 13.5556C5.42578 13.6123 5.48455 13.6664 5.54589 13.7172C5.6076 13.7683 5.67151 13.8161 5.73762 13.8609C5.80373 13.9053 5.87168 13.9468 5.94184 13.9845C6.01236 14.0222 6.08398 14.0565 6.15744 14.0871C6.23127 14.1177 6.30583 14.1446 6.38222 14.1681C6.45825 14.1913 6.53539 14.2107 6.61325 14.226C6.69149 14.2417 6.77009 14.2532 6.84906 14.2607C6.92839 14.2685 7.00773 14.2723 7.08707 14.2719C7.16677 14.2719 7.24611 14.2678 7.32507 14.2596C7.40441 14.2514 7.48301 14.2394 7.56088 14.2234C7.63875 14.2073 7.71588 14.1875 7.79191 14.164C7.86794 14.1405 7.9425 14.1129 8.01596 14.0819C8.08942 14.0509 8.16104 14.0162 8.23083 13.9778C8.30098 13.9397 8.36893 13.8982 8.43468 13.8531C8.50079 13.8083 8.56433 13.7598 8.6253 13.7086C8.68664 13.6571 8.74504 13.603 8.80124 13.5459L10.8313 11.4708L12.8771 13.5391C12.9333 13.5959 12.9925 13.65 13.0538 13.7008C13.1155 13.7519 13.179 13.7997 13.2455 13.8445C13.3116 13.8889 13.38 13.9303 13.4501 13.968C13.5203 14.0061 13.5923 14.0405 13.6657 14.0711C13.7392 14.1017 13.8141 14.1289 13.8901 14.1521C13.9665 14.1752 14.0437 14.1946 14.1215 14.2103C14.1998 14.226 14.2784 14.2376 14.3577 14.245C14.4367 14.2529 14.5164 14.2566 14.5957 14.2566C14.6754 14.2562 14.7547 14.2521 14.8341 14.2443C14.9131 14.2361 14.9917 14.2241 15.0695 14.2081C15.1478 14.1924 15.2249 14.1726 15.3009 14.1487C15.3769 14.1252 15.4515 14.0979 15.525 14.067C15.5984 14.036 15.6704 14.0013 15.7402 13.9632C15.8104 13.9247 15.8783 13.8833 15.9444 13.8385C16.0102 13.7934 16.0741 13.7452 16.1354 13.6941C16.1968 13.6425 16.2552 13.5884 16.3113 13.5313L12.54 9.71226Z" fill="black"/>
									</svg>
								</a>
								</div>
							</td>
							</tr>
							<tr role="row" class="even">
							<td class="text-center">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
								<div>08/24/2022</div>
								<div>9:59 AM to <br>4:22 PM</div>
							</td>
							<td>
								<div>100995-6</div>
								<div>In-Person</div>
								<div>Assignment</div>
							</td>
							<td>
								Information Technology
							</td>
							<td>
								<div>Shelby Sign Language</div>
								<div>Specialization: Closed-Captioning</div>
								<div>Service: Language interpreting</div>
							</td>
							<td>
								98 Shirley Street PIMPAMA QLD 4209
							</td>
							<td class="text-center">
								5
							</td>
							<td>
								<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
								</div>
							</td>
							<td>
								<div class="d-flex actions">
								<a href="#" title="Accept" aria-label="Accept" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Accept" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.57178 9.34781C4.59446 9.08389 4.70428 8.85022 4.86594 8.63743C5.43482 7.88744 6.70976 7.54359 7.60197 8.09699C8.12729 8.42284 8.54855 8.84229 8.89924 9.33845C9.19052 9.7507 9.45371 10.1835 9.73708 10.6188C9.93474 10.3372 10.1342 10.0477 10.3387 9.76187C12.0961 7.30704 14.0253 5.00235 16.263 2.97094C17.6359 1.7248 19.2111 0.799105 20.9059 0.0671207C21.1986 -0.0596174 21.4431 -0.0102903 21.6944 0.244266C21.5792 0.351921 21.4647 0.458497 21.3513 0.566152C19.8711 1.96855 18.423 3.40336 17.1084 4.96346C16.3559 5.85603 15.6585 6.79504 14.9409 7.71677C13.4957 9.57248 12.4141 11.6604 11.1859 13.6547C10.7117 14.4249 10.2422 15.1979 9.76732 15.9674C9.57865 16.2734 9.33022 16.2691 9.14083 15.9566C8.52658 14.9419 8.04231 13.8639 7.58469 12.7715C7.20231 11.8599 6.77313 10.9702 6.22765 10.1417C5.95798 9.73198 5.64005 9.39461 5.11762 9.34997C4.94155 9.33521 4.76188 9.34781 4.57178 9.34781Z" fill="black"/>
									<path d="M17.8628 6.17614L16.4229 7.62067C16.8388 8.54168 17.0696 9.56459 17.0696 10.6415C17.0696 14.6975 13.7931 17.9851 9.7508 17.9851C5.7085 17.9851 2.43204 14.6975 2.43204 10.6415C2.43204 6.58552 5.7085 3.29789 9.7508 3.29789C10.7615 3.29789 11.7235 3.50384 12.5984 3.87505L14.0487 2.41973C12.7648 1.74247 11.3019 1.35938 9.7508 1.35938C4.64167 1.35938 0.5 5.51509 0.5 10.6415C0.5 15.7679 4.64167 19.9233 9.7508 19.9233C14.8599 19.9233 19.0016 15.7676 19.0016 10.6411C19.0016 9.02307 18.5886 7.50077 17.8628 6.17614Z" fill="black"/>
									</svg>
								</a>
								<a href="#" title="Decline" aria-label="Decline" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Decline" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20.0093 7.74768C21.2445 13.1218 17.9359 18.4915 12.62 19.739C7.30377 20.9865 1.9934 17.6423 0.758548 12.2692C-0.476303 6.89623 2.83083 1.52731 8.14708 0.278687C10.843 -0.354025 13.9555 0.0591975 16.1115 1.84162L14.5975 3.37805C14.379 3.23582 14.1542 3.1048 13.9228 2.98535C13.6911 2.8659 13.4545 2.7584 13.2125 2.66284C12.9701 2.56765 12.724 2.48441 12.4735 2.41386C12.2233 2.34331 11.9699 2.28582 11.7139 2.24103C11.4579 2.19624 11.2001 2.16451 10.9407 2.14584C10.6818 2.12681 10.4221 2.12158 10.1624 2.12904C9.90276 2.13651 9.64382 2.15741 9.38597 2.19101C9.1285 2.22498 8.87286 2.27164 8.61979 2.33174C4.42453 3.31645 1.81453 7.55208 2.78896 11.7922C3.7634 16.0323 7.95352 18.6714 12.1491 17.6859C16.3448 16.7005 18.9533 12.4667 17.98 8.22473C17.829 7.56552 17.3853 6.45239 17.0908 5.87941L18.5401 4.36351C18.8872 4.8764 19.1843 5.41728 19.4312 5.98616C19.6784 6.55505 19.8708 7.14259 20.0093 7.74768ZM12.54 9.71226L20.5 1.57584C20.4438 1.5191 20.385 1.46498 20.3233 1.41421C20.262 1.36307 20.1981 1.31529 20.132 1.27087C20.0659 1.22608 19.9975 1.18502 19.9274 1.14731C19.8572 1.10924 19.7856 1.07527 19.7118 1.04429C19.6383 1.01368 19.5638 0.986803 19.4874 0.963659C19.4113 0.940516 19.3342 0.921105 19.2563 0.9058C19.1781 0.890123 19.0995 0.878551 19.0205 0.871085C18.9412 0.863246 18.8619 0.859514 18.7822 0.859887C18.7028 0.859887 18.6235 0.864366 18.5445 0.872205C18.4652 0.880417 18.3866 0.892736 18.3087 0.908413C18.2308 0.924464 18.1537 0.944248 18.0777 0.968138C18.002 0.991655 17.9271 1.0189 17.854 1.05026C17.7805 1.08124 17.7089 1.11596 17.6388 1.15403C17.569 1.19248 17.501 1.23392 17.4353 1.27908C17.3692 1.32388 17.3056 1.37203 17.2446 1.42354C17.1833 1.47505 17.1249 1.52918 17.0687 1.58629L10.8199 7.9821L8.80932 5.94958C8.75312 5.89284 8.69399 5.83872 8.63265 5.78758C8.57094 5.73681 8.50703 5.68866 8.44092 5.64424C8.37444 5.59944 8.30612 5.55801 8.23597 5.52031C8.16582 5.48223 8.09383 5.44789 8.02037 5.41691C7.94654 5.3863 7.87161 5.35905 7.79558 5.33591C7.71918 5.31239 7.64205 5.29298 7.56382 5.2773C7.48595 5.26162 7.40698 5.24968 7.32801 5.24184C7.24868 5.234 7.16897 5.2299 7.08927 5.2299C7.00993 5.2299 6.93023 5.234 6.85089 5.24184C6.77193 5.24968 6.69296 5.26162 6.61509 5.2773C6.53686 5.29298 6.45972 5.31239 6.38333 5.33591C6.3073 5.35905 6.23237 5.3863 6.15854 5.41691C6.08508 5.44789 6.01309 5.48223 5.94294 5.52031C5.87278 5.55801 5.80447 5.59944 5.73799 5.64424C5.67187 5.68866 5.60796 5.73681 5.54626 5.78758C5.48492 5.83872 5.42578 5.89284 5.36959 5.94958L9.10132 9.72234L5.36959 13.5556C5.42578 13.6123 5.48455 13.6664 5.54589 13.7172C5.6076 13.7683 5.67151 13.8161 5.73762 13.8609C5.80373 13.9053 5.87168 13.9468 5.94184 13.9845C6.01236 14.0222 6.08398 14.0565 6.15744 14.0871C6.23127 14.1177 6.30583 14.1446 6.38222 14.1681C6.45825 14.1913 6.53539 14.2107 6.61325 14.226C6.69149 14.2417 6.77009 14.2532 6.84906 14.2607C6.92839 14.2685 7.00773 14.2723 7.08707 14.2719C7.16677 14.2719 7.24611 14.2678 7.32507 14.2596C7.40441 14.2514 7.48301 14.2394 7.56088 14.2234C7.63875 14.2073 7.71588 14.1875 7.79191 14.164C7.86794 14.1405 7.9425 14.1129 8.01596 14.0819C8.08942 14.0509 8.16104 14.0162 8.23083 13.9778C8.30098 13.9397 8.36893 13.8982 8.43468 13.8531C8.50079 13.8083 8.56433 13.7598 8.6253 13.7086C8.68664 13.6571 8.74504 13.603 8.80124 13.5459L10.8313 11.4708L12.8771 13.5391C12.9333 13.5959 12.9925 13.65 13.0538 13.7008C13.1155 13.7519 13.179 13.7997 13.2455 13.8445C13.3116 13.8889 13.38 13.9303 13.4501 13.968C13.5203 14.0061 13.5923 14.0405 13.6657 14.0711C13.7392 14.1017 13.8141 14.1289 13.8901 14.1521C13.9665 14.1752 14.0437 14.1946 14.1215 14.2103C14.1998 14.226 14.2784 14.2376 14.3577 14.245C14.4367 14.2529 14.5164 14.2566 14.5957 14.2566C14.6754 14.2562 14.7547 14.2521 14.8341 14.2443C14.9131 14.2361 14.9917 14.2241 15.0695 14.2081C15.1478 14.1924 15.2249 14.1726 15.3009 14.1487C15.3769 14.1252 15.4515 14.0979 15.525 14.067C15.5984 14.036 15.6704 14.0013 15.7402 13.9632C15.8104 13.9247 15.8783 13.8833 15.9444 13.8385C16.0102 13.7934 16.0741 13.7452 16.1354 13.6941C16.1968 13.6425 16.2552 13.5884 16.3113 13.5313L12.54 9.71226Z" fill="black"/>
									</svg>
								</a>
								</div>
							</td>
							</tr>
							<tr role="row" class="odd">
							<td class="text-center">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
								<div>08/24/2022</div>
								<div>9:59 AM to <br>4:22 PM</div>
							</td>
							<td>
								<div>100995-6</div>
								<div>In-Person</div>
								<div>Assignment</div>
							</td>
							<td>
								Information Technology
							</td>
							<td>
								<div>Shelby Sign Language</div>
								<div>Specialization: Closed-Captioning</div>
								<div>Service: Language interpreting</div>
							</td>
							<td>
								98 Shirley Street PIMPAMA QLD 4209
							</td>
							<td class="text-center">
								5
							</td>
							<td>
								<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
								</div>
							</td>
							<td>
								<div class="d-flex actions">
								<a href="#" title="Accept" aria-label="Accept" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Accept" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.57178 9.34781C4.59446 9.08389 4.70428 8.85022 4.86594 8.63743C5.43482 7.88744 6.70976 7.54359 7.60197 8.09699C8.12729 8.42284 8.54855 8.84229 8.89924 9.33845C9.19052 9.7507 9.45371 10.1835 9.73708 10.6188C9.93474 10.3372 10.1342 10.0477 10.3387 9.76187C12.0961 7.30704 14.0253 5.00235 16.263 2.97094C17.6359 1.7248 19.2111 0.799105 20.9059 0.0671207C21.1986 -0.0596174 21.4431 -0.0102903 21.6944 0.244266C21.5792 0.351921 21.4647 0.458497 21.3513 0.566152C19.8711 1.96855 18.423 3.40336 17.1084 4.96346C16.3559 5.85603 15.6585 6.79504 14.9409 7.71677C13.4957 9.57248 12.4141 11.6604 11.1859 13.6547C10.7117 14.4249 10.2422 15.1979 9.76732 15.9674C9.57865 16.2734 9.33022 16.2691 9.14083 15.9566C8.52658 14.9419 8.04231 13.8639 7.58469 12.7715C7.20231 11.8599 6.77313 10.9702 6.22765 10.1417C5.95798 9.73198 5.64005 9.39461 5.11762 9.34997C4.94155 9.33521 4.76188 9.34781 4.57178 9.34781Z" fill="black"/>
									<path d="M17.8628 6.17614L16.4229 7.62067C16.8388 8.54168 17.0696 9.56459 17.0696 10.6415C17.0696 14.6975 13.7931 17.9851 9.7508 17.9851C5.7085 17.9851 2.43204 14.6975 2.43204 10.6415C2.43204 6.58552 5.7085 3.29789 9.7508 3.29789C10.7615 3.29789 11.7235 3.50384 12.5984 3.87505L14.0487 2.41973C12.7648 1.74247 11.3019 1.35938 9.7508 1.35938C4.64167 1.35938 0.5 5.51509 0.5 10.6415C0.5 15.7679 4.64167 19.9233 9.7508 19.9233C14.8599 19.9233 19.0016 15.7676 19.0016 10.6411C19.0016 9.02307 18.5886 7.50077 17.8628 6.17614Z" fill="black"/>
									</svg>
								</a>
								<a href="#" title="Decline" aria-label="Decline" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Decline" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20.0093 7.74768C21.2445 13.1218 17.9359 18.4915 12.62 19.739C7.30377 20.9865 1.9934 17.6423 0.758548 12.2692C-0.476303 6.89623 2.83083 1.52731 8.14708 0.278687C10.843 -0.354025 13.9555 0.0591975 16.1115 1.84162L14.5975 3.37805C14.379 3.23582 14.1542 3.1048 13.9228 2.98535C13.6911 2.8659 13.4545 2.7584 13.2125 2.66284C12.9701 2.56765 12.724 2.48441 12.4735 2.41386C12.2233 2.34331 11.9699 2.28582 11.7139 2.24103C11.4579 2.19624 11.2001 2.16451 10.9407 2.14584C10.6818 2.12681 10.4221 2.12158 10.1624 2.12904C9.90276 2.13651 9.64382 2.15741 9.38597 2.19101C9.1285 2.22498 8.87286 2.27164 8.61979 2.33174C4.42453 3.31645 1.81453 7.55208 2.78896 11.7922C3.7634 16.0323 7.95352 18.6714 12.1491 17.6859C16.3448 16.7005 18.9533 12.4667 17.98 8.22473C17.829 7.56552 17.3853 6.45239 17.0908 5.87941L18.5401 4.36351C18.8872 4.8764 19.1843 5.41728 19.4312 5.98616C19.6784 6.55505 19.8708 7.14259 20.0093 7.74768ZM12.54 9.71226L20.5 1.57584C20.4438 1.5191 20.385 1.46498 20.3233 1.41421C20.262 1.36307 20.1981 1.31529 20.132 1.27087C20.0659 1.22608 19.9975 1.18502 19.9274 1.14731C19.8572 1.10924 19.7856 1.07527 19.7118 1.04429C19.6383 1.01368 19.5638 0.986803 19.4874 0.963659C19.4113 0.940516 19.3342 0.921105 19.2563 0.9058C19.1781 0.890123 19.0995 0.878551 19.0205 0.871085C18.9412 0.863246 18.8619 0.859514 18.7822 0.859887C18.7028 0.859887 18.6235 0.864366 18.5445 0.872205C18.4652 0.880417 18.3866 0.892736 18.3087 0.908413C18.2308 0.924464 18.1537 0.944248 18.0777 0.968138C18.002 0.991655 17.9271 1.0189 17.854 1.05026C17.7805 1.08124 17.7089 1.11596 17.6388 1.15403C17.569 1.19248 17.501 1.23392 17.4353 1.27908C17.3692 1.32388 17.3056 1.37203 17.2446 1.42354C17.1833 1.47505 17.1249 1.52918 17.0687 1.58629L10.8199 7.9821L8.80932 5.94958C8.75312 5.89284 8.69399 5.83872 8.63265 5.78758C8.57094 5.73681 8.50703 5.68866 8.44092 5.64424C8.37444 5.59944 8.30612 5.55801 8.23597 5.52031C8.16582 5.48223 8.09383 5.44789 8.02037 5.41691C7.94654 5.3863 7.87161 5.35905 7.79558 5.33591C7.71918 5.31239 7.64205 5.29298 7.56382 5.2773C7.48595 5.26162 7.40698 5.24968 7.32801 5.24184C7.24868 5.234 7.16897 5.2299 7.08927 5.2299C7.00993 5.2299 6.93023 5.234 6.85089 5.24184C6.77193 5.24968 6.69296 5.26162 6.61509 5.2773C6.53686 5.29298 6.45972 5.31239 6.38333 5.33591C6.3073 5.35905 6.23237 5.3863 6.15854 5.41691C6.08508 5.44789 6.01309 5.48223 5.94294 5.52031C5.87278 5.55801 5.80447 5.59944 5.73799 5.64424C5.67187 5.68866 5.60796 5.73681 5.54626 5.78758C5.48492 5.83872 5.42578 5.89284 5.36959 5.94958L9.10132 9.72234L5.36959 13.5556C5.42578 13.6123 5.48455 13.6664 5.54589 13.7172C5.6076 13.7683 5.67151 13.8161 5.73762 13.8609C5.80373 13.9053 5.87168 13.9468 5.94184 13.9845C6.01236 14.0222 6.08398 14.0565 6.15744 14.0871C6.23127 14.1177 6.30583 14.1446 6.38222 14.1681C6.45825 14.1913 6.53539 14.2107 6.61325 14.226C6.69149 14.2417 6.77009 14.2532 6.84906 14.2607C6.92839 14.2685 7.00773 14.2723 7.08707 14.2719C7.16677 14.2719 7.24611 14.2678 7.32507 14.2596C7.40441 14.2514 7.48301 14.2394 7.56088 14.2234C7.63875 14.2073 7.71588 14.1875 7.79191 14.164C7.86794 14.1405 7.9425 14.1129 8.01596 14.0819C8.08942 14.0509 8.16104 14.0162 8.23083 13.9778C8.30098 13.9397 8.36893 13.8982 8.43468 13.8531C8.50079 13.8083 8.56433 13.7598 8.6253 13.7086C8.68664 13.6571 8.74504 13.603 8.80124 13.5459L10.8313 11.4708L12.8771 13.5391C12.9333 13.5959 12.9925 13.65 13.0538 13.7008C13.1155 13.7519 13.179 13.7997 13.2455 13.8445C13.3116 13.8889 13.38 13.9303 13.4501 13.968C13.5203 14.0061 13.5923 14.0405 13.6657 14.0711C13.7392 14.1017 13.8141 14.1289 13.8901 14.1521C13.9665 14.1752 14.0437 14.1946 14.1215 14.2103C14.1998 14.226 14.2784 14.2376 14.3577 14.245C14.4367 14.2529 14.5164 14.2566 14.5957 14.2566C14.6754 14.2562 14.7547 14.2521 14.8341 14.2443C14.9131 14.2361 14.9917 14.2241 15.0695 14.2081C15.1478 14.1924 15.2249 14.1726 15.3009 14.1487C15.3769 14.1252 15.4515 14.0979 15.525 14.067C15.5984 14.036 15.6704 14.0013 15.7402 13.9632C15.8104 13.9247 15.8783 13.8833 15.9444 13.8385C16.0102 13.7934 16.0741 13.7452 16.1354 13.6941C16.1968 13.6425 16.2552 13.5884 16.3113 13.5313L12.54 9.71226Z" fill="black"/>
									</svg>
								</a>
								</div>
							</td>
							</tr>
							<tr role="row" class="even">
							<td class="text-center">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
								<div>08/24/2022</div>
								<div>9:59 AM to <br>4:22 PM</div>
							</td>
							<td>
								<div>100995-6</div>
								<div>In-Person</div>
								<div>Assignment</div>
							</td>
							<td>
								Information Technology
							</td>
							<td>
								<div>Shelby Sign Language</div>
								<div>Specialization: Closed-Captioning</div>
								<div>Service: Language interpreting</div>
							</td>
							<td>
								98 Shirley Street PIMPAMA QLD 4209
							</td>
							<td class="text-center">
								5
							</td>
							<td>
								<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
								</div>
							</td>
							<td>
								<div class="d-flex actions">
								<a href="#" title="Accept" aria-label="Accept" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Accept" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.57178 9.34781C4.59446 9.08389 4.70428 8.85022 4.86594 8.63743C5.43482 7.88744 6.70976 7.54359 7.60197 8.09699C8.12729 8.42284 8.54855 8.84229 8.89924 9.33845C9.19052 9.7507 9.45371 10.1835 9.73708 10.6188C9.93474 10.3372 10.1342 10.0477 10.3387 9.76187C12.0961 7.30704 14.0253 5.00235 16.263 2.97094C17.6359 1.7248 19.2111 0.799105 20.9059 0.0671207C21.1986 -0.0596174 21.4431 -0.0102903 21.6944 0.244266C21.5792 0.351921 21.4647 0.458497 21.3513 0.566152C19.8711 1.96855 18.423 3.40336 17.1084 4.96346C16.3559 5.85603 15.6585 6.79504 14.9409 7.71677C13.4957 9.57248 12.4141 11.6604 11.1859 13.6547C10.7117 14.4249 10.2422 15.1979 9.76732 15.9674C9.57865 16.2734 9.33022 16.2691 9.14083 15.9566C8.52658 14.9419 8.04231 13.8639 7.58469 12.7715C7.20231 11.8599 6.77313 10.9702 6.22765 10.1417C5.95798 9.73198 5.64005 9.39461 5.11762 9.34997C4.94155 9.33521 4.76188 9.34781 4.57178 9.34781Z" fill="black"/>
									<path d="M17.8628 6.17614L16.4229 7.62067C16.8388 8.54168 17.0696 9.56459 17.0696 10.6415C17.0696 14.6975 13.7931 17.9851 9.7508 17.9851C5.7085 17.9851 2.43204 14.6975 2.43204 10.6415C2.43204 6.58552 5.7085 3.29789 9.7508 3.29789C10.7615 3.29789 11.7235 3.50384 12.5984 3.87505L14.0487 2.41973C12.7648 1.74247 11.3019 1.35938 9.7508 1.35938C4.64167 1.35938 0.5 5.51509 0.5 10.6415C0.5 15.7679 4.64167 19.9233 9.7508 19.9233C14.8599 19.9233 19.0016 15.7676 19.0016 10.6411C19.0016 9.02307 18.5886 7.50077 17.8628 6.17614Z" fill="black"/>
									</svg>
								</a>
								<a href="#" title="Decline" aria-label="Decline" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Decline" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20.0093 7.74768C21.2445 13.1218 17.9359 18.4915 12.62 19.739C7.30377 20.9865 1.9934 17.6423 0.758548 12.2692C-0.476303 6.89623 2.83083 1.52731 8.14708 0.278687C10.843 -0.354025 13.9555 0.0591975 16.1115 1.84162L14.5975 3.37805C14.379 3.23582 14.1542 3.1048 13.9228 2.98535C13.6911 2.8659 13.4545 2.7584 13.2125 2.66284C12.9701 2.56765 12.724 2.48441 12.4735 2.41386C12.2233 2.34331 11.9699 2.28582 11.7139 2.24103C11.4579 2.19624 11.2001 2.16451 10.9407 2.14584C10.6818 2.12681 10.4221 2.12158 10.1624 2.12904C9.90276 2.13651 9.64382 2.15741 9.38597 2.19101C9.1285 2.22498 8.87286 2.27164 8.61979 2.33174C4.42453 3.31645 1.81453 7.55208 2.78896 11.7922C3.7634 16.0323 7.95352 18.6714 12.1491 17.6859C16.3448 16.7005 18.9533 12.4667 17.98 8.22473C17.829 7.56552 17.3853 6.45239 17.0908 5.87941L18.5401 4.36351C18.8872 4.8764 19.1843 5.41728 19.4312 5.98616C19.6784 6.55505 19.8708 7.14259 20.0093 7.74768ZM12.54 9.71226L20.5 1.57584C20.4438 1.5191 20.385 1.46498 20.3233 1.41421C20.262 1.36307 20.1981 1.31529 20.132 1.27087C20.0659 1.22608 19.9975 1.18502 19.9274 1.14731C19.8572 1.10924 19.7856 1.07527 19.7118 1.04429C19.6383 1.01368 19.5638 0.986803 19.4874 0.963659C19.4113 0.940516 19.3342 0.921105 19.2563 0.9058C19.1781 0.890123 19.0995 0.878551 19.0205 0.871085C18.9412 0.863246 18.8619 0.859514 18.7822 0.859887C18.7028 0.859887 18.6235 0.864366 18.5445 0.872205C18.4652 0.880417 18.3866 0.892736 18.3087 0.908413C18.2308 0.924464 18.1537 0.944248 18.0777 0.968138C18.002 0.991655 17.9271 1.0189 17.854 1.05026C17.7805 1.08124 17.7089 1.11596 17.6388 1.15403C17.569 1.19248 17.501 1.23392 17.4353 1.27908C17.3692 1.32388 17.3056 1.37203 17.2446 1.42354C17.1833 1.47505 17.1249 1.52918 17.0687 1.58629L10.8199 7.9821L8.80932 5.94958C8.75312 5.89284 8.69399 5.83872 8.63265 5.78758C8.57094 5.73681 8.50703 5.68866 8.44092 5.64424C8.37444 5.59944 8.30612 5.55801 8.23597 5.52031C8.16582 5.48223 8.09383 5.44789 8.02037 5.41691C7.94654 5.3863 7.87161 5.35905 7.79558 5.33591C7.71918 5.31239 7.64205 5.29298 7.56382 5.2773C7.48595 5.26162 7.40698 5.24968 7.32801 5.24184C7.24868 5.234 7.16897 5.2299 7.08927 5.2299C7.00993 5.2299 6.93023 5.234 6.85089 5.24184C6.77193 5.24968 6.69296 5.26162 6.61509 5.2773C6.53686 5.29298 6.45972 5.31239 6.38333 5.33591C6.3073 5.35905 6.23237 5.3863 6.15854 5.41691C6.08508 5.44789 6.01309 5.48223 5.94294 5.52031C5.87278 5.55801 5.80447 5.59944 5.73799 5.64424C5.67187 5.68866 5.60796 5.73681 5.54626 5.78758C5.48492 5.83872 5.42578 5.89284 5.36959 5.94958L9.10132 9.72234L5.36959 13.5556C5.42578 13.6123 5.48455 13.6664 5.54589 13.7172C5.6076 13.7683 5.67151 13.8161 5.73762 13.8609C5.80373 13.9053 5.87168 13.9468 5.94184 13.9845C6.01236 14.0222 6.08398 14.0565 6.15744 14.0871C6.23127 14.1177 6.30583 14.1446 6.38222 14.1681C6.45825 14.1913 6.53539 14.2107 6.61325 14.226C6.69149 14.2417 6.77009 14.2532 6.84906 14.2607C6.92839 14.2685 7.00773 14.2723 7.08707 14.2719C7.16677 14.2719 7.24611 14.2678 7.32507 14.2596C7.40441 14.2514 7.48301 14.2394 7.56088 14.2234C7.63875 14.2073 7.71588 14.1875 7.79191 14.164C7.86794 14.1405 7.9425 14.1129 8.01596 14.0819C8.08942 14.0509 8.16104 14.0162 8.23083 13.9778C8.30098 13.9397 8.36893 13.8982 8.43468 13.8531C8.50079 13.8083 8.56433 13.7598 8.6253 13.7086C8.68664 13.6571 8.74504 13.603 8.80124 13.5459L10.8313 11.4708L12.8771 13.5391C12.9333 13.5959 12.9925 13.65 13.0538 13.7008C13.1155 13.7519 13.179 13.7997 13.2455 13.8445C13.3116 13.8889 13.38 13.9303 13.4501 13.968C13.5203 14.0061 13.5923 14.0405 13.6657 14.0711C13.7392 14.1017 13.8141 14.1289 13.8901 14.1521C13.9665 14.1752 14.0437 14.1946 14.1215 14.2103C14.1998 14.226 14.2784 14.2376 14.3577 14.245C14.4367 14.2529 14.5164 14.2566 14.5957 14.2566C14.6754 14.2562 14.7547 14.2521 14.8341 14.2443C14.9131 14.2361 14.9917 14.2241 15.0695 14.2081C15.1478 14.1924 15.2249 14.1726 15.3009 14.1487C15.3769 14.1252 15.4515 14.0979 15.525 14.067C15.5984 14.036 15.6704 14.0013 15.7402 13.9632C15.8104 13.9247 15.8783 13.8833 15.9444 13.8385C16.0102 13.7934 16.0741 13.7452 16.1354 13.6941C16.1968 13.6425 16.2552 13.5884 16.3113 13.5313L12.54 9.71226Z" fill="black"/>
									</svg>
								</a>
								</div>
							</td>
							</tr>
							<tr role="row" class="odd">
							<td class="text-center">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
								<div>08/24/2022</div>
								<div>9:59 AM to <br>4:22 PM</div>
							</td>
							<td>
								<div>100995-6</div>
								<div>In-Person</div>
								<div>Assignment</div>
							</td>
							<td>
								Information Technology
							</td>
							<td>
								<div>Shelby Sign Language</div>
								<div>Specialization: Closed-Captioning</div>
								<div>Service: Language interpreting</div>
							</td>
							<td>
								98 Shirley Street PIMPAMA QLD 4209
							</td>
							<td class="text-center">
								5
							</td>
							<td>
								<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
								</div>
							</td>
							<td>
								<div class="d-flex actions">
								<a href="#" title="Accept" aria-label="Accept" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Accept" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.57178 9.34781C4.59446 9.08389 4.70428 8.85022 4.86594 8.63743C5.43482 7.88744 6.70976 7.54359 7.60197 8.09699C8.12729 8.42284 8.54855 8.84229 8.89924 9.33845C9.19052 9.7507 9.45371 10.1835 9.73708 10.6188C9.93474 10.3372 10.1342 10.0477 10.3387 9.76187C12.0961 7.30704 14.0253 5.00235 16.263 2.97094C17.6359 1.7248 19.2111 0.799105 20.9059 0.0671207C21.1986 -0.0596174 21.4431 -0.0102903 21.6944 0.244266C21.5792 0.351921 21.4647 0.458497 21.3513 0.566152C19.8711 1.96855 18.423 3.40336 17.1084 4.96346C16.3559 5.85603 15.6585 6.79504 14.9409 7.71677C13.4957 9.57248 12.4141 11.6604 11.1859 13.6547C10.7117 14.4249 10.2422 15.1979 9.76732 15.9674C9.57865 16.2734 9.33022 16.2691 9.14083 15.9566C8.52658 14.9419 8.04231 13.8639 7.58469 12.7715C7.20231 11.8599 6.77313 10.9702 6.22765 10.1417C5.95798 9.73198 5.64005 9.39461 5.11762 9.34997C4.94155 9.33521 4.76188 9.34781 4.57178 9.34781Z" fill="black"/>
									<path d="M17.8628 6.17614L16.4229 7.62067C16.8388 8.54168 17.0696 9.56459 17.0696 10.6415C17.0696 14.6975 13.7931 17.9851 9.7508 17.9851C5.7085 17.9851 2.43204 14.6975 2.43204 10.6415C2.43204 6.58552 5.7085 3.29789 9.7508 3.29789C10.7615 3.29789 11.7235 3.50384 12.5984 3.87505L14.0487 2.41973C12.7648 1.74247 11.3019 1.35938 9.7508 1.35938C4.64167 1.35938 0.5 5.51509 0.5 10.6415C0.5 15.7679 4.64167 19.9233 9.7508 19.9233C14.8599 19.9233 19.0016 15.7676 19.0016 10.6411C19.0016 9.02307 18.5886 7.50077 17.8628 6.17614Z" fill="black"/>
									</svg>
								</a>
								<a href="#" title="Decline" aria-label="Decline" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Decline" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20.0093 7.74768C21.2445 13.1218 17.9359 18.4915 12.62 19.739C7.30377 20.9865 1.9934 17.6423 0.758548 12.2692C-0.476303 6.89623 2.83083 1.52731 8.14708 0.278687C10.843 -0.354025 13.9555 0.0591975 16.1115 1.84162L14.5975 3.37805C14.379 3.23582 14.1542 3.1048 13.9228 2.98535C13.6911 2.8659 13.4545 2.7584 13.2125 2.66284C12.9701 2.56765 12.724 2.48441 12.4735 2.41386C12.2233 2.34331 11.9699 2.28582 11.7139 2.24103C11.4579 2.19624 11.2001 2.16451 10.9407 2.14584C10.6818 2.12681 10.4221 2.12158 10.1624 2.12904C9.90276 2.13651 9.64382 2.15741 9.38597 2.19101C9.1285 2.22498 8.87286 2.27164 8.61979 2.33174C4.42453 3.31645 1.81453 7.55208 2.78896 11.7922C3.7634 16.0323 7.95352 18.6714 12.1491 17.6859C16.3448 16.7005 18.9533 12.4667 17.98 8.22473C17.829 7.56552 17.3853 6.45239 17.0908 5.87941L18.5401 4.36351C18.8872 4.8764 19.1843 5.41728 19.4312 5.98616C19.6784 6.55505 19.8708 7.14259 20.0093 7.74768ZM12.54 9.71226L20.5 1.57584C20.4438 1.5191 20.385 1.46498 20.3233 1.41421C20.262 1.36307 20.1981 1.31529 20.132 1.27087C20.0659 1.22608 19.9975 1.18502 19.9274 1.14731C19.8572 1.10924 19.7856 1.07527 19.7118 1.04429C19.6383 1.01368 19.5638 0.986803 19.4874 0.963659C19.4113 0.940516 19.3342 0.921105 19.2563 0.9058C19.1781 0.890123 19.0995 0.878551 19.0205 0.871085C18.9412 0.863246 18.8619 0.859514 18.7822 0.859887C18.7028 0.859887 18.6235 0.864366 18.5445 0.872205C18.4652 0.880417 18.3866 0.892736 18.3087 0.908413C18.2308 0.924464 18.1537 0.944248 18.0777 0.968138C18.002 0.991655 17.9271 1.0189 17.854 1.05026C17.7805 1.08124 17.7089 1.11596 17.6388 1.15403C17.569 1.19248 17.501 1.23392 17.4353 1.27908C17.3692 1.32388 17.3056 1.37203 17.2446 1.42354C17.1833 1.47505 17.1249 1.52918 17.0687 1.58629L10.8199 7.9821L8.80932 5.94958C8.75312 5.89284 8.69399 5.83872 8.63265 5.78758C8.57094 5.73681 8.50703 5.68866 8.44092 5.64424C8.37444 5.59944 8.30612 5.55801 8.23597 5.52031C8.16582 5.48223 8.09383 5.44789 8.02037 5.41691C7.94654 5.3863 7.87161 5.35905 7.79558 5.33591C7.71918 5.31239 7.64205 5.29298 7.56382 5.2773C7.48595 5.26162 7.40698 5.24968 7.32801 5.24184C7.24868 5.234 7.16897 5.2299 7.08927 5.2299C7.00993 5.2299 6.93023 5.234 6.85089 5.24184C6.77193 5.24968 6.69296 5.26162 6.61509 5.2773C6.53686 5.29298 6.45972 5.31239 6.38333 5.33591C6.3073 5.35905 6.23237 5.3863 6.15854 5.41691C6.08508 5.44789 6.01309 5.48223 5.94294 5.52031C5.87278 5.55801 5.80447 5.59944 5.73799 5.64424C5.67187 5.68866 5.60796 5.73681 5.54626 5.78758C5.48492 5.83872 5.42578 5.89284 5.36959 5.94958L9.10132 9.72234L5.36959 13.5556C5.42578 13.6123 5.48455 13.6664 5.54589 13.7172C5.6076 13.7683 5.67151 13.8161 5.73762 13.8609C5.80373 13.9053 5.87168 13.9468 5.94184 13.9845C6.01236 14.0222 6.08398 14.0565 6.15744 14.0871C6.23127 14.1177 6.30583 14.1446 6.38222 14.1681C6.45825 14.1913 6.53539 14.2107 6.61325 14.226C6.69149 14.2417 6.77009 14.2532 6.84906 14.2607C6.92839 14.2685 7.00773 14.2723 7.08707 14.2719C7.16677 14.2719 7.24611 14.2678 7.32507 14.2596C7.40441 14.2514 7.48301 14.2394 7.56088 14.2234C7.63875 14.2073 7.71588 14.1875 7.79191 14.164C7.86794 14.1405 7.9425 14.1129 8.01596 14.0819C8.08942 14.0509 8.16104 14.0162 8.23083 13.9778C8.30098 13.9397 8.36893 13.8982 8.43468 13.8531C8.50079 13.8083 8.56433 13.7598 8.6253 13.7086C8.68664 13.6571 8.74504 13.603 8.80124 13.5459L10.8313 11.4708L12.8771 13.5391C12.9333 13.5959 12.9925 13.65 13.0538 13.7008C13.1155 13.7519 13.179 13.7997 13.2455 13.8445C13.3116 13.8889 13.38 13.9303 13.4501 13.968C13.5203 14.0061 13.5923 14.0405 13.6657 14.0711C13.7392 14.1017 13.8141 14.1289 13.8901 14.1521C13.9665 14.1752 14.0437 14.1946 14.1215 14.2103C14.1998 14.226 14.2784 14.2376 14.3577 14.245C14.4367 14.2529 14.5164 14.2566 14.5957 14.2566C14.6754 14.2562 14.7547 14.2521 14.8341 14.2443C14.9131 14.2361 14.9917 14.2241 15.0695 14.2081C15.1478 14.1924 15.2249 14.1726 15.3009 14.1487C15.3769 14.1252 15.4515 14.0979 15.525 14.067C15.5984 14.036 15.6704 14.0013 15.7402 13.9632C15.8104 13.9247 15.8783 13.8833 15.9444 13.8385C16.0102 13.7934 16.0741 13.7452 16.1354 13.6941C16.1968 13.6425 16.2552 13.5884 16.3113 13.5313L12.54 9.71226Z" fill="black"/>
									</svg>
								</a>
								</div>
							</td>
							</tr>
							<tr role="row" class="even">
							<td class="text-center">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
								<div>08/24/2022</div>
								<div>9:59 AM to <br>4:22 PM</div>
							</td>
							<td>
								<div>100995-6</div>
								<div>In-Perosn</div>
								<div>Assignment</div>
							</td>
							<td>
								Information Technology
							</td>
							<td>
								<div>Shelby Sign Language</div>
								<div>Specialization: Closed-Captioning</div>
								<div>Service: Language interpreting</div>
							</td>
							<td>
								98 Shirley Street PIMPAMA QLD 4209
							</td>
							<td class="text-center">
								5
							</td>
							<td>
								<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
								</div>
							</td>
							<td>
								<div class="d-flex actions">
								<a href="#" title="Accept" aria-label="Accept" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Accept" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.57178 9.34781C4.59446 9.08389 4.70428 8.85022 4.86594 8.63743C5.43482 7.88744 6.70976 7.54359 7.60197 8.09699C8.12729 8.42284 8.54855 8.84229 8.89924 9.33845C9.19052 9.7507 9.45371 10.1835 9.73708 10.6188C9.93474 10.3372 10.1342 10.0477 10.3387 9.76187C12.0961 7.30704 14.0253 5.00235 16.263 2.97094C17.6359 1.7248 19.2111 0.799105 20.9059 0.0671207C21.1986 -0.0596174 21.4431 -0.0102903 21.6944 0.244266C21.5792 0.351921 21.4647 0.458497 21.3513 0.566152C19.8711 1.96855 18.423 3.40336 17.1084 4.96346C16.3559 5.85603 15.6585 6.79504 14.9409 7.71677C13.4957 9.57248 12.4141 11.6604 11.1859 13.6547C10.7117 14.4249 10.2422 15.1979 9.76732 15.9674C9.57865 16.2734 9.33022 16.2691 9.14083 15.9566C8.52658 14.9419 8.04231 13.8639 7.58469 12.7715C7.20231 11.8599 6.77313 10.9702 6.22765 10.1417C5.95798 9.73198 5.64005 9.39461 5.11762 9.34997C4.94155 9.33521 4.76188 9.34781 4.57178 9.34781Z" fill="black"/>
									<path d="M17.8628 6.17614L16.4229 7.62067C16.8388 8.54168 17.0696 9.56459 17.0696 10.6415C17.0696 14.6975 13.7931 17.9851 9.7508 17.9851C5.7085 17.9851 2.43204 14.6975 2.43204 10.6415C2.43204 6.58552 5.7085 3.29789 9.7508 3.29789C10.7615 3.29789 11.7235 3.50384 12.5984 3.87505L14.0487 2.41973C12.7648 1.74247 11.3019 1.35938 9.7508 1.35938C4.64167 1.35938 0.5 5.51509 0.5 10.6415C0.5 15.7679 4.64167 19.9233 9.7508 19.9233C14.8599 19.9233 19.0016 15.7676 19.0016 10.6411C19.0016 9.02307 18.5886 7.50077 17.8628 6.17614Z" fill="black"/>
									</svg>
								</a>
								<a href="#" title="Decline" aria-label="Decline" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Decline" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20.0093 7.74768C21.2445 13.1218 17.9359 18.4915 12.62 19.739C7.30377 20.9865 1.9934 17.6423 0.758548 12.2692C-0.476303 6.89623 2.83083 1.52731 8.14708 0.278687C10.843 -0.354025 13.9555 0.0591975 16.1115 1.84162L14.5975 3.37805C14.379 3.23582 14.1542 3.1048 13.9228 2.98535C13.6911 2.8659 13.4545 2.7584 13.2125 2.66284C12.9701 2.56765 12.724 2.48441 12.4735 2.41386C12.2233 2.34331 11.9699 2.28582 11.7139 2.24103C11.4579 2.19624 11.2001 2.16451 10.9407 2.14584C10.6818 2.12681 10.4221 2.12158 10.1624 2.12904C9.90276 2.13651 9.64382 2.15741 9.38597 2.19101C9.1285 2.22498 8.87286 2.27164 8.61979 2.33174C4.42453 3.31645 1.81453 7.55208 2.78896 11.7922C3.7634 16.0323 7.95352 18.6714 12.1491 17.6859C16.3448 16.7005 18.9533 12.4667 17.98 8.22473C17.829 7.56552 17.3853 6.45239 17.0908 5.87941L18.5401 4.36351C18.8872 4.8764 19.1843 5.41728 19.4312 5.98616C19.6784 6.55505 19.8708 7.14259 20.0093 7.74768ZM12.54 9.71226L20.5 1.57584C20.4438 1.5191 20.385 1.46498 20.3233 1.41421C20.262 1.36307 20.1981 1.31529 20.132 1.27087C20.0659 1.22608 19.9975 1.18502 19.9274 1.14731C19.8572 1.10924 19.7856 1.07527 19.7118 1.04429C19.6383 1.01368 19.5638 0.986803 19.4874 0.963659C19.4113 0.940516 19.3342 0.921105 19.2563 0.9058C19.1781 0.890123 19.0995 0.878551 19.0205 0.871085C18.9412 0.863246 18.8619 0.859514 18.7822 0.859887C18.7028 0.859887 18.6235 0.864366 18.5445 0.872205C18.4652 0.880417 18.3866 0.892736 18.3087 0.908413C18.2308 0.924464 18.1537 0.944248 18.0777 0.968138C18.002 0.991655 17.9271 1.0189 17.854 1.05026C17.7805 1.08124 17.7089 1.11596 17.6388 1.15403C17.569 1.19248 17.501 1.23392 17.4353 1.27908C17.3692 1.32388 17.3056 1.37203 17.2446 1.42354C17.1833 1.47505 17.1249 1.52918 17.0687 1.58629L10.8199 7.9821L8.80932 5.94958C8.75312 5.89284 8.69399 5.83872 8.63265 5.78758C8.57094 5.73681 8.50703 5.68866 8.44092 5.64424C8.37444 5.59944 8.30612 5.55801 8.23597 5.52031C8.16582 5.48223 8.09383 5.44789 8.02037 5.41691C7.94654 5.3863 7.87161 5.35905 7.79558 5.33591C7.71918 5.31239 7.64205 5.29298 7.56382 5.2773C7.48595 5.26162 7.40698 5.24968 7.32801 5.24184C7.24868 5.234 7.16897 5.2299 7.08927 5.2299C7.00993 5.2299 6.93023 5.234 6.85089 5.24184C6.77193 5.24968 6.69296 5.26162 6.61509 5.2773C6.53686 5.29298 6.45972 5.31239 6.38333 5.33591C6.3073 5.35905 6.23237 5.3863 6.15854 5.41691C6.08508 5.44789 6.01309 5.48223 5.94294 5.52031C5.87278 5.55801 5.80447 5.59944 5.73799 5.64424C5.67187 5.68866 5.60796 5.73681 5.54626 5.78758C5.48492 5.83872 5.42578 5.89284 5.36959 5.94958L9.10132 9.72234L5.36959 13.5556C5.42578 13.6123 5.48455 13.6664 5.54589 13.7172C5.6076 13.7683 5.67151 13.8161 5.73762 13.8609C5.80373 13.9053 5.87168 13.9468 5.94184 13.9845C6.01236 14.0222 6.08398 14.0565 6.15744 14.0871C6.23127 14.1177 6.30583 14.1446 6.38222 14.1681C6.45825 14.1913 6.53539 14.2107 6.61325 14.226C6.69149 14.2417 6.77009 14.2532 6.84906 14.2607C6.92839 14.2685 7.00773 14.2723 7.08707 14.2719C7.16677 14.2719 7.24611 14.2678 7.32507 14.2596C7.40441 14.2514 7.48301 14.2394 7.56088 14.2234C7.63875 14.2073 7.71588 14.1875 7.79191 14.164C7.86794 14.1405 7.9425 14.1129 8.01596 14.0819C8.08942 14.0509 8.16104 14.0162 8.23083 13.9778C8.30098 13.9397 8.36893 13.8982 8.43468 13.8531C8.50079 13.8083 8.56433 13.7598 8.6253 13.7086C8.68664 13.6571 8.74504 13.603 8.80124 13.5459L10.8313 11.4708L12.8771 13.5391C12.9333 13.5959 12.9925 13.65 13.0538 13.7008C13.1155 13.7519 13.179 13.7997 13.2455 13.8445C13.3116 13.8889 13.38 13.9303 13.4501 13.968C13.5203 14.0061 13.5923 14.0405 13.6657 14.0711C13.7392 14.1017 13.8141 14.1289 13.8901 14.1521C13.9665 14.1752 14.0437 14.1946 14.1215 14.2103C14.1998 14.226 14.2784 14.2376 14.3577 14.245C14.4367 14.2529 14.5164 14.2566 14.5957 14.2566C14.6754 14.2562 14.7547 14.2521 14.8341 14.2443C14.9131 14.2361 14.9917 14.2241 15.0695 14.2081C15.1478 14.1924 15.2249 14.1726 15.3009 14.1487C15.3769 14.1252 15.4515 14.0979 15.525 14.067C15.5984 14.036 15.6704 14.0013 15.7402 13.9632C15.8104 13.9247 15.8783 13.8833 15.9444 13.8385C16.0102 13.7934 16.0741 13.7452 16.1354 13.6941C16.1968 13.6425 16.2552 13.5884 16.3113 13.5313L12.54 9.71226Z" fill="black"/>
									</svg>
								</a>
								</div>
							</td>
							</tr>
							<tr role="row" class="odd">
							<td class="text-center">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
								<div>08/24/2022</div>
								<div>9:59 AM to <br>4:22 PM</div>
							</td>
							<td>
								<div>100995-6</div>
								<div>In-Perosn</div>
								<div>Assignment</div>
							</td>
							<td>
								Information Technology
							</td>
							<td>
								<div>Shelby Sign Language</div>
								<div>Specialization: Closed-Captioning</div>
								<div>Service: Language interpreting</div>
							</td>
							<td>
								98 Shirley Street PIMPAMA QLD 4209
							</td>
							<td class="text-center">
								5
							</td>
							<td>
								<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
								</div>
							</td>
							<td>
								<div class="d-flex actions">
								<a href="#" title="Accept" aria-label="Accept" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Accept" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.57178 9.34781C4.59446 9.08389 4.70428 8.85022 4.86594 8.63743C5.43482 7.88744 6.70976 7.54359 7.60197 8.09699C8.12729 8.42284 8.54855 8.84229 8.89924 9.33845C9.19052 9.7507 9.45371 10.1835 9.73708 10.6188C9.93474 10.3372 10.1342 10.0477 10.3387 9.76187C12.0961 7.30704 14.0253 5.00235 16.263 2.97094C17.6359 1.7248 19.2111 0.799105 20.9059 0.0671207C21.1986 -0.0596174 21.4431 -0.0102903 21.6944 0.244266C21.5792 0.351921 21.4647 0.458497 21.3513 0.566152C19.8711 1.96855 18.423 3.40336 17.1084 4.96346C16.3559 5.85603 15.6585 6.79504 14.9409 7.71677C13.4957 9.57248 12.4141 11.6604 11.1859 13.6547C10.7117 14.4249 10.2422 15.1979 9.76732 15.9674C9.57865 16.2734 9.33022 16.2691 9.14083 15.9566C8.52658 14.9419 8.04231 13.8639 7.58469 12.7715C7.20231 11.8599 6.77313 10.9702 6.22765 10.1417C5.95798 9.73198 5.64005 9.39461 5.11762 9.34997C4.94155 9.33521 4.76188 9.34781 4.57178 9.34781Z" fill="black"/>
									<path d="M17.8628 6.17614L16.4229 7.62067C16.8388 8.54168 17.0696 9.56459 17.0696 10.6415C17.0696 14.6975 13.7931 17.9851 9.7508 17.9851C5.7085 17.9851 2.43204 14.6975 2.43204 10.6415C2.43204 6.58552 5.7085 3.29789 9.7508 3.29789C10.7615 3.29789 11.7235 3.50384 12.5984 3.87505L14.0487 2.41973C12.7648 1.74247 11.3019 1.35938 9.7508 1.35938C4.64167 1.35938 0.5 5.51509 0.5 10.6415C0.5 15.7679 4.64167 19.9233 9.7508 19.9233C14.8599 19.9233 19.0016 15.7676 19.0016 10.6411C19.0016 9.02307 18.5886 7.50077 17.8628 6.17614Z" fill="black"/>
									</svg>
								</a>
								<a href="#" title="Decline" aria-label="Decline" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Decline" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20.0093 7.74768C21.2445 13.1218 17.9359 18.4915 12.62 19.739C7.30377 20.9865 1.9934 17.6423 0.758548 12.2692C-0.476303 6.89623 2.83083 1.52731 8.14708 0.278687C10.843 -0.354025 13.9555 0.0591975 16.1115 1.84162L14.5975 3.37805C14.379 3.23582 14.1542 3.1048 13.9228 2.98535C13.6911 2.8659 13.4545 2.7584 13.2125 2.66284C12.9701 2.56765 12.724 2.48441 12.4735 2.41386C12.2233 2.34331 11.9699 2.28582 11.7139 2.24103C11.4579 2.19624 11.2001 2.16451 10.9407 2.14584C10.6818 2.12681 10.4221 2.12158 10.1624 2.12904C9.90276 2.13651 9.64382 2.15741 9.38597 2.19101C9.1285 2.22498 8.87286 2.27164 8.61979 2.33174C4.42453 3.31645 1.81453 7.55208 2.78896 11.7922C3.7634 16.0323 7.95352 18.6714 12.1491 17.6859C16.3448 16.7005 18.9533 12.4667 17.98 8.22473C17.829 7.56552 17.3853 6.45239 17.0908 5.87941L18.5401 4.36351C18.8872 4.8764 19.1843 5.41728 19.4312 5.98616C19.6784 6.55505 19.8708 7.14259 20.0093 7.74768ZM12.54 9.71226L20.5 1.57584C20.4438 1.5191 20.385 1.46498 20.3233 1.41421C20.262 1.36307 20.1981 1.31529 20.132 1.27087C20.0659 1.22608 19.9975 1.18502 19.9274 1.14731C19.8572 1.10924 19.7856 1.07527 19.7118 1.04429C19.6383 1.01368 19.5638 0.986803 19.4874 0.963659C19.4113 0.940516 19.3342 0.921105 19.2563 0.9058C19.1781 0.890123 19.0995 0.878551 19.0205 0.871085C18.9412 0.863246 18.8619 0.859514 18.7822 0.859887C18.7028 0.859887 18.6235 0.864366 18.5445 0.872205C18.4652 0.880417 18.3866 0.892736 18.3087 0.908413C18.2308 0.924464 18.1537 0.944248 18.0777 0.968138C18.002 0.991655 17.9271 1.0189 17.854 1.05026C17.7805 1.08124 17.7089 1.11596 17.6388 1.15403C17.569 1.19248 17.501 1.23392 17.4353 1.27908C17.3692 1.32388 17.3056 1.37203 17.2446 1.42354C17.1833 1.47505 17.1249 1.52918 17.0687 1.58629L10.8199 7.9821L8.80932 5.94958C8.75312 5.89284 8.69399 5.83872 8.63265 5.78758C8.57094 5.73681 8.50703 5.68866 8.44092 5.64424C8.37444 5.59944 8.30612 5.55801 8.23597 5.52031C8.16582 5.48223 8.09383 5.44789 8.02037 5.41691C7.94654 5.3863 7.87161 5.35905 7.79558 5.33591C7.71918 5.31239 7.64205 5.29298 7.56382 5.2773C7.48595 5.26162 7.40698 5.24968 7.32801 5.24184C7.24868 5.234 7.16897 5.2299 7.08927 5.2299C7.00993 5.2299 6.93023 5.234 6.85089 5.24184C6.77193 5.24968 6.69296 5.26162 6.61509 5.2773C6.53686 5.29298 6.45972 5.31239 6.38333 5.33591C6.3073 5.35905 6.23237 5.3863 6.15854 5.41691C6.08508 5.44789 6.01309 5.48223 5.94294 5.52031C5.87278 5.55801 5.80447 5.59944 5.73799 5.64424C5.67187 5.68866 5.60796 5.73681 5.54626 5.78758C5.48492 5.83872 5.42578 5.89284 5.36959 5.94958L9.10132 9.72234L5.36959 13.5556C5.42578 13.6123 5.48455 13.6664 5.54589 13.7172C5.6076 13.7683 5.67151 13.8161 5.73762 13.8609C5.80373 13.9053 5.87168 13.9468 5.94184 13.9845C6.01236 14.0222 6.08398 14.0565 6.15744 14.0871C6.23127 14.1177 6.30583 14.1446 6.38222 14.1681C6.45825 14.1913 6.53539 14.2107 6.61325 14.226C6.69149 14.2417 6.77009 14.2532 6.84906 14.2607C6.92839 14.2685 7.00773 14.2723 7.08707 14.2719C7.16677 14.2719 7.24611 14.2678 7.32507 14.2596C7.40441 14.2514 7.48301 14.2394 7.56088 14.2234C7.63875 14.2073 7.71588 14.1875 7.79191 14.164C7.86794 14.1405 7.9425 14.1129 8.01596 14.0819C8.08942 14.0509 8.16104 14.0162 8.23083 13.9778C8.30098 13.9397 8.36893 13.8982 8.43468 13.8531C8.50079 13.8083 8.56433 13.7598 8.6253 13.7086C8.68664 13.6571 8.74504 13.603 8.80124 13.5459L10.8313 11.4708L12.8771 13.5391C12.9333 13.5959 12.9925 13.65 13.0538 13.7008C13.1155 13.7519 13.179 13.7997 13.2455 13.8445C13.3116 13.8889 13.38 13.9303 13.4501 13.968C13.5203 14.0061 13.5923 14.0405 13.6657 14.0711C13.7392 14.1017 13.8141 14.1289 13.8901 14.1521C13.9665 14.1752 14.0437 14.1946 14.1215 14.2103C14.1998 14.226 14.2784 14.2376 14.3577 14.245C14.4367 14.2529 14.5164 14.2566 14.5957 14.2566C14.6754 14.2562 14.7547 14.2521 14.8341 14.2443C14.9131 14.2361 14.9917 14.2241 15.0695 14.2081C15.1478 14.1924 15.2249 14.1726 15.3009 14.1487C15.3769 14.1252 15.4515 14.0979 15.525 14.067C15.5984 14.036 15.6704 14.0013 15.7402 13.9632C15.8104 13.9247 15.8783 13.8833 15.9444 13.8385C16.0102 13.7934 16.0741 13.7452 16.1354 13.6941C16.1968 13.6425 16.2552 13.5884 16.3113 13.5313L12.54 9.71226Z" fill="black"/>
									</svg>
								</a>
								</div>
							</td>
							</tr>
							<tr role="row" class="even">
							<td class="text-center">
								<input class="form-check-input" type="checkbox" value="" aria-label="Select Team">
							</td>
							<td>
								<div>08/24/2022</div>
								<div>9:59 AM to <br>4:22 PM</div>
							</td>
							<td>
								<div>100995-6</div>
								<div>In-Person</div>
								<div>Assignment</div>
							</td>
							<td>
								Information Technology
							</td>
							<td>
								<div>Shelby Sign Language</div>
								<div>Specialization: Closed-Captioning</div>
								<div>Service: Language interpreting</div>
							</td>
							<td>
								98 Shirley Street PIMPAMA QLD 4209
							</td>
							<td class="text-center">
								5
							</td>
							<td>
								<div class="d-flex align-items-center gap-1">
								<svg aria-label="Unassigned" class="fill-warning" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512z"/></svg>
								Unassigned
								</div>
							</td>
							<td>
								<div class="d-flex actions">
								<a href="#" title="Accept" aria-label="Accept" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Accept" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.57178 9.34781C4.59446 9.08389 4.70428 8.85022 4.86594 8.63743C5.43482 7.88744 6.70976 7.54359 7.60197 8.09699C8.12729 8.42284 8.54855 8.84229 8.89924 9.33845C9.19052 9.7507 9.45371 10.1835 9.73708 10.6188C9.93474 10.3372 10.1342 10.0477 10.3387 9.76187C12.0961 7.30704 14.0253 5.00235 16.263 2.97094C17.6359 1.7248 19.2111 0.799105 20.9059 0.0671207C21.1986 -0.0596174 21.4431 -0.0102903 21.6944 0.244266C21.5792 0.351921 21.4647 0.458497 21.3513 0.566152C19.8711 1.96855 18.423 3.40336 17.1084 4.96346C16.3559 5.85603 15.6585 6.79504 14.9409 7.71677C13.4957 9.57248 12.4141 11.6604 11.1859 13.6547C10.7117 14.4249 10.2422 15.1979 9.76732 15.9674C9.57865 16.2734 9.33022 16.2691 9.14083 15.9566C8.52658 14.9419 8.04231 13.8639 7.58469 12.7715C7.20231 11.8599 6.77313 10.9702 6.22765 10.1417C5.95798 9.73198 5.64005 9.39461 5.11762 9.34997C4.94155 9.33521 4.76188 9.34781 4.57178 9.34781Z" fill="black"/>
									<path d="M17.8628 6.17614L16.4229 7.62067C16.8388 8.54168 17.0696 9.56459 17.0696 10.6415C17.0696 14.6975 13.7931 17.9851 9.7508 17.9851C5.7085 17.9851 2.43204 14.6975 2.43204 10.6415C2.43204 6.58552 5.7085 3.29789 9.7508 3.29789C10.7615 3.29789 11.7235 3.50384 12.5984 3.87505L14.0487 2.41973C12.7648 1.74247 11.3019 1.35938 9.7508 1.35938C4.64167 1.35938 0.5 5.51509 0.5 10.6415C0.5 15.7679 4.64167 19.9233 9.7508 19.9233C14.8599 19.9233 19.0016 15.7676 19.0016 10.6411C19.0016 9.02307 18.5886 7.50077 17.8628 6.17614Z" fill="black"/>
									</svg>
								</a>
								<a href="#" title="Decline" aria-label="Decline" class="btn btn-sm btn-secondary rounded btn-hs-icon">
									<svg aria-label="Decline" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M20.0093 7.74768C21.2445 13.1218 17.9359 18.4915 12.62 19.739C7.30377 20.9865 1.9934 17.6423 0.758548 12.2692C-0.476303 6.89623 2.83083 1.52731 8.14708 0.278687C10.843 -0.354025 13.9555 0.0591975 16.1115 1.84162L14.5975 3.37805C14.379 3.23582 14.1542 3.1048 13.9228 2.98535C13.6911 2.8659 13.4545 2.7584 13.2125 2.66284C12.9701 2.56765 12.724 2.48441 12.4735 2.41386C12.2233 2.34331 11.9699 2.28582 11.7139 2.24103C11.4579 2.19624 11.2001 2.16451 10.9407 2.14584C10.6818 2.12681 10.4221 2.12158 10.1624 2.12904C9.90276 2.13651 9.64382 2.15741 9.38597 2.19101C9.1285 2.22498 8.87286 2.27164 8.61979 2.33174C4.42453 3.31645 1.81453 7.55208 2.78896 11.7922C3.7634 16.0323 7.95352 18.6714 12.1491 17.6859C16.3448 16.7005 18.9533 12.4667 17.98 8.22473C17.829 7.56552 17.3853 6.45239 17.0908 5.87941L18.5401 4.36351C18.8872 4.8764 19.1843 5.41728 19.4312 5.98616C19.6784 6.55505 19.8708 7.14259 20.0093 7.74768ZM12.54 9.71226L20.5 1.57584C20.4438 1.5191 20.385 1.46498 20.3233 1.41421C20.262 1.36307 20.1981 1.31529 20.132 1.27087C20.0659 1.22608 19.9975 1.18502 19.9274 1.14731C19.8572 1.10924 19.7856 1.07527 19.7118 1.04429C19.6383 1.01368 19.5638 0.986803 19.4874 0.963659C19.4113 0.940516 19.3342 0.921105 19.2563 0.9058C19.1781 0.890123 19.0995 0.878551 19.0205 0.871085C18.9412 0.863246 18.8619 0.859514 18.7822 0.859887C18.7028 0.859887 18.6235 0.864366 18.5445 0.872205C18.4652 0.880417 18.3866 0.892736 18.3087 0.908413C18.2308 0.924464 18.1537 0.944248 18.0777 0.968138C18.002 0.991655 17.9271 1.0189 17.854 1.05026C17.7805 1.08124 17.7089 1.11596 17.6388 1.15403C17.569 1.19248 17.501 1.23392 17.4353 1.27908C17.3692 1.32388 17.3056 1.37203 17.2446 1.42354C17.1833 1.47505 17.1249 1.52918 17.0687 1.58629L10.8199 7.9821L8.80932 5.94958C8.75312 5.89284 8.69399 5.83872 8.63265 5.78758C8.57094 5.73681 8.50703 5.68866 8.44092 5.64424C8.37444 5.59944 8.30612 5.55801 8.23597 5.52031C8.16582 5.48223 8.09383 5.44789 8.02037 5.41691C7.94654 5.3863 7.87161 5.35905 7.79558 5.33591C7.71918 5.31239 7.64205 5.29298 7.56382 5.2773C7.48595 5.26162 7.40698 5.24968 7.32801 5.24184C7.24868 5.234 7.16897 5.2299 7.08927 5.2299C7.00993 5.2299 6.93023 5.234 6.85089 5.24184C6.77193 5.24968 6.69296 5.26162 6.61509 5.2773C6.53686 5.29298 6.45972 5.31239 6.38333 5.33591C6.3073 5.35905 6.23237 5.3863 6.15854 5.41691C6.08508 5.44789 6.01309 5.48223 5.94294 5.52031C5.87278 5.55801 5.80447 5.59944 5.73799 5.64424C5.67187 5.68866 5.60796 5.73681 5.54626 5.78758C5.48492 5.83872 5.42578 5.89284 5.36959 5.94958L9.10132 9.72234L5.36959 13.5556C5.42578 13.6123 5.48455 13.6664 5.54589 13.7172C5.6076 13.7683 5.67151 13.8161 5.73762 13.8609C5.80373 13.9053 5.87168 13.9468 5.94184 13.9845C6.01236 14.0222 6.08398 14.0565 6.15744 14.0871C6.23127 14.1177 6.30583 14.1446 6.38222 14.1681C6.45825 14.1913 6.53539 14.2107 6.61325 14.226C6.69149 14.2417 6.77009 14.2532 6.84906 14.2607C6.92839 14.2685 7.00773 14.2723 7.08707 14.2719C7.16677 14.2719 7.24611 14.2678 7.32507 14.2596C7.40441 14.2514 7.48301 14.2394 7.56088 14.2234C7.63875 14.2073 7.71588 14.1875 7.79191 14.164C7.86794 14.1405 7.9425 14.1129 8.01596 14.0819C8.08942 14.0509 8.16104 14.0162 8.23083 13.9778C8.30098 13.9397 8.36893 13.8982 8.43468 13.8531C8.50079 13.8083 8.56433 13.7598 8.6253 13.7086C8.68664 13.6571 8.74504 13.603 8.80124 13.5459L10.8313 11.4708L12.8771 13.5391C12.9333 13.5959 12.9925 13.65 13.0538 13.7008C13.1155 13.7519 13.179 13.7997 13.2455 13.8445C13.3116 13.8889 13.38 13.9303 13.4501 13.968C13.5203 14.0061 13.5923 14.0405 13.6657 14.0711C13.7392 14.1017 13.8141 14.1289 13.8901 14.1521C13.9665 14.1752 14.0437 14.1946 14.1215 14.2103C14.1998 14.226 14.2784 14.2376 14.3577 14.245C14.4367 14.2529 14.5164 14.2566 14.5957 14.2566C14.6754 14.2562 14.7547 14.2521 14.8341 14.2443C14.9131 14.2361 14.9917 14.2241 15.0695 14.2081C15.1478 14.1924 15.2249 14.1726 15.3009 14.1487C15.3769 14.1252 15.4515 14.0979 15.525 14.067C15.5984 14.036 15.6704 14.0013 15.7402 13.9632C15.8104 13.9247 15.8783 13.8833 15.9444 13.8385C16.0102 13.7934 16.0741 13.7452 16.1354 13.6941C16.1968 13.6425 16.2552 13.5884 16.3113 13.5313L12.54 9.71226Z" fill="black"/>
									</svg>
								</a>
								</div>
							</td>
							</tr>
						</tbody>
						</table>
					</div>
					</div>
				</div>
			</div>
			<!-- Hoverable rows end -->
			<div class="d-flex justify-content-between">
				<div>
					<p class="fw-semibold mb-lg-0 text-sm font-family-secondary">Showing 1 to 5 of 100 entries</p>
				</div>
				<nav aria-label="Page Navigation">
					<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item active"><a class="page-link" href="#">4</a></li>
					<li class="page-item">
						<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
					</ul>
				</nav>
			</div>
			<!-- /Unassigned Assignment -->
			</div>
		</div>
		<div class="tab-pane fade" id="map-tab-pane" role="tabpanel" aria-labelledby="map-tab" tabindex="0">
				@livewire('app.common.map')
		</div>
		<div class="tab-pane fade" id="notifications-tab-pane" role="tabpanel" aria-labelledby="notifications-tab" tabindex="0">
			@livewire('app.common.notifications')
		</div>
		</div>
	</div>
</div>


<!-- BEGIN: Modal Map -->
<div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title fs-5" id="mapModalLabel">Map</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe class="float-start" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d96779.59535015929!2d-74.00126600000002!3d40.710039!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1679489302803!5m2!1sen!2sus" width="100%" height="570" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</div>
<style>
	.tab-content>.active {
		display: contents !important;
	}
	
	</style>
<!-- END: Modal Map -->