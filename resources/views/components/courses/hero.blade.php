<section class="relative w-full min-h-[440px] sm:min-h-[500px] md:min-h-[560px] flex items-center justify-center pt-20 overflow-hidden bg-slate-950">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('placeholders/courses-hero-bg.svg') }}"
            alt="Book a Seat - ConnectinSkillz Courses"
            class="w-full h-full object-cover object-center"
        />
        <!-- Dark overlay -->
        <div class="absolute inset-0 bg-black/65"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center text-white py-16">
        <!-- Blue Hexagon Logo Icon -->
        <div class="w-14 h-14 mx-auto mb-6">
            <svg viewBox="0 0 100 100" class="w-full h-full text-[#0052cc]" fill="currentColor">
                <circle cx="50" cy="18" r="8" />
                <circle cx="82" cy="35" r="8" />
                <circle cx="82" cy="70" r="8" />
                <circle cx="50" cy="87" r="8" />
                <circle cx="18" cy="70" r="8" />
                <circle cx="18" cy="35" r="8" />
                <!-- Center Node -->
                <circle cx="50" cy="52" r="7" />
                <!-- Connections -->
                <path d="M50 18 L82 35 L82 70 L50 87 L18 70 L18 35 Z" fill="none" stroke="currentColor" stroke-width="5" stroke-linejoin="round" />
                <path d="M50 52 L50 18 M50 52 L82 35 M50 52 L82 70 M50 52 L50 87 M50 52 L18 70 M50 52 L18 35" stroke="currentColor" stroke-width="4" />
            </svg>
        </div>

        <!-- Headline -->
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight mb-6 drop-shadow-md">
            Book a Seat!.
        </h1>

        <!-- Subtitle -->
        <p class="max-w-3xl mx-auto text-base sm:text-lg md:text-xl text-slate-200 font-normal leading-relaxed drop-shadow-sm">
            Launch Your Tech Career from Anywhere! Master In-Demand Skills with Our Expert-Led Courses and Land High-Paying Online Jobs. Enroll Now – Your Future Starts Here!
        </p>
    </div>
</section>
