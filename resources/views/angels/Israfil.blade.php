@extends('god.app')
@section('content')
@php
    $elms =["toodo","things","achives"]
@endphp
<div>
    <x-navbar :elms="$elms" :id="$id"/>


        @yield('subcontent')
        
        @isset($t)
        {{-- @dd($t) --}}
            <div class="mt-6 p-4">
                @if(method_exists($t,'links'))
                {{$t->links('pagination::tailwind')}}
                @endif
            </div>
        
        @endisset
</div>

@endsection