<footer class="relative bg-slate-900 text-slate-400 py-16 overflow-hidden">
  
  <!-- Mesh overlays -->
  <div class="absolute inset-0 dark-mesh-bg opacity-20"></div>
  <div class="absolute top-0 left-0 w-full h-px bg-slate-800"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-12 text-left">
      
      <!-- Col 1: Identity (5 cols) -->
      <div class="md:col-span-5 space-y-6">
        <div class="flex items-center gap-3">
          <!-- Globe SVG -->
          <div class="relative w-10 h-10 shrink-0">
            <svg viewBox="0 0 100 100" class="w-full h-full text-red-500/80 animate-[spin_40s_linear_infinite]">
              <circle cx="50" cy="50" r="45" fill="none" stroke="currentColor" stroke-width="2.5" />
              <ellipse cx="50" cy="50" rx="30" ry="45" fill="none" stroke="currentColor" stroke-width="2" />
              <ellipse cx="50" cy="50" rx="15" ry="45" fill="none" stroke="currentColor" stroke-width="1.5" />
              <line x1="50" y1="5" x2="50" y2="95" stroke="currentColor" stroke-width="2" />
              <line x1="5" y1="50" x2="95" y2="50" stroke="currentColor" stroke-width="2" />
              <ellipse cx="50" cy="50" rx="45" ry="30" fill="none" stroke="currentColor" stroke-width="2" />
              <ellipse cx="50" cy="50" rx="45" ry="15" fill="none" stroke="currentColor" stroke-width="1.5" />
            </svg>
          </div>
          
          <div class="flex flex-col">
            <span class="font-extrabold text-xl tracking-tighter text-white leading-none">MTN</span>
            <div class="relative w-28 h-px bg-emerald-500 my-0.5"></div>
            <span class="text-[7px] font-bold text-slate-300 tracking-wider leading-none">PT. MULIA TUNGGAL NUSANTARA</span>
          </div>
        </div>

        <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
          Mitra penyedia jasa pengadaan barang dan logistik resmi terpercaya untuk berbagai kebutuhan perkantoran, IT, alat keselamatan kerja, dan furnitur. Berkomitmen menghadirkan produk berkualitas dengan pelayanan purna jual terbaik.
        </p>

        <div class="text-[10px] text-slate-500">
          Pengesahan Kemenkumham: <br />
          <code class="text-slate-400 font-semibold font-mono">No. AHU-0050294.AH.01.11 Tahun 2023</code>
        </div>
      </div>

      <!-- Col 2: Navigation Links (3 cols) -->
      <div class="md:col-span-3 space-y-4" x-data="{
          handleLinkClick(e, href) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
              const offset = 80;
              const bodyRect = document.body.getBoundingClientRect().top;
              const targetRect = target.getBoundingClientRect().top;
              const targetPosition = targetRect - bodyRect;
              const offsetPosition = targetPosition - offset;
              window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
            }
          }
        }">
        <h4 class="text-white font-bold text-sm uppercase tracking-wider">Navigasi Cepat</h4>
        <div class="flex flex-col gap-2.5 text-xs">
          <a href="#home" @click="handleLinkClick($event, '#home')" class="hover:text-white transition-colors">Beranda</a>
          <a href="#about" @click="handleLinkClick($event, '#about')" class="hover:text-white transition-colors">Tentang Kami</a>
          <a href="#legality" @click="handleLinkClick($event, '#legality')" class="hover:text-white transition-colors">Aspek Legalitas</a>
          <a href="#products" @click="handleLinkClick($event, '#products')" class="hover:text-white transition-colors">Katalog Layanan</a>
          <a href="#contact" @click="handleLinkClick($event, '#contact')" class="hover:text-white transition-colors">Hubungi Kontak</a>
        </div>
      </div>

      <!-- Col 3: Sign-Off Representation (4 cols) -->
      <div class="md:col-span-4 space-y-4 border-t md:border-t-0 md:border-l border-slate-800 pt-8 md:pt-0 md:pl-8 flex flex-col justify-between">
        <div class="space-y-2">
          <h4 class="text-white font-bold text-sm uppercase tracking-wider">Hormat Kami</h4>
          <p class="text-[11px] text-slate-500">Pernyataan komitmen dari direksi utama PT. Mulia Tunggal Nusantara</p>
        </div>

        <div class="pt-4 flex items-center justify-between gap-4">
          <div class="space-y-1">
            <span class="font-bold text-slate-200 text-sm block">Lusdiarto</span>
            <span class="text-[10px] text-brand-yellow font-semibold tracking-wider uppercase block">Direktur Utama</span>
          </div>
          
          <!-- Styled signature representation using SVG path -->
          <svg class="w-24 h-8 text-slate-300 opacity-70" viewBox="0 0 100 30" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M10 25 C 20 5, 25 5, 30 20 C 35 30, 40 25, 45 15 C 50 5, 55 10, 60 20 C 65 30, 70 5, 75 10 C 80 15, 82 25, 90 22 C 95 20, 92 10, 95 5" />
          </svg>
        </div>
      </div>

    </div>

    <!-- Bottom copyright notice -->
    <div class="flex flex-col sm:flex-row items-center justify-between mt-16 pt-8 border-t border-slate-800 text-[10px] sm:text-xs text-slate-500">
      <p>© {{ date('Y') }} PT. Mulia Tunggal Nusantara. Hak Cipta Dilindungi Undang-Undang.</p>
      
      <button
        onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="mt-4 sm:mt-0 flex items-center gap-1.5 bg-slate-800 hover:bg-slate-700 text-slate-300 py-1.5 px-3 rounded-lg border border-slate-700 transition-colors focus:outline-none cursor-pointer"
      >
        <span>Kembali Ke Atas</span>
        <i data-lucide="arrow-up" class="w-3 h-3"></i>
      </button>
    </div>
  </div>
</footer>
