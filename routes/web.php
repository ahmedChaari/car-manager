<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\OrderController;
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


Route::get('/listCar',[CarController::class, 'listCar'])->name('car.list')->middleware('auth');

Route::get('/listUser',[UserController::class, 'listUser'])->name('user.list')->middleware('auth');


//payment for order
Route::get('/listPayment',[OrderController::class, 'listPayment'])->name('order.list')->middleware('auth');
Route::get('/deletePayment/{id}',[OrderController::class, 'deletePayment'])->name('order.delete')->middleware('auth');


