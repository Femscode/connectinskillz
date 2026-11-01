<section class="relative py-20 sm:py-28 overflow-hidden bg-[#f8faff]">

    {{-- Decorative background shapes --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden z-0">
        <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-transparent via-[#0052cc]/40 to-transparent"></div>
        <div class="absolute -top-40 right-0 w-[600px] h-[600px] rounded-full bg-[#e8f0ff] blur-[80px] opacity-70"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] rounded-full bg-[#eef0ff] blur-[60px] opacity-50"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Section heading --}}
        <div class="text-center mb-14">
            <span class="inline-block text-xs font-bold uppercase tracking-[0.2em] text-[#0052cc] bg-blue-50 border border-blue-100 rounded-full px-4 py-1.5 mb-4">
                Recorded Sessions
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black text-slate-900 tracking-tight leading-tight mb-4">
                Career Talk Replay
            </h2>
            <p class="text-slate-500 text-base sm:text-lg max-w-xl mx-auto leading-relaxed">
                Watch at your own pace. Unlock expert insights from industry leaders in digital careers.
            </p>
        </div>

        {{-- Card --}}
        <div class="max-w-5xl mx-auto">
            <div class="group bg-white rounded-3xl border border-slate-200/80 shadow-[0_8px_48px_-12px_rgba(0,82,204,0.15)] hover:shadow-[0_24px_64px_-16px_rgba(0,82,204,0.22)] transition-all duration-500 overflow-hidden lg:grid lg:grid-cols-5">

                {{-- Left: Video Preview --}}
                <div class="lg:col-span-3 relative aspect-video lg:aspect-auto bg-black overflow-hidden cursor-pointer" @click="$dispatch('open-recorded-stream')">
                    <img
                        src="{{ asset('images/recorded-events/webinar-video-frame.jpg') }}"
                        alt="Free Career Talk Webinar Video Preview"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-[1.03]" />

                    {{-- Dark overlay --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent transition-opacity duration-300 group-hover:opacity-80"></div>

                    {{-- Play button --}}
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="relative flex items-center justify-center">
                            {{-- Ripple rings --}}
                            <div class="absolute w-28 h-28 rounded-full border-2 border-white/20 animate-ping" style="animation-duration:2s;"></div>
                            <div class="absolute w-20 h-20 rounded-full border-2 border-white/30 animate-ping" style="animation-duration:2s; animation-delay:0.3s;"></div>
                            {{-- Play circle --}}
                            <div class="relative w-16 h-16 rounded-full bg-white/90 backdrop-blur-sm flex items-center justify-center shadow-2xl transition-transform duration-300 group-hover:scale-110 group-hover:bg-white">
                                <svg class="w-6 h-6 translate-x-0.5 fill-[#0052cc]" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    {{-- Badge inside video --}}
                    <div class="absolute top-4 left-4">
                        <span class="inline-flex items-center gap-1.5 bg-white/95 backdrop-blur-sm text-[#0052cc] text-[11px] font-bold uppercase tracking-wider rounded-full px-3 py-1.5 shadow-lg">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#0052cc] animate-pulse"></span>
                            Free Webinar
                        </span>
                    </div>

                    {{-- Duration badge --}}
                    <div class="absolute bottom-4 right-4">
                        <span class="bg-black/70 backdrop-blur-sm text-white text-xs font-semibold rounded-lg px-2.5 py-1">
                            HD Replay
                        </span>
                    </div>
                </div>

                {{-- Right: Info --}}
                <div class="lg:col-span-2 p-7 sm:p-9 flex flex-col justify-between">

                    <div>
                        {{-- Title --}}
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight leading-tight mb-3">
                            Free Career Talk
                        </h3>

                        {{-- Subtitle --}}
                        <p class="text-md text-[#0052cc] leading-relaxed mb-7">
                            Insider info on how to secure yourself a high-paying Digital Role from top experts across different industries.
                        </p>

                        {{-- Speakers --}}
                        <div class="space-y-4 mb-8">
                            <p class="text-[11px] font-bold uppercase tracking-[0.15em] text-slate-400">Speakers</p>

                            @php
                            $speakers = [
                            ['name' => 'Olayinka Fatogun', 'role' => 'Head of Information Governance & Cyber Security, ConnectinSkillz', 'initials' => 'OF', 'color' => '#0052cc'],
                            ['name' => 'Christiana Daniels', 'role' => 'Head of Product Management, ConnectinSkillz', 'initials' => 'CD', 'color' => '#7c3aed'],
                            ['name' => 'Shaun Van Niekerk', 'role' => 'Cyber Security Practice Lead, Block Solutions (CISSP)', 'initials' => 'SV', 'color' => '#059669'],
                            ];
                            @endphp

                            @foreach($speakers as $speaker)
                            <div class="flex items-center gap-3">
                                <div class="flex-shrink-0 w-9 h-9 rounded-full flex items-center justify-center text-white text-xs font-extrabold shadow-sm" style="background-color: {{ $speaker['color'] }};">
                                    {{ $speaker['initials'] }}
                                </div>
                                <div>
                                    <div class="text-sm font-bold text-slate-900 leading-tight">{{ $speaker['name'] }}</div>
                                    <div class="text-xs text-slate-500 leading-tight mt-0.5">{{ $speaker['role'] }}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- CTA --}}
                    <button
                        type="button"
                        id="webinar-card-watch-btn"
                        @click="$dispatch('open-recorded-stream')"
                        class="w-full flex items-center justify-center gap-2.5 px-6 py-3.5 rounded-xl bg-[#0052cc] hover:bg-[#003da0] text-white font-bold text-sm transition-all duration-200 shadow-lg shadow-blue-600/25 hover:shadow-blue-600/40 cursor-pointer group/btn">
                        <svg class="w-4 h-4 fill-current flex-shrink-0 transition-transform duration-200 group-hover/btn:scale-110" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                        <span>Watch Now — It&rsquo;s Free</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>