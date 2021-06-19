<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Changerole extends Component
{
    public $test   = [];
    public $count  = 1;
    public $deneme = 0;
    public $id2;
    public $user;

    public function mount($id)
    {
        $this->id2 = $id;

    }


    public function start()
    {

        $this->user = DB::table("users")->where("id", "$this->id2")->get();

        if ($this->user[0]->role == 1) {
            $this->test[0] = "active";

        }
        if ($this->user[0]->role == 0) {
            array_pop($this->test);

        }
    }

    public function click()
    {
        $this->start();
        if ($this->user[0]->role == 1) {
            DB::table('users')
                ->where('id', $this->id2)
                ->update(['role' => 0]);
            if (\Auth::user()->id == $this->id2) {
              return redirect("admin/userlist");
        }}
        if ($this->user[0]->role == 0) {

            DB::table('users')
                ->where('id', $this->id2)
                ->update(['role' => 1]);

        }

        $this->start();


    }

    public function render()
    {
        $this->start();
        return view('livewire.changerole');
    }
}
