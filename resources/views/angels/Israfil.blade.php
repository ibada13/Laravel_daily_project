@extends('god.app')
@section('content')
@php
    $elms =["toodo","things","achives"]
@endphp
<div>
    <x-navbar :elms="$elms" :id="$id"/>


        @yield('subcontent')
    
</div>

@endsection