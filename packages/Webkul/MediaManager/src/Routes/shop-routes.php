<?php

use Illuminate\Support\Facades\Route;
use Webkul\MediaManager\Http\Controllers\Shop\MediaManagerController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'mediamanager'], function () {
    Route::get('', [MediaManagerController::class, 'index'])->name('shop.mediamanager.index');
});