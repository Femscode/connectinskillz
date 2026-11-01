@php
    $metrics = [
        [
            'id' => 'courses',
            'value' => '10',
            'suffix' => '+',
            'title' => 'Courses',
            'subtext' => 'Specialist Digital Pathways',
            'percentage' => 55,
            'dashoffset' => 135,
            'icon' => 'cap',
        ],
        [
            'id' => 'trainers',
            'value' => '10',
            'suffix' => '+',
            'title' => 'Expert Trainers',
            'subtext' => 'Senior Industry Mentors',
            'percentage' => 65,
            'dashoffset' => 105,
            'icon' => 'mentor',
        ],
        [
            'id' => 'experience',
            'value' => '1,500',
            'suffix' => '+',
            'title' => 'Virtual Experience',
            'subtext' => 'Live Interactive Hours',
            'percentage' => 88,
            'dashoffset' => 36,
            'icon' => 'laptop',
        ],
        [
            'id' => 'candidates',
            'value' => '50',
            'suffix' => '+',
            'title' => 'Candidates',
            'subtext' => 'Career Success Stories',
            'percentage' => 80,
            'dashoffset' => 60,
            'icon' => 'trophy',
        ],
        [
            'id' => 'hours',
            'value' => '150',
            'suffix' => '+',
            'title' => 'Training Hours',
            'subtext' => 'Practical Project Work',
            'percentage' => 75,
            'dashoffset' => 75,
            'icon' => 'clock',
        ],
    ];
@endphp

<section class="py-20 md:py-28 bg-gradient-to-b from-white via-slate-50/50 to-white border-b border-slate-100 relative overflow-hidden">
    <!-- Ambient subtle background glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[350px] bg-blue-50/60 rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

        <!-- Section Header -->
        <div class="max-w-3xl mx-auto mb-16 sm:mb-20">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-blue-100 text-[#0052cc] text-xs font-bold uppercase tracking-wider mb-4">
                <span class="w-2 h-2 rounded-full bg-[#0052cc] animate-pulse"></span>
                <span>Track Record &amp; Impact</span>
            </div>

            <h2 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
                Our Progress
            </h2>

            <p class="text-base sm:text-lg text-slate-600 font-normal leading-relaxed">
                Empowering digital professionals through hands-on learning, expert mentorship, and real-world project delivery.
            </p>
        </div>

        <!-- 5 Metrics Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 sm:gap-7 items-stretch">
            @foreach ($metrics as $metric)
                <div class="group relative flex flex-col items-center justify-between p-7 sm:p-8 rounded-3xl bg-white border border-slate-200/70 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.03)] hover:shadow-[0_16px_36px_-6px_rgba(0,82,204,0.12)] hover:border-[#0052cc]/30 transition-all duration-300 hover:-translate-y-1.5 text-center">

                    <!-- Radial Progress Meter with Centered Icon & Metric -->
                    <div class="relative w-40 h-40 sm:w-44 sm:h-44 flex items-center justify-center mb-6">
                        <svg viewBox="0 0 120 120" class="w-full h-full transform -rotate-90">
                            <defs>
                                <linearGradient id="grad-{{ $metric['id'] }}" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#0052cc" />
                                    <stop offset="100%" stop-color="#3b82f6" />
                                </linearGradient>
                            </defs>

                            <!-- Background Track -->
                            <circle
                                cx="60"
                                cy="60"
                                r="48"
                                fill="none"
                                stroke="#f1f5f9"
                                stroke-width="7"
                            />

                            <!-- Active Progress Arc -->
                            <circle
                                cx="60"
                                cy="60"
                                r="48"
                                fill="none"
                                stroke="url(#grad-{{ $metric['id'] }})"
                                stroke-width="7"
                                stroke-dasharray="301.6"
                                stroke-dashoffset="{{ $metric['dashoffset'] }}"
                                stroke-linecap="round"
                                class="transition-all duration-700 ease-out"
                            />
                        </svg>

                        <!-- Inner Content: Floating Icon + Metric Value -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none pt-1">
                            <!-- Icon Badge -->
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-[#0052cc] to-[#2563eb] text-white flex items-center justify-center shadow-md shadow-blue-600/25 mb-1.5 group-hover:scale-110 transition-transform duration-300">
                                @if ($metric['icon'] === 'cap')
                                    <!-- Graduation Cap / Learning Icon -->
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
                                        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
                                    </svg>
                                @elseif ($metric['icon'] === 'mentor')
                                    <!-- Expert Trainer / Leadership Icon -->
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                        <circle cx="9" cy="7" r="4"/>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                    </svg>
                                @elseif ($metric['icon'] === 'laptop')
                                    <!-- Virtual Experience / Display Icon -->
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                                        <line x1="8" y1="21" x2="16" y2="21"/>
                                        <line x1="12" y1="17" x2="12" y2="21"/>
                                        <circle cx="12" cy="10" r="2.5"/>
                                    </svg>
                                @elseif ($metric['icon'] === 'trophy')
                                    <!-- Candidates / Career Trophy Icon -->
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/>
                                        <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/>
                                        <path d="M4 22h16"/>
                                        <path d="M10 14.66V17c0 .55-.45 1-1 1H7v4h10v-4h-2c-.55 0-1-.45-1-1v-2.34c3.42-.71 6-3.74 6-7.32V4H4v5.34c0 3.58 2.58 6.61 6 7.32z"/>
                                    </svg>
                                @elseif ($metric['icon'] === 'clock')
                                    <!-- Training Hours / Clock Icon -->
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"/>
                                        <polyline points="12 6 12 12 16 14"/>
                                        <path d="M12 2v2"/>
                                    </svg>
                                @endif
                            </div>

                            <!-- Big Value -->
                            <div class="flex items-baseline gap-0.5">
                                <span class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                                    {{ $metric['value'] }}
                                </span>
                                <span class="text-base font-extrabold text-[#0052cc]">
                                    {{ $metric['suffix'] }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Label & Details -->
                    <div class="w-full">
                        <h3 class="text-lg sm:text-xl font-extrabold text-slate-900 tracking-tight mb-1 group-hover:text-[#0052cc] transition-colors">
                            {{ $metric['title'] }}
                        </h3>
                        <p class="text-xs text-slate-500 font-medium leading-relaxed">
                            {{ $metric['subtext'] }}
                        </p>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
