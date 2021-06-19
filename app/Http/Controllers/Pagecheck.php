<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class Pagecheck extends Controller
{
    public function check()
    {
        if (Auth::check()) {
            $foo = Cache::get('page');
            if ($foo == "admin" && Auth::user()->role == "1") {

                Cache::forget('page');
                return redirect("/admin");
            }
            if ($foo == "admin" && Auth::user()->role != "1") {
                Cache::forget('page');
                return redirect("/");
            }
            if ($foo == "user" && (Auth::user()->role == "1" || Auth::user()->role == "0")) {
                Cache::forget('page');
                return redirect("/");

            } else {
                Cache::forget('page');
                return back();
            }

        }
    }
}


