<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\Pagecheck;
use App\Http\Controllers\Postcheck;
use App\Http\Controllers\Search;
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


Route::group([
    'prefix' => 'admin',
    'middleware' => ['role']
], function () {
    Route::get('/', [admin::class, "index"]);
    Route::get('userlist', function () {
        return view('admin.user_detail_list');
    });
    Route::get('profile/{id}', [admin::class, "user_detail"]);
});
Route::get('admin/login', function () {
    return view("admin._login");
})->middleware("page");
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group([
    'prefix' => 'profile/{id}',
    'where' => [
        'id' => '[0-9]+'
    ],
], function () {
    Route::get("/", [Usercheck::class, "timeline"]);
    Route::get('edit', [Usercheck::class, "edit"]);
    Route::get('friendlist', [Usercheck::class, "friend_list"]);
});


Route::group([
    'prefix' => 'request/{id}',
    'where' => [
        'id' => '[0-9]+'
    ],
], function () {
    Route::get('/', [Usercheck::class, "request"]);
    Route::get('deny', [Usercheck::class, "deny_request"]);
    Route::get('undo', [Usercheck::class, "undo_request"]);
    Route::get('accept', [Usercheck::class, "accept"]);

});


Route::get('friend/{id}/delete', [Usercheck::class, "delete"]);
Route::post("/createpost", [Postcheck::class, 'store']);
Route::get('/user/profile', [Postcheck::class, 'return']);
Route::get("/search/{keyword}/{sort}", [Search::class, 'result']);


/*

Route::get('/dede13', function () {
    return view("user.deneme");
});
Route::get('/mert', function () {
    return view("deneme");
});


Route::get('/dede2/{color}', function ($color) {
    return view("deneme", ["color" => $color]);
});





/*Route::get("request/{id}/{id2}",
    function ($id, $id2) {
        if (is_numeric($id) && is_numeric($id2)) {

            return App\Http\Controllers\Usercheck::request($id, $id2);
        }
        if ($id2 == "deny") {


            return App\Http\Controllers\Usercheck::deny_request($id);
        }
        if ($id2 == "undo") {


            return App\Http\Controllers\Usercheck::undo_request($id);
        }
        if ($id2 == "accept") {


            return App\Http\Controllers\Usercheck::accept($id);
        }
        return redirect()->back();
    });*/

Route::get('/pagecheck', [Pagecheck::class, "check"]);


Route::get('/dede5', function () {
    return view('deneme');
});
