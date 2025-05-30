@props(['level' => 2])

@php
    $tag = 'h' . $level;
    $baseClasses = 'font-nohemi text-charcoal-900';
    $sizes = [
        1 => 'text-4xl md:text-5xl',
        2 => 'text-3xl md:text-4xl',
        3 => 'text-2xl md:text-3xl',
        4 => 'text-xl md:text-2xl',
        5 => 'text-lg md:text-xl',
        6 => 'text-base md:text-lg',
    ];
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $baseClasses . ' ' . $sizes[$level]]) }}>
    {{ $slot }}
</{{ $tag }}> 