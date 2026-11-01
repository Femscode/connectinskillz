<section
    id="featured-courses"
    x-data="{
        currentSlide: 0,
        slides: [
            {
                id: 1,
                title: 'Data Analytics',
                subtitle: 'Process of inspecting, cleansing, transforming and modelling data with the goal of discovering useful information, informing conclusions and supporting decision-making.',
                ctaText: 'VIEW',
                ctaLink: '{{ route('courses') }}',
                align: 'left',
                image: '{{ asset('images/homepage/data-analytics.avif') }}'
            },
            {
                id: 2,
                title: 'Digital Project Management',
                subtitle: 'Develop skills to lead tech projects efficiently in 12 weeks, mastering proven strategies, timelines, and team coordination to ensure successful project delivery in the fast-paced tech industry.',
                ctaText: 'VIEW',
                ctaLink: '{{ route('courses') }}',
                align: 'left',
                image: '{{ asset('images/homepage/digital-project.avif') }}'
            },
            {
                id: 3,
                title: 'Digital Business Analysis',
                subtitle: 'Identifying business needs and determining solutions to business problems. Translating Business Requirements to Technical Requirements. Specialises in the development of digital project/digital transformation initiative by bridging the gap of an organisation future transformation.',
                ctaText: 'VIEW',
                ctaLink: '{{ route('courses') }}',
                align: 'left',
                image: '{{ asset('images/homepage/digital-business.avif') }}'
            },
            {
                id: 4,
                title: 'Information Governance',
                subtitle: 'The overall management of information at an organisation. Information governance balances the risk that information and sharing of data present with the value that information provides as well as complying with regulations and laws.',
                ctaText: 'VIEW',
                ctaLink: '{{ route('courses') }}',
                align: 'right',
                image: '{{ asset('images/homepage/information-governance.avif') }}'
            },
            {
                id: 5,
                title: 'Business Intelligence',
                subtitle: 'Providing visibility of organisation performance. Business Intelligence (BI) software simply processes raw data and transforms it into actionable and meaningful information and reports.',
                ctaText: 'VIEW',
                ctaLink: '{{ route('courses') }}',
                align: 'left',
                image: '{{ asset('images/homepage/business-intelligence.avif') }}'
            },
            {
                id: 6,
                title: 'QA Manual & Automation Testing',
                subtitle: 'Maintenance of a desired level of quality in a product and prioritising attention to every stage of the delivery process.',
                ctaText: 'VIEW',
                ctaLink: '{{ route('courses') }}',
                align: 'right',
                image: '{{ asset('images/homepage/qa.avif') }}'
            },
            {
                id: 7,
                title: 'GDPR, NDPR & Information Security',
                subtitle: 'Responsibility for making sure that CS is compliant with Data Protection Legislation and Information Security Standards e.g DSS PCI and ISO27001',
                ctaText: 'VIEW',
                ctaLink: '{{ route('courses') }}',
                align: 'right',
                image: '{{ asset('images/homepage/gdpr.avif') }}'
            },
            {
                id: 8,
                title: 'UX/UI Design',
                subtitle: 'The UI/UX Design Specialisation brings a design-centric approach to user interface and user experience design, and offers practical, skill-based instruction centered around a visual communications perspective, rather than on one focused on marketing or programming alone',
                ctaText: 'VIEW',
                ctaLink: '{{ route('courses') }}',
                align: 'left',
                image: '{{ asset('images/homepage/ux.avif') }}'
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
    class="relative w-full min-h-[500px] sm:min-h-[560px] md:min-h-[620px] lg:min-h-[660px] flex items-center justify-center overflow-hidden bg-slate-950">
    <!-- Background Image -->
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
        <!-- Layered Cinematic Overlays -->
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/60 to-slate-950/75"></div>
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
                    class="max-w-2xl p-8 sm:p-12 rounded-3xl bg-slate-950/60 backdrop-blur-xl border border-white/15 shadow-2xl flex flex-col"
                    :class="slide.align === 'left' ? 'items-start text-left' : 'items-start text-left sm:items-end sm:text-right'">
                    <!-- Pill Badge with Counter -->
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-500/20 backdrop-blur-md border border-blue-400/30 text-blue-200 text-xs font-bold tracking-widest uppercase mb-5">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span>
                        <span>Specialisation • <span x-text="'0' + (idx + 1)"></span> / 08</span>
                    </div>

                    <h2
                        class="text-3xl sm:text-4xl md:text-5xl font-black text-white tracking-tight leading-[1.12] mb-4 drop-shadow-md"
                        x-text="slide.title"></h2>

                    <p
                        class="text-sm sm:text-base md:text-lg text-slate-200 leading-relaxed mb-8 drop-shadow-sm font-normal"
                        x-text="slide.subtitle"></p>

                    <a
                        :href="slide.ctaLink"
                        class="inline-flex items-center justify-center gap-2 px-8 sm:px-10 py-3.5 rounded-xl bg-[#004AAD] hover:bg-[#003a8c] text-white font-bold tracking-wider text-sm sm:text-base transition-all duration-300 shadow-xl shadow-[#004AAD]/35 hover:shadow-2xl hover:shadow-[#004AAD]/50 hover:-translate-y-0.5 active:translate-y-0 cursor-pointer group"
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

    <!-- Pagination Dots (8 dots) -->
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