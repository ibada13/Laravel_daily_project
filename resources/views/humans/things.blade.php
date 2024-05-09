@extends('angels.Israfil')
@section('subcontent')
    <div class="min-h-screen h-auto">
        <x-textarea buttondir="{{$gdir}}" buttontheme="add" buttoncontent="ADD" buttonclass="h-16 w-3/4" />
        <x-textarea buttondir="{{$bdir}}" buttontheme="delete" buttoncontent="ADD" buttonclass="h-16 w-3/4" />
    </div>
    <x-thing :bp="$bp" :elms="$t"/>
@endsection