<?php

use App\Http\Controllers\AdminComponentController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\CreatorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/components', [ComponentController::class, 'index'])->name('components.index'); // This is the public component route

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'role:creator'])->group(function () {
    Route::get('/creator/dashboard', [CreatorController::class, 'dashboard'])->name('creator.dashboard');
    Route::get('/creator/create', [CreatorController::class, 'create'])->name('creator.create');
    Route::post('/creator/store', [CreatorController::class, 'store'])->name('creator.store');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/components', AdminComponentController::class)->names([
        'index' => 'admin.components.index', // Renamed to 'admin.components.index'
        'create' => 'admin.components.create',
        'store' => 'admin.components.store',
        'show' => 'admin.components.show',
        'edit' => 'admin.components.edit',
        'update' => 'admin.components.update',
        'destroy' => 'admin.components.destroy',
    ]);
});

