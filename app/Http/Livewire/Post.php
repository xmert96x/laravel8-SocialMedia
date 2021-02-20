<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Encryption\Encrypter;

class Post extends Component
{
public    $message="-1";
Public    $user;
Public    $Post;
public  $media;
public function return($id){
$this->message=$id;

}


public function likes($like,$id){
     $like=$like+1;
    DB::table('posts')->where('id', $id)->update(array('likes' => $like));

}



    public function render()
    {



        $this->Post=DB::table('posts')->where("author", $this->message)->orderBy("id","DESC")->get();

        return view('livewire.post',['post'=>$this->Post,'media'=>$this->media]);
    }
}
