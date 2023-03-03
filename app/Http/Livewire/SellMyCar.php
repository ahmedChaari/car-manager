<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Car;
use Livewire\Component;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class SellMyCar extends Component
{
    // User Informations
    public $first_name;
    public $last_name;
    public $type_vendeur;
    public $email;
    public $tel;
    public $password;
    public $user_id;
    // Car Informations
    public $brand;
    public $model;
    public $date_car;
    public $mileage;
    public $gray_card_holder;
    public $gray_card_number;
    public $city;
    public $price;
    public $condition_car;
    public $car_id;
    // Steper Informations
    public $step = 1;
    public $is_finished = false;
    public $brands;

    public function step1() {
        $validatedData = $this->validate([
            'first_name' => ['required', 'string', 'min:3'],
            'last_name' => ['required', 'string', 'min:3'],
            'type_vendeur' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'tel' => ['required'],
            'password' => ['required', Rules\Password::defaults()],
        ]);
        $this->step++;
    }

    public function step2() {
        $validatedData = $this->validate([
            'brand' => 'required|string|min:3',
            'model' => 'required|string|min:1',
            'date_car' => 'required|min:4',
            'mileage' => 'required',
        ]);

        $this->step++;
    }

    public function step3() {
        $validatedData = $this->validate([
            'gray_card_holder' => 'required|string',
            'city' => 'required|string',
            'price' => 'required|numeric',
            'condition_car' => 'required',
        ]);
        $this->storeUser();
        $this->storeCar();
        $this->step++;
        $this->is_finished = true;
    }

    public function stepBack() {
        $this->step--;
    }

    public function storeUser() {
        $user = User::create([
            'first_name'    => $this->first_name,
            'last_name'     => $this->last_name,
            'email'         => $this->email,
            'type_vendeur'  => $this->type_vendeur,
            'tel'           => $this->tel,
            'password'      => Hash::make($this->password),
            'role_id'       => 2 // Seller Role ID
        ]);

        $this->user_id = $user->id;

        event(new Registered($user));

        Auth::login($user);
    }

    public function storeCar() {
        $car = Car::create([
            'brand'    => $this->brand,
            'model'    => $this->model,
            'date_car'    => $this->date_car,
            'mileage'    => $this->mileage,
            'gray_card_holder'    => $this->gray_card_holder,
            'gray_card_number'    => $this->gray_card_number,
            'city'    => $this->city,
            'price'    => $this->price,
            'condition_car'    => $this->condition_car,
            'user_id'       => $this->user_id,
        ]);

        $this->car_id = $car->id;
    }

    public function render()
    {
        $this->brands = Brand::all();
        return view('livewire.sell-my-car');
    }

}
