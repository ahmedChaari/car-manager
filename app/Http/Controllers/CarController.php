<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class CarController extends Controller
{
    private $users;

    public function __construct(){
        $this->users = User::get();
    }

    public function listCar(Request $request)
    {
        $cars = Car::orderBy('created_at', 'DESC')
        
                        ->paginate(10);
        return view('car.list' , compact('cars'))
        ->with('users', $this->users);
    }

    public function careSearch(Request $request)
    {

    $carSearch = Car::when($request->filled('brand'), function ($query) use ($request) {
            return $query->where('brand', $request->brand);
            })->when($request->filled('model'), function ($query) use ($request) {
                return $query->orWhere('model', $request->model);
            })->when($request->filled('city'), function ($query) use ($request) {
                return $query->orWhere('city', $request->city);
            })->when($request->filled('condition_car'), function ($query) use ($request) {
                return $query->orWhere('condition_car', $request->condition_car);
            })->when($request->filled('origin'), function ($query) use ($request) {
                return $query->orWhere('origin', $request->origin);
            })->when($request->filled('fuel'), function ($query) use ($request) {
                return $query->orWhere('fuel', $request->fuel);
            })->when($request->filled('mileage'), function ($query) use ($request) {
                return $query->orWhere('mileage', $request->mileage);
            })
        ->paginate(10);
            
            return view('car.search' , compact('carSearch'));
        
    }

}