@extends('layouts.central')

@section('content')

<div class="flex h-full justify-center mt-32 leading-loose text-center text-xl">
    <div>
        <h1 class="text-5xl font-medium mb-2">We're building your site.</h1>
        
        <p>Please be patient while our 🤖 robots build your website.</p>
        <p>It shouldn't take more than a minute.</p>
        
        <a href="javascript:window.location.reload()">
            <button class="uppercase text-lg font-bold tracking-wide bg-gray-200 text-purple-700 border-purple-600 border-2 border-solid mt-5 px-5
                           hover:bg-gray-100 hover:border-indigo-600 hover:text-indigo-700 focus:outline-none"
                    style="box-shadow: 1px 2px 4px rgba(127, 156, 245, 0.25); border-radius: 15px">
                Retry
            </button>
        </a>
    </div>
</div>

@endsection