@extends('layouts.app')

@section('title')
    SF {{$title}}
@endsection

@section('body')
    @if(empty($response['results']))

        @include('partials.notFound')
    @else
        <section class="m-10">
            @if($id >0 and $id<=$response['total_pages'])
                <p class="text-5xl font-bold my-10 m-auto">Liste Films:
                <p>
                    @include("partials.item")

                    @if($id==$response['total_pages'])
                        <a href="{{$id-=1}}{{"?film=$title"}}" class="text-xl font-bold">Previous</a>
                    @elseif($id==1)
                        <a href="{{$id+=1}}{{"?film=$title"}}" class="text-xl font-bold">Next</a>

                    @else
                        <a href="{{$id-=1}}{{"?film=$title"}}" class="text-xl font-bold">Previous</a>
                        <a href="{{$id+=2}}{{"?film=$title"}}" class="text-xl font-bold">Next</a>

            @endif
            @else
                @include('partials.notFound')
            @endif

        </section>
    @endif


@endsection


