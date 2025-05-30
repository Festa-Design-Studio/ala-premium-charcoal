@props(['value', 'for'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-charcoal-700']) }} for="{{ $for }}">
    {{ $value ?? $slot }}
</label> 