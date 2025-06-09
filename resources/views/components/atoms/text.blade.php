@props(['size' => 'base'])

@php
    $sizes = [
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'base' => 'text-base',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
        '2xl' => 'text-2xl',
    ];
@endphp

<p {{ $attributes->merge(['class' => $sizes[$size] . ' text-charcoal-700']) }}>
    {{ $slot }}
</p> 