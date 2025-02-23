<?php

use Illuminate\Support\Facades\Route;
use Webkul\MediaManager\Http\Controllers\Admin\MediaManagerController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/mediamanager'], function () {
    Route::controller(MediaManagerController::class)->group(function () {
        Route::get('', 'index')->name('admin.mediamanager.index');
    });
});