<section class="relative w-full min-h-[380px] sm:min-h-[440px] md:min-h-[480px] flex items-center justify-center pt-24 pb-16 overflow-hidden bg-[#020b1e]">
    <!-- Background image with light blue gradient showing more at the bottom -->
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('images/events/event4.avif') }}"
            alt="ConnectinSkillz Events"
            class="w-full h-full object-cover object-center opacity-90" />
        <div class="absolute inset-0 bg-gradient-to-b from-slate-950/20 via-[#003377]/40 to-[#0052cc]/85"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center text-white py-8 sm:py-12">
        <!-- ConnectinSkillz Hexagon Icon -->
        <div class="w-12 h-12 sm:w-14 sm:h-14 mx-auto mb-5">
            <svg viewBox="0 0 100 100" class="w-full h-full text-[#0052cc]" fill="currentColor">
                <circle cx="50" cy="18" r="8" />
                <circle cx="82" cy="35" r="8" />
                <circle cx="82" cy="70" r="8" />
                <circle cx="50" cy="87" r="8" />
                <circle cx="18" cy="70" r="8" />
                <circle cx="18" cy="35" r="8" />
                <circle cx="50" cy="52" r="7" />
                <path d="M50 18 L82 35 L82 70 L50 87 L18 70 L18 35 Z" fill="none" stroke="currentColor" stroke-width="5" stroke-linejoin="round" />
                <path d="M50 52 L50 18 M50 52 L82 35 M50 52 L82 70 M50 52 L50 87 M50 52 L18 70 M50 52 L18 35" stroke="currentColor" stroke-width="4" />
            </svg>
        </div>

        <!-- Headline -->
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight text-white mb-4 drop-shadow-md">
            ConnectinSkillz Events
        </h1>

        <!-- Subtitle -->
        <p class="max-w-2xl mx-auto text-base sm:text-lg text-slate-300 font-normal leading-relaxed">
            Discover our live bootcamps, workshops, and career talks. Connect with industry experts and fast-track your digital career.
        </p>

        <!-- Quick Jump Filter Badges -->
        <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mt-8">
            <a
                href="#ongoing"
                class="px-4 py-1.5 rounded-full text-xs font-semibold bg-white/10 hover:bg-white/20 text-white border border-white/15 transition-all backdrop-blur-sm">
                Registration Ongoing
            </a>
            <a
                href="#catchup"
                class="px-4 py-1.5 rounded-full text-xs font-semibold bg-white/10 hover:bg-white/20 text-white border border-white/15 transition-all backdrop-blur-sm">
                Catch Up & Replays
            </a>
            <a
                href="#past-events"
                class="px-4 py-1.5 rounded-full text-xs font-semibold bg-white/10 hover:bg-white/20 text-white border border-white/15 transition-all backdrop-blur-sm">
                Past Career Talks
            </a>
        </div>
    </div>
</section>