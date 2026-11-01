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

<header
    x-data="{
        isScrolled: false,
        mobileMenuOpen: false,
        handleScroll() {
            this.isScrolled = window.scrollY > 20;
        }
    }"
    x-init="handleScroll(); window.addEventListener('scroll', () => handleScroll())"
    :class="isScrolled ? 'bg-white/95 backdrop-blur-md shadow-sm py-3' : 'bg-white py-4 shadow-[0_2px_10px_rgba(0,0,0,0.04)]'"
    class="fixed top-0 left-0 right-0 z-40 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <div class="relative w-20 h-10 flex-shrink-0 transition-transform group-hover:scale-105">
                    <img
                        src="{{ asset('placeholders/cslogo.avif') }}"
                        alt="Connectinskillz Logo"
                        class="w-full h-full object-contain" />
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                @foreach ($navLinks as $link)
                @php
                $isActive = false;
                if (!empty($link['pattern'])) {
                foreach ($link['pattern'] as $pat) {
                if (request()->is($pat)) {
                $isActive = true;
                break;
                }
                }
                }
                @endphp
                <a
                    href="{{ $link['href'] }}"
                    class="text-sm font-semibold transition-colors duration-200 {{ $isActive ? 'text-[#004AAD] border-b-2 border-[#004AAD] pb-0.5' : 'text-slate-600 hover:text-[#004AAD]' }}">
                    {{ $link['label'] }}
                </a>
                @endforeach
            </nav>

            <!-- Action / Newsletter CTA -->
            <div class="hidden lg:flex items-center gap-4">
                <button
                    type="button"
                    @click="isNewsletterOpen = true"
                    class="text-xs font-semibold px-4 py-2 rounded-full border border-[#004AAD] text-[#004AAD] hover:bg-[#004AAD] hover:text-white transition-all duration-200 cursor-pointer">
                    Join Newsletter
                </button>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button
                    type="button"
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="p-2 text-slate-700 hover:text-[#004AAD] focus:outline-none cursor-pointer"
                    aria-label="Toggle menu">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div
        x-show="mobileMenuOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden bg-white border-t border-slate-100 shadow-xl px-4 pt-3 pb-6 space-y-3">
        @foreach ($navLinks as $link)
        @php
        $isActive = false;
        if (!empty($link['pattern'])) {
        foreach ($link['pattern'] as $pat) {
        if (request()->is($pat)) {
        $isActive = true;
        break;
        }
        }
        }
        @endphp
        <a
            href="{{ $link['href'] }}"
            @click="mobileMenuOpen = false"
            class="block py-2 text-base font-medium transition-all duration-150 {{ $isActive ? 'text-[#004AAD] font-bold pl-2' : 'text-slate-700 hover:text-[#004AAD] hover:pl-2' }}">
            {{ $link['label'] }}
        </a>
        @endforeach
        <div class="pt-2">
            <button
                type="button"
                @click="mobileMenuOpen = false; isNewsletterOpen = true"
                class="w-full text-center py-2.5 px-4 rounded-lg bg-[#004AAD] text-white font-medium hover:bg-[#003a8c] transition-colors cursor-pointer">
                Join Newsletter
            </button>
        </div>
    </div>
</header>