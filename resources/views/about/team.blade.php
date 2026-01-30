<!-- Section: Executive Team -->
<section id="executive-team-fixed" class="py-32 bg-[#1a1a2e] px-6 lg:px-16 relative overflow-hidden"
    x-data="{ lang: 'en' }">
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-px h-full bg-gradient-to-b from-transparent via-[#D4B996] to-transparent">
        </div>
        <div class="absolute top-0 right-1/4 w-px h-full bg-gradient-to-b from-transparent via-[#D4B996] to-transparent">
        </div>
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="text-center mb-20 space-y-6">
            <h2 class="text-4xl md:text-5xl font-serif text-white">Meet Our Executive Team</h2>

            <div class="flex justify-center items-center gap-4 pt-4">
                <button @click="lang = 'en'"
                    :class="lang === 'en' ? 'text-[#D4B996] border-[#D4B996]' : 'text-white/40 border-white/10'"
                    class="px-4 py-1 text-[10px] uppercase tracking-widest border transition-all duration-500 font-bold">English</button>
                <div class="w-1 h-1 bg-white/20 rotate-45"></div>
                <button @click="lang = 'id'"
                    :class="lang === 'id' ? 'text-[#D4B996] border-[#D4B996]' : 'text-white/40 border-white/10'"
                    class="px-4 py-1 text-[10px] uppercase tracking-widest border transition-all duration-500 font-bold">Indonesia</button>
            </div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Member 1 -->
            <div class="group relative">
                <div class="aspect-[4/5] bg-[#1E232B] overflow-hidden relative border border-white/5">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a2e] via-transparent to-transparent z-10">
                    </div>
                    <div class="w-full h-full flex items-center justify-center text-[#D4B996]/20 bg-[#1E232B]">
                        <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20 flex items-center justify-center p-8 text-center">
                        <div>
                            <p x-show="lang === 'en'" class="text-sm text-white/90 leading-relaxed font-light italic">
                                "30 years of hospitality experience, specializing in business strategy and destination
                                development."</p>
                            <p x-show="lang === 'id'" class="text-sm text-white/90 leading-relaxed font-light italic">
                                "30 tahun pengalaman di dunia hospitality, spesialis dalam strategi bisnis dan
                                pengembangan destinasi."</p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <h4 class="text-xl font-serif text-white">Yulli Criestiani</h4>
                    <p class="text-[10px] text-[#D4B996] uppercase tracking-[0.2em] mt-2 font-bold">Director & Founder
                    </p>
                </div>
            </div>

            <!-- Member 2 -->
            <div class="group relative">
                <div class="aspect-[4/5] bg-[#1E232B] overflow-hidden relative border border-white/5">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a2e] via-transparent to-transparent z-10">
                    </div>
                    <div class="w-full h-full flex items-center justify-center text-[#D4B996]/20 bg-[#1E232B]">
                        <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20 flex items-center justify-center p-8 text-center">
                        <div>
                            <p x-show="lang === 'en'" class="text-sm text-white/90 leading-relaxed font-light italic">
                                "Specialist in tourism operations and island development with deep community alignment
                                expertise."</p>
                            <p x-show="lang === 'id'" class="text-sm text-white/90 leading-relaxed font-light italic">
                                "Spesialis dalam operasional pariwisata dan pengembangan pulau dengan keahlian
                                penyelarasan komunitas."</p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <h4 class="text-xl font-serif text-white">Mr. Budi Wahyono</h4>
                    <p class="text-[10px] text-[#D4B996] uppercase tracking-[0.2em] mt-2 font-bold">Chief Commissioner
                    </p>
                </div>
            </div>

            <!-- Member 3 -->
            <div class="group relative">
                <div class="aspect-[4/5] bg-[#1E232B] overflow-hidden relative border border-white/5">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a2e] via-transparent to-transparent z-10">
                    </div>
                    <div class="w-full h-full flex items-center justify-center text-[#D4B996]/20 bg-[#1E232B]">
                        <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20 flex items-center justify-center p-8 text-center">
                        <div>
                            <p x-show="lang === 'en'" class="text-sm text-white/90 leading-relaxed font-light italic">
                                "25+ years in hospitality finance, expert in financial governance and cloud migration."
                            </p>
                            <p x-show="lang === 'id'" class="text-sm text-white/90 leading-relaxed font-light italic">
                                "25+ tahun di keuangan hospitality, ahli dalam tata kelola keuangan dan migrasi cloud."
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <h4 class="text-xl font-serif text-white">Ms. Dessy Lecky</h4>
                    <p class="text-[10px] text-[#D4B996] uppercase tracking-[0.2em] mt-2 font-bold">Financial Director
                    </p>
                </div>
            </div>

            <!-- Member 4 -->
            <div class="group relative">
                <div class="aspect-[4/5] bg-[#1E232B] overflow-hidden relative border border-white/5">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a2e] via-transparent to-transparent z-10">
                    </div>
                    <div class="w-full h-full flex items-center justify-center text-[#D4B996]/20 bg-[#1E232B]">
                        <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20 flex items-center justify-center p-8 text-center">
                        <div>
                            <p x-show="lang === 'en'" class="text-sm text-white/90 leading-relaxed font-light italic">
                                "Leading development and architecture with a focus on sustainable luxury construction."
                            </p>
                            <p x-show="lang === 'id'" class="text-sm text-white/90 leading-relaxed font-light italic">
                                "Memimpin pengembangan dan arsitektur dengan fokus pada konstruksi mewah yang
                                berkelanjutan."</p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <h4 class="text-xl font-serif text-white">Mr. John</h4>
                    <p class="text-[10px] text-[#D4B996] uppercase tracking-[0.2em] mt-2 font-bold">Director of
                        Construction</p>
                </div>
            </div>

            <!-- Member 5 -->
            <div class="group relative">
                <div class="aspect-[4/5] bg-[#1E232B] overflow-hidden relative border border-white/5">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a2e] via-transparent to-transparent z-10">
                    </div>
                    <div class="w-full h-full flex items-center justify-center text-[#D4B996]/20 bg-[#1E232B]">
                        <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20 flex items-center justify-center p-8 text-center">
                        <div>
                            <p x-show="lang === 'en'" class="text-sm text-white/90 leading-relaxed font-light italic">
                                "Creative lead for spatial design, transforming visions into high-end luxury
                                aesthetics."</p>
                            <p x-show="lang === 'id'" class="text-sm text-white/90 leading-relaxed font-light italic">
                                "Pemimpin kreatif desain spasial, mengubah visi menjadi estetika mewah kelas atas."</p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <h4 class="text-xl font-serif text-white">Mr. Adrian</h4>
                    <p class="text-[10px] text-[#D4B996] uppercase tracking-[0.2em] mt-2 font-bold">Interior Designer
                    </p>
                </div>
            </div>

            <!-- Member 6 -->
            <div class="group relative">
                <div class="aspect-[4/5] bg-[#1E232B] overflow-hidden relative border border-white/5">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a2e] via-transparent to-transparent z-10">
                    </div>
                    <div class="w-full h-full flex items-center justify-center text-[#D4B996]/20 bg-[#1E232B]">
                        <svg class="w-20 h-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20 flex items-center justify-center p-8 text-center">
                        <div>
                            <p x-show="lang === 'en'" class="text-sm text-white/90 leading-relaxed font-light italic">
                                "Ensuring seamless expansion and integrity through meticulous compliance and legal
                                management."</p>
                            <p x-show="lang === 'id'" class="text-sm text-white/90 leading-relaxed font-light italic">
                                "Memastikan ekspansi dan integritas yang lancar melalui kepatuhan dan manajemen hukum
                                yang teliti."</p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <h4 class="text-xl font-serif text-white">Mr. Syauqi</h4>
                    <p class="text-[10px] text-[#D4B996] uppercase tracking-[0.2em] mt-2 font-bold">Legal Team</p>
                </div>
            </div>
        </div>
    </div>
</section>
