<section class="py-20 md:py-28 bg-gradient-to-b from-white via-slate-50/60 to-white overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <!-- Left Column: Image Container -->
            <div class="lg:col-span-6 relative">
                <!-- Ambient Glow Behind Image -->
                <div class="absolute -inset-4 bg-[#004AAD]/15 rounded-3xl blur-2xl -z-10"></div>

                <div class="relative w-full aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl shadow-slate-300/60 border border-slate-200/80 bg-white group">
                    <img
                        src="{{ asset('images/homepage/be-part.avif') }}"
                        alt="Digital growth and collaborative learning"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/25 via-transparent to-transparent pointer-events-none"></div>
                </div>

                <!-- Floating Glass Badge -->
                <div class="hidden sm:flex absolute -bottom-6 -right-6 bg-white/95 backdrop-blur-xl rounded-2xl p-4.5 shadow-2xl shadow-[#004AAD]/10 border border-white/80 ring-1 ring-slate-100 items-center gap-3.5 animate-fade-in">
                    <div class="w-12 h-12 rounded-xl bg-[#004AAD] flex items-center justify-center text-white shadow-md shadow-[#004AAD]/30">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs text-slate-500 font-semibold uppercase tracking-wider">Empowering Careers</p>
                        <p class="text-base font-black text-slate-900">100% Practical Growth</p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Content -->
            <div class="lg:col-span-6 flex flex-col justify-center">
                <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-widest text-[#004AAD] bg-blue-50 border border-blue-100 shadow-xs mb-4 w-fit">
                    Transformative Learning
                </span>

                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-slate-900 tracking-tight leading-[1.12] mb-6">
                    Be Part of the <span class="text-[#004AAD]">Digital growth</span>
                </h2>

                <p class="text-base sm:text-lg text-slate-600 leading-relaxed mb-8">
                    There has been an increasing need for individuals to expand their skill
                    sets to become multi-skilled, solve complexities with problems, provide
                    and successfully deliver digital solutions to organisations. We at
                    <strong class="text-slate-900 font-bold">Connectinskillz</strong>
                    see ourselves as a catalyst to enable people from different background
                    acquire new skill sets as well as bridging the gaps within their
                    knowledge.
                </p>

                <ul class="space-y-4 mb-10">
                    <li class="flex items-center gap-3.5 text-slate-700 text-sm sm:text-base font-medium">
                        <span class="flex-shrink-0 w-7 h-7 rounded-lg bg-blue-50 border border-blue-200/60 text-[#004AAD] flex items-center justify-center shadow-xs">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        <span>Industry-relevant technical and soft skills</span>
                    </li>
                    <li class="flex items-center gap-3.5 text-slate-700 text-sm sm:text-base font-medium">
                        <span class="flex-shrink-0 w-7 h-7 rounded-lg bg-blue-50 border border-blue-200/60 text-[#004AAD] flex items-center justify-center shadow-xs">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        <span>Tailored hands-on real-world experience</span>
                    </li>
                    <li class="flex items-center gap-3.5 text-slate-700 text-sm sm:text-base font-medium">
                        <span class="flex-shrink-0 w-7 h-7 rounded-lg bg-blue-50 border border-blue-200/60 text-[#004AAD] flex items-center justify-center shadow-xs">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        <span>Direct mentorship from working senior professionals</span>
                    </li>
                </ul>

                <div>
                    <a
                        href="{{ url('/about') }}"
                        class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-xl bg-[#004AAD] hover:bg-[#003a8c] text-white font-bold text-sm sm:text-base transition-all duration-300 shadow-lg shadow-[#004AAD]/25 hover:shadow-xl hover:shadow-[#004AAD]/40 hover:-translate-y-0.5 active:translate-y-0 group cursor-pointer">
                        <span>Learn More About Our Mission</span>
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>