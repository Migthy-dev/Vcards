<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class ManageUsers extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.admin.users.manage-users');
    }
}
