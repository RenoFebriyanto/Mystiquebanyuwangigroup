<!-- Booking Section -->
<section id="booking" class="py-24 bg-[#1E232B] relative overflow-hidden">
    <!-- Decorative Background -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-[#CDB885]/20 to-transparent"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Left Content -->
            <div>
                <h3 class="golden-text uppercase tracking-widest text-sm mb-4">Reserve Your Experience</h3>
                <h2 class="text-4xl md:text-5xl font-serif mb-6 leading-tight">Book Your <span
                        class="italic golden-text">Journey</span></h2>
                <p class="text-white/70 text-lg leading-relaxed mb-8">
                    Secure your exclusive coastal retreat at Red Island. Whether you seek a romantic getaway, family
                    adventure, or corporate retreat, we craft unforgettable experiences tailored to your desires.
                </p>

                <div class="grid grid-cols-2 gap-6 mb-10">
                    <div class="border-l-2 border-[#CDB885] pl-4">
                        <p class="text-3xl font-serif golden-text mb-1">24/7</p>
                        <p class="text-xs uppercase tracking-widest accent-text">Concierge Service</p>
                    </div>
                    <div class="border-l-2 border-[#CDB885] pl-4">
                        <p class="text-3xl font-serif golden-text mb-1">100%</p>
                        <p class="text-xs uppercase tracking-widest accent-text">Satisfaction Guaranteed</p>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4">
                    <div class="flex items-center gap-2 text-sm text-white/60">
                        <svg class="w-5 h-5 golden-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Free Cancellation
                    </div>
                    <div class="flex items-center gap-2 text-sm text-white/60">
                        <svg class="w-5 h-5 golden-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Best Price Guarantee
                    </div>
                    <div class="flex items-center gap-2 text-sm text-white/60">
                        <svg class="w-5 h-5 golden-text" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                            </path>
                        </svg>
                        Secure Payment
                    </div>
                </div>
            </div>

            <!-- Booking Form -->
            <div class="bg-black/50 border border-[#CDB885]/20 p-8 md:p-10">
                <h4 class="text-2xl font-serif mb-6 text-center">Make a <span class="golden-text">Reservation</span>
                </h4>

                <form class="space-y-5" x-data="{ packageType: 'resort' }">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs uppercase tracking-widest accent-text mb-2">First Name</label>
                            <input type="text"
                                class="w-full bg-[#1E232B] border border-[#ACBAC4]/20 p-3 focus:outline-none focus:border-[#CDB885] transition-colors text-white">
                        </div>
                        <div>
                            <label class="block text-xs uppercase tracking-widest accent-text mb-2">Last Name</label>
                            <input type="text"
                                class="w-full bg-[#1E232B] border border-[#ACBAC4]/20 p-3 focus:outline-none focus:border-[#CDB885] transition-colors text-white">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-widest accent-text mb-2">Email Address</label>
                        <input type="email"
                            class="w-full bg-[#1E232B] border border-[#ACBAC4]/20 p-3 focus:outline-none focus:border-[#CDB885] transition-colors text-white">
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-widest accent-text mb-2">Phone Number</label>
                        <input type="tel"
                            class="w-full bg-[#1E232B] border border-[#ACBAC4]/20 p-3 focus:outline-none focus:border-[#CDB885] transition-colors text-white">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs uppercase tracking-widest accent-text mb-2">Check-in
                                Date</label>
                            <input type="date"
                                class="w-full bg-[#1E232B] border border-[#ACBAC4]/20 p-3 focus:outline-none focus:border-[#CDB885] transition-colors text-white">
                        </div>
                        <div>
                            <label class="block text-xs uppercase tracking-widest accent-text mb-2">Check-out
                                Date</label>
                            <input type="date"
                                class="w-full bg-[#1E232B] border border-[#ACBAC4]/20 p-3 focus:outline-none focus:border-[#CDB885] transition-colors text-white">
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs uppercase tracking-widest accent-text mb-2">Guests</label>
                            <select
                                class="w-full bg-[#1E232B] border border-[#ACBAC4]/20 p-3 focus:outline-none focus:border-[#CDB885] transition-colors text-white">
                                <option value="1">1 Guest</option>
                                <option value="2">2 Guests</option>
                                <option value="3">3 Guests</option>
                                <option value="4">4 Guests</option>
                                <option value="5+">5+ Guests</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs uppercase tracking-widest accent-text mb-2">Package</label>
                            <select x-model="packageType"
                                class="w-full bg-[#1E232B] border border-[#ACBAC4]/20 p-3 focus:outline-none focus:border-[#CDB885] transition-colors text-white">
                                <option value="resort">Luxury Resort</option>
                                <option value="tour">Guided Tour</option>
                                <option value="dining">Fine Dining</option>
                                <option value="spa">Wellness Spa</option>
                                <option value="complete">Complete Package</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs uppercase tracking-widest accent-text mb-2">Special Requests</label>
                        <textarea rows="3"
                            class="w-full bg-[#1E232B] border border-[#ACBAC4]/20 p-3 focus:outline-none focus:border-[#CDB885] transition-colors text-white resize-none"
                            placeholder="Any special requirements or preferences..."></textarea>
                    </div>

                    <button type="submit"
                        class="w-full py-4 bg-[#CDB885] text-black font-bold uppercase tracking-widest hover:bg-white transition-all duration-500 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        Confirm Reservation
                    </button>
                </form>

                <p class="text-center text-xs text-white/40 mt-4">By booking, you agree to our Terms of Service and
                    Privacy Policy</p>
            </div>
        </div>
    </div>
</section>
