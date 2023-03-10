<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class UpdateCar extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $tel;
    public $brand;
    public $model;
    public $date_car;
    public $mileage;
    public $gray_card_holder;
    public $gray_card_number;
    public $city;
    public $price;
    public $condition_car;
    public $car;

    public function updateBrand()
    {
        Car::findOrfail($this->car->id)->update([
            'brand' => $this->brand
        ]);
    }

    public function updateModel()
    {
        Car::findOrfail($this->car->id)->update([
            'model' => $this->model
        ]);
    }

    public function updateDateCar()
    {
        Car::findOrfail($this->car->id)->update([
            'date_car' => $this->date_car
        ]);
    }

    public function updateMileage()
    {
        Car::findOrfail($this->car->id)->update([
            'mileage' => $this->mileage
        ]);
    }

    public function updateGrayCardHolder()
    {
        Car::findOrfail($this->car->id)->update([
            'gray_card_holder' => $this->gray_card_holder
        ]);
    }
    public function updateGrayCardNumber()
    {
        Car::findOrfail($this->car->id)->update([
            'gray_card_number' => $this->gray_card_number
        ]);
    }

    public function updateCity()
    {
        Car::findOrfail($this->car->id)->update([
            'city' => $this->city
        ]);
    }

    public function updatePrice()
    {
        Car::findOrfail($this->car->id)->update([
            'price' => $this->price
        ]);
    }

    public function updateConditionCar()
    {
        // Car::findOrfail($this->car->id)->update([
        //     'condition_car' => $this->condition_car
        // ]);
    }

    public function mount() {
        $this->brand = $this->car->brand;
        $this->model = $this->car->model;
        $this->date_car = $this->car->date_car;
        $this->mileage = $this->car->mileage;
        $this->gray_card_holder = $this->car->gray_card_holder;
        $this->gray_card_number = $this->car->gray_card_number;
        $this->city = $this->car->city;
        $this->price = $this->car->price;
        $this->condition_car = $this->car->condition_car;
        $this->first_name = $this->car->user->first_name;
        $this->last_name = $this->car->user->last_name;
        $this->email = $this->car->user->email;
        $this->tel = $this->car->user->tel;
    }
    public function render()
    {
        return view('livewire.update-car');
    }
}
