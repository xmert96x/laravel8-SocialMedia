<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Usercheck;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/dede',[User::class,'login'])    ;

Route::get('/dede2', function () {
    return view('giris');
});


Route::get('/dede3', function () {
    return view('livewire/search');
});
Route::get('/dede5', function () {
    return view('user.index');
});



Route::get("profile/{id}",[Usercheck::class,"Userdata"]);

