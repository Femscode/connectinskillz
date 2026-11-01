<section
    id="courses"
    x-data="{
        currentSlide: 0,
        slides: [
            {
                id: 1,
                title: 'Your Success Starts Here',
                ctaText: 'Watch Now',
                ctaLink: '{{ route('recorded-events') }}',
                align: 'left',
                image: '{{ asset('images/homepage/your-success-start-here.avif') }}'
            },
            {
                id: 2,
                title: 'Free Training Sessions',
                ctaText: 'Book Now',
                ctaLink: '{{ route('events') }}',
                align: 'right',
                image: '{{ asset('images/homepage/free-training-session.avif') }}'
            },
            {
                id: 3,
                title: 'Career Opportunities',
                ctaText: 'Learn More',
                ctaLink: '{{ route('courses') }}',
                align: 'left',
                image: '{{ asset('images/homepage/career-opportunities.avif') }}'
            },
            {
                id: 4,
                title: 'Our Courses',
                ctaText: 'VIEW',
                ctaLink: '{{ route('courses') }}',
                align: 'right',
                image: '{{ asset('images/homepage/our-courses.avif') }}'
            }
        ],
        timer: null,
        nextSlide() {
            this.currentSlide = (this.currentSlide === this.slides.length - 1) ? 0 : this.currentSlide + 1;
            this.resetTimer();
        },
        prevSlide() {
            this.currentSlide = (this.currentSlide === 0) ? this.slides.length - 1 : this.currentSlide - 1;
            this.resetTimer();
        },
        goToSlide(index) {
            this.currentSlide = index;
            this.resetTimer();
        },
        startTimer() {
            this.timer = setInterval(() => {
                this.nextSlide();
            }, 6000);
        },
        resetTimer() {
            if (this.timer) clearInterval(this.timer);
            this.startTimer();
        }
    }"
    x-init="startTimer()"
    class="relative w-full min-h-[460px] sm:min-h-[520px] md:min-h-[580px] lg:min-h-[620px] flex items-center justify-center overflow-hidden bg-slate-950">
    <!-- Background Image Transitions -->
    <div class="absolute inset-0 z-0">
        <template x-for="(slide, idx) in slides" :key="slide.id">
            <img
                x-show="currentSlide === idx"
                x-transition:enter="transition-all ease-out duration-1000"
                x-transition:enter-start="opacity-0 scale-105"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition-all ease-in duration-700"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                :src="slide.image"
                :alt="slide.title"
                class="absolute inset-0 w-full h-full object-cover object-center" />
        </template>
        <!-- Cinematic Gradient Overlays -->
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/50 to-slate-950/70"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-900/20 via-transparent to-transparent"></div>
    </div>

    <!-- Navigation Arrows -->
    <button
        type="button"
        @click="prevSlide()"
        aria-label="Previous slide"
        class="absolute left-4 sm:left-6 md:left-8 z-30 w-11 h-11 sm:w-13 sm:h-13 rounded-full bg-slate-950/40 hover:bg-slate-900/80 backdrop-blur-xl border border-white/20 text-white flex items-center justify-center shadow-xl hover:scale-110 active:scale-95 transition-all duration-300 cursor-pointer">
        <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
    </button>

    <button
        type="button"
        @click="nextSlide()"
        aria-label="Next slide"
        class="absolute right-4 sm:right-6 md:right-8 z-30 w-11 h-11 sm:w-13 sm:h-13 rounded-full bg-slate-950/40 hover:bg-slate-900/80 backdrop-blur-xl border border-white/20 text-white flex items-center justify-center shadow-xl hover:scale-110 active:scale-95 transition-all duration-300 cursor-pointer">
        <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
    </button>

    <!-- Slide Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-8 sm:px-16 md:px-24 w-full py-20">
        <template x-for="(slide, idx) in slides" :key="slide.id">
            <div
                x-show="currentSlide === idx"
                x-cloak
                x-transition:enter="transition-all ease-out duration-500 transform"
                x-transition:enter-start="opacity-0 translate-y-4 scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                x-transition:leave="transition-all ease-in duration-300 transform"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 -translate-y-4 scale-95"
                class="w-full flex"
                :class="slide.align === 'left' ? 'justify-start' : 'justify-end'">
                <div
                    class="max-w-xl p-8 sm:p-10 rounded-3xl bg-slate-950/50 backdrop-blur-xl border border-white/15 shadow-2xl flex flex-col"
                    :class="slide.align === 'left' ? 'items-start text-left' : 'items-center text-center sm:items-end sm:text-right'">
                    <!-- Category Badge -->
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/20 backdrop-blur-md border border-blue-400/30 text-blue-200 text-xs font-bold tracking-widest uppercase mb-4">
                        <span>Featured Pathway</span>
                    </div>

                    <h2
                        class="text-3xl sm:text-4xl md:text-5xl lg:text-[52px] font-black text-white tracking-tight leading-[1.12] mb-6 drop-shadow-md"
                        x-text="slide.title"></h2>

                    <a
                        :href="slide.ctaLink"
                        class="inline-flex items-center justify-center gap-2 px-8 sm:px-10 py-3.5 rounded-xl bg-[#004AAD] hover:bg-[#003a8c] text-white font-bold tracking-wide text-sm sm:text-base transition-all duration-300 shadow-xl shadow-[#004AAD]/35 hover:shadow-2xl hover:shadow-[#004AAD]/50 hover:-translate-y-0.5 active:translate-y-0 cursor-pointer group"
                    >
                        <span x-text="slide.ctaText"></span>
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </template>
    </div>

    <!-- Pagination Dots & Status -->
    <div class="absolute bottom-7 left-0 right-0 z-20 flex items-center justify-center gap-2">
        <template x-for="(slide, idx) in slides" :key="'dot-' + slide.id">
            <button
                type="button"
                @click="goToSlide(idx)"
                :aria-label="'Go to slide ' + (idx + 1)"
                class="h-2.5 rounded-full transition-all duration-300 cursor-pointer"
                :class="currentSlide === idx ? 'w-8 bg-white shadow-md shadow-white/50' : 'w-2.5 bg-white/40 hover:bg-white/70'"></button>
        </template>
    </div>
</section>