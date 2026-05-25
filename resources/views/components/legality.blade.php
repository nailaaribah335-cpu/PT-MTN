@php
$legalDocs = [
    [
        'title' => 'Akta Notaris Pendirian',
        'subtitle' => 'Akta Pendirian Perusahaan',
        'officer' => 'Notaris David, S.H., M.Kn.',
        'status' => 'Terdaftar & Sah',
        'desc' => 'Dibuat pada tanggal 11 Maret 2023 di Kota Bekasi sebagai akta dasar pendirian badan hukum.',
    ],
    [
        'title' => 'Pengesahan Kemenkumham',
        'subtitle' => 'Surat Keputusan Menteri Hukum & HAM',
        'officer' => 'Direktur Jenderal Administrasi Hukum Umum',
        'status' => 'Terverifikasi Aktif',
        'desc' => 'Nomor keputusan: AHU-0050294.AH.01.11 Tahun 2023. Memberikan status badan hukum resmi bagi PT. Mulia Tunggal Nusantara.',
    ],
    [
        'title' => 'Nomor Induk Berusaha (NIB)',
        'subtitle' => 'NIB Republik Indonesia',
        'officer' => 'Lembaga OSS / BKPM',
        'status' => 'Terdaftar Aktif',
        'desc' => 'Izin usaha dasar yang mencakup klasifikasi perdagangan eceran dan besar untuk berbagai macam barang.',
    ],
    [
        'title' => 'Kewajiban Perpajakan (NPWP)',
        'subtitle' => 'NPWP Badan Usaha',
        'officer' => 'Direktorat Jenderal Pajak RI',
        'status' => 'Wajib Pajak Patuh',
        'desc' => 'Terdaftar secara resmi sebagai wajib pajak badan yang memenuhi seluruh regulasi perpajakan nasional.',
    ],
];
@endphp

<section id="legality" class="relative py-20 bg-white overflow-hidden">
  
  <!-- Decorative background shapes -->
  <div class="absolute top-1/2 left-0 w-72 h-72 bg-brand-blue/5 rounded-full blur-3xl -z-10 animate-pulse-slow"></div>
  <div class="absolute top-0 right-0 w-24 h-24 dot-pattern opacity-40 -z-10"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
    
    <!-- Header -->
    <div class="text-center max-w-3xl mx-auto">
      <x-scroll-reveal variant="fade-down" class="space-y-4">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100 text-xs font-semibold tracking-wider uppercase">
          <i data-lucide="shield-check" class="w-3.5 h-3.5 text-emerald-600 animate-pulse"></i>
          Aspek Legalitas Resmi
        </div>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
          Kredibilitas Hukum Terjamin
        </h2>
        <p class="text-slate-500 text-base leading-relaxed">
          PT. Mulia Tunggal Nusantara beroperasi di bawah payung hukum yang sah dan lengkap sesuai regulasi Republik Indonesia. Hal ini menjamin keamanan kerja sama bagi setiap instansi pemerintah maupun korporasi swasta.
        </p>
      </x-scroll-reveal>
    </div>

    <!-- Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
      
      <!-- Grid Left: Documents details -->
      <div class="lg:col-span-7 space-y-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          @foreach($legalDocs as $idx => $doc)
            <x-scroll-reveal 
              variant="fade-up"
              delay="{{ $idx * 100 }}"
              class="flex"
            >
              <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200/60 text-left hover:bg-slate-100/50 transition-colors w-full flex flex-col justify-between">
                <div class="space-y-3">
                  <div class="flex justify-between items-start gap-2">
                    <span class="inline-block px-2 py-0.5 rounded bg-emerald-100 text-emerald-800 text-[10px] font-bold uppercase">
                      {{ $doc['status'] }}
                    </span>
                    <i data-lucide="file-check" class="w-[18px] h-[18px] text-slate-400"></i>
                  </div>
                  
                  <h4 class="font-bold text-slate-800 text-base leading-tight">
                    {{ $doc['title'] }}
                  </h4>
                  <div class="text-xs text-brand-blue font-semibold">
                    {{ $doc['officer'] }}
                  </div>
                  
                  <p class="text-xs text-slate-500 leading-relaxed">
                    {{ $doc['desc'] }}
                  </p>
                </div>
              </div>
            </x-scroll-reveal>
          @endforeach
        </div>

        <!-- Scale definition box -->
        <x-scroll-reveal variant="fade-up" delay="400">
          <div class="p-5 rounded-2xl bg-amber-50/50 border border-amber-200 text-left flex items-start gap-4 transform hover:scale-[1.01] transition-transform duration-300">
            <div class="p-3 bg-amber-100 text-amber-700 rounded-xl">
              <i data-lucide="landmark" class="w-6 h-6"></i>
            </div>
            <div class="space-y-1">
              <h5 class="font-bold text-slate-900 text-sm">Klasifikasi Bidang Usaha</h5>
              <p class="text-xs text-slate-600 leading-relaxed">
                Perusahaan kami ditetapkan secara legal sebagai <strong>Perusahaan Perdagangan Eceran Berskala Kecil / Besar</strong>. Klasifikasi ini memberikan kebebasan hukum untuk memasok berbagai macam komoditas operasional, baik material retail maupun kebutuhan pengadaan partai besar.
              </p>
            </div>
          </div>
        </x-scroll-reveal>
      </div>

      <!-- Grid Right: Interactive Verification Widget -->
      <div class="lg:col-span-5 w-full" x-data="{ 
            verifying: false, 
            verified: false, 
            copiedText: false, 
            documentNumber: 'AHU-0050294.AH.01.11',
            handleVerify() {
                this.verifying = true;
                this.verified = false;
                setTimeout(() => {
                    this.verifying = false;
                    this.verified = true;
                }, 1500);
            },
            copyToClipboard() {
                navigator.clipboard.writeText(this.documentNumber);
                this.copiedText = true;
                setTimeout(() => this.copiedText = false, 2000);
            }
        }">
        <x-scroll-reveal variant="fade-left" delay="200" class="w-full">
          <div class="bg-slate-900 rounded-3xl p-6 sm:p-8 text-white shadow-xl relative overflow-hidden group">
            
            <!-- Background elements -->
            <div class="absolute inset-0 dark-mesh-bg opacity-30"></div>
            <div class="absolute bottom-0 right-0 w-24 h-24 dot-pattern-white opacity-10"></div>
            
            <div class="relative z-10 space-y-6 text-left">
              <div class="flex items-center gap-3">
                <div class="p-2.5 bg-brand-blue rounded-xl group-hover:scale-110 transition-transform duration-300">
                  <i data-lucide="shield-check" class="w-[22px] h-[22px] text-brand-yellow"></i>
                </div>
                <div>
                  <h4 class="font-bold text-lg leading-tight">Verifikasi AHU Kemenkumham</h4>
                  <p class="text-[10px] text-slate-400">Database Administrasi Hukum Umum</p>
                </div>
              </div>

              <!-- Document display card -->
              <div class="bg-slate-800/80 rounded-2xl p-4 border border-slate-700 space-y-4">
                <div>
                  <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider block">No. Keputusan Menteri Hukum & HAM</span>
                  <div class="flex items-center justify-between mt-1 gap-2 bg-slate-900/60 py-1.5 px-3 rounded-lg border border-slate-700/50">
                    <code class="text-xs text-brand-yellow font-bold tracking-wider" x-text="documentNumber"></code>
                    <button
                      @click="copyToClipboard"
                      class="text-slate-400 hover:text-white p-1 transition-colors cursor-pointer"
                      title="Salin Nomor"
                    >
                      <template x-if="copiedText">
                        <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                      </template>
                      <template x-if="!copiedText">
                        <i data-lucide="copy" class="w-3.5 h-3.5"></i>
                      </template>
                    </button>
                  </div>
                </div>

                <div class="grid grid-cols-2 gap-4 text-xs">
                  <div>
                    <span class="text-[10px] text-slate-400 block">Tanggal Keputusan</span>
                    <span class="font-semibold text-slate-200">11 Maret 2023</span>
                  </div>
                  <div>
                    <span class="text-[10px] text-slate-400 block">Status Hukum</span>
                    <span class="inline-flex items-center gap-1 font-semibold text-emerald-400">
                      <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                      Aktif & Sah
                    </span>
                  </div>
                </div>
              </div>

              <!-- Action Button -->
              <div class="space-y-4">
                <button
                  @click="handleVerify"
                  :disabled="verifying"
                  class="w-full flex items-center justify-center gap-2 bg-brand-blue hover:bg-brand-blue-dark text-white font-semibold py-3 px-4 rounded-xl shadow-lg transition-all duration-300 disabled:opacity-60 text-sm cursor-pointer transform hover:-translate-y-0.5"
                >
                  <i data-lucide="search" class="w-4 h-4" :class="verifying ? 'animate-spin' : ''"></i>
                  <span x-text="verifying ? 'Memeriksa Database...' : 'Cek Keabsahan Badan Hukum'"></span>
                </button>

                <!-- Animated status message -->
                <div x-show="verifying" class="text-xs text-slate-300 text-center animate-pulse" style="display: none;">
                  Menghubungkan ke server Kemenkumham... mohon tunggu.
                </div>

                <div x-show="verified" class="p-4 rounded-xl bg-emerald-950/40 border border-emerald-500/30 flex items-start gap-3 animate-fade-in" style="display: none;">
                  <i data-lucide="check-circle" class="text-emerald-400 w-5 h-5 shrink-0 mt-0.5"></i>
                  <div class="text-xs text-emerald-200">
                    <strong class="block text-emerald-300">Hasil: Valid & Resmi!</strong>
                    Badan hukum <strong>PT. Mulia Tunggal Nusantara</strong> terdaftar di pangkalan data AHU dengan status aktif. Berhak melakukan perdagangan retail & grosir.
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
