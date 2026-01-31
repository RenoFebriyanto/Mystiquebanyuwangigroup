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
        <!-- Right: Booking -->
        <button @click="$dispatch('open-booking-modal')"
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
        </button>
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
            <li><a href="{{ route('transportation') }}"
                    class="nav-link text-xs font-semibold uppercase tracking-[0.2em] text-white/90 hover:text-[#CDB885] transition-all duration-300 relative group">
                    Transportation
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

    <!-- Mobile Menu Sidebar (Off-Canvas) -->
    <div x-show="mobileMenuOpen" class="relative z-[60]" aria-labelledby="slide-over-title" role="dialog"
        aria-modal="true" style="display: none;">

        <!-- Backdrop -->
        <div x-show="mobileMenuOpen" x-transition:enter="ease-in-out duration-500"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/60 backdrop-blur-sm transition-opacity"
            @click="mobileMenuOpen = false"></div>

        <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 left-0 flex max-w-full pr-10">
                    <!-- Left Side Drawer -->

                    <!-- Sidebar Panel -->
                    <div x-show="mobileMenuOpen"
                        x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                        class="pointer-events-auto w-screen max-w-xs ring-1 ring-white/10">

                        <div class="flex h-full flex-col overflow-y-scroll bg-[#0B0D12] shadow-2xl py-6 pb-6">

                            <!-- Header (Logo & Close) -->
                            <div class="px-6 flex items-center justify-between mb-8">
                                <img src="{{ asset('images/mystique_logo_gold.png') }}"
                                    class="w-12 h-auto object-contain" alt="Logo">

                                <button @click="mobileMenuOpen = false"
                                    class="text-white/40 hover:text-[#CDB885] transition-colors p-2">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- Menu Items -->
                            <div class="px-6 space-y-1">
                                <a href="{{ route('home') }}"
                                    class="block text-xl font-serif text-white hover:text-[#CDB885] transition-colors py-3 border-b border-white/5">Home</a>
                                <a href="{{ route('about') }}"
                                    class="block text-xl font-serif text-white hover:text-[#CDB885] transition-colors py-3 border-b border-white/5">About</a>

                                <!-- Destination Dropdown (Simplified) -->
                                <div x-data="{ expanded: false }" class="border-b border-white/5">
                                    <button @click="expanded = !expanded"
                                        class="w-full flex items-center justify-between text-xl font-serif text-white hover:text-[#CDB885] transition-colors py-3">
                                        <span>Destination</span>
                                        <svg class="w-5 h-5 transition-transform duration-300"
                                            :class="expanded ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <div x-show="expanded" x-collapse class="pl-4 pb-4 space-y-3 mt-1">
                                        <a href="{{ route('destinations') }}"
                                            class="block text-xs uppercase tracking-widest text-white/60 hover:text-[#CDB885] flex items-center gap-2">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#CDB885]/50"></span> Overview
                                        </a>
                                        <a href="{{ route('destinations') }}#ritual"
                                            class="block text-xs uppercase tracking-widest text-white/60 hover:text-[#CDB885] flex items-center gap-2">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#CDB885]/50"></span> Petik Laut
                                        </a>
                                        <a href="#pulau-merah"
                                            class="block text-xs uppercase tracking-widest text-white/60 hover:text-[#CDB885] flex items-center gap-2">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#CDB885]/50"></span> Pulau Merah
                                        </a>
                                    </div>
                                </div>

                                <a href="{{ route('services') }}"
                                    class="block text-xl font-serif text-white hover:text-[#CDB885] transition-colors py-3 border-b border-white/5">Service</a>
                                <a href="{{ route('gallery') }}"
                                    class="block text-xl font-serif text-white hover:text-[#CDB885] transition-colors py-3 border-b border-white/5">Gallery</a>
                                <a href="{{ route('transportation') }}"
                                    class="block text-xl font-serif text-white hover:text-[#CDB885] transition-colors py-3 border-b border-white/5">Transportation</a>
                                <a href="#contact"
                                    class="block text-xl font-serif text-white hover:text-[#CDB885] transition-colors py-3 border-b border-white/5">Contact</a>
                            </div>

                            <!-- Footer Info -->
                            <div class="mt-auto px-6 pt-10">
                                <p class="text-[0.6rem] uppercase tracking-[0.2em] text-[#CDB885] mb-2 opacity-80">
                                    Reservations</p>
                                <p class="text-white/60 text-sm font-light mb-6 font-mono">+62 812 3456 7890
                                </p>

                                <p class="text-[0.6rem] uppercase tracking-[0.2em] text-[#CDB885] mb-2 opacity-80">
                                    Location</p>
                                <p class="text-white/60 text-sm font-light leading-relaxed">Banyuwangi, East
                                    Java<br>Indonesia</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
