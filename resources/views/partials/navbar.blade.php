<nav x-data="{ scrolled: false, mobileMenuOpen: false }" @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="scrolled ? 'bg-[#0B0D12]/95 backdrop-blur-md py-4 shadow-2xl border-b border-[#CDB885]/20' : 'bg-transparent py-6'"
    class="fixed top-0 w-full z-50 transition-all duration-500 ease-in-out px-6 lg:px-12 font-sans text-white">

    <!-- Top Row (Logo, Menu, Booking) -->
    <div class="max-w-7xl mx-auto flex justify-between items-center relative z-20">
        <!-- Left: Menu Trigger -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="flex items-center gap-3 group focus:outline-none w-24">
            <div class="space-y-1.5 w-6">
                <span class="block w-full h-px bg-white group-hover:bg-[#CDB885] transition-colors duration-300"></span>
                <span
                    class="block w-3/4 h-px bg-white group-hover:bg-[#CDB885] transition-colors duration-300 group-hover:w-full"></span>
                <span
                    class="block w-1/2 h-px bg-white group-hover:bg-[#CDB885] transition-colors duration-300 group-hover:w-full"></span>
            </div>
            <span
                class="uppercase tracking-widest text-xs font-medium group-hover:text-[#CDB885] transition-colors hidden sm:block">Menu</span>
        </button>

        <!-- Center: Logo Group -->
        <div
            class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center gap-4">
            <!-- Year -->
            <span
                class="text-[0.65rem] tracking-[0.3em] text-[#CDB885] font-light hidden md:block opacity-70">2005</span>

            <!-- Logo -->
            <a href="{{ route('home') }}" class="group relative block">
                <div class="h-16 w-auto transition-transform duration-500 group-hover:scale-105">
                    <img src="{{ asset('images/mystique_logo_gold.png') }}" alt="M-Red Resort Logo"
                        class="h-full w-auto object-contain drop-shadow-lg">
                </div>
            </a>

            <!-- Stars -->
            <div class="hidden md:flex gap-1 text-[#CDB885] opacity-70">
                <svg class="w-2 h-2" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                <svg class="w-2 h-2" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                <svg class="w-2 h-2" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
                <svg class="w-2 h-2" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                </svg>
            </div>
        </div>

        <!-- Right: Booking -->
        <a href="#booking"
            class="flex justify-end items-center gap-3 group hover:text-[#CDB885] transition-colors duration-300 w-24">
            <span class="uppercase tracking-widest text-xs font-medium hidden sm:block">Booking</span>
            <div class="relative">
                <svg class="w-5 h-5 group-hover:text-[#CDB885] transition-colors duration-300" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                </svg>
                <span
                    class="absolute -top-1 -right-1 w-2 h-2 bg-[#CDB885] rounded-full animate-pulse hidden group-hover:block"></span>
            </div>
        </a>
    </div>

    <!-- Bottom Row (Navigation Links) - Desktop Only -->
    <div class="hidden lg:flex justify-center mt-6 border-t border-white/10 pt-4"
        :class="scrolled ? 'hidden' : 'opacity-100 transition-opacity duration-500 delay-100'">
        <ul class="flex items-center space-x-12">
            <li><a href="{{ route('home') }}"
                    class="nav-link text-xs font-semibold uppercase tracking-[0.2em] text-white/90 hover:text-[#CDB885] transition-all duration-300 relative group">
                    Home
                    <span
                        class="absolute -bottom-2 left-1/2 w-0 h-px bg-[#CDB885] transition-all duration-300 group-hover:w-full group-hover:left-0 opacity-0 group-hover:opacity-100"></span>
                </a></li>
            <li><a href="{{ route('about') }}"
                    class="nav-link text-xs font-semibold uppercase tracking-[0.2em] text-white/90 hover:text-[#CDB885] transition-all duration-300 relative group">
                    About
                    <span
                        class="absolute -bottom-2 left-1/2 w-0 h-px bg-[#CDB885] transition-all duration-300 group-hover:w-full group-hover:left-0 opacity-0 group-hover:opacity-100"></span>
                </a></li>

            <!-- Destination Dropdown -->
            <li class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                <button
                    class="nav-link text-xs font-semibold uppercase tracking-[0.2em] text-white/90 hover:text-[#CDB885] transition-all duration-300 relative flex items-center gap-1">
                    Destination
                    <svg class="w-3 h-3 transition-transform duration-300" :class="open ? 'rotate-180' : ''"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <span
                        class="absolute -bottom-2 left-1/2 w-0 h-px bg-[#CDB885] transition-all duration-300 group-hover:w-full group-hover:left-0 opacity-0 group-hover:opacity-100"></span>
                </button>

                <div x-show="open" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 translate-y-2"
                    class="absolute top-full left-1/2 -translate-x-1/2 pt-6 w-56 z-50 pointer-events-none group-hover:pointer-events-auto">
                    <div class="bg-[#0B0D12] border border-[#CDB885]/20 shadow-2xl p-2 rounded-sm relative">
                        <!-- Triangle Indicator -->
                        <div
                            class="absolute -top-1 left-1/2 -translate-x-1/2 w-2 h-2 bg-[#0B0D12] border-t border-l border-[#CDB885]/20 rotate-45">
                        </div>

                        <a href="{{ route('destinations') }}" class="block px-4 py-3 group/item">
                            <span
                                class="block text-[0.65rem] uppercase tracking-widest text-white/90 group-hover/item:text-[#CDB885] transition-colors font-bold">Overview</span>
                        </a>

                        <a href="{{ route('destinations') }}#ritual" class="block px-4 py-3 group/item">
                            <span
                                class="block text-[0.65rem] uppercase tracking-widest text-white/90 group-hover/item:text-[#CDB885] transition-colors font-bold">Petik
                                Laut</span>
                            <span
                                class="block text-[0.5rem] text-white/50 group-hover/item:text-white/70 italic font-serif mt-0.5">The
                                Sea Offering Ritual</span>
                        </a>

                        <a href="#pulau-merah" class="block px-4 py-3 group/item">
                            <span
                                class="block text-[0.65rem] uppercase tracking-widest text-white/90 group-hover/item:text-[#CDB885] transition-colors font-bold">Pulau
                                Merah</span>
                            <span
                                class="block text-[0.5rem] text-white/50 group-hover/item:text-white/70 italic font-serif mt-0.5">The
                                Signature Coast</span>
                        </a>
                    </div>
                </div>
            </li>

            <li><a href="{{ route('services') }}"
                    class="nav-link text-xs font-semibold uppercase tracking-[0.2em] text-white/90 hover:text-[#CDB885] transition-all duration-300 relative group">
                    Service
                    <span
                        class="absolute -bottom-2 left-1/2 w-0 h-px bg-[#CDB885] transition-all duration-300 group-hover:w-full group-hover:left-0 opacity-0 group-hover:opacity-100"></span>
                </a></li>
            <li><a href="{{ route('gallery') }}"
                    class="nav-link text-xs font-semibold uppercase tracking-[0.2em] text-white/90 hover:text-[#CDB885] transition-all duration-300 relative group">
                    Gallery
                    <span
                        class="absolute -bottom-2 left-1/2 w-0 h-px bg-[#CDB885] transition-all duration-300 group-hover:w-full group-hover:left-0 opacity-0 group-hover:opacity-100"></span>
                </a></li>
            <li><a href="#contact"
                    class="nav-link text-xs font-semibold uppercase tracking-[0.2em] text-white/90 hover:text-[#CDB885] transition-all duration-300 relative group">
                    Contact
                    <span
                        class="absolute -bottom-2 left-1/2 w-0 h-px bg-[#CDB885] transition-all duration-300 group-hover:w-full group-hover:left-0 opacity-0 group-hover:opacity-100"></span>
                </a></li>
        </ul>
    </div>

    <!-- Mobile Menu Overlay -->
    <div x-show="mobileMenuOpen" x-transition:enter="transition cubic-bezier(0.16, 1, 0.3, 1) duration-700"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition cubic-bezier(0.16, 1, 0.3, 1) duration-500"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        class="fixed inset-0 bg-[#0B0D12] z-50 flex flex-col justify-center items-center text-center p-6"
        style="display: none;">

        <!-- Close Button -->
        <button @click="mobileMenuOpen = false"
            class="absolute top-8 left-8 text-white/40 hover:text-[#CDB885] transition-colors duration-300 group">
            <svg class="w-8 h-8 transform group-hover:rotate-90 transition-transform duration-500" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </button>

        <div class="mb-12">
            <img src="{{ asset('images/mystique_logo_gold.png') }}" class="w-24 h-auto object-contain mx-auto"
                alt="Logo">
        </div>

        <div class="space-y-6 flex flex-col items-center">
            <a href="{{ route('home') }}"
                class="text-3xl font-serif italic text-white hover:text-[#CDB885] transition-colors duration-300">Home</a>
            <a href="{{ route('about') }}"
                class="text-3xl font-serif italic text-white hover:text-[#CDB885] transition-colors duration-300">About</a>

            <div x-data="{ expanded: false }" class="flex flex-col items-center space-y-4">
                <button @click="expanded = !expanded"
                    class="text-3xl font-serif italic text-white hover:text-[#CDB885] transition-colors duration-300 flex items-center gap-2">
                    Destination
                    <svg class="w-5 h-5 transition-transform duration-300" :class="expanded ? 'rotate-180' : ''"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div x-show="expanded" x-collapse
                    class="flex flex-col items-center space-y-3 bg-white/5 w-full py-4 rounded-lg">
                    <a href="{{ route('destinations') }}"
                        class="text-lg font-serif text-white/80 hover:text-[#CDB885]">Explore All</a>
                    <a href="{{ route('home') }}#destinations" @click="mobileMenuOpen = false"
                        class="text-lg font-serif text-white/80 hover:text-[#CDB885]">Highlights</a>
                </div>
            </div>

            <a href="{{ route('services') }}" @click="mobileMenuOpen = false"
                class="text-3xl font-serif italic text-white hover:text-[#CDB885] transition-colors duration-300">Service</a>
            <a href="{{ route('gallery') }}" @click="mobileMenuOpen = false"
                class="text-3xl font-serif italic text-white hover:text-[#CDB885] transition-colors duration-300">Gallery</a>
            <a href="#contact" @click="mobileMenuOpen = false"
                class="text-3xl font-serif italic text-white hover:text-[#CDB885] transition-colors duration-300">Contact</a>
        </div>

        <div class="mt-12 flex flex-col items-center gap-4">
            <div class="w-12 h-px bg-[#CDB885]/30"></div>
            <p class="text-[0.6rem] tracking-[0.3em] uppercase text-white/40">Banyuwangi, East Java</p>
        </div>
    </div>
</nav>
