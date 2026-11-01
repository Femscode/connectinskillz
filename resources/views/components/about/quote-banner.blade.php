<section class="relative w-full min-h-[480px] sm:min-h-[540px] md:min-h-[580px] flex items-center justify-center overflow-hidden bg-slate-900">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('placeholders/franklin-quote-bg.svg') }}"
            alt="An investment in knowledge pays the best interest"
            class="w-full h-full object-cover object-center"
        />
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/70 to-black/60"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-6 sm:px-8 text-center text-white py-16">
        <h2 class="text-3xl sm:text-5xl md:text-6xl font-extrabold tracking-tight leading-tight sm:leading-snug mb-8 drop-shadow-md">
            An <span class="text-[#2563eb]">investment</span> in<br />
            <span class="text-[#2563eb]">knowledge</span> pays the best<br />
            <span class="text-[#2563eb]">interest</span>.
        </h2>

        <p class="text-lg sm:text-xl md:text-2xl font-bold text-white tracking-wide">
            Benjamin Franklin
        </p>
    </div>
</section>
