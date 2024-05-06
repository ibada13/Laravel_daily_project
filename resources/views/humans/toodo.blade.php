@extends('angels.Israfil')


@section('subcontent')
<div class=" p-2">
<x-textarea buttontheme="." buttoncontent="ADD" buttonclass="w-3/4 h-16 "/>

</div>
<div class="min-h-screen h-auto flex justify-center items-center">
    <div class=" w-screen flex flex-col  items-center">

            <x-Toodocard :elms="$t" :bp="$bp"  />
    </div>

   
</div>

@endsection