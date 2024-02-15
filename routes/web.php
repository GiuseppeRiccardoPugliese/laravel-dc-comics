<?php

use Illuminate\Support\Facades\Route;

//Utilizzo il mio main controller
use App\Http\Controllers\Guest\PageController;

Route::get('/', [PageController::class, 'index']);
