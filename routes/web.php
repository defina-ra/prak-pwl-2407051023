<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('user-management.index');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:dosen'])->group(function () {
    Route::get('/user-management', [UserManagementController::class, 'index'])->name('user-management.index');
    Route::get('/user-management/create', [UserManagementController::class, 'create'])->name('user-management.create');
    Route::post('/user-management', [UserManagementController::class, 'store'])->name('user-management.store');
    Route::put('/user-management/{id}', [UserManagementController::class, 'update'])->name('user-management.update');
    Route::delete('/user-management/{id}', [UserManagementController::class, 'destroy'])->name('user-management.destroy');
});