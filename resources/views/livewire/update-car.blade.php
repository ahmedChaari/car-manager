<div class="step__info py-3 lg:py-5  px-4 lg:px-11 mb-7">
    <h6 class=" mb-3 text-2xl font-semibold">{{ $brand }} {{ $model }}</h6>
    <div class="price flex items-center justify-start mb-3">
        <p class="  text-lg font-medium mb-0">Prix : <span class="font-semibold ">{{$price}} DH</span> </p><button wire:click="updateField" wire:loading.attr="disabled" class="ml-2 inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></button>
    </div>
    <div class="grid__step grid  grid-cols-1 lg:grid-cols-2 xl:grid-cols-3  gap-x-6 gap-y-2">
        <div class="elem__grid--step flex items-center justify-between">
            <span class="text-sm font-medium text-left">Nom Et Prénom</span>
            <p class="text-right text-sm flex items-center justify-end ml-2">{{ $first_name }} {{ $last_name }}<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
        </div>
        <div class="elem__grid--step flex items-center justify-between">
            <span class="text-sm font-medium text-left">Fabrication</span>
            <p class="text-right text-sm flex items-center justify-end ml-2">{{ $brand }}<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
        </div>
        <div class="elem__grid--step flex items-center justify-between">
            <span class="text-sm font-medium text-left">An</span>
            <p class="text-right text-sm flex items-center justify-end ml-2">{{ $date_car }}<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
        </div>
        <div class="elem__grid--step flex items-center justify-between">
            <span class="text-sm font-medium text-left">E-Mail</span>
            <p class="text-right text-sm flex items-center justify-end ml-2">{{ $email }}<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
        </div>
        <div class="elem__grid--step flex items-center justify-between">
            <span class="text-sm font-medium text-left">Maquette</span>
            <p class="text-right text-sm flex items-center justify-end ml-2">{{ $model }}<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
        </div>
        <div class="elem__grid--step flex items-center justify-between">
            <span class="text-sm font-medium text-left">Kilométrage</span>
            <p class="text-right text-sm flex items-center justify-end ml-2">{{ $mileage }} Km<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
        </div>
        <div class="elem__grid--step flex items-center justify-between">
            <span class="text-sm font-medium text-left">Numéro De Téléphone</span>
            <p class="text-right text-sm flex items-center justify-end ml-2">{{ $tel }}<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
        </div>
        <div class="elem__grid--step flex items-center justify-between">
            <span class="text-sm font-medium text-left">Disponibilité</span>
            <p class="text-right text-sm flex items-center justify-end ml-2">{{ $city }}<a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p>
        </div>
        <div class="elem__grid--step flex items-center justify-between">
            <span class="text-sm font-medium text-left">État De La Voiture</span>
            <p class="text-right text-sm flex items-center justify-end ml-2">
                {{-- {{ $condition_car }} --}}
                @switch($condition_car)
                    @case('excellent')
                        Excellent
                        @break
                    @case('very_Good')
                        Très bon
                        @break
                    @case('damaged')
                        Endommagé
                        @break
                    @case('pieces')
                        Pour Pièces
                        @break
                    @case('correct')
                        Correct
                        @break
                @endswitch
                <a href="#" class="ml-3 items-center inline-flex">
                    <img src="{{ @asset('img/external.svg') }}" alt="external">
                </a>
            </p>
        </div>
    </div>
</div>
