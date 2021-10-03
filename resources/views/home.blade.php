@extends('layouts.app')
@section('title')
    Home
@endsection

@section('body')
    <form method="get" action="{{route("listFilms.find",$id)}}"
          class="flex items-center flex-col justify-center h-screen">
        <a href="{{route('homePage')}}"><h1 class="text-5xl sm:text-7xl md:text-9xl font-bold my-10 text-gray-500">
                Search<span
                    class="text-blue-900">F</span>ilm</h1></a>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <p class="text-red-500 text-xl font-bold">{{$error}}</p>
            @endforeach
        @endif
        <label><input type="text" name="Film" placeholder="Film..."
                      class="my-10 rounded-full w-52 h-10 sm:w-96 sm:h-14 px-4 font-bold text-xl sm:text-2xl"></label>
        <label><input type="submit" name="submit" value="Search"
                      class="cursor-pointer px-10 sm:px-16 py-2 sm:py-4 rounded-full bg-blue-400 text-lg sm:text-2xl text-white font-bold"></label>
    </form>

@endsection
