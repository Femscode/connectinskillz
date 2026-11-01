<div
    x-data="{
        isOpen: false,
        name: '',
        email: '',
        phone: '',
        experience: 'beginner',
        isSubmitted: false,
        handleEnroll() {
            if (this.name && this.email) {
                this.isSubmitted = true;
                setTimeout(() => {
                    this.isSubmitted = false;
                    this.isOpen = false;
                    this.name = '';
                    this.email = '';
                    this.phone = '';
                }, 3000);
            }
        }
    }"
    @open-workshop-enroll.window="isOpen = true"
>
    <div
        x-show="isOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @keydown.escape.window="isOpen = false"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/70 backdrop-blur-sm"
    >
        <div
            x-show="isOpen"
            x-transition:enter="transition ease-out duration-250"
            x-transition:enter-start="opacity-0 scale-95 translate-y-2"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-2"
            @click.outside="isOpen = false"
            class="relative w-full max-w-lg bg-white rounded-2xl shadow-2xl p-6 sm:p-8 border border-slate-100 text-slate-900"
        >
            <button
                type="button"
                @click="isOpen = false"
                class="absolute top-5 right-5 text-slate-400 hover:text-slate-700 p-1.5 rounded-full hover:bg-slate-100 text-xl font-bold cursor-pointer transition-colors"
            >
                ✕
            </button>

            <!-- Modal Header -->
            <div class="mb-6 text-left">
                <span class="text-xs font-bold uppercase tracking-wider text-[#0052cc] block mb-1">
                    5 Weeks Intensive Training
                </span>
                <h3 class="text-2xl font-extrabold text-slate-900">
                    Get Started with Digital Business Analysis
                </h3>
                <p class="text-xs sm:text-sm text-slate-500 mt-1">
                    Reserve your seat in our next live cohort. Learn live from UK experts with hands-on project work.
                </p>
            </div>

            <!-- Success State -->
            <div x-show="isSubmitted" x-cloak class="py-8 text-center text-green-600 font-semibold flex flex-col items-center gap-3">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center text-green-600">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <p class="text-xl font-extrabold text-slate-900">Application Received!</p>
                <p class="text-xs sm:text-sm text-slate-500 max-w-sm">
                    Thank you for taking a step further. We've sent the syllabus, calendar schedule, and orientation guide to your email.
                </p>
            </div>

            <!-- Form -->
            <form x-show="!isSubmitted" @submit.prevent="handleEnroll" class="space-y-4 text-left">
                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">
                        Full Name *
                    </label>
                    <input
                        type="text"
                        required
                        x-model="name"
                        placeholder="e.g. Rachel Adams"
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
                        x-model="email"
                        placeholder="rachel@example.com"
                        class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0052cc] focus:ring-1 focus:ring-[#0052cc] text-sm outline-none transition-all"
                    />
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">
                        Phone Number
                    </label>
                    <input
                        type="tel"
                        x-model="phone"
                        placeholder="+44 7700 900123"
                        class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0052cc] focus:ring-1 focus:ring-[#0052cc] text-sm outline-none transition-all"
                    />
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-700 mb-1">
                        Current Tech / Professional Level
                    </label>
                    <select
                        x-model="experience"
                        class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0052cc] focus:ring-1 focus:ring-[#0052cc] text-sm outline-none bg-white transition-all"
                    >
                        <option value="beginner">Complete Beginner (Non-Tech Background)</option>
                        <option value="career-changer">Looking to Switch into Tech</option>
                        <option value="practitioner">Experienced Analyst looking to Level Up</option>
                    </select>
                </div>

                <div class="pt-2">
                    <button
                        type="submit"
                        class="w-full py-3.5 bg-[#0052cc] hover:bg-[#0040a8] text-white font-bold rounded-lg text-sm transition-all shadow-lg shadow-blue-600/30 active:scale-[0.99] cursor-pointer"
                    >
                        Confirm Workshop Enrollment
                    </button>
                    <p class="text-center text-[11px] text-slate-400 mt-2">
                        🔒 We respect your privacy. No payment required to apply.
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
