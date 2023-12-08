<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\AirlineController;

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

Route::get('/', function () {
    return view('main');
});

Route::get('/test', function() {
    return view('test');
});

Route::post('/saveTest', [TestController::class, 'store']);

//flight routes
Route::get('flights', [FlightController::class, 'index']);
Route::get('create-flight' ,[FlightController::class, 'create']);
Route::post('store-flight', [FlightController::class, 'store']);
Route::get('edit-flight/{id}', [FlightController::class, 'edit']);
Route::post('update-flight/{id}', [FlightController::class, 'update']);
Route::get('delete-flight/{id}', [FlightController::class, 'destroy']);


//airline routes
Route::get('airlines',[AirlineController::class, 'index']);
Route::get('create-airline' ,[AirlineController::class, 'create']);
Route::post('store-airline',[AirlineController::class, 'store']);
Route::get('edit-airline/{id}',[AirlineController::class, 'edit']);
Route::post('update-airline/{id}',[AirlineController::class, 'update']);
Route::get('delete-airline/{id}',[AirlineController::class, 'destroy']);


//ticket routes
Route::get('tickets', [TicketController::class, 'show']);
Route::get('edit-flights/{id}', [FlightController::class, 'edit']);
Route::post('create-flight', [FlightController::class, 'create']);
Route::post('update-flight/{id}', [FlightController::class, 'update']);

Route::get('user-details', function() {
    return view('tickets.user-details');
});

Route::get('card-details', function() {
    return view('tickets.card-details');
});

Route::get('book-ticket', function() {
    return view('tickets.ticket-confirmation');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search-flights', [App\Http\Controllers\HomeController::class, 'searchFlights']);
Route::post('/search-flights', [App\Http\Controllers\HomeController::class, 'searchFlights']);
Route::get('/book-flight',[App\Http\Controllers\TicketController::class, 'bookTicket']);
Route::post('/book-flight',[App\Http\Controllers\TicketController::class, 'bookTicket']);


// Group these routes under the 'auth' middleware to ensure only authenticated users can access them
Route::middleware(['auth'])->group(function () {
    // Regular user dashboard route
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('user.dashboard');

    // Admin dashboard route, protected by 'is_admin' middleware
    Route::get('/airlines', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard')->middleware('is_admin');
});
