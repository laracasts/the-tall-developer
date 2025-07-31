<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookmarks = auth()->user()->bookmarkedRoles;
        return view('bookmarks', ['roles' => $bookmarks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Role $role)
    {
        auth()->user()->bookmarkedRoles()->attach($role);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        auth()->user()->bookmarkedRoles()->detach($role);
        return back();
    }
}
