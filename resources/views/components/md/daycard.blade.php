@props(['day'])
<a class="min-h-16 h-auto flex flex-col bg-secback m-4 shadow-lg rounded-lg" href="/day/{{$day['id']}}">
    <div class=" flex-grow w-full text-center">
        <h2 class="text-lg text-text">
            {{$day['createdat']}}
        </h2>
    </div>
    <div class="min-h-16 h-auto flex justify-center items-center ">
        <button class="text-text bg-secondory hover:bg-accent hover:text-back transition  uppercase p-2 rounded">delete</button>
    </div>
</a>