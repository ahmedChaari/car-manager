@extends('layouts.seller')

@section('content')
<div class="info__wrapper flex items-center justify-center w-full relative">
    {{-- <a href="#" class="float__logo inline-flex items-center justify-center"><img src="{{ @asset('img/logofloat.svg') }}" alt="logofloat"></a> --}}
    <div class="info__inner text-center px-4">
        <h2  class="font-semibold text-lg md:text-3xl">Merci d'avoir complété les informations <br> sur votre voiture.</h2>
        <p class="text-base light__grey mb-0">Votre véhicule sera bientôt public pour nos partenaires</p>
        <div class="button__info mt-7 md:mt-10 flex items-center justify-center">
            <a href="/dashboard" class="regular-btn  inline-flex items-center justify-center py-3 px-3 text-base font-bold  text-white">Retour sur le dashboard</a>
        </div>
    </div>
</div>
@endsection
