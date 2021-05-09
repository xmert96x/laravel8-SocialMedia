<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Comments extends Component
{
    use WithFileUploads;

    public $text;
    public $file;
    public $itemid;
    public $imglist2;
    public $scroll;

    public $rand;

    public function mount($item, $imglist2, $scroll)
    {
        $this->imglist2 = $imglist2;
        $this->scroll = $scroll;
        $this->itemid = $item["id"];
    }

    public function render()

    {$this->rand=rand(5,15);
        $this->dispatchBrowserEvent('loads', ['itemid' => $this->itemid]);
        return view('livewire.comments');
    }
}
