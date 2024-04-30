@extends('angels.Israfil')

@php
    $t= array();
    $bp = array();
    for($i=0;$i<5;$i++){
        $t[$i]['id']=$i;
        $t[$i]['content'] = "this is to do number ".$i;
        
    }
    $bp[1]['theme'] = "add";
    $bp[1]['content'] = "ADD"; 
    $bp[2]['theme'] = "delete"; 
    $bp[2]['content'] = "DONE"; 

@endphp

@section('subcontent')
<div class=" p-2">
<x-textarea buttontheme="." buttoncontent="ADD" buttonclass="w-3/4 h-16 "/>

</div>
<div class="min-h-screen h-auto flex justify-center items-center">
    <div class="w-3/4">
        
            <x-card :elms="$t" :bp="$bp" />
    

    </div>  
</div>
@endsection