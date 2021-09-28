@extends('layouts.app')
@section('title')
    Home
@endsection

@section('body')

    <form method="get" action="{{route("listFilms.find",$id)}}"
          class="flex items-center flex-col justify-center h-screen">
        <a href="{{route('homePage')}}"><h1 class="text-9xl font-bold my-10 text-gray-500">Search<span
                    class="text-blue-900">F</span>ilm</h1></a>
        <label><input type="text" name="film" placeholder="Film..."
                      class="my-10 rounded-full w-96 h-14 px-4 font-bold text-2xl"></label>
        <label><input type="submit" name="submit" value="Search"
                      class="cursor-pointer px-16 py-4 rounded-full bg-blue-400 text-2xl text-white font-bold"></label>
    </form>
@endsection
