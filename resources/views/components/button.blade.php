<div class="group__submit w-full mt-7">
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex items-center  justify-center w-full  h-16 font-bold text-white regular-btn text-xl']) }}>
        {{ $slot }}
    </button>
</div>
