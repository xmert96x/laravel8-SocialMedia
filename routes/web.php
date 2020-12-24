<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login; 
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
    return view('Login Page');
});


Route::get('user/{id}', function ($id) {
 $id=$id*2;
    return  $id;
});
 

Route::get('/test',[login::class,'index']);