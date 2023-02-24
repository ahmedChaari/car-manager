<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//car route
Route::get('/car',   [CarController::class, 'listCar'])   ->name('car.list') ->middleware('auth');
Route::post('/car/search',[CarController::class, 'careSearch'])->name('car.search')->middleware('auth');

//user
Route::get('/listUser',[UserController::class, 'listUser'])->name('user.list')->middleware('auth');

//payment for order route
Route::get('/payment',        [OrderController::class, 'listPayment'])->name('order.list')      ->middleware('auth');
Route::post('/deletePayment/{id}',[OrderController::class, 'deletePayment'])->name('payment.delete')->middleware('auth');
Route::put('/updateOrder/{order}',[OrderController::class, 'updateOrder'])->name('order.update')->middleware('auth');

// create new sallers
Route::get('/create',             [SellerController::class, 'create'])->name('sellers.create');

//order