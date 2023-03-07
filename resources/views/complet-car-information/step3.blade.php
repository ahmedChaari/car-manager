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

            @include('components.alert')

            @livewire('update-car', ['car' => $car])

            {{-- Step 3 --}}
            <div class="images__loader py-4 lg:py-7 px-4 lg:px-8 bg-white">
                <div class="head__images mb-3 flex justify-between">
                    <h2 class="text-xl font-semibold">Photos du véhicule <span class="text-lg light__grey">(3/3)</span></h2>

                </div>

                @livewire('car-images', ['car' => $car])
            </div>

            <div class="controls__wrapper flex items-center justify-end mt-4 md:mt-6">
                <a href="{{ route('complet-car-information.show-step2', ['id' => $car->id]) }}" class="outline-btn inline-flex items-center justify-center px-4 rounded-md mr-2 text-sm font-medium">Retour</a>
                <form class="m-0" method="POST" action="{{ route('complet-car-information.store-step3', ['id' => $car->id]) }}">
                    @csrf
                    <button type="submit" class="regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm font-medium text-white">Suivant</button>
                </form>
            </div>

            <div class="more__button flex items-center justify-end mt-7">
                <form method="POST" action="{{ route('complet-car-information.save-draft', ['id' => $car->id]) }}">
                    @csrf
                    <input type="number" name="published" hidden value="0">
                    <button type="submit" class="outline-btn inline-flex items-center justify-center px-4 rounded-md  text-sm font-medium mr-1">Enregistrer dans le brouillon</button>
                </form>
                {{-- <a href="#" class="regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm text-white font-medium">Publier</a> --}}
            </div>
        </div>
    </div>
</div>
@endsection
