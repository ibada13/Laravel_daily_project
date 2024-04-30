@extends('god.app')
@section('content')

        <x-navbar />
        <div class="flex-grow  pt-2">
            @yield('subcontent')
        </div>

@endsection
