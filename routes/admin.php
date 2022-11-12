<?php

use App\Http\Controllers\Dashboard\AdminController;
use App\Models\PageSetting;
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
    Route::group(['prefix' => 'page', 'as' => 'page.'], function () {
        Route::group(['prefix' => 'home', 'as' => 'home.'], function () {
            Route::get('/', [AdminController::class, 'preview'])->name('preview');
            Route::get('hero', [AdminController::class, 'hero'])->name('hero');
            Route::patch('hero/{pageSetting}', [AdminController::class, 'updateHero'])->name('update-hero');

            Route::get('features', [AdminController::class, 'features'])->name('features');
            Route::patch('features/{pageSetting}', [AdminController::class, 'updateFeatures'])->name('update-features');
        });
    });
});