<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SnapController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\CustomerController;





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
        Route::get('edit-event/{id_event}', [EventsController::class, 'edit'])->name('edit-data');
        Route::put('edit-event/{id_event}', [EventsController::class, 'update'])->name('update-data');
        Route::delete('delete-event/{id_event}', [EventsController::class, 'destroy'])->name('delete-data');

         Route::get('ticket-data', [TicketController::class, 'index'])->name('ticket-page');
        Route::post('add-ticket', [TicketController::class, 'store'])->name('add-ticket');
        Route::get('edit-ticket/{id_ticket}', [TicketController::class, 'edit'])->name('edit-ticket');
        Route::put('edit-ticket/{id_ticket}', [TicketController::class, 'update'])->name('update-ticket');
        Route::delete('delete-ticket/{id_ticket}', [TicketController::class, 'destroy'])->name('delete-ticket');


        Route::get('admin-transaksi', [App\Http\Controllers\Admin\TransactionController::class, 'index'])->name('admin.transactions.index');
        Route::get('delete-transaksi/{id}', [App\Http\Controllers\Admin\TransactionController::class, 'destroy'])->name('delete-transactions');
       
        Route::get('admin-users', [App\Http\Controllers\Admin\CustomerController::class, 'index'])->name('admin.users.data');
        Route::post('add-user', [App\Http\Controllers\Admin\CustomerController::class, 'store'])->name('add-users');
        Route::get('edit-user/{id}', [App\Http\Controllers\Admin\CustomerController::class, 'edit'])->name('edit-users');
        Route::put('edit-user/{id}', [App\Http\Controllers\Admin\CustomerController::class, 'update'])->name('update-users');
        Route::get('delete-users/{id}', [App\Http\Controllers\Admin\CustomerController::class, 'destroy'])->name('delete-users');

        Route::get('organizer-data', [App\Http\Controllers\Admin\OrganizerController::class, 'index'])->name('organizer-page');
        Route::post('add-org', [App\Http\Controllers\Admin\OrganizerController::class, 'store'])->name('add-org');
        Route::get('edit-org/{id_organizers}', [App\Http\Controllers\Admin\OrganizerController::class, 'edit'])->name('edit-org');
        Route::put('edit-org/{id_organizers}', [App\Http\Controllers\Admin\OrganizerController::class, 'update'])->name('update-org');
        Route::get('delete-org/{id}', [App\Http\Controllers\Admin\OrganizerController::class, 'destroy'])->name('delete-org');
    });
    
    
});





Auth::routes(['verify'=>true]);
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');


