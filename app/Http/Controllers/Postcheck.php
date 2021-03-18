<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Postcheck extends Controller
{

    public function store(Request $request)
    {
        if (Auth::check()) {

            $delete = explode(",", $request->delete_1);
            print_r($delete);
            $array=[];


            $i = 0;
            foreach ($delete as $item) {

                if ($item != "") {

                    $array[$i] = $item;
                    $i++;
                }
            }
            print_r($array);



            $type = "";
            $files = [];
            $i = 0;

            if ($request->hasfile('input0')) {
                foreach ($request->file('input0') as $file) {
                    $temp = in_array($i, $array);
                    if (!$temp) {
                        echo $i . "\n";
                        $type = $file->extension();
                        $name = time() . rand(1, 100) . '.' . $file->extension();
                        $file->move(public_path('images'), $name);
                        $files[] = "images/" . $name;
                    }
                    $i++;
                }
            }
            $arr_tojson = json_encode($files);

            $Post = new Post();
            $Post->author = Auth::user()->id;
            $Post->type = $type;
            $Post->media = $arr_tojson;
            $Post->likes = 0;
            if (!empty($request->posttext)) {
                $Post->content = $request->posttext;
            }
            $Post->save();

            return redirect()->to('/profile/'.Auth::user()->id);

        } else {
            return abort(404);
        }

    }

    public function return()
    {

        header("Refresh:0");


    }

    public function deneme()
    {

        $array = DB::table('posts')->where("author", "12")->orderBy('id', 'desc')->first();
        $media = $array->media;
        $media = json_decode($media);
        foreach ($media as $img) {

            echo("<img src='" . $img . "' /><br>");
        }
    }
}
