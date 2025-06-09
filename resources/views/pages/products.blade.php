@extends('layouts.app')

@section('title', 'Products - Àlá Premium Charcoal')

@section('content')
    <!-- Breadcrumbs -->
    <div class="bg-clay-100">
        <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8">
            <x-molecules.breadcrumbs :items="[
                ['label' => 'Home', 'url' => route('home')],
                ['label' => 'Products', 'url' => null]
            ]" />
        </div>
    </div>

    <main class="py-12">
        <x-organisms.product-detail 
            :product="$product"
        />
    </main>

    <!-- Request Quote Call-to-Action Section -->
    <section class="py-16 px-4 bg-gradient-to-r from-kola-700 to-charcoal-800 text-clay-50">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="font-nohemi font-bold text-h2-mobile md:text-h2-desktop text-clay-50 mb-6">
                Ready to Order Premium Charcoal?
            </h2>
            <p class="font-poppins text-body md:text-lg mb-10 text-clay-50/80 max-w-3xl mx-auto">
                Contact our team to discuss your specific requirements, bulk pricing options, and international shipping details.
            </p>
            
            <x-atoms.button 
                type="button"
                variant="primary"
                class="bg-savanna-300 hover:bg-savanna-400 text-charcoal-700 font-bold px-8"
            >
                Request a Custom Quote
            </x-atoms.button>

            <p class="mt-6 font-poppins text-small text-clay-50/70">
                We typically respond within 24-48 business hours
            </p>
        </div>
    </section>
@endsection
