@props(['disabled' => false])

<input 
    type="checkbox"
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge([
        'class' => 'rounded border-clay-300 text-ember-600 shadow-sm focus:ring-ember-500'
    ]) !!}
> 