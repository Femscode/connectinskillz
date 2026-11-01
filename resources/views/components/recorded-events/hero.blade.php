<section class="relative w-full min-h-[560px] sm:min-h-[640px] md:min-h-[700px] flex items-center justify-center overflow-hidden bg-[#020818]">

    {{-- Animated gradient orbs --}}
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-32 -left-32 w-[500px] h-[500px] rounded-full bg-[#0052cc]/20 blur-[120px] animate-pulse"></div>
        <div class="absolute top-1/2 -right-32 w-[400px] h-[400px] rounded-full bg-[#7c3aed]/15 blur-[100px]" style="animation: pulse 4s ease-in-out infinite 1.5s;"></div>
        <div class="absolute bottom-0 left-1/3 w-[350px] h-[350px] rounded-full bg-[#0052cc]/10 blur-[80px]" style="animation: pulse 5s ease-in-out infinite 0.7s;"></div>

        {{-- Subtle grid overlay --}}
        <div class="absolute inset-0 opacity-[0.04]"
            style="background-image: linear-gradient(rgba(255,255,255,.15) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.15) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>

    {{-- Background image --}}
    <div class="absolute inset-0 z-0">
        <img
            src="{{ asset('images/events/hero-bg.jpg') }}"
            alt=""
            class="w-full h-full object-cover object-center opacity-10" />
        <div class="absolute inset-0 bg-gradient-to-br from-[#020818] via-[#020818]/90 to-[#0c1a40]/80"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pt-28 pb-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">

            {{-- Left: Copy --}}
            <div class="lg:col-span-6 flex flex-col justify-center text-left">



                <h1 class="text-5xl sm:text-6xl md:text-7xl font-black text-white tracking-tight leading-[1.05] mb-6">
                    We&rsquo;ve got<br />
                    <span class="relative inline-block">
                        <span class="bg-gradient-to-r from-[#3b82f6] via-[#60a5fa] to-[#818cf8] bg-clip-text text-transparent">
                            you covered
                        </span>
                    </span>
                </h1>

                <p class="text-base sm:text-lg md:text-xl text-slate-300 font-normal leading-relaxed max-w-lg mb-8">
                    If you missed any of our free Seminars — don&rsquo;t worry. We have them available for you to access anytime, anywhere.
                </p>

                {{-- Stats row --}}
                <div class="flex items-center gap-6 sm:gap-8">
                    <div class="text-center">
                        <div class="text-2xl font-black text-white mb-0.5">3+</div>
                        <div class="text-xs text-slate-400 font-medium tracking-wide">Expert Speakers</div>
                    </div>
                    <div class="w-px h-10 bg-slate-600/60"></div>
                    <div class="text-center">
                        <div class="text-2xl font-black text-white mb-0.5">Free</div>
                        <div class="text-xs text-slate-400 font-medium tracking-wide">Full Access</div>
                    </div>
                    <div class="w-px h-10 bg-slate-600/60"></div>
                    <div class="text-center">
                        <div class="text-2xl font-black text-white mb-0.5">HD</div>
                        <div class="text-xs text-slate-400 font-medium tracking-wide">Video Quality</div>
                    </div>
                </div>
            </div>

            {{-- Right: Video --}}
            <div class="lg:col-span-6">
                <div class="relative group">
                    {{-- Glow ring --}}
                    <div class="absolute -inset-1 bg-gradient-to-r from-[#0052cc]/50 via-[#7c3aed]/40 to-[#0052cc]/50 rounded-3xl blur-md opacity-60 group-hover:opacity-90 transition-opacity duration-700"></div>

                    {{-- Video container --}}
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-white/10 bg-black aspect-video">
                        <video
                            id="hero-video"
                            autoplay
                            muted
                            loop
                            playsinline
                            preload="auto"
                            poster="{{ asset('images/recorded-events/hero-video-frame.jpg') }}"
                            class="w-full h-full object-cover">
                            <source src="https://video.wixstatic.com/video/33e65a_dd978fe95b374001b99fb8432266da73/1080p/mp4/file.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        {{-- Subtle vignette overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent pointer-events-none"></div>

                        {{-- "Autoplay" label --}}
                        <div class="absolute top-3 left-3 flex items-center gap-1.5 bg-black/60 backdrop-blur-sm rounded-full px-3 py-1 pointer-events-none">
                            <span class="w-1.5 h-1.5 rounded-full bg-red-500 animate-pulse"></span>
                            <span class="text-white text-[10px] font-bold uppercase tracking-wider">Playing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>