@extends('layouts.central')

@section('content')

<div class="flex h-full justify-center mt-32 leading-loose text-center text-xl">
    <div>
        <h1 class="text-5xl font-medium mb-2">We're building your site.</h1>
        
        <p>Please wait while our 🤖 robots build your website.</p>
        <p>It shouldn't take more than a minute.</p>
        
        <a href="javascript:window.location.reload()" class="inline-flex rounded-md shadow-sm mt-4">
            <x-button class="uppercase">Retry</x-button>
        </a>
    </div>
</div>

@endsection