<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login; 
use Illuminate\Http\Request;
use App\Http\Controllers\Users;
use App\Http\Controllers\Deneme;
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

Route::get('/', function () {  $x=5;
    return view('Login Page');
});


Route::get('user/{id}', function ($id) {
 $id=$id; 
 
 session(['id' =>  $id]);
 echo(session('id'));
 
});
 
Route::post('/createusers',[Users::class,'create'])    ;   
Route::get('/form',[login::class,'index']);
Route::get('/form2',[Users::class,'index']);
Route::post('/deneme',[login::class,'post'])    ;   
Route::post('/home',[Users::class,'login'])    ;   
Route::get("/list",[Deneme::class,'show']);