<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'bookmarks');
    }

    public function isBookmarkedBy(User $user)
    {
        return $this->users()->where('user_id', $user->id)->exists();
    }
}
