<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\members;

class deneme extends Controller
{
 function show()
 {
    $data=DB::table('members')->get();
return view('list',['members'=>$data]); 
 
 }
}
