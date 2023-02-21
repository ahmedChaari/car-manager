<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

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
}