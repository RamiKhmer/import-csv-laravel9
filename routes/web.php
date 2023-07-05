<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuCategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function(){
    Route::get('users', 'index');
    Route::get('users-export', 'export')->name('users.export');
    Route::post('users-import', 'import')->name('users.import');
});

Route::controller(MenuController::class)->group(function(){
    Route::get('menus', 'index');
    // Route::get('users-export', 'export')->name('users.export');
    Route::post('menus-import', 'import')->name('menus.import');
});


Route::controller(MenuCategoryController::class)->group(function(){
    Route::get('menu/cate', 'index');
    // Route::get('users-export', 'export')->name('users.export');
    Route::post('menus-cate-import', 'import')->name('menus.cate.import');
});