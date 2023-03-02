@extends('layouts.seller')

@section('content')
<div class="overlay"></div>
<div class="dashboard__wrapper flex items-start justify-between">
    @include('partials.navbar')

    <div class="dashboard__main w-full">
        @include('partials.dashboard-header')
        <div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
            <div class="head__filter flex-col md:flex-row flex items-start md:items-center justify-between mb-4 md:mb-7">
                <h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Completer le profile de voiture voiture</h6>
                {{-- <a href="#" class="mt-2 md:mt-0 regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm text-white font-medium"><span class="inline-flex items-center justify-center mr-2"><img src="{{ @asset('img/public.svg') }}" alt="public"></span>Publier</a> --}}
            </div>

            @livewire('update-car', ['car' => $car])

            {{-- Step 2 --}}
            <form method="POST" action="{{ route('complet-car-information.store-step2', ['id' => $car->id]) }}" class="select__wrapper py-4 lg:py-7 px-4 lg:px-8 bg-white">
                @csrf
                <div class="head__select mb-6">
                    <h2 class="text-xl font-semibold">Choix</h2>
                    <p class="text-sm light__grey">Sélectionnez les caractéristiques de votre véhicule</p>
                </div>
                <div class="grid__checkboxes grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-14 gap-y-2">
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Dvd / cd / mp3
                        <input type="checkbox" value="1" name="dvice" {{ old('dvice', $carInfo->dvice?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Système de navigation / gps
                        <input type="checkbox"  value="1" name="gps" {{ old('gps', $carInfo->gps?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Volant sport
                        <input type="checkbox" value="1" name="volant_sport" {{ old('volant_sport', $carInfo->volant_sport?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Alarme
                        <input type="checkbox" value="1" name="alarm" {{ old('alarm', $carInfo->alarm?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Vitres éléctriques
                        <input type="checkbox" value="1" name="electric_glass" {{ old('electric_glass', $carInfo->electric_glass?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Détecteur de pluie
                        <input type="checkbox" value="1" name="rain_sensor" {{ old('rain_sensor', $carInfo->rain_sensor?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Aide parking
                        <input type="checkbox" value="1" name="aide_parking" {{ old('aide_parking', $carInfo->aide_parking?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Esp
                        <input type="checkbox" value="1" name="esp" {{ old('esp', $carInfo->esp?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Direction assistée
                        <input type="checkbox" value="1" name="power_steering" {{ old('power_steering', $carInfo->power_steering?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Abs
                        <input type="checkbox" value="1" name="abs" {{ old('abs', $carInfo->abs?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Projecteurs xenon
                        <input type="checkbox" value="1" name="xenon_headlights" {{ old('xenon_headlights', $carInfo->xenon_headlights?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Ordinateur de bord
                        <input type="checkbox" value="1" name="board_computer" {{ old('board_computer', $carInfo->board_computer?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Carnet d'entretien
                        <input type="checkbox" value="1" name="maintenance_book" {{ old('maintenance_book', $carInfo->maintenance_book?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Toit ouvrant panoramique
                        <input type="checkbox" value="1" name="panoramic_sunroof" {{ old('panoramic_sunroof', $carInfo->panoramic_sunroof?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Régulateur de vitesse
                        <input type="checkbox" value="1" name="cruise_control" {{ old('cruise_control', $carInfo->cruise_control?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Anti patinage
                        <input type="checkbox" value="1" name="anti_slip" {{ old('anti_slip', $carInfo->anti_slip?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Intérieur cuir
                        <input type="checkbox" value="1" name="leather_interior" {{ old('leather_interior', $carInfo->leather_interior?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Affichage tête haute
                        <input type="checkbox" value="1" name="head_up_display" {{ old('head_up_display', $carInfo->head_up_display?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Capote électrique
                        <input type="checkbox" value="1" name="electric_hood" {{ old('electric_hood', $carInfo->electric_hood?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Siége electrique
                        <input type="checkbox" value="1" name="electric_seat" {{ old('electric_seat', $carInfo->electric_seat?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Frein de parking automatique
                        <input type="checkbox" value="1" name="automatic_parking_brake" {{ old('automatic_parking_brake', $carInfo->automatic_parking_brake?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Rétroviseur extérieur électrique
                        <input type="checkbox" value="1" name="electric_exterior_mirror" {{ old('electric_exterior_mirror', $carInfo->electric_exterior_mirror?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Vitres surteintées
                        <input type="checkbox" value="1" name="tinted_windows" {{ old('tinted_windows', $carInfo->tinted_windows?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Radar de recul
                        <input type="checkbox" value="1" name="reversing_radar" {{ old('reversing_radar', $carInfo->reversing_radar?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Toit ouvrant
                        <input type="checkbox" value="1" name="sunroof" {{ old('sunroof', $carInfo->sunroof?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Anti démarrage
                        <input type="checkbox" value="1" name="anti_start" {{ old('anti_start', $carInfo->anti_start?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Verrouillage centralisé à distance
                        <input type="checkbox" value="1" name="remote_central" {{ old('remote_central', $carInfo->remote_central?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Siège chauffant
                        <input type="checkbox" value="1" name="heated_seat" {{ old('heated_seat', $carInfo->heated_seat?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Contrôle de pression des pneus
                        <input type="checkbox" value="1" name="tire_pressure" {{ old('tire_pressure', $carInfo->tire_pressure?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Jantes aluminium
                        <input type="checkbox" value="1" name="aluminum_rims" {{ old('aluminum_rims', $carInfo->aluminum_rims?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Siége sport
                        <input type="checkbox" value="1" name="sports_seat" {{ old('sports_seat', $carInfo->sports_seat?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Climatisation multizone
                        <input type="checkbox" value="1" name="air_conditioning" {{ old('air_conditioning', $carInfo->air_conditioning?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Airbags
                        <input type="checkbox" value="1" name="airbags" {{ old('airbags', $carInfo->airbags?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Volant reglable
                        <input type="checkbox" value="1" name="adjustable_steering" {{ old('adjustable_steering', $carInfo->adjustable_steering?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Keyless go
                        <input type="checkbox" value="1" name="keyless_go" {{ old('keyless_go', $carInfo->keyless_go?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Climatisation auto
                        <input type="checkbox" value="1" name="auto_air_conditioning" {{ old('auto_air_conditioning', $carInfo->auto_air_conditioning?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>


                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Radio commande au volant
                        <input type="checkbox" value="1" name="radio_control_steering" {{ old('radio_control_steering', $carInfo->radio_control_steering?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Suspension sport
                        <input type="checkbox" value="1" name="sports_suspension" {{ old('sports_suspension', $carInfo->sports_suspension?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Anti brouillard
                        <input type="checkbox" value="1" name="anti_fog" {{ old('anti_fog', $carInfo->anti_fog?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Non fumeur
                        <input type="checkbox" value="1" name="non_smoker" {{ old('non_smoker', $carInfo->non_smoker?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Limiteur de vitesse
                        <input type="checkbox" value="1" name="speed_limiter" {{ old('speed_limiter', $carInfo->speed_limiter?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Système d'identification du conducteur
                        <input type="checkbox" value="1" name="driver_identification_system" {{ old('driver_identification_system', $carInfo->driver_identification_system?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                </div>
                <div class="controls__wrapper flex items-center justify-end mt-4 md:mt-6">
                    <span wire:click="stepBack" wire:loading.attr="disabled" class="outline-btn inline-flex items-center justify-center px-4 rounded-md mr-2 text-sm font-medium">Back</span>
                    <button type="submit" class="regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm font-medium text-white">Next</button>
                </div>
            </form>

            <div class="more__button flex items-center justify-end mt-7">
                <form method="POST" action="{{ route('complet-car-information.publish-or-draft', ['id' => $car->id]) }}">
                    @csrf
                    <input type="number" name="visibility" hidden value="0">
                    <button type="submit" class="outline-btn inline-flex items-center justify-center px-4 rounded-md  text-sm font-medium mr-1">Enregistrer dans le brouillon</button>
                </form>
                {{-- <a href="#" class="regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm text-white font-medium">Publier</a> --}}
            </div>
        </div>
    </div>
</div>
@endsection
