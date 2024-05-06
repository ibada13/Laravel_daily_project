{{-- @props(['bc','buttoncontent','buttontheme']) --}}
<div>
<form action="{{$buttondir}}" method="post" class="flex p-2 min-h-32 h-auto whitespace-pre-wrap  ">
    {{-- @dd($class) --}}

    <textarea  name="content"  spellcheck="false"  type="" class="{{$class}}">{{$content}}</textarea>
    @error('content')
        <p class="  text-red-500 "> {{$message}} </p>
    @enderror
    <div class="flex-grow flex justify-center items-center ">

    <x-button :content="$buttoncontent" :theme="$buttontheme" :class="$buttonclass" :method="$buttonmethod"  />
</form>
</div>