<div class="sign__wrapper w-full flex justify-between">
    <div class="sign__left py-4 lg:py-10 px-4 pr-4 lg:px-10 flex flex-col justify-between">
        <div class="sign__top">
            <a href="/" class="inline-flex mb-6 lg:mb-12 xl:mb-24">
                <img src="{{ @asset('img/logosign.svg') }}" alt="logosign">
            </a>
            <div class="step__wrapper w-100">
                <div class="step__element flex items-start justify-start w-100 active__step">
                    <div class="step__span flex flex-col items-center  justify-center mr-4">
                        <div class="span__circle inline-flex items-center justify-center">
                            <span></span>
                        </div>
                        <span class="stick"></span>
                    </div>
                    <div class="step__desc">
                        <p class="text-white font-semibold text-base">Step 1</p>
                        <span class="text-base">informations personnelles</span>
                    </div>
                </div>
                <div class="step__element flex items-start justify-start w-100 @if ($step >= 2) active__step @endif">
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
                <div class="step__element flex items-start justify-start w-100 @if ($step >= 3) active__step @endif">
                    <div class="step__span flex flex-col items-center  justify-center mr-4">
                        <div class="span__circle inline-flex items-center justify-center">
                            <span></span>
                        </div>
                        <span class="stick"></span>
                    </div>
                    <div class="step__desc">
                        <p class="text-white font-semibold text-base">Step 3</p>
                        <span class="text-base">informations sur le véhicule</span>
                    </div>
                </div>
                <div class="step__element flex items-start justify-start w-100 @if ($step >= 4) active__step @endif">
                    <div class="step__span flex flex-col  justify-center mr-4">
                        <div class="span__circle inline-flex items-center justify-center">
                            <span></span>
                        </div>
                    </div>
                    <div class="step__desc">
                        <p class="text-white font-semibold text-base">Step 4</p>
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
                    <a href="#" class="text-sm text-white inline-flex"><span class="inline-flex mr-2"><img src="{{ asset('img/envelope.svg') }}" alt="envelope"></span>help@voiturecash.ma</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="sign__right py-7 lg:py-10 w-full flex items-center justify-center px-4">
        @if (!$is_finished)
            @if ($step <= 1)
                <form wire:submit.prevent="step1" class="w-full mx-auto">
                    <div class="head__sign mb-8 text-center">
                        <h6 class="mb-3 text-2xl lg:text-3xl font-semibold">informations personnelles</h6>
                        <p class="m-0 text-base">merci de remplir les informations demandées</p>
                    </div>
                    <div class="form__box mx-auto">
                        <div class="group__input mb-5">
                            <input wire:model="first_name" type="text" placeholder="Nom" class="text-base px-4 w-full bg-white h-11">
                            @error('first_name')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__input mb-5">
                            <input wire:model="last_name" type="text" placeholder="Prénom" class="text-base px-4 w-full bg-white h-11">
                            @error('last_name')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__input mb-5">
                            <select wire:model="type_vendeur" class="text-base px-4 w-full bg-white h-11 select-type-sellers input">
                                <option value="" disabled selected>Type de vendeur :</option>
                                <option value="particular">Particular</option>
                                <option value="professional">Professional</option>
                            </select>
                            @error('type_vendeur')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__input mb-5">
                            <input wire:model="email" type="text" placeholder="Courriel" class="text-base px-4 w-full bg-white h-11">
                            @error('email')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <div class="group__input relative flex items-center">
                                <input wire:model="tel" type="text" placeholder="Telephone" class="text-base pl-4 pr-10 w-full bg-white h-11">
                                <div class="tooltip__wrapper">
                                    <span><img src="{{ @asset('img/iconinfo.svg') }}" alt="iconinfo"></span>
                                    <div class="tooltip__box">
                                        <p>Lorem, ipsum.</p>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, error, dolorem..</span>
                                    </div>
                                </div>
                            </div>
                            @error('tel')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__input mb-5">
                            <input wire:model="password" type="password" placeholder="Mot de pass" class="text-base px-4 w-full bg-white h-11">
                            @error('password')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__submit">
                            <button type="submit" class="regular-btn w-full text-white font-semibold h-11">Continuer</button>
                        </div>
                    </div>
                </form>
            @elseif ($step <= 2)
                <form wire:submit.prevent="step2" class="w-full mx-auto">
                    <div class="head__sign mb-8 text-center">
                        <h6 class="mb-3 text-2xl lg:text-3xl font-semibold">Informations sur le véhicule</h6>
                        <p class="m-0 text-base">Quelque information à ajouter ici.</p>
                    </div>
                    <div class="form__box mx-auto">
                        <div class="group__input mb-5">
                            <input wire:model="brand" type="text" placeholder="Marque" class="text-base px-4 w-full bg-white h-11">
                            @error('brand')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__input mb-5">
                            <input wire:model="model" type="text" placeholder="Modele" class="text-base px-4 w-full bg-white h-11">
                            @error('model')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__input mb-5">
                            {{-- <input wire:model="date_car" type="date" placeholder="Annee" class="text-base px-4 w-full bg-white h-11"> --}}
                            <select wire:model="date_car" class="text-base px-4 w-full bg-white h-11 select-type-sellers input">
                                <option value="">Annee</option>
                                <option value="1986">1986</option>
                                <option value="2000">2000</option>
                                <option value="1998">1998</option>
                            </select>
                            @error('date_car')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__input group__dropdown relative mb-6">
                            <select wire:model="mileage" class="text-base px-4 w-full bg-white h-11 select-type-sellers input">
                                <option value="">Odomètre (Compteur)</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            {{-- <input wire:model="mileage" type="hidden">
                            <a href="#" class="h-9 inline-flex items-center  justify-start relative w-full"><span class="text-base not__active">Odomètre (Compteur)</span> <img src="{{ @asset('img/arrowdown.svg') }}" alt="arrowdown" class="arrow"></a>
                            <div class="dropdown__box">
                                <ul class="px-2 py-2">
                                    <li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">1</a></li>
                                    <li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">2</a></li>
                                    <li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">3</a></li>
                                    <li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">4</a></li>
                                    <li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">5</a></li>
                                    <li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">6</a></li>
                                    <li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">7</a></li>
                                    <li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">8</a></li>
                                    <li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">9</a></li>
                                    <li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">10</a></li>
                                    <li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">11</a></li>
                                    <li class="flex w-full"><a class="flex w-full items-center justify-start px-2 py-2 rounded-md text-sm" href="#">12</a></li>
                                </ul>
                            </div> --}}
                            @error('mileage')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__submit">
                            <button type="submit" class="regular-btn w-full text-white font-semibold h-11">Continuer</button>
                        </div>
                    </div>
                </form>
            @else
                <form wire:submit.prevent="step3" class="w-full mx-auto">
                    <div class="head__sign mb-8 text-center">
                        <h6 class="mb-3 text-2xl lg:text-3xl font-semibold">Informations sur le véhicule</h6>
                        <p class="m-0 text-base">Quelque information à ajouter ici.</p>
                    </div>
                    <div class="form__box mx-auto">
                        <div class="group__input mb-5">
                            <input wire:model="gray_card_holder" type="text" placeholder="Titulaire de la carte gris :" class="text-base px-4 w-full bg-white h-11">
                            @error('gray_card_holder')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__input mb-5">
                            <input wire:model="gray_card_number" type="text" placeholder="Numero de carte grise (optionnel)" class="text-base px-4 w-full bg-white h-11">
                            @error('gray_card_number')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__input mb-5">
                            <input wire:model="city" type="text" placeholder="Disponibilité" class="text-base px-4 w-full bg-white h-11">
                            @error('city')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__input mb-5">
                            <input wire:model="price" type="text" placeholder="Prix Estimer" class="text-base px-4 w-full bg-white h-11">
                            @error('price')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <div class="group__input relative flex items-center">
                                {{-- <input wire:model="condition_car" type="text" placeholder="Etat de la voiture" class="text-base pl-4 pr-10 w-full bg-white h-11"> --}}
                                <select wire:model="condition_car" class="text-base px-4 w-full bg-white h-11 select-type-sellers input">
                                    <option value="">Etat de la voiture</option>
                                    <option value="excellent">Excellent</option>
                                    <option value="very Good">Very Good</option>
                                    <option value="damaged">Damaged</option>
                                    <option value="For pieces">For pieces</option>
                                    <option value="correct">Correct</option>
                                </select>
                                {{-- <div class="tooltip__wrapper">
                                    <span><img src="{{ @asset('img/iconinfo.svg') }}" alt="iconinfo"></span>
                                    <div class="tooltip__box">
                                        <p>Lorem, ipsum.</p>
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, error, dolorem..</span>
                                    </div>
                                </div> --}}
                            </div>
                            @error('condition_car')
                                <span class="error-validate">- {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="group__submit">
                            <button type="submit" class="regular-btn w-full text-white font-semibold h-11">Continuer</button>
                        </div>
                    </div>
                </form>
            @endif
        @else
            <form action="" class="w-full mx-auto longer">
                <div class="head__sign mb-8 text-center">
                    <h6 class="mb-3 text-2xl lg:text-3xl font-semibold">Votre demande à été envoyée</h6>
                    <p class="m-0 text-base">Veuillez attendre un e-mail ou un SMS contenant vos identifiants de connexion dans les prochaines 24 heures</p>
                </div>
                <div class="button__submit flex justify-center items-center ">
                    <a href="{{ route('dashboard') }}" class="regular-btn px-5 py-3 text-base font-bold text-white">Completer le profile de ma voiture</a>
                </div>
            </form>
        @endif
    </div>
</div>
