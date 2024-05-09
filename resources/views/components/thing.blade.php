<div class="flex flex-col items-center mt-4">
    {{-- @dd($elms) --}}
        @foreach($elms as $elm )
        @if($elm->getTable() == 'goodthings')
        <div class="w-[80vw]  m-4 rounded-lg border-l-4 border-l-green-400  flex flex-col  bg-secback min-h-[25vh] h-auto ">

            <div class="p-4 text-center text-green-200 text-lg flex-1  h-auto ">
                {{$elm->content}}
            </div>
            
            {{-- @dd($bp) --}}
            @isset($bp)
            <div class="p-2 flex justify-around">
                @foreach($bp as $b)
                <x-button :theme="$b['theme']" :content="$b['content']"  dir="goodthing/{{$elm['id']}}/" :method="$b['method']" />
                @endforeach
                @isset($elm['created_at'])
                    <p class="text-red-300">{{$elm['created_at']}}</p>
                @endisset
                @if($elm['created_at'] != $elm['updated_at'])
                    <p class="text-green-300">{{$elm['updated_at']}}</p>
                @endif
            </div>
            @endisset     
        </div>
        @else
        <div class="w-[80vw]  m-4 rounded-lg border-l-4 border-l-red-400  flex flex-col  bg-secback min-h-[25vh] h-auto ">

            <div class="p-4 text-center text-red-200 text-lg flex-1  h-auto ">
                {{$elm->content}}
            </div>
            
            {{-- @dd($bp) --}}
            @isset($bp)
            <div class="p-2 flex justify-around">
                @foreach($bp as $b)
                <x-button :theme="$b['theme']" :content="$b['content']"  dir="badthing/{{$elm['id']}}/" :method="$b['method']" />
                @endforeach
                @isset($elm['created_at'])
                    <p class="text-red-300">{{$elm['created_at']}}</p>
                @endisset
                @if($elm['created_at'] != $elm['updated_at'])
                    <p class="text-green-300">{{$elm['updated_at']}}</p>
                @endif
            </div>
            @endisset     
        </div>

        @endif
        @endforeach 
    </div>