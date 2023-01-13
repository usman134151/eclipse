@props(['variant' => 'primary', 'as' => 'button'])

@php
  $variantClass = [
      'primary' => 'bg-gradient-to-r from-[#213969] to-[#204387] hover:bg-gradient-to-l hover:from-[#023DB0] hover:to-[#023DB0] text-white',
      'secondary' => 'bg-white text-red-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-red-500',
  ][$variant];
@endphp

<{{ $as }}
  {{ $attributes->merge(['class' => "px-4 py-2 text-sm font-medium border border-transparent rounded-md focus:outline-none transition duration-150 ease-in-out {$variantClass}", 'type' => 'button']) }}
>
  {{ $slot }}
</{{ $as }}>
