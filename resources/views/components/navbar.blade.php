@props(['id'])
<nav class=" p-3 flex justify-around shadow-lg items-center  rounded-b-lg bg-secback" >
    @isset($elms)
    @isset($id)
        @foreach ($elms as $elm)
            <a href="/day/{{$id}}/{{$elm}}" class="ml-2 text-accent uppercase ">{{$elm}}</a>
        @endforeach

    @else
        @foreach ($elms as $elm)
            
            <a href="/{{($elm == "rules") ? "" : $elm   }}" class="ml-2 text-accent uppercase  ">{{$elm}}</a>
        @endforeach
    @endisset
    @endisset
</nav>

       


