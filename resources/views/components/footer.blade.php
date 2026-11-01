@php
$navLinks = [
['label' => 'Home', 'href' => url('/'), 'pattern' => ['/', 'homepage']],
['label' => 'About', 'href' => url('/about'), 'pattern' => ['about*']],
['label' => 'Courses', 'href' => url('/courses'), 'pattern' => ['courses*', 'cs-courses*']],
['label' => 'Success Stories', 'href' => url('/success-stories'), 'pattern' => ['success-stories*', 'stories*']],
['label' => 'Our Mentors', 'href' => url('/our-mentors'), 'pattern' => ['our-mentors*', 'mentors*', 'mentorship*']],
['label' => 'Events', 'href' => url('/events'), 'pattern' => ['events*']],
];
@endphp

<footer class="bg-white text-slate-800 pt-16 pb-28 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Top Section: Logo, Copyright & Navigation Links -->
        <div class="flex flex-col md:flex-row items-center justify-between gap-8 pb-12">
            <!-- Logo & Tagline -->
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <div class="flex items-center gap-3 mb-1">
                    <div class="relative w-35 h-35">
                        <img
                            src="{{ asset('placeholders/logo2.avif') }}"
                            alt="ConnectinSkillz"
                            class="w-full h-full object-contain" />
                    </div>

                </div>
                <p class="text-xs text-slate-500 mt-2">
                    &copy; <?php echo date('Y'); ?> by ConnectinSkillz.
                </p>
            </div>

            <!-- Navigation Links -->
            <nav class="flex flex-wrap justify-center items-center gap-6 sm:gap-8 text-sm font-medium text-slate-700">
                @foreach ($navLinks as $item)
                @php
                $isActive = false;
                if (!empty($item['pattern'])) {
                foreach ($item['pattern'] as $pat) {
                if (request()->is($pat)) {
                $isActive = true;
                break;
                }
                }
                }
                @endphp
                <a
                    href="{{ $item['href'] }}"
                    class="hover:text-[#004AAD] transition-colors {{ $isActive ? 'text-slate-900 font-bold border-b-2 border-slate-900 pb-0.5' : 'text-slate-600' }}">
                    {{ $item['label'] }}
                </a>
                @endforeach
            </nav>
        </div>

        <!-- Bottom Section: Contact Info, Privacy Policy & Social Links -->
        <div class="pt-8 border-t border-slate-100 flex flex-col md:flex-row items-center md:items-end justify-between gap-8">
            <!-- Contact Details (Stacked vertically on left) -->
            <div class="flex flex-col items-center md:items-start gap-3.5 text-sm text-[#004AAD] font-medium">
                <!-- Phone -->
                <a
                    href="tel:+4403301332756"
                    class="flex items-center gap-3 hover:underline">
                    <svg class="w-5 h-5 text-[#004AAD]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>+44 (0) 3301332756</span>
                </a>

                <!-- Email -->
                <a
                    href="mailto:info@connectinskillz.org"
                    class="flex items-center gap-3 hover:underline">
                    <svg class="w-5 h-5 text-[#004AAD]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>info@connectinskillz.org</span>
                </a>

                <!-- Website -->
                <a
                    href="https://www.connectinskillz.org"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="flex items-center gap-3 hover:underline">
                    <svg class="w-5 h-5 text-[#004AAD]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                    <span>www.connectinskillz.org</span>
                </a>
            </div>

            <!-- Privacy Policy & Social Icons (Aligned to match screenshot) -->
            <div class="flex items-center gap-6 sm:gap-8">
                <!-- Privacy Policy Box Button -->
                <a
                    href="#privacy"
                    class="px-8 py-2.5 border border-slate-900 text-slate-900 bg-white text-sm font-medium hover:bg-slate-900 hover:text-white transition-colors">
                    Privacy Policy
                </a>

                <!-- Social Icons in Vertical Column -->
                <div class="flex flex-col gap-2.5">
                    <!-- LinkedIn -->
                    <a
                        href="https://linkedin.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="ConnectinSkillz on LinkedIn"
                        class="w-8 h-8 bg-[#0077b5] text-white flex items-center justify-center font-bold text-base hover:opacity-90 transition-opacity rounded-xs shadow-xs">
                        in
                    </a>

                    <!-- Facebook -->
                    <a
                        href="https://facebook.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="ConnectinSkillz on Facebook"
                        class="w-8 h-8 bg-[#1877f2] text-white flex items-center justify-center font-bold text-lg hover:opacity-90 transition-opacity rounded-xs shadow-xs">
                        f
                    </a>

                    <!-- Instagram -->
                    <a
                        href="https://instagram.com"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="ConnectinSkillz on Instagram"
                        class="w-8 h-8 bg-gradient-to-tr from-[#f09433] via-[#dc2743] to-[#bc1888] text-white flex items-center justify-center hover:opacity-90 transition-opacity rounded-xs shadow-xs p-1.5">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-full h-full">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>