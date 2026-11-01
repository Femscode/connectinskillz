<div
    x-data="{
        isOpen: false,
        videoEl: null,
        init() {
            this.videoEl = this.$refs.modalVideo;
        },
        open() {
            this.isOpen = true;
            this.$nextTick(() => {
                if (this.videoEl) {
                    this.videoEl.currentTime = 0;
                    this.videoEl.play().catch(() => {});
                }
            });
        },
        close() {
            this.isOpen = false;
            if (this.videoEl) {
                this.videoEl.pause();
                this.videoEl.currentTime = 0;
            }
        }
    }"
    @open-recorded-stream.window="open()"
    @keydown.escape.window="close()">

    {{-- Backdrop --}}
    <div
        x-show="isOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/85 backdrop-blur-md">

        {{-- Modal panel --}}
        <div
            x-show="isOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95 translate-y-4"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-4"
            @click.outside="close()"
            class="relative w-full max-w-4xl bg-[#0e1626] rounded-3xl shadow-[0_32px_80px_-12px_rgba(0,0,0,0.7)] overflow-hidden border border-white/8">

            {{-- Header --}}
            <div class="flex items-center justify-between px-5 py-3.5 bg-white/5 border-b border-white/8">
                <div class="flex items-center gap-3">
                    <span class="flex h-2 w-2 relative">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                    </span>
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-slate-400">
                        Online Webinar Replay &bull; 1080p HD
                    </span>
                </div>
                <button
                    type="button"
                    @click="close()"
                    class="flex items-center justify-center w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 text-white/60 hover:text-white transition-all duration-200 cursor-pointer text-sm font-bold">
                    ✕
                </button>
            </div>

            {{-- Video Player --}}
            <div class="relative aspect-video w-full bg-black overflow-hidden">
                <video
                    x-ref="modalVideo"
                    controls
                    playsinline
                    preload="metadata"
                    poster="{{ asset('images/recorded-events/webinar-video-frame.jpg') }}"
                    class="w-full h-full object-cover">
                    <source src="https://video.wixstatic.com/video/33e65a_f7b3f9e9ba874a189eafc49d735ffa8c/720p/mp4/file.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            {{-- Content Details --}}
            <div class="p-6 sm:p-8">
                <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-5 mb-7">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-[0.16em] text-blue-400 block mb-1.5">
                            Recorded Career Seminar
                        </span>
                        <h3 class="text-xl sm:text-2xl font-extrabold text-white leading-snug">
                            Free Career Talk: How to Secure A High Paying Job in the Digital Space
                        </h3>
                    </div>

                    <a
                        href="{{ url('/workshop') }}"
                        class="flex-shrink-0 inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-[#0052cc] hover:bg-[#003da0] text-white text-xs font-bold transition-all duration-200 shadow-lg shadow-blue-600/30 hover:shadow-blue-600/50 whitespace-nowrap self-start sm:mt-1">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/></svg>
                        Join Next Live Workshop
                    </a>
                </div>

                {{-- Speaker highlights --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    @php
                        $modalSpeakers = [
                            ['name' => 'Olayinka Fatogun', 'tag' => 'Cyber Security & Governance', 'desc' => 'Information governance, GDPR, cyber security readiness, and digital enterprise expectations.', 'color' => '#0052cc', 'initials' => 'OF'],
                            ['name' => 'Christiana Daniels', 'tag' => 'Product Management', 'desc' => 'Product management principles, Agile execution, and positioning your career for tech leadership.', 'color' => '#7c3aed', 'initials' => 'CD'],
                            ['name' => 'Shaun Van Niekerk', 'tag' => 'Cyber Security (CISSP)', 'desc' => 'Cyber security practice, industry certifications, and landing international remote roles.', 'color' => '#059669', 'initials' => 'SV'],
                        ];
                    @endphp

                    @foreach($modalSpeakers as $s)
                    <div class="p-4 rounded-2xl bg-white/5 border border-white/8 hover:bg-white/8 transition-colors duration-200">
                        <div class="flex items-center gap-2.5 mb-2.5">
                            <div class="w-7 h-7 rounded-full flex items-center justify-center text-white text-[10px] font-extrabold flex-shrink-0" style="background-color: {{ $s['color'] }};">
                                {{ $s['initials'] }}
                            </div>
                            <div>
                                <div class="text-xs font-bold text-white leading-tight">{{ $s['name'] }}</div>
                                <div class="text-[10px] font-semibold leading-tight mt-0.5" style="color: {{ $s['color'] }};">{{ $s['tag'] }}</div>
                            </div>
                        </div>
                        <p class="text-[11px] text-slate-400 leading-relaxed">{{ $s['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>