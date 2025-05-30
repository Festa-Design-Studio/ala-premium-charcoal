<?php
$title = $attributes->get('title', 'The Art of Premium Charcoal');
$subtitle = $attributes->get('subtitle', 'Witness our traditional production process that has been perfected over generations.');
$bgImage = $attributes->get('background-image');
$variant = $attributes->get('variant', 'default');
?>

<section class="relative {{ $variant === 'split' ? 'min-h-[600px]' : 'min-h-[500px]' }}">
    <!-- Background Image/Overlay -->
    <div class="absolute inset-0 z-0">
        @if($bgImage)
            <img src="{{ $bgImage }}" alt="" class="w-full h-full object-cover">
        @endif
        <div class="absolute inset-0 bg-gradient-to-b from-charcoal-700/90 to-charcoal-800/90"></div>
    </div>

    <!-- Content -->
    @if($variant === 'split')
        <div class="relative z-10 container mx-auto px-4 h-full">
            <div class="grid md:grid-cols-2 gap-8 items-center h-full py-16">
                <div>
                    <h1 class="font-nohemi text-4xl md:text-5xl lg:text-6xl font-bold text-clay-50 mb-6">{{ $title }}</h1>
                    <p class="text-xl text-clay-100 mb-8">{{ $subtitle }}</p>
                    <div class="flex flex-wrap gap-4">
                        <x-atoms.button variant="primary">Shop Now</x-atoms.button>
                        <x-atoms.button variant="secondary" class="border-clay-50 text-clay-50 hover:bg-clay-50 hover:text-charcoal-700">
                            Learn More
                        </x-atoms.button>
                    </div>
                </div>
                <div class="hidden md:block">
                    {{ $slot }}
                </div>
            </div>
        </div>
    @else
        <div class="relative z-10 container mx-auto px-4 h-full flex items-center py-16">
            <div class="max-w-2xl">
                <h1 class="font-nohemi text-4xl md:text-5xl lg:text-6xl font-bold text-clay-50 mb-6">{{ $title }}</h1>
                <p class="text-xl text-clay-100 mb-8">{{ $subtitle }}</p>
                <div class="flex flex-wrap gap-4">
                    <x-atoms.button variant="primary">Shop Now</x-atoms.button>
                    <x-atoms.button variant="secondary" class="border-clay-50 text-clay-50 hover:bg-clay-50 hover:text-charcoal-700">
                        Learn More
                    </x-atoms.button>
                </div>
            </div>
        </div>
    @endif
</section> 