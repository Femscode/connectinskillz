<section class="relative w-full min-h-[460px] sm:min-h-[520px] md:min-h-[580px] flex items-center overflow-hidden bg-slate-900">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('images/events/career-talk-bg.jpg') }}"
            alt="Free Career Talk - How to Secure A High Paying Job in the Digital Space"
            class="w-full h-full object-cover object-[30%_center] sm:object-center"
        />
        <!-- Gradient Overlay favoring text readability on the right -->
        <div class="absolute inset-0 bg-[#001d4a]/50 sm:bg-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/30 md:bg-gradient-to-l md:from-black/85 md:via-black/60 md:to-black/25"></div>
    </div>

    <!-- Content (Right-aligned layout matching screenshot 2) -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 w-full">
        <div class="max-w-xl ml-auto text-left md:text-right text-white">
            <!-- Event Ended & Watch Sessions link -->
            <div class="space-y-1 mb-6">
                <span class="text-sm sm:text-base font-semibold text-slate-200 tracking-wide block">
                    Event Ended
                </span>
                <button
                    type="button"
                    @click="$dispatch('open-video-modal', { title: 'Free Career Talk: How to Secure A High Paying Job in the Digital Space', category: 'Career Talk Recording' })"
                    class="italic underline text-slate-300 hover:text-white text-xs sm:text-sm font-light transition-colors cursor-pointer text-left md:text-right"
                >
                    Click here to watch recorded video sessions.
                </button>
            </div>

            <!-- Big Title -->
            <h2 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight leading-tight mb-3">
                Free Career Talk
            </h2>

            <!-- Subtitle -->
            <p class="text-lg sm:text-xl md:text-2xl text-slate-200 font-normal leading-relaxed mb-8 max-w-lg md:ml-auto">
                How to Secure A High Paying Job in the Digital Space
            </p>

            <!-- Bottom note / Learn More -->
            <p class="text-xs sm:text-sm text-slate-300 font-normal">
                This event has ended.
                <button
                    type="button"
                    @click="$dispatch('open-event-info-modal', {
                        title: 'Free Career Talk',
                        subtitle: 'How to Secure A High Paying Job in the Digital Space',
                        description: 'This exclusive career talk delivered hands-on insider advice on high-paying tech roles, optimizing your resume, conquering behavioral interviews, and transitioning smoothly into the global digital industry.',
                        status: 'Ended',
                        hasReplay: true
                    })"
                    class="italic underline text-white font-medium hover:text-blue-300 transition-colors cursor-pointer"
                >
                    click here
                </button>
                to learn more
            </p>
        </div>
    </div>
</section>
