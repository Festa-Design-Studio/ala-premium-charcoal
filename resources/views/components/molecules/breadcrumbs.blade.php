<?php
$variant = $attributes->get('variant', 'standard');
$items = $attributes->get('items', []);
$containerBg = $attributes->get('container-bg', false);
$useHomeIcon = $attributes->get('home-icon', false);
?>

@if($variant === 'compact')
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="flex items-center">
            @foreach($items as $index => $item)
                <li class="font-poppins text-small {{ $index > 0 ? 'flex items-center' : '' }}">
                    @if($index > 0)
                        <span class="mx-2 text-ash-300">/</span>
                    @endif
                    
                    @if($item['current'] ?? false)
                        <span class="text-charcoal-600 font-medium" aria-current="page">{{ $item['label'] }}</span>
                    @else
                        <a href="{{ $item['url'] }}" class="text-ash-500 hover:text-charcoal-600 transition-colors duration-300">{{ $item['label'] }}</a>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>

@elseif($variant === 'responsive')
    <nav class="flex" aria-label="Breadcrumb">
        <!-- Mobile (truncated) -->
        <ol class="flex items-center space-x-2 md:hidden">
            <li>
                <a href="/" class="text-ash-500 hover:text-charcoal-600 transition-colors duration-300 font-poppins text-small">...</a>
            </li>
            @foreach(array_slice($items, -2) as $item)
                <li>
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 h-5 w-5 text-ash-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                        @if($item['current'] ?? false)
                            <span class="ml-2 font-poppins text-small font-medium text-charcoal-600" aria-current="page">{{ $item['label'] }}</span>
                        @else
                            <a href="{{ $item['url'] }}" class="ml-2 text-ash-500 hover:text-charcoal-600 transition-colors duration-300 font-poppins text-small">{{ $item['label'] }}</a>
                        @endif
                    </div>
                </li>
            @endforeach
        </ol>

        <!-- Desktop (full) -->
        <ol class="hidden md:flex items-center space-x-2">
            @foreach($items as $index => $item)
                <li>
                    <div class="flex items-center">
                        @if($index > 0)
                            <svg class="flex-shrink-0 h-5 w-5 text-ash-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        @endif
                        @if($item['current'] ?? false)
                            <span class="{{ $index > 0 ? 'ml-2' : '' }} font-poppins text-small font-medium text-charcoal-600" aria-current="page">{{ $item['label'] }}</span>
                        @else
                            @if($index === 0 && $useHomeIcon)
                                <a href="{{ $item['url'] }}" class="text-ash-500 hover:text-charcoal-600 transition-colors duration-300 font-poppins flex items-center">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    <span class="sr-only">Home</span>
                                </a>
                            @else
                                <a href="{{ $item['url'] }}" class="{{ $index > 0 ? 'ml-2' : '' }} text-ash-500 hover:text-charcoal-600 transition-colors duration-300 font-poppins text-small">{{ $item['label'] }}</a>
                            @endif
                        @endif
                    </div>
                </li>
            @endforeach
        </ol>
    </nav>

@else
    @if($containerBg)
        <div class="bg-clay-100">
            <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
    @endif

    <nav class="flex" aria-label="Breadcrumb">
        <ol class="flex items-center space-x-2">
            @foreach($items as $index => $item)
                <li>
                    <div class="flex items-center">
                        @if($index > 0)
                            <svg class="flex-shrink-0 h-5 w-5 text-ash-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        @endif
                        @if($item['current'] ?? false)
                            <span class="{{ $index > 0 ? 'ml-2' : '' }} font-poppins text-small font-medium text-charcoal-600" aria-current="page">{{ $item['label'] }}</span>
                        @else
                            @if($index === 0 && $useHomeIcon)
                                <a href="{{ $item['url'] }}" class="text-ash-500 hover:text-charcoal-600 transition-colors duration-300 font-poppins flex items-center">
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                    </svg>
                                    <span class="sr-only">Home</span>
                                </a>
                            @else
                                <a href="{{ $item['url'] }}" class="{{ $index > 0 ? 'ml-2' : '' }} text-ash-500 hover:text-charcoal-600 transition-colors duration-300 font-poppins text-small">{{ $item['label'] }}</a>
                            @endif
                        @endif
                    </div>
                </li>
            @endforeach
        </ol>
    </nav>

    @if($containerBg)
            </div>
        </div>
    @endif
@endif 