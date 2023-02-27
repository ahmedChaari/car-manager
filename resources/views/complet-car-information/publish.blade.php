@extends('layouts.seller')

@section('content')
<div class="overlay"></div>
<div class="dashboard__wrapper flex items-start justify-between">
    @include('partials.navbar')

    <div class="dashboard__main w-full">
        @include('partials.dashboard-header')

        <div class="dashboard__container py-4 lg:py-7 px-4 lg:px-8">
            <div class="head__filter flex-col md:flex-row flex items-start md:items-center justify-between mb-4 md:mb-7">
                <h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Completer le profile de voiture voiture</h6>
                <form method="POST" action="{{ route('complet-car-information.publish-or-draft', ['id' => $car->id]) }}">
                    @csrf
                    <input type="number" name="visibility" hidden value="1">
                    {{-- <button class="regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm text-white font-medium">Publier</button> --}}
                    <button type="submit" class="mt-2 md:mt-0 regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm text-white font-medium">
                        <span class="inline-flex items-center justify-center mr-2">
                            <img src="{{ @asset('img/public.svg') }}" alt="public">
                        </span>
                        Publier
                    </button>
                </form>
            </div>

            <div class="product__wrapper bg-white flex-col-reverse md:flex-row  flex justify-between py-4 px-3 pr-3 ">     
                <div class="product__description w-full">
                    <div class="head__description mb-5">
                        <h6 class="price font-bold active__color">Price : {{ $car->price }} DH</h6>
                        <p class="font-semibold dark__grey text-xl md:text-2xl">Dodge Charger SXT AWD</p>
                        <span class="font-medium text-base md:text-lg">Price : <span class="font-semibold">{{ $car->price }} DH</span></span>
                    </div>
                    <div class="content__description mb-4">
                        <p class="text-xs light__grey">{{ $car->description }}</p>
                    </div>
                    <div class="grid__description grid grid-cols-2 gap-x-10">
                        <div class="row__wrapper">
                            <div class="column__description flex items-center justify-between mb-2">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">Boîte de vitesses</p>
                                <span class="text-sm light__grey text-right">Automatique</span>
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
                                <span class="text-sm light__grey text-right">Essence</span>
                            </div>
                            <div class="column__description flex items-center justify-between mb-2">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">Ville</p>
                                <span class="text-sm light__grey text-right">{{ $car->city }}</span>
                            </div>
                            <div class="column__description flex items-center justify-between mb-2">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">État de la voiture</p>
                                <span class="text-sm light__grey text-right">très bien</span>
                            </div>
                            <div class="column__description flex items-center justify-between">
                                <p class="m-0 text-sm font-medium dark__grey text-left mr-2">année de fabrication</p>
                                <span class="text-sm light__grey text-right">2013</span>
                            </div>
                        </div>
                    </div>
                    <form action="" class="mt-7 w-full">
                        <div class="bid__buttons w-full grid grid-cols-1 gap-y-3 sm:grid-cols-2  gap-x-3 xlgap-x-7">
                            <a href="#" class="regular-btn inline-flex items-center justify-center font-medium text-sm text-white">acheter le lead</a>
                            <a href="#" class="regular-btn inline-flex items-center justify-center font-medium text-white text-sm">Vehicule trop cher</a>
                        </div>
                    </form>
                </div>

                <div class="product__gallery mb-5 md:mb-0 w-full  mr-0 md:ml-6 lg:ml-12 xl:ml-20">
                    <div class="main__image w-full">
                        <img src="{{ @asset('img/mainimage.webp') }}" alt="mainimage">
                    </div>
                    <div class="main__switcher grid grid-cols-5">
                        <div class="elem__switch current__switch cursor-pointer inline-flex items-center justify-center" data-switch="img/mainimage.webp">
                            <img src="{{ @asset('img/mainimage.webp') }}" alt="mainimage">
                        </div>
                        <div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="img/mainimage2.webp">
                            <img src="{{ @asset('img/mainimage2.webp') }}" alt="mainimage">
                        </div>
                        <div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="img/mainimage3.webp">
                            <img src="{{ @asset('img/mainimage3.webp') }}" alt="mainimage">
                        </div>
                        <div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="img/mainimage.webp">
                            <img src="{{ @asset('img/mainimage.webp') }}" alt="mainimage">
                        </div>
                        <div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="img/mainimage2.webp">
                            <img src="{{ @asset('img/mainimage2.webp') }}" alt="mainimage">
                        </div>
                        <div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="img/mainimage3.webp">
                            <img src="{{ @asset('img/mainimage3.webp') }}" alt="mainimage">
                        </div>
                        <div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="img/mainimage.webp">
                            <img src="{{ @asset('img/mainimage.webp') }}" alt="mainimage">
                        </div>
                        <div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="img/mainimage2.webp">
                            <img src="{{ @asset('img/mainimage2.webp') }}" alt="mainimage">
                        </div>
                        <div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="img/mainimage3.webp">
                            <img src="{{ @asset('img/mainimage3.webp') }}" alt="mainimage">
                        </div>
                        <div class="elem__switch cursor-pointer inline-flex items-center justify-center" data-switch="img/mainimage3.webp">
                            <img src="{{ @asset('img/mainimage3.webp') }}" alt="mainimage">
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__grid grid  grid-cols-1 gap-y-3 xl:grid-cols-3 gap-x-6 mt-6">
                <div class="elem__product pl-3 md:pl-6 pr-3 py-4 bg-white flex items-center justify-start">
                    <span class="inline-flex items-center justify-center  mr-4"><img src="{{ @asset('img/icon1.svg') }}" alt="icon"></span>
                    <div class="product__info">
                        <p class="light__grey text-sm font-medium">Se ferme dans</p>
                        <div class="product__timer flex items-center justify-start">
                            <div class="el__time text-center mr-9">
                                <p class="text-lg sm:text-xl md:text-2xl font-semibold">13</p>
                                <span class="font-semibold text-sm">Days</span>
                            </div>
                            <div class="el__time text-center mr-9">
                                <p class="text-lg sm:text-xl md:text-2xl font-semibold">05</p>
                                <span class="font-semibold text-sm">Hours</span>
                            </div>
                            <div class="el__time text-center ">
                                <p class="text-lg sm:text-xl md:text-2xl font-semibold">25</p>
                                <span class="font-semibold text-sm">Minutes</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="elem__product pl-3 md:pl-6 pr-3 py-4 bg-white flex items-center justify-start">
                    <span class="inline-flex items-center justify-center  mr-4"><img src="{{ @asset('img/icon2.svg') }}" alt="icon"></span>
                    <div class="product__info">
                        <p class="light__grey text-sm font-medium">enchères partagées restantes</p>
                        <h6 class="font-semibold text-lg sm:text-xl md:text-2xl">156,000 <span class="text-sm font-semibold">DH</span></h6>
                    </div>
                </div>

                <div class="elem__product pl-3 md:pl-6 pr-3 py-4 bg-white flex items-center justify-start">
                    <span class="inline-flex items-center justify-center  mr-4"><img src="{{ @asset('img/icon3.svg') }}" alt="icon"></span>
                    <div class="product__info">
                        <p class="light__grey text-sm font-medium">nombre de vues</p>
                        <div class="product__double flex-wrap flex items-start sm:items-center justify-start">
                            <div class="el__double">
                                <p class="font-semibold text-lg sm:text-xl md:text-2xl ">7840 <span class="text-sm font-semibold">views</span></p>
                            </div>
                            <span  class=" mx-0 sm:mx-2">/</span>
                            <div class="el__double">
                                <p class="font-semibold text-lg sm:text-xl md:text-2xl ">5600 <span class="text-sm font-semibold">Clicks</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="products__checkbox--wrapper bg-white px-3 md:px-5 py-3 md:py-6 mt-6">
                {{-- <div class="grid__checkboxes grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-14 gap-y-2">
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Dvd / cd / mp3
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Système de navigation / gps
                          <input type="checkbox"  checked="checked">
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Volant sport
                          <input type="checkbox"  >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Alarme
                          <input type="checkbox"  >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Vitres éléctriques
                          <input type="checkbox"  >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Détecteur de pluie
                          <input type="checkbox"  >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Aide parking
                          <input type="checkbox" checked="checked" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Esp
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Direction assistée
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Abs
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Projecteurs xenon
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Ordinateur de bord
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Carnet d'entretien
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Toit ouvrant panoramique
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Régulateur de vitesse
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Anti patinage
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Intérieur cuir
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Affichage tête haute
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Capote électrique
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Siége electrique
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Frein de parking automatique
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Rétroviseur extérieur électrique
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Vitres surteintées
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Radar de recul
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Toit ouvrant
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Anti démarrage
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Verrouillage centralisé à distance
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Siège chauffant
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Contrôle de pression des pneus
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Jantes aluminium
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Siége sport
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Climatisation multizone
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Airbags
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Volant reglable
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Keyless go
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Climatisation auto
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>


                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Radio commande au volant
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Suspension sport
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Anti brouillard
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Non fumeur
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Limiteur de vitesse
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                    <div class="elem__checkbox">
                        <label class="container__input cursor-pointer  flex items-center justify-between text-sm">Système d'identification du conducteur
                          <input type="checkbox" >
                          <span class="checkmark ml-1"></span>
                        </label>
                    </div>

                </div> --}}
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
            {{-- </div> --}}

            <div class="more__button flex items-center justify-end mt-7">
                <form method="POST" action="{{ route('complet-car-information.publish-or-draft', ['id' => $car->id]) }}">
                    @csrf
                    <input type="number" name="visibility" hidden value="0">
                    <button type="submit" class="outline-btn inline-flex items-center justify-center px-4 rounded-md  text-sm font-medium mr-1">Enregistrer dans le brouillon</button>
                </form>
                <form method="POST" action="{{ route('complet-car-information.publish-or-draft', ['id' => $car->id]) }}">
                    @csrf
                    <input type="number" name="visibility" hidden value="1">
                    <button type="submit" class="regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm text-white font-medium">Publier</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
