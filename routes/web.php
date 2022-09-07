<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return inertia('Welcome');});
Route::get('/search', function () {return inertia('Search');});

Route::middleware(['role:Super Administrator','auth'])->group(function () {
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('downloads', App\Http\Controllers\DownloadController::class);
    Route::get('/logs', function () {  return inertia('Logs/Index'); });
});

Route::middleware(['role:Scholarship Coordinator, Scholarship Staff','auth'])->group(function () {
    Route::resource('qualifiers', App\Http\Controllers\Qualifier\IndexController::class);
    Route::resource('scholars', App\Http\Controllers\Scholar\IndexController::class);
    Route::get('/scholars/{id}/{type}', [App\Http\Controllers\Scholar\ProfileController::class, 'index']);
    Route::get('/scholar/show', [App\Http\Controllers\Scholar\ProfileController::class, 'show']);
    Route::get('/scholar/tracer', [App\Http\Controllers\Scholar\TraceController::class, 'index']);
    Route::get('/scholar/generate/{array}', [App\Http\Controllers\Scholar\ReportController::class, 'generate']);
    Route::post('/scholar/tracer/store', [App\Http\Controllers\Scholar\TraceController::class, 'store']);
    Route::resource('benefits2', App\Http\Controllers\Scholar\Benefit\Group2Controller::class);
    Route::resource('enrollments', App\Http\Controllers\Scholar\Enrollment\IndexController::class);
    Route::resource('accounting', App\Http\Controllers\Accounting\IndexController::class);
    Route::resource('benefits3', App\Http\Controllers\Scholar\Benefit\Group3Controller::class);
    Route::resource('reimbursements', App\Http\Controllers\Scholar\Benefit\ReimbursementController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('schools', App\Http\Controllers\SchoolController::class);
    Route::resource('events', App\Http\Controllers\EventController::class);

    Route::resource('monitoring', App\Http\Controllers\MonitoringController::class);

   


    Route::resource('benefits', App\Http\Controllers\Scholar\Benefit\GroupController::class);

    Route::post('/grade/store', [App\Http\Controllers\Scholar\Evaluation\IndexController::class, 'store']);

    Route::get('/reports', [App\Http\Controllers\Scholar\ReportController::class, 'index']);
    Route::get('/gege', [App\Http\Controllers\Home\IndexController::class, 'gege']);
    Route::get('/home', [App\Http\Controllers\Home\IndexController::class, 'index']);

    Route::get('/insights', [App\Http\Controllers\Insight\IndexController::class, 'index']);

    Route::prefix('excel')->group(function(){
        Route::post('/qualifier/import', [App\Http\Controllers\Qualifier\ImportController::class, 'index']);
        Route::post('/qualifier/store', [App\Http\Controllers\Qualifier\ImportController::class, 'store']);

        Route::post('/scholar/import', [App\Http\Controllers\Scholar\ImportController::class, 'index']);
        Route::post('/scholar/store', [App\Http\Controllers\Scholar\ImportController::class, 'store']);
    });
});

Route::prefix('public')->group(function(){
    Route::get('/lists', [App\Http\Controllers\Insight\PublicController::class, 'index']);
});

// Route::get('/scholars/dqOXep6an9/profile', function () {  return inertia('Scholars/View/Modules/Profile'); });
// Route::get('/scholars/dqOXep6an9/benefit', function () {  return inertia('Scholars/View/Modules/Benefit'); });

Route::get('/installation', function () {  return inertia('Home/Installation'); });
Route::get('/orientation', function () {  return inertia('Orientation/Index'); });
Route::get('/orientation/zdn', function () {  return inertia('Orientation/Zdn'); });

require __DIR__.'/auth.php';
require __DIR__.'/scholar.php';