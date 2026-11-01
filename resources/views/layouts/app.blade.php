<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Connectinskillz | Discover Your Skills with our LMS')</title>
    <meta name="description" content="@yield('description', 'With our LMS we make your success attainable through a well structured learning pathway and training from the best SME\'s in your desired field.')">

    <link rel="icon" href="{{ asset('placeholders/cslogo.avif') }}" type="image/svg+xml">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    x-data="{ 
        isNewsletterOpen: false,
        init() {
            // Check if this device has already subscribed to the mailing list
            const hasSubscribed = localStorage.getItem('newsletter_subscribed') === 'true' || 
                                  document.cookie.split('; ').some(row => row.startsWith('newsletter_subscribed=true'));
            
            // Only auto-trigger the modal if the device hasn't subscribed
            if (!hasSubscribed) {
                setTimeout(() => {
                    const stillNotSubscribed = localStorage.getItem('newsletter_subscribed') !== 'true' && 
                                              !document.cookie.split('; ').some(row => row.startsWith('newsletter_subscribed=true'));
                    if (stillNotSubscribed) {
                        this.isNewsletterOpen = true;
                    }
                }, 4500);
            }
        }
    }"
    @open-newsletter.window="isNewsletterOpen = true"
    class="min-h-screen bg-white text-slate-800 antialiased selection:bg-blue-100 selection:text-[#004AAD]">
    <!-- Global Header -->
    <x-header />

    <!-- Main Page Content -->
    <main class="min-h-screen flex flex-col bg-white">
        @yield('content')
    </main>

    <!-- Global Footer -->
    <x-footer />

    <!-- Popups & Banners -->
    <x-mailing-list-modal />
    <x-cookie-banner />
</body>

</html>