@foreach($response['results'] as $item)
    <div class="my-10 border-solid border-blue-500 border-4 rounded-xl p-10 flex flex-row items-center">
        @if($item['poster_path']!="")
            <img src="{{$image.$item['poster_path']}}" alt="Poster du film '{{$item['title']}}'" class="w-48">
        @endif
        <div class="ml-10 w-full">
            <p class="text-3xl font-bold">{{$item['title']}}:</p>
            <p class="mt-6 text-xl">{{$item['overview']}}</p>
            <div class="flex justify-between items-center  mt-12">
                <p class="text-xl font-bold text-gray-500">Note : {{$item['vote_average']}}/10</p>
                @if(array_key_exists('release_date',$item))
                    <p class="text-xl font-bold ">Release date : {{date('d-m-Y',strtotime($item["release_date"]))}}</p>

                @endif

            </div>


        </div>
    </div>
@endforeach

