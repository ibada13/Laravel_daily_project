@extends('god.app')
@section('content')
<h1 class="text-text text-4xl text-center"> 404 not found </h1>
@isset($errormsg)
    <h1 class="text-text text-2xl">{{$errormsg}}</h1>
@endisset

@endsection
