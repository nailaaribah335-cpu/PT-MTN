@php
$categories = config('products.categories');
$productList = config('products.items');
@endphp

<section id="products" class="relative py-20 bg-slate-50 overflow-hidden" x-data="{
    activeCategory: 'all',
    handleInquiry(productName) {
        const formMsg = document.getElementById('contact-message');
        const formProduct = document.getElementById('contact-subject');
        
        if (formProduct) formProduct.value = `Permintaan Penawaran: ${productName}`;
        if (formMsg) formMsg.value = `Halo PT. Mulia Tunggal Nusantara, kami tertarik dengan produk ` + productName + ` dan ingin meminta daftar harga serta spesifikasi lengkap untuk pengadaan kantor kami. Terima kasih.`;
        
        const target = document.querySelector('#contact');
        if (target) {
            const offset = 80;
            const bodyRect = document.body.getBoundingClientRect().top;
            const targetRect = target.getBoundingClientRect().top;
            const targetPosition = targetRect - bodyRect;
            const offsetPosition = targetPosition - offset;
            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    }
}">
  
  <!-- Decorative vectors -->
  <div class="absolute top-0 left-0 w-full h-px bg-slate-200"></div>
  <div class="absolute top-1/3 left-0 w-80 h-80 bg-brand-yellow/5 rounded-full blur-3xl -z-10 animate-blob-3"></div>
  <div class="absolute bottom-0 right-0 w-96 h-96 bg-brand-blue/5 rounded-full blur-3xl -z-10 animate-blob-1"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
    
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto">
      <x-scroll-reveal variant="fade-down" class="space-y-4">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-blue/10 text-brand-blue text-xs font-semibold tracking-wider uppercase">
          Katalog Layanan
        </div>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
          Produk & Layanan Pengadaan
        </h2>
        <p class="text-slate-500 text-sm">
          Kami menyediakan solusi pengadaan yang lengkap dan berkualitas tinggi dengan dukungan penuh (full support) mulai dari pemilihan produk hingga pengiriman barang di tempat Anda.
        </p>
      </x-scroll-reveal>
    </div>

    <!-- Categories Tab Selector -->
    <x-scroll-reveal variant="fade-up" delay="200" class="w-full">
      <div class="flex flex-wrap items-center justify-center gap-2 pb-4">
        @foreach($categories as $cat)
          <button
            @click="activeCategory = '{{ $cat['id'] }}'"
            :class="activeCategory === '{{ $cat['id'] }}' 
              ? (activeCategory === 'best-seller' ? 'bg-emerald-500 border-emerald-500 text-white shadow-lg shadow-emerald-500/30 scale-105' : 'bg-brand-blue border-brand-blue text-white shadow-lg shadow-brand-blue/20 scale-105') 
              : (activeCategory === 'best-seller' ? 'bg-white border-emerald-200 text-emerald-600 hover:border-emerald-300 hover:bg-emerald-50 hover:scale-[1.02]' : 'bg-white border-slate-200 text-slate-600 hover:border-slate-350 hover:bg-slate-50 hover:scale-[1.02]')"
            class="flex items-center gap-2 py-2.5 px-5 rounded-full text-xs sm:text-sm font-semibold transition-all duration-300 border cursor-pointer"
          >
            @if($cat['icon'])
              <i data-lucide="{{ $cat['icon'] }}" class="w-4 h-4 {{ $cat['id'] === 'best-seller' && $cat['id'] !== activeCategory ? 'text-emerald-500' : '' }}"></i>
            @endif
            <span>{{ $cat['name'] }}</span>
          </button>
        @endforeach
      </div>
    </x-scroll-reveal>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 pt-4">
      @foreach($productList as $idx => $prod)
        @php
            // Find category name for the badge
            $catName = '';
            foreach($categories as $c) {
                if($c['id'] == $prod['category']) {
                    $catName = $c['name'];
                    break;
                }
            }
        @endphp
        <div x-show="activeCategory === 'all' || (activeCategory === 'best-seller' && {{ $prod['is_best_seller'] ? 'true' : 'false' }}) || activeCategory === '{{ $prod['category'] }}'" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             class="flex">
          <x-scroll-reveal 
            variant="fade-up"
            delay="{{ ($idx % 3) * 100 }}"
            class="flex w-full"
          >
            <a href="{{ route('product.detail', $prod['id']) }}" class="block w-full h-full">
                <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/85 shadow-sm hover:shadow-2xl hover:border-brand-blue/30 transition-all duration-300 flex flex-col group h-full w-full grad-border-card relative">
                  
                  @if($prod['is_best_seller'])
                    <div class="absolute -right-12 top-6 rotate-45 bg-emerald-500 text-white font-bold text-[10px] uppercase tracking-wider py-1.5 w-40 text-center shadow-md z-20 best-seller-badge">
                        Best Seller
                    </div>
                  @endif

                  <!-- Product Image Frame -->
                  <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                    <img 
                      src="{{ $prod['image'] }}" 
                      alt="{{ $prod['name'] }}"
                      class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                      loading="lazy"
                    />
                    <div class="absolute inset-0 bg-slate-900/10 group-hover:bg-slate-900/0 transition-colors"></div>
                    <span class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm border border-slate-150 py-1 px-3 rounded-full text-[10px] font-bold text-brand-blue uppercase tracking-wider shadow-sm z-10">
                      {{ $catName }}
                    </span>
                  </div>

                  <!-- Product Specs -->
                  <div class="p-6 flex flex-col justify-between grow text-left">
                    <div class="space-y-3">
                      <h4 class="font-bold text-slate-900 text-lg group-hover:text-brand-blue transition-colors leading-snug">
                        {{ $prod['name'] }}
                      </h4>
                      <p class="text-xs text-slate-500 leading-relaxed line-clamp-2">
                        {{ $prod['desc'] }}
                      </p>
                      
                      <!-- Bullet features list -->
                      <div class="pt-3 border-t border-slate-100 space-y-2">
                        @foreach(array_slice($prod['features'], 0, 2) as $f)
                          <div class="flex items-start gap-2 text-xs text-slate-600">
                            <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-emerald-500 mt-0.5 shrink-0"></i>
                            <span class="line-clamp-1">{{ $f }}</span>
                          </div>
                        @endforeach
                      </div>
                    </div>

                    <div class="pt-6 mt-auto">
                      <div class="w-full flex items-center justify-center gap-2 bg-slate-100 hover:bg-brand-blue hover:text-white text-slate-700 font-semibold py-2.5 px-4 rounded-xl transition-all duration-300 text-xs border border-slate-200 group-hover:border-transparent cursor-pointer relative overflow-hidden btn-ripple">
                        <span>Lihat Detail Produk</span>
                        <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                      </div>
                    </div>
                  </div>
                </div>
            </a>
          </x-scroll-reveal>
        </div>
      @endforeach
    </div>

  </div>
</section>
