<div
    x-data="{
        // Video Modal State
        isVideoOpen: false,
        videoData: {
            title: 'Free Career Talk: How to Secure A High Paying Job in the Digital Space',
            category: 'Recorded Masterclass'
        },

        // Bootcamp Registration Modal State
        isBootcampOpen: false,
        bootcampData: {
            title: 'A 5 weeks Digital Business Analysis Online Bootcamp',
            duration: '5 Weeks Intensive Live Training',
            status: 'Registration Ongoing',
            mode: 'Online (Interactive Zoom + LMS)',
            price: '£450'
        },
        regName: '',
        regEmail: '',
        regPhone: '',
        regSchedule: 'weekend',
        isRegSuccess: false,

        // Event Info / Waiting List Modal State
        isInfoOpen: false,
        infoData: {
            title: '',
            subtitle: '',
            description: '',
            status: '',
            hasReplay: true
        },
        waitlistEmail: '',
        waitlistSuccess: false,

        handleRegistration() {
            if (this.regName && this.regEmail) {
                this.isRegSuccess = true;
                setTimeout(() => {
                    this.isRegSuccess = false;
                    this.isBootcampOpen = false;
                    this.regName = '';
                    this.regEmail = '';
                    this.regPhone = '';
                }, 3000);
            }
        },

        handleWaitlist() {
            if (this.waitlistEmail) {
                this.waitlistSuccess = true;
                setTimeout(() => {
                    this.waitlistSuccess = false;
                    this.isInfoOpen = false;
                    this.waitlistEmail = '';
                }, 3000);
            }
        }
    }"
    @open-video-modal.window="videoData = $event.detail; isVideoOpen = true"
    @open-bootcamp-modal.window="bootcampData = $event.detail; isBootcampOpen = true"
    @open-event-info-modal.window="infoData = $event.detail; isInfoOpen = true"
>
    <!-- ═════════════════════════════════════════════════════════════ -->
    <!-- 1. VIDEO RECORDING MODAL                                      -->
    <!-- ═════════════════════════════════════════════════════════════ -->
    <div
        x-show="isVideoOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @keydown.escape.window="isVideoOpen = false"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/75 backdrop-blur-sm"
    >
        <div
            x-show="isVideoOpen"
            x-transition:enter="transition ease-out duration-250"
            x-transition:enter-start="opacity-0 scale-95 translate-y-2"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-2"
            @click.outside="isVideoOpen = false"
            class="relative w-full max-w-4xl bg-white rounded-2xl shadow-2xl overflow-hidden border border-slate-100 text-slate-900"
        >
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 bg-slate-50">
                <div class="flex items-center gap-3">
                    <span class="w-3 h-3 rounded-full bg-red-500 animate-pulse"></span>
                    <span class="text-xs font-bold uppercase tracking-wider text-slate-500" x-text="videoData.category"></span>
                </div>
                <button
                    type="button"
                    @click="isVideoOpen = false"
                    class="text-slate-400 hover:text-slate-700 p-1.5 rounded-lg hover:bg-slate-200 text-lg font-bold transition-colors cursor-pointer"
                >
                    ✕
                </button>
            </div>

            <!-- Video Player Area -->
            <div class="relative aspect-video w-full bg-black overflow-hidden flex items-center justify-center">
                <!-- Video Player Simulation with Play Button & Overlays -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-black/60 z-10 flex flex-col justify-between p-6">
                    <div class="flex justify-between items-start">
                        <div class="bg-black/60 backdrop-blur-md px-3 py-1 rounded-md text-xs font-medium text-white border border-white/10">
                            HD 1080p • 1h 24m
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="bg-[#0052cc] text-white text-[11px] font-bold px-2.5 py-0.5 rounded-full">
                                ConnectinSkillz LMS
                            </span>
                        </div>
                    </div>

                    <!-- Center Play Button -->
                    <div class="self-center text-center">
                        <a
                            href="https://www.youtube.com"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="group inline-flex items-center justify-center w-20 h-20 rounded-full bg-[#0052cc] hover:bg-[#0040a8] text-white shadow-2xl shadow-blue-500/50 transition-all duration-300 hover:scale-110 cursor-pointer"
                        >
                            <svg class="w-9 h-9 translate-x-0.5 transition-transform group-hover:scale-105" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </a>
                        <p class="text-white text-sm font-semibold mt-3 drop-shadow">
                            Click to Stream Free Session
                        </p>
                    </div>

                    <!-- Video Progress Bar Preview -->
                    <div class="w-full space-y-2">
                        <div class="w-full bg-white/20 h-1.5 rounded-full overflow-hidden">
                            <div class="bg-[#0052cc] h-full w-1/3"></div>
                        </div>
                        <div class="flex justify-between text-[11px] text-slate-300 font-mono">
                            <span>28:15</span>
                            <span>1:24:00</span>
                        </div>
                    </div>
                </div>

                <!-- Video Background Still -->
                <img
                    src="{{ asset('images/events/career-talk-bg.jpg') }}"
                    alt="Video thumbnail"
                    class="w-full h-full object-cover opacity-80"
                />
            </div>

            <!-- Modal Info Footer -->
            <div class="p-6 sm:p-8 bg-white">
                <h3 class="text-xl sm:text-2xl font-extrabold text-slate-900 mb-2" x-text="videoData.title"></h3>
                <p class="text-sm text-slate-600 leading-relaxed mb-6">
                    In this session, our industry digital leads walk you through high-yield career pathways, essential CV positioning, interview blueprints, and transitioning into six-figure roles in tech, data, and business analysis.
                </p>

                <!-- Key Takeaways Chips -->
                <div class="flex flex-wrap gap-2 mb-6">
                    <span class="px-3 py-1 bg-blue-50 text-[#0052cc] text-xs font-semibold rounded-full">
                        ✓ Business Analysis Foundations
                    </span>
                    <span class="px-3 py-1 bg-blue-50 text-[#0052cc] text-xs font-semibold rounded-full">
                        ✓ Resume & LinkedIn Optimization
                    </span>
                    <span class="px-3 py-1 bg-blue-50 text-[#0052cc] text-xs font-semibold rounded-full">
                        ✓ Interview Masterclass
                    </span>
                    <span class="px-3 py-1 bg-blue-50 text-[#0052cc] text-xs font-semibold rounded-full">
                        ✓ Live Work Experience Pathway
                    </span>
                </div>

                <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-slate-100">
                    <div class="text-xs text-slate-500">
                        Interested in joining our next live interactive cohort?
                    </div>
                    <div class="flex items-center gap-3 w-full sm:w-auto">
                        <a
                            href="{{ url('/courses') }}"
                            class="w-full sm:w-auto text-center px-5 py-2.5 rounded-lg bg-[#0052cc] hover:bg-[#0040a8] text-white text-xs font-bold transition-colors shadow-md shadow-blue-600/20"
                        >
                            Explore Courses
                        </a>
                        <button
                            type="button"
                            @click="isVideoOpen = false"
                            class="w-full sm:w-auto text-center px-4 py-2.5 rounded-lg border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-semibold transition-colors cursor-pointer"
                        >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ═════════════════════════════════════════════════════════════ -->
    <!-- 2. BOOTCAMP REGISTRATION / VIEW MODAL                         -->
    <!-- ═════════════════════════════════════════════════════════════ -->
    <div
        x-show="isBootcampOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @keydown.escape.window="isBootcampOpen = false"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/70 backdrop-blur-sm"
    >
        <div
            x-show="isBootcampOpen"
            x-transition:enter="transition ease-out duration-250"
            x-transition:enter-start="opacity-0 scale-95 translate-y-2"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-2"
            @click.outside="isBootcampOpen = false"
            class="relative w-full max-w-2xl bg-white rounded-2xl shadow-2xl p-6 sm:p-8 border border-slate-100 text-slate-900 max-h-[92vh] overflow-y-auto"
        >
            <button
                type="button"
                @click="isBootcampOpen = false"
                class="absolute top-5 right-5 text-slate-400 hover:text-slate-700 p-1.5 rounded-full hover:bg-slate-100 text-xl font-bold cursor-pointer transition-colors"
            >
                ✕
            </button>

            <!-- Header Badge & Title -->
            <div class="mb-6">
                <div class="inline-flex items-center gap-2 mb-2">
                    <span class="px-2.5 py-0.5 rounded-full bg-green-100 text-green-700 text-xs font-bold tracking-wide">
                        ● Registration Ongoing
                    </span>
                    <span class="px-2 py-0.5 rounded bg-blue-100 text-[#0052cc] text-xs font-bold uppercase">
                        New Cohort
                    </span>
                </div>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 leading-tight">
                    5-Week Digital Business Analysis Online Bootcamp
                </h3>
                <p class="text-sm text-slate-600 mt-2">
                    A rigorous hands-on curriculum designed to transition candidates with zero background or tech professionals looking to level up into senior Business Analyst roles.
                </p>
            </div>

            <!-- Key Program Highlights Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 p-4 bg-slate-50 rounded-xl border border-slate-100 mb-6 text-center">
                <div class="p-2">
                    <span class="block text-xs text-slate-500 font-medium">Duration</span>
                    <span class="block text-sm font-bold text-slate-900">5 Weeks</span>
                </div>
                <div class="p-2">
                    <span class="block text-xs text-slate-500 font-medium">Delivery</span>
                    <span class="block text-sm font-bold text-slate-900">Live Zoom + LMS</span>
                </div>
                <div class="p-2">
                    <span class="block text-xs text-slate-500 font-medium">Mentorship</span>
                    <span class="block text-sm font-bold text-slate-900">1-on-1 Guidance</span>
                </div>
                <div class="p-2">
                    <span class="block text-xs text-slate-500 font-medium">Certification</span>
                    <span class="block text-sm font-bold text-slate-900">Included</span>
                </div>
            </div>

            <!-- Success State -->
            <div x-show="isRegSuccess" x-cloak class="py-8 text-center text-green-600 font-semibold flex flex-col items-center gap-3">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <p class="text-xl font-extrabold text-slate-900">Registration Successful!</p>
                <p class="text-xs sm:text-sm text-slate-500 max-w-md">
                    We've emailed you the cohort schedule, prerequisite pack, and payment breakdown. Our advisor will reach out shortly!
                </p>
            </div>

            <!-- Registration Form -->
            <form x-show="!isRegSuccess" @submit.prevent="handleRegistration" class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">
                            Full Name *
                        </label>
                        <input
                            type="text"
                            required
                            x-model="regName"
                            placeholder="e.g. Sarah Jenkins"
                            class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0052cc] focus:ring-1 focus:ring-[#0052cc] text-sm outline-none transition-all"
                        />
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">
                            Email Address *
                        </label>
                        <input
                            type="email"
                            required
                            x-model="regEmail"
                            placeholder="sarah@example.com"
                            class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0052cc] focus:ring-1 focus:ring-[#0052cc] text-sm outline-none transition-all"
                        />
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">
                            Phone Number
                        </label>
                        <input
                            type="tel"
                            x-model="regPhone"
                            placeholder="+44 7700 900000"
                            class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0052cc] focus:ring-1 focus:ring-[#0052cc] text-sm outline-none transition-all"
                        />
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-700 mb-1">
                            Preferred Cohort Timing
                        </label>
                        <select
                            x-model="regSchedule"
                            class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0052cc] focus:ring-1 focus:ring-[#0052cc] text-sm outline-none bg-white transition-all"
                        >
                            <option value="weekend">Weekends (Saturdays & Sundays)</option>
                            <option value="weekday">Weekday Evenings (Tue & Thu)</option>
                            <option value="flexible">Flexible / Self-Paced + Mentorship</option>
                        </select>
                    </div>
                </div>

                <div class="pt-2">
                    <button
                        type="submit"
                        class="w-full py-3.5 bg-[#0052cc] hover:bg-[#0040a8] text-white font-bold rounded-lg text-sm transition-all shadow-lg shadow-blue-600/30 active:scale-[0.99] cursor-pointer"
                    >
                        Reserve Your Seat Now
                    </button>
                    <p class="text-center text-[11px] text-slate-400 mt-2">
                        🔒 No upfront payment required to register your interest.
                    </p>
                </div>
            </form>
        </div>
    </div>

    <!-- ═════════════════════════════════════════════════════════════ -->
    <!-- 3. EVENT INFO / WAITING LIST MODAL                            -->
    <!-- ═════════════════════════════════════════════════════════════ -->
    <div
        x-show="isInfoOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @keydown.escape.window="isInfoOpen = false"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/70 backdrop-blur-sm"
    >
        <div
            x-show="isInfoOpen"
            x-transition:enter="transition ease-out duration-250"
            x-transition:enter-start="opacity-0 scale-95 translate-y-2"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-2"
            @click.outside="isInfoOpen = false"
            class="relative w-full max-w-xl bg-white rounded-2xl shadow-2xl p-6 sm:p-8 border border-slate-100 text-slate-900"
        >
            <button
                type="button"
                @click="isInfoOpen = false"
                class="absolute top-5 right-5 text-slate-400 hover:text-slate-700 p-1.5 rounded-full hover:bg-slate-100 text-xl font-bold cursor-pointer transition-colors"
            >
                ✕
            </button>

            <!-- Status Badge -->
            <div class="mb-4">
                <span class="px-2.5 py-0.5 rounded-full bg-slate-100 text-slate-700 text-xs font-semibold">
                    Past Event • Replay Available
                </span>
            </div>

            <h3 class="text-2xl font-extrabold text-slate-900 mb-1" x-text="infoData.title"></h3>
            <p class="text-sm font-semibold text-[#0052cc] mb-4" x-text="infoData.subtitle"></p>
            <p class="text-sm text-slate-600 leading-relaxed mb-6" x-text="infoData.description"></p>

            <!-- Quick Action: Stream Recording -->
            <div class="p-4 bg-blue-50/70 rounded-xl border border-blue-100 mb-6 flex items-center justify-between gap-4">
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wide text-[#0052cc]">Want to watch the recording?</h4>
                    <p class="text-xs text-slate-600 mt-0.5">Stream the full video session on-demand.</p>
                </div>
                <button
                    type="button"
                    @click="isInfoOpen = false; $dispatch('open-video-modal', { title: infoData.title + ' (Recording)', category: 'Past Session' })"
                    class="px-4 py-2 rounded-lg bg-[#0052cc] hover:bg-[#0040a8] text-white text-xs font-bold transition-colors whitespace-nowrap cursor-pointer"
                >
                    Watch Now
                </button>
            </div>

            <!-- Waitlist for next edition -->
            <div class="border-t border-slate-100 pt-5">
                <h4 class="text-sm font-bold text-slate-900 mb-1">
                    Get Notified for the Next Cohort
                </h4>
                <p class="text-xs text-slate-500 mb-3">
                    Leave your email to receive early-bird priority admission when the next session opens.
                </p>

                <div x-show="waitlistSuccess" x-cloak class="p-3 bg-green-50 text-green-700 text-xs font-semibold rounded-lg text-center">
                    ✓ You're on the priority notification list!
                </div>

                <form x-show="!waitlistSuccess" @submit.prevent="handleWaitlist" class="flex gap-2">
                    <input
                        type="email"
                        required
                        x-model="waitlistEmail"
                        placeholder="your-email@example.com"
                        class="flex-1 px-3.5 py-2 rounded-lg border border-slate-300 text-sm focus:border-[#0052cc] focus:ring-1 focus:ring-[#0052cc] outline-none"
                    />
                    <button
                        type="submit"
                        class="px-5 py-2 bg-slate-900 hover:bg-slate-800 text-white font-bold rounded-lg text-xs transition-colors cursor-pointer whitespace-nowrap"
                    >
                        Notify Me
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
