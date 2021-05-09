<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Usercheck extends Controller
{
    public static function Userdata($id)
    {
        $users = DB::table('users')->where("id", $id)->count();

        if ($users > 0) {
            $users = DB::table('users')->where("id", $id)->get();
            if (Auth::check()) {
                if ($id == Auth::user()->id) {
                    $friend_status = false;
                    $myprofile = true;
                    $name = Auth::user()->name;
                    $surname = Auth::user()->surname;
                    $email = Auth::user()->email;
                    $photo = Auth::user()->profile_photo_url;
                    return ['name' => $name, "myprofile" => $myprofile, 'email' => $email, "photo" => $photo, "surname" => $surname,"id"=>$id];

                } else {
                    $friend_status = false;
                    $myprofile = false;
                    $name = $users[0]->name;
                    $surname = $users[0]->surname;
                    $email = $users[0]->email;
                    $photo = $users[0]->profile_photo_path;
                    if (empty($photo)) {
                        $photo = str_replace(" ", "+", $name) . "+" . str_replace(" ", "+", $surname);

                        $photo = "https://ui-avatars.com/api/?name=" . $photo . "&color=7F9CF5&background=EBF4FF";
                    }
                    else{$photo=url("storage/".$users[0]->profile_photo_path);}
                    $request = DB::table('friend_requests')->where("sender_id", Auth::user()->id)->where("receiver_id", $id)->count();
                    $request2 = DB::table('friend_requests')->where("sender_id", $id)->where("receiver_id", Auth::user()->id)->count();
                    if ($request > 0 || $request2 > 0) {
                        if ($request2 > 0) {
                            $data = DB::table('friend_requests')->where("sender_id", $id)->where("receiver_id", Auth::user()->id)->get();


                            return ['name' => $name, "surname" => $surname, "myprofile" => $myprofile, 'email' => $email, "photo" => $photo, "request" => $data[0]->status, "sender" => $data[0]->sender_id, "friend_status" => $friend_status,"id"=>$id];
                        }
                        if ($request > 0) {
                            $data = DB::table('friend_requests')->where("sender_id", Auth::user()->id)->where("receiver_id", $id)->get();
                            return ['name' => $name, "surname" => $surname, "myprofile" => $myprofile, 'email' => $email, "photo" => $photo, "request" => $data[0]->status, "friend_status" => $friend_status,"id"=>$id];
                        }

                    } else {
                        $request = DB::table('friend_lists')->where("friend1", $id)->where("friend2", Auth::user()->id)->count();
                        if ($request < 1) {
                            $request = DB::table('friend_lists')->where("friend2", $id)->where("friend1", Auth::user()->id)->count();
                        }

                        if ($request > 0) {
                            $friend_status = true;
                        }
                        return ['name' => $name, "myprofile" => $myprofile, 'email' => $email, "photo" => $photo, "surname" => $surname, "friend_status" => $friend_status,"id"=>$id];
                    }

                }
            } else {
                $myprofile = false;
                $surname = $users[0]->surname;
                $name = $users[0]->name;
                $email = $users[0]->email;
                $photo = $users[0]->profile_photo_path;
                if (empty($photo)) {
                    $photo = str_replace(" ", "+", $name) . "+" . str_replace(" ", "+", $surname);
                    $photo = "https://ui-avatars.com/api/?name=" . $photo . "&color=7F9CF5&background=EBF4FF";

                }
                else{$photo=url("storage/".$users[0]->profile_photo_path);}
                return ['name' => $name, "surname" => $surname, "myprofile" => $myprofile, 'email' => $email, "photo" => $photo,"id"=>$id];

            }


        } else {
            return abort(404);

        }
    }

    public static function timeline($id)
    {


        $user = self::Userdata($id);
        $Post = DB::table('posts')->where("author", $id)->orderBy("id", "DESC")->get();
        return view('user.index', [ 'user' => $user, "page" => "timeline","posts" => $Post]);


    }

    public static function edit($id)
    {
        $user = self::Userdata($id);


        if ($user['myprofile'])
            return view('user._profileedit', ['user' => $user, "page" => "edit"]);

        else {
            return redirect('/');
        }
    }

    public static function request($id)
    {
        if (Auth::user()->id != $id) {


            $id3 = DB::table('friend_requests')->where("sender_id", $id)->where("receiver_id", Auth::user()->id)->count();
            $id4 = DB::table('friend_requests')->where("sender_id", Auth::user()->id)->where("receiver_id", $id)->count();
            if ($id3 == 0 && $id4 == 0) {


                DB::insert('insert into friend_requests (sender_id,receiver_id,status) values (?, ?,?)', [Auth::user()->id, $id, true]);
                return redirect()->back();
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }
        return redirect()->back();
    }

    public static function deny_request($id)
    {

        $request = DB::table('friend_requests')->where("sender_id", $id)->where("receiver_id", Auth::user()->id)->count();
        echo $request;
        if ($request > 0) {
            DB::table('friend_requests')->where("sender_id", $id)->where("receiver_id", Auth::user()->id)->delete();

            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }


    public static function undo_request($id)
    {

        $request = DB::table('friend_requests')->where("sender_id", Auth::user()->id)->where("receiver_id", $id)->count();
        echo $request;
        if ($request > 0) {
            $data = DB::table('friend_requests')->where("sender_id", Auth::user()->id)->where("receiver_id", $id)->delete();

            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }


    public static function accept($id)
    {

        DB::insert('insert into friend_lists (friend1,friend2) values (?, ?)', [Auth::user()->id, $id]);

        $request = DB::table('friend_requests')->where("sender_id", $id)->where("receiver_id", Auth::user()->id)->count();

        if ($request > 0) {
            DB::table('friend_requests')->where("sender_id", $id)->where("receiver_id", Auth::user()->id)->delete();

            return redirect()->back();
        } else {
            return redirect()->back();
        }

    }

    public static function delete($id)
    {


        $request = DB::table('friend_lists')->where("friend1", $id)->where("friend2", Auth::user()->id)->count();

        if ($request > 0) {
            DB::table('friend_lists')->where("friend1", $id)->where("friend2", Auth::user()->id)->delete();

        }

        $request = DB::table('friend_lists')->where("friend2", $id)->where("friend1", Auth::user()->id)->count();
        if ($request > 0) {
            {
                $request = DB::table('friend_lists')->where("friend2", $id)->where("friend1", Auth::user()->id)->delete();
            }


        }
        return redirect()->back();

    }


    public static function friend_list($id)
    {

        $page = "friendlist";

        $reques1 = DB::table('friend_lists')->where("friend1", $id)->get();
        $request2 = DB::table('friend_lists')->where("friend2", $id)->get();

        $request = array_merge($reques1->toArray(), $request2->toArray());
        $request = collect($request)->sortDesc()->all();


        $user = self::Userdata($id);
        return view('user.friend_list', ['user' => $user, "page" => $page, "friend_list" => $request]);


    }

    public static function get_id($id)
    {
        $user = self::Userdata($id);


        return view('user.request_button', ['user_id' => $id, 'user' => $user]);

    }

    public static function friend_count($id)
    {
        $size = DB::table('friend_lists')->where("friend1", $id)->count() + DB::table('friend_lists')->where("friend2", $id)->count();

        return $size;}
}
