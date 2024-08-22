<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\storyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('users')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
});


Route::middleware('auth:sanctum')->group(function () {
    //Competence
    Route::prefix('users')->group(function () {
        Route::get('/', [AuthController::class, 'getUser']);
    });

    Route::prefix('story')->group(function () {
        Route::get('/', [storyController::class, 'getStoryLock']);
    });
});

Route::post('/update-payment-status/{number}/{userId}/{orderName}', [PaymentController::class, 'updatePaymentStatus']);
Route::post('/update-payment-status-pending', [PaymentController::class, 'updatePaymentStatusPending']);
