<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PriceController;

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

Route::get('/', function () {return view('welcome');});
// Route::get('/', function () {return view('maintenance');});
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('actionlogin', [AuthController::class, 'actionlogin'])->name('actionlogin');
Route::post('actionlogout', [AuthController::class, 'actionlogout'])->name('actionlogout');

Route::middleware(['auth', 'cekrole:administrator'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/edit-user/{id}', [DashboardController::class, 'edit'])->name('edituser');
    Route::post('/update-user/{id}', [DashboardController::class, 'update'])->name('updateuser');
    Route::post('/delete-user/{id}', [DashboardController::class, 'destroy'])->name('deleteuser');
    
    Route::get('/edit-price/{id}', [PriceController::class, 'edit'])->name('editeprice');
    Route::post('/update-price/{id}', [PriceController::class, 'update'])->name('updateprice');
    Route::get('/price', [PriceController::class, 'prices'])->name('price');
});

Route::middleware(['auth', 'cekrole:user'])->group(function () {
    Route::resource('orders', OrderController::class)->only(['index', 'show'])->names([
        'index' => 'orders.index',
        'show' => 'orders.show',
    ]);
});
Route::post('/update-payment-status', [PaymentController::class, 'updatePaymentStatus']);
