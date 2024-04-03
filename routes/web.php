<?php

use App\Http\Controllers\NintendoController;
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
Route::get('/', [NintendoController::class, 'home']
)->name('homepage');
/*Rotta Carica Nintendo*/
Route::get('/nintendo/create', [NintendoController::class, 'create'])->name('nintendo_create');
Route::post('/nintendo/store', [NintendoController::class, 'store'])->name('nintendo_store');
/*Rotta Index Nintendo*/
Route::get('/nintendo', [NintendoController::class, 'index'])->name('nintendos');
/*Rotta Dettaglio Nintendo*/
Route::get('/nintendo/dettaglio/{nintendo}', [NintendoController::class, 'show'])->name('nintendo_show');
/*Rotta Modifica Nintendo*/
Route::get('/nintendo/modifica/{nintendo}', [NintendoController::class, 'edit'])->name('nintendo_edit');
/*Rotta Aggiornamento Nintendo*/
Route::put('/nintendo/aggiornamento/{nintendo}', [NintendoController::class, 'update'])->name('nintendo_update');
/*Rotta Eliminazione Nintendo*/
Route::delete('/nintendo/eliminazione/{nintendo}', [NintendoController::class, 'destroy'])->name('nintendo_delete');
/*Rotta Invio Mail*/
Route::get('/contattaci', [NintendoController::class, 'contact'])->name('contact.us');
Route::post('/contattaci/submit', [NintendoController::class, 'submit'])->name('contact.submit');