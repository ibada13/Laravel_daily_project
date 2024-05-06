{{-- @dd($class , $content) --}}

@if($dir != null)
    {{-- @dd($dir) --}}
<form action="{{$dir}}" method="post">
    @csrf
    @method($method)
    <button type="submit" class="{{$class}} ">{{$content}}</button>
    
</form>
@else
    @csrf
    @method($method)
    <button  type="submit" class="{{$class}}">{{$content}}</button>
    
@endif




