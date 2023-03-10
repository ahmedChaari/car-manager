<div class="step__info py-3 lg:py-5  px-4 lg:px-11 mb-7">
    <h6 class=" mb-3 text-2xl font-semibold">{{ $brand }} {{ $model }}</h6>
    <div class="price flex items-center justify-start mb-3">
        <p class="  text-lg font-medium mb-0">
            Prix : <span class="font-semibold ">{{$price}} DH</span>
        </p>
        {{-- <button wire:click="updateField" wire:loading.attr="disabled" class="ml-2 inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></button> --}}
    </div>
    <div class="grid__step grid  grid-cols-1 lg:grid-cols-2 xl:grid-cols-3  gap-x-6 gap-y-2">
        <div class="elem__grid--step flex items-center justify-between">
            <span class="text-sm font-medium text-left">Nom Et Prénom</span>
            <p class="text-right text-sm flex items-center justify-end ml-2">
                {{ $first_name }} {{ $last_name }}
                {{-- <a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external">
                </a> --}}
            </p>
        </div>

        <div class="item"
            x-data="
                {
                    origText: '{{ $brand }}',
                    newText: null,
                    isEditing: false,
                    edit: function() {
                        this.isEditing = true;
                    },
                    focus: function() {
                        const textInput = this.$refs.textInput;
                        textInput.focus();
                        textInput.select();
                    },
                    save: function() {
                        this.origText = this.newText;
                        this.isEditing = false;
                    },
                    cancel: function() {
                        this.newText = this.origText;
                        this.isEditing = false;
                    },
                }
            "
            x-init="newText = origText"
            >
            <div
                class="elem__grid--step flex items-center justify-between"
                x-show=!isEditing
            >
                <span class="text-sm font-medium text-left">Fabrication</span>
                <p class="text-right text-sm flex items-center justify-end ml-2">
                    {{-- <a href="#" class="ml-3 items-center inline-flex">
                        <img src="{{ @asset('img/external.svg') }}" alt="external">
                    </a> --}}
                </p>
                <span
                    class="text-right text-sm flex items-center justify-end ml-2"
                    x-text="newText"
                    @click="edit(); $nextTick(() => focus())"
                >
                </span>
            </div>
            <label x-show=isEditing class="flex flex-col">
                <div class="flex">
                    <form wire:submit.prevent="updateBrand()">
                        <input
                                wire:model="brand"
                                type="text"
                                x-ref="textInput"
                                x-model="newText"
                                @keydown.enter="save"
                                @keydown.escape="cancel"
                        >
                        <button type="button" title="Cancel" @click="cancel">ⓧ</button>
                        <button type="submit" title="Save" @click="save">✅</button>
                    </form>
                </div>
            </label>
        </div>

        <div class="item"
            x-data="
                {
                    origText: '{{ $date_car }}',
                    newText: null,
                    isEditing: false,
                    edit: function() {
                        this.isEditing = true;
                    },
                    focus: function() {
                        const textInput = this.$refs.textInput;
                        textInput.focus();
                        textInput.select();
                    },
                    save: function() {
                        this.origText = this.newText;
                        this.isEditing = false;
                    },
                    cancel: function() {
                        this.newText = this.origText;
                        this.isEditing = false;
                    },
                }
            "
            x-init="newText = origText"
            >
            <div
                class="elem__grid--step flex items-center justify-between"
                x-show=!isEditing
            >
                <span class="text-sm font-medium text-left">Annee</span>
                <p class="text-right text-sm flex items-center justify-end ml-2">
                    {{-- <a href="#" class="ml-3 items-center inline-flex">
                        <img src="{{ @asset('img/external.svg') }}" alt="external">
                    </a> --}}
                </p>
                <span
                    class="text-right text-sm flex items-center justify-end ml-2"
                    x-text="newText"
                    @click="edit(); $nextTick(() => focus())"
                >
                </span>
            </div>
            <label x-show=isEditing class="flex flex-col">
                <div class="flex">
                    <form wire:submit.prevent="updateDateCar()">
                        <input
                                wire:model="date_car"
                                type="text"
                                x-ref="textInput"
                                x-model="newText"
                                @keydown.enter="save"
                                @keydown.escape="cancel"
                        >
                        <button type="button" title="Cancel" @click="cancel">ⓧ</button>
                        <button type="submit" title="Save" @click="save">✅</button>
                    </form>
                </div>
            </label>
        </div>

        <div class="elem__grid--step flex items-center justify-between">
            <span class="text-sm font-medium text-left">E-Mail</span>
            <p class="text-right text-sm flex items-center justify-end ml-2">
                {{ $email }}
                {{-- <a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p> --}}
        </div>

        <div class="item"
            x-data="
                {
                    origText: '{{ $model }}',
                    newText: null,
                    isEditing: false,
                    edit: function() {
                        this.isEditing = true;
                    },
                    focus: function() {
                        const textInput = this.$refs.textInput;
                        textInput.focus();
                        textInput.select();
                    },
                    save: function() {
                        this.origText = this.newText;
                        this.isEditing = false;
                    },
                    cancel: function() {
                        this.newText = this.origText;
                        this.isEditing = false;
                    },
                }
            "
            x-init="newText = origText"
            >
            <div
                class="elem__grid--step flex items-center justify-between"
                x-show=!isEditing
            >
                <span class="text-sm font-medium text-left">Maquette</span>
                <p class="text-right text-sm flex items-center justify-end ml-2">
                    {{-- <a href="#" class="ml-3 items-center inline-flex">
                        <img src="{{ @asset('img/external.svg') }}" alt="external">
                    </a> --}}
                </p>
                <span
                    class="text-right text-sm flex items-center justify-end ml-2"
                    x-text="newText"
                    @click="edit(); $nextTick(() => focus())"
                >
                </span>
            </div>
            <label x-show=isEditing class="flex flex-col">
                <div class="flex">
                    <form wire:submit.prevent="updateModel()">
                        <input
                                wire:model="model"
                                type="text"
                                x-ref="textInput"
                                x-model="newText"
                                @keydown.enter="save"
                                @keydown.escape="cancel"
                        >
                        <button type="button" title="Cancel" @click="cancel">ⓧ</button>
                        <button type="submit" title="Save" @click="save">✅</button>
                    </form>
                </div>
            </label>
        </div>

        <div class="item"
            x-data="
                {
                    origText: '{{ $mileage }} Km',
                    newText: null,
                    isEditing: false,
                    edit: function() {
                        this.isEditing = true;
                    },
                    focus: function() {
                        const textInput = this.$refs.textInput;
                        textInput.focus();
                        textInput.select();
                    },
                    save: function() {
                        this.origText = this.newText;
                        this.isEditing = false;
                    },
                    cancel: function() {
                        this.newText = this.origText;
                        this.isEditing = false;
                    },
                }
            "
            x-init="newText = origText"
            >
            <div
                class="elem__grid--step flex items-center justify-between"
                x-show=!isEditing
            >
                <span class="text-sm font-medium text-left">Kilométrage</span>
                <p class="text-right text-sm flex items-center justify-end ml-2">
                    {{-- <a href="#" class="ml-3 items-center inline-flex">
                        <img src="{{ @asset('img/external.svg') }}" alt="external">
                    </a> --}}
                </p>
                <span
                    class="text-right text-sm flex items-center justify-end ml-2"
                    x-text="newText"
                    @click="edit(); $nextTick(() => focus())"
                >
                </span>
            </div>
            <label x-show=isEditing class="flex flex-col">
                <div class="flex">
                    <form action="">
                        <form wire:submit.prevent="updateMileage">
                            <input
                                    wire:model="mileage"
                                    type="text"
                                    x-ref="textInput"
                                    x-model="newText"
                                    @keydown.enter="save"
                                    @keydown.escape="cancel"
                            >
                            <button type="button" title="Cancel" @click="cancel">ⓧ</button>
                            <button type="submit" title="Save" @click="save">✅</button>
                        </form>
                    </form>
                </div>
            </label>
        </div>

        <div class="elem__grid--step flex items-center justify-between">
            <span class="text-sm font-medium text-left">Numéro De Téléphone</span>
            <p class="text-right text-sm flex items-center justify-end ml-2">
                {{ $tel }}
                {{-- <a href="#" class="ml-3 items-center inline-flex"><img src="{{ @asset('img/external.svg') }}" alt="external"></a></p> --}}
        </div>

        <div class="item"
            x-data="
                {
                    origText: '{{ $city }}',
                    newText: null,
                    isEditing: false,
                    edit: function() {
                        this.isEditing = true;
                    },
                    focus: function() {
                        const textInput = this.$refs.textInput;
                        textInput.focus();
                        textInput.select();
                    },
                    save: function() {
                        this.origText = this.newText;
                        this.isEditing = false;
                    },
                    cancel: function() {
                        this.newText = this.origText;
                        this.isEditing = false;
                    },
                }
            "
            x-init="newText = origText"
            >
            <div
                class="elem__grid--step flex items-center justify-between"
                x-show=!isEditing
            >
                <span class="text-sm font-medium text-left">Disponibilité</span>
                <p class="text-right text-sm flex items-center justify-end ml-2">
                    {{-- <a href="#" class="ml-3 items-center inline-flex">
                        <img src="{{ @asset('img/external.svg') }}" alt="external">
                    </a> --}}
                </p>
                <span
                    class="text-right text-sm flex items-center justify-end ml-2"
                    x-text="newText"
                    @click="edit(); $nextTick(() => focus())"
                >
                </span>
            </div>
            <label x-show=isEditing class="flex flex-col">
                <div class="flex">
                    <form wire:submit.prevent="updateCity">
                        <input
                                wire:model="city"
                                type="text"
                                x-ref="textInput"
                                x-model="newText"
                                @keydown.enter="save"
                                @keydown.escape="cancel"
                        >
                        <button type="button" title="Cancel" @click="cancel">ⓧ</button>
                        <button type="submit" title="Save" @click="save">✅</button>
                    </form>
                </div>
            </label>
        </div>

        <div class="item"
            x-data="
                {
                    origText: '{{ $condition_car }}',
                    newText: null,
                    isEditing: false,
                    edit: function() {
                        this.isEditing = true;
                    },
                    focus: function() {
                        const textInput = this.$refs.textInput;
                        textInput.focus();
                        textInput.select();
                    },
                    save: function() {
                        this.origText = this.newText;
                        this.isEditing = false;
                    },
                    cancel: function() {
                        this.newText = this.origText;
                        this.isEditing = false;
                    },
                }
            "
            x-init="newText = origText"
            >
            <div
                class="elem__grid--step flex items-center justify-between"
                x-show=!isEditing
            >
                <span class="text-sm font-medium text-left">État De La Voiture</span>
                <p class="text-right text-sm flex items-center justify-end ml-2">
                    {{-- <a href="#" class="ml-3 items-center inline-flex">
                        <img src="{{ @asset('img/external.svg') }}" alt="external">
                    </a> --}}
                </p>
                <span
                    class="text-right text-sm flex items-center justify-end ml-2"
                    x-text="newText"
                    @click="edit(); $nextTick(() => focus())"
                >
                </span>
            </div>
            <label x-show=isEditing class="flex flex-col">
                <div class="flex">
                    <form wire:submit.prevent="updateConditionCar">
                        <input
                                wire:model="condition_car"
                                type="text"
                                x-ref="textInput"
                                x-model="newText"
                                @keydown.enter="save"
                                @keydown.escape="cancel"
                        >
                        <button type="button" title="Cancel" @click="cancel">ⓧ</button>
                        <button type="submit" title="Save" @click="save">✅</button>
                    </form>
                </div>
            </label>
        </div>
    </div>
</div>
