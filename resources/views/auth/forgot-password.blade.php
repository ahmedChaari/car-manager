@extends('layouts.gues')

@section('content')
<div class="sign__box">
    <div class="inner__sign w-full mx-auto flex flex-col items-center justify-center px-4 py-7">
        
        <form class="w-full" method="POST" action="{{ route('password.email') }}">
            @csrf

            <h2 class="mb-4 font-bold dark__grey text-2xl md:text-3xl">Mot de passe oublié ?</h2>
            <p class="mb-3 text-base md:text-lg light__grey">Indiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d'en choisir un nouveau.</p>
            {{-- From Inputs --}}
            <div class="box__fields bg-white px-3 md:px-5 py-3 md:py-5">
                <div class="group__input  mb-3 w-full">
                    <p class="mb-3 font-medium dmsans">E-mail</p>
                    <input id="email" class="px-5 w-full" type="email" name="email" placeholder="uistore@gmail.com" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="error-validate">- {{ $message }}</span>
                    @enderror
                </div>
            </div>
            <x-button>
                Envoyer
            </x-button>
        </form>
    </div>
</div>
@endsection


