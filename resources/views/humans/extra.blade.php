@extends('angels.Azrael')
@section('content')

<div class="min-h-screen h-auto flex justify-center items-center ">
    <div class="w-3/4 h-auto">
        @isset($t)
        @foreach ($t as $item)
            <x-md.daycard :day="$item"/>
        @endforeach
        @endisset
    </div>
</div>
@endsection