<!-- Gallery Section -->
<section id="gallery" class="py-24 bg-[#1E232B]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
            <div>
                <h3 class="golden-text uppercase tracking-widest text-sm mb-4">Visual Journey</h3>
                <h2 class="text-4xl md:text-5xl font-serif">Captured Moments</h2>
            </div>
            <button
                class="mt-6 md:mt-0 px-8 py-3 border border-[#CDB885] golden-text text-xs tracking-[0.2em] font-bold uppercase hover:bg-[#CDB885] hover:text-black transition-all">View
                All Gallery</button>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="h-64 md:h-80 overflow-hidden relative group">
                <img src="{{ asset('images/gallery_room.png') }}"
                    class="w-full h-full object-cover grayscale transition-all duration-700 group-hover:grayscale-0 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <span class="text-xs uppercase tracking-widest font-bold">Serene Morning</span>
                </div>
            </div>
            <div class="h-64 md:h-80 overflow-hidden relative group md:mt-12">
                <img src="{{ asset('images/destination.png') }}"
                    class="w-full h-full object-cover grayscale transition-all duration-700 group-hover:grayscale-0 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <span class="text-xs uppercase tracking-widest font-bold">Golden Sands</span>
                </div>
            </div>
            <div class="h-64 md:h-80 overflow-hidden relative group">
                <img src="https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="w-full h-full object-cover grayscale transition-all duration-700 group-hover:grayscale-0 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <span class="text-xs uppercase tracking-widest font-bold">Emerald Waves</span>
                </div>
            </div>
            <div class="h-64 md:h-80 overflow-hidden relative group md:mt-12">
                <img src="https://images.unsplash.com/photo-1510414842594-a61c69b5ae57?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    class="w-full h-full object-cover grayscale transition-all duration-700 group-hover:grayscale-0 group-hover:scale-110">
                <div
                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <span class="text-xs uppercase tracking-widest font-bold">Sunset Peak</span>
                </div>
            </div>
        </div>
    </div>
</section>
