<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Uploaddemene extends Component
{
    use WithFileUploads;

    public $like  = 1;
    public $photos = [];

    public function inc()
    {
        $this->like = intval($this->like) * 2;
    }

    public function save()
    {
        $this->validate([
            'photos.*' => 'image|max:1024', // 1MB Max
        ]);



    }

    public function render()
    {      $this->dispatchBrowserEvent('name-updated'   );
        return view('livewire.uploaddemene');
    }
}
