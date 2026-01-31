@php
    $items = [
        [
            'image' =>
                'https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'title' => 'Veda',
            'location' => 'Hong Kong, Central',
            'type' => 'Modern Vegetarian',
            'style' => 'standard',
        ],
        [
            'image' =>
                'https://images.unsplash.com/photo-1559339352-11d035aa65de?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'title' => 'Monster',
            'location' => 'Canberra',
            'type' => 'Kitchen & Bar',
            'style' => 'light',
        ],
        [
            'image' =>
                'https://images.unsplash.com/photo-1543007630-9710e4a00a20?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'title' => 'KAZBA',
            'location' => 'Brisbane',
            'type' => 'Tel Aviv Street Food',
            'style' => 'bold-italic',
        ],
        [
            'image' =>
                'https://images.unsplash.com/photo-1550966871-3ed3c47e2ce2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'title' => 'Woolloomooloo',
            'location' => 'Sydney',
            'type' => 'Historic Wharf Bar',
            'style' => 'bordered',
        ],
        [
            'image' =>
                'https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'title' => '32',
            'subtitle' => 'Street',
            'location' => 'Bali, Kuta',
            'type' => 'Asian Street Food',
            'style' => 'vertical',
        ],
        [
            'image' =>
                'https://images.unsplash.com/photo-1578474846511-042525979b10?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'title' => 'Ozone',
            'location' => 'Hong Kong',
            'type' => 'Highest Bar',
            'style' => 'standard',
        ],
        [
            'image' =>
                'https://images.unsplash.com/photo-1519671482538-518885c9545d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'title' => 'Sirocco',
            'location' => 'Bangkok',
            'type' => 'Sky Bar',
            'style' => 'light',
        ],
        [
            'image' =>
                'https://images.unsplash.com/photo-1560624052-449f5ddf0c31?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'title' => 'Aer',
            'location' => 'Mumbai',
            'type' => 'Rooftop Lounge',
            'style' => 'standard',
        ],
    ];
    // Duplicate items to ensure smooth infinite loop on all screen sizes
    $slides = array_merge($items, $items);
@endphp

<section class="py-24 bg-[#0B0D12] overflow-hidden">
    <!-- Header -->
    <div class="max-w-7xl mx-auto px-6 lg:px-12 mb-12 flex flex-col md:flex-row justify-between items-end gap-6">
        <div class="relative">
            <div
                class="absolute -left-6 top-0 w-1 h-full bg-gradient-to-b from-[#CDB885] to-transparent opacity-50 hidden md:block">
            </div>
            <h3 class="text-[#CDB885] uppercase tracking-[0.3em] text-xs font-bold mb-3 pl-2">Discover More</h3>
            <h2 class="text-4xl md:text-6xl font-serif text-white leading-tight">
                <span class="italic font-light opacity-80">Our Experiential</span> <br>
                <span class="font-normal">Venues</span>
            </h2>
        </div>

        <!-- Navigation Buttons -->
        <div class="flex gap-4">
            <button id="swiper-prev"
                class="w-14 h-14 border border-white/10 rounded-full flex items-center justify-center text-white/50 hover:bg-[#CDB885] hover:border-[#CDB885] hover:text-black transition-all duration-300 group z-20">
                <svg class="w-6 h-6 transform group-hover:-translate-x-1 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button id="swiper-next"
                class="w-14 h-14 border border-white/10 rounded-full flex items-center justify-center text-white/50 hover:bg-[#CDB885] hover:border-[#CDB885] hover:text-black transition-all duration-300 group z-20">
                <svg class="w-6 h-6 transform group-hover:translate-x-1 transition-transform" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Swiper Slider -->
    <div class="swiper mySwiper w-full relative !pb-12 !overflow-visible">
        <div class="swiper-wrapper">
            @foreach ($slides as $slide)
                <div
                    class="swiper-slide !w-[280px] !h-[400px] md:!w-[340px] md:!h-[480px] relative group cursor-pointer overflow-hidden rounded-sm select-none transition-all duration-700 ease-out">
                    <!-- Image -->
                    <div class="absolute inset-0">
                        <img src="{{ $slide['image'] }}"
                            class="w-full h-full object-cover transition-transform duration-[1.5s] ease-out brightness-50 grayscale-[50%] group-[.swiper-slide-active]:brightness-100 group-[.swiper-slide-active]:grayscale-0">
                    </div>

                    <!-- Overlay Gradient -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-[.swiper-slide-active]:opacity-40 transition-opacity duration-500">
                    </div>

                    <!-- Content -->
                    <div
                        class="absolute inset-0 flex flex-col items-center justify-center text-center p-8 z-10 transition-all duration-500 opacity-40 scale-90 group-[.swiper-slide-active]:opacity-100 group-[.swiper-slide-active]:scale-100">
                        <div
                            class="transform translate-y-4 group-[.swiper-slide-active]:translate-y-0 transition-transform duration-500">
                            @if ($slide['style'] == 'vertical')
                                <div class="relative">
                                    <h3 class="font-serif text-6xl text-white tracking-tight font-bold drop-shadow-lg">
                                        {{ $slide['title'] }}</h3>
                                    <span
                                        class="absolute top-1/2 -left-8 -translate-y-1/2 -rotate-90 text-[0.6rem] uppercase tracking-widest text-[#CDB885] font-medium">{{ $slide['subtitle'] }}</span>
                                </div>
                            @elseif($slide['style'] == 'bordered')
                                <h3
                                    class="font-serif text-3xl text-white mb-2 tracking-widest uppercase font-bold border-t border-b border-[#CDB885]/80 py-3 px-2 drop-shadow-lg">
                                    {{ $slide['title'] }}
                                </h3>
                            @elseif($slide['style'] == 'bold-italic')
                                <h3
                                    class="font-serif text-5xl text-white mb-2 tracking-wide font-black italic drop-shadow-lg">
                                    {{ $slide['title'] }}
                                </h3>
                                <div
                                    class="w-12 h-0.5 bg-[#CDB885] mx-auto mt-4 transform scale-x-0 group-[.swiper-slide-active]:scale-x-100 transition-transform duration-500">
                                </div>
                            @elseif($slide['style'] == 'light')
                                <h3
                                    class="font-serif text-5xl text-white mb-2 tracking-wide uppercase font-light drop-shadow-lg">
                                    {{ $slide['title'] }}
                                </h3>
                                <div
                                    class="w-12 h-0.5 bg-[#CDB885] mx-auto mt-4 transform scale-x-0 group-[.swiper-slide-active]:scale-x-100 transition-transform duration-500">
                                </div>
                            @else
                                <h3
                                    class="font-serif text-5xl text-white mb-2 tracking-wide uppercase font-medium drop-shadow-lg">
                                    {{ $slide['title'] }}
                                </h3>
                                <div
                                    class="w-12 h-0.5 bg-[#CDB885] mx-auto mt-4 transform scale-x-0 group-[.swiper-slide-active]:scale-x-100 transition-transform duration-500">
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Footer Info -->
                    <div
                        class="absolute bottom-8 left-0 right-0 text-center z-20 transform translate-y-4 opacity-0 group-[.swiper-slide-active]:translate-y-0 group-[.swiper-slide-active]:opacity-100 transition-all duration-700 delay-100">
                        <p
                            class="text-[0.65rem] uppercase tracking-[0.25em] text-[#CDB885] font-bold mb-1 drop-shadow-md">
                            {{ $slide['location'] }}</p>
                        <p class="text-xs font-serif italic text-white/90 drop-shadow-md">{{ $slide['type'] }}</p>
                    </div>

                    <!-- Border Effect for Active Slide -->
                    <div
                        class="absolute inset-4 border border-[#CDB885]/30 scale-95 opacity-0 group-[.swiper-slide-active]:scale-100 group-[.swiper-slide-active]:opacity-100 transition-all duration-700 delay-200 pointer-events-none">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: "auto",
                spaceBetween: 24, // Optimized gap
                centeredSlides: true,
                loop: true, // Enables infinite loop
                loopedSlides: 16, // Matches duplicated count for safety
                speed: 1000,
                grabCursor: true,
                slideToClickedSlide: true,
                effect: "coverflow",
                coverflowEffect: {
                    rotate: 0,
                    stretch: 0,
                    depth: 120, // Creates depth effect
                    modifier: 1, // Intensity
                    slideShadows: true, // Better realism
                    scale: 0.9, // Shrink inactive slides (if supported)
                },
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true, // Pause when user hovers
                },
                navigation: {
                    nextEl: "#swiper-next",
                    prevEl: "#swiper-prev",
                },
                breakpoints: {
                    640: {
                        spaceBetween: 30,
                    },
                    1024: {
                        spaceBetween: 40,
                        coverflowEffect: {
                            depth: 160,
                            modifier: 1,
                            scale: 0.85, // More pronounced scale difference on desktop
                        }
                    },
                }
            });
        });
    </script>
@endpush
