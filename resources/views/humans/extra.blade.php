@extends('angels.Azrael')
@section('content')

<div class="min-h-screen h-auto flex justify-center items-center ">
    <div class="w-3/4 h-auto ">
        <x-button dir='/extra' class='text-red-300 w-full ' content="new day"/>
        @isset($days)
            <x-daycard :days="$days"/>
        @endisset
        @isset($days)
        {{-- @dd($days) --}}
        
            <div class="mt-6 p-4">
                
                {{$days->links('pagination::tailwind')}}
            </div>
        
        @endisset
    </div>
</div>
@endsection