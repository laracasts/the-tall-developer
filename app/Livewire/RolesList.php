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
        $role = Role::find($role_id);

        if ($role->isBookmarkedBy(auth()->user())) {
            auth()->user()->bookmarkedRoles()->detach($role_id);
            $this->dispatch('show-toast', message: "Removed from Bookmarks");
        } else {
            auth()->user()->bookmarkedRoles()->attach($role_id);
            $this->dispatch('show-toast', message: "Added to Bookmarks");
        }

        if ($this->type == "bookmarked") {
            $this->roles = auth()->user()->bookmarkedRoles;
        }
    }

    public function render()
    {
        return view('livewire.roles-list');
    }
}
