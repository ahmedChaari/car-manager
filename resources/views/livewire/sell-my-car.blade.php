<div class="sign__wrapper w-full flex justify-between overflow-hidden">
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
                        <p class="text-white font-semibold text-base">Étape 1 :</p>
                        <span class="text-base">Informations personnelles</span>
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
                        <p class="text-white font-semibold text-base">Étape 2 :</p>
                        <span class="text-base">Informations sur le véhicule</span>
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
                        <p class="text-white font-semibold text-base">Étape 3 :</p>
                        <span class="text-base">Informations complémentaire sur le véhicule</span>
                    </div>
                </div>
                <div class="step__element flex items-start justify-start w-100 @if ($step >= 4) active__step @endif">
                    <div class="step__span flex flex-col  justify-center mr-4">
                        <div class="span__circle inline-flex items-center justify-center">
                            <span></span>
                        </div>
                    </div>
                    <div class="step__desc">
                        <p class="text-white font-semibold text-base">Étape 4 :</p>
                        <span class="text-base">Validation de votre compte</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="sign__bottom mt-5 lg:mt-10">
            <ul class="flex flex-col xl:flex-row  items-start xl:items-center justify-between">
                <li  class="inline-flex mb-3 xl:mb-0">
                    <p class='text-sm text-white'>© voiturecash.ma 2022</p>
                </li>
                <li  class="inline-flex">
                    <a href="#" class="text-sm text-white inline-flex"><span class="inline-flex mr-2"><img src="{{ asset('img/envelope.svg') }}" alt="envelope"></span>help@voiturecash.ma</a>
                </li>
            </ul>
        </div>
    </div>
    @if (!$is_finished)
            @if ($step <= 1)
                <div class="sign__right py-7 lg:py-10 w-full overflow-auto px-4">
                    <form wire:submit.prevent="step1" class="w-full mx-auto">
                        <div class="head__sign mb-8 text-center">
                            <h6 class="mb-3 text-2xl lg:text-3xl font-semibold">Vous voulez vendre votre voiture rapidement et facilement ?</h6>
                            <p class="m-0 text-base">Que vous soyez un particulier ou un professionnel, vous pouvez publier votre annonce en quelques clics et atteindre des milliers d’acheteurs potentiels.
                                Merci de remplir le formulaire ci-dessous pour commencer.</p>
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
                                <select wire:model="type_vendeur" class="text-base px-4 w-full bg-white h-11" style="border: 1px solid #D0D5DD;
                                    box-shadow: 0px 1px 2px rgb(16 24 40 / 5%); border-radius: 8px;">
                                    <option value="">Vous êtes</option>
                                    <option value="particular">Particulier</option>
                                    <option value="professional">Professionnel</option>
                                </select>
                                @error('type_vendeur')
                                    <span class="error-validate">- {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="group__input mb-5">
                                <input wire:model="email" type="text" placeholder="Email" class="text-base px-4 w-full bg-white h-11">
                                @error('email')
                                    <span class="error-validate">- {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <div class="group__input relative flex items-center">
                                    <input wire:model="tel" type="text" placeholder="Téléphone" class="text-base pl-4 pr-10 w-full bg-white h-11">

                                </div>
                                @error('tel')
                                    <span class="error-validate">- {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="group__input mb-5">
                                <div class="group__input mb-5">
                                    <input wire:model="password" type="password" placeholder="Mot de pass" class="text-base px-4 w-full bg-white h-11">
                                    <div class="tooltip__wrapper" style="position: absolute;right: initial;margin: 12px -25px;">
                                        <span><img src="{{ @asset('img/iconinfo.svg') }}" alt="iconinfo"></span>
                                            <div class="tooltip__box">
                                                <p>*</p>
                                                <span>Veuillez choisir un mot de passe qui contient 8 caractères minimum.</span>
                                            </div>
                                    </div>
                                </div>
                                @error('password')
                                        <span class="error-validate">- {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="group__submit">
                                <button type="submit" class="regular-btn w-full text-white font-semibold h-11" >Continuer</button>

                            </div>
                        </div>
                    </form>
                </div>
            @elseif ($step <= 2)
                <div class="sign__right py-7 lg:py-10 w-full flex items-center justify-center px-4">
                    <form wire:submit.prevent="step2" class="w-full mx-auto">
                        <div class="head__sign mb-8 text-center">
                            <h6 class="mb-3 text-2xl lg:text-3xl font-semibold">Informations sur le véhicule</h6>
                            {{-- <p class="m-0 text-base">Quelque information à ajouter ici.</p> --}}
                        </div>
                        <div class="form__box mx-auto">
                            <div class="group__input mb-5">
                                {{-- <input wire:model="brand" type="text" placeholder="Marque" class="text-base px-4 w-full bg-white h-11"> --}}
                                <select wire:model="brand" class="text-base px-4 w-full bg-white h-11 select-type-sellers input">
                                    <option value="">Marque</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->brand }}">{{ $brand->brand }}</option>
                                    @endforeach
                                </select>
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
                                    <option value="">Année</option>
                                    @for ($year = date('Y'); $year >= 1990; $year--)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                                @error('date_car')
                                    <span class="error-validate">- {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="group__input group__dropdown relative mb-6">
                                <input wire:model="mileage" type="number" placeholder="Kilométrage" class="text-base px-4 w-full bg-white h-11">
                                {{-- <select wire:model="mileage" class="text-base px-4 w-full bg-white h-11 select-type-sellers input">
                                    <option value="">Odomètre (Compteur)</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select> --}}
                                @error('mileage')
                                    <span class="error-validate">- {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="group__submit">
                                <button type="submit" class="regular-btn w-full text-white font-semibold h-11">Continuer</button>
                                <span wire:click="stepBack" wire:loading.attr="disabled" class="cursor-pointer outline-btn inline-flex items-center justify-center px-4 rounded-md mr-2 text-sm regular-btn w-full font-semibold h-11 mt-5">Retour</span>
                            </div>
                        </div>
                    </form>
                </div>
            @else
                <div class="sign__right py-7 lg:py-10 w-full flex items-center justify-center px-4">
                    <form wire:submit.prevent="step3" class="w-full mx-auto">
                        <div class="head__sign mb-8 text-center">
                            <h6 class="mb-3 text-2xl lg:text-3xl font-semibold">Quelques informations complémentaires</h6>
                            {{-- <p class="m-0 text-base">Quelque information à ajouter ici.</p> --}}
                        </div>
                        <div class="form__box mx-auto">
                            <div class="group__input mb-5">
                                <input wire:model="gray_card_holder" type="text" placeholder="Titulaire de la carte gris" class="text-base px-4 w-full bg-white h-11">
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
                                <input wire:model="price" type="text" placeholder="Prix souhaité" class="text-base px-4 w-full bg-white h-11">
                                @error('price')
                                    <span class="error-validate">- {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <div class="group__input relative flex items-center">
                                    {{-- <input wire:model="condition_car" type="text" placeholder="Etat de la voiture" class="text-base pl-4 pr-10 w-full bg-white h-11"> --}}
                                    <select wire:model="condition_car"
                                    aria-label="Default select example"
                                    class="text-base px-4 w-full bg-white h-11 select-type-sellers">
                                        <option value="">État de la voiture</option>
                                        <option value="excellent">Excellent</option>
                                        <option value="very_Good">Très bon</option>
                                        <option value="correct">Correct</option>
                                        <option value="damaged">Endommagé</option>
                                        <option value="pieces">Pour Pièces</option>
                                    </select>
                                </div>
                                @error('condition_car')
                                    <span class="error-validate">- {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="group__submit">
                                <button type="submit" class="regular-btn w-full text-white font-semibold h-11">Continuer</button>
                                <span wire:click="stepBack" wire:loading.attr="disabled" class="cursor-pointer outline-btn inline-flex items-center justify-center px-4 rounded-md mr-2 text-sm regular-btn w-full font-semibold h-11 mt-5">Retour</span>
                            </div>
                        </div>
                    </form>
                </div>
            @endif
        @else
        <div class="sign__right py-7 lg:py-10 w-full flex flex-col items-center justify-center px-4">
            <div class="mx-auto px-10 w-full">
                <div class="head__sign mb-8 text-center">
                    <h6 class="mb-3 text-2xl lg:text-3xl font-semibold">Félicitations, votre profil a été créé avec succès ! Vous êtes maintenant prêt à publier votre annonce.</h6>
                    <p class="m-0 text-base">Veuillez compléter tous les détails nécessaires pour que votre annonce soit efficace et attrayante pour les visiteurs. Nous sommes impatients de voir votre annonce publiée sur notre plateforme.</p>
                </div>
            </div>
            <form action="" class="w-full mx-auto longer">
                <div class="button__submit flex justify-center items-center ">
                    <a href="{{ route('complet-car-information.show-step1', ['id' => $car_id]) }}" class="regular-btn px-5 py-3 text-base font-bold text-white">Completer le profile de ma voiture</a>
                </div>
            </form>
        </div>
        @endif
    </div>
</div>
