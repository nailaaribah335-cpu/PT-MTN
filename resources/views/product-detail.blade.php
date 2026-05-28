<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $product['name'] }} - PT. Mulia Tunggal Nusantara</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}" />
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans bg-slate-50 text-slate-800 relative selection:bg-brand-blue/20 selection:text-brand-blue-dark flex flex-col min-h-screen">

    <!-- Simple Navbar -->
    <nav class="bg-white/90 backdrop-blur-xl shadow-sm border-b border-slate-100 py-3 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <a href="{{ url('/') }}" class="flex items-center gap-3 group focus:outline-none">
                    <div class="w-10 h-10 shrink-0">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-red-500 group-hover:scale-110 transition-transform duration-300">
                            <circle cx="50" cy="50" r="45" fill="none" stroke="currentColor" stroke-width="2.5"/>
                            <ellipse cx="50" cy="50" rx="30" ry="45" fill="none" stroke="currentColor" stroke-width="2"/>
                            <ellipse cx="50" cy="50" rx="15" ry="45" fill="none" stroke="currentColor" stroke-width="1.5"/>
                            <line x1="50" y1="5" x2="50" y2="95" stroke="currentColor" stroke-width="2"/>
                            <line x1="5" y1="50" x2="95" y2="50" stroke="currentColor" stroke-width="2"/>
                            <ellipse cx="50" cy="50" rx="45" ry="30" fill="none" stroke="currentColor" stroke-width="2"/>
                            <ellipse cx="50" cy="50" rx="45" ry="15" fill="none" stroke="currentColor" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-extrabold text-xl tracking-tighter text-slate-900 leading-none">MTN</span>
                        <div class="relative w-24 h-px bg-emerald-500 my-0.5"></div>
                    </div>
                </a>
                <a href="{{ url('/#products') }}" class="text-sm font-semibold text-slate-500 hover:text-brand-blue flex items-center gap-1.5 transition-colors">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    <span class="hidden sm:inline">Kembali ke Katalog</span>
                </a>
            </div>
        </div>
    </nav>

    <main class="grow w-full py-12 sm:py-20 relative">
        <div class="absolute top-0 right-0 w-96 h-96 bg-brand-blue/5 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-brand-yellow/5 rounded-full blur-3xl -z-10"></div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-200/80 overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    
                    <!-- Product Image -->
                    <div class="relative bg-slate-100 h-64 sm:h-96 md:h-full min-h-[300px]">
                        @if($product['is_best_seller'])
                            <div class="absolute top-4 left-4 bg-emerald-500 text-white font-bold text-xs uppercase tracking-wider py-1.5 px-4 rounded-full shadow-lg z-10 flex items-center gap-1.5 animate-pulse-slow">
                                <i data-lucide="star" class="w-3.5 h-3.5 fill-current"></i>
                                Best Seller
                            </div>
                        @endif
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="absolute inset-0 w-full h-full object-cover">
                    </div>

                    <!-- Product Info -->
                    <div class="p-8 sm:p-12 flex flex-col justify-center">
                        @php
                            $catName = collect(config('products.categories'))->firstWhere('id', $product['category'])['name'] ?? 'Kategori Umum';
                        @endphp
                        <div class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-blue uppercase tracking-wider mb-3">
                            <i data-lucide="tag" class="w-3.5 h-3.5"></i>
                            {{ $catName }}
                        </div>
                        
                        <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight mb-4">
                            {{ $product['name'] }}
                        </h1>
                        
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-8">
                            {{ $product['desc'] }}
                        </p>

                        <div class="space-y-6 mb-10">
                            <div>
                                <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-3">Spesifikasi & Keunggulan</h3>
                                <ul class="space-y-2">
                                    @foreach($product['features'] as $feature)
                                        <li class="flex items-start gap-2.5 text-sm text-slate-700 font-medium">
                                            <i data-lucide="check" class="w-4 h-4 text-emerald-500 mt-0.5 shrink-0"></i>
                                            {{ $feature }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="bg-slate-50 border border-slate-200 rounded-xl p-4 flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center shrink-0">
                                    <i data-lucide="package" class="w-5 h-5"></i>
                                </div>
                                <div>
                                    <div class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">Minimal Pemesanan</div>
                                    <div class="font-bold text-slate-800">{{ $product['min_order'] }}</div>
                                </div>
                            </div>
                        </div>

                        @php
                            $waNumber = "6281292153026";
                            $waText = "Halo PT. Mulia Tunggal Nusantara, saya tertarik dengan produk *{$product['name']}*. Boleh minta penawaran harga untuk kebutuhan pengadaan?";
                            $waUrl = "https://wa.me/{$waNumber}?text=" . urlencode($waText);
                        @endphp

                        <div class="mt-auto">
                            <a href="{{ $waUrl }}" target="_blank" rel="noopener noreferrer" class="btn-ripple w-full flex items-center justify-center gap-2.5 bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-4 px-6 rounded-xl shadow-lg shadow-emerald-500/30 transition-all duration-300 text-sm sm:text-base group">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current group-hover:scale-110 transition-transform">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                                </svg>
                                <span>Hubungi via WhatsApp</span>
                            </a>
                            <p class="text-center text-[10px] text-slate-400 mt-3">Hubungi kami untuk mendapatkan penawaran harga terbaik.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
