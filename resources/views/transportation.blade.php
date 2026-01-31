@extends('layouts.app')

@section('title', 'Transportation | Red Island Tourism')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[80vh] flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=2069&auto=format&fit=crop"
                alt="Journey to Red Island" class="w-full h-full object-cover brightness-75">
        </div>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40 z-10"></div>

        <!-- Content -->
        <div class="relative z-20 text-center max-w-4xl px-6">
            <h4 class="text-[#CDB885] uppercase tracking-[0.3em] text-xs font-bold mb-4 animate-fade-in-up">Your Journey
                Starts Here</h4>
            <h1 class="text-5xl md:text-7xl font-serif text-white mb-6 leading-tight animate-fade-in-up delay-100">
                Seamless <span class="italic text-[#CDB885]">Travel</span>
            </h1>
            <p class="text-white/80 text-lg md:text-xl font-light tracking-wide animate-fade-in-up delay-200">
                From airport pickups to scenic island drives, we ensure your arrival is as beautiful as your stay.
            </p>
        </div>
    </section>

    <!-- Transportation Options -->
    <section class="py-24 bg-[#0B0D12]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">

            <div class="text-center mb-20">
                <span class="text-[#CDB885] uppercase tracking-[0.3em] text-xs font-bold">Getting Here</span>
                <h2 class="text-3xl md:text-5xl font-serif text-white mt-4">Ways to <span
                        class="italic text-[#CDB885]">Arrive</span></h2>
            </div>

            <div class="grid md:grid-cols-2 gap-12 lg:gap-16">

                <!-- Option 1: Air -->
                <div class="group flex flex-col md:flex-row gap-8 items-center md:items-start">
                    <div class="w-full md:w-1/2 aspect-[4/3] overflow-hidden rounded-sm relative">
                        <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?q=80&w=2074&auto=format&fit=crop"
                            alt="By Air"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    </div>
                    <div class="w-full md:w-1/2 text-left">
                        <h3 class="text-2xl font-serif text-white mb-2">By Air</h3>
                        <h4 class="text-[#CDB885] text-xs uppercase tracking-widest font-bold mb-4">Banyuwangi International
                            Airport (BWX)</h4>
                        <ul class="text-white/60 font-light space-y-2 list-disc pl-5">
                            <li>1-hour flight from Surabaya, with seasonal and charter connections from Jakarta.</li>
                            <li>2-hour drive to Red Island via smooth and scenic coastal roads.</li>
                            <li>Transport options: airport taxis, private cars, rental vehicles, resort transfers.</li>
                        </ul>
                    </div>
                </div>

                <!-- Option 2: Train -->
                <div class="group flex flex-col md:flex-row gap-8 items-center md:items-start">
                    <div class="w-full md:w-1/2 aspect-[4/3] overflow-hidden rounded-sm relative">
                        <img src="https://images.unsplash.com/photo-1474487548417-781cb71495f3?q=80&w=2184&auto=format&fit=crop"
                            alt="By Train"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    </div>
                    <div class="w-full md:w-1/2 text-left">
                        <h3 class="text-2xl font-serif text-white mb-2">By Train</h3>
                        <h4 class="text-[#CDB885] text-xs uppercase tracking-widest font-bold mb-4">Scenic Journey Across
                            East Java</h4>
                        <ul class="text-white/60 font-light space-y-2 list-disc pl-5">
                            <li>Nearest stations: Rogojampi & Banyuwangi Kota.</li>
                            <li>Direct routes from Surabaya, Malang, Yogyakarta, and connections from Jakarta.</li>
                            <li>2–2.5 hours by car from the station to Red Island.</li>
                        </ul>
                    </div>
                </div>

                <!-- Option 3: Sea -->
                <div class="group flex flex-col md:flex-row gap-8 items-center md:items-start">
                    <div class="w-full md:w-1/2 aspect-[4/3] overflow-hidden rounded-sm relative">
                        <img src="https://images.unsplash.com/photo-1544212513-40742f5341ce?q=80&w=2070&auto=format&fit=crop"
                            alt="By Sea"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    </div>
                    <div class="w-full md:w-1/2 text-left">
                        <h3 class="text-2xl font-serif text-white mb-2">By Sea</h3>
                        <h4 class="text-[#CDB885] text-xs uppercase tracking-widest font-bold mb-4">Fast Boat from Bali</h4>
                        <ul class="text-white/60 font-light space-y-2 list-disc pl-5">
                            <li>Routes from Benoa, Sanur, or Nusa Penida to Banyuwangi or Grajagan.</li>
                            <li>45–65 minutes travel time.</li>
                            <li>Only 30–45 minutes from the harbor to Red Island.</li>
                            <li>Ideal for Bali-based international travelers seeking seamless island hopping.</li>
                        </ul>
                    </div>
                </div>

                <!-- Option 4: Land -->
                <div class="group flex flex-col md:flex-row gap-8 items-center md:items-start">
                    <div class="w-full md:w-1/2 aspect-[4/3] overflow-hidden rounded-sm relative">
                        <img src="https://images.unsplash.com/photo-1469854523086-cc02fe5d8800?q=80&w=2021&auto=format&fit=crop"
                            alt="By Land"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0">
                    </div>
                    <div class="w-full md:w-1/2 text-left">
                        <h3 class="text-2xl font-serif text-white mb-2">By Land</h3>
                        <h4 class="text-[#CDB885] text-xs uppercase tracking-widest font-bold mb-4">Accessible from All
                            Directions</h4>
                        <ul class="text-white/60 font-light space-y-2 list-disc pl-5">
                            <li>Smooth roads from the North, West, and East.</li>
                            <li>Suitable for private cars, tour buses, VIP transport, and motorcycle travelers.</li>
                            <li>Car rentals, bikes, and shuttle services widely available.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Info Banner -->
    <section class="py-24 bg-[#1A1C23] border-t border-white/5">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-serif text-white mb-8">Ready to Arrange Your Transport?</h2>
            <p class="text-white/60 mb-12">Contact our concierge team to pre-book your transfers or request a vehicle.</p>
            <a href="#contact"
                class="inline-block border border-[#CDB885] text-[#CDB885] px-12 py-4 text-xs font-bold uppercase tracking-[0.2em] hover:bg-[#CDB885] hover:text-black transition-all duration-300">
                Contact Concierge
            </a>
        </div>
    </section>

@endsection
