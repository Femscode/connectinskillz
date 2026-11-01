<section class="relative w-full pt-32 pb-16 sm:pb-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            <!-- Left Column: Copy & CTA (Screenshot 4) -->
            <div class="lg:col-span-6 flex flex-col justify-center text-left">
                <!-- Eyebrow -->
                <span class="text-xs sm:text-sm font-extrabold tracking-wider text-[#0052cc] uppercase block mb-3">
                    LAUNCH YOUR FUTURE CAREER WITH OUR
                </span>

                <!-- Headline -->
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.12] mb-6">
                    5 weeks Digital<br />
                    Business Analysis<br />
                    Workshop
                </h1>

                <!-- Subtitle -->
                <p class="text-2xl sm:text-2xl text-slate-600 font-normal leading-relaxed mb-8 max-w-lg">
                    A Workshop tailored to help empower people to improve their career
                </p>

                <!-- CTA Button -->
                <div>
                    <button
                        type="button"
                        @click="$dispatch('open-workshop-enroll')"
                        class="px-8 py-3.5 bg-[#0052cc] hover:bg-[#0040a8] text-white font-bold rounded-lg text-base shadow-lg shadow-blue-600/25 transition-all duration-200 hover:scale-[1.02] active:scale-[0.98] cursor-pointer">
                        Get Started
                    </button>
                </div>
            </div>

            <!-- Right Column: Curated Collage Grid with Dotted Orbital Frame (Screenshot 4) -->
            <div class="lg:col-span-6 relative flex items-center justify-center">
                <!-- Decorative Orbit Arch / Dots -->
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <div class="w-[360px] h-[360px] sm:w-[480px] sm:h-[480px] rounded-full border-2 border-dashed border-slate-200/80 -translate-x-4"></div>
                    <!-- Floating Accent Dots -->
                    <span class="absolute top-10 right-16 w-4 h-4 rounded-full bg-amber-500 shadow-md"></span>
                    <span class="absolute bottom-8 left-12 w-5 h-5 rounded-full bg-[#e8503a] shadow-md"></span>
                    <span class="absolute bottom-16 right-20 w-3 h-3 rounded-full bg-[#0052cc] shadow-md"></span>
                </div>

                <!-- Collage Cards Grid -->
                <div class="relative z-10 grid grid-cols-3 gap-3 sm:gap-4 max-w-lg w-full">
                    <!-- Column 1 -->
                    <div class="space-y-3 sm:space-y-4 pt-8">
                        <div class="rounded-2xl overflow-hidden shadow-md aspect-[3/4] bg-slate-100 hover:scale-105 transition-transform duration-300">
                            <img
                                src="{{ asset('images/workshop/pill-1.jpg') }}"
                                alt="Student learning"
                                class="w-full h-full object-cover" />
                        </div>
                        <div class="rounded-2xl overflow-hidden shadow-md aspect-[4/3] bg-slate-100 hover:scale-105 transition-transform duration-300">
                            <img
                                src="{{ asset('images/events/career-talk-bg.jpg') }}"
                                alt="Working on laptop"
                                class="w-full h-full object-cover" />
                        </div>
                    </div>

                    <!-- Column 2 (Center - slightly raised) -->
                    <div class="space-y-3 sm:space-y-4">
                        <div class="rounded-2xl overflow-hidden shadow-md aspect-[4/3] bg-slate-100 hover:scale-105 transition-transform duration-300">
                            <img
                                src="{{ asset('images/events/event3.avif') }}"
                                alt="Student study session"
                                class="w-full h-full object-cover" />
                        </div>
                        <div class="rounded-2xl overflow-hidden shadow-md aspect-[3/4] bg-slate-100 hover:scale-105 transition-transform duration-300">
                            <img
                                src="{{ asset('images/workshop/pill-2.jpg') }}"
                                alt="Team collaborative workshop"
                                class="w-full h-full object-cover" />
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="space-y-3 sm:space-y-4 pt-12">
                        <div class="rounded-2xl overflow-hidden shadow-md aspect-[3/4] bg-slate-100 hover:scale-105 transition-transform duration-300">
                            <img
                                src="{{ asset('images/workshop/pill-3.jpg') }}"
                                alt="Workshop participant"
                                class="w-full h-full object-cover" />
                        </div>
                        <div class="rounded-2xl overflow-hidden shadow-md aspect-[4/3] bg-slate-100 hover:scale-105 transition-transform duration-300">
                            <img
                                src="{{ asset('images/events/bootcamp-ended-bg.jpg') }}"
                                alt="Remote professional"
                                class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>