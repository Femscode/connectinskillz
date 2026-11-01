<section
    x-data="{
        scrollContainer: null,
        scrollLeft() {
            if (this.$refs.carousel) {
                this.$refs.carousel.scrollBy({ left: -300, behavior: 'smooth' });
            }
        },
        scrollRight() {
            if (this.$refs.carousel) {
                this.$refs.carousel.scrollBy({ left: 300, behavior: 'smooth' });
            }
        }
    }"
    class="py-20 md:py-24 bg-gradient-to-b from-white via-slate-50/50 to-white border-b border-slate-100 relative overflow-hidden"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-14">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-widest text-[#004AAD] bg-blue-50 border border-blue-100 shadow-xs mb-3">
                Enterprise Standards
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                Top <span class="text-[#004AAD]">Industry Tools</span>
            </h2>
        </div>

        <div class="relative flex items-center">
            <!-- Left Gradient Mask -->
            <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-12 sm:w-20 bg-gradient-to-r from-white via-white/80 to-transparent z-10"></div>
            <!-- Right Gradient Mask -->
            <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-12 sm:w-20 bg-gradient-to-l from-white via-white/80 to-transparent z-10"></div>

            <!-- Scroll Prev Button -->
            <button
                type="button"
                @click="scrollLeft()"
                aria-label="Previous tools"
                class="absolute left-1 sm:left-2 z-20 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white/95 hover:bg-white shadow-lg border border-slate-200/80 text-slate-600 hover:text-[#004AAD] flex items-center justify-center transition-all duration-200 hover:scale-110 active:scale-95 cursor-pointer"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <!-- Tools Carousel Track -->
            <div
                x-ref="carousel"
                class="w-full flex items-center justify-start sm:justify-center gap-5 sm:gap-6 overflow-x-auto scrollbar-none py-6 px-10 sm:px-14 scroll-smooth"
            >
                <!-- 1. Trello -->
                <div class="group flex-shrink-0 w-44 sm:w-48 h-32 flex flex-col items-center justify-center p-4 rounded-2xl bg-white border border-slate-200/80 hover:border-blue-400/50 shadow-xs hover:shadow-xl hover:shadow-blue-500/10 hover:-translate-y-1.5 transition-all duration-300" title="Trello - Agile & Kanban">
                    <div class="flex items-center gap-2 text-[#0079bf] transition-transform duration-300 group-hover:scale-105">
                        <div class="w-9 h-9 rounded-lg bg-[#0079bf] p-1.5 flex gap-1 justify-center items-start shadow-xs">
                            <div class="w-2.5 h-5 bg-white rounded-xs"></div>
                            <div class="w-2.5 h-3.5 bg-white rounded-xs"></div>
                        </div>
                        <span class="text-xl font-black tracking-tight text-[#0079bf]">Trello</span>
                    </div>
                </div>

                <!-- 2. Tableau -->
                <div class="group flex-shrink-0 w-44 sm:w-48 h-32 flex flex-col items-center justify-center p-4 rounded-2xl bg-white border border-slate-200/80 hover:border-blue-400/50 shadow-xs hover:shadow-xl hover:shadow-blue-500/10 hover:-translate-y-1.5 transition-all duration-300" title="Tableau - Data Visualization">
                    <div class="flex items-center justify-center transition-transform duration-300 group-hover:scale-105">
                        <svg viewBox="0 0 100 100" class="w-14 h-14">
                            <rect x="47" y="15" width="6" height="70" fill="#e8762d" />
                            <rect x="15" y="47" width="70" height="6" fill="#e8762d" />
                            <rect x="48" y="25" width="4" height="50" fill="#1f77b4" />
                            <rect x="25" y="48" width="50" height="4" fill="#1f77b4" />
                            <circle cx="32" cy="32" r="5" fill="#e32f26" />
                            <circle cx="68" cy="32" r="5" fill="#2ca02c" />
                            <circle cx="32" cy="68" r="5" fill="#9467bd" />
                            <circle cx="68" cy="68" r="5" fill="#ff7f0e" />
                        </svg>
                    </div>
                </div>

                <!-- 3. Telegram -->
                <div class="group flex-shrink-0 w-44 sm:w-48 h-32 flex flex-col items-center justify-center p-4 rounded-2xl bg-white border border-slate-200/80 hover:border-blue-400/50 shadow-xs hover:shadow-xl hover:shadow-blue-500/10 hover:-translate-y-1.5 transition-all duration-300" title="Telegram - Team Collaboration">
                    <div class="flex items-center justify-center transition-transform duration-300 group-hover:scale-105">
                        <div class="w-13 h-13 rounded-full bg-[#2AABEE] flex items-center justify-center shadow-md shadow-sky-400/30">
                            <svg viewBox="0 0 24 24" class="w-7 h-7 text-white fill-current" style="transform: translate(-1px, 1px);">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69.01-.03.01-.14-.07-.19-.08-.05-.19-.02-.27 0-.12.03-1.99 1.27-5.61 3.72-.53.36-1.01.54-1.44.53-.47-.01-1.38-.27-2.05-.48-.83-.27-1.48-.42-1.42-.88.03-.24.38-.49 1.03-.75 4.04-1.76 6.74-2.92 8.09-3.49 3.85-1.6 4.65-1.88 5.17-1.89.11 0 .37.03.54.17.14.12.18.28.2.45-.02.07-.02.19-.04.38z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- 4. Microsoft Project -->
                <div class="group flex-shrink-0 w-44 sm:w-48 h-32 flex flex-col items-center justify-center p-4 rounded-2xl bg-white border border-slate-200/80 hover:border-blue-400/50 shadow-xs hover:shadow-xl hover:shadow-blue-500/10 hover:-translate-y-1.5 transition-all duration-300" title="Microsoft Project - Project Scheduling">
                    <div class="flex items-center gap-1.5 transition-transform duration-300 group-hover:scale-105">
                        <div class="relative w-11 h-11">
                            <div class="absolute top-0 right-0 w-7 h-7 rounded bg-[#107c41] shadow-xs flex items-center justify-center text-white text-[11px] font-bold">
                                📊
                            </div>
                            <div class="absolute bottom-0 left-0 w-7 h-7 rounded bg-[#21a366] shadow-xs flex items-center justify-center text-white text-xs font-black">
                                P
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Project Management -->
                <div class="group flex-shrink-0 w-44 sm:w-48 h-32 flex flex-col items-center justify-center p-4 rounded-2xl bg-white border border-slate-200/80 hover:border-blue-400/50 shadow-xs hover:shadow-xl hover:shadow-blue-500/10 hover:-translate-y-1.5 transition-all duration-300" title="Project Management - Frameworks & Standards">
                    <div class="transition-transform duration-300 group-hover:scale-105">
                        <div class="w-13 h-13 rounded-2xl border-2 border-[#004AAD] bg-blue-50/50 flex items-center justify-center text-[#004AAD] font-black text-xl tracking-tight shadow-xs">
                            PM
                        </div>
                    </div>
                </div>

                <!-- 6. Jira Software -->
                <div class="group flex-shrink-0 w-44 sm:w-48 h-32 flex flex-col items-center justify-center p-4 rounded-2xl bg-white border border-slate-200/80 hover:border-blue-400/50 shadow-xs hover:shadow-xl hover:shadow-blue-500/10 hover:-translate-y-1.5 transition-all duration-300" title="Jira Software - Sprint Planning">
                    <div class="flex items-center gap-2 text-[#004AAD] transition-transform duration-300 group-hover:scale-105">
                        <svg viewBox="0 0 24 24" class="w-9 h-9 fill-[#004AAD]">
                            <path d="M11.53 2c0 2.4-1.97 4.35-4.4 4.35H2.8a.8.8 0 0 0-.8.8v4.33c0 2.4 1.97 4.35 4.4 4.35h4.33a.8.8 0 0 0 .8-.8V2zm0 13.62c0-2.4 1.97-4.35 4.4-4.35h4.33a.8.8 0 0 1 .8.8v4.33c0 2.4-1.97 4.35-4.4 4.35h-4.33a.8.8 0 0 1-.8-.8v-4.33z" />
                        </svg>
                        <span class="text-xl font-black tracking-tight text-slate-800">Jira</span>
                    </div>
                </div>

                <!-- 7. Figma -->
                <div class="group flex-shrink-0 w-44 sm:w-48 h-32 flex flex-col items-center justify-center p-4 rounded-2xl bg-white border border-slate-200/80 hover:border-blue-400/50 shadow-xs hover:shadow-xl hover:shadow-blue-500/10 hover:-translate-y-1.5 transition-all duration-300" title="Figma - UI/UX Prototyping">
                    <div class="flex items-center gap-2 transition-transform duration-300 group-hover:scale-105">
                        <svg viewBox="0 0 38 57" class="w-7 h-9">
                            <path d="M19 28.5a9.5 9.5 0 1 1 19 0 9.5 9.5 0 0 1-19 0z" fill="#1abcfe" />
                            <path d="M0 47.5A9.5 9.5 0 0 1 9.5 38H19v9.5a9.5 9.5 0 1 1-19 0z" fill="#0acf83" />
                            <path d="M19 0v19h9.5a9.5 9.5 0 1 0 0-19H19z" fill="#ff7262" />
                            <path d="M0 9.5A9.5 9.5 0 0 0 9.5 19H19V0H9.5A9.5 9.5 0 0 0 0 9.5z" fill="#f24e1e" />
                            <path d="M0 28.5A9.5 9.5 0 0 0 9.5 38H19V19H9.5A9.5 9.5 0 0 0 0 28.5z" fill="#a259ff" />
                        </svg>
                        <span class="text-xl font-black text-slate-800">Figma</span>
                    </div>
                </div>
            </div>

            <!-- Scroll Next Button -->
            <button
                type="button"
                @click="scrollRight()"
                aria-label="Next tools"
                class="absolute right-1 sm:right-2 z-20 w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-white/95 hover:bg-white shadow-lg border border-slate-200/80 text-slate-600 hover:text-[#004AAD] flex items-center justify-center transition-all duration-200 hover:scale-110 active:scale-95 cursor-pointer"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</section>
