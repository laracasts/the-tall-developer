<?php

namespace App\Livewire;

use App\Models\Role;
use Livewire\Component;

class RolesList extends Component
{
    public $roles = [];
    public string $type = 'all';

    public function mount()
    {
        if ($this->type == "bookmarked") {
            $this->roles = auth()->user()->bookmarkedRoles;
            return;
        }
        $this->roles = Role::all();
    }

    public function toggleBookmark($role_id)
    {
        auth()->user()->bookmarkedRoles()->toggle($role_id);
        if ($this->type == "bookmarked") {
            $this->roles = auth()->user()->bookmarkedRoles;
        }
    }

    public function render()
    {
        return view('livewire.roles-list');
    }
}
