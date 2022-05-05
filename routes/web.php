<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')
    ->controller(\App\Http\Controllers\Admin\indexController::class)
    ->middleware('auth.admin')
    ->group(function () {
    Route::get('/', 'index')->name('admin.index');
});
Route::get('admin/login', [\App\Http\Controllers\Admin\AdminAuthController::class, 'login'])->name('admin.login');
Route::post('admin/login-submit', [\App\Http\Controllers\Admin\AdminAuthController::class, 'loginSubmit'])->name('admin.login_submit');
Route::get('admin/logout', [\App\Http\Controllers\Admin\AdminAuthController::class, 'logout'])->name('admin.logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
