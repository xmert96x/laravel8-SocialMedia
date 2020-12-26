<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateUsers extends Controller
{
    
    
    public function post(Request $reg){
    DB::table('members')->insert([
        'NAME'=>$reg->name,
        'SURNAME'=>$reg->surname,
        'EMAİL'=>$reg->email,
        'PASSWORD'=>$reg->password,
    ]);
}


 
public function index(){
    return 2;
}
}
