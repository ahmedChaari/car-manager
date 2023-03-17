
@extends('layouts.seller')

@section('content')
<div class="overlay"></div>
<div class="dashboard__wrapper flex items-start justify-between">
    @include('partials.navbar')

    <div class="dashboard__main w-full">
        @include('partials.dashboard-header')
        <div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
            <div class="head__filter flex-col md:flex-row flex items-start md:items-center justify-between mb-4 md:mb-7">
                <h6 class="font-medium m-0  text-base lg:text-lg dark__grey">Mes voitures</h6>
                {{-- <a href="#" class="mt-2 md:mt-0 regular-btn inline-flex items-center justify-center px-4 rounded-md text-sm text-white font-medium"><span class="inline-flex items-center justify-center mr-2"><img src="{{ @asset('img/public.svg') }}" alt="public"></span>Publier</a> --}}
            </div>

            <div class="dashboard__container  py-4 lg:py-7 px-4 lg:px-8">
                <div class="gallery__wrapper mt-6 grid grid-cols-2 md:grid-cols-3 gap-x-4 gap-y-5">
                    @if($cars->count() > 0 )
                        @foreach($cars as $car)
                            <a href="{{ route('complet-car-information.show-step1' , $car->id) }}" class="elem__gallery bg-white">
                                <div class="image__gallery flex items-center justify-center relative">
                                    <span class="views inline-flex items-center justify-center px-2 py-1 font-medium"><img
                                            src="img/views.svg" class="mr-1" alt="views"> {{ $car->number_view }}</span>
                                    <img src="img/gallery1.webp" alt="gallery">
                                </div>
                                <div class="gallery__desc px-3 pt-2 pb-3">
                                    <p class="mb-2 text-sm font-medium dark__grey">{{ $car->brand }} {{ $car->model }}</p>
                                    <ul class="flex items-center justify-start flex-wrap">
                                        <li class="text-sm  mr-3 light__grey">Date Limite: <span
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
            </div>
        </div>
        {{-- @livewire('complet-car-information', ['car_id' => $car_id]) --}}
    </div>
</div>
@endsection