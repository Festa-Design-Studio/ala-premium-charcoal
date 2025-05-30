@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <!-- Hero Section -->
    <x-organisms.hero-section
        title="Our Story"
        subtitle="Discover the tradition, expertise, and commitment behind Àlá Premium Charcoal."
        background-image="{{ asset('img/about-hero.jpg') }}"
    />

    <!-- Breadcrumbs -->
    <div class="bg-clay-100 py-3">
        <div class="container mx-auto px-4">
            <x-molecules.breadcrumbs
                :items="[
                    ['label' => 'Home', 'url' => route('home')],
                    ['label' => 'About Us', 'current' => true]
                ]"
            />
        </div>
    </div>

    <!-- Mission Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <x-atoms.heading level="2" class="mb-6">Our Mission</x-atoms.heading>
                    <div class="space-y-4">
                        <x-atoms.text>
                            At Àlá Premium Charcoal, we are committed to delivering the highest quality hardwood charcoal to global markets while maintaining sustainable production practices.
                        </x-atoms.text>
                        <x-atoms.text>
                            Our mission is to blend traditional craftsmanship with modern standards to create premium charcoal products that meet international quality benchmarks.
                        </x-atoms.text>
                    </div>
                </div>
                <div class="relative">
                    <img src="{{ asset('img/mission.jpg') }}" alt="Our Mission" class="rounded-xl shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-16 bg-clay-50">
        <div class="container mx-auto px-4">
            <x-atoms.heading level="2" class="text-center mb-12">Our Core Values</x-atoms.heading>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-palm-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-clay-50" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                        </svg>
                    </div>
                    <x-atoms.heading level="3" class="mb-3">Quality First</x-atoms.heading>
                    <x-atoms.text>Unwavering commitment to producing the highest grade charcoal.</x-atoms.text>
                </div>

                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-palm-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-clay-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <x-atoms.heading level="3" class="mb-3">Sustainability</x-atoms.heading>
                    <x-atoms.text>Responsible production methods that protect our environment.</x-atoms.text>
                </div>

                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-palm-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-clay-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <x-atoms.heading level="3" class="mb-3">Excellence</x-atoms.heading>
                    <x-atoms.text>Continuous improvement in every aspect of our operations.</x-atoms.text>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <x-atoms.heading level="2" class="text-center mb-12">Our Leadership Team</x-atoms.heading>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <img src="{{ asset('img/team/ceo.jpg') }}" alt="CEO" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover">
                    <x-atoms.heading level="3" class="mb-1">John Doe</x-atoms.heading>
                    <x-atoms.text class="text-palm-600 mb-3">Chief Executive Officer</x-atoms.text>
                    <x-atoms.text>20+ years of experience in sustainable charcoal production.</x-atoms.text>
                </div>

                <div class="text-center">
                    <img src="{{ asset('img/team/operations.jpg') }}" alt="Operations Director" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover">
                    <x-atoms.heading level="3" class="mb-1">Jane Smith</x-atoms.heading>
                    <x-atoms.text class="text-palm-600 mb-3">Operations Director</x-atoms.text>
                    <x-atoms.text>Expert in quality control and production optimization.</x-atoms.text>
                </div>

                <div class="text-center">
                    <img src="{{ asset('img/team/export.jpg') }}" alt="Export Manager" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover">
                    <x-atoms.heading level="3" class="mb-1">David Wilson</x-atoms.heading>
                    <x-atoms.text class="text-palm-600 mb-3">Export Manager</x-atoms.text>
                    <x-atoms.text>Specialist in international trade and logistics.</x-atoms.text>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-charcoal-700">
        <div class="container mx-auto px-4 text-center">
            <x-atoms.heading level="2" class="text-clay-50 mb-6">Partner with Us</x-atoms.heading>
            <x-atoms.text class="text-clay-100 mb-8 max-w-2xl mx-auto">
                Join the growing number of businesses that trust Àlá Premium Charcoal for their wholesale charcoal needs.
            </x-atoms.text>
            <div class="flex justify-center gap-4">
                <x-atoms.button variant="primary">Contact Us</x-atoms.button>
                <x-atoms.button variant="secondary">Download Brochure</x-atoms.button>
            </div>
        </div>
    </section>
@endsection 