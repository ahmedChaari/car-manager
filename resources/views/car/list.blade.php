@extends('layouts.admin')
@section('content')


<div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">

    <div class="head__filter flex-col xl:flex-row flex items-start xl:items-center justify-between mb-4 md:mb-7">
        <h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Annonces</h6>
        <div
            class="controls__tab flex-wrap w-full md:w-auto  flex items-center justify-start md:justify-end ml-0  mt-3 xl:mt-0 xl:ml-4">
            <div class="button__wrapper">
                <a href="#"
                    class="regular-btn px-4 rounded-md text-white inline-flex items-center justify-center text-sm font-medium"><span
                        class="inline-flex mr-2"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 6H17" stroke="white" stroke-width="2" stroke-linecap="round" />
                            <path d="M2 10H11" stroke="white" stroke-width="2" stroke-linecap="round" />
                            <path d="M2 14H7" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span> Trier par</a>
            </div>
        </div>
    </div>
    <div class="filter__container px-3 md:px-6 pt-5 md:pt-6 pb-5 md:pb-10 bg-white rounded-md">
        <form class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-4  gap-y-3 sm:gap-y-4 md:gap-y-8"
            action="{{ route('car.search') }}" method="POST" role="search">
            @csrf

            <!-- all brand list -->
            <div class="group__input group__dropdown relative">
                <p class="font-semibold mb-1 text-sm"> Marque</p>
                <select name="brand" aria-label="Default select example"
                    style="padding-left: 12px; background-color: white;"
                    class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers">
                    <option value="" selected disabled>--------</option>
                    @foreach($brands ?? '' as $brand)
                    <option value="{{ $brand->brand }}">{{ $brand->brand }}</option>
                    @endforeach
                </select>
            </div>
            <!-- end all brand list -->
            <div class="group__input group__dropdown relative">
                <p class="font-semibold mb-1 text-sm"> Modèle</p>
                <input type="text" style="padding-left: 12px;" name="model" id="model"
                    class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers">
            </div>
            <!-- list city  -->
            <div class="group__input group__dropdown relative">
                <p class="font-semibold mb-1 text-sm"> Ville</p>
                <select name="city" aria-label="Default select example"
                    style="padding-left: 12px; background-color: white;"
                    class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers">
                    <option value="" selected disabled>--------</option>
                    @foreach($cities ?? '' as $city)
                    <option value="{{ $city->ville }}">{{ $city->ville }}</option>
                    @endforeach
                </select>
            </div>



            <!-- end list city -->
            <div class="group__input group__dropdown relative">
                <p class="font-semibold mb-1 text-sm"> Date de publication</p>
                <input type="date" style="padding-left: 12px;" name="created_at" id="created_at"
                    class="h-10 inline-flex items-center  justify-start relative w-full select-type-sellers">
            </div>

            <div class="group__input relative">
                <p class="font-semibold mb-1 text-sm">Première main</p>
                <div class="radio__wrapper flex items-center justify-start  flex-wrap">

                    <div class="elem__radio my-1 mr-3">
                        <label class="container__input  cursor-pointer flex items-center justify-start text-sm">Oui

                            <input class="form-check-input" type="checkbox" name="first_hand" value="1" id="">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__radio my-1">
                        <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Non

                            <input class="form-check-input" type="checkbox" name="first_hand" value="0" id="">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                </div>
            </div>


            <div class="group__input relative">
                <p class="font-semibold mb-1 text-sm">Boite à vitesse</p>
                <div class="radio__wrapper flex items-center justify-start  flex-wrap">
                    
                    <div class="elem__radio my-1 mr-3">
                        <label
                            class="container__input  cursor-pointer flex items-center justify-start text-sm">Automatique

                            <input class="form-check-input" type="checkbox" name="automatique" value="automatique"
                                id="">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__radio my-1">
                        <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Manuel

                            <input class="form-check-input" type="checkbox" name="manual" value="manual" id="">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                </div>
            </div>



			<div class="group__input group__dropdown relative">
                <p class="font-semibold mb-1 text-sm"> origine</p>
                <select name="origine" aria-label="Default select example"
                    style="padding-left: 12px; background-color: white;"
                    class="h-10 inline-flex items-center  justify-start 
					relative w-full select-type-sellers">
                    <option value="" selected disabled>origine</option>
                    <option value="origine">Dédouanée</option>
					<option value="Pas encore dédouanée">Pas encore dédouanée</option>
					<option value="WW au Maroc">WW au Maroc</option>
					<option value="Importée neuve">Importée neuve</option>
                    
                </select>
            </div>




            <div class="group__input relative">
                <p class="font-semibold mb-1 text-sm">État de la voiture</p>
                <div class="radio__wrapper flex items-center justify-start  flex-wrap">
                    <div class="elem__checkbox my-1 mr-3">
                        <label
                            class="container__input cursor-pointer  flex items-center justify-start text-sm">Excellent

                            <input class="form-check-input" type="checkbox" name="condition_car" value="excellent"
                                id="excellent">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox my-1 mr-3">
                        <label class="container__input  cursor-pointer flex items-center justify-start text-sm">Très bon

                            <input class="form-check-input" type="checkbox" name="very_Good" value="very_Good"
                                id="very_Good">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox my-1 mr-3">
                        <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Bon

                            <input class="form-check-input" type="checkbox" name="good" value="good" id="good">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox my-1 mr-3">
                        <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Endommagé

                            <input class="form-check-input" type="checkbox" name="damaged" value="damaged" id="damaged">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox my-1 mr-3">
                        <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Pour Pièces

                            <input class="form-check-input" type="checkbox" name="pieces" value="pieces" id="pieces">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__checkbox my-1">
                        <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Correct
                            <input class="form-check-input" type="checkbox" name="correct" value="correct" id="correct">

                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                </div>
            </div>



            <div class="group__input relative">
                <p class="font-semibold mb-1 text-sm">Carburant</p>
                <div class="radio__wrapper flex items-center justify-start  flex-wrap">
                    <div class="elem__radio my-1 mr-3">
                        <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Tout
                            <input type="checkbox" name="fuel" value="all">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__radio my-1 mr-3">
                        <label class="container__input  cursor-pointer flex items-center justify-start text-sm">Diesel
                            <input type="checkbox" name="fuel" value="diasel">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__radio my-1 mr-3">
                        <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Essence
                            <input type="checkbox" name="fuel" value="essence">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__radio my-1 mr-3">
                        <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Electrique
                            <input type="checkbox" name="fuel" value="electric">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__radio my-1 mr-3">
                        <label class="container__input cursor-pointer  flex items-center justify-start text-sm">LPG
                            <input type="checkbox" name="fuel" value="lpg">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                    <div class="elem__radio my-1">
                        <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Hybrid
                            <input type="checkbox" name="fuel" value="hybrid">
                            <span class="checkmark ml-1"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="group__input relative range__group">
                <p class="font-semibold mb-1 text-sm">Kilométrage</p>
                <div class="values__range flex items-center justify-between">
                    <p class="text-sm font-medium" id='' name=''>0</p>
                    <p class="text-sm font-medium">790,000+</p>
                </div>
                <div class="info__range flex items-center justify-between">
                    <p class="m-0 text-sm dark__grey">Le minimum</p>
                    <p class="m-0 text-sm dark__grey">Max</p>
                </div>
                <div class="range__input ">
                    <input type="text" id="range__km">
                </div>
            </div>
            <div class="group__input relative range__group">
                <p class="font-semibold mb-1 text-sm">Année</p>
                <div class="values__range flex items-center justify-between">
                    <p class="text-sm font-medium">1980</p>
                    <p class="text-sm font-medium">{{ date('Y') }}</p>
                </div>
                <div class="info__range flex items-center justify-between">
                    <p class="m-0 text-sm dark__grey">Le minimum</p>
                    <p class="m-0 text-sm dark__grey">Max</p>
                </div>
                <div class="range__input">
                    <input type="text" id="range__an">
                </div>
            </div>
            <div class="group__input relative range__group">
                <p class="font-semibold mb-1 text-sm">Prix</p>
                <div class="values__range flex items-center justify-between">
                    <p class="text-sm font-medium">5000</p>
                    <p class="text-sm font-medium">500,000</p>
                </div>
                <div class="info__range flex items-center justify-between">
                    <p class="m-0 text-sm dark__grey">Le minimum</p>
                    <p class="m-0 text-sm dark__grey">Max</p>
                </div>
                <div class="range__input">
                    <input type="text" id="range__prix">
                </div>

                <div class="group__input relative mt-3">
                    <button type="submit" class="regular-btn px-4 
					rounded-md text-white inline-flex items-center 
					justify-center text-sm font-medium" style="float: right;">
                        <span class="inline-flex mr-2">
                            <img src="  {{ asset('assets/img/searchbutton.svg') }}" alt="">
                        </span> Recherche
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- end search -->
    <div class="gallery__wrapper mt-6 grid grid-cols-2 md:grid-cols-3 gap-x-4 gap-y-5">
        @if($cars->count() > 0 )
        @foreach($cars as $car)
        <a href="{{ route('car.info' , $car->id) }}" class="elem__gallery bg-white">
            <div class="image__gallery flex items-center justify-center relative">
                <span class="views inline-flex items-center justify-center px-2 py-1 font-medium"><img
                        src="img/views.svg" class="mr-1" alt="views"> {{ $car->number_view }}</span>
                <img src="img/gallery1.webp" alt="gallery">
            </div>
            <div class="gallery__desc px-3 pt-2 pb-3">
                <p class="mb-2 text-sm font-medium dark__grey">{{ $car->brand }} {{ $car->model }}</p>
                <ul class="flex items-center justify-start flex-wrap">
                    <li class="text-sm  mr-3 light__grey">Date Publication: <span
                            class="dark__grey font-semibold">{{ $car->created_at->diffForHumans() }}</span></li>
                    <!-- <li  class="text-sm  mr-3 light__grey">Montant de l'enchère: <span class="dark__grey font-semibold">123</span></li> -->
                </ul>
            </div>
        </a>

        @endforeach
        @else
        <h3 class="text-center mt-5 mb-5">Pas encore du voitures</h3>
        @endif


    </div>
    <!-- {{ $cars->links() }} -->

    <div class="table__wrapper w-full mt-7">
        <table class="regular-table w-full">
            <tr>
                <th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Marque</th>
                <th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Propriétaire</th>
                <th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Prix</th>
                <th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Date de publication</th>
                <!-- <th class="text-xs uppercase  tracking-wider text-left font-medium px-6 py-3">Date de clôture  <br>
						des enchères</th> -->
                <th class="text-xs uppercase  tracking-wider text-left font-medium x-6 py-3">Afficher
                </th>
            </tr>
            @if($cars->count() > 0 )
            @foreach($cars as $car)
            <tr class="bg-white">
                <td class="px-6 py-3">
                    <p class="dmsans text-sm font-medium dark__grey">{{ $car->brand }}</p>
                </td>
                <td class="px-6 py-3">
                    <p class="text-sm light__grey">{{ $car->user->first_name }} {{ $car->user->last_name }}</p>
                </td>
                <td class="px-6 py-3">
                    <p class="text-sm light__grey">{{ number_format($car->price , 2) }} Dh</p>
                </td>
                <td class="px-6 py-3">
                    <p class="text-sm light__grey">{{ \Carbon\Carbon::parse($car->created_at)->format('M j Y') }}</p>
                </td>
                <!-- <td  class="px-6 py-3 ">
							<p class="text-sm light__grey">Jan. 31, 2008</p>
						</td>
						 -->

						 
                <td class="">
                    <a href="{{ route('car.info' , $car->id) }}">
                        <!-- icons8-eye.png -->
                        <!-- <p class="text-center validated text-sm">Publier</p> -->
                        <img src="{{asset('assets/img/password.svg')}}" alt="edit">
                    </a>

                </td>
            </tr>
            @endforeach
            @else
            <h3 class="text-center mt-5 mb-5">Pas encore du voitures</h3>
            @endif
        </table>
    </div>
    {{ $cars->links() }}
</div>

@endsection