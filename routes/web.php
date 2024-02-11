<?php
use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/generi',[AnimeController::class,'index'])->name('home');

Route::get('/generi/{genre_id}',[AnimeController::class,'animeByGenre'])->name('genere');

Route::get('/mangaraccomandati',[MangaController::class,'raccomandazioni'])->name('listamanga');

Route::get('/mangaraccomandati/{genere_id}',[MangaController::class,'mangabygenre'])->name('generemanga');