@extends('layouts.app')

@section('title', 'Our Products')

@section('content')
    <!-- Hero Section -->
    <x-organisms.hero-section
        title="Premium Charcoal Products"
        subtitle="Discover our range of high-quality hardwood charcoal products, perfect for wholesale and export markets."
        background-image="{{ asset('img/products-hero.jpg') }}"
        variant="default"
    />

    <!-- Breadcrumbs -->
    <div class="bg-clay-100 py-3">
        <div class="container mx-auto px-4">
            <x-molecules.breadcrumbs
                :items="[
                    ['label' => 'Home', 'url' => route('home')],
                    ['label' => 'Products', 'current' => true]
                ]"
            />
        </div>
    </div>

    <!-- Products Grid -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Premium Lump Charcoal -->
                <div class="space-y-8">
                    <x-molecules.product-card
                        image="{{ asset('img/products/premium-lump.jpg') }}"
                        title="Premium Lump Charcoal"
                        description="Our flagship product, made from selected hardwood species for optimal performance."
                        price="Contact for Pricing"
                    />
                    
                    <x-molecules.specification-list
                        :specifications="[
                            ['label' => 'Fixed Carbon', 'value' => '75-85%'],
                            ['label' => 'Moisture', 'value' => '< 8%'],
                            ['label' => 'Ash Content', 'value' => '< 5%'],
                            ['label' => 'Size Range', 'value' => '30-150mm']
                        ]"
                    />
                </div>

                <!-- Restaurant Grade Charcoal -->
                <div class="space-y-8">
                    <x-molecules.product-card
                        image="{{ asset('img/products/restaurant-grade.jpg') }}"
                        title="Restaurant Grade Charcoal"
                        description="Specially selected and sized for commercial kitchen use."
                        price="Contact for Pricing"
                    />
                    
                    <x-molecules.specification-list
                        :specifications="[
                            ['label' => 'Fixed Carbon', 'value' => '80-85%'],
                            ['label' => 'Moisture', 'value' => '< 6%'],
                            ['label' => 'Ash Content', 'value' => '< 4%'],
                            ['label' => 'Size Range', 'value' => '40-80mm']
                        ]"
                    />
                </div>

                <!-- Bulk Supply Charcoal -->
                <div class="space-y-8">
                    <x-molecules.product-card
                        image="{{ asset('img/products/bulk-supply.jpg') }}"
                        title="Bulk Supply Charcoal"
                        description="Large quantity orders perfect for industrial use and export markets."
                        price="Contact for Pricing"
                    />
                    
                    <x-molecules.specification-list
                        :specifications="[
                            ['label' => 'Fixed Carbon', 'value' => '75-85%'],
                            ['label' => 'Moisture', 'value' => '< 8%'],
                            ['label' => 'Ash Content', 'value' => '< 5%'],
                            ['label' => 'Size Range', 'value' => 'Custom']
                        ]"
                    />
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Assurance Section -->
    <section class="py-16 bg-clay-50">
        <div class="container mx-auto px-4">
            <x-atoms.heading level="2" class="text-center mb-12">Quality Assurance</x-atoms.heading>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-palm-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-clay-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <x-atoms.heading level="3" class="mb-3">Quality Testing</x-atoms.heading>
                    <x-atoms.text>Regular laboratory testing ensures consistent quality.</x-atoms.text>
                </div>

                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-palm-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-clay-50" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"/>
                            <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <x-atoms.heading level="3" class="mb-3">Certification</x-atoms.heading>
                    <x-atoms.text>International quality certifications for export markets.</x-atoms.text>
                </div>

                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-palm-500 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-clay-50" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <x-atoms.heading level="3" class="mb-3">Performance</x-atoms.heading>
                    <x-atoms.text>High heat output and long burning duration.</x-atoms.text>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <x-atoms.heading level="2" class="text-center mb-12">Packaging Options</x-atoms.heading>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <img src="{{ asset('img/packaging/10kg.jpg') }}" alt="10kg Bag" class="w-full h-48 object-cover rounded-xl mb-4">
                    <x-atoms.heading level="3" class="mb-2">10kg Bags</x-atoms.heading>
                    <x-atoms.text>Perfect for retail distribution</x-atoms.text>
                </div>

                <div class="text-center">
                    <img src="{{ asset('img/packaging/25kg.jpg') }}" alt="25kg Bag" class="w-full h-48 object-cover rounded-xl mb-4">
                    <x-atoms.heading level="3" class="mb-2">25kg Bags</x-atoms.heading>
                    <x-atoms.text>Standard wholesale packaging</x-atoms.text>
                </div>

                <div class="text-center">
                    <img src="{{ asset('img/packaging/jumbo.jpg') }}" alt="Jumbo Bag" class="w-full h-48 object-cover rounded-xl mb-4">
                    <x-atoms.heading level="3" class="mb-2">Jumbo Bags</x-atoms.heading>
                    <x-atoms.text>500kg-1000kg for bulk orders</x-atoms.text>
                </div>

                <div class="text-center">
                    <img src="{{ asset('img/packaging/container.jpg') }}" alt="Container Load" class="w-full h-48 object-cover rounded-xl mb-4">
                    <x-atoms.heading level="3" class="mb-2">Container Load</x-atoms.heading>
                    <x-atoms.text>Full container shipping available</x-atoms.text>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-charcoal-700">
        <div class="container mx-auto px-4 text-center">
            <x-atoms.heading level="2" class="text-clay-50 mb-6">Ready to Order?</x-atoms.heading>
            <x-atoms.text class="text-clay-100 mb-8 max-w-2xl mx-auto">
                Contact our sales team to discuss your wholesale requirements and get a customized quote.
            </x-atoms.text>
            <div class="flex justify-center gap-4">
                <x-atoms.button variant="primary">Request Quote</x-atoms.button>
                <x-atoms.button variant="secondary">Download Catalog</x-atoms.button>
            </div>
        </div>
    </section>
@endsection 