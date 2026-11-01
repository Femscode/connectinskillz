<section class="relative w-full min-h-[420px] sm:min-h-[480px] md:min-h-[520px] flex items-center justify-center pt-20 overflow-hidden bg-blue-900">
    <!-- Background Image with Blue Tint Overlay -->
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('placeholders/stories-hero-bg.svg') }}"
            alt="Explore and Hear from Our Candidates"
            class="w-full h-full object-cover object-center"
        />
        <!-- Deep Blue Overlay -->
        <div class="absolute inset-0 bg-[#0052cc]/75 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-black/30"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 text-center text-white py-16">
        <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight leading-tight md:leading-[1.15] drop-shadow-md">
            Explore and Hear<br />
            from Our Candidates
        </h1>
    </div>
</section>
