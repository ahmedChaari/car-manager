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

            <div class="step__info py-3 lg:py-5  px-4 lg:px-11 mb-7">
                <h6 class=" mb-3 text-2xl font-semibold">Dodge Charger SXT AWD</h6>
                <div class="price flex items-center justify-start mb-3">
                    <p class="  text-lg font-medium mb-0">Prix : <span class="font-semibold ">320 000 DH</span> </p><a href="#" class="ml-2 inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a>
                </div>
                <div class="grid__step grid  grid-cols-1 lg:grid-cols-2 xl:grid-cols-3  gap-x-6 gap-y-2">
                    <div class="elem__grid--step flex items-center justify-between">
                        <span class="text-sm font-medium text-left">Année De Fabrication</span>
                        <p class="text-right text-sm flex items-center justify-end ml-2">mostafa tariki <a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
                    </div>
                    <div class="elem__grid--step flex items-center justify-between">
                        <span class="text-sm font-medium text-left">Fabrication</span>
                        <p class="text-right text-sm flex items-center justify-end ml-2">Dodge<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
                    </div>
                    <div class="elem__grid--step flex items-center justify-between">
                        <span class="text-sm font-medium text-left">An</span>
                        <p class="text-right text-sm flex items-center justify-end ml-2">2010<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
                    </div>
                    <div class="elem__grid--step flex items-center justify-between">
                        <span class="text-sm font-medium text-left">E-Mail</span>
                        <p class="text-right text-sm flex items-center justify-end ml-2">example@emai.com<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
                    </div>
                    <div class="elem__grid--step flex items-center justify-between">
                        <span class="text-sm font-medium text-left">Maquette</span>
                        <p class="text-right text-sm flex items-center justify-end ml-2">Charger SXT AWD<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
                    </div>
                    <div class="elem__grid--step flex items-center justify-between">
                        <span class="text-sm font-medium text-left">Kilométrage</span>
                        <p class="text-right text-sm flex items-center justify-end ml-2">154,200Km<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
                    </div>
                    <div class="elem__grid--step flex items-center justify-between">
                        <span class="text-sm font-medium text-left">Numéro De Téléphone</span>
                        <p class="text-right text-sm flex items-center justify-end ml-2">06 6XX XXXXX<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
                    </div>
                    <div class="elem__grid--step flex items-center justify-between">
                        <span class="text-sm font-medium text-left">Disponibilité</span>
                        <p class="text-right text-sm flex items-center justify-end ml-2">....<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
                    </div>
                    <div class="elem__grid--step flex items-center justify-between">
                        <span class="text-sm font-medium text-left">État De La Voiture</span>
                        <p class="text-right text-sm flex items-center justify-end ml-2">Very good<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
                    </div>
                </div>
            </div>

            {{-- Step 3 --}}
            <form method="POST" action="{{ route('complet-car-information.store-step3', ['id' => $car->id]) }}" class="images__loader py-4 lg:py-7 px-4 lg:px-8 bg-white">
                @csrf
                <div class="head__images">
                    <h2 class="text-xl font-semibold">Images de véhicules</h2>
                    <p class="text-sm light__grey">Téléchargez des photos de votre véhicule</p>
                </div>
                <div class="gallery__images flex-col md:flex-row flex relative items-center justify-between mt-6">
                    <input type="file">
                    <div class="main__image relative">
                        <img src="{{ @asset('img/image.png') }}" alt="image">
                        <a href="#"><img src="{{ @asset('img/loadimage.svg') }}" alt="loadimage"></a>
                    </div>
                    <div class="small__images  grid  grid-cols-3 sm:grid-cols-5  gap-x-2  xl:gap-x-4  gap-y-2 xl:gap-y-3">
                        <div class="el__small--image">
                            <img src="{{ @asset('img/image.png') }}" alt="image">
                            <a href="#"><img src="{{ @asset('img/loadimage.svg') }}" alt="loadimage"></a>
                        </div>
                        <div class="el__small--image">
                            <img src="{{ @asset('img/image.png') }}" alt="image">
                            <a href="#"><img src="{{ @asset('img/loadimage.svg') }}" alt="loadimage"></a>
                        </div>
                        <div class="el__small--image">
                            <img src="{{ @asset('img/image.png') }}" alt="image">
                            <a href="#"><img src="{{ @asset('img/loadimage.svg') }}" alt="loadimage"></a>
                        </div>
                        <div class="el__small--image">
                            <img src="{{ @asset('img/image.png') }}" alt="image">
                            <a href="#"><img src="{{ @asset('img/loadimage.svg') }}" alt="loadimage"></a>
                        </div>
                        <div class="el__small--image">
                            <img src="{{ @asset('img/image.png') }}" alt="image">
                            <a href="#"><img src="{{ @asset('img/loadimage.svg') }}" alt="loadimage"></a>
                        </div>
                        <div class="el__small--image">
                            <img src="{{ @asset('img/image.png') }}" alt="image">
                            <a href="#"><img src="{{ @asset('img/loadimage.svg') }}" alt="loadimage"></a>
                        </div>
                        <div class="el__small--image">
                            <img src="{{ @asset('img/image.png') }}" alt="image">
                            <a href="#"><img src="{{ @asset('img/loadimage.svg') }}" alt="loadimage"></a>
                        </div>
                        <div class="el__small--image">
                            <img src="{{ @asset('img/image.png') }}" alt="image">
                            <a href="#"><img src="{{ @asset('img/loadimage.svg') }}" alt="loadimage"></a>
                        </div>
                        <div class="el__small--image">
                            <img src="{{ @asset('img/image.png') }}" alt="image">
                            <a href="#"><img src="{{ @asset('img/loadimage.svg') }}" alt="loadimage"></a>
                        </div>
                    </div>
                </div>
                <div class="controls__wrapper flex items-center justify-end mt-4 md:mt-6">
                    <span wire:click="stepBack" wire:loading.attr="disabled" class="outline-btn inline-flex items-center justify-center px-4 rounded-md mr-2 text-sm font-medium">Retour</span>
                    <button type="submit" class="regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm font-medium text-white">Suivant</button>
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
