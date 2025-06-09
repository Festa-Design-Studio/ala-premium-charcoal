@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <!-- Hero Section -->
    <x-organisms.hero-section
        title="Get in Touch"
        subtitle="Contact us for wholesale inquiries, export opportunities, or any questions about our premium charcoal products."
        background-image="{{ asset('img/contact-hero.jpg') }}"
        variant="default"
    />

    <!-- Breadcrumbs -->
    <div class="bg-clay-100 py-3">
        <div class="container mx-auto px-4">
            <x-molecules.breadcrumbs
                :items="[
                    ['label' => 'Home', 'url' => route('home')],
                    ['label' => 'Contact Us', 'current' => true]
                ]"
            />
        </div>
    </div>

    <!-- Contact Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12">
                <!-- Contact Information -->
                <div>
                    <h2 class="font-nohemi font-bold text-h3-desktop text-charcoal-700 mb-6">Contact Information</h2>
                    
                    <div class="space-y-6">
                        <div>
                            <h3 class="font-nohemi font-bold text-xl mb-2">Office Address</h3>
                            <p class="font-poppins text-charcoal-600">
                                123 Business District<br>
                                Lagos, Nigeria<br>
                                Postal Code: 100001
                            </p>
                        </div>

                        <div>
                            <h3 class="font-nohemi font-bold text-xl mb-2">Contact Details</h3>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-palm-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                    </svg>
                                    <span class="font-poppins text-charcoal-600">+234 123 456 7890</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 text-palm-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                    </svg>
                                    <span class="font-poppins text-charcoal-600">info@alapremiumcharcoal.com</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="font-nohemi font-bold text-xl mb-2">Business Hours</h3>
                            <p class="font-poppins text-charcoal-600">
                                Monday - Friday: 9:00 AM - 5:00 PM (WAT)<br>
                                Saturday: 10:00 AM - 2:00 PM (WAT)<br>
                                Sunday: Closed
                            </p>
                        </div>
                    </div>

                    <!-- Social Media Links -->
                    <div class="mt-8">
                        <h3 class="font-nohemi font-bold text-xl mb-4">Connect With Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-charcoal-600 hover:text-palm-500">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-charcoal-600 hover:text-palm-500">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-charcoal-600 hover:text-palm-500">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <x-organisms.contact-form />
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-16 bg-clay-50">
        <div class="container mx-auto px-4">
            <h2 class="font-nohemi font-bold text-h3-desktop text-charcoal-700 text-center mb-12">Our Location</h2>
            <div class="h-96 rounded-xl overflow-hidden shadow-xl">
                <!-- Replace with actual map implementation -->
                <div class="w-full h-full bg-clay-200 flex items-center justify-center">
                    <p class="font-poppins text-charcoal-600">Map will be embedded here</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- Add any page-specific scripts here -->
@endpush 