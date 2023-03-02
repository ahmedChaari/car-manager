<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarInfo;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompletCarInformationsController extends Controller
{
    public function showStep1($id)
    {
        $car = Car::findOrFail($id);
        return view('complet-car-information.step1', [
            'car' => $car,
        ]);
    }

    public function storeStep1(Request $request, $id)
    {
        $this->validate($request,[
            'origin'=>'required',
            'first_hand'=>'required',
            'gearbox'=>'required',
            'fuel'=>'required',
            'description'=>'required',
        ]);

         Car::findOrFail($id)->update([
            'origin' => $request->origin,
            'first_hand' => $request->first_hand,
            'gearbox' => $request->gearbox,
            'fuel' => $request->fuel,
            'description' => $request->description,
        ]);

        $request->session()->flash('status', 'Car Was Updated');

        return redirect()->route('complet-car-information.show-step2', ['id' => $id]);
    }

    public function showStep2($id)
    {
        $car = Car::findOrFail($id);

        return view('complet-car-information.step2', [
            'car' => $car,
            'carInfo' => $car->carInfo,
        ]);
    }

    public function storeStep2(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $data = array(
            'car_id' => $id,
            'dvice' => $request->has('dvice'),
            'gps' => $request->has('gps'),
            'volant_sport' => $request->has('volant_sport'),
            'alarm' => $request->has('alarm'),
            'electric_glass' => $request->has('electric_glass'),
            'rain_sensor' => $request->has('rain_sensor'),
            'aide_parking' => $request->has('aide_parking'),
            'esp' => $request->has('esp'),
            'power_steering' => $request->has('power_steering'),
            'abs' => $request->has('abs'),
            'xenon_headlights' => $request->has('xenon_headlights'),
            'board_computer' => $request->has('board_computer'),
            'maintenance_book' => $request->has('maintenance_book'),
            'panoramic_sunroof' => $request->has('panoramic_sunroof'),
            'cruise_control' => $request->has('cruise_control'),
            'anti_slip' => $request->has('anti_slip'),
            'leather_interior' => $request->has('leather_interior'),
            'head_up_display' => $request->has('head_up_display'),
            'electric_hood' => $request->has('electric_hood'),
            'electric_seat' => $request->has('electric_seat'),
            'automatic_parking_brake' => $request->has('automatic_parking_brake'),
            'electric_exterior_mirror' => $request->has('electric_exterior_mirror'),
            'tinted_windows' => $request->has('tinted_windows'),
            'reversing_radar' => $request->has('reversing_radar'),
            'sunroof' => $request->has('sunroof'),
            'anti_start' => $request->has('anti_start'),
            'remote_central' => $request->has('remote_central'),
            'heated_seat' => $request->has('heated_seat'),
            'tire_pressure' => $request->has('tire_pressure'),
            'aluminum_rims' => $request->has('aluminum_rims'),
            'sports_seat' => $request->has('sports_seat'),
            'air_conditioning' => $request->has('air_conditioning'),
            'airbags' => $request->has('airbags'),
            'adjustable_steering' => $request->has('adjustable_steering'),
            'keyless_go' => $request->has('keyless_go'),
            'auto_air_conditioning' => $request->has('auto_air_conditioning'),
            'radio_control_steering' => $request->has('radio_control_steering'),
            'sports_suspension' => $request->has('sports_suspension'),
            'anti_fog' => $request->has('anti_fog'),
            'non_smoker' => $request->has('non_smoker'),
            'speed_limiter' => $request->has('speed_limiter'),
            'driver_identification_system' => $request->has('driver_identification_system'),
        );

        if ($car->carInfo()->exists()) {
            CarInfo::findOrFail($car->carInfo->id)->update($data);
        } else {
            CarInfo::create($data);
        }

        $request->session()->flash('status', 'Les Information de la voiture sont bien enregistrees');

        return redirect()->route('complet-car-information.show-step3', ['id' => $id]);
    }

    public function showStep3($id)
    {
        $car = Car::findOrFail($id);

        return view('complet-car-information.step3', [
            'car' => $car,
        ]);
    }

    public function storeImage(Request $request, $id)
    {
        // $Image And Car From Request
        $car = Car::findOrfail($id);
        $file = $request->file('file');
        // Name
        // $name = time() . '-' . $car->brand . '-' . $car->model . '.' . $file->guessExtension();
        $name = $file->getClientOriginalName();
        // Path
        $path = 'cars';
        // Move Image To Storage File
        Storage::putFileAs($path, $file, $name);

        Image::create([
            'name'  =>  $name,
            'path'  =>  $path,
            'car_id'  =>  $id,
        ]);
        return response()->json([ 'success' => $name]);
    }

    public function storeStep3(Request $request, $id)
    {
        // Save images
        $request->session()->flash('status', 'Les images des la voiture sont bien enregistrees');

        return redirect()->route('complet-car-information.show-publish', ['id' => $id]);
    }

    public function showPublishStep($id)
    {
        $car = Car::findOrFail($id);

        return view('complet-car-information.publish', [
            'car' => $car,
            'carInfo' => $car->carInfo,
        ]);
    }

    public function publishOrDraftAction(Request $request, $id)
    {
        Car::findOrFail($id)->update([
            'visibility' => $request->visibility,
        ]);
        if ($request->visibility) {
            $request->session()->flash('status', 'Votre Voiture a ete bien publie');
        } else {
            $request->session()->flash('status', 'Votre Voiture en draft');
        }

        return redirect()->route('complet-car-information.validation');
    }
    public function showValidation() {
        return view('complet-car-information.validation');
    }
}
