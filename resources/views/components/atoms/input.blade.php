@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-clay-300 focus:border-ember-500 focus:ring-ember-500 rounded-md shadow-sm text-charcoal-900 placeholder-clay-400'
]) !!}> 