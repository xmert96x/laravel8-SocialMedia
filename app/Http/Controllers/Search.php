<?php

namespace App\Http\Controllers;

class Search extends Controller
{
    public function result($keyword, $sort)
    {

        return view("searchpage.index", ['request' => $keyword,'direction'=>$sort]);
    }
}
