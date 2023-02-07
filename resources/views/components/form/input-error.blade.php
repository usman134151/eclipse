@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'mt-2 text-sm fw-medium text-danger']) }}>{{ $message }}</p>
@enderror

