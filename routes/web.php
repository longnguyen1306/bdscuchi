<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')
    ->controller(\App\Http\Controllers\Admin\indexController::class)
    ->middleware(['auth.admin', 'admin.role:admin'])
    ->group(function () {
    Route::get('/', 'index')->name('admin.index');
    Route::prefix('nguoi-dung-va-quyen')->group(function () {
        Route::prefix('danh-sach-nguoi-dung')->controller(\App\Http\Controllers\Admin\AdminUserController::class)->group(function () {
            Route::get('/', 'index')->name('admin.nguoi_dung.index');
            Route::get('edit/{id}', 'edit')->name('admin.nguoi_dung.edit');
            Route::post('update/{id}', 'update')->name('admin.nguoi_dung.update');
            Route::get('delete/{id}', 'destroy')->name('admin.nguoi_dung.destroy');
        });
        Route::prefix('quyen')->controller(\App\Http\Controllers\Admin\AdminRoleController::class)->group(function () {
            Route::get('/', 'index')->name('admin.quyen.index');
            Route::get('edit/{id}', 'edit')->name('admin.quyen.edit');
            Route::post('update/{id}', 'update')->name('admin..update');
        });
    });
});
Route::get('admin/login', [\App\Http\Controllers\Admin\AdminAuthController::class, 'login'])->name('admin.login');
Route::post('admin/login-submit', [\App\Http\Controllers\Admin\AdminAuthController::class, 'loginSubmit'])->name('admin.login_submit');
Route::get('admin/logout', [\App\Http\Controllers\Admin\AdminAuthController::class, 'logout'])->name('admin.logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
