@php
    $candidates = \App\Http\Controllers\SuccessStoriesController::getCandidates();
@endphp

<section id="stories" class="py-24 md:py-32 bg-gradient-to-b from-white via-slate-50/60 to-white border-b border-slate-100 relative overflow-hidden">
    <!-- Ambient Background Lighting -->
    <div class="absolute -top-32 left-1/3 w-96 h-96 bg-[#004AAD]/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <!-- Section Header -->
        <div class="max-w-3xl mx-auto mb-16">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-bold uppercase tracking-widest text-[#004AAD] bg-blue-50 border border-blue-100 shadow-xs mb-3">
                Alumni Stories
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-slate-900 tracking-tight leading-tight">
                HEAR FROM OUR <span class="text-[#004AAD]">CANDIDATES</span>
            </h2>
        </div>

        <!-- 5 Candidates Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 sm:gap-6 justify-center items-stretch">
            @foreach ($candidates as $candidate)
                <a
                    href="{{ url('/success-stories/' . $candidate['slug']) }}"
                    class="group relative flex flex-col items-center text-center p-6 sm:p-7 rounded-3xl bg-white border border-slate-200/80 hover:border-[#004AAD]/50 shadow-xs hover:shadow-2xl hover:shadow-[#004AAD]/10 transition-all duration-300 hover:-translate-y-2 cursor-pointer overflow-hidden"
                >
                    <!-- Top Hover Accent Line -->
                    <div class="absolute top-0 inset-x-0 h-1 bg-[#004AAD] opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                    <!-- Candidate Avatar -->
                    <div class="relative w-28 h-28 sm:w-32 sm:h-32 rounded-full overflow-hidden mb-5 shadow-lg border-4 border-slate-100 group-hover:border-[#004AAD] group-hover:ring-4 group-hover:ring-blue-100 transition-all duration-300 group-hover:scale-105">
                        <img
                            src="{{ $candidate['image'] }}"
                            alt="{{ $candidate['name'] }}"
                            class="w-full h-full object-cover"
                        />
                    </div>

                    <!-- 5 Star Rating -->
                    <div class="flex items-center gap-1 text-amber-400 mb-2">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>

                    <!-- Candidate Name -->
                    <h3 class="text-lg font-black text-slate-900 mb-1 group-hover:text-[#004AAD] transition-colors">
                        {{ $candidate['name'] }}
                    </h3>

                    <!-- Candidate Role Pill -->
                    <span class="inline-flex items-center text-[11px] font-bold px-3 py-1 rounded-full bg-blue-50 text-[#004AAD] border border-blue-100/80 mb-4">
                        {{ $candidate['role'] }}
                    </span>

                    <!-- Summary Quote -->
                    <p class="text-xs sm:text-sm text-slate-600 font-normal leading-relaxed max-w-xs line-clamp-3 mb-5 italic">
                        &ldquo;{{ $candidate['summary'] }}&rdquo;
                    </p>

                    <!-- CTA Read Story -->
                    <span class="mt-auto text-xs font-bold text-[#004AAD] group-hover:text-[#003a8c] inline-flex items-center gap-1.5 transition-colors">
                        <span>Read story</span>
                        <svg class="w-3.5 h-3.5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </span>
                </a>
            @endforeach
        </div>
    </div>
</section>
