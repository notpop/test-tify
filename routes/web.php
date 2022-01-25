<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('register', [RegisterController::class, 'index']);
Route::post('register', [RegisterController::class, 'store']);

Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Route::get('mypage', [MypageController::class, 'index'])->name('mypage');
    // Route::get('mypage/posts/create', [MypageController::class, 'create'])->name('post.create');
    // Route::post('mypage/posts/create', [MypageController::class, 'store']);
    // Route::get('mypage/posts/{post}/edit', [MypageController::class, 'edit'])->name('post.edit.show');
    // Route::post('mypage/posts/{post}/edit', [MypageController::class, 'update'])->name('post.update');
    // Route::delete('mypage/posts/{post}/delete', [MypageController::class, 'destroy'])->name('post.delete');
});
