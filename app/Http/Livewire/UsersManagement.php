<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersManagement extends Component
{
    use WithPagination;

    public $action;
    public $user;


    public function render()
    {
        return view('livewire.users-management',[
            'users' => User::paginate(10),
        ]);
    }
}
