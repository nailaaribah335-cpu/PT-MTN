<section id="home" class="relative min-h-screen pt-28 pb-16 flex items-center mesh-bg overflow-hidden" x-data="{ showLetter: false }">
  
  <!-- Premium Floating Blobs in the Background -->
  <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand-blue/10 rounded-full blur-3xl -z-10 animate-blob-1"></div>
  <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-brand-yellow/10 rounded-full blur-3xl -z-10 animate-blob-2"></div>
  <div class="absolute top-1/3 right-10 w-80 h-80 bg-emerald-500/5 rounded-full blur-3xl -z-10 animate-blob-3"></div>
  
  <!-- Interactive grid elements -->
  <div class="absolute top-1/4 left-5 w-24 h-24 dot-pattern opacity-40 -z-10"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      
      <!-- Text Left Column -->
      <div class="lg:col-span-6 text-left">
        <x-scroll-reveal variant="fade-right" class="space-y-6">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-blue/10 border border-brand-blue/20 text-brand-blue text-xs font-semibold tracking-wide animate-pulse">
            <span class="w-2 h-2 rounded-full bg-brand-blue animate-ping"></span>
            Penyedia Pengadaan & Solusi Bisnis
          </div>

          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 leading-tight">
            Inovasi & Teknologi <br />
            <span class="text-brand-blue relative">
              Unggul & Kompetitif
              <span class="absolute bottom-1 left-0 w-full h-2 bg-brand-yellow/30 -z-10"></span>
            </span>
          </h1>

          <p class="text-lg text-slate-600 max-w-xl leading-relaxed">
            <strong>PT. Mulia Tunggal Nusantara</strong> hadir sebagai mitra strategis tepercaya untuk memenuhi segala kebutuhan operasional kantor, instansi, dan industri berskala kecil hingga besar dengan layanan prima dan produk berkualitas tinggi.
          </p>

          <!-- Quick trust metrics -->
          <div class="grid grid-cols-3 gap-4 py-4 border-y border-slate-200/80">
            <div class="transform hover:scale-105 transition-transform duration-300">
              <div class="text-2xl font-bold text-slate-900">Bekasi</div>
              <div class="text-xs text-slate-500 font-medium">Pusat Operasional</div>
            </div>
            <div class="transform hover:scale-105 transition-transform duration-300">
              <div class="text-2xl font-bold text-slate-900">Full Support</div>
              <div class="text-xs text-slate-500 font-medium">Layanan Pengadaan</div>
            </div>
            <div class="transform hover:scale-105 transition-transform duration-300">
              <div class="text-2xl font-bold text-slate-900">Resmi</div>
              <div class="text-xs text-slate-500 font-medium">Persetujuan Kemenkumham</div>
            </div>
          </div>

          <div class="flex flex-wrap gap-4 pt-2">
            <button onclick="document.querySelector('#products').scrollIntoView({behavior:'smooth'})" class="flex items-center gap-2 bg-brand-blue hover:bg-brand-blue-dark text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl hover:shadow-brand-blue/20 transition-all duration-300 transform hover:-translate-y-0.5 group">
              <span>Lihat Produk & Layanan</span>
              <i data-lucide="arrow-right" class="w-[18px] h-[18px] group-hover:translate-x-1 transition-transform"></i>
            </button>
            
            <button onclick="document.querySelector('#contact').scrollIntoView({behavior:'smooth'})" class="flex items-center gap-2 bg-white hover:bg-slate-50 text-slate-800 font-semibold py-3 px-6 rounded-xl shadow border border-slate-200 transition-all duration-300 hover:shadow-md transform hover:-translate-y-0.5">
              Hubungi Kontak
            </button>
          </div>
          
          <div class="flex items-center gap-2 text-xs text-slate-500">
            <i data-lucide="check-circle-2" class="w-3.5 h-3.5 text-emerald-500"></i>
            <span>Berdasarkan Keputusan Menteri Hukum & HAM No. AHU-0050294.AH.01.11</span>
          </div>
        </x-scroll-reveal>
      </div>

      <!-- Interactive Document / Cover Right Column -->
      <div class="lg:col-span-6 flex justify-center mt-12 lg:mt-0 w-full">
        <x-scroll-reveal variant="fade-left" delay="200" class="w-full max-w-[85%] sm:max-w-full lg:max-w-[450px]">
          <div class="relative w-full aspect-[3/4] sm:aspect-[4/5] bg-white rounded-2xl sm:rounded-3xl shadow-2xl overflow-hidden border border-slate-100 group transition-all duration-500 hover:shadow-brand-blue/5">
            
            <!-- Cover Face -->
            <div class="absolute inset-0 z-20 flex flex-col justify-between p-6 sm:p-8 bg-white transition-all duration-700 ease-in-out"
                 :class="showLetter ? 'transform -translate-y-full opacity-0 pointer-events-none' : 'translate-y-0 opacity-100'">
              <!-- Visual Header Grid & Blocks -->
              <div class="flex justify-between items-start">
                <div class="w-12 h-12 sm:w-16 sm:h-16 dot-pattern opacity-60"></div>
                <div class="w-16 h-16 sm:w-24 sm:h-24 bg-brand-blue rounded-bl-2xl sm:rounded-bl-3xl -mr-6 sm:-mr-8 -mt-6 sm:-mt-8 shadow-inner"></div>
              </div>

              <!-- Company Logo and Centerpiece -->
              <div class="flex flex-col items-center justify-center grow py-4 sm:py-8 text-center">
                <!-- Red Globe Logo -->
                <div class="relative w-20 h-20 sm:w-28 sm:h-28 mb-3 sm:mb-4 transform group-hover:scale-105 transition-transform duration-500">
                  <svg viewBox="0 0 100 100" class="w-full h-full text-red-500 animate-[spin_50s_linear_infinite]">
                    <circle cx="50" cy="50" r="45" fill="none" stroke="currentColor" stroke-width="2.5" />
                    <ellipse cx="50" cy="50" rx="30" ry="45" fill="none" stroke="currentColor" stroke-width="2" />
                    <ellipse cx="50" cy="50" rx="15" ry="45" fill="none" stroke="currentColor" stroke-width="1.5" />
                    <line x1="50" y1="5" x2="50" y2="95" stroke="currentColor" stroke-width="2" />
                    <line x1="5" y1="50" x2="95" y2="50" stroke="currentColor" stroke-width="2" />
                    <ellipse cx="50" cy="50" rx="45" ry="30" fill="none" stroke="currentColor" stroke-width="2" />
                    <ellipse cx="50" cy="50" rx="45" ry="15" fill="none" stroke="currentColor" stroke-width="1.5" />
                  </svg>
                </div>
                
                <h2 class="text-4xl sm:text-5xl font-black tracking-tighter text-slate-900 leading-none">MTN</h2>
                <div class="relative w-48 sm:w-64 h-1 bg-emerald-500 my-2">
                  <div class="absolute -left-1.5 -top-1 w-2.5 h-2.5 rounded-full bg-emerald-500"></div>
                  <div class="absolute -right-1.5 -top-1 w-2.5 h-2.5 rounded-full bg-emerald-500"></div>
                </div>
                <h3 class="text-[10px] sm:text-xs font-bold tracking-widest text-slate-800">PT. MULIA TUNGGAL NUSANTARA</h3>
              </div>

              <!-- Bottom Cover Section -->
              <div class="relative border-t border-slate-100 pt-4 sm:pt-6">
                <!-- Background Facade Clip -->
                <div class="absolute right-0 bottom-0 w-24 h-12 sm:w-32 sm:h-16 bg-brand-yellow rounded-tl-2xl sm:rounded-tl-3xl opacity-80 -mr-6 sm:-mr-8 -mb-6 sm:-mb-8 z-0"></div>
                <div class="absolute right-4 bottom-0 w-8 h-8 sm:w-12 sm:h-12 dot-pattern opacity-40 -mb-4 sm:-mb-8"></div>

                <div class="relative z-10 text-left">
                  <div class="text-xs sm:text-sm font-semibold text-slate-400 uppercase tracking-widest">Company Profile</div>
                  <div class="text-lg sm:text-xl font-bold text-slate-800 mt-1">2026/2027 Edition</div>
                  
                  <button @click="showLetter = true" class="mt-3 sm:mt-4 flex items-center gap-1.5 sm:gap-2 bg-slate-900 hover:bg-brand-blue text-white font-semibold py-2 sm:py-2.5 px-3 sm:px-4 rounded-lg sm:rounded-xl shadow-md transition-all duration-300 text-[11px] sm:text-xs cursor-pointer transform hover:scale-[1.03]">
                    <i data-lucide="file-text" class="w-3.5 h-3.5 sm:w-4 sm:h-4"></i>
                    <span>Buka Surat Pengantar</span>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5 sm:w-4 sm:h-4"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- Inside Letter Face -->
            <div class="absolute inset-0 z-10 flex flex-col p-4 sm:p-8 bg-white transition-all duration-700 ease-in-out"
                 :class="showLetter ? 'translate-y-0 opacity-100' : 'transform translate-y-full opacity-0 pointer-events-none'">
              <!-- Mini Header / Back Button -->
              <div class="flex justify-between items-center pb-3 sm:pb-4 border-b border-slate-100">
                <span class="text-[10px] sm:text-xs font-bold text-brand-blue uppercase tracking-wider">Surat Pengantar Direksi</span>
                <button @click="showLetter = false" class="text-[10px] sm:text-xs font-semibold text-slate-500 hover:text-brand-blue py-1 px-2 sm:px-2.5 rounded bg-slate-100 hover:bg-slate-200/80 transition-colors cursor-pointer">
                  Tutup Surat
                </button>
              </div>

              <!-- Letter Content -->
              <div class="grow overflow-y-auto pr-2 py-3 sm:py-4 text-[10px] sm:text-xs lg:text-sm text-slate-700 space-y-2.5 sm:space-y-4 text-left leading-relaxed">
                
                <!-- Letter Metadata -->
                <div class="grid grid-cols-2 gap-2 text-slate-500 font-medium text-[9px] sm:text-[11px] lg:text-xs">
                  <div>
                    <p>Nomor : 001/MTN/CP/2023</p>
                    <p>Lampiran : 1 Berkas Company Profile</p>
                    <p>Perihal : Perkenalan & Kerja Sama</p>
                  </div>
                  <div class="text-right">
                    <p>Kepada Yth,</p>
                    <p class="font-bold text-slate-800">Bapak/Ibu Pimpinan</p>
                    <p>Perusahaan / Instansi Di - Tempat</p>
                  </div>
                </div>

                <p class="font-semibold text-slate-900 border-t border-slate-100 pt-2 text-[10px] sm:text-[11px] lg:text-xs">
                  Dengan Hormat,
                </p>

                <p>
                  Puji dan syukur kita panjatkan kepada Tuhan Yang Maha Esa. Karena lindungan dan hidayahnya kita bisa melakukan berbagai inovasi dan teknologi untuk mencapai keunggulan kompetitif di instansi/perusahaan Bapak/Ibu pimpinan instansi/perusahaan.
                </p>
                
                <p>
                  Bapak/Ibu pimpinan instansi/perusahaan yang telah memberikan kesempatan untuk kami memperkenalkan diri melalui Company Profile PT. Mulia Tunggal Nusantara ini.
                </p>
                
                <p>
                  Besar harapan kami untuk dapat membantu dan berkontribusi dalam inovasi dan teknologi untuk mendukung proses operasional dari instansi/perusahaan Bapak/Ibu pimpin.
                </p>
                
                <p>
                  Kami memberikan layanan full support dalam hal pengadaan, sebagai bahan pertimbangan Bapak/Ibu pimpinan dapat mempelajari kompetensi dan pengalaman kami melalui Company Profile ini.
                </p>
                
                <p>
                  Demikian Company Profile ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih.
                </p>

                <!-- Sign-off section -->
                <div class="pt-2 sm:pt-4 flex justify-between items-end border-t border-slate-100 mt-2 sm:mt-auto">
                  <div class="w-8 h-8 sm:w-12 sm:h-12 dot-pattern opacity-30"></div>
                  <div class="text-right">
                    <p class="text-[9px] sm:text-[11px] lg:text-xs font-medium text-slate-500">Hormat kami,</p>
                    
                    <!-- Signature stamp mock representation -->
                    <div class="relative py-1 sm:py-2 pr-2 sm:pr-4 flex items-center justify-end">
                      <div class="absolute right-4 sm:right-8 w-8 h-8 sm:w-12 sm:h-12 border-2 border-red-500/30 rounded-full flex items-center justify-center text-red-500/30 rotate-12 z-0">
                        <span class="text-[5px] sm:text-[8px] font-bold">MTN BEKASI</span>
                      </div>
                      
                      <svg class="relative z-10 w-20 h-8 sm:w-28 sm:h-10 text-slate-950 opacity-90" viewBox="0 0 100 30" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10 25 C 20 5, 25 5, 30 20 C 35 30, 40 25, 45 15 C 50 5, 55 10, 60 20 C 65 30, 70 5, 75 10 C 80 15, 82 25, 90 22 C 95 20, 92 10, 95 5" />
                      </svg>
                    </div>

                    <p class="font-bold text-slate-900 border-t border-slate-300 pt-1 leading-none text-[10px] sm:text-xs">Lusdiarto</p>
                    <p class="text-[8px] sm:text-[10px] text-slate-400">Direktur Utama</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </x-scroll-reveal>
      </div>

    </div>
  </div>
</section>
