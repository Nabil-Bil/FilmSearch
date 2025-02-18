@foreach($response['results'] as $item)
<div class="my-10 border-solid border-blue-500 md:border-4 md:rounded-xl md:p-10 border-b-4 pb-10 flex sm:flex-row flex-col items-center xl:mx-48 ">
    @if($item['poster_path']!="")
    <img src="{{$image.$item['poster_path']}}" alt="Poster du film '{{$item['title']}}'" class="md:w-48 w-32">
    @endif
    <div class="sm:ml-10 w-full flex flex-col  sm:items-start items-center mt-10">
        <a href="{{route('film',$item['id'])}}" class="md:text-3xl text-xl font-bold">{{$item['title']}}:</a>
        <p class="mt-6 md:text-xl text-lg h-7 overflow-hidden">{{$item['overview']}}</p>
        <div class="flex justify-between items-center sm:flex-row flex-col mt-12 w-full">


            @if(array_key_exists('vote_average',$item))
            <p class="md:text-xl text-lg font-bold text-gray-500">Note : {{$item['vote_average']}}/10</p>
            @endif
            @if(array_key_exists('release_date',$item))
            <p class="md:text-xl text-lg font-bold ">Release date : {{date('d-m-Y',strtotime($item["release_date"]))}}</p>
            @endif

        </div>


    </div>
</div>
@endforeach