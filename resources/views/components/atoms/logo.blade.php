@props(['class' => ''])

<img 
    src="{{ asset('img/logo-ala-horizontal.svg') }}" 
    alt="Àlá Premium Charcoal"
    {{ $attributes->merge(['class' => $class]) }}
/> 