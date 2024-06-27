<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SnapController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/snap', [SnapController::class, 'index']);
Route::post('/snap/checkout', [SnapController::class, 'checkout']);

// Menambahkan pengecualian CSRF untuk route '/midtrans/webhook'
Route::post('/midtrans/webhook', [SnapController::class, 'notificationHandler'])
    ->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
Route::get('/history', function () {
        return view('history');
    })->name('history');








    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::prefix('user')->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('viewhome', [App\Http\Controllers\HomeController::class, 'viewhome'])->name('more');
        Route::get('viewhomenor', [App\Http\Controllers\HomeController::class, 'viewhomenor'])->name('noraebang');
        Route::get('viewhomebday', [App\Http\Controllers\HomeController::class, 'viewhomebday'])->name('birthday');
        Route::get('viewhomecompt', [App\Http\Controllers\HomeController::class, 'viewhomecompt'])->name('competition');
        Route::get('konten', [App\Http\Controllers\HomeController::class, 'konten'])->name('event');
        Route::get('history', [App\Http\Controllers\HomeController::class, 'history'])->name('history-page');
    });

    Route::get('login-user', [App\Http\Controllers\HomeController::class, 'sign_in'])->name('login');
    Route::get('register', [App\Http\Controllers\HomeController::class, 'register'])->name('daftar');
    Route::get('faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq-page');



// Route to display the checkout form (GET request)
Route::get('/checkout', [TransactionController::class, 'index'])->name('checkout');

// Route to process the checkout form submission (POST request)
Route::post('/checkout', [TransactionController::class, 'checkout'])->name('checkout.post');
// });

route::prefix('admin')
->middleware(['auth','admin'])
->group(function(){
        Route::get('/',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        // Route::get('event-page',[App\Http\Controllers\Admin\EventController::class, 'event'])->name('eventdetail');
        // Route::get('transaction',[App\Http\Controllers\Admin\EventController::class, 'transaction'])->name('transactionadmin');
        // Route::get('transaction',[App\Http\Controllers\Admin\EventController::class, 'transaction'])->name('transactionadmin');
        // Route::resouce('Events-data', [App\Http\Controllers\Admin\EventsController::class, 'index'])->name('events');
        Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index');

        Route::get('event-data',[App\Http\Controllers\Admin\EventsController::class, 'index'])->name('event-page');

        Route::post('add-event',[App\Http\Controllers\Admin\EventsController::class, 'store'])->name('add-data');
        Route::get('edit-event',[App\Http\Controllers\Admin\EventsController::class, 'update'])->name('edit-data');

});




Auth::routes(['verify'=>true]);




