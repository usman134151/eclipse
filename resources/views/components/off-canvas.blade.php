@props([
	'show',
	'allowBackdrop' => true,
	'size' => 'default',
	'style'=>''
])

@php
	$offcanvasSize = ($size == 'fullscreen') ? 'offcanvas-assign-provider' : '';
	
@endphp

<div
	class="offcanvas {{ $offcanvasSize }} offcanvas-end"
	:class="{ 'show': {{ $show }} == true }"
	x-show="{{ $show }}"
	style="{{$style}}"
>
	<div class="offcanvas-header">
		<h2 class="offcanvas-title" id="">
			{{ $title }}
		</h2>
		<button type="button" class="btn-close" x-on:click="{{ $show }} = !{{ $show }}" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		{{ $slot }}
	</div>
	{{ $outsideBody ?? '' }}
</div>
@if ($allowBackdrop)
	<div class="offcanvas-backdrop" :class="{ 'fade show': {{ $show }} == true }" x-show="{{ $show }}" x-cloak></div>
@endif