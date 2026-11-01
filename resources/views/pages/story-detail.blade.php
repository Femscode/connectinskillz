@extends('layouts.app')

@section('title', $candidate['name'] . ' - Success Story | ConnectinSkillz')
@section('description', 'Read ' . $candidate['name'] . '\'s journey and review: ' . Str::limit($candidate['summary'], 150))

@section('content')
<article class="py-12 sm:py-16 md:py-20 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Top Breadcrumb / Back Navigation -->
        <div class="mb-8">
            <a
                href="{{ url('/success-stories') }}"
                class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 hover:text-[#0052cc] transition-colors group"
            >
                <svg class="w-4 h-4 transition-transform group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                <span>Back to All Success Stories</span>
            </a>
        </div>

        <!-- Top Split: "Here is what [Name] has to say" + Candidate Photo -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center">
            <!-- Left: Headline Text matching Screenshot -->
            <div class="lg:col-span-6 flex flex-col justify-center text-left">
                <span class="text-3xl sm:text-4xl md:text-5xl font-normal text-slate-800 tracking-tight leading-tight">
                    Here is what
                </span>

                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-slate-950 tracking-tight my-2 sm:my-3">
                    {{ $candidate['name'] }}
                </h1>

                <span class="text-3xl sm:text-4xl md:text-5xl font-normal text-slate-800 tracking-tight leading-tight">
                    has to say
                </span>

                @if(!empty($candidate['role']))
                    <div class="mt-4">
                        <span class="inline-block px-3.5 py-1 rounded-full text-xs sm:text-sm font-semibold bg-blue-50 text-[#0052cc] border border-blue-100">
                            {{ $candidate['role'] }}
                        </span>
                    </div>
                @endif
            </div>

            <!-- Right: Candidate Photo matching Screenshot -->
            <div class="lg:col-span-6">
                <div class="relative w-full aspect-[4/3] sm:aspect-[16/11] rounded-lg overflow-hidden bg-slate-100 shadow-lg border border-slate-200">
                    <img
                        src="{{ $candidate['image'] }}"
                        alt="{{ $candidate['name'] }}"
                        class="w-full h-full object-cover object-center"
                    />
                </div>
            </div>
        </div>

        <!-- Horizontal Navigation Arrows Row matching Screenshot (< on far left, > on far right) -->
        <div class="flex items-center justify-between mt-10 mb-12 sm:mb-16">
            <!-- Left Arrow: Previous Candidate -->
            <a
                href="{{ url('/success-stories/' . $prevCandidate['slug']) }}"
                class="w-10 h-10 sm:w-11 sm:h-11 rounded-lg border border-slate-300 bg-white hover:bg-slate-50 flex items-center justify-center text-[#0052cc] transition-all shadow-xs hover:shadow-sm cursor-pointer group"
                title="Previous: {{ $prevCandidate['name'] }}"
                aria-label="Previous story: {{ $prevCandidate['name'] }}"
            >
                <svg class="w-5 h-5 transition-transform group-hover:-translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M15 19l-7-7 7-7" />
                </svg>
            </a>

            <!-- Right Arrow: Next Candidate -->
            <a
                href="{{ url('/success-stories/' . $nextCandidate['slug']) }}"
                class="w-10 h-10 sm:w-11 sm:h-11 rounded-lg border border-slate-300 bg-white hover:bg-slate-50 flex items-center justify-center text-[#0052cc] transition-all shadow-xs hover:shadow-sm cursor-pointer group"
                title="Next: {{ $nextCandidate['name'] }}"
                aria-label="Next story: {{ $nextCandidate['name'] }}"
            >
                <svg class="w-5 h-5 transition-transform group-hover:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        <!-- Full Testimonial Story Content Area -->
        <div class="max-w-4xl mx-auto">
            <div class="prose prose-slate max-w-none text-slate-800">
                @php
                    $paragraphs = explode("\n\n", $candidate['fullStory']);
                @endphp

                @foreach($paragraphs as $para)
                    @if(trim($para))
                        <p class="text-base sm:text-lg text-slate-800 font-normal leading-relaxed sm:leading-loose mb-6">
                            {!! nl2br(e(trim($para))) !!}
                        </p>
                    @endif
                @endforeach
            </div>

            <!-- Bottom Navigation / Callout -->
            <div class="mt-14 pt-8 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-4">
                    <a
                        href="{{ url('/success-stories/' . $prevCandidate['slug']) }}"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-slate-600 hover:text-[#0052cc] transition-colors"
                    >
                        <span>&larr; Previous: {{ $prevCandidate['name'] }}</span>
                    </a>
                </div>

                <a
                    href="{{ url('/success-stories') }}"
                    class="px-6 py-2.5 rounded-lg bg-[#0052cc] hover:bg-[#0040a8] text-white font-semibold text-sm transition-all shadow-md shadow-blue-600/20 active:scale-95 text-center"
                >
                    View All Stories
                </a>

                <div class="flex items-center gap-4">
                    <a
                        href="{{ url('/success-stories/' . $nextCandidate['slug']) }}"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-slate-600 hover:text-[#0052cc] transition-colors"
                    >
                        <span>Next: {{ $nextCandidate['name'] }} &rarr;</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</article>
@endsection
