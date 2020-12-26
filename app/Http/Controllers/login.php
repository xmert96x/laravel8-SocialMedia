<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function index()
    {
 for($i=0; $i<15; $i++)
{
    echo($i).'<br>';
}        


return  2*2;

    }
    public function post(Request $reg)
    { 
        DB::table('members')->insert([
            'NAME'=>$reg->name,
            'SURNAME'=>$reg->surname,
            'EMAİL'=>$reg->email,
            'PASSWORD'=>$reg->password,
        ]);
    }

    
}
