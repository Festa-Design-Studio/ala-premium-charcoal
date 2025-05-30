<!-- Navigation Header component 1: Desktop and Mobile -->
<header class="bg-clay-50 border-b border-ash-200 sticky top-0 z-50" x-data>
    <div class="max-w-7xl mx-auto">
        <!-- Desktop Navigation -->
        <nav class="hidden md:flex items-center justify-between py-4 px-6" aria-label="Main Navigation">
            <!-- Logo -->
            <div>
                <a href="/" class="block" aria-label="Àlá Premium Charcoal - Home">
                    <img src="{{ asset('img/logo-ala-horizontal.svg') }}" alt="Àlá Premium Charcoal" class="h-10">
                </a>
            </div>
            
            <!-- Menu Items -->
            <div class="flex space-x-8" role="menubar" aria-label="Main Menu">
                <a href="/" class="font-poppins font-medium text-charcoal-600 hover:text-palm-500 transition-colors duration-300 border-b-2 {{ request()->is('/') ? 'border-palm-500' : 'border-transparent hover:border-palm-300' }}" role="menuitem" @if(request()->is('/')) aria-current="page" @endif>Home</a>
                <a href="/products" class="font-poppins font-medium text-charcoal-600 hover:text-palm-500 transition-colors duration-300 border-b-2 {{ request()->is('products*') ? 'border-palm-500' : 'border-transparent hover:border-palm-300' }}" role="menuitem" @if(request()->is('products*')) aria-current="page" @endif>Products</a>
                <a href="/sustainability" class="font-poppins font-medium text-charcoal-600 hover:text-palm-500 transition-colors duration-300 border-b-2 {{ request()->is('sustainability*') ? 'border-palm-500' : 'border-transparent hover:border-palm-300' }}" role="menuitem" @if(request()->is('sustainability*')) aria-current="page" @endif>Sustainability</a>
                <a href="/about" class="font-poppins font-medium text-charcoal-600 hover:text-palm-500 transition-colors duration-300 border-b-2 {{ request()->is('about*') ? 'border-palm-500' : 'border-transparent hover:border-palm-300' }}" role="menuitem" @if(request()->is('about*')) aria-current="page" @endif>About Us</a>
                <a href="/contact" class="font-poppins font-medium text-charcoal-600 hover:text-palm-500 transition-colors duration-300 border-b-2 {{ request()->is('contact*') ? 'border-palm-500' : 'border-transparent hover:border-palm-300' }}" role="menuitem" @if(request()->is('contact*')) aria-current="page" @endif>Contact</a>
            </div>
            
            <!-- CTA Button -->
            <div>
                <button 
                    type="button" 
                    class="bg-palm-500 hover:bg-palm-600 text-clay-50 py-2 px-4 rounded-md transition-all duration-300 font-poppins font-medium focus:outline-none focus:ring-2 focus:ring-palm-300 focus:ring-offset-2"
                    aria-label="Request Quote"
                >
                    Request Quote
                </button>
            </div>
        </nav>
        
        <!-- Mobile Navigation -->
        <nav class="md:hidden" aria-label="Mobile Navigation">
            <div class="flex items-center justify-between py-4 px-4">
                <!-- Logo -->
                <div>
                    <a href="/" class="block" aria-label="Àlá Premium Charcoal - Home">
                        <img src="{{ asset('img/logo-ala-horizontal.svg') }}" alt="Àlá Premium Charcoal" class="h-8">
                    </a>
                </div>
                
                <!-- Menu Button -->
                <button 
                    type="button" 
                    class="text-charcoal-700 hover:text-palm-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-palm-500 p-2"
                    @click="$store.navigation.mobileMenuOpen = !$store.navigation.mobileMenuOpen"
                    :aria-expanded="$store.navigation.mobileMenuOpen"
                    aria-controls="mobile-menu"
                    aria-label="Open main menu"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div 
                id="mobile-menu" 
                x-show="$store.navigation.mobileMenuOpen"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95"
                class="bg-clay-50 shadow-lg border-t border-ash-200"
                style="display: none;"
                @click.away="$store.navigation.mobileMenuOpen = false"
            >
                <div class="px-2 pt-2 pb-3 space-y-1" role="menu" aria-orientation="vertical" aria-label="Mobile menu">
                    <a href="/" class="{{ request()->is('/') ? 'bg-palm-50 border-palm-500 text-palm-700' : 'border-transparent text-charcoal-600 hover:bg-clay-100 hover:border-palm-300' }} border-l-4 block pl-3 pr-4 py-2 font-poppins" role="menuitem" @if(request()->is('/')) aria-current="page" @endif>Home</a>
                    <a href="/products" class="{{ request()->is('products*') ? 'bg-palm-50 border-palm-500 text-palm-700' : 'border-transparent text-charcoal-600 hover:bg-clay-100 hover:border-palm-300' }} border-l-4 block pl-3 pr-4 py-2 font-poppins" role="menuitem" @if(request()->is('products*')) aria-current="page" @endif>Products</a>
                    <a href="/sustainability" class="{{ request()->is('sustainability*') ? 'bg-palm-50 border-palm-500 text-palm-700' : 'border-transparent text-charcoal-600 hover:bg-clay-100 hover:border-palm-300' }} border-l-4 block pl-3 pr-4 py-2 font-poppins" role="menuitem" @if(request()->is('sustainability*')) aria-current="page" @endif>Sustainability</a>
                    <a href="/about" class="{{ request()->is('about*') ? 'bg-palm-50 border-palm-500 text-palm-700' : 'border-transparent text-charcoal-600 hover:bg-clay-100 hover:border-palm-300' }} border-l-4 block pl-3 pr-4 py-2 font-poppins" role="menuitem" @if(request()->is('about*')) aria-current="page" @endif>About Us</a>
                    <a href="/contact" class="{{ request()->is('contact*') ? 'bg-palm-50 border-palm-500 text-palm-700' : 'border-transparent text-charcoal-600 hover:bg-clay-100 hover:border-palm-300' }} border-l-4 block pl-3 pr-4 py-2 font-poppins" role="menuitem" @if(request()->is('contact*')) aria-current="page" @endif>Contact</a>
                </div>
                <div class="px-4 py-4 border-t border-ash-200">
                    <button 
                        type="button" 
                        class="w-full bg-palm-500 hover:bg-palm-600 text-clay-50 py-2 px-4 rounded-md transition-all duration-300 font-poppins font-medium focus:outline-none focus:ring-2 focus:ring-palm-300 focus:ring-offset-2"
                        aria-label="Request Quote"
                    >
                        Request Quote
                    </button>
                </div>
            </div>
        </nav>
    </div>
</header> 