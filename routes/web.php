<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\RoleController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('dashboard', RoleController::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('bookmarks', [BookmarkController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('bookmarks.index');

Route::post('bookmarks/{role}', [BookmarkController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('bookmarks.store');

Route::delete('bookmarks/{role}', [BookmarkController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('bookmarks.destroy');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__ . '/auth.php';
