<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\city;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class CarController extends Controller
{
    private $users;

    public function __construct(){
        $this->users = User::get();
    }

    public function listCar(Request $request)
    {

        $cities = city::orderBy('ville', 'ASC')->get();
        $brands = Brand::orderBy('brand', 'ASC')->get();
 
        $cars = Car::orderBy('created_at', 'DESC')
                     ->where('published' , 1)
                        ->paginate(20);
        return view('car.list' , compact('cars'))
        ->with('cities', $cities)
        ->with('brands', $brands);
    }

    public function listCarNonValidate()
    {

        $cities = city::orderBy('ville', 'ASC')->get();
        $brands = Brand::orderBy('brand', 'ASC')->get();
 
        $cars = Car::orderBy('created_at', 'ASC')
                ->where('published', 0)
                ->paginate(20);

        return view('car.listNonValide' , compact('cars'));
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



    public function validateCar(Car $car)
    {
        return view('car.valid', [
            'car' => $car,
            'carInfo' => $car->carInfo,
        ]);
    }
    public function publierCar(Request $request,Car $car)
    {   
        if ($car->published === 1 ) {
            $car->update(['published' => 0]);
        }else{
            $car->update(['published' => 1]);
        }
        return redirect()->back();
    }


    public function countUsers(){

        for ($i=0; $i<=6; $i++) {
            $dates[] = Carbon::now()->subDays($i)->format('Y-m-d');
         }
         
         $data = User::whereIn('created_at', $dates)
                 ->groupBy('date')
                 ->orderBy('date', 'ASC')
                 ->get(array(
                      DB::raw('Date(created_at) as date'),
                      DB::raw('COUNT(*) as "count"')
                   ))
         ->keyBy('date');
         return view ('dashboard', array('dates' => $dates, 'data' => $data));

    }

    public function showCar($id)
    {
        $car = Car::find($id);
        if (!isset($car)) {
            return redirect()->back();
        }
        return view('car.car-info', compact('car'));
    }



}