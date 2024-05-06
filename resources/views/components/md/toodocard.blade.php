
    @isset($elms)
    {{-- @dd($elms) --}}
    
    @foreach($elms as $elm)
            @if($elm['is_Done'])

                <div class="h-auto w-[80vw]  bg-secback  border-l-secondory  border-l-8 rounded-lg min-h-[20vh]  m-5 flex flex-col ">
                    <div class=" h-auto p-1">
                        <h2 class="text-accent text-center "> {{$elm['content']}}</h2>
                    </div >
                    @isset($bp)
                    <div class=" min-h-16 flex justify-around items-center">
                        @foreach($bp as $b)
                            @if($b['content'] != "Done")
                                <x-button :theme="$b['theme']" :content="$b['content']"  dir="{{$b['dir']}}/{{$elm['id']}}/" :method="$b['method']" />
                            @endif
                        @endforeach
                        @isset($elm['created_at'])
                        <p class="text-accent">{{$elm['created_at']}}</p>
                        @isset($elm['updated_at'])
                        @if($elm['created_at'] != $elm['updated_at'])
                            <p class="text-ar "> {{$elm['updated_at']}}</p>
                        @endif
                        @endisset
                        @endisset
                    </div>
                    @endisset
                </div>
            @else
                
            <div class="h-auto w-[80vw]  bg-secback  border-l-text border-l-8 rounded-lg min-h-[20vh]  m-5 flex flex-col ">
                <div class=" h-auto p-1">
                    <h2 class="text-text text-center "> {{$elm['content']}}</h2>
                </div >
                @isset($bp)
                <div class=" min-h-16 flex justify-around items-center">
                    @foreach($bp as $b)
                       
                            <x-button :theme="$b['theme']" :content="$b['content']"  dir="{{$b['dir']}}/{{$elm['id']}}/" :method="$b['method']" />
                        
                    @endforeach
                    @isset($elm['created_at'])
                    <p class="text-accent">{{$elm['created_at']}}</p>
                    @isset($elm['updated_at'])
                    @if($elm['created_at'] != $elm['updated_at'])
                        <p class="text-ar "> {{$elm['updated_at']}}</p>
                    @endif
                    @endisset
                    @endisset
                </div>
                @endisset
            </div>
            
            @endif
            @endforeach
        
    @endisset