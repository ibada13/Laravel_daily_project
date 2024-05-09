@extends('angels.Israfil')
@section('subcontent')
<x-textarea buttontheme="." buttoncontent="ADD"  buttondir="{{$dir}}" buttonmethod="POST"/>
@isset($t)
@isset($bp)
<x-card :elms="$t" :bp="$bp"/>
@endisset
@endisset
<div class="mt-6 p-4">
    {{$t->links('pagination::tailwind')}}
</div>
@endsection
