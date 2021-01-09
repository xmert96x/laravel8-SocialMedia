<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Usercheck extends Controller
{
    public function Userdata($id)
    {
        $users = DB::table('users')->where("id", $id)->count();

        if ($users > 0) {
            $users = DB::table('users')->where("id", $id)->get();
            if (Auth::check()) {
                if ($id ==  Auth::user()->id ) {
                    $myprofile = true;
                    $name = Auth::user()->name;
                    $email = Auth::user()->email;
                    $photo = Auth::user()->profile_photo_url;

                    return view('user.index', ['name' => $name, "myprofile" => $myprofile, 'email' => $email, "photo" => $photo,"page"=>"timeline"]);
                } else {
                    $myprofile = false;
                    $name =  $users[0]->name;

                    $email = $users[0]->email;
                    $photo = $users[0]->profile_photo_path;
                    if(Empty($photo)){
                        $photo = str_replace(" ", "+", $name);
                        $photo= "https://ui-avatars.com/api/?name=".$photo."&color=7F9CF5&background=EBF4FF";
                    }
                    return view('user.index', ['name' => $name, "myprofile" => $myprofile, 'email' => $email, "photo" => $photo,"page"=>"timeline"]);
                }
            } else {
                $myprofile = false;
                $name =  $users[0]->name;

                $email = $users[0]->email;
                $photo = $users[0]->profile_photo_path;
                if(Empty($photo)){
                    $photo = str_replace(" ", "+", $name);
                    $photo= "https://ui-avatars.com/api/?name=".$photo."&color=7F9CF5&background=EBF4FF";
                }
                return view('user.index', ['name' => $name, "myprofile" => $myprofile, 'email' => $email, "photo" => $photo,"page"=>"timeline"]);
            }

        } else {
            return "hata";
        }
    }

}
