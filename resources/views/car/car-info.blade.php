@extends('layouts.admin')
@section('content')
        <div class="dashboard__container py-4 lg:py-7 px-4 lg:px-8">
            <div class="head__filter flex-col md:flex-row flex items-start md:items-center justify-between mb-4 md:mb-7">
                <h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Récapitulatif de votre annonce</h6>
                <form 
						action="{{ route('car.publier' , $car->id)  }}"
						method="post">
						@csrf
							
							@method('PUT')
												
							@if ($car->published === 1)
							<button type="submit"  style="background-color: red;"
							class="mt-2 md:mt-0 regular-btn inline-flex items-center justify-center
							 px-4 rounded-md text-sm text-white font-medium btn-danger"><span class="inline-flex items-center justify-center mr-2">
							<img src="{{ asset('assets/img/public.svg') }}" alt="public"></span>
							Dépublier</button>
							@else
							<button type="submit" 
							class="mt-2 md:mt-0 regular-btn inline-flex items-center justify-center
							 px-4 rounded-md text-sm text-white font-medium"><span class="inline-flex items-center justify-center mr-2">
							<img src="{{ asset('assets/img/public.svg') }}" alt="public"></span>
							Publier</button>
							@endif
                </form>
            </div>

            @include('components.alert')

            <div class="product__wrapper bg-white flex-col-reverse md:flex-row  flex justify-between py-4 px-3 pr-3 ">
                <div class="product__description w-full">
                    <div class="head__description mb-5">
                        <h6 class="price font-bold active__color">Prix : {{ $car->price }} DH</h6>
                        <p class="font-semibold dark__grey text-xl md:text-2xl">{{$car->brand}} {{$car->model}}</p>
                    </div>

                    <div class="grid__description grid grid-cols-2 gap-x-10">
                        <div class="row__wrapper">
                            <div class="column__description flex items-center justify-between mb-2">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">Boîte de vitesses</p>
                                <span class="text-sm light__grey text-right">
                                    @switch($car->gearbox)
                                        @case('all')
                                            Tous
                                            @break
                                        @case('automatique')
                                            Automatique
                                            @break
                                        @case('manual')
                                            Manuel
                                            @break
                                    @endswitch
                                </span>
                            </div>
                            <div class="column__description flex items-center justify-between mb-2">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">Date ajoutée</p>
                                <span class="text-sm light__grey text-right">4 Day</span>
                            </div>
                            <div class="column__description flex items-center justify-between mb-2">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">Kilométrage</p>
                                <span class="text-sm light__grey text-right">{{ $car->mileage }}Km</span>
                            </div>
                            <div class="column__description flex items-center justify-between mb-2">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">Date ajoutée</p>
                                <span class="text-sm light__grey text-right">4 Day</span>
                            </div>
                            <div class="column__description flex items-center justify-between">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">Origine</p>
                                <span class="text-sm light__grey text-right">{{ $car->origin }}</span>
                            </div>
                        </div>

                        <div class="row__wrapper">
                            <div class="column__description flex items-center justify-between mb-2">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">Première main</p>
                                <span class="text-sm light__grey text-right">{{ $car->first_hand ? 'Oui' : 'Non' }} </span>
                            </div>
                            <div class="column__description flex items-center justify-between mb-2">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">Carburant</p>
                                <span class="text-sm light__grey text-right">
                                    @switch($car->fuel)
                                        @case('all')
                                            Tous
                                            @break
                                        @case('diasel')
                                            Diasel
                                            @break
                                        @case('electric')
                                            Electrique
                                            @break
                                        @case('essence')
                                            Essence
                                            @break
                                        @case('lgp')
                                            LPG
                                            @break
                                        @case('hybrid')
                                            Hybride
                                            @break
                                    @endswitch
                                </span>
                            </div>
                            <div class="column__description flex items-center justify-between mb-2">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">Ville</p>
                                <span class="text-sm light__grey text-right">{{ $car->city }}</span>
                            </div>
                            <div class="column__description flex items-center justify-between mb-2">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">État de la voiture</p>
                                <span class="text-sm light__grey text-right">
                                    @switch($car->condition_car)
                                        @case('excellent')
                                            Excellent
                                            @break
                                        @case('very_Good')
                                            Très bon
                                            @break
                                        @case('correct')
                                            Correct
                                            @break
                                        @case('damaged')
                                            Endommagé
                                            @break
                                        @case('pieces')
                                            Pour Pièces
                                            @break
                                    @endswitch
                                </span>
                            </div>
                            <div class="column__description flex items-center justify-between">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">année de fabrication</p>
                                <span class="text-sm light__grey text-right">{{ \Carbon\Carbon::parse($car->date_car)->format('Y') }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="product__grid grid mt-5 border">
                        <div class="elem__product pl-3 md:pl-6 pr-3 py-4 bg-white flex items-center justify-start">
                            <span class="inline-flex items-center justify-center  mr-4"><img src="{{ @asset('img/icon3.svg') }}" alt="icon"></span>
                            <div class="product__info">
                                <p class="light__grey text-sm font-medium">nombre de vues</p>
                                <div class="product__double flex-wrap flex items-start sm:items-center justify-start">
                                    <div class="el__double">
                                        <p class="font-semibold text-lg sm:text-xl md:text-2xl ">{{ $car->number_view }} <span class="text-sm font-semibold">views</span></p>
                                    </div>
                                    <span  class=" mx-0 sm:mx-2">/</span>
                                    <div class="el__double">
                                        <p class="font-semibold text-lg sm:text-xl md:text-2xl ">{{ $car->number_click }} <span class="text-sm font-semibold">Clicks</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product__gallery mb-5 md:mb-0 w-full  mr-0 md:ml-6 lg:ml-12 xl:ml-20">
                    {{-- @php
                        dd();
                    @endphp --}}
                    <div class="main__image w-full">
                        <img src="{{ @asset($car->images()->first()->path .'/'. $car->images()->first()->name) }}" alt="mainimage">
                    </div>
                    <div class="main__switcher grid grid-cols-5">
                        @foreach ($car->images()->get() as $key => $image)
                            <div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="/{{$image->path}}/{{$image->name}}">
                                <img src="{{ @asset($image->path .'/'. $image->name) }}" alt="mainimage">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Description --}}
            <div class="products__checkbox--wrapper bg-white px-3 md:px-5 py-3 md:py-6 mt-6" style="min-height:200px">
                <div class="head__description mb-5">
                    <p class="font-semibold dark__grey text-xl md:text-2xl">Description</p>
                </div>
                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">
                    {{ $car->description }}
                </p>
            </div>

            {{-- Equipement --}}
            <div class="products__checkbox--wrapper bg-white px-3 md:px-5 py-3 md:py-6 mt-6">
                <div class="head__description mb-5">
                    <p class="font-semibold dark__grey text-xl md:text-2xl">Équipements</p>
                </div>
                <div class="grid__checkboxes grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-14 gap-y-2">
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Dvd / cd / mp3
                        <input disabled type="checkbox" value="1" name="dvice" {{  $carInfo->dvice?? null == 1 ? 'checked' : '' }}  >
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Système de navigation / gps
                        <input disabled type="checkbox"  value="1" name="gps" {{ old('gps', $carInfo->gps?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Volant sport
                        <input disabled type="checkbox" value="1" name="volant_sport" {{ old('volant_sport', $carInfo->volant_sport?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Alarme
                        <input disabled type="checkbox" value="1" name="alarm" {{ old('alarm', $carInfo->alarm?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Vitres éléctriques
                        <input disabled type="checkbox" value="1" name="electric_glass" {{ old('electric_glass', $carInfo->electric_glass?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Détecteur de pluie
                        <input disabled type="checkbox" value="1" name="rain_sensor" {{ old('rain_sensor', $carInfo->rain_sensor?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Aide parking
                        <input disabled type="checkbox" value="1" name="aide_parking" {{ old('aide_parking', $carInfo->aide_parking?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Esp
                        <input disabled type="checkbox" value="1" name="esp" {{ old('esp', $carInfo->esp?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Direction assistée
                        <input disabled type="checkbox" value="1" name="power_steering" {{ old('power_steering', $carInfo->power_steering?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Abs
                        <input disabled type="checkbox" value="1" name="abs" {{ old('abs', $carInfo->abs?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Projecteurs xenon
                        <input disabled type="checkbox" value="1" name="xenon_headlights" {{ old('xenon_headlights', $carInfo->xenon_headlights?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Ordinateur de bord
                        <input disabled type="checkbox" value="1" name="board_computer" {{ old('board_computer', $carInfo->board_computer?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Carnet d'entretien
                        <input disabled type="checkbox" value="1" name="maintenance_book" {{ old('maintenance_book', $carInfo->maintenance_book?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Toit ouvrant panoramique
                        <input disabled type="checkbox" value="1" name="panoramic_sunroof" {{ old('panoramic_sunroof', $carInfo->panoramic_sunroof?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Régulateur de vitesse
                        <input disabled type="checkbox" value="1" name="cruise_control" {{ old('cruise_control', $carInfo->cruise_control?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Anti patinage
                        <input disabled type="checkbox" value="1" name="anti_slip" {{ old('anti_slip', $carInfo->anti_slip?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Intérieur cuir
                        <input disabled type="checkbox" value="1" name="leather_interior" {{ old('leather_interior', $carInfo->leather_interior?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Affichage tête haute
                        <input disabled type="checkbox" value="1" name="head_up_display" {{ old('head_up_display', $carInfo->head_up_display?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Capote électrique
                        <input disabled type="checkbox" value="1" name="electric_hood" {{ old('electric_hood', $carInfo->electric_hood?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Siége electrique
                        <input disabled type="checkbox" value="1" name="electric_seat" {{ old('electric_seat', $carInfo->electric_seat?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Frein de parking automatique
                        <input disabled type="checkbox" value="1" name="automatic_parking_brake" {{ old('automatic_parking_brake', $carInfo->automatic_parking_brake?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Rétroviseur extérieur électrique
                        <input disabled type="checkbox" value="1" name="electric_exterior_mirror" {{ old('electric_exterior_mirror', $carInfo->electric_exterior_mirror?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Vitres surteintées
                        <input disabled type="checkbox" value="1" name="tinted_windows" {{ old('tinted_windows', $carInfo->tinted_windows?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Radar de recul
                        <input disabled type="checkbox" value="1" name="reversing_radar" {{ old('reversing_radar', $carInfo->reversing_radar?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Toit ouvrant
                        <input disabled type="checkbox" value="1" name="sunroof" {{ old('sunroof', $carInfo->sunroof?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Anti démarrage
                        <input disabled type="checkbox" value="1" name="anti_start" {{ old('anti_start', $carInfo->anti_start?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Verrouillage centralisé à distance
                        <input disabled type="checkbox" value="1" name="remote_central" {{ old('remote_central', $carInfo->remote_central?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Siège chauffant
                        <input disabled type="checkbox" value="1" name="heated_seat" {{ old('heated_seat', $carInfo->heated_seat?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Contrôle de pression des pneus
                        <input disabled type="checkbox" value="1" name="tire_pressure" {{ old('tire_pressure', $carInfo->tire_pressure?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Jantes aluminium
                        <input disabled type="checkbox" value="1" name="aluminum_rims" {{ old('aluminum_rims', $carInfo->aluminum_rims?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Siége sport
                        <input disabled type="checkbox" value="1" name="sports_seat" {{ old('sports_seat', $carInfo->sports_seat?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Climatisation multizone
                        <input disabled type="checkbox" value="1" name="air_conditioning" {{ old('air_conditioning', $carInfo->air_conditioning?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Airbags
                        <input disabled type="checkbox" value="1" name="airbags" {{ old('airbags', $carInfo->airbags?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Volant reglable
                        <input disabled type="checkbox" value="1" name="adjustable_steering" {{ old('adjustable_steering', $carInfo->adjustable_steering?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Keyless go
                        <input disabled type="checkbox" value="1" name="keyless_go" {{ old('keyless_go', $carInfo->keyless_go?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Climatisation auto
                        <input disabled type="checkbox" value="1" name="auto_air_conditioning" {{ old('auto_air_conditioning', $carInfo->auto_air_conditioning?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>


                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Radio commande au volant
                        <input disabled type="checkbox" value="1" name="radio_control_steering" {{ old('radio_control_steering', $carInfo->radio_control_steering?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Suspension sport
                        <input disabled type="checkbox" value="1" name="sports_suspension" {{ old('sports_suspension', $carInfo->sports_suspension?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Anti brouillard
                        <input disabled type="checkbox" value="1" name="anti_fog" {{ old('anti_fog', $carInfo->anti_fog?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Non fumeur
                        <input disabled type="checkbox" value="1" name="non_smoker" {{ old('non_smoker', $carInfo->non_smoker?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Limiteur de vitesse
                        <input disabled type="checkbox" value="1" name="speed_limiter" {{ old('speed_limiter', $carInfo->speed_limiter?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Système d'identification du conducteur
                        <input disabled type="checkbox" value="1" name="driver_identification_system" {{ old('driver_identification_system', $carInfo->driver_identification_system?? null) == 1 ? 'checked' : '' }}>
                        <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                </div>
            </div>
            {{-- </div> --}}

            <div class="more__button flex items-center justify-end mt-7">
            <form 
						action="{{ route('car.publier' , $car->id)  }}"
						method="post">
						@csrf
							
							@method('PUT')
												
							@if ($car->published === 1)
							<button type="submit"  style="background-color: red;"
							class="mt-2 md:mt-0 regular-btn inline-flex items-center justify-center
							 px-4 rounded-md text-sm text-white font-medium btn-danger"><span class="inline-flex items-center justify-center mr-2">
							<img src="{{ asset('assets/img/public.svg') }}" alt="public"></span>
							Dépublier</button>
							@else
							<button type="submit" 
							class="mt-2 md:mt-0 regular-btn inline-flex items-center justify-center
							 px-4 rounded-md text-sm text-white font-medium"><span class="inline-flex items-center justify-center mr-2">
							<img src="{{ asset('assets/img/public.svg') }}" alt="public"></span>
							Publier</button>
							@endif
                </form>
            </div>
        </div>
    

@endsection