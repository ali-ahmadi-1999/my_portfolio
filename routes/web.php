<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {


    Route::get('/dashboard', function () {
    return view('admin.pages.index');
})->middleware(['verified'])->name('dashboard');


    Route::get('admin-logout', [AdminController::class , 'Adminlogout'])->name('admin.logout');
    Route::get('admin-edit-profile', [AdminController::class , 'AdminEditProfile'])->name('admin.edit.profile');
    Route::post('admin-update-profile', [AdminController::class , 'AdminUpdateProfile'])->name('admin.update.profile');




});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
