@extends('layouts.app')

@section('title')
    Best Films
@endsection

@section('body')
    <section class="m-10">
        @if($id >0 and $id<=$response['total_pages'])
            <p class="text-5xl font-bold my-10 m-auto">Best Films :
            <p>
                
                @include("partials.item")
                @if($id==$response['total_pages'])
                    <a href="{{$id-=1}}" class="text-xl font-bold">Previous</a>
                @elseif($id==1)
                    <a href="{{$id+=1}}" class="text-xl font-bold">Next</a>

                @else
                    <a href="{{$id-=1}}" class="text-xl font-bold">Previous</a>
                    <a href="{{$id+=2}}" class="text-xl font-bold">Next</a>
        @endif
        @else
            @include('partials.notFound')
        @endif

    </section>

@endsection

