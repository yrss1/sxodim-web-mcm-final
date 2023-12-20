<?php

use Illuminate\Support\Facades\Route;

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


//Route::get('/', [\App\Http\Controllers\PageController::class, 'main'])->name('main');
//Route::get('/tickets', [\App\Http\Controllers\PageController::class, 'tickets'])->name('tickets');

Route::get('/cabinet', [\App\Http\Controllers\PageController::class, 'cabinet'])->name('cabinet');
Route::get('/events', [\App\Http\Controllers\EventController::class, 'index'])->middleware('auth')->name('event.index');
Route::get('/events/{event}', [\App\Http\Controllers\EventController::class, 'show'])->middleware('auth')->name('event.show');
Route::post('/events/search',[\App\Http\Controllers\EventController::class, 'search'])->middleware('auth')->name('events.search');


Route::get('/events/{event}/payments', [\App\Http\Controllers\PageController::class, 'paymentsShow'])->name('payments.show');
Route::get('/certificates', [\App\Http\Controllers\PageController::class, 'cert'])->name('cert.index');
Route::post('/certificates', [\App\Http\Controllers\PageController::class, 'setCert'])->name('cert');

Route::post('/ticket',[\App\Http\Controllers\TicketController::class, 'store'])->name('ticket.store');
Route::post('/return-ticket', [\App\Http\Controllers\TicketController::class, 'destroy'])->name('ticket.delete');


Route::get('/auth', [\App\Http\Controllers\auth\LoginController::class, 'index'])->name('auth');
Route::post('/auth', [\App\Http\Controllers\auth\LoginController::class, 'store']);

Route::get('/logout', [\App\Http\Controllers\auth\LoginController::class, 'destroy'])->name('logout');

Route::get('/register', [\App\Http\Controllers\auth\RegisterController::class, 'index'])->name('register');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store']);
