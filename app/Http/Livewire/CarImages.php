<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;

class CarImages extends Component
{
    protected $listeners = ['updateImageListing' => 'render'];
    public $max_file = 10;
    public $remaining_file = 10;
    public $car;
    public $images;

    public function deleteImage($id) {
        Image::findOrfail($id)->delete();

        // if(Storage::exists($image->path . '/' . $filename)){
        //     Storage::delete($image->path . '/' .  $filename);
        // }
    }

    public function render()
    {
        $this->images = $this->car->images()->get();
        return view('livewire.car-images');
    }
}
