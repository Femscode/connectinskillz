<div
    x-show="isNewsletterOpen"
    x-cloak
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    @keydown.escape.window="isNewsletterOpen = false"
    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm">
    <div
        x-data="{
            email: '',
            loading: false,
            submitted: false,
            errorMessage: '',
            async handleSubmit() {
                if (!this.email || !this.email.trim()) {
                    return;
                }
                this.loading = true;
                this.errorMessage = '';

                try {
                    const response = await fetch('{{ route('mailing-list.store') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({ email: this.email.trim() })
                    });

                    const data = await response.json();

                    if (response.ok && data.success) {
                        this.submitted = true;
                        // Persistently mark device as subscribed so the modal stops appearing on page loads
                        try {
                            localStorage.setItem('newsletter_subscribed', 'true');
                            document.cookie = 'newsletter_subscribed=true; path=/; max-age=31536000; SameSite=Lax';
                        } catch (e) {
                            console.warn('Storage error:', e);
                        }

                        setTimeout(() => {
                            this.submitted = false;
                            this.email = '';
                            isNewsletterOpen = false;
                        }, 2200);
                    } else {
                        this.errorMessage = data.message || 'Something went wrong. Please check your email and try again.';
                    }
                } catch (err) {
                    this.errorMessage = 'Network error. Please try again later.';
                } finally {
                    this.loading = false;
                }
            }
        }"
        x-show="isNewsletterOpen"
        x-transition:enter="transition ease-out duration-250"
        x-transition:enter-start="opacity-0 scale-95 translate-y-2"
        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
        x-transition:leave-end="opacity-0 scale-95 translate-y-2"
        @click.outside="isNewsletterOpen = false"
        class="relative w-full max-w-lg bg-white rounded-2xl shadow-2xl p-8 sm:p-10 border border-slate-100 text-center">
        <!-- Close Button -->
        <button
            type="button"
            @click="isNewsletterOpen = false"
            class="absolute top-5 right-5 text-slate-400 hover:text-slate-700 p-1 rounded-full hover:bg-slate-100 transition-colors cursor-pointer"
            aria-label="Close modal">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Center Logo Icon -->
        <div class="mx-auto w-14 h-14 relative mb-6">
            <img
                src="{{ asset('placeholders/cslogo.avif') }}"
                alt="Connectinskillz"
                class="w-full h-full object-contain" />
        </div>

        <!-- Modal Heading -->
        <h3 class="text-2xl sm:text-3xl font-extrabold text-[#004AAD] tracking-tight mb-3">
            Join our mailing list
        </h3>

        <!-- Subheading -->
        <p class="text-sm sm:text-base text-slate-600 leading-relaxed mb-8 max-w-md mx-auto">
            Sign up receive email updates on the new products , announcement , free coupons, special promotion and more
        </p>

        <!-- Form / Confirmation -->
        <div x-show="submitted" x-cloak class="flex items-center justify-center gap-2 py-4 text-emerald-700 font-semibold bg-emerald-50 rounded-xl border border-emerald-200">
            <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <span>Thank you for subscribing!</span>
        </div>

        <!-- Error Alert -->
        <div x-show="errorMessage && !submitted" x-cloak class="mb-4 text-xs font-medium text-red-600 bg-red-50 p-2.5 rounded-lg border border-red-200 text-left">
            <span x-text="errorMessage"></span>
        </div>

        <form x-show="!submitted" @submit.prevent="handleSubmit" class="flex flex-col sm:flex-row items-center gap-3">
            <input
                type="email"
                required
                x-model="email"
                :disabled="loading"
                placeholder="Email Address"
                class="w-full flex-1 px-4 py-3 border-b-2 sm:border-b-2 sm:border-t-0 sm:border-x-0 border-slate-300 focus:border-[#004AAD] focus:outline-none text-slate-800 placeholder-slate-400 text-sm transition-colors disabled:opacity-50" />
            <button
                type="submit"
                :disabled="loading"
                class="w-full sm:w-auto px-8 py-3 bg-[#004AAD] hover:bg-[#003a8c] text-white font-bold rounded text-sm transition-all shadow-md shadow-blue-900/20 active:scale-95 cursor-pointer disabled:opacity-60 flex items-center justify-center gap-2">
                <span x-show="!loading">Submit</span>
                <span x-show="loading" x-cloak class="inline-flex items-center gap-2">
                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Submitting...
                </span>
            </button>
        </form>
    </div>
</div>