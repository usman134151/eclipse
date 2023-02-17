@props(['show'])

<div
	class="offcanvas offcanvas-end"
	:class="{ 'show': {{ $show }} == true }"
	x-show="{{ $show }}"
>
	<div class="offcanvas-header">
		<h5 class="offcanvas-title" id="offcanvasRightLabel">
			{{ $title }}
		</h5>
		<button type="button" class="btn-close" x-on:click="{{ $show }} = !{{ $show }}" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		{{ $slot }}
	</div>
</div>
<div
	class="offcanvas-backdrop"
	:class="{ 'fade show': {{ $show }} == true }"
	x-show="{{ $show }}"
	x-cloak
>
</div>