<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login; 

use App\Http\Controllers\deneme;
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
 $id=$id; 
    return  $id*2;
});
 
Route::post('/createusers',[deneme::class,'post'])    ;   
Route::get('/form',[login::class,'index']);
Route::get('/form2',[deneme::class,'index']);
Route::post('/deneme',[login::class,'post'])    ;   
