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
    return Inertia::render('Users', [
        'time' => now()->toString()
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});
