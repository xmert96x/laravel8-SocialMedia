<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dene extends Component

{
    public $test;
    public $request;
    public $direction;
    public $result = [];
    public $explode;
    public $search;

    public function mount($item, $direction)
    {
        $this->request = $item;
        $this->search = $item;
        $this->direction = $direction;
    }

    public function sort()
    {
        if (strlen($this->search) >= 2) {
            $this->name = DB::table('users')->where('name', 'like', '%' . $this->search . '%')->get();

            $this->surname = DB::table('users')->where('surname', 'like', '%' . $this->search . '%')->get();

            $this->result = array_merge($this->name->toArray(), $this->name->toArray());

            $this->explode = explode(" ", trim($this->search));

            foreach ($this->explode as $item) {
                $this->name = DB::table('users')->where('name', 'like', '%' . $item . '%')->get();

                $this->result = array_merge($this->result, $this->name->toArray());
            }

            foreach ($this->explode as $item) {
                $this->surname = DB::table('users')->where('surname', 'like', '%' . $item . '%')->get();

                $this->result = array_merge($this->result, $this->surname->toArray());
            }
            $this->result = array_unique($this->result, SORT_REGULAR);
        }
    }

    public function sort1()
    {
        if (strlen($this->search) >= 2) {
            $this->explode = explode(" ", trim($this->search));

            foreach ($this->explode as $item) {
                $this->name = DB::table('users')->where('name', 'like', '%' . $item . '%')->get();

                $this->result = array_merge($this->result, $this->name->toArray());
            }
            $this->name = DB::table('users')->where('name', 'like', '%' . $this->search . '%')->get();

            $this->surname = DB::table('users')->where('surname', 'like', '%' . $this->search . '%')->get();

            $this->result = array_merge($this->name->toArray(), $this->name->toArray());


            foreach ($this->explode as $item) {
                $this->surname = DB::table('users')->where('surname', 'like', '%' . $item . '%')->get();

                $this->result = array_merge($this->result, $this->surname->toArray());
            }
            $this->result = array_unique($this->result, SORT_REGULAR);
        }
    }

    public function sort2($edam)
    {
        $this->test = $edam;
        if (strlen($this->search) >= 2) {
            $this->explode = explode(" ", trim($this->search));
            foreach ($this->explode as $item) {
                $this->surname = DB::table('users')->where('surname', 'like', '%' . $item . '%')->get();

                $this->result = array_merge($this->result, $this->surname->toArray());
            }
            $this->result = array_unique($this->result, SORT_REGULAR);
            $this->name = DB::table('users')->where('name', 'like', '%' . $item . '%')->get();

            $this->surname = DB::table('users')->where('surname', 'like', '%' . $item . '%')->get();

            $this->result = array_merge($this->name->toArray(), $this->name->toArray());


            foreach ($this->explode as $item) {
                $this->name = DB::table('users')->where('name', 'like', '%' . $item . '%')->get();

                $this->result = array_merge($this->result, $this->name->toArray());
            }


        }

    }


    public function render()
    {
        return view('livewire.dene');
    }
}
