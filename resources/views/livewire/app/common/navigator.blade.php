<div>
<h3>Navigator</h3>
	<ul class="d-grid 2xl:grid-cols-6 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 list-unstyled mb-5">	
		@foreach ($navigators as $navigator)    {{-- Updated by waqar mughal, displaying navigator in dashboard--}}
			  <li role="presentation">
				<a class="dashborad-navigator-block" href="{{ $navigator->navigator_link }}" type="button">
				  <div class="text-center block-text">{{ $navigator->navigator_label }}</div>
				  <div class="text-center block-icon">
					<svg class="fill" width="72" height="64" viewBox="0 0 72 64" fill="none" xmlns="http://www.w3.org/2000/svg">
					<use xlink:href="{{ $navigator->navigator_icon }}"></use>
					</svg>
				  </div>
				  <div>
					<div class="text-center block-number">50</div>
				  </div>
				</a>
			  </li>
		@endforeach 							{{-- End of update by waqar mughal --}}
	</ul>
</div>
