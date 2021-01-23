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

                    $request = DB::table('friend_requests')->where("sender_id", Auth::user()->id)->where("receiver_id", $id)->count();
                    $request2 = DB::table('friend_requests')->where("sender_id", $id)->where("receiver_id", Auth::user()->id)->count();
                    if ($request > 0 || $request2 > 0) {
                        if ($request2 > 0) {
                            $data = DB::table('friend_requests')->where("sender_id", $id)->where("receiver_id", Auth::user()->id)->get();
                        }
                        if ($request > 0) {
                            $data = DB::table('friend_requests')->where("sender_id", Auth::user()->id)->where("receiver_id", $id)->get();
                        }
                        return ['name' => $name, "myprofile" => $myprofile, 'email' => $email, "photo" => $photo, "request" => $data[0]->status];
                    } else {
                        return ['name' => $name, "myprofile" => $myprofile, 'email' => $email, "photo" => $photo];
                    }

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

            $id3 = DB::table('friend_requests')->where("sender_id", $id)->where("receiver_id", $id2)->count();
            $id4 = DB::table('friend_requests')->where("sender_id", $id2)->where("receiver_id", $id)->count();
            if ($id3 == 0 && $id4 == 0) {


                DB::insert('insert into friend_requests (sender_id,receiver_id,status) values (?, ?,?)', [$id, $id2, true]);
                return redirect()->back();
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }

    }
}


