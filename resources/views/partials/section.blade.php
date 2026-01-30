<section id="home" class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Overlay -->
    <div class="absolute inset-0 bg-black/50 z-10"></div>
    <!-- Video/Image Placeholder -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/red_island_main.jpg') }}" alt="Luxury Coastal" class="w-full h-full object-cover">
    </div>

    <!-- Content -->
    <div class="relative z-20 text-center max-w-4xl px-6">
        <p class="golden-text uppercase tracking-[0.5em] mb-4 text-sm font-semibold animate-pulse">Experience Pure
            Elegance</p>
        <h1 class="text-5xl md:text-8xl font-serif mb-6 leading-tight">Beyond the <span
                class="italic golden-text">Horizon</span></h1>
        <p class="text-lg md:text-xl text-white/80 max-w-2xl mx-auto mb-10 leading-relaxed font-light">
            Discover the untouched beauty of Red Island, where golden sunsets meet the emerald sea in a perfect harmony
            of luxury and nature.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
            <a href="#about"
                class="px-10 py-4 bg-[#CDB885] text-black font-bold tracking-widest uppercase hover:bg-white transition-all duration-500 shadow-xl">Explore
                Now</a>
            <a href="#contact"
                class="px-10 py-4 border border-white text-white font-bold tracking-widest uppercase hover:bg-white hover:text-black transition-all duration-500">Book
                Journey</a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20 animate-bounce">
        <svg class="w-6 h-6 golden-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7">
            </path>
        </svg>
    </div>
</section>
