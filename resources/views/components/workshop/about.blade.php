<section class="py-16 sm:py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            <!-- Left Column: Student with Books & Floating Metric Pills (Screenshot 2) -->
            <div class="lg:col-span-6 relative flex items-center justify-center">
                <!-- Background decorative shapes & dots -->
                <span class="absolute -bottom-4 left-4 w-4 h-4 rounded-full bg-amber-400"></span>
                <span class="absolute top-1/2 -right-4 w-3.5 h-3.5 rounded-full bg-[#e8503a]"></span>

                <div class="relative w-full max-w-md mx-auto">
                    <!-- Subtle background tinted frame -->
                    <div class="absolute inset-x-8 bottom-0 top-16 bg-blue-50/70 rounded-3xl -z-10 border border-blue-100/60"></div>

                    <!-- Student Photo -->
                    <div class="relative z-10 mx-auto w-4/5 aspect-[4/5] rounded-3xl overflow-hidden shadow-xl bg-white border-4 border-white">
                        <img
                            src="{{ asset('images/workshop/student-books.jpg') }}"
                            alt="ConnectinSkillz Workshop Student"
                            class="w-full h-full object-cover object-top"
                        />
                    </div>

                    <!-- Floating Badge 1: 20k Tutors Expert (Top-Left) -->
                    <div class="absolute top-8 -left-2 sm:-left-6 z-20 bg-white/95 backdrop-blur-md p-3 sm:p-3.5 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-3 animate-float">
                        <div class="w-10 h-10 rounded-xl bg-purple-100 flex items-center justify-center text-purple-600 flex-shrink-0">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-base font-extrabold text-slate-900 block leading-tight">20k</span>
                            <span class="text-xs text-slate-500 font-medium">Tutors Expert</span>
                        </div>
                    </div>

                    <!-- Floating Badge 2: 250k Assisted Student (Bottom-Right) -->
                    <div class="absolute -bottom-4 right-0 sm:-right-4 z-20 bg-white/95 backdrop-blur-md p-3 sm:p-3.5 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-orange-100 flex items-center justify-center text-orange-500 flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-base font-extrabold text-slate-900 block leading-tight">250k</span>
                            <span class="text-xs text-slate-500 font-medium">Assisted Student</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Description Paragraph (Screenshot 2) -->
            <div class="lg:col-span-6 flex flex-col justify-center text-left">
                <p class="text-base sm:text-lg md:text-xl text-slate-700 font-normal leading-relaxed">
                    Connectinskillz Digital Business Analysis Workshop is a training tailored to help empower people to improve their career as Digital Business Analysts. This workshop will span for just a month and you will gain access to cutting-edge tools used by big organizations, work on a project during your study term, and engage in collaborative learning. Take advantage of this opportunity to learn something not only new but also profitable.
                </p>
            </div>
        </div>
    </div>
</section>
