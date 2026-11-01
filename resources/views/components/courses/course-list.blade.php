@props(['courses' => []])

<section
    id="catalog"
    class="py-20 md:py-28 bg-white border-b border-slate-100"
>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Heading -->
        <h2 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-slate-900 text-center mb-16 sm:mb-20 tracking-tight">
            Our Courses
        </h2>

        <!-- Courses 2-Column Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-stretch">
            @foreach ($courses as $course)
                <div class="flex flex-col sm:flex-row items-center gap-6 sm:gap-8 p-4 sm:p-6 rounded-2xl bg-white border border-slate-100/80 shadow-xs hover:shadow-lg transition-all duration-300">
                    <!-- Course Image -->
                    <div class="w-full sm:w-1/2 aspect-[4/3] rounded-xl overflow-hidden shadow-sm bg-slate-100 flex-shrink-0">
                        <img
                            src="{{ $course['image'] }}"
                            alt="{{ $course['title'] }}"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                        />
                    </div>

                    <!-- Course Content -->
                    <div class="w-full sm:w-1/2 flex flex-col justify-between py-1">
                        <div>
                            <h3 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3 tracking-tight">
                                {{ $course['title'] }}
                            </h3>
                            <p class="text-sm text-slate-600 leading-relaxed mb-6 font-normal">
                                {{ $course['description'] }}
                            </p>
                        </div>

                        <div>
                            <a
                                href="https://buy.stripe.com/bIY8xxfQr68p5KE5kA"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 px-6 py-2.5 rounded bg-[#0052cc] hover:bg-[#0040a8] text-white font-semibold text-sm transition-all duration-200 shadow-md shadow-blue-600/20 active:scale-95 cursor-pointer"
                            >
                                <span>Get Course</span>
                                <svg class="w-4 h-4 text-white/90" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
