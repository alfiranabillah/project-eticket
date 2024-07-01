<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SnapController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\TicketController;



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
    Route::get('faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq-page');



Route::prefix('admin')->group(function () {
    Route::get('/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
    Route::post('/register', [AdminAuthController::class, 'register']);

    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth:admin', 'is_admin'])->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index');
        Route::get('transaction', [App\Http\Controllers\Admin\EventController::class, 'transaction'])->name('transaction-page');
        Route::get('ticket', [App\Http\Controllers\Admin\EventController::class, 'ticket'])->name('ticket-page');
        Route::get('organizer', [App\Http\Controllers\Admin\EventController::class, 'organizer'])->name('organizer-page');

        Route::get('event-data', [EventsController::class, 'index'])->name('event-page');
        Route::post('add-event', [EventsController::class, 'store'])->name('add-data');
        Route::get('edit-event/{id}', [EventsController::class, 'edit'])->name('edit-data');
        Route::put('edit-event/{id}', [EventsController::class, 'update'])->name('update-data');
        Route::delete('delete-event/{id}', [EventsController::class, 'destroy'])->name('delete-data');
        
        Route::prefix('admin')->group(function () {
            Route::get('tickets', [TicketController::class, 'index'])->name('ticket-page');
            Route::get('tickets/create', [TicketController::class, 'create'])->name('create-ticket');
            Route::post('tickets', [TicketController::class, 'store'])->name('add-ticket');
            Route::get('tickets/{id}/edit', [TicketController::class, 'edit'])->name('edit-ticket');
            Route::put('tickets/{id}', [TicketController::class, 'update'])->name('update-ticket');
            Route::delete('tickets/{id}', [TicketController::class, 'destroy'])->name('delete-ticket');
        });
        


    });
});





Auth::routes(['verify'=>true]);
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');


