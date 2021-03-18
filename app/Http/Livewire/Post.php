<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Post extends Component
{
    public $Userid;
    public $user;
    public $Post;
    public $media;
    public $like;
    public $x = 12;
    public $text=[];
    public $file;

    public function likes($like, $id)
    {

        $this->like = DB::table('posts')->where('id', $id)->first();
        $this->like = intval($this->like->likes) + 1;
        $like = $this->like;
        DB::table('posts')->where('id', $id)->update(array('likes' => $like));

    }

    public function comments($x)
    {
        $this->x = $x;
        $this->x++;
    }

    public function mount($user)
    {
        $this->Userid = $user['id'];

    }

    public function render()
    {

        $this->Post = DB::table('posts')->where("author", $this->Userid)->orderBy("id", "DESC")->get();


        return view('livewire.post');
    }
}
