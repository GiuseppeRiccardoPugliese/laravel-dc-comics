<?php

use Illuminate\Support\Facades\Route;

//Utilizzo il mio main controller
use App\Http\Controllers\Guest\PageController;

Route::get('/', [PageController::class, 'index']);

//Creo la rotta per la mia Show
Route::get('/comics/{id}', [PageController::class, 'show']);
