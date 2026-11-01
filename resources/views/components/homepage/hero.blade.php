<section class="relative w-full min-h-[640px] md:min-h-[720px] lg:min-h-[800px] flex items-center justify-center pt-24 pb-20 overflow-hidden bg-slate-950">
    <!-- Background Video & Dynamic Overlays -->
    <div class="absolute inset-0 z-0">
        <video
            autoplay
            loop
            muted
            playsinline
            class="w-full h-full object-cover object-center scale-105 filter brightness-90">
            <source src="{{ asset('images/homepage/home.mp4') }}" type="video/mp4" />
        </video>
        <!-- Layered Cinematic Overlays -->
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/85 via-slate-950/65 to-slate-950/90"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-600/25 via-transparent to-transparent"></div>
        <!-- Subtle Grid Pattern Overlay -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:3.5rem_3.5rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)]"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white py-12 flex flex-col items-center">
        <!-- Live Status Pill -->


        <h1 class="text-4xl sm:text-6xl md:text-7xl lg:text-[76px] font-black tracking-tight leading-[1.08] mb-6 drop-shadow-[0_10px_35px_rgba(0,0,0,0.5)]">
            <span class="text-[#004AAD]">Your</span>
            <span class="text-white">Success</span>
            <br />
            <span class="text-white">Our</span>
            <span class="text-[#004AAD]">vision</span>
        </h1>

        <p class="max-w-2xl mx-auto text-base sm:text-lg md:text-xl text-slate-200/90 font-normal leading-relaxed mb-10 drop-shadow-md">
            With our LMS we make your success attainable through a well structured
            learning pathway and training from the best SME's in your desired field
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 w-full sm:w-auto">
            <a
                href="{{ url('/#courses') }}"
                class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-8 py-4 rounded-xl bg-[#004AAD] hover:bg-[#003a8c] text-white font-bold text-base transition-all duration-300 shadow-xl shadow-[#004AAD]/40 hover:shadow-2xl hover:shadow-[#004AAD]/60 hover:-translate-y-0.5 active:translate-y-0 group cursor-pointer">
                <span>Explore Courses</span>
                <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
            <a
                href="{{ url('/about') }}"
                class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-4 rounded-xl bg-white/10 hover:bg-white/20 text-white backdrop-blur-xl border border-white/25 hover:border-white/45 font-semibold text-base transition-all duration-300 shadow-lg hover:-translate-y-0.5 active:translate-y-0 cursor-pointer">
                Learn More About Us
            </a>
        </div>
    </div>


</section>