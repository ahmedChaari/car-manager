@extends('layouts.admin')
@section('content')
<div class="info__wrapper flex items-center justify-center w-full relative">
    <!-- {{-- <a href="#" class="float__logo inline-flex items-center justify-center"><img src="{{ @asset('img/logofloat.svg') }}" alt="logofloat"></a> --}} -->
    <div class="info__inner text-center px-4">
        <h2  class="font-semibold text-lg md:text-3xl">Merci de charger le compte </h2>
        <div class="button__info mt-7 md:mt-10 flex items-center justify-center">
            <a href="{{ route('supply.list') }}" class="regular-btn  inline-flex items-center justify-center py-3 px-3 text-base font-bold  text-white"> <- Retour</a>
        </div>
    </div>
</div>
@endsection