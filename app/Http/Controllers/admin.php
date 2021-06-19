<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class admin extends Controller
{


    public static function user_detail($id)
    {
        $user =User::where('id', $id)->count();
        if ($user > 0) {

            $user = User::where('id', $id)->first();

            $photo = $user->profile_photo_path;
            if (empty($photo)) {
                $photo = str_replace(" ", "+", $user->name) . "+" . str_replace(" ", "+", $user->surname);
                $photo = "https://ui-avatars.com/api/?name=" . $photo . "&color=7F9CF5&background=EBF4FF";

            } else {
                $photo = url("storage/" . $user->profile_photo_path);
            }

            return view('admin.profile_detail', ['user' => $user, 'photo' => $photo]);
        } else {
            return abort(404);
        }

    }


    public function index()
    {
        $usercount = DB::table("users")->count();
        $postcount = DB::table("posts")->count();
        $coomnetscount = DB::table("comments")->count();
        $onlineusercount=DB::table("sessions")->count();

        $months = Post::selectRaw(' monthname(created_at) as month,  count(*) as count ')->groupBy('month')->get();
        $name = array(array("January", 0), array("February", 0), array("March", 0), array("April", 0), array("May", 0), array("June", 0), array("July", 0), array("August", 0), array("September", 0), array("October", 0),array("November", 0), array("December",0));

        foreach ($months as $month)

            for ($i = 0; $i < 12; $i++) {
                if ($name[$i][0] == $month["month"]) {
                    $name[$i][1]=$month["count"];
                }
            }

        return view("admin.index", ["usercount" => $usercount, "postcount" => $postcount,"name"=>$name,"coomnetscount"=>$coomnetscount,"olinecount"=>$onlineusercount]);
    }
}
