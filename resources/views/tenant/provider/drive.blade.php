@extends('layouts.tenant', ['title' => 'My Drive'])

@section('content')

     @livewire('app.common.provider.drive')
     @include('modals.common.view-button')    
   


@endsection