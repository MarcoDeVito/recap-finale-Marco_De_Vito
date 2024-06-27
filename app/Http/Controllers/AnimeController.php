<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function homepage()
    {
        $animeCategory = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
        
        return view('anime.category', ['data' => $animeCategory['data']]);
    }

    public function genre($id)
    {
        
        $animeCategory = Http::get('https://api.jikan.moe/v4/anime?genres=' . $id)->json();
        // dd($animeCategory['data']);
        return view('anime.list-genre', ['data' => $animeCategory['data']]);
    }
    public function detail($id)
    {
        $animeCategory = Http::get('https://api.jikan.moe/v4/anime/' . $id)->json();
        // dd($animeCategory['data']);
        return view('anime.detail', ['data' => $animeCategory['data']]);
    }
}
