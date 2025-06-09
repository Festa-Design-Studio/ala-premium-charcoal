<?php
$image = $attributes->get('image');
$title = $attributes->get('title');
$description = $attributes->get('description');
$price = $attributes->get('price');
?>

<div class="bg-clay-50 shadow-md rounded-lg overflow-hidden transition-all duration-300 hover:shadow-lg">
    @if($image)
        <div class="aspect-w-4 aspect-h-3">
            <img src="{{ $image }}" alt="{{ $title }}" class="object-cover w-full h-full">
        </div>
    @endif
    
    <div class="p-6">
        <h3 class="font-nohemi text-xl font-semibold text-charcoal-700 mb-2">{{ $title }}</h3>
        @if($description)
            <p class="text-charcoal-600 mb-4">{{ $description }}</p>
        @endif
        @if($price)
            <div class="flex justify-between items-center">
                <span class="text-lg font-semibold text-palm-600">{{ $price }}</span>
                <x-atoms.button variant="primary">Add to Cart</x-atoms.button>
            </div>
        @endif
    </div>
</div> 