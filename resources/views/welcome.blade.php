<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. Mulia Tunggal Nusantara</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}" />
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans bg-slate-50 text-slate-800 relative selection:bg-brand-blue/20 selection:text-brand-blue-dark">

    <div class="min-h-screen flex flex-col w-full relative">
        <!-- Navigation -->
        <x-navbar />

        <!-- Main Content Layout -->
        <main class="grow w-full">
            <x-hero />
            <x-about />
            <x-legality />
            <x-products />
            <x-contact />
        </main>

        <!-- Footer Section -->
        <x-footer />

        <!-- Scroll to Top Floating Button -->
        <div x-data="{ showScrollTop: false }"
             @scroll.window="showScrollTop = window.scrollY > 400">
            <button
                @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                class="fixed bottom-6 right-6 z-40 bg-brand-blue hover:bg-brand-blue-dark text-white p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-brand-blue/40 cursor-pointer"
                :class="showScrollTop ? 'translate-y-0 opacity-100 scale-100' : 'translate-y-10 opacity-0 scale-75 pointer-events-none'"
                aria-label="Scroll to top"
            >
                <i data-lucide="arrow-up" class="w-5 h-5"></i>
            </button>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Global Scroll Reveal Observer
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

            document.querySelectorAll('.scroll-reveal').forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>
