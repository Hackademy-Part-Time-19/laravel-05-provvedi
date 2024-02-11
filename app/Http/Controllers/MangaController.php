<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MangaController extends Controller
{
    public function raccomandazioni(){
        $primarichiesta= http::get('https://api.jikan.moe/v4/genres/manga')->json()['data'];

        
        return view('mangaraccomandati',['dati'=>$primarichiesta]);
    }

    public function mangabygenre($genere_id){

        $uri= 'https://api.jikan.moe/v4/manga?genres=' . $genere_id;
    
        
    
        $manga1= http::get($uri)->json();
       
      $manga= $manga1['data'];
      
        return view('mangadelgenere',compact('manga'));
       }
}
