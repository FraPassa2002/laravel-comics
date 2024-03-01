<?php

use Illuminate\Support\Facades\Route;

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

    $comics = config('comics');

    // dd($comics);
    
    return view('welcome', compact('comics'));
})->name('home');

Route::get('/comics', function () {

    $comics = config('comics');

    $comic = $comics[$_GET['id']];
    
    return view('subpages.comics.show', compact('comic'));
})->name('comics.show');

// classe::metodo http che vogliamo usare. quando accediamo ad un link farà una chiamata di tipo get . post si usa tramite form
//  ↓      ↓
// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
