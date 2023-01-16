@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => "placeholder-gray-500 leading-none text-gray-800 rounded w-full py-2 px-2 border border-gray-600 active:border-[#213969] transition ease-in-out focus:outline-none focus:border-[#023DB0] focus:ring-0 mt-1 block w-full"]) !!}>

