@extends('god.app')

@section('content')
@isset($content)
{{-- @dd($content) --}}
<div class=" h-screen flex justify-center items-center w-screen bg-red-500">
    <div class="h-1/2 w-screen bg-black flex items-center justify-center ">
        <x-textarea class="w-[80vw]" buttonclass="w-[10vw]" :content="$content['content']" buttoncontent="edit" buttondir="/{{$content['id']}}/update" buttonmethod="PUT" />
    </div>
</div>
@endisset
@endsection