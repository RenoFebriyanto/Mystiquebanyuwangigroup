<!-- Booking Modal -->
<div x-data="{
    show: false,
    step: 1,
    form: {
        firstName: '',
        lastName: '',
        email: '',
        arrival: '',
        package: 'resort',
        requests: ''
    },
    submitBooking() {
        // Simple validation
        if (!this.form.firstName || !this.form.email) {
            alert('Please fill in required fields');
            return;
        }

        this.step = 2;

        // Wait for element to render then generate QR
        setTimeout(() => {
            const qrContainer = document.getElementById('qrcode');
            qrContainer.innerHTML = ''; // Clear previous

            const bookingData = `
BOOKING CONFIRMATION
-------------------
Name: ${this.form.firstName} ${this.form.lastName}
Email: ${this.form.email}
Date: ${this.form.arrival}
Package: ${this.form.package}
-------------------
Ref: ${Math.random().toString(36).substring(7).toUpperCase()}
                `.trim();

            new QRCode(qrContainer, {
                text: bookingData,
                width: 180,
                height: 180,
                colorDark: '#000000',
                colorLight: '#ffffff',
                correctLevel: QRCode.CorrectLevel.H
            });
        }, 100);
    },
    resetForm() {
        this.step = 1;
        this.form = {
            firstName: '',
            lastName: '',
            email: '',
            arrival: '',
            package: 'resort',
            requests: ''
        };
        this.show = false;
    }
}" @open-booking-modal.window="show = true; step = 1" @keydown.escape.window="show = false"
    class="relative z-[100]" aria-labelledby="modal-title" role="dialog" aria-modal="true" style="display: none;"
    x-show="show">

    <!-- Background backdrop -->
    <div x-show="show" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black/80 backdrop-blur-sm transition-opacity"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

            <!-- Modal panel -->
            <div x-show="show" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" @click.away="show = false"
                class="relative transform overflow-hidden rounded-sm bg-[#0B0D12] border border-[#CDB885]/20 text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-4xl">

                <!-- Close Button -->
                <button @click="show = false"
                    class="absolute top-4 right-4 text-white/40 hover:text-[#CDB885] transition-colors z-20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>

                <!-- Modal Content: Split Layout -->
                <div class="grid md:grid-cols-5 h-full min-h-[500px]">

                    <!-- Left: Image/Info Side (2 columns) -->
                    <div
                        class="md:col-span-2 bg-[#15171e] p-8 hidden md:flex flex-col justify-between relative overflow-hidden">
                        <!-- Background decoration -->
                        <div class="absolute inset-0 opacity-20">
                            <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?q=80&w=2070&auto=format&fit=crop"
                                class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black/50"></div>
                        </div>

                        <div class="relative z-10">
                            <img src="{{ asset('images/mystique_logo_gold.png') }}" alt="Logo"
                                class="w-16 h-auto mb-6">
                            <h3 class="text-2xl font-serif text-white mb-2">Begin Your Journey</h3>
                            <p class="text-white/60 text-sm leading-relaxed">
                                Experience the pinnacle of luxury and nature at Red Island. Your personalized retreat
                                awaits.
                            </p>
                        </div>

                        <div class="relative z-10 space-y-4">
                            <div class="flex items-center gap-3 text-sm text-white/80">
                                <svg class="w-5 h-5 text-[#CDB885]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                <span>+62 812 3456 7890</span>
                            </div>
                            <div class="flex items-center gap-3 text-sm text-white/80">
                                <svg class="w-5 h-5 text-[#CDB885]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span>reservations@m-redresort.com</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Form Side (3 columns) -->
                    <div class="md:col-span-3 p-8 md:p-10 bg-[#0B0D12] relative">

                        <!-- Step 1: Form -->
                        <div x-show="step === 1" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-4"
                            x-transition:enter-end="opacity-100 translate-x-0">
                            <h2 class="text-2xl font-serif mb-6 flex items-center gap-4">
                                <span class="w-8 h-px bg-[#CDB885]"></span>
                                Reservation Form
                            </h2>

                            <form class="space-y-4" @submit.prevent="submitBooking">
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label
                                            class="block text-[0.65rem] uppercase tracking-widest text-[#CDB885] mb-1.5">First
                                            Name</label>
                                        <input type="text" x-model="form.firstName"
                                            class="w-full bg-[#15171e] border border-white/10 p-2.5 text-sm focus:outline-none focus:border-[#CDB885] transition-colors text-white rounded-sm"
                                            required>
                                    </div>
                                    <div>
                                        <label
                                            class="block text-[0.65rem] uppercase tracking-widest text-[#CDB885] mb-1.5">Last
                                            Name</label>
                                        <input type="text" x-model="form.lastName"
                                            class="w-full bg-[#15171e] border border-white/10 p-2.5 text-sm focus:outline-none focus:border-[#CDB885] transition-colors text-white rounded-sm">
                                    </div>
                                </div>

                                <div>
                                    <label
                                        class="block text-[0.65rem] uppercase tracking-widest text-[#CDB885] mb-1.5">Email
                                        Address</label>
                                    <input type="email" x-model="form.email"
                                        class="w-full bg-[#15171e] border border-white/10 p-2.5 text-sm focus:outline-none focus:border-[#CDB885] transition-colors text-white rounded-sm"
                                        required>
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label
                                            class="block text-[0.65rem] uppercase tracking-widest text-[#CDB885] mb-1.5">Arrival</label>
                                        <input type="date" x-model="form.arrival"
                                            class="w-full bg-[#15171e] border border-white/10 p-2.5 text-sm focus:outline-none focus:border-[#CDB885] transition-colors text-white rounded-sm">
                                    </div>
                                    <div>
                                        <label
                                            class="block text-[0.65rem] uppercase tracking-widest text-[#CDB885] mb-1.5">Packgae</label>
                                        <select x-model="form.package"
                                            class="w-full bg-[#15171e] border border-white/10 p-2.5 text-sm focus:outline-none focus:border-[#CDB885] transition-colors text-white rounded-sm">
                                            <option value="resort">Luxury Resort</option>
                                            <option value="tour">Guided Tour</option>
                                            <option value="dining">Fine Dining</option>
                                            <option value="spa">Wellness Spa</option>
                                            <option value="complete">Complete Package</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label
                                        class="block text-[0.65rem] uppercase tracking-widest text-[#CDB885] mb-1.5">Special
                                        Requests</label>
                                    <textarea rows="2" x-model="form.requests"
                                        class="w-full bg-[#15171e] border border-white/10 p-2.5 text-sm focus:outline-none focus:border-[#CDB885] transition-colors text-white rounded-sm resize-none"></textarea>
                                </div>

                                <button type="submit"
                                    class="w-full py-3 bg-[#CDB885] text-black font-bold uppercase tracking-widest text-xs hover:bg-white transition-all duration-300 mt-2">
                                    Generate Booking Pass
                                </button>
                            </form>
                        </div>

                        <!-- Step 2: QR Result -->
                        <div x-show="step === 2" x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 translate-x-4"
                            x-transition:enter-end="opacity-100 translate-x-0"
                            class="h-full flex flex-col items-center justify-center text-center">

                            <div
                                class="bg-white p-4 rounded-lg mb-6 shadow-xl transform hover:scale-105 transition-transform duration-300">
                                <div id="qrcode" class="overflow-hidden bg-white"></div>
                            </div>

                            <h3 class="text-2xl font-serif text-[#CDB885] mb-2">Booking Confirmed</h3>
                            <p class="text-white/60 text-sm mb-8 max-w-xs mx-auto">Please save this QR code. Present it
                                upon arrival for a seamless check-in experience.</p>

                            <button @click="resetForm()"
                                class="px-8 py-3 border border-[#CDB885]/30 text-[#CDB885] font-bold uppercase tracking-widest text-xs hover:bg-[#CDB885] hover:text-black transition-all duration-300">
                                Close & Reset
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
