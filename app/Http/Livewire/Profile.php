<?php

namespace App\Http\Livewire;


use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{ use WithFileUploads;
    public $name;
    public $email;
    public $email2;
public $x=0;
public $users;
public $count;
public $all;
public $count2=0;
public $file;
    public function submit()
    { $this->count =  DB::table ('users')->count();
$this->count+=(3-$this->count%3);
        $this->users =  DB::table ('users')->skip($this->x)->take(3)->get();
        if($this->x<$this->count){
            $this->x+=3;

        if(isset($this->users)) foreach($this->users as $user)  {$this->count2+=1; $this->all.=$this->count2." ".$user->name; $this->all.="</br>";}

        }
    }



    public function file(){

 return $this->file;
    }
    public function render()
    {
        return view('livewire.profile');
    }
}
