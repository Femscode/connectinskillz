<section id="catchup" class="py-12 sm:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Contained Callout Banner matching Screenshot 4 content -->
        <div class="relative rounded-3xl overflow-hidden shadow-xl bg-gradient-to-r from-[#d9383a] via-[#e24a4d] to-[#c92f32] text-white p-8 sm:p-14 md:p-16 text-center">
            <!-- Subtle Image overlay texture -->
            <div class="absolute inset-0 z-0 opacity-20 mix-blend-overlay pointer-events-none">
                <img
                    src="{{ asset('images/events/catchup-bg.jpg') }}"
                    alt="Catch up sessions"
                    class="w-full h-full object-cover object-center" />
            </div>

            <!-- Content -->
            <div class="relative z-10 max-w-3xl mx-auto">
                <!-- Icon or Eyebrow -->
                <div class="w-12 h-12 rounded-full bg-white/15 backdrop-blur-md flex items-center justify-center mx-auto mb-6 text-white border border-white/20">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z" />
                    </svg>
                </div>

                <!-- Screenshot 4 Exact Headline -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white tracking-tight leading-tight mb-6 drop-shadow-sm">
                    Hi there,<br />
                    if you missed an event<br />
                    you can always catch up
                </h2>

                <!-- Screenshot 4 Sub-link (Redirects to /recorded-events) -->
                <div>
                    <a
                        href="{{ url('/recorded-events') }}"
                        class="italic underline text-white hover:text-white/90 text-base sm:text-lg font-medium transition-all duration-200 cursor-pointer inline-flex items-center gap-2 hover:translate-x-1">
                        <span>Click here to watch recorded video sessions.</span>
                        <svg class="w-4 h-4 not-italic" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>