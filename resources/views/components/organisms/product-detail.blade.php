@props([
    'product' => [
        'title' => '',
        'badge' => '',
        'badge_color' => 'savanna',
        'description' => '',
        'mainImage' => '',
        'thumbnails' => [],
        'specifications' => [],
        'features' => [],
        'pricing' => [
            'text' => '',
            'subtext' => ''
        ]
    ]
])

<div class="max-w-7xl mx-auto px-4">
    <!-- Standard Product Detail Layout -->
    <section class="mb-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Image Gallery Column -->
            <div>
                <!-- Main Product Image -->
                <div class="mb-4 bg-clay-100 rounded-lg overflow-hidden">
                    <img 
                        src="{{ $product['mainImage'] }}" 
                        alt="{{ $product['title'] }} - Main Image"
                        class="w-full h-auto object-cover aspect-[4/3]"
                        loading="lazy"
                    >
                </div>

                <!-- Thumbnail Gallery -->
                @if(count($product['thumbnails']) > 0)
                <div class="grid grid-cols-4 gap-2">
                    @foreach($product['thumbnails'] as $index => $thumbnail)
                    <button 
                        class="bg-clay-100 rounded overflow-hidden {{ $index === 0 ? 'border-2 border-palm-500' : '' }}"
                        aria-label="View {{ $product['title'] }} image {{ $index + 1 }}"
                    >
                        <img 
                            src="{{ $thumbnail['url'] }}" 
                            alt="{{ $product['title'] }} - Thumbnail {{ $index + 1 }}"
                            class="w-full h-auto aspect-square object-cover"
                            loading="lazy"
                        >
                    </button>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Product Information Column -->
            <div>
                <!-- Product Badge -->
                @if($product['badge'])
                <div class="mb-2">
                    <span class="inline-flex items-center bg-{{ $product['badge_color'] }}-300 text-charcoal-700 px-3 py-1 rounded-full font-poppins text-small font-medium">
                        {{ $product['badge'] }}
                    </span>
                </div>
                @endif

                <!-- Product Title -->
                <h2 class="font-nohemi font-bold text-h2-desktop text-charcoal-700 mb-4">
                    {{ $product['title'] }}
                </h2>

                <!-- Price (if applicable) -->
                <div class="mb-6">
                    <p class="font-poppins text-h3-desktop font-medium text-charcoal-700">
                        {{ $product['pricing']['text'] }}
                    </p>
                    @if($product['pricing']['subtext'])
                    <p class="font-poppins text-small text-ash-500">
                        {{ $product['pricing']['subtext'] }}
                    </p>
                    @endif
                </div>

                <!-- Short Description -->
                <div class="mb-8">
                    <p class="font-poppins text-body text-charcoal-600">
                        {{ $product['description'] }}
                    </p>
                </div>

                <!-- Specifications List Component -->
                @if(count($product['specifications']) > 0)
                <x-molecules.specification-list 
                    :specifications="$product['specifications']"
                    class="mb-8"
                />
                @endif

                <!-- Key Features Component -->
                @if(count($product['features']) > 0)
                <x-molecules.key-features 
                    :features="$product['features']"
                />
                @endif

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <x-atoms.button 
                        type="button"
                        class="flex-1"
                        variant="primary"
                    >
                        Request a Quote
                    </x-atoms.button>

                   
                </div>
            </div>
        </div>
    </section>
</div> 