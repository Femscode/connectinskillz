@props(['mentors' => []])

<section
    x-data="{
        selectedMentor: null,
        sessionModalOpen: false,
        name: '',
        email: '',
        topic: '',
        submitted: false,
        openModal(mentor) {
            this.selectedMentor = mentor;
            this.submitted = false;
            this.sessionModalOpen = true;
        },
        handleRequest() {
            if (this.name && this.email) {
                this.submitted = true;
                setTimeout(() => {
                    this.submitted = false;
                    this.sessionModalOpen = false;
                    this.name = '';
                    this.email = '';
                    this.topic = '';
                }, 2500);
            }
        }
    }"
    class="py-20 md:py-28 bg-white border-b border-slate-100"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- 3-Column Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-14 items-stretch">
            @foreach ($mentors as $mentor)
                <div class="flex flex-col justify-between items-start text-left p-4 sm:p-6 rounded-2xl bg-white border border-slate-100 shadow-xs hover:shadow-lg transition-all duration-300 group">
                    <div>
                        <!-- Circular Mentor Image -->
                        <div class="w-48 h-48 sm:w-56 sm:h-56 rounded-full overflow-hidden mx-auto mb-6 shadow-md border-4 border-slate-100 group-hover:border-[#0052cc] transition-all duration-300 group-hover:scale-105">
                            <img
                                src="{{ $mentor['image'] }}"
                                alt="{{ $mentor['name'] }}"
                                class="w-full h-full object-cover"
                            />
                        </div>

                        <!-- Mentor Info -->
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900 mb-1.5 tracking-tight">
                            {{ $mentor['name'] }}
                        </h3>

                        <p class="text-sm sm:text-base font-semibold text-[#0052cc] mb-4">
                            {{ $mentor['role'] }}
                        </p>

                        <p class="text-sm text-slate-600 leading-relaxed mb-6 font-normal">
                            {{ $mentor['description'] }}
                        </p>
                    </div>

                    <!-- Button -->
                    <div class="pt-2 w-full">
                        <button
                            type="button"
                            @click="openModal({{ json_encode($mentor) }})"
                            class="inline-flex items-center justify-center px-8 py-2.5 rounded bg-[#0052cc] hover:bg-[#0040a8] text-white font-semibold text-sm transition-all duration-200 shadow-md shadow-blue-600/20 active:scale-95 cursor-pointer"
                        >
                            Find out more
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Mentor Details & Session Booking Modal -->
    <div
        x-show="sessionModalOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @keydown.escape.window="sessionModalOpen = false"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm"
    >
        <template x-if="selectedMentor !== null">
            <div
                x-show="sessionModalOpen"
                x-transition:enter="transition ease-out duration-250"
                x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                x-transition:leave-end="opacity-0 scale-95 translate-y-2"
                @click.outside="sessionModalOpen = false"
                class="relative w-full max-w-lg bg-white rounded-2xl shadow-2xl p-8 border border-slate-100 text-slate-900"
            >
                <button
                    type="button"
                    @click="sessionModalOpen = false"
                    class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 p-1.5 rounded-full hover:bg-slate-100 cursor-pointer"
                    aria-label="Close modal"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Mentor Avatar & Title -->
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-blue-100 flex-shrink-0">
                        <img
                            :src="selectedMentor.image"
                            :alt="selectedMentor.name"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-slate-900" x-text="selectedMentor.name"></h3>
                        <p class="text-xs font-semibold text-[#0052cc]" x-text="selectedMentor.role"></p>
                    </div>
                </div>

                <!-- Bio -->
                <p class="text-sm text-slate-600 leading-relaxed mb-6 bg-slate-50 p-4 rounded-xl border border-slate-100 italic" x-text="selectedMentor.fullBio"></p>

                <!-- Confirmation State -->
                <div x-show="submitted" x-cloak class="py-6 text-center text-green-600 font-semibold flex flex-col items-center gap-2">
                    <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-base font-bold">Mentorship Request Sent!</p>
                    <p class="text-xs text-slate-500">The mentor and ConnectinSkillz team will connect with you via email.</p>
                </div>

                <!-- Form -->
                <form x-show="!submitted" @submit.prevent="handleRequest" class="space-y-4">
                    <h4 class="text-sm font-bold text-slate-900">Request a 1-on-1 Mentorship Session</h4>
                    <div>
                        <input
                            type="text"
                            required
                            x-model="name"
                            placeholder="Your Full Name"
                            class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0052cc] focus:ring-1 focus:ring-[#0052cc] text-sm outline-none"
                        />
                    </div>

                    <div>
                        <input
                            type="email"
                            required
                            x-model="email"
                            placeholder="Your Email Address"
                            class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0052cc] focus:ring-1 focus:ring-[#0052cc] text-sm outline-none"
                        />
                    </div>

                    <div>
                        <input
                            type="text"
                            x-model="topic"
                            placeholder="Topic / Career Focus (Optional)"
                            class="w-full px-3.5 py-2.5 rounded-lg border border-slate-300 focus:border-[#0052cc] focus:ring-1 focus:ring-[#0052cc] text-sm outline-none"
                        />
                    </div>

                    <button
                        type="submit"
                        class="w-full py-3 bg-[#0052cc] hover:bg-[#0040a8] text-white font-bold rounded-lg text-sm transition-all shadow-md shadow-blue-600/20 active:scale-98 cursor-pointer"
                    >
                        Send Mentorship Request
                    </button>
                </form>
            </div>
        </template>
    </div>
</section>
