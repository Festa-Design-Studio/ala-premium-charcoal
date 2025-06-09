@props(['href'])

<a 
    href="{{ $href }}"
    {{ $attributes->merge([
        'class' => 'text-ember-600 hover:text-ember-500 transition-colors duration-150'
    ]) }}
>
    {{ $slot }}
</a> 