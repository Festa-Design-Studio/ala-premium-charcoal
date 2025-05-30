@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <x-organisms.hero-section
        title="Premium Export-Grade Hardwood Charcoal"
        subtitle="Experience the finest quality charcoal, crafted with traditional expertise and modern standards for global markets."
        background-image="{{ asset('img/hero-charcoal.jpg') }}"
        variant="split"
    >
        <img src="{{ asset('img/product-showcase.png') }}" alt="Premium Charcoal Showcase" class="rounded-xl shadow-2xl">
    </x-organisms.hero-section>

    <!-- Featured Products Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="font-nohemi text-3xl md:text-4xl font-bold text-charcoal-700 text-center mb-12">Our Premium Products</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <x-molecules.product-card
                    image="{{ asset('img/products/premium-lump.jpg') }}"
                    title="Premium Lump Charcoal"
                    description="High-quality hardwood charcoal perfect for commercial and industrial use."
                    price="Contact for Pricing"
                />
                
                <x-molecules.product-card
                    image="{{ asset('img/products/restaurant-grade.jpg') }}"
                    title="Restaurant Grade Charcoal"
                    description="Specially curated for restaurants and hospitality businesses."
                    price="Contact for Pricing"
                />
                
                <x-molecules.product-card
                    image="{{ asset('img/products/bulk-supply.jpg') }}"
                    title="Bulk Supply Charcoal"
                    description="Large quantity orders for wholesale and export markets."
                    price="Contact for Pricing"
                />
            </div>
        </div>
    </section>

    <!-- Quality Standards Section -->
    <section class="py-16 bg-charcoal-700">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="font-nohemi text-3xl md:text-4xl font-bold text-clay-50 mb-6">Export-Grade Quality Standards</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-palm-500 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <p class="ml-4 text-clay-100">Rigorous quality control processes</p>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-palm-500 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <p class="ml-4 text-clay-100">International certification standards</p>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-6 h-6 text-palm-500 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <p class="ml-4 text-clay-100">Sustainable production methods</p>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('img/quality-control.jpg') }}" alt="Quality Control Process" class="rounded-xl shadow-xl">
                    <div class="absolute -bottom-6 -right-6 bg-palm-500 text-clay-50 p-6 rounded-xl shadow-xl">
                        <p class="font-nohemi text-2xl font-bold">100%</p>
                        <p class="text-sm">Quality Assured</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <x-organisms.testimonials-section
        variant="carousel"
        :testimonials="[
            [
                'name' => 'John Smith',
                'company' => 'Global Exports Ltd',
                'content' => 'Àlá Premium Charcoal consistently delivers the highest quality product. Their commitment to excellence and reliable service makes them our preferred supplier.',
                'avatar' => asset('img/testimonials/john-smith.jpg')
            ],
            [
                'name' => 'Sarah Johnson',
                'company' => 'Restaurant Chain Corp',
                'content' => 'The quality of charcoal we receive from Àlá has significantly improved our cooking results. Their product burns longer and produces better flavor.',
                'avatar' => asset('img/testimonials/sarah-johnson.jpg')
            ],
            [
                'name' => 'Michael Chen',
                'company' => 'International Trading Co.',
                'content' => 'Working with Àlá has been a pleasure. Their export-grade charcoal meets all international standards, and their service is impeccable.',
                'avatar' => asset('img/testimonials/michael-chen.jpg')
            ]
        ]"
    />

    <!-- CTA Section -->
    <section class="py-16 bg-clay-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-nohemi text-3xl md:text-4xl font-bold text-charcoal-700 mb-6">Ready to Experience Premium Quality?</h2>
            <p class="text-lg text-charcoal-600 mb-8 max-w-2xl mx-auto">Contact us today to discuss your wholesale charcoal needs and discover why leading businesses choose Àlá Premium Charcoal.</p>
            <div class="flex justify-center gap-4">
                <x-atoms.button variant="primary">Get a Quote</x-atoms.button>
                <x-atoms.button variant="secondary">Learn More</x-atoms.button>
            </div>
        </div>
    </section>
@endsection 