<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Sortusertable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public    $sort            = "id";
    public    $dir             = "asc";

    public function click($field)
    {
        if ($this->sort == $field) {
            if ($this->dir == "desc") {
                $this->dir = "asc";
            } else {
                $this->dir = "desc";
            }

        }

        $this->sort = $field;
        $this->resetPage();

    }


    public function render()
    {


        return view('livewire.sortusertable', [
            'userlist' => User::orderBy($this->sort, $this->dir)->paginate(10, ['*'], "sayfa")
        ]);
    }
}
