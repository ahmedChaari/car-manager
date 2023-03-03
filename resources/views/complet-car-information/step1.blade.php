@extends('layouts.seller')

@section('content')
<div class="overlay"></div>
<div class="dashboard__wrapper flex items-start justify-between">
    @include('partials.navbar')

    <div class="dashboard__main w-full">
        @include('partials.dashboard-header')
        <div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
            <div class="head__filter flex-col md:flex-row flex items-start md:items-center justify-between mb-4 md:mb-7">
                <h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Compléter les informations de votre voiture</h6>
                {{-- <a href="#" class="mt-2 md:mt-0 regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm text-white font-medium"><span class="inline-flex items-center justify-center mr-2"><img src="{{ @asset('img/public.svg') }}" alt="public"></span>Publier</a> --}}
            </div>

            @livewire('update-car', ['car' => $car])

            <div class="information__block py-4 lg:py-4 px-4 lg:px-8">
                <form method="POST" action="{{ route('complet-car-information.store-step1', ['id' => $car->id]) }}">
                    @csrf
                    <div class="head__information mb-6">
                        <h2 class="text-xl font-semibold">Informations complémentaire <span class="text-lg light__grey">(1/3)</span></h2>
                        {{-- <p class="text-sm light__grey">Téléchargez des photos de votre véhicule</p> --}}
                    </div>
                    <div class="grid__information grid  grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-8 sm:gap-x-12 xl:gap-x-20 gap-y-5 sm:gap-y-8 xl:gap-y-12">
                        <div class="group__input group__dropdown relative">
                            <p  class="font-semibold mb-1 text-sm">Origin</p>
                            <select name="origin" class="text-base px-4 w-full bg-white h-11" style="border: 1px solid #D0D5DD;
                                box-shadow: 0px 1px 2px rgb(16 24 40 / 5%); border-radius: 8px;">
                                <option value="">Origin</option>
                                <option value="Dédouanée" {{ old('origin', $car->origin?? null) == 'Dédouanée' ? 'selected' : '' }}>Dédouanée</option>
                                <option value="Pas encore dédouanée" {{ old('origin', $car->origin?? null) == 'Pas encore dédouanée' ? 'selected' : '' }}>Pas encore dédouanée</option>
                                <option value="WW au Maroc" {{ old('origin', $car->origin?? null) == 'WW au Maroc' ? 'selected' : '' }}>WW au Maroc</option>
                                <option value="Importée neuve" {{ old('origin', $car->origin?? null) == 'Importée neuve' ? 'selected' : '' }}>Importée neuve</option>
                            </select>
                            @error('origin')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__input relative">
                            <p  class="font-semibold mb-1 text-sm">Première main</p>
                            <div class="radio__wrapper flex items-center justify-start  flex-wrap">
                                <div class="elem__radio my-1 mr-3">
                                    <label class="container__input  cursor-pointer flex items-center justify-start text-sm">oui
                                    <input type="radio" name="first_hand" value="1" {{ old('first_hand', $car->first_hand?? null) == 1 ? 'checked' : '' }}>
                                    <span class="checkmark ml-1"></span>
                                    </label>
                                </div>
                                <div class="elem__radio my-1">
                                    <label class="container__input cursor-pointer  flex items-center justify-start text-sm">non
                                    <input type="radio" name="first_hand" value="0" {{ old('first_hand', $car->first_hand?? null) == 0 ? 'checked' : '' }}>
                                    <span class="checkmark ml-1"></span>
                                    </label>
                                </div>
                            </div>
                            @error('first_hand')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__input relative">
                            <p  class="font-semibold mb-1 text-sm">Boîte de vitesses</p>
                            <div class="radio__wrapper flex items-center justify-start  flex-wrap">
                                <div class="elem__radio my-1 mr-3">
                                    <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Tous
                                    <input type="radio" name="gearbox" value="all" {{ old('gearbox', $car->gearbox?? null) == 'all' ? 'checked' : '' }}>
                                    <span class="checkmark ml-1"></span>
                                    </label>
                                </div>
                                <div class="elem__radio my-1 mr-3">
                                    <label class="container__input  cursor-pointer flex items-center justify-start text-sm">Automatique
                                    <input type="radio" name="gearbox" value="automatique" {{ old('gearbox', $car->gearbox?? null) == 'automatique' ? 'checked' : '' }}>
                                    <span class="checkmark ml-1"></span>
                                    </label>
                                </div>
                                <div class="elem__radio my-1">
                                    <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Manuel
                                    <input type="radio" name="gearbox" value="manual" {{ old('gearbox', $car->gearbox?? null) == 'manual' ? 'checked' : '' }}>
                                    <span class="checkmark ml-1"></span>
                                    </label>
                                </div>
                            </div>
                            @error('gearbox')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__input relative">
                            <p  class="font-semibold mb-1 text-sm">Carburant</p>
                            <div class="radio__wrapper flex items-center justify-start">
                                <div class="elem__radio my-1 mr-3">
                                    <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Tout
                                    <input type="radio" name="fuel" value="all" {{ old('fuel', $car->fuel?? null) == 'all' ? 'checked' : '' }}>
                                    <span class="checkmark ml-1"></span>
                                    </label>
                                </div>
                                <div class="elem__radio my-1 mr-3">
                                    <label class="container__input  cursor-pointer flex items-center justify-start text-sm">Diesel
                                    <input type="radio" name="fuel" value="diasel" {{ old('fuel', $car->fuel?? null) == 'diasel' ? 'checked' : '' }}>
                                    <span class="checkmark ml-1"></span>
                                    </label>
                                </div>
                                <div class="elem__radio my-1 mr-3">
                                    <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Essence
                                    <input type="radio" name="fuel" value="essence" {{ old('fuel', $car->fuel?? null) == 'essence' ? 'checked' : '' }}>
                                    <span class="checkmark ml-1"></span>
                                    </label>
                                </div>
                                <div class="elem__radio my-1 mr-3">
                                    <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Electric
                                    <input type="radio" name="fuel" name="fuel" value="electric" {{ old('fuel', $car->fuel?? null) == 'electric' ? 'checked' : '' }}>
                                    <span class="checkmark ml-1"></span>
                                    </label>
                                </div>

                                <div class="elem__radio my-1 mr-3">
                                    <label class="container__input cursor-pointer  flex items-center justify-start text-sm">LPG
                                    <input type="radio" name="fuel" value="lgp" {{ old('fuel', $car->fuel?? null) == 'lgp' ? 'checked' : '' }}>
                                    <span class="checkmark ml-1"></span>
                                    </label>
                                </div>

                                <div class="elem__radio my-1">
                                    <label class="container__input cursor-pointer  flex items-center justify-start text-sm">Hybrid
                                    <input type="radio" name="fuel" value="hybrid" {{ old('fuel', $car->fuel?? null) == 'hybrid' ? 'checked' : '' }}>
                                    <span class="checkmark ml-1"></span>
                                    </label>
                                </div>
                            </div>
                            @error('fuel')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="description__field w-full mt-5 md:mt-8">
                        <p class="font-semibold text-lg md:text-xl mb-4">Description</p>
                        <textarea name="description" cols="30" rows="10" placeholder="Veuillez donner plus d'informations sur votre véhicule" class="text-sm md:text-base bg-white p-4 w-full">{{old('description', $car->description?? null)}}</textarea>
                        @error('description')
                                <span class="error-validate">- {{ $message }}</span>
                        @enderror
                        <div class="counter">
                            <span class="block  text-right text-base font-medium"><span class="font-normal">0</span> / 4000</span>
                        </div>
                    </div>
                    <div class="controls__wrapper flex items-center justify-end mt-4 md:mt-6">
                        <button type="submit" class="regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm font-medium text-white">Suivant</button>
                    </div>
                </form>
            </div>

            <div class="more__button flex items-center justify-end mt-7">
                <form method="POST" action="{{ route('complet-car-information.publish-or-draft', ['id' => $car->id]) }}">
                    @csrf
                    <input type="number" name="visibility" hidden value="0">
                    <button type="submit" class="outline-btn inline-flex items-center justify-center px-4 rounded-md  text-sm font-medium mr-1">Enregistrer dans le brouillon</button>
                </form>
                {{-- <a href="#" class="regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm text-white font-medium">Publier</a> --}}
            </div>
        </div>
        {{-- @livewire('complet-car-information', ['car_id' => $car_id]) --}}
    </div>
</div>
@endsection
