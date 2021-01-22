<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Usercheck extends Controller
{
    public function Userdata($id)
    {
        $users = DB::table('users')->where("id", $id)->count();

        if ($users > 0) {
            $users = DB::table('users')->where("id", $id)->get();
            if (Auth::check()) {
                if ($id == Auth::user()->id) {
                    $myprofile = true;
                    $name = Auth::user()->name;
                    $email = Auth::user()->email;
                    $photo = Auth::user()->profile_photo_url;

                    return ['name' => $name, "myprofile" => $myprofile, 'email' => $email, "photo" => $photo];
                } else {
                    $myprofile = false;
                    $name = $users[0]->name;

                    $email = $users[0]->email;
                    $photo = $users[0]->profile_photo_path;
                    if (empty($photo)) {
                        $photo = str_replace(" ", "+", $name);
                        $photo = "https://ui-avatars.com/api/?name=" . $photo . "&color=7F9CF5&background=EBF4FF";
                    }
                    return ['name' => $name, "myprofile" => $myprofile, 'email' => $email, "photo" => $photo];
                }
            } else {
                $myprofile = false;
                $name = $users[0]->name;

                $email = $users[0]->email;
                $photo = $users[0]->profile_photo_path;
                if (empty($photo)) {
                    $photo = str_replace(" ", "+", $name);
                    $photo = "https://ui-avatars.com/api/?name=" . $photo . "&color=7F9CF5&background=EBF4FF";
                }
                return ['name' => $name, "myprofile" => $myprofile, 'email' => $email, "photo" => $photo];
            }

        } else {
            return abort(404);

        }
    }

    public function timeline($id)
    {
        $user = $this->Userdata($id);

        return view('user.index', ['user' => $user, "page" => "timeline"]);


    }

    public function edit($id, $page)
    {
        $user = $this->Userdata($id);


        if ($user['myprofile'])
            return view('user._profileedit', ['user' => $user, "page" => "$page"]);

        else {
            return redirect('/');
        }
    }

    public function request($id, $id2)
    {
        if ($id != $id2 && Auth::user()->id == $id) {
            $user = $this->Userdata($id);
            $user2 = $this->Userdata($id2);

            echo $id . "<br>" . $id2;
        } else {
            return abort(404);
        }

    }
}
