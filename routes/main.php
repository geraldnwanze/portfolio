<?php

use App\Models\PageSetting;
use Illuminate\Support\Facades\Route;

Route::view('/', 'main.index', ['setting' => PageSetting::where('page', 'home')->first()])->name('index');
