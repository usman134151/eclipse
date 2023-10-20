<div> 		{{-- Updated by WAQAR MUGHAL 04-april-2023 updating navigators --}}
<h3>Navigator</h3>

 	{{-- Updated by waqar mughal, displaying dynamic navigators in dashboard--}}

	<ul wire:sortable="updateNavigateOrder" class="d-grid 2xl:grid-cols-6 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-4 list-unstyled mb-5" >	

 		
				@foreach($userNavigators as $userNavigator)   
				<li role="presentation" wire:sortable.item="{{ $userNavigator['navigator_id'] }}" wire:key="navigation-{{ $userNavigator['navigator_id'] }}">
                <a class="dashborad-navigator-block" href="{{ $userNavigator['navigator_link'] }}" type="button">
                    <div class="text-center block-text">{{ $userNavigator['navigator_label'] }}</div>
                    <div class="text-center block-icon">
                        <svg class="fill" width="72" height="64" viewBox="0 0 72 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <use xlink:href="{{ $userNavigator['navigator_icon'] }}"></use>
                        </svg>
                    </div>
                    <div>
                        {{-- <div class="text-center block-number">{{ $userNavigator['count'] }}</div> --}}
                        <div class="text-center block-number">0</div>
                    </div>
                </a>
            </li>
				@endforeach
 		

 		
 	{{-- End of update by waqar mughal --}}

	</ul>
</div>

@push('scripts')
	<script src="/js/livewiresortnavigation.js"></script>  	{{-- update by waqar mughal, use for drag nd drag navigators --}}
@endpush

