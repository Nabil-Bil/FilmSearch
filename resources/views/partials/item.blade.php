
@foreach($response['results'] as $item)
    <div class="my-10 border-solid border-blue-500 border-4 rounded-xl p-10 flex flex-row items-center">
        <img src="{{$image.$item['poster_path']}}" alt="Poster du film '{{$item['title']}}'" class="w-48">
        <a href="#" class="ml-10">
            <p class="text-3xl font-bold">{{$item['title']}}:</p>
            <p class="mt-6 text-xl">{{$item['overview']}}</p>
        </a>
    </div>
@endforeach

