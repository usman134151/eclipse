<title>{{ config('chatify.name') }}</title>

{{-- Meta tags --}}
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="id" content="{{ $id }}">
<meta name="messenger-color" content="{{ $messengerColor }}">
<meta name="messenger-theme" content="{{ $dark_mode }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="url" content="{{ url('').'/'.config('chatify.routes.prefix') }}" data-user="{{ Auth::user()->id }}">

{{-- scripts --}}
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/chatify/font.awesome.min.js"></script>
<script src="/js/chatify/autosize.js"></script>
<script src="/tenant-resources/js/app.js"></script>

<script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>

@auth
    @if(!request()->cookie('savedBrowser'))

        <script>
            //openSaveBrowserPopup();
        </script>
    @endif
@endauth
<script src="/tenant-resources/js/alpinejs-3.11.1.js" defer></script>
@stack('scripts')

{{-- styles --}}
<link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css'/>
<link href="/css/chatify/style.css" rel="stylesheet"/>
<link href="/css/chatify/{{$dark_mode}}.mode.css" rel="stylesheet"/>
<link href="/css/app.css" rel="stylesheet"/>

{{-- Setting messenger primary color to css --}}
<style>
    :root {
        --primary-color: {{ $messengerColor }};
    }
</style>
