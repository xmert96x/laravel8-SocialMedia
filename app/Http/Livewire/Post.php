<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Post extends Component
{
    use WithFileUploads;

    public $Userid;
    public $user;
    public $Post;
    public $media;
    public $like;
    public $x      = 12;
    public $text;
    public $file;
    public $imglist2;
    public $scroll ;


    public $rand;

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

    public function mount($item, $user)
    {
        $this->Userid = $item->id;
        $this->dispatchBrowserEvent('name-updated2', ['itemid' => $this->Userid]);
    }

    public function render()
    {


        $this->rand = rand(5, 15);
        $this->dispatchBrowserEvent('name-updated', ['itemid' => $this->Userid]);

        $this->Post = DB::table('posts')->where("id", $this->Userid)->first();
        $this->Post = json_decode(json_encode($this->Post), true);

        return view('livewire.post');
    }
}
