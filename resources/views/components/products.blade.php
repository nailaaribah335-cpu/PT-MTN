@php
$categories = [
    ['id' => 'all', 'name' => 'Semua Kategori', 'icon' => null],
    ['id' => 'it', 'name' => 'IT & Komputer', 'icon' => 'laptop'],
    ['id' => 'atk', 'name' => 'Alat Tulis Kantor', 'icon' => 'pen-tool'],
    ['id' => 'safety', 'name' => 'Safety / APD', 'icon' => 'shield-alert'],
    ['id' => 'furniture', 'name' => 'Mebel Kantor', 'icon' => 'armchair'],
];

$productList = [
    // IT Category
    [
        'id' => 'it-1', 'category' => 'it', 'name' => 'Laptop & Komputer Kerja',
        'desc' => 'Pengadaan laptop workstation, PC desktop, dan notebook bisnis bersertifikat resmi.',
        'features' => ['Garansi Resmi Distributor', 'Instalasi & Sistem Operasi', 'Opsi Sewa/Beli Putus'],
        'image' => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?auto=format&fit=crop&w=600&q=80',
    ],
    [
        'id' => 'it-2', 'category' => 'it', 'name' => 'Printer & Mesin Fotokopi',
        'desc' => 'Penyediaan printer laserjet, inkjet, scanner kecepatan tinggi, dan consumables (tinta/toner).',
        'features' => ['Merek Global (Epson, HP, Canon)', 'Paket Perawatan Berkala', 'Toner & Tinta Orisinal'],
        'image' => 'https://images.unsplash.com/photo-1612815154858-60aa4c59eaa6?auto=format&fit=crop&w=600&q=80',
    ],
    [
        'id' => 'it-3', 'category' => 'it', 'name' => 'Infrastruktur Jaringan',
        'desc' => 'Pengadaan router, switch, access point, kabel UTP, rack server, dan perangkat penunjang jaringan.',
        'features' => ['Solusi Enterprise Cisco/Mikrotik', 'Kabel Berstandar Industri', 'Jasa Instalasi Opsional'],
        'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=600&q=80',
    ],
    // ATK Category
    [
        'id' => 'atk-1', 'category' => 'atk', 'name' => 'Kertas & Stationery Dasar',
        'desc' => 'Penyediaan kertas HVS (A4, F4, Q4), pena, pensil, map arsip, binder, dan kebutuhan surat-menyurat.',
        'features' => ['Kertas Gramatur 70g & 80g', 'Grosir Partai Besar', 'Pengiriman Cepat Bekasi-Jakarta'],
        'image' => 'https://images.unsplash.com/photo-1586075010923-2dd4570fb338?auto=format&fit=crop&w=600&q=80',
    ],
    [
        'id' => 'atk-2', 'category' => 'atk', 'name' => 'Organizer & File Archiving',
        'desc' => 'Penyimpanan arsip premium, lemari file mini, kotak arsip ordner, dan separator berkas kantor.',
        'features' => ['Bahan Tahan Lama', 'Berbagai Ukuran Standar', 'Merapikan Tata Kelola Berkas'],
        'image' => 'https://images.unsplash.com/photo-1590402421685-65d8a0c20a8d?auto=format&fit=crop&w=600&q=80',
    ],
    // Safety Category
    [
        'id' => 'safety-1', 'category' => 'safety', 'name' => 'Helm & Rompi Safety',
        'desc' => 'Peralatan keselamatan wajib lapangan berstandar SNI untuk industri konstruksi, gudang, dan logistik.',
        'features' => ['Sertifikasi SNI & CE', 'Rompi Reflektif High-Vis', 'Logo Custom Perusahaan'],
        'image' => 'https://images.unsplash.com/photo-1508962914676-134849a727f0?auto=format&fit=crop&w=600&q=80',
    ],
    [
        'id' => 'safety-2', 'category' => 'safety', 'name' => 'Sepatu & Sarung Tangan Lapangan',
        'desc' => 'Sepatu safety ujung besi (steel toe cap), sarung tangan anti slip, anti panas, dan kacamata safety.',
        'features' => ['Kulit Asli / Heavy Duty', 'Anti Slip Sol Karet tebal', 'Proteksi Maksimal Pekerja'],
        'image' => 'https://images.unsplash.com/photo-1595079676339-1534801ad6cf?auto=format&fit=crop&w=600&q=80',
    ],
    // Furniture Category
    [
        'id' => 'furniture-1', 'category' => 'furniture', 'name' => 'Meja & Kursi Ergonomis',
        'desc' => 'Pengadaan furnitur kerja pendukung produktivitas dengan desain ergonomis modern.',
        'features' => ['Kursi Mesh Adjustable', 'Bahan Kokoh & Garansi Struktur', 'Desain Minimalis Elegan'],
        'image' => 'https://images.unsplash.com/photo-1524758631624-e2822e304c36?auto=format&fit=crop&w=600&q=80',
    ],
    [
        'id' => 'furniture-2', 'category' => 'furniture', 'name' => 'Partisi & Workstation Set',
        'desc' => 'Penyusunan tata ruang kantor bersekat untuk pembagian meja kerja staf secara efisien.',
        'features' => ['Kustomisasi Ukuran Ruangan', 'Instalasi Jalur Kabel Rapih', 'Peredam Suara Ringan'],
        'image' => 'https://images.unsplash.com/photo-1532372320978-9b4d7a92b24d?auto=format&fit=crop&w=600&q=80',
    ],
];
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
              ? 'bg-brand-blue border-brand-blue text-white shadow-lg shadow-brand-blue/20 scale-105' 
              : 'bg-white border-slate-200 text-slate-600 hover:border-slate-350 hover:bg-slate-50 hover:scale-[1.02]'"
            class="flex items-center gap-2 py-2.5 px-5 rounded-full text-xs sm:text-sm font-semibold transition-all duration-300 border cursor-pointer"
          >
            @if($cat['icon'])
              <i data-lucide="{{ $cat['icon'] }}" class="w-4 h-4"></i>
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
        <div x-show="activeCategory === 'all' || activeCategory === '{{ $prod['category'] }}'" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             class="flex">
          <x-scroll-reveal 
            variant="fade-up"
            delay="{{ ($idx % 3) * 100 }}"
            class="flex w-full"
          >
            <div class="bg-white rounded-2xl overflow-hidden border border-slate-200/85 shadow-sm hover:shadow-2xl hover:border-brand-blue/30 transition-all duration-300 flex flex-col group h-full w-full grad-border-card">
              <!-- Product Image Frame -->
              <div class="relative aspect-[16/10] overflow-hidden bg-slate-100">
                <img 
                  src="{{ $prod['image'] }}" 
                  alt="{{ $prod['name'] }}"
                  class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                  loading="lazy"
                />
                <div class="absolute inset-0 bg-slate-900/10 group-hover:bg-slate-900/0 transition-colors"></div>
                <span class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm border border-slate-150 py-1 px-3 rounded-full text-[10px] font-bold text-brand-blue uppercase tracking-wider shadow-sm">
                  {{ $catName }}
                </span>
              </div>

              <!-- Product Specs -->
              <div class="p-6 flex flex-col justify-between grow text-left">
                <div class="space-y-3">
                  <h4 class="font-bold text-slate-900 text-lg group-hover:text-brand-blue transition-colors leading-snug">
                    {{ $prod['name'] }}
                  </h4>
                  <p class="text-xs text-slate-500 leading-relaxed">
                    {{ $prod['desc'] }}
                  </p>
                  
                  <!-- Bullet features list -->
                  <div class="pt-3 border-t border-slate-100 space-y-2">
                    @foreach($prod['features'] as $f)
                      <div class="flex items-start gap-2 text-xs text-slate-600">
                        <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-emerald-500 mt-0.5 shrink-0"></i>
                        <span>{{ $f }}</span>
                      </div>
                    @endforeach
                  </div>
                </div>

                <div class="pt-6 mt-auto">
                  <button
                    @click="handleInquiry('{{ $prod['name'] }}')"
                    class="w-full flex items-center justify-center gap-2 bg-slate-100 hover:bg-brand-blue hover:text-white text-slate-700 font-semibold py-2.5 px-4 rounded-xl transition-all duration-300 text-xs border border-slate-200 group-hover:border-transparent cursor-pointer"
                  >
                    <span>Minta Penawaran Harga</span>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
                  </button>
                </div>
              </div>
            </div>
          </x-scroll-reveal>
        </div>
      @endforeach
    </div>

  </div>
</section>
