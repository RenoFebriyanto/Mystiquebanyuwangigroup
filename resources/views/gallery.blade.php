@extends('layouts.app')

@section('title', 'Gallery | Red Island Tourism')

@section('content')
    <!-- Gallery Hero Section -->
    <section class="relative min-h-[40vh] flex items-center justify-center overflow-hidden pt-20">
        <div class="absolute inset-0 bg-black/60 z-10"></div>
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=1974&auto=format&fit=crop"
                alt="Gallery Hero" class="w-full h-full object-cover brightness-75">
        </div>

        <div class="relative z-20 text-center px-6 max-w-4xl">
            <h1 class="text-4xl md:text-6xl font-serif mb-2 leading-tight text-white">
                Captured <span class="italic text-[#CDB885]">Moments</span>
            </h1>
            <p class="text-white/60 tracking-widest text-xs uppercase">A Glimpse into Paradise</p>
        </div>
    </section>

    <!-- Gallery Grid Section -->
    <section class="py-16 md:py-24 bg-[#0B0D12]">
        <div class="max-w-[1600px] mx-auto px-4 md:px-8">

            <!-- Filter Categories (Optional UI, Placeholder inactive) -->
            <div
                class="flex justify-center flex-wrap gap-6 md:gap-12 mb-16 text-xs md:text-sm font-medium tracking-widest uppercase">
                <button class="text-[#CDB885] border-b border-[#CDB885] pb-1">All</button>
                <button class="text-white/40 hover:text-white transition-colors pb-1">Landscape</button>
                <button class="text-white/40 hover:text-white transition-colors pb-1">Culture</button>
                <button class="text-white/40 hover:text-white transition-colors pb-1">Interiors</button>
                <button class="text-white/40 hover:text-white transition-colors pb-1">Events</button>
            </div>

            <!-- Bento Grid Layout -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 auto-rows-[200px]">

                <!-- 16:9 Large Item (Span 2 cols, 1 row) -->
                <div class="col-span-2 md:col-span-2 row-span-2 relative group overflow-hidden rounded-sm">
                    <img src="{{ asset('images/gallery_fish_1.jpg') }}" alt="Fish Market Activity"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                </div>

                <!-- 4:5 Portrait Item (Span 1 col, 2 rows) -->
                <div class="col-span-1 md:col-span-1 row-span-2 relative group overflow-hidden rounded-sm">
                    <img src="{{ asset('images/gallery_fish_2.jpg') }}" alt="Fresh Catch"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                </div>

                <!-- 1:1 Square Item -->
                <div class="col-span-1 md:col-span-1 row-span-1 relative group overflow-hidden rounded-sm">
                    <img src="{{ asset('images/gallery_fish_3.jpg') }}" alt="Fishermen"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                </div>

                <!-- 1:1 Square Item -->
                <div class="col-span-1 md:col-span-1 row-span-1 relative group overflow-hidden rounded-sm">
                    <img src="{{ asset('images/gallery_fish_4.jpg') }}" alt="Boat Unloading"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                </div>

                <!-- 9:16 Tall Item (Span 1 col, 2 rows) -->
                <div class="col-span-1 md:col-span-1 row-span-2 relative group overflow-hidden rounded-sm">
                    <img src="{{ asset('images/gallery_fish_5.jpg') }}" alt="Market Scene"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                </div>

                <!-- 16:9 Wide Item -->
                <div class="col-span-2 md:col-span-2 row-span-1 relative group overflow-hidden rounded-sm">
                    <img src="{{ asset('images/gallery_fish_6.jpg') }}" alt="Wide Shot"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                </div>

                <!-- 1:1 Square Item -->
                <div class="col-span-1 md:col-span-1 row-span-1 relative group overflow-hidden rounded-sm">
                    <img src="{{ asset('images/gallery_fish_7.jpg') }}" alt="Detail"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                </div>

                <!-- 16:9 Wide Large Item -->
                <div class="col-span-2 md:col-span-2 row-span-2 relative group overflow-hidden rounded-sm">
                    <img src="{{ asset('images/gallery_fish_8.jpg') }}" alt="Wide Large"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                </div>

                <!-- 1:1 Square Item -->
                <div class="col-span-1 md:col-span-1 row-span-1 relative group overflow-hidden rounded-sm">
                    <img src="{{ asset('images/gallery_fish_9.jpg') }}" alt="Square"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                </div>

                <!-- 4:5 Portrait Item -->
                <div class="col-span-1 md:col-span-1 row-span-2 relative group overflow-hidden rounded-sm">
                    <img src="{{ asset('images/gallery_fish_10.jpg') }}" alt="Portrait"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                </div>

                <!-- 1:1 Square Item -->
                <div class="col-span-1 md:col-span-1 row-span-1 relative group overflow-hidden rounded-sm">
                    <img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?q=80&w=2049&auto=format&fit=crop"
                        alt="Square"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors"></div>
                </div>

            </div>
        </div>
    </section>
@endsection
