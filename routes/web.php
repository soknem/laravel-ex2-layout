<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return phpinfo();
});
Route::get('/main', function () {
    return view('auth.main');
});
