@extends('angels.Azrael')
@section('content')
    {{-- @dd($tops) --}}
<div class="flex flex-row bg-secback min-h-screen">
    <div class="bg-secondory w-2/6 h-auto text-center flex flex-col   items-center border border-r-text">
        @isset($tops)
            @foreach($tops as $top)
        <details class="bg-black w-3/4 text-ar hover:bg-secondory hover:text-text border hover:border-text rounded-xl p-2 m-2">
            <summary>{{$top['title']}} 
                <form action="/notes/{{$top['id']}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class = "bg-black w-3/4 text-ar hover:bg-secondory hover:text-text border border-text rounded-xl p-2 m-2">-</button>
                </form>
            </summary>
            <div>
                @isset($top['subtopics'])
                    @foreach ($top['subtopics'] as $stop)
                        
                    <form action="/notes/{{$top['id']}}/{{$stop['id']}}" method="GET">
                        @csrf
                        <button class="bg-black w-3/4 text-ar hover:bg-secondory hover:text-text border border-text rounded-xl p-2 m-2">
                            {{$stop['title']}}
                        </button>
                    </form>
                        
                    @endforeach
                @endisset
            <form method="POST" action="/notes/{{$top['id']}}">
                @csrf
                <input  type="text" name="title" id="" class="text-center text-black w-3/4" placeholder="new topic"/>
                <button type="submit" class="bg-black w-3/4 text-ar hover:bg-secondory hover:text-text border border-text rounded-xl p-2 m-2">new subtopic</button>
                @error('title')
                    <p class="text-red-500">{{$message}}</p>   
                @enderror
            </form >
        </div>
    </details>
    @endforeach
    @endisset
    <form method="POST" action="/notes">
        @csrf
        <input type="text" name="title" id="" class="text-center text-black w-full" placeholder="new topic"/>
        <button class="bg-black w-3/4 text-ar hover:bg-secondory hover:text-text border border-text rounded-xl p-2 m-2">new topic</button>
        @error('title')
                    <p class="text-red-500">{{$message}}</p>   
                @enderror
    </form >
    </div>
    <div class="flex-grow flex flex-col items-center ">
        @isset($notes)
        {{-- @dd($stop); --}}

        <h1 class="text-accent text-center text-4xl">{{$tops[0]['startopic']['title']}}</h1>
        <div class="flex justify-around  w-full">
            <form action="" method="POST">
            @csrf('put')
            <button type="submit" class="bg-gr p-2 m-2 rounded-lg">edit title</button>
        </form>
                <form action="/subtopics/{{$tops[0]['startopic']['id']}}" method="POST">
                @csrf
                @method('put')
                <button type="submit" class="bg-ar p-2 m-2 rounded-lg">delete subtopic</button>
            </form>
        </div>
                @foreach($notes as $note)
                    <div class="flex flex-col w-3/4 text-center border border-text rounded-lg m-2">
                        <div class="flex justify-around w-full m-2 p-2  ">
                            <h1 class="text-text ">{{$note['title']}}</h1>
                            <h1 class="text-red-500">{{$note['created_at']}}</h1>
                        </div>
                        <div class="flex-grow w-full p-4 text-text">
                            {{$note['note']}}
                        </div>
                        <div class="flex justify-around">
                            <form action="/notes/edit/{{$note['id']}}" method="GET">
                                @csrf
                                @method('GET')
                                <button type="submit" class="bg-gr p-2 m-2 rounded-lg">edit note</button>
                            </form>
                            <form action="" method="POST">
                                @csrf('put')
                                <button type="submit" class="bg-ar p-2 m-2 rounded-lg">delete note</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @endisset
    </div>
@endsection