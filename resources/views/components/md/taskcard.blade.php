
{{-- @dd($elms) --}}
@isset($elms)

@foreach($elms as $elm)
<div class="flex flex-col h-auto bg-secback m-3 rounded-lg shadow-lg border-l-accent border-l-2">
    <div class="h-auto p-1">
        <h2 class="text-text text-center text-lg">{{$elm['content']}} </h2>
    </div>
    <div class="flex justify-around items-center min-h-16 h-auto">
        @isset($bp)
        @foreach($bp as $b)
    
        
        <x-button :theme="$b['theme']" :content="$b['content']"  dir="/{{$elm['id']}}/{{$b['dir']}}" :method="$b['method']" />

        @endforeach
        @endisset 
        @isset($elm['created_at'])
            <p class="text-accent ">{{ $elm['created_at'] }}</p>
        @endisset
    </div>
</div>
@endforeach
@endisset