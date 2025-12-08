<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home',
        [
            'name' => 'John Doe',
            'frameworks' => ['laravel', 'sass', 'vue'],
        ]);
});

Route::get('/users', function () {

//    dd(\App\Models\User::select('id','name')->paginate(10));
    return Inertia::render('Users', [
        'users' => \App\Models\User::select('id','name')->paginate(10)
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});
