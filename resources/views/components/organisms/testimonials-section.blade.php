<?php
$testimonials = $attributes->get('testimonials', []);
$variant = $attributes->get('variant', 'grid');
?>

<section class="py-16 bg-clay-50">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="font-nohemi text-3xl md:text-4xl font-bold text-charcoal-700 mb-4">What Our Clients Say</h2>
            <p class="text-lg text-charcoal-600 max-w-2xl mx-auto">Discover why leading businesses trust Àlá Premium Charcoal for their wholesale charcoal needs.</p>
        </div>

        @if($variant === 'carousel')
            <!-- Carousel Layout -->
            <div class="relative" x-data="{ activeSlide: 0 }">
                <div class="overflow-hidden">
                    <div class="flex transition-transform duration-500" :style="{ transform: `translateX(-${activeSlide * 100}%)` }">
                        @foreach($testimonials as $testimonial)
                            <div class="w-full flex-shrink-0 px-4">
                                <div class="bg-white rounded-xl p-8 shadow-md">
                                    <div class="flex items-center mb-6">
                                        @if(isset($testimonial['avatar']))
                                            <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full object-cover mr-4">
                                        @endif
                                        <div>
                                            <h4 class="font-nohemi text-lg font-semibold text-charcoal-700">{{ $testimonial['name'] }}</h4>
                                            <p class="text-charcoal-500">{{ $testimonial['company'] }}</p>
                                        </div>
                                    </div>
                                    <p class="text-charcoal-600 mb-4">{{ $testimonial['content'] }}</p>
                                    <div class="flex text-palm-500">
                                        @for($i = 0; $i < 5; $i++)
                                            <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button 
                    @click="activeSlide = activeSlide === 0 ? {{ count($testimonials) - 1 }} : activeSlide - 1"
                    class="absolute top-1/2 -translate-y-1/2 -left-4 bg-white p-2 rounded-full shadow-md hover:bg-clay-50 transition-all duration-300"
                >
                    <svg class="w-6 h-6 text-charcoal-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button 
                    @click="activeSlide = activeSlide === {{ count($testimonials) - 1 }} ? 0 : activeSlide + 1"
                    class="absolute top-1/2 -translate-y-1/2 -right-4 bg-white p-2 rounded-full shadow-md hover:bg-clay-50 transition-all duration-300"
                >
                    <svg class="w-6 h-6 text-charcoal-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        @else
            <!-- Grid Layout -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($testimonials as $testimonial)
                    <div class="bg-white rounded-xl p-8 shadow-md">
                        <div class="flex items-center mb-6">
                            @if(isset($testimonial['avatar']))
                                <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }}" class="w-12 h-12 rounded-full object-cover mr-4">
                            @endif
                            <div>
                                <h4 class="font-nohemi text-lg font-semibold text-charcoal-700">{{ $testimonial['name'] }}</h4>
                                <p class="text-charcoal-500">{{ $testimonial['company'] }}</p>
                            </div>
                        </div>
                        <p class="text-charcoal-600 mb-4">{{ $testimonial['content'] }}</p>
                        <div class="flex text-palm-500">
                            @for($i = 0; $i < 5; $i++)
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section> 