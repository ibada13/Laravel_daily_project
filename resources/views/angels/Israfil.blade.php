@extends('god.app')
@section('content')
@php
    $elms =["toodo","things","achives"]
@endphp
<div>
    <x-navbar :elms="$elms" :id="$id"/>


        @yield('subcontent')
        
        @isset($t)
        @isset($t->links)
            <div class="mt-6 p-4">
                {{$t->links('pagination::tailwind')}}
            </div>
        @endisset
        @endisset
</div>

@endsection