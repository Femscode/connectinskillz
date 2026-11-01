<section id="ongoing" class="py-16 sm:py-24 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
            <span class="text-xs sm:text-sm font-bold tracking-wider text-[#0052cc] uppercase bg-blue-50 px-3 py-1 rounded-full inline-block mb-3">
                Live Opportunities
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                Registration Ongoing
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-3 max-w-xl mx-auto">
                Secure your spot in our upcoming hands-on cohorts led by senior industry consultants.
            </p>
        </div>

        <!-- Featured Ongoing Bootcamp Card -->
        <div class="relative rounded-3xl bg-gradient-to-br from-slate-900 via-[#00224f] to-[#001737] text-white p-8 sm:p-12 lg:p-14 shadow-2xl shadow-blue-950/20 overflow-hidden border border-slate-800">
            <!-- Background Decorative Lighting -->
            <div class="absolute -right-24 -top-24 w-96 h-96 rounded-full bg-[#0052cc]/20 blur-3xl pointer-events-none"></div>
            <div class="absolute -left-24 -bottom-24 w-96 h-96 rounded-full bg-blue-400/10 blur-3xl pointer-events-none"></div>

            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                <!-- Left: Content Column -->
                <div class="lg:col-span-7 flex flex-col justify-center text-left">
                    <!-- Badges -->
                    <div class="flex items-center gap-3 mb-5">

                        <!-- Screenshot 3 "NEW" Bordered Badge -->
                        <div class="inline-block border border-white/80 px-3 py-0.5 text-xs font-bold text-white tracking-widest uppercase rounded-xs">
                            New Registration Ongoing
                        </div>
                    </div>

                    <!-- Screenshot 3 Big Title -->
                    <h3 class="text-2xl sm:text-4xl md:text-5xl font-extrabold text-white tracking-tight leading-tight mb-4">
                        A 5 weeks Digital Business Analysis Online Bootcamp
                    </h3>

                    <!-- Screenshot 3 Subtitle -->
                    <p class="text-base sm:text-lg text-slate-200 font-normal leading-relaxed mb-8 max-w-xl">
                        A bootcamp tailored to help empower people to improve their career
                    </p>

                    <!-- Key Pillars / Highlights -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 mb-8 pt-4 border-t border-white/10">
                        <div>
                            <span class="text-xs text-slate-400 block font-medium">Duration</span>
                            <span class="text-sm font-bold text-white">5 Weeks Intensive</span>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 block font-medium">Format</span>
                            <span class="text-sm font-bold text-white">Online Live + LMS</span>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <span class="text-xs text-slate-400 block font-medium">Certification</span>
                            <span class="text-sm font-bold text-white">Industry Recognized</span>
                        </div>
                    </div>

                    <!-- Screenshot 3 "View >" Button (Redirects to /workshop) -->
                    <div>
                        <a
                            href="{{ url('/workshop') }}"
                            class="inline-flex items-center gap-2 px-8 py-3.5 rounded-full bg-white text-[#002b66] hover:bg-slate-100 font-bold text-base transition-all duration-200 shadow-xl shadow-black/20 hover:scale-105 active:scale-95 cursor-pointer">
                            <span>View</span>
                            <svg class="w-4 h-4 text-[#002b66]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right: High-End Framed Image Column -->
                <div class="lg:col-span-5">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/15 bg-slate-800 aspect-[4/3] group">
                        <img
                            src="{{ asset('images/events/event1.avif') }}"
                            alt="Digital Business Analysis Online Bootcamp"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>

                        <!-- Floating Info Card -->
                        <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-md p-3.5 rounded-xl text-slate-900 flex items-center justify-between border border-white/20 shadow-lg">
                            <div>
                                <span class="text-[11px] font-bold uppercase tracking-wider text-[#0052cc] block">Upcoming Cohort</span>
                                <span class="text-xs font-bold text-slate-800">Limited Seats Available</span>
                            </div>
                            <span class="text-xs font-semibold px-2.5 py-1 rounded-md bg-green-100 text-green-700">
                                Open Now
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>