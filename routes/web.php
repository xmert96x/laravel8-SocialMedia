<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\User;
use App\Http\Controllers\Usercheck;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    if (Auth::check())
        return view('home.index');
    else {
        return view('giris');
    }
});

Route::get('/admin', function () {
    return view('admin.index');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/dede',[User::class,'login'])    ;

Route::get('/dede2/{color}', function ($color) {
    return view("deneme", ["color" => $color]);
});


Route::get('/dede5', function () {
    return view('user.index');
});


Route::get("profile/{id}", [Usercheck::class, "timeline"])->where('id', '[0-9]+');
Route::get('profile/{id}/{page}', [Usercheck::class, "edit"]);
//Route::get("request/{id}/{page}", [Usercheck::class, "deny_request"])->where('name', 'deny');
//Route::get("request/{id}/{id2}", [Usercheck::class, "request"])->where('id', '[0-9]+');


Route::get("request/{id}/{id2}",
    function ($id, $id2) {
        if (is_numeric($id) && is_numeric($id2)) {

            return App\Http\Controllers\Usercheck::request($id, $id2);
        }
        if ($id2 == "deny") {


            return App\Http\Controllers\Usercheck::deny_request($id, $id);
        }
        return redirect()->back();
    });


Route::get('admin/userlist', [admin::class, "userlist"]);
Route::get('admin/profile/{id}', [admin::class, "user_detail"]);
