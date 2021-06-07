<?php

namespace App\Http\Livewire;

use App\Models\comments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Searchbar extends Component
{
    public $search;
    public $result;
    public $name;
    public $surname;
    public $explode;

    public function render()
    {


        if (strlen($this->search)>=2) {
            $this->name = DB::table('users')->where('name', 'like', '%' . $this->search . '%')->get();

            $this->surname = DB::table('users')->where('surname', 'like', '%' . $this->search . '%')->get();

            $this->result =array_merge($this->name->toArray(), $this->name->toArray());

            $this->explode = explode(" ", trim($this->search));

            foreach ($this->explode as $item) {
                $this->name = DB::table('users')->where('name', 'like', '%' . $item . '%')->get();

                $this->result = array_merge($this->result, $this->name->toArray());
            }

            foreach ($this->explode as $item) {
                $this->surname = DB::table('users')->where('surname', 'like', '%' . $item . '%')->get();

                $this->result = array_merge($this->result, $this->surname->toArray());
            }
       $this->result=array_unique($this->result, SORT_REGULAR);
        }

        return view('livewire.searchbar');
    }
}
