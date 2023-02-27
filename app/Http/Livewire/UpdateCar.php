<?php

namespace App\Http\Livewire;

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

    public function updateField()
    {
        dd('Fields To Update');
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
