<?php

use App\Http\Controllers\VideogameController;
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
/*Rotta Homepage*/
Route::get('/', [VideogameController::class, 'home']
)->name('homepage');
/*Rotta Carica Videogioco*/
Route::get('/videogiochi/create', [VideogameController::class, 'create'])->name('videogame_create');
Route::post('/videogiochi/store', [VideogameController::class, 'store'])->name('videogame_store');
/*Rotta Index Videogiochi*/
Route::get('/videogiochi', [VideogameController::class, 'index'])->name('videogames');
/*Rotta Dettaglio Videogioco*/
Route::get('/videogioco/dettaglio/{videogame}', [VideogameController::class, 'show'])->name('videogame_show');
/*Rotta Modifica Videogioco*/
Route::get('/videogioco/modifica/{videogame}', [VideogameController::class, 'edit'])->name('videogame_edit');
/*Rotta Aggiornamento Videogioco*/
Route::put('/videogioco/aggiornamento/{videogame}', [VideogameController::class, 'update'])->name('videogame_update');
/*Rotta Eliminazione Videogioco*/
Route::delete('/videogioco/eliminazione/{videogame}', [VideogameController::class, 'destroy'])->name('videogame_delete');
/*Rotta Invio Mail*/
Route::get('/contattaci', [VideogameController::class, 'contact'])->name('contact.us');
Route::post('/contattaci/submit', [VideogameController::class, 'submit'])->name('contact.submit');