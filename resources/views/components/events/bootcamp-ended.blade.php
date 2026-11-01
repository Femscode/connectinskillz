<section class="relative w-full min-h-[460px] sm:min-h-[520px] md:min-h-[600px] flex items-center overflow-hidden bg-slate-900">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('images/events/bootcamp-ended-bg.jpg') }}"
            alt="Digital Business Analysis Online Bootcamp - Ended Edition"
            class="w-full h-full object-cover object-center"
        />
        <!-- Blue-tinted and dark gradient overlay favoring left content -->
        <div class="absolute inset-0 bg-[#001d4a]/55 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/55 to-black/30"></div>
    </div>

    <!-- Left-aligned Content matching screenshot 5 -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full text-left text-white">
        <div class="max-w-2xl">
            <!-- Event Ended -->
            <span class="text-sm sm:text-base font-semibold tracking-wide text-slate-200 block mb-4">
                Event Ended
            </span>

            <!-- Main Headline -->
            <h2 class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight leading-tight mb-4">
                A 5 weeks &nbsp;Digital Business Analysis Online Bootcamp
            </h2>

            <!-- Subtitle -->
            <p class="text-base sm:text-lg md:text-xl text-slate-200 font-normal leading-relaxed mb-8 max-w-xl">
                A bootcamp tailored to help empower people to improve their career
            </p>

            <!-- "View >" Button -->
            <div>
                <button
                    type="button"
                    @click="$dispatch('open-event-info-modal', {
                        title: 'A 5 weeks Digital Business Analysis Online Bootcamp',
                        subtitle: 'Cohort Concluded — Recordings & Waiting List Available',
                        description: 'This 5-week intensive bootcamp trained participants across Agile Scrum workflows, requirements gathering, stakeholder mapping, JIRA, Confluence, and interactive digital transformation projects. View past student projects or join the waiting list for the upcoming intake.',
                        status: 'Ended',
                        hasReplay: true
                    })"
                    class="inline-flex items-center gap-2 px-8 py-3 rounded-full bg-white text-[#002b66] hover:bg-slate-100 font-bold text-base transition-all duration-200 shadow-xl shadow-black/20 hover:scale-105 active:scale-95 cursor-pointer"
                >
                    <span>View</span>
                    <svg class="w-4 h-4 text-[#002b66]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
