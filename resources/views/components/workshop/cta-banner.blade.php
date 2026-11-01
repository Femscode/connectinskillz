<section class="relative w-full min-h-[500px] sm:min-h-[560px] md:min-h-[600px] flex items-center justify-center overflow-hidden bg-slate-950">
    <!-- Background Image (Screenshot 5) -->
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('images/workshop/cta-typing-bg.jpg') }}"
            alt="Move a Step further into achieving your Dreams"
            class="w-full h-full object-cover object-center"
        />
        <!-- Deep Moody Dark Overlay -->
        <div class="absolute inset-0 bg-[#0d1326]/85 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#0d1326] via-[#0d1326]/75 to-[#0d1326]/90"></div>
    </div>

    <!-- Centered Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center text-white">
        <!-- Headline (Screenshot 5) -->
        <h2 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight leading-tight sm:leading-tight md:leading-tight mb-8 drop-shadow-md">
            Move a Step further<br />
            into achieveing your<br />
            Dreams
        </h2>

        <!-- Description Paragraph (Screenshot 5) -->
        <p class="text-sm sm:text-base md:text-lg text-slate-200 font-normal leading-relaxed max-w-3xl mx-auto mb-10">
            Connectinskillz is working to help individuals expand their skill sets and increase their proficiency in the application of the acquired skill set to solve complexities in problems, provide and successfully produce digital solutions to problems. By connecting the dots we help you acheive your goals and double your income.
        </p>

        <!-- CTA Button (Screenshot 5) -->
        <div>
            <button
                type="button"
                @click="$dispatch('open-workshop-enroll')"
                class="px-10 py-3.5 bg-[#0052cc] hover:bg-[#0040a8] text-white font-bold rounded-lg text-base shadow-xl shadow-blue-600/30 transition-all duration-200 hover:scale-105 active:scale-95 cursor-pointer"
            >
                Get Started
            </button>
        </div>
    </div>
</section>
