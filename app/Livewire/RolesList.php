<?php

namespace App\Livewire;

use App\Models\Role;
use Livewire\Component;

class RolesList extends Component
{
    public $roles = [];
    public string $type = 'all';
    public string $search = '';

    public function mount()
    {
        if ($this->type == "bookmarked") {
            $this->roles = auth()->user()->bookmarkedRoles;
            return;
        }
        $this->roles = Role::all();
    }

    public function updatedSearch()
    {
        $query = Role::query();

        if ($this->type == "bookmarked") {
            $query->whereAttachedTo(auth()->user());
        }

        if ($this->search) {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                    ->orWhere('company', 'like', '%' . $this->search . '%')
                    ->orWhere('location', 'like', '%' . $this->search . '%')
                    ->orWhere('type', 'like', '%' . $this->search . '%');
            });
        }

        $this->roles = $query->get();
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
