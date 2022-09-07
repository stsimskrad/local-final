<?php

use Illuminate\Support\Facades\Route;
use Spatie\WelcomeNotification\WelcomesNewUsers;
use App\Http\Controllers\Auth\WelcomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\NewPasswordController;

Route::group(['middleware' => ['web', WelcomesNewUsers::class,]], function () {
    Route::get('welcome/{user}', [WelcomeController::class, 'showWelcomeForm'])->name('welcome');
    Route::post('welcome/{user}', [WelcomeController::class, 'savePassword']);
});

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');

Route::prefix('sync')->group(function(){
    Route::get('/addresses/{type}/{category}', [App\Http\Controllers\SyncController::class, 'addresses']);
    Route::get('/lists/{type}/{category}', [App\Http\Controllers\SyncController::class, 'lists']);
    Route::get('/schools/{type}/{category}/{agency?}', [App\Http\Controllers\SyncController::class, 'schools']);
});

Route::prefix('lists')->group(function(){
    Route::controller(App\Http\Controllers\ListController::class)->group(function () {
        Route::get('/','index');
        Route::get('/provinces/{code}', 'provinces');
        Route::get('/municipalities/{code}', 'municipalities');
        Route::get('/barangays/{code}', 'barangays');
        Route::get('/subcourses/{school}/{course}', 'subcourses');
        Route::get('/semester/{id}/{year}', 'semesteryear');

        Route::prefix('search')->group(function(){
            Route::post('/schools', 'schools');
            Route::post('/courses', 'courses');
            Route::post('/scholars', 'scholars');
        });
    });
});