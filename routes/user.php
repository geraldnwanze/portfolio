<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard.user.index')->name('index');
