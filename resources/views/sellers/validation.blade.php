@extends('layouts.guest')

@section('content')
    <div class="sign__wrapper w-full flex justify-between">
        <div class="sign__left py-4 lg:py-10 px-4 pr-4 lg:px-10 flex flex-col justify-between">
            <div class="sign__top">
                <a href="#" class="inline-flex mb-6 lg:mb-12 xl:mb-24">
                    <img src="/assets/img/logosign.svg" alt="logosign">
                </a>
                <div class="step__wrapper w-100">
                    <div class="step__element flex items-start justify-start w-100 active__step">
                        <div class="step__span flex flex-col items-center  justify-center mr-4">
                            <div class="span__circle inline-flex items-center justify-center">
                                <img src="/assets/img/stepcheck.svg" alt="stepcheck">
                            </div>
                            <span class="stick"></span>
                        </div>
                        <div class="step__desc">
                            <p class="text-white font-semibold text-base">Step 1</p>
                            <span class="text-base">informations personnelles</span>
                        </div>
                    </div>
                    <div class="step__element flex items-start justify-start w-100 active__step">
                        <div class="step__span flex flex-col items-center  justify-center mr-4">
                            <div class="span__circle inline-flex items-center justify-center">
                                <span></span>
                            </div>
                            <span class="stick"></span>
                        </div>
                        <div class="step__desc">
                            <p class="text-white font-semibold text-base">Step 2</p>
                            <span class="text-base">informations sur le véhicule</span>
                        </div>
                    </div>

                    <div class="step__element flex items-start justify-start w-100">
                        <div class="step__span flex flex-col  justify-center mr-4">
                            <div class="span__circle inline-flex items-center justify-center">
                                <span></span>
                            </div>
                        </div>
                        <div class="step__desc">
                            <p class="text-white font-semibold text-base">Step 3</p>
                            <span class="text-base">validation</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sign__bottom mt-5 lg:mt-10">
                <ul class="flex flex-col xl:flex-row  items-start xl:items-center justify-between">
                    <li  class="inline-flex mb-3 xl:mb-0">
                        <p class='text-sm	 text-white'>© voiturecash.ma 2022</p>
                    </li>
                    <li  class="inline-flex">
                        <a href="#" class="text-sm text-white inline-flex"><span class="inline-flex mr-2"><img src="/assets/img/envelope.svg" alt="envelope"></span>help@voiturecash.ma</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sign__right py-7 lg:py-10 w-full flex items-center justify-center px-4">
            <form action="" class="w-full mx-auto longer">
                <div class="head__sign mb-8 text-center">
                    <h6 class="mb-3 text-2xl lg:text-3xl font-semibold">Votre demande à été envoyée</h6>
                    <p class="m-0 text-base">Veuillez attendre un e-mail ou un SMS contenant vos identifiants de connexion dans les prochaines 24 heures</p>
                </div>
                <div class="button__submit flex justify-center items-center ">
                    <a href="#" class="regular-btn px-5 py-3 text-base font-bold text-white">Completer le profile de ma voiture</a>
                </div>

            </form>
        </div>
    </div>
@endsection
