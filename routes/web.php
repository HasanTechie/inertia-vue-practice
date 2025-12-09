<?php

use App\Models\User;
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
        'users' => User::query()
            ->when(request('search'), function ($query, $search) {
                $query->where('name', 'LIKE', "%{$search}%");
            })
            ->select('id', 'name')
            ->paginate(10)
            ->withQueryString(),
        'filters' => Request::only('search')
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});
