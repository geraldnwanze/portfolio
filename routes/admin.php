<?php

use App\Http\Controllers\Dashboard\AdminController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard.admin.index')->name('index');

Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
    Route::get('/', [AdminController::class, 'users'])->name('index');
});

Route::group(['prefix' => 'staffs', 'as' => 'staffs.'], function () {
    Route::get('/', [AdminController::class, 'staffs'])->name('index');
});

Route::group(['prefix' => 'admins', 'as' => 'admins.'], function () {
    Route::get('/', [AdminController::class, 'admins'])->name('index');
});

Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
    Route::group(['prefix' => 'page', 'as' => 'page'], function () {
        Route::get('/', [AdminController::class, 'preview'])->name('index');
    });
});