<nav class="flex items-center justify-between bg-blue-400 py-4">
    <a href="{{route('homePage')}}"><h1 class=" text-2xl md:text-5xl font-bold mx-10 text-white">S<span class="text-blue-900">F</span></h1></a>
    <ul class="flex mx-10 justify-evenly w-2/5 text-white items-center md:text-xl">
        <li class="mr-4"><a href="{{route('homePage')}}">Home</a></li>
        <li class="ml-4"><a href="{{route("listFilms.best",$id)}}">Best Films</a> </li>
    </ul>
</nav>
