<?php

namespace App\Http\Livewire;

use App\Models\comments;
use Illuminate\Support\Facades\Auth;
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
    public $text;
    public $file = [];
    public $files;
    public $imglist2;
    public $take = 5;
    public $images;
    public $comments;
    public $count;
    public $show = "unset";


    public function addcomments()
    {
            if ($this->take < $this->count) {
                $this->take += 5;

        }

    }

    public function likes($like, $id)
    {

        $this->like = DB::table('posts')->where('id', $id)->first();
        $this->like = intval($this->like->likes) + 1;
        $like = $this->like;
        DB::table('posts')->where('id', $id)->update(array('likes' => $like));

    }

    public function Savecommnets()
    {
        if (Auth::check() && (count($this->file) > 0 || !empty(trim($this->text)))) {
            if (count($this->file) > 0) {
                /*            foreach ($this->file as $file) {

                                $type = $file->extension();
                                $name = time() . rand(1, 100) . '.' . $file->extension();

                                $file->storeAs(public_path('images'), $name);
                                $files[] = "images/" . $name;

                            }
                 */
                /*   foreach ($this->file as $key => $image) {
                       $this->files[$key] = $image->store('images', 'public');
                   }
                   $this->files = json_encode($this->files);
   */
                foreach ($this->file as   $file) {


                    $this->files[] = $file->store('images', 'public');
                }
            }         $this->files = json_encode($this->files);
            $arr_tojson = json_encode($this->files);

            $Post = new comments();
            $Post->author = Auth::user()->id;
            $Post->type = 1;
            $Post->media = $arr_tojson;
            $Post->likes = 0;
            if (!empty($this->text)) {
                $Post->text = $this->text;
            }
            $Post->post_id = $this->Userid;
            $Post->save();

        }
        $this->text = "";
        $this->file = [];
    }


    public function mount($item, $user)
    {
        $this->Userid = $item->id;
    }


    public function render()
    {


        $this->rand = rand(5, 15);
        $this->dispatchBrowserEvent('name-updated', ['itemid' => $this->Userid]);

        $this->Post = DB::table('posts')->where("id", $this->Userid)->first();

        $this->Post = json_decode(json_encode($this->Post), true);
        $this->count = DB::TABLE("comments")->where("post_id", $this->Post["id"])->count();

        if ($this->take <= $this->count) {
            $this->comments = DB::TABLE("comments")->where("post_id", $this->Post["id"])->skip(0)->take(intval($this->take))->orderBy('id', 'desc')->get();
            $this->comments = json_decode(json_encode($this->comments), true);
        } else {
            $this->comments = DB::TABLE("comments")->where("post_id", $this->Post["id"])->skip(0)->take(intval($this->count))->orderBy('id', 'desc')->get();
            $this->show = "hidden";
            $this->comments = json_decode(json_encode($this->comments), true);
        }

        return view('livewire.post');
    }
}
