<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cvsController;


Route::get('/', [cvsController::class, "index"]);

Route::get('/search', [cvsController::class, 'search']);


Route::get('/login', function () {
    return view('login');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::post('/editconfirm', [cvsController::class, 'edit']);

Route::post('/signupcheck', [cvsController::class, 'signup']);

Route::post('/logincheck', [cvsController::class, 'login']);

Route::post('/deleter', [cvsController::class, 'delete']);

Route::post('/logout', [cvsController::class, 'logout']);


// routes to both other pages aswell as Http post requests for login and account creation

