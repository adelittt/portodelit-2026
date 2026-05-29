<?php

use App\Models\Profile;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/

// Rute utama yang bersih dan murni mengambil data dari database
Route::get('/', function () {
    $projects = Project::all();
    $profile = Profile::first(); // Mengambil baris profil pertama dari Filament

    return view('home', compact('projects', 'profile'));
});
