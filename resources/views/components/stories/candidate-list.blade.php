@props(['candidates' => []])

<section class="py-20 md:py-28 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- 2-Column Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
            @foreach ($candidates as $candidate)
                <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6 sm:gap-8 group">
                    <!-- Circular Avatar -->
                    <a
                        href="{{ url('/success-stories/' . $candidate['slug']) }}"
                        class="w-40 h-40 sm:w-44 sm:h-44 rounded-full overflow-hidden flex-shrink-0 shadow-md border-4 border-slate-100 group-hover:border-[#0052cc] transition-all duration-300 group-hover:scale-105 block"
                    >
                        <img
                            src="{{ $candidate['image'] }}"
                            alt="{{ $candidate['name'] }}"
                            class="w-full h-full object-cover"
                        />
                    </a>

                    <!-- Details -->
                    <div class="flex flex-col items-center sm:items-start text-center sm:text-left pt-2">
                        <a
                            href="{{ url('/success-stories/' . $candidate['slug']) }}"
                            class="group-hover:text-[#0052cc] transition-colors"
                        >
                            <h3 class="text-2xl sm:text-3xl font-bold text-slate-900 mb-1 tracking-tight">
                                {{ $candidate['name'] }}
                            </h3>
                        </a>

                        <p class="text-sm sm:text-base font-semibold text-[#0052cc] mb-3">
                            {{ $candidate['role'] }}
                        </p>

                        <p class="text-sm text-slate-600 leading-relaxed mb-5 max-w-sm">
                            {{ $candidate['summary'] }}
                        </p>

                        <a
                            href="{{ url('/success-stories/' . $candidate['slug']) }}"
                            class="inline-flex items-center gap-1.5 px-6 py-2.5 rounded-lg bg-[#0052cc] hover:bg-[#0040a8] text-white font-semibold text-sm transition-all duration-200 shadow-md shadow-blue-600/20 active:scale-95 cursor-pointer"
                        >
                            <span>Read Full Story</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
