<?php

use Illuminate\Support\Facades\Route;

//Utilizzo il mio main controller
use App\Http\Controllers\Guest\PageController;

Route::get('/', [PageController::class, 'index'])->name('comics.index');

//Creo la rotta per il mio CREATE (in GET)
Route::get('/comics/create', [PageController::class, 'create'])->name('comics.create');

//Creo la rotta per il mio CREATE (in POST)
Route::post('/comics', [PageController::class, 'store'])->name('comics.store');

//Creo la rotta per la mia SHOW
Route::get('/comics/{id}', [PageController::class, 'show'])->name('comics.show');

//Rotta per la DELETE
Route::delete('/comics/{id}', [PageController::class, 'destroy'])->name('comics.destroy');

//Rotta per la EDIT
Route::get('/comics/{id}/edit', [PageController::class, 'edit'])->name('comics.edit');

//Rotta per l'UPDATE
Route::put('/comics/{id}', [PageController::class, 'update'])->name('comics.update');
