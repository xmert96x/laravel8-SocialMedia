<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class menucheck extends Controller
{


    public function deneme()
    {

        return Auth::user();

    }

}

