<?php

// routes/web.php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

// routes for create, edit, and delete actions

Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);
?>
