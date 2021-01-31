<?php

namespace App\Http\Controllers;

use App\Models\User;

class admin extends Controller
{


    public static function userlist()
    {
        $user = User::paginate(10, ['*'], "sayfa");
        return view('admin.user_detail_list', ['userlist' => $user]);


    }


    public static function user_detail($id)
    {
        $user =User::where('id', $id)->count();
        if($user>0){

        $user =User::where('id', $id)->first();

        $photo = $user->profile_photo_path;
        if (empty($photo)) {
            $photo = str_replace(" ", "+", $user->name)."+". str_replace(" ", "+", $user->surname);
            $photo = "https://ui-avatars.com/api/?name=" . $photo . "&color=7F9CF5&background=EBF4FF";

        }

        return view('admin.profile_detail', ['user' => $user,'photo'=>$photo]);
        } else {
            return  abort(404);
        }

    }
}
