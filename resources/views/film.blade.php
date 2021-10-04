@extends('layouts.app')

@section('title')
{{$title}}
@endsection

@section('body')

    @if($response->getStatusCode()==200)
        <div class="container  sm:m-auto flex flex-col items-center">
            <h1 class="font-bold text-3xl mt-10 text-center">{{$title}}</h1>
            @if($response['poster_path']!="")
                <img src="{{$image.$response['poster_path']}}" alt="Poster du film '{{$response['title']}}'" class="w-48 mt-10">
            @endif
            <p class="font-bold sm:text-xl text-lg mt-10 text-center">{{$response['overview']}}</p>
            <div class="container m-auto flex sm:flex-row flex-col sm:justify-around items-center mt-10">
                <p class="font-bold text-gray-400 text-lg">Note : {{$response['vote_average']}}/10</p>
                <p class="font-bold  text-lg">Release Date : {{date('d-m-Y',strtotime($response["release_date"]))}}</p>
                <p class="font-bold text-lg">Revenue : {{$response["revenue"]}} $</p>
            </div>
        </div>
    @else
        @include('partials.notFound')
    @endif


@endsection
