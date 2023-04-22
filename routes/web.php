<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// routes/web.php

Route::middleware(['auth'])->group(function () {
    Route::get('/finance-alerts', function () {
        return view('finance-alerts');
    })->name('finance-alerts');

    Route::post('/notifications', [\App\Http\Controllers\NotificationController::class, 'store'])
        ->name('notifications.store');
});


Route::get('/expense-tracking', function () {
    return view('expense-tracking');
});

Route::get('/financial-analysis', function () {
    return view('financial-analysis');
});

Route::get('/financial-goals', function () {
    return view('financial-goals');
});

Route::get('/finance-reminder-customization', function () {
    return view('finance-reminder-customization');
});


