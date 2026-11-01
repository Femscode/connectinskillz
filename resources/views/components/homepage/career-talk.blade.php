<section
    id="events"
    x-data="{
        isRegisterOpen: false,
        name: '',
        email: '',
        phone: '',
        isSubmitted: false,
        handleRegister() {
            if (this.name && this.email) {
                this.isSubmitted = true;
                setTimeout(() => {
                    this.isSubmitted = false;
                    this.isRegisterOpen = false;
                    this.name = '';
                    this.email = '';
                    this.phone = '';
                }, 2500);
            }
        }
    }"
    class="relative w-full min-h-[500px] sm:min-h-[560px] md:min-h-[620px] flex items-center justify-center overflow-hidden bg-slate-950">
    <!-- Background Image & Cinematic Overlays -->
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('images/homepage/be-part.avif') }}"
            alt="Free career talk workshop background"
            class="w-full h-full object-cover object-center filter brightness-90" />
        <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-950/80 to-slate-950/50"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_left,_var(--tw-gradient-stops))] from-blue-900/30 via-transparent to-transparent"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
        <div class="max-w-2xl text-left text-white">
            <!-- Event Live Pill Badge -->
            <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-blue-500/20 backdrop-blur-md border border-blue-400/30 text-blue-200 text-xs sm:text-sm font-bold tracking-wide mb-6 shadow-inner">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                </span>
                <span>Free Career Talk!</span>
            </div>

            <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black tracking-tight leading-[1.08] text-white mb-6 drop-shadow-md">
                Time to double your <br />
                <span class="bg-gradient-to-r from-blue-400 via-sky-300 to-blue-400 bg-clip-text text-transparent">Income</span>
            </h2>

            <p class="text-base sm:text-lg md:text-xl text-slate-200 font-normal leading-relaxed mb-10 max-w-xl">
                Get Insider Info on how to secure yourself a high-paying Digital Role
                from the top digital experts from different Industries.
            </p>

            <div>
                <button
                    type="button"
                    @click="isRegisterOpen = true"
                    class="inline-flex items-center gap-2.5 px-9 py-4 rounded-xl bg-[#004AAD] hover:bg-[#003a8c] text-white font-bold text-base transition-all duration-300 shadow-xl shadow-[#004AAD]/40 hover:shadow-2xl hover:shadow-[#004AAD]/55 hover:-translate-y-0.5 active:translate-y-0 cursor-pointer group">
                    <span>Register Now</span>
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Registration Modal -->
    <div
        x-show="isRegisterOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @keydown.escape.window="isRegisterOpen = false"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/70 backdrop-blur-md">
        <div
            x-show="isRegisterOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95 translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-4"
            @click.outside="isRegisterOpen = false"
            class="relative w-full max-w-md bg-white rounded-3xl shadow-2xl p-8 border border-slate-100 text-slate-900">
            <button
                type="button"
                @click="isRegisterOpen = false"
                class="absolute top-5 right-5 text-slate-400 hover:text-slate-700 w-8 h-8 rounded-full hover:bg-slate-100 flex items-center justify-center text-lg font-bold cursor-pointer transition-colors">
                ✕
            </button>

            <div class="mb-6">
                <span class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-full text-xs font-bold uppercase tracking-widest text-[#004AAD] bg-blue-50 border border-blue-100 mb-2">
                    Upcoming Live Session
                </span>
                <h3 class="text-2xl font-black text-slate-900 tracking-tight">
                    Reserve Your Free Seat
                </h3>
                <div class="flex items-center gap-4 text-xs text-slate-500 mt-2 font-medium">
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-[#004AAD]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        This Saturday
                    </span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-[#004AAD]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        6:00 PM GMT
                    </span>
                </div>
            </div>

            <!-- Confirmation State -->
            <div x-show="isSubmitted" x-cloak class="py-10 text-center text-emerald-600 font-semibold flex flex-col items-center gap-2">
                <div class="w-14 h-14 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center mb-2">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <p class="text-xl font-black text-slate-900">Seat Confirmed!</p>
                <p class="text-sm text-slate-500 font-normal">We've sent the session invite to your email.</p>
            </div>

            <!-- Form -->
            <form x-show="!isSubmitted" @submit.prevent="handleRegister" class="space-y-4">
                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Full Name
                    </label>
                    <input
                        type="text"
                        required
                        x-model="name"
                        placeholder="e.g. Alex Johnson"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-[#004AAD] focus:ring-4 focus:ring-blue-500/10 text-sm outline-none transition-all" />
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Email Address
                    </label>
                    <input
                        type="email"
                        required
                        x-model="email"
                        placeholder="alex@example.com"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-[#004AAD] focus:ring-4 focus:ring-blue-500/10 text-sm outline-none transition-all" />
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">
                        Phone Number (Optional)
                    </label>
                    <input
                        type="tel"
                        x-model="phone"
                        placeholder="+1 (555) 000-0000"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-[#004AAD] focus:ring-4 focus:ring-blue-500/10 text-sm outline-none transition-all" />
                </div>

                <button
                    type="submit"
                    class="w-full py-3.5 bg-[#004AAD] hover:bg-[#003a8c] text-white font-bold rounded-xl text-base transition-all duration-300 shadow-lg shadow-[#004AAD]/30 hover:shadow-xl hover:shadow-[#004AAD]/40 active:scale-98 cursor-pointer mt-2">
                    Confirm Free Registration
                </button>
            </form>
        </div>
    </div>
</section>