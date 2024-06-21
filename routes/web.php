<?php

use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('HomePage');
});
Route::get('/cityPage', function(){
    return view('CityPage');
});
Route::get('/city/belitung', function(){
    return view('CityHubPage');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'loginAuth']);
    
Route::post('/threads', [ThreadController::class, 'store'])->name('threads.store');

Route::get('/forum', [ThreadController::class, 'index'])->name('threads.index');

Route::get('/aboutus', function(){
    return view('AboutUsPage');
});

Route::get('/Home', function(){
    return view('HomePage');
});

Route::get('/CHPENG', function(){
    return view('CityHubPageENG');
});

Route::get('/CHPMND', function(){
    return view('CityHubPageMND');
});