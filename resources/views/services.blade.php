@extends('layouts.app')

@section('title', 'Our Services | Red Island Tourism')

@section('content')
    <!-- Services Hero Section -->
    <section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden pt-20">
        <div class="absolute inset-0 bg-black/60 z-10"></div>
        <div class="absolute inset-0">
            <!-- Placeholder image, ideally user replaces this -->
            <img src="https://images.unsplash.com/photo-1540541338287-41700207dee6?q=80&w=2070&auto=format&fit=crop"
                alt="Services Hero" class="w-full h-full object-cover brightness-75">
        </div>

        <div class="relative z-20 text-center px-6 max-w-4xl">
            <div class="inline-block mb-6">
                <div class="w-16 h-px bg-[#CDB885] inline-block align-middle"></div>
                <span class="mx-4 text-[#CDB885] uppercase tracking-[0.4em] text-xs font-bold">Experience Better</span>
                <div class="w-16 h-px bg-[#CDB885] inline-block align-middle"></div>
            </div>
            <h1 class="text-5xl md:text-7xl font-serif mb-6 leading-tight text-white">
                Curated <br>
                <span class="italic text-[#CDB885] text-4xl md:text-6xl">Excellence</span>
            </h1>
        </div>
    </section>

    <!-- Main Services Content -->
    <section class="py-24 bg-[#0B0D12]">
        <div class="max-w-7xl mx-auto px-6">

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div
                    class="bg-[#15171e] text-center group hover:-translate-y-2 transition-transform duration-500 overflow-hidden rounded-sm relative">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=2070&auto=format&fit=crop"
                            alt="Luxury Accomodation"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="p-8 relative">
                        <div
                            class="absolute top-0 right-0 w-12 h-12 bg-[#CDB885] flex items-center justify-center -mt-6 mr-6 transform rotate-45 group-hover:rotate-0 transition-transform duration-500">
                            <svg class="w-6 h-6 text-black -rotate-45 group-hover:rotate-0 transition-transform duration-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-serif text-white mb-4 group-hover:text-[#CDB885] transition-colors">Luxury
                            Accommodation</h3>
                        <p class="text-white/60 font-light leading-relaxed mb-6">
                            Experience world-class comfort in our curated selection of beachfront villas and premium
                            resorts, designed for tranquility and opulence.
                        </p>
                        <a href="#"
                            class="inline-block text-[#CDB885] text-xs tracking-widest uppercase border-b border-[#CDB885]/30 pb-1 hover:border-[#CDB885] transition-colors">View
                            Rooms</a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div
                    class="bg-[#15171e] text-center group hover:-translate-y-2 transition-transform duration-500 overflow-hidden rounded-sm relative">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=1974&auto=format&fit=crop"
                            alt="Fine Dining"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="p-8 relative">
                        <div
                            class="absolute top-0 right-0 w-12 h-12 bg-[#CDB885] flex items-center justify-center -mt-6 mr-6 transform rotate-45 group-hover:rotate-0 transition-transform duration-500">
                            <svg class="w-6 h-6 text-black -rotate-45 group-hover:rotate-0 transition-transform duration-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-serif text-white mb-4 group-hover:text-[#CDB885] transition-colors">Fine
                            Dining</h3>
                        <p class="text-white/60 font-light leading-relaxed mb-6">
                            Savor the flavors of the archipelago and international cuisine, crafted by expert chefs using
                            the freshest local ingredients.
                        </p>
                        <a href="#"
                            class="inline-block text-[#CDB885] text-xs tracking-widest uppercase border-b border-[#CDB885]/30 pb-1 hover:border-[#CDB885] transition-colors">Discover
                            Menu</a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div
                    class="bg-[#15171e] text-center group hover:-translate-y-2 transition-transform duration-500 overflow-hidden rounded-sm relative">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?q=80&w=2070&auto=format&fit=crop"
                            alt="Wellness Spa"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="p-8 relative">
                        <div
                            class="absolute top-0 right-0 w-12 h-12 bg-[#CDB885] flex items-center justify-center -mt-6 mr-6 transform rotate-45 group-hover:rotate-0 transition-transform duration-500">
                            <svg class="w-6 h-6 text-black -rotate-45 group-hover:rotate-0 transition-transform duration-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-serif text-white mb-4 group-hover:text-[#CDB885] transition-colors">
                            Wellness & Spa</h3>
                        <p class="text-white/60 font-light leading-relaxed mb-6">
                            Rejuvenate your body and soul with treatments inspired by ancient Javanese healing traditions in
                            our serene sanctuary.
                        </p>
                        <a href="#"
                            class="inline-block text-[#CDB885] text-xs tracking-widest uppercase border-b border-[#CDB885]/30 pb-1 hover:border-[#CDB885] transition-colors">Relax
                            Now</a>
                    </div>
                </div>

                <!-- Service 4 -->
                <div
                    class="bg-[#15171e] text-center group hover:-translate-y-2 transition-transform duration-500 overflow-hidden rounded-sm relative">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1530053969600-caed2596d242?q=80&w=2074&auto=format&fit=crop"
                            alt="Guided Tours"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="p-8 relative">
                        <div
                            class="absolute top-0 right-0 w-12 h-12 bg-[#CDB885] flex items-center justify-center -mt-6 mr-6 transform rotate-45 group-hover:rotate-0 transition-transform duration-500">
                            <svg class="w-6 h-6 text-black -rotate-45 group-hover:rotate-0 transition-transform duration-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-serif text-white mb-4 group-hover:text-[#CDB885] transition-colors">
                            Exclusive Tours</h3>
                        <p class="text-white/60 font-light leading-relaxed mb-6">
                            Discover hidden gems, from the mystic Ijen Crater to the secret beaches of Meru Betiri, with
                            private guides.
                        </p>
                        <a href="#"
                            class="inline-block text-[#CDB885] text-xs tracking-widest uppercase border-b border-[#CDB885]/30 pb-1 hover:border-[#CDB885] transition-colors">Start
                            Journey</a>
                    </div>
                </div>

                <!-- Service 5 -->
                <div
                    class="bg-[#15171e] text-center group hover:-translate-y-2 transition-transform duration-500 overflow-hidden rounded-sm relative">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?q=80&w=2070&auto=format&fit=crop"
                            alt="Event Planning"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="p-8 relative">
                        <div
                            class="absolute top-0 right-0 w-12 h-12 bg-[#CDB885] flex items-center justify-center -mt-6 mr-6 transform rotate-45 group-hover:rotate-0 transition-transform duration-500">
                            <svg class="w-6 h-6 text-black -rotate-45 group-hover:rotate-0 transition-transform duration-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-serif text-white mb-4 group-hover:text-[#CDB885] transition-colors">Event
                            Management</h3>
                        <p class="text-white/60 font-light leading-relaxed mb-6">
                            From intimate beach weddings to corporate retreats, we curate unforgettable moments against a
                            breathtaking backdrop.
                        </p>
                        <a href="#"
                            class="inline-block text-[#CDB885] text-xs tracking-widest uppercase border-b border-[#CDB885]/30 pb-1 hover:border-[#CDB885] transition-colors">Plan
                            Envent</a>
                    </div>
                </div>

                <!-- Service 6 -->
                <div
                    class="bg-[#15171e] text-center group hover:-translate-y-2 transition-transform duration-500 overflow-hidden rounded-sm relative">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?q=80&w=2072&auto=format&fit=crop"
                            alt="Transport"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <div class="p-8 relative">
                        <div
                            class="absolute top-0 right-0 w-12 h-12 bg-[#CDB885] flex items-center justify-center -mt-6 mr-6 transform rotate-45 group-hover:rotate-0 transition-transform duration-500">
                            <svg class="w-6 h-6 text-black -rotate-45 group-hover:rotate-0 transition-transform duration-500"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-serif text-white mb-4 group-hover:text-[#CDB885] transition-colors">
                            Premium Transfer</h3>
                        <p class="text-white/60 font-light leading-relaxed mb-6">
                            Seamless travel experiences with our fleet of luxury vehicles and private boat charters for
                            island hopping.
                        </p>
                        <a href="#"
                            class="inline-block text-[#CDB885] text-xs tracking-widest uppercase border-b border-[#CDB885]/30 pb-1 hover:border-[#CDB885] transition-colors">Book
                            Transfer</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
