@php
$values = [
    [
        'icon' => 'shield',
        'iconColor' => 'text-emerald-600',
        'title' => 'Keselamatan',
        'desc' => 'Kami memastikan lingkungan kerja yang aman dan sehat untuk semua karyawan, kontraktor, dan mitra bisnis.',
        'badgeColor' => 'bg-emerald-50 border-emerald-200 text-emerald-700',
    ],
    [
        'icon' => 'heart',
        'iconColor' => 'text-rose-600',
        'title' => 'Etika',
        'desc' => 'Kami tanpa kompromi dalam integritas, kejujuran, keadilan, kepercayaan, dan saling menghormati di setiap transaksi.',
        'badgeColor' => 'bg-rose-50 border-rose-200 text-rose-700',
    ],
    [
        'icon' => 'award',
        'iconColor' => 'text-amber-600',
        'title' => 'Kualitas',
        'desc' => 'Kami berorientasi kepada hasil yang unggul dalam kualitas, ketepatan waktu pengiriman, dan penuh inovasi berkesinambungan.',
        'badgeColor' => 'bg-amber-50 border-amber-200 text-amber-700',
    ],
    [
        'icon' => 'users',
        'iconColor' => 'text-blue-600',
        'title' => 'Relasi',
        'desc' => 'Kami membangun hubungan jangka panjang yang positif dengan para pelanggan, pemasok, dan kolega berdasarkan saling percaya.',
        'badgeColor' => 'bg-blue-50 border-blue-200 text-blue-700',
    ],
];
@endphp

<section id="about" class="relative py-20 bg-slate-50 overflow-hidden">
  
  <!-- Structural backgrounds -->
  <div class="absolute top-0 left-0 w-full h-px bg-slate-200"></div>
  <div class="absolute top-10 right-10 w-48 h-48 dot-pattern opacity-30 -z-10"></div>
  <div class="absolute bottom-10 left-10 w-48 h-48 dot-pattern opacity-30 -z-10"></div>

  <!-- Floating abstract decorative shape -->
  <div class="absolute bottom-1/3 right-5 w-64 h-64 bg-brand-blue/5 rounded-full blur-3xl -z-10 animate-blob-2"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">
    
    <!-- PART 1: Company Profile Overview -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <!-- Text Content -->
      <div class="lg:col-span-7 text-left space-y-6">
        <x-scroll-reveal variant="fade-right" class="space-y-6">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-blue/10 text-brand-blue text-xs font-semibold tracking-wider uppercase">
            Tentang Kami
          </div>
          
          <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
            PT. Mulia Tunggal Nusantara
          </h2>
          
          <div class="h-1 w-20 bg-brand-blue rounded-full"></div>
          
          <p class="text-slate-600 leading-relaxed text-base">
            <strong>PT. Mulia Tunggal Nusantara</strong> berdiri pada tahun 2023 di Bekasi, Jawa Barat. Berdirinya perusahaan kami merupakan respon atas terbukanya peluang yang sangat luas di dunia industri, logistik, pengadaan barang, serta kebutuhan perkantoran modern yang berkembang pesat.
          </p>
          
          <p class="text-slate-600 leading-relaxed text-base">
            Didirikan secara resmi pada tanggal <strong>11 Maret 2023</strong> di hadapan Notaris David, S.H., M.Kn., serta telah disahkan secara legal oleh Menteri Hukum dan Hak Asasi Manusia Republik Indonesia. Kehadiran MTN bertujuan menjadi solusi satu atap <em>(one-stop solution)</em> tepercaya bagi korporasi swasta, BUMN, maupun instansi pemerintahan di seluruh Indonesia.
          </p>
          
          <div class="bg-white p-4 rounded-xl border border-slate-200/60 shadow-sm flex items-start gap-4 transform hover:scale-[1.01] transition-transform duration-300">
            <div class="p-3 bg-emerald-50 text-emerald-600 rounded-lg">
              <i data-lucide="book-open" class="w-6 h-6"></i>
            </div>
            <div>
              <h4 class="font-bold text-slate-800 text-sm">Fokus Kemitraan</h4>
              <p class="text-xs text-slate-500 mt-1 leading-relaxed">
                Kami berkomitmen pada penyediaan suplai perdagangan eceran maupun besar untuk berbagai kebutuhan teknis, operasional, dan material berkualitas.
              </p>
            </div>
          </div>
        </x-scroll-reveal>
      </div>

      <!-- Styled Image Frame -->
      <div class="lg:col-span-5 relative">
        <x-scroll-reveal variant="fade-left" delay="200">
          <div class="relative aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl border-4 border-white transform hover:scale-[1.02] transition-transform duration-300 z-10">
            <img 
              src="{{ asset('creative_meeting.png') }}" 
              alt="Creative business meeting"
              class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/40 to-transparent"></div>
          </div>
        </x-scroll-reveal>
        <!-- Design accents -->
        <div class="absolute -top-4 -left-4 w-24 h-24 bg-brand-yellow/80 rounded-2xl -z-10 animate-pulse-slow"></div>
        <div class="absolute -bottom-4 -right-4 w-32 h-32 dot-pattern opacity-40 -z-10"></div>
      </div>
    </div>

    <!-- PART 2: Vision & Mission Section -->
    <x-scroll-reveal variant="zoom-in" delay="100">
      <div class="bg-brand-blue rounded-3xl text-white overflow-hidden shadow-xl relative group">
        <!-- Mesh Overlay inside card -->
        <div class="absolute inset-0 dark-mesh-bg opacity-40 mix-blend-overlay"></div>
        <div class="absolute top-0 right-0 w-64 h-64 dot-pattern-white opacity-10"></div>
        
        <div class="relative z-10 px-8 py-16 sm:px-12 lg:px-16 grid grid-cols-1 md:grid-cols-2 gap-12 divide-y md:divide-y-0 md:divide-x divide-slate-700">
          
          <!-- Vision Column -->
          <div class="space-y-6 text-left flex flex-col justify-start transform group-hover:translate-x-1 transition-transform duration-500 pb-8 md:pb-0 md:pr-12">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-white/10 border border-white/20 text-brand-yellow">
              <i data-lucide="compass" class="w-6 h-6 animate-[spin_10s_linear_infinite]"></i>
            </div>
            <h3 class="text-2xl font-bold tracking-tight">Visi Perusahaan</h3>
            <p class="text-blue-100 text-lg leading-relaxed font-light">
              “Menjadi perusahaan Indonesia yang unggul, profesional, dan terdepan dalam melayani klien maupun mitra bisnis secara terintegrasi.”
            </p>
          </div>
          
          <!-- Mission Column -->
          <div class="space-y-6 text-left flex flex-col justify-start pt-8 md:pt-0 md:pl-12 transform group-hover:-translate-x-1 transition-transform duration-500">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-white/10 border border-white/20 text-brand-yellow">
              <i data-lucide="target" class="w-6 h-6"></i>
            </div>
            <h3 class="text-2xl font-bold tracking-tight">Misi Perusahaan</h3>
            <p class="text-blue-100 text-base leading-relaxed font-light">
              “Memberikan produk berkualitas dengan harga kompetitif dan bermanfaat demi memastikan kepuasan pelanggan secara optimal, serta membina hubungan kemitraan yang berkelanjutan dengan para pemangku kepentingan.”
            </p>
          </div>

        </div>
      </div>
    </x-scroll-reveal>

    <!-- PART 3: Company Values -->
    <div class="space-y-12">
      <div class="text-center max-w-2xl mx-auto">
        <x-scroll-reveal variant="fade-down" class="space-y-4">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-yellow/10 text-brand-yellow-dark text-xs font-semibold tracking-wider uppercase">
            Nilai Perusahaan
          </div>
          <h2 class="text-3xl font-bold text-slate-900 tracking-tight">
            Pilar Utama Nilai Kami
          </h2>
          <p class="text-slate-500 text-sm">
            Kami menjunjung tinggi budaya kerja yang profesional dan mengedepankan etika untuk menjamin hasil terbaik bagi mitra kami.
          </p>
        </x-scroll-reveal>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
        
        <!-- Image side (left on lg) -->
        <div class="lg:col-span-5 relative flex items-stretch">
          <x-scroll-reveal variant="fade-right" class="w-full flex">
            <div class="relative w-full min-h-[300px] rounded-2xl overflow-hidden shadow-lg border border-slate-200 grow">
              <img 
                src="{{ asset('business_handshake.png') }}" 
                alt="Business partnership handshake"
                class="w-full h-full object-cover"
              />
              <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-slate-900/20 to-transparent"></div>
              <div class="absolute bottom-6 left-6 right-6 text-white text-left">
                <div class="font-bold text-lg leading-tight">Membangun Relasi Jangka Panjang</div>
                <p class="text-xs text-slate-300 mt-1">Mengintegrasikan profesionalisme dengan integritas tanpa kompromi.</p>
              </div>
            </div>
          </x-scroll-reveal>
          <!-- Highlight background shape -->
          <div class="absolute bottom-4 right-4 w-16 h-16 dot-pattern opacity-30"></div>
        </div>

        <!-- Values Cards grid (right on lg) -->
        <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4">
          @foreach($values as $idx => $val)
            <x-scroll-reveal 
              variant="fade-up"
              delay="{{ $idx * 100 }}"
              class="flex"
            >
              <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-xl hover:border-brand-blue/30 transition-all duration-300 flex flex-col justify-between text-left group w-full grad-border-card">
                <div class="space-y-4">
                  <div class="inline-flex p-3 rounded-xl border {{ $val['badgeColor'] }} group-hover:scale-110 transition-transform duration-300">
                    <i data-lucide="{{ $val['icon'] }}" class="w-8 h-8 {{ $val['iconColor'] }}"></i>
                  </div>
                  <h4 class="font-bold text-slate-800 text-lg group-hover:text-brand-blue transition-colors">
                    {{ $val['title'] }}
                  </h4>
                  <p class="text-sm text-slate-500 leading-relaxed">
                    {{ $val['desc'] }}
                  </p>
                </div>
              </div>
            </x-scroll-reveal>
          @endforeach
        </div>

      </div>
    </div>

  </div>
</section>
