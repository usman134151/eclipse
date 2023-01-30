@extends('layouts.tenant', ['title' => 'Setting'])

@section('content')
	{{-- BEGIN: Content --}}
	<div class="app-content content">
		<div class="content-body">
			<div class="card">
				<div class="card-body">
					<div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'team-info' }" id="tab_wrapper">
						<ul class="nav nav-tabs nav-steps" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<a href="" class="nav-link" :class="{ 'active': tab === 'team-info' }" @click.prevent="tab = 'team-info'; window.location.hash = 'team-info'" id="team-info-tab" role="tab" aria-controls="team-info" aria-selected="true"><span class="number">1</span> Team Info</a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="" class="nav-link" :class="{ 'active': tab === 'team-members' }" @click.prevent="tab = 'team-members'; window.location.hash = 'team-members'" id="team-members-tab" role="tab" aria-controls="team-members" aria-selected="false"><span class="number">2</span> Admin Staff Team</a>
							</li>
							<li class="nav-item" role="presentation">
								<a href="" class="nav-link" :class="{ 'active': tab === 'system-permissions' }" @click.prevent="tab = 'system-permissions'; window.location.hash = 'system-permissions'" id="system-permissions-tab" role="tab" aria-controls="system-permissions" aria-selected="false"><span class="number">3</span> System Permissions</a>
							</li>
						</ul>

						<div class="tab-content">
							{{-- Team Info Start --}}
							<div class="tab-pane fade" :class="{ 'active show': tab === 'team-info' }" @click.prevent="tab = 'team-info'; window.location.hash = 'team-info'" id="team-info" role="tabpanel" aria-labelledby="team-info-tab" tabindex="0" x-show="tab === 'team-info'">
								@livewire('app.admin.staff.team-info', ['showForm'=>$showForm])
							</div>
							{{-- Team Info End --}}

							{{-- Admin Staff Start --}}
							<div class="tab-pane fade" :class="{ 'active show': tab === 'team-members' }" @click.prevent="tab = 'team-members'; window.location.hash = 'team-members'" id="team-members" role="tabpanel" aria-labelledby="team-members-tab" tabindex="0" x-show="tab === 'team-members'">
								@livewire('app.admin.staff.team-members', ['showForm'=>$showForm])
							</div>
							{{-- Admin Staff End --}}

							{{-- System Permissions Start --}}
							<div class="tab-pane fade" :class="{ 'active show': tab === 'system-permissions' }" @click.prevent="tab = 'system-permissions'; window.location.hash = 'system-permissions'" id="system-permissions" role="tabpanel" aria-labelledby="system-permissions-tab" tabindex="0" x-show="tab === 'system-permissions'">
								@livewire('app.admin.staff.system-permissions', ['showForm'=>$showForm])
							</div>
							{{-- System Permissions End --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- End: Content --}}
@endsection