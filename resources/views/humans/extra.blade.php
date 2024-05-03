@extends('angels.Azrael')
@section('content')

<div class="min-h-screen h-auto flex justify-center items-center ">
    <div class="w-3/4 h-auto">
        
        @isset($days)
            <x-daycard :days="$days"/>
        @endisset
    </div>
</div>
@endsection