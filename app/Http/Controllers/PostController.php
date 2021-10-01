<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    private $token = "bcf9a7024b9b95bcb7be1e5cc01a2494";
    private $image_url = "https://image.tmdb.org/t/p/w300";

    function getList($url)
    {
        return Http::get($url);
    }

    function home($id = 1)
    {
        return view('home', compact("id"));
    }


    function listFilms(Request $request, $id = 1)
    {
        $title = $request->film;
        $url = "https://api.themoviedb.org/3/search/movie?api_key=" . $this->token . "&query=" . $title . "&page=" . $id;
        $response = $this->getList($url);
        $image = $this->image_url;
        return view("listfilms", compact('response', 'title', "image", 'id'));
    }

    function bestFilms($id)
    {

        $url = "https://api.themoviedb.org/3/discover/movie?api_key=" . $this->token . "&sort_by=popularity.desc&include_video=true&page=" . $id;
        $response = $this->getList($url);
        $image = $this->image_url;
        return view("bestFilm", compact('response', 'image', 'id'));
    }

    function film()
    {
        return view('film');
    }
}
