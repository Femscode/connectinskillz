<div
    x-data="{ isVisible: true }"
    x-show="isVisible"
    x-cloak
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-4"
    class="fixed bottom-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-md border-t border-slate-200 shadow-2xl py-3 px-4 sm:px-6"
>
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
        <!-- Text -->
        <p class="text-xs sm:text-sm text-slate-700 text-center sm:text-left leading-normal">
            We use cookies on our website to see how you interact with it. By accepting, you agree to our use of such cookies.{" "}
            <a
                href="#privacy"
                class="text-slate-900 underline font-medium hover:text-[#0052cc]"
            >
                Privacy Policy
            </a>
        </p>

        <!-- Actions -->
        <div class="flex items-center gap-2.5 flex-shrink-0">
            <button
                type="button"
                @click="isVisible = false"
                class="px-4 py-1.5 text-xs font-semibold text-slate-700 bg-white border border-slate-300 rounded hover:bg-slate-50 transition-colors cursor-pointer"
            >
                Settings
            </button>
            <button
                type="button"
                @click="isVisible = false"
                class="px-5 py-1.5 text-xs font-semibold text-white bg-slate-900 rounded hover:bg-slate-800 transition-colors shadow-sm cursor-pointer"
            >
                Accept
            </button>
            <button
                type="button"
                @click="isVisible = false"
                class="p-1 text-slate-400 hover:text-slate-700 cursor-pointer"
                aria-label="Dismiss cookie banner"
            >
                <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
</div>
