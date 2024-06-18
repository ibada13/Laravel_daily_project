@isset($days)
 @foreach ($days as $day)
     
 <a class="min-h-16 h-auto flex flex-col bg-secback m-4 shadow-lg rounded-lg" href="extra/{{$day['id']}}">
    <div class=" flex-grow w-full text-center">
        <h2 class="text-lg text-text">
            {{$day['created_at']}}
        </h2>
    </div>
    <form action="/extra/{{$day->id}}" method="POST" class="min-h-16 h-auto flex justify-center items-center ">
        @csrf
        @method('DELETE')
        <button  class="text-text bg-secondory hover:bg-accent hover:text-back transition  uppercase p-2 rounded">delete</button>
    </form >
</a>
@endforeach   
@endisset