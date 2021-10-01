@extends('layouts.app')

@section('title')
    Best Films
@endsection

@section('body')
    <section class="m-10">
        @if($response->getStatusCode()==200)
            <p class="text-5xl font-bold my-10 m-auto">Best Films :
            <p>
            @include("partials.item")
            <div class="flex justify-center">
                @if($id==$response['total_pages'])
                    <a href="{{$id-=1}}" class="text-xl font-bold bg-blue-400 px-10 py-2 rounded-full text-white">Previous</a>
                @elseif($id==1)
                    <a href="{{$id+=1}}" class="text-xl font-bold bg-blue-400 px-10 py-2 rounded-full text-white">Next</a>

                @else
                    <a href="{{$id-=1}}" class="text-xl font-bold mx-5 bg-blue-400 px-10 py-2 rounded-full text-white">Previous</a>
                    <a href="{{$id+=2}}" class="text-xl font-bold mx-5 bg-blue-400 px-10 py-2 rounded-full text-white">Next</a>
                @endif
            </div>


        @else
            @include('partials.notFound')
        @endif

    </section>

@endsection

