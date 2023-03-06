<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CompletCarInformationsController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserController;
use App\Models\Brand;
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
    $brands = Brand::orderBy('brand', 'ASC')->get();

    return view('auth.login' ) ->with('brands', $brands);
});

Route::get('/car/info/{id}', [CarController::class, 'showCar'])->name('car.info')->middleware('auth');


Route::get('/dashboard',        [dashboardController::class, 'dashboard'])   ->name('dashboard') ->middleware('auth');

require __DIR__.'/auth.php';


//car route
Route::get('/car',        [CarController::class, 'listCar'])   ->name('car.list') ->middleware('auth');
Route::post('/car/search',[CarController::class, 'careSearch'])->name('car.search')->middleware('auth');
Route::get('/car/valid', [CarController::class, 'listCarNonValidate'])->name('car.valid')->middleware('auth');



Route::put('/publier/car/{car}',    [CarController::class, 'publierCar'])->name('car.publier')->middleware('auth');

Route::get('/car/valid/{car}', [CarController::class, 'validateCar'])->name('car.validCar')->middleware('auth');

//user
Route::get('/vendeurs',    [UserController::class, 'listUser'])->name('user.list')->middleware('auth');
Route::get('/acheteurs',   [UserController::class, 'listAcheteurs'])->name('user.acheteur')->middleware('auth');
Route::get('/deleteUser/{id}',   [UserController::class, 'deleteUser'])->name('user.delete')->middleware('auth');

// Route::get('/deletePayment/{id}',[OrderController::class, 'deletePayment'])->name('payment.delete')->middleware('auth');


//payment for order route
Route::get('/payment',            [OrderController::class, 'listPayment'])->name('order.list')      ->middleware('auth');
Route::get('/deletePayment/{id}',[OrderController::class, 'deletePayment'])->name('payment.delete')->middleware('auth');
Route::put('/updateOrder/{id}',[OrderController::class, 'updateOrder'])->name('order.update')->middleware('auth');

Route::get('/supply',             [OrderController::class, 'listSupply'])->name('supply.list')      ->middleware('auth');



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
    Route::post('{id}/publish-car', 'publishCar')->name('publish-car');
    Route::post('{id}/unpublish-car', 'unpublishCar')->name('unpublish-car');
    Route::post('{id}/save-draft', 'saveDraft')->name('save-draft');
    Route::get('valiation', 'showValidation')->name('validation');
});
