<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    
    
    public function create(Request $reg){
    DB::table('members')->insert([
        'NAME'=>$reg->name,
        'SURNAME'=>$reg->surname,
        'EMAİL'=>$reg->email,
        'PASSWORD'=>$reg->password,
    ]);
}


 
public function login(Request $reg){
    if (empty($reg)) {}
    else    
    echo count($reg->input()).'<br>';
    $user = DB::table('members')->where('PASSWORD', $reg->password)->where("EMAİL",$reg->email)->count();

    if($user>0 ) {
       session()->put('Email',$reg->email);
    return session()->get('Email');

} else{return "hata";}

}
}
