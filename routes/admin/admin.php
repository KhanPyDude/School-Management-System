<?php

// admin routes

use App\Http\Controllers\Admin\AdminController;

Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin-logout');

