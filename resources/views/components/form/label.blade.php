@props(['value'])

<label {{ $attributes->merge(['class' => 'block leading-none block mb-2 font-normal text-black text-lg']) }}>
  {{ $value ?? $slot }}
</label>
