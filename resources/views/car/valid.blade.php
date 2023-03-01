@extends('layouts.admin')
@section('content')

<div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
					<div class="head__filter flex-col md:flex-row flex items-start md:items-center justify-between mb-4 md:mb-7">
						<h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Profile de Voiture</h6>
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
							Depublier</button>
							@else
							<button type="submit" 
							class="mt-2 md:mt-0 regular-btn inline-flex items-center justify-center
							 px-4 rounded-md text-sm text-white font-medium"><span class="inline-flex items-center justify-center mr-2">
							<img src="{{ asset('assets/img/public.svg') }}" alt="public"></span>
							Publier</button>
							@endif
						</form>
					</div>
					<div class="step__info py-3 lg:py-5  px-4 lg:px-11 mb-7">
						<h6 class=" mb-3 text-2xl font-semibold">{{ $car->brand }} {{ $car->model }}</h6>
						<div class="price flex items-center justify-start mb-3">
							<p class="  text-lg font-medium mb-0">Prix : <span class="font-semibold ">{{ $car->price }} DH</span> </p>
						</div>
						<div class="grid__step grid  grid-cols-1 lg:grid-cols-2 xl:grid-cols-3  gap-x-6 gap-y-2">
							<div class="elem__grid--step flex items-center justify-between">
								<span class="text-sm font-medium text-left">Nom et Prénome</span>
								<p class="text-right text-sm flex items-center justify-end ml-2">{{ $car->user->first_name }} {{ $car->user->last_name }}  </p>
							</div>
							<div class="elem__grid--step flex items-center justify-between">
								<span class="text-sm font-medium text-left">Fabrication</span>
								<p class="text-right text-sm flex items-center justify-end ml-2">{{ $car->brand }} </p>
							</div>
							<div class="elem__grid--step flex items-center justify-between">
								<span class="text-sm font-medium text-left">An</span>
								<p class="text-right text-sm flex items-center justify-end ml-2">{{ \Carbon\Carbon::parse($car->date_car)->format('Y') }}</p>
							</div>
							<div class="elem__grid--step flex items-center justify-between">
								<span class="text-sm font-medium text-left">E-Mail</span>
								<p class="text-right text-sm flex items-center justify-end ml-2">{{ $car->user->email }}</p>
							</div>
							<div class="elem__grid--step flex items-center justify-between">
								<span class="text-sm font-medium text-left">Maquette</span>
								<p class="text-right text-sm flex items-center justify-end ml-2"> {{ $car->model }}</p>
							</div>
							<div class="elem__grid--step flex items-center justify-between">
								<span class="text-sm font-medium text-left">Kilométrage</span>
								<p class="text-right text-sm flex items-center justify-end ml-2">{{ $car->mileage }} Km</p>
							</div>
							<div class="elem__grid--step flex items-center justify-between">
								<span class="text-sm font-medium text-left">Numéro De Téléphone</span>
								<p class="text-right text-sm flex items-center justify-end ml-2">{{ $car->user->tel }}</p>
							</div>
							<div class="elem__grid--step flex items-center justify-between">
								<span class="text-sm font-medium text-left">Disponibilité</span>
								<p class="text-right text-sm flex items-center justify-end ml-2">....</p>
							</div>
							<div class="elem__grid--step flex items-center justify-between">
								<span class="text-sm font-medium text-left">État De La Voiture</span>
								<p class="text-right text-sm flex items-center justify-end ml-2">{{ $car->condition_car }}</p>
							</div>
						</div>
					</div>
					<div class="information__block py-4 lg:py-4 px-4 lg:px-8">
						<form action="">
							<div class="head__information mb-6">
								<h2 class="text-xl font-semibold">Informations de base</h2>
								<p class="text-sm light__grey">Informations de base du véhicule</p>
							</div>
							<div class="grid__information grid  grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-8 sm:gap-x-12 xl:gap-x-20 gap-y-5 sm:gap-y-8 xl:gap-y-12">
								<div class="group__input group__dropdown relative">
									<p  class="font-semibold mb-1 text-sm">Origin</p>
									<p class="text-sm flex items-center ">{{ $car->origin }}</p>
									<!-- <input type="text" class="select-type-sellers"  disabled value="{{ $car->origin }}"> -->
								</div>
								<div class="group__input relative">
									<p  class="font-semibold mb-1 text-sm">Première main</p>
									<div class="radio__wrapper flex items-center justify-start  flex-wrap">
										<div class="elem__radio my-1 mr-3">
											<label class="container__input  cursor-pointer flex items-center justify-start text-sm">oui
											<input type="radio" name="first_hand" value="1" disabled {{ ($car->first_hand =="1")? "checked" : "" }} >
											  <span class="checkmark ml-1"></span>
											</label>
										</div>
										<div class="elem__radio my-1">
											<label class="container__input cursor-pointer  flex items-center justify-start text-sm">no
											<input type="radio" name="first_hand" value="0" disabled {{ ($car->first_hand =="0")? "checked" : "" }} >
											  <span class="checkmark ml-1"></span>
											</label>
										</div>
									</div>
								</div>

								<div class="group__input relative">
									<p  class="font-semibold mb-1 text-sm">Boîte de vitesses</p>
									<div class="radio__wrapper flex items-center justify-start  flex-wrap">
										<div class="elem__radio my-1 mr-3">
											<label class="container__input cursor-pointer  flex items-center justify-start text-sm">All
											  <input type="radio" name="all" value="all" disabled {{ ($car->gearbox =="all")? "checked" : "" }} >
											  <span class="checkmark ml-1"></span>
											</label>
										</div>
										<div class="elem__radio my-1 mr-3">
											<label class="container__input  cursor-pointer flex items-center justify-start text-sm">Automatique
											<input type="radio" name="automatique" value="automatique" disabled {{ ($car->gearbox =="automatique")? "checked" : "" }} >
											  <span class="checkmark ml-1"></span>
											</label>
										</div>
										<div class="elem__radio my-1">
											<label class="container__input cursor-pointer  flex items-center justify-start text-sm">Manual
											<input type="radio"  name="manual" value="manual" disabled {{ ($car->gearbox =="manual")? "checked" : "" }} >
											  <span class="checkmark ml-1"></span>
											</label>
										</div>
									</div>
								</div>


								<div class="group__input relative">
									<p  class="font-semibold mb-1 text-sm">Carburant</p>
									<div class="radio__wrapper flex items-center justify-start  flex-wrap">
										<div class="elem__radio my-1 mr-3">
											<label class="container__input cursor-pointer  flex items-center justify-start text-sm">Tout
											<input type="radio" name="fuel" value="all" disabled {{ ($car->fuel =="all")? "checked" : "" }} >
											  <span class="checkmark ml-1"></span>
											</label>
										</div>
										<div class="elem__radio my-1 mr-3">
											<label class="container__input  cursor-pointer flex items-center justify-start text-sm">Diesel
											<input type="radio" name="fuel" value="diasel" disabled {{ ($car->fuel =="diasel")? "checked" : "" }} >
											  <span class="checkmark ml-1"></span>
											</label>
										</div>
										<div class="elem__radio my-1 mr-3">
											<label class="container__input cursor-pointer  flex items-center justify-start text-sm">Essence
											  <input type="radio" name="fuel" value="essence" disabled {{ ($car->fuel =="essence")? "checked" : "" }} >
											  <span class="checkmark ml-1"></span>
											</label>
										</div>
										<div class="elem__radio my-1 mr-3">
											<label class="container__input cursor-pointer  flex items-center justify-start text-sm">Electric
											  <input type="radio" name="fuel" value="electric" disabled {{ ($car->fuel =="electric")? "checked" : "" }} >
											  <span class="checkmark ml-1"></span>
											</label>
										</div>

										<div class="elem__radio my-1 mr-3">
											<label class="container__input cursor-pointer  flex items-center justify-start text-sm">LPG
											  <input type="radio" name="fuel" value="lgp" disabled {{ ($car->fuel =="lgp")? "checked" : "" }} >
											  <span class="checkmark ml-1"></span>
											</label>
										</div>

										<div class="elem__radio my-1">
											<label class="container__input cursor-pointer  flex items-center justify-start text-sm">Hybrid
											  <input type="radio" name="fuel" value="hybrid" disabled {{ ($car->fuel =="hybrid")? "checked" : "" }} >
											  <span class="checkmark ml-1"></span>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="description__field w-full mt-5 md:mt-8">
								<p class="font-semibold text-lg md:text-xl mb-4">Description</p>
								<textarea name="" id="" cols="30" rows="10" 
								disabled
								 class="text-sm md:text-base bg-white p-4 w-full">{{ $car->description }}</textarea>
								<div class="counter">
									<span class="block  text-right text-base font-medium"><span class="font-normal">0</span> / 4000</span>
								</div>
							</div>
						</form>
					</div>
					<div class="select__wrapper py-4 lg:py-7 mt-7 px-4 lg:px-8 bg-white">
						<div class="head__select mb-6">
							<h2 class="text-xl font-semibold">Les caractéristiques de véhicule</h2>
						</div>
						<div class="grid__checkboxes grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-14 gap-y-2">
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Dvd / cd / mp3
                        <input disabled type="checkbox" value="1" name="dvice" {{ old('dvice', $carInfo->dvice?? null) == 1 ? 'checked' : '' }}>
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
					<div class="images__loader py-4 lg:py-7  mt-7 px-4 lg:px-8 bg-white">
						<div class="head__images">
							<h2 class="text-xl font-semibold">Images de véhicules</h2>
							<p class="text-sm light__grey">Téléchargez des photos de votre véhicule</p>
						</div>
						<div class="gallery__images flex-col md:flex-row flex relative items-center justify-between mt-6">
							<input type="file">
							<div class="main__image relative">
								<img src="{{ asset('assets/img/image.png' ) }}" alt="image">
								<a href="#"><img src="{{ asset('assets/img/loadimage.svg') }}" alt="loadimage"></a>
							</div>
							<div class="small__images  grid  grid-cols-3 sm:grid-cols-5  gap-x-2  xl:gap-x-4  gap-y-2 xl:gap-y-3">
								<div class="el__small--image">
									<img src="{{ asset('assets/img/image.png' ) }}" alt="image">
									<a href="#"><img src="{{ asset('assets/img/loadimage.svg') }}" alt="loadimage"></a>
								</div>
								<div class="el__small--image">
									<img src="{{ asset('assets/img/image.png ') }}" alt="image">
									<a href="#"><img src="{{ asset('assets/img/loadimage.svg') }}" alt="loadimage"></a>
								</div>
								<div class="el__small--image">
									<img src="{{ asset('assets/img/image.png' ) }}" alt="image">
									<a href="#"><img src="{{ asset('assets/img/loadimage.svg') }}" alt="loadimage"></a>
								</div>
								<div class="el__small--image">
									<img src="{{ asset('assets/img/image.png ') }}" alt="image">
									<a href="#"><img src="{{ asset('assets/img/loadimage.svg') }}" alt="loadimage"></a>
								</div>
								<div class="el__small--image">
									<img src="{{ asset('assets/img/image.png ') }}" alt="image">
									<a href="#"><img src="{{ asset('assets/img/loadimage.svg') }}" alt="loadimage"></a>
								</div>
								<div class="el__small--image">
									<img src="{{ asset('assets/img/image.png ') }}" alt="image">
									<a href="#"><img src="{{ asset('assets/img/loadimage.svg') }}" alt="loadimage"></a>
								</div>
								<div class="el__small--image">
									<img src="{{ asset('assets/img/image.png') }}" alt="image">
									<a href="#"><img src="{{ asset('assets/img/loadimage.svg') }}" alt="loadimage"></a>
								</div>
								<div class="el__small--image">
									<img src="{{ asset('assets/img/image.png ') }}" alt="image">
									<a href="#"><img src="{{ asset('assets/img/loadimage.svg') }}" alt="loadimage"></a>
								</div>
								<div class="el__small--image">
									<img src="{{ asset('assets/img/image.png') }}" alt="image">
									<a href="#"><img src="{{ asset('assets/img/loadimage.svg') }}" alt="loadimage"></a>
								</div>
							</div>
						</div>
						
					</div>
					
					<div class="more__button flex items-center justify-end mt-7">
					<form 
						action="{{ route('car.publier' , $car->id) }}"
						method="post">
						@csrf
							
								@method('PUT')
												
								@if ($car->published === 1)
							<button type="submit"  style="background-color: red;"
							class="mt-2 md:mt-0 regular-btn inline-flex items-center justify-center
							 px-4 rounded-md text-sm text-white font-medium btn-danger"><span class="inline-flex items-center justify-center mr-2">
							<img src="{{ asset('assets/img/public.svg') }}" alt="public"></span>
							Depublier</button>
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
