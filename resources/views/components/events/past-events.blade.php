<section id="past-events" class="py-16 sm:py-24 bg-slate-50 border-t border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
            <span class="text-xs sm:text-sm font-bold tracking-wider text-slate-500 uppercase bg-slate-200/60 px-3 py-1 rounded-full inline-block mb-3">
                Archived Masterclasses
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                Past Events &amp; Recorded Sessions
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-3 max-w-xl mx-auto">
                Missed a live session? Review past workshops, stream full session recordings, or join the priority waiting list for upcoming cohorts.
            </p>
        </div>

        <!-- 2-Column Cards Grid matching other pages (like Courses) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-10 items-stretch">
            <!-- ═════════════════════════════════════════════════════════════ -->
            <!-- CARD 1: Free Career Talk (Screenshot 2 content)               -->
            <!-- ═════════════════════════════════════════════════════════════ -->
            <div class="flex flex-col justify-between rounded-3xl bg-white border border-slate-200/80 shadow-xs hover:shadow-xl transition-all duration-300 p-6 sm:p-8">
                <div>
                    <!-- Top Image Frame -->
                    <div class="relative w-full aspect-[16/9] sm:aspect-[16/10] rounded-2xl overflow-hidden bg-slate-900 mb-6 group">
                        <img
                            src="{{ asset('images/events/event4.avif') }}"
                            alt="Free Career Talk"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-black/20 to-transparent"></div>

                        <!-- Badge Overlay -->
                        <div class="absolute top-4 left-4 flex items-center gap-2">
                            <span class="px-3 py-1 rounded-full bg-slate-900/80 backdrop-blur-md text-slate-200 text-xs font-semibold border border-white/10">
                                Event Ended
                            </span>
                        </div>

                        <!-- Stream Recording Pill on Image -->
                        <div class="absolute bottom-4 right-4">
                            <a
                                href="{{ url('/recorded-events') }}"
                                class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#0052cc] hover:bg-[#0040a8] text-white text-xs font-bold shadow-lg transition-transform hover:scale-105 cursor-pointer">
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                                <span>Watch Replay</span>
                            </a>
                        </div>
                    </div>

                    <!-- Screenshot 2: Event Ended Subtext & Link -->
                    <div class="flex items-center justify-between gap-4 mb-3">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">
                            Event Ended
                        </span>
                        <a
                            href="{{ url('/recorded-events') }}"
                            class="italic underline text-[#0052cc] hover:text-[#003d99] text-xs font-medium transition-colors cursor-pointer">
                            Click here to watch recorded video sessions.
                        </a>
                    </div>

                    <!-- Screenshot 2: Headline -->
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight leading-tight mb-2">
                        Free Career Talk
                    </h3>

                    <!-- Screenshot 2: Subtitle -->
                    <p class="text-base sm:text-lg text-slate-600 font-medium leading-relaxed mb-6">
                        How to Secure A High Paying Job in the Digital Space
                    </p>
                </div>

                <!-- Screenshot 2: Bottom Status & Link -->
                <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                    <p class="text-xs sm:text-sm text-slate-500 font-normal">
                        This event has ended.
                        <button
                            type="button"
                            @click="$dispatch('open-event-info-modal', {
                                title: 'Free Career Talk',
                                subtitle: 'How to Secure A High Paying Job in the Digital Space',
                                description: 'This exclusive session covered insider pathways to high-paying digital jobs, CV refinement, interview secrets, and digital skills demand. Catch up with on-demand video access.',
                                status: 'Ended',
                                hasReplay: true
                            })"
                            class="italic underline text-[#0052cc] font-semibold hover:text-[#003d99] transition-colors cursor-pointer">
                            click here
                        </button>
                        to learn more
                    </p>

                    <a
                        href="{{ url('/recorded-events') }}"
                        class="p-2 rounded-full text-slate-400 hover:text-[#0052cc] hover:bg-blue-50 transition-colors"
                        title="Watch Recording">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- ═════════════════════════════════════════════════════════════ -->
            <!-- CARD 2: Concluded Bootcamp (Screenshot 5 content)             -->
            <!-- ═════════════════════════════════════════════════════════════ -->
            <div class="flex flex-col justify-between rounded-3xl bg-white border border-slate-200/80 shadow-xs hover:shadow-xl transition-all duration-300 p-6 sm:p-8">
                <div>
                    <!-- Top Image Frame -->
                    <div class="relative w-full aspect-[16/9] sm:aspect-[16/10] rounded-2xl overflow-hidden bg-slate-900 mb-6 group">
                        <img
                            src="{{ asset('images/events/event3.avif') }}"
                            alt="A 5 weeks Digital Business Analysis Online Bootcamp"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-black/20 to-transparent"></div>

                        <!-- Badge Overlay -->
                        <div class="absolute top-4 left-4 flex items-center gap-2">
                            <span class="px-3 py-1 rounded-full bg-slate-900/80 backdrop-blur-md text-slate-200 text-xs font-semibold border border-white/10">
                                Event Ended
                            </span>
                        </div>

                        <!-- Quick Cohort Tag -->
                        <div class="absolute bottom-4 right-4">
                            <span class="px-3 py-1 rounded-full bg-black/60 backdrop-blur-md text-slate-300 text-xs font-medium border border-white/10">
                                Cohort 2025 • Concluded
                            </span>
                        </div>
                    </div>

                    <!-- Screenshot 5: Status Badge -->
                    <div class="mb-3">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider block">
                            Event Ended
                        </span>
                    </div>

                    <!-- Screenshot 5: Headline -->
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight leading-tight mb-2">
                        A 5 weeks Digital Business Analysis Online Bootcamp
                    </h3>

                    <!-- Screenshot 5: Subtitle -->
                    <p class="text-base sm:text-lg text-slate-600 font-normal leading-relaxed mb-6">
                        A bootcamp tailored to help empower people to improve their career
                    </p>
                </div>

                <!-- Screenshot 5: "View >" Button & Details -->
                <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                    <span class="text-xs text-slate-500">
                        Recordings &amp; next cohort waiting list available
                    </span>

                    <button
                        type="button"
                        @click="$dispatch('open-event-info-modal', {
                            title: 'A 5 weeks Digital Business Analysis Online Bootcamp',
                            subtitle: 'Concluded Cohort — Syllabus & Next Intake Waitlist',
                            description: 'This 5-week intensive training guided participants through real-world Business Analysis documentation, Agile sprints, Jira workflows, and mock interviews. Explore the curriculum or reserve early access for the upcoming cohort.',
                            status: 'Ended',
                            hasReplay: true
                        })"
                        class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-slate-900 hover:bg-[#0052cc] text-white font-bold text-xs sm:text-sm shadow-md transition-all duration-200 hover:scale-105 active:scale-95 cursor-pointer">
                        <span>View</span>
                        <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>