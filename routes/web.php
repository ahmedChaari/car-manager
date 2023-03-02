<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CompletCarInformationsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserController;
use App\Models\city;
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
Route::get('/car',        [CarController::class, 'listCar'])   ->name('car.list') ->middleware('auth');
Route::post('/car/search',[CarController::class, 'careSearch'])->name('car.search')->middleware('auth');
Route::get('/car/valid', [CarController::class, 'listCarNonValidate'])->name('car.valid')->middleware('auth');

//user
Route::get('/vendeurs',    [UserController::class, 'listUser'])->name('user.list')->middleware('auth');
Route::get('/acheteurs',   [UserController::class, 'listAcheteurs'])->name('user.acheteur')->middleware('auth');


//payment for order route
Route::get('/payment',            [OrderController::class, 'listPayment'])->name('order.list')      ->middleware('auth');
Route::post('/deletePayment/{id}',[OrderController::class, 'deletePayment'])->name('payment.delete')->middleware('auth');
Route::put('/updateOrder/{order}',[OrderController::class, 'updateOrder'])->name('order.update')->middleware('auth');

// create new sallers
Route::get('/create',             [SellerController::class, 'create'])->name('sellers.create');

//cities


Route::controller(CompletCarInformationsController::class)->prefix('complet-car-information')->as('complet-car-information.')->group(function() {
    Route::get('{id}/step1', 'showStep1')->name('show-step1');
    Route::post('{id}/step1', 'storeStep1')->name('store-step1');
    Route::get('{id}/step2', 'showStep2')->name('show-step2');
    Route::post('{id}/step2', 'storeStep2')->name('store-step2');
    Route::get('{id}/step3', 'showStep3')->name('show-step3');
    Route::post('{id}/store-image', 'storeImage')->name('store-image');
    Route::post('{id}/step3', 'storeStep3')->name('store-step3');
    Route::get('{id}/publish', 'showPublishStep')->name('show-publish');
    Route::post('{id}/publish', 'publishOrDraftAction')->name('publish-or-draft');
    Route::get('valiation', 'showValidation')->name('validation');
});
