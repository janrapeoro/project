<?php

use App\Http\Controllers\FinanceController;
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

Route::group(['middleware' => 'auth'], function () {
    Route::resource('alerts', AlertController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/bills/create', function () {
        return view('create.bills');
    })->name('bills.create');
    
    Route::post('/bills/store', [FinanceController::class, 'store'])->name('bills.store');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/create', [FinanceController::class, 'index'])->name('create.index');

});




// Route::get('/bills/create', [FinanceController::class, 'create'])->name('bills.create');
// Route::resource('create', FinanceController::class);

Route::get('/finance/{finance}', [FinanceController::class, 'show'])->name('finance.show');
Route::delete('/finance/{finance}', [FinanceController::class, 'destroy'])->name('finance.destroy');
Route::get('/finance/edit/{finance}', [FinanceController::class, 'edit'])->name('finance.edit');
Route::put('/finance/update/{finance}', [FinanceController::class, 'update'])->name('finance.update');




// Route::get('/expense-tracking', function () {
//     return view('features.expense-tracking');
// });

// Route::get('/financial-analysis', function () {
//     return view('features.financial-analysis');
// });

// Route::get('/financial-goals', function () {
//     return view('features.financial-goals');
// });

// Route::get('/finance-reminder-customization', function () {
//     return view('features.finance-reminder-customization');
// });



