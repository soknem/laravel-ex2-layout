<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return phpinfo();
});
Route::get('/main', function () {
    return view('auth.main');
});


Route::resource('movies', MovieController::class);