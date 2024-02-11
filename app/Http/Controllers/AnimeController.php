<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function index(){

        $risposta = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
        $generi = $risposta['data'];
        
         
        return view('elencogenerianime',['dati'=>$generi]);
        
    }

   public function animeByGenre($genre_id){

    $uri= 'https://api.jikan.moe/v4/anime?genres=' . $genre_id;

    

    $anime1 = http::get($uri)->json();

    $anime= $anime1['data'];
 
    
    return view('animediquelgenere',compact('anime'));
   }
}

