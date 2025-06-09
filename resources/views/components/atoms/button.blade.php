@props([
    'type' => 'button',
    'variant' => 'primary'
])

@php
    $baseClasses = 'inline-flex items-center px-4 py-2 border rounded-md font-semibold text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150';
    $variantClasses = [
        'primary' => 'border-transparent bg-ember-600 text-white hover:bg-ember-700 focus:ring-ember-500',
        'secondary' => 'border-clay-300 bg-white text-clay-700 hover:bg-clay-50 focus:ring-clay-500',
        'outline' => 'border-ember-600 bg-white text-ember-600 hover:bg-ember-50 focus:ring-ember-500',
    ][$variant];
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => $baseClasses . ' ' . $variantClasses]) }}
>
    {{ $slot }}
</button> 