<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class API extends Controller
{
    public $articles = [0=>['titolo'=>'sport', 'titolo2'=>'calcio','descrizione'=>'prova prova prova'],
    1=>['titolo'=>'cinema', 'titolo2'=>'azione','descrizione'=>'prova prova prova'],
    2=>['titolo'=>'musica', 'titolo2'=>'pop','descrizione'=>'prova prova prova'],
    3=>['titolo'=>'giardinaggio', 'terriccio'=>'calcio','descrizione'=>'prova prova prova'],];


    public function articles(){
        return $this->articles;
    }
}
