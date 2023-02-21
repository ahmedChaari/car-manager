@props(['value'])

<label {{ $attributes->merge(['class' => 'mb-3 font-medium dmsans']) }}>
    {{ $value ?? $slot }}
</label>
