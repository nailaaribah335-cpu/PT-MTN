@php
$contactInfos = [
    [
        'icon' => 'map-pin',
        'title' => 'Alamat Kantor',
        'detail' => 'Kota Bekasi, Jawa Barat, Indonesia',
        'desc' => 'Pusat operasional dan administrasi hukum',
        'isLink' => false,
        'href' => null,
    ],
    [
        'icon' => 'phone',
        'title' => 'Telepon / WhatsApp',
        'detail' => '+62 812-9215-3026',
        'desc' => 'Hubungi kami langsung via WhatsApp Chat',
        'isLink' => true,
        'href' => 'https://wa.me/6281292153026?text=Halo%20PT.%20Mulia%20Tunggal%20Nusantara,%20saya%20ingin%20bertanya%20mengenai%20pengadaan%20barang.',
    ],
    [
        'icon' => 'mail',
        'title' => 'Email Resmi',
        'detail' => 'info@muliatunggalnusantara.com',
        'desc' => 'Kirimkan proposal penawaran atau tender resmi',
        'isLink' => true,
        'href' => 'mailto:info@muliatunggalnusantara.com',
    ],
    [
        'icon' => 'clock',
        'title' => 'Jam Kerja',
        'detail' => 'Senin - Jumat | 08.00 - 17.00 WIB',
        'desc' => 'Sabtu, Minggu & Hari Libur Nasional: Tutup',
        'isLink' => false,
        'href' => null,
    ],
];
@endphp

<section id="contact" class="relative py-20 bg-white overflow-hidden" x-data="contactForm()">
  
  <!-- Structural guidelines -->
  <div class="absolute top-0 left-0 w-full h-px bg-slate-200"></div>
  <div class="absolute top-1/4 right-0 w-48 h-48 dot-pattern opacity-30 -z-10"></div>
  <div class="absolute bottom-10 left-5 w-32 h-32 dot-pattern opacity-35 -z-10"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
    
    <!-- Section Title -->
    <div class="text-center max-w-3xl mx-auto">
      <x-scroll-reveal variant="fade-down" class="space-y-4">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-blue/10 text-brand-blue text-xs font-semibold tracking-wider uppercase">
          Hubungi Kami
        </div>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
          Mulai Kerja Sama Dengan MTN
        </h2>
        <p class="text-slate-500 text-sm">
          Apakah Anda memiliki pertanyaan atau ingin mengajukan permintaan pengadaan barang untuk instansi Anda? Silakan isi formulir atau hubungi tim kami secara langsung.
        </p>
      </x-scroll-reveal>
    </div>

    <!-- Contact Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
      
      <!-- Grid Left: Details -->
      <div class="lg:col-span-5 flex flex-col justify-between space-y-6">
        <x-scroll-reveal variant="fade-right" class="space-y-4">
          @foreach($contactInfos as $info)
            <div class="bg-slate-50 p-4 rounded-xl border border-slate-200/50 flex gap-4 text-left hover:border-brand-blue/30 transition-all duration-300 hover:scale-[1.01]">
              <div class="p-3 bg-white border border-slate-100 rounded-lg shadow-sm shrink-0 h-fit">
                <i data-lucide="{{ $info['icon'] }}" class="w-5 h-5 text-brand-blue"></i>
              </div>
              <div class="space-y-1">
                <h4 class="font-bold text-slate-800 text-sm leading-tight">
                  {{ $info['title'] }}
                </h4>
                @if($info['isLink'])
                  <a href="{{ $info['href'] }}" target="_blank" rel="noopener noreferrer" class="font-bold text-brand-blue hover:text-brand-blue-dark text-xs sm:text-sm block hover:underline">
                    {{ $info['detail'] }}
                  </a>
                @else
                  <span class="font-bold text-slate-700 text-xs sm:text-sm block">
                    {{ $info['detail'] }}
                  </span>
                @endif
                <p class="text-[11px] text-slate-400">
                  {{ $info['desc'] }}
                </p>
              </div>
            </div>
          @endforeach
        </x-scroll-reveal>

        <!-- Mock Map Card -->
        <x-scroll-reveal variant="fade-right" delay="200" class="grow flex">
          <div class="relative rounded-2xl border border-slate-200 overflow-hidden aspect-video shadow-sm bg-slate-100 grow min-h-55 w-full">
            <!-- Map Illustration SVG -->
            <svg class="w-full h-full text-slate-300" viewBox="0 0 400 200" fill="none" stroke="currentColor">
              <path d="M 0,50 L 400,100" stroke-width="6" stroke-linecap="round" />
              <path d="M 120,0 L 220,200" stroke-width="8" stroke-linecap="round" />
              <path d="M 0,150 L 400,120" stroke-width="4" stroke-linecap="round" />
              <path d="M 300,0 L 280,200" stroke-width="5" stroke-linecap="round" />
              
              <path d="M -20,10 Q 150,90 220,10 Q 300,140 420,110" stroke="#bfdbfe" stroke-width="12" stroke-linecap="round" />
              
              <circle cx="80" cy="110" r="15" fill="#e2e8f0" stroke="#cbd5e1" stroke-width="2" />
              <rect x="250" y="30" width="40" height="30" rx="4" fill="#e2e8f0" stroke="#cbd5e1" stroke-width="2" />
              <circle cx="340" cy="150" r="12" fill="#e2e8f0" stroke="#cbd5e1" stroke-width="2" />
              
              <g class="animate-bounce" style="transform-origin: 200px 85px;">
                <path d="M 200,60 C 190,60 185,75 200,90 C 215,75 210,60 200,60 Z" fill="#ef4444" />
                <circle cx="200" cy="70" r="4" fill="white" />
              </g>
              <circle cx="200" cy="90" r="6" fill="#ef4444" opacity="0.4" />
            </svg>
            
            <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-sm p-3 rounded-lg border border-slate-100 shadow flex items-center justify-between text-left">
              <div>
                <span class="text-[10px] font-bold text-brand-blue uppercase tracking-wider">Lokasi Kantor Utama</span>
                <p class="text-xs font-semibold text-slate-800">Bekasi City, West Java</p>
              </div>
              <a href="https://www.google.com/maps/place/Perumahan+Hasta+Graha/@-6.2517364,107.0895013,3a,75y,22.83h,90t/data=!3m7!1e1!3m5!1sZvAgSuWzOcwPpP1eI54xrQ!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fcb_client%3Dmaps_sv.tactile%26w%3D900%26h%3D600%26pitch%3D0%26panoid%3DZvAgSuWzOcwPpP1eI54xrQ%26yaw%3D22.83239!7i16384!8i8192!4m10!1m2!2m1!1sPERUMAHAN+HASTA+GRAHA+BLOK+17+NOMOR+2++WANASARI,+CIBITUNG++KAB.+BEKASI+JAWA+BARAT!3m6!1s0x2e698f002ce51c37:0x66560206fb4b2858!8m2!3d-6.2516792!4d107.0895257!15sClFQRVJVTUFIQU4gSEFTVEEgR1JBSEEgQkxPSyAxNyBOT01PUiAyICBXQU5BU0FSSSwgQ0lCSVRVTkcgIEtBQi4gQkVLQVNJIEpBV0EgQkFSQVSSAQ9ob3VzaW5nX2NvbXBsZXjgAQA!16s%2Fg%2F11vwvfs9wc?entry=ttu&g_ep=EgoyMDI2MDUyMC4wIKXMDSoASAFQAw%3D%3D" 
                 target="_blank" 
                 rel="noopener noreferrer"
                 class="bg-brand-blue text-white py-1 px-3 rounded text-[10px] font-bold hover:bg-brand-blue-dark transition-colors">
                Buka Peta
              </a>
            </div>
          </div>
        </x-scroll-reveal>
      </div>

      <!-- Grid Right: Inquiry Form -->
      <div class="lg:col-span-7 flex">
        <x-scroll-reveal variant="fade-left" delay="200" class="w-full flex">
          <div class="bg-slate-50 p-6 sm:p-8 rounded-3xl border border-slate-200/80 flex flex-col justify-start grow w-full gap-5">

            <!-- ── Form Header ── -->
            <div class="text-left">
              <h3 class="text-xl font-bold text-slate-900">Kirim Penawaran / Pesan</h3>
              <p class="text-xs text-slate-400 mt-1">Formulir tanggapan cepat — respon dalam 1×24 jam kerja</p>
            </div>

            <!-- ── Trust Stats Strip ── -->
            <div class="grid grid-cols-3 gap-3">
              @php
                $stats = [
                  ['value' => '1×24 Jam', 'label' => 'Waktu Respon', 'color' => 'bg-emerald-50 border-emerald-200 text-emerald-700'],
                  ['value' => 'Full Support', 'label' => 'Layanan Pengadaan', 'color' => 'bg-brand-blue/5 border-brand-blue/20 text-brand-blue'],
                  ['value' => 'Resmi & Sah', 'label' => 'Badan Hukum', 'color' => 'bg-amber-50 border-amber-200 text-amber-700'],
                ];
              @endphp
              @foreach($stats as $s)
                <div class="flex flex-col items-center justify-center text-center p-3 rounded-2xl border {{ $s['color'] }}">
                  <span class="font-extrabold text-sm leading-tight">{{ $s['value'] }}</span>
                  <span class="text-[10px] font-medium opacity-70 mt-0.5 leading-tight">{{ $s['label'] }}</span>
                </div>
              @endforeach
            </div>

            <!-- ── Quick Category Chips ── -->
            <div>
              <p class="text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Topik Pengadaan Populer</p>
              <div class="flex flex-wrap gap-2">
                @php
                  $chips = ['Alat Pelindung Kerja', 'Hand Tools & Perkakas', 'Kertas HVS & ATK', 'Alat Kebersihan', 'Peralatan Gudang/Pallet', 'Lakban & Isolasi'];
                @endphp
                @foreach($chips as $chip)
                  <button
                    type="button"
                    @click="
                      document.getElementById('contact-subject').value = 'Pengadaan: {{ $chip }}';
                      formData.subject = 'Pengadaan: {{ $chip }}';
                      document.getElementById('contact-message').value = 'Halo MTN, kami membutuhkan penawaran harga untuk pengadaan {{ $chip }}. Mohon informasi harga dan ketersediaan stok. Terima kasih.';
                      formData.message = 'Halo MTN, kami membutuhkan penawaran harga untuk pengadaan {{ $chip }}. Mohon informasi harga dan ketersediaan stok. Terima kasih.';
                    "
                    class="text-[11px] font-semibold px-3 py-1.5 rounded-full border border-slate-200 bg-white text-slate-600 hover:border-brand-blue hover:text-brand-blue hover:bg-brand-blue/5 transition-all duration-200 cursor-pointer"
                  >
                    {{ $chip }}
                  </button>
                @endforeach
              </div>
            </div>

            <div class="h-px bg-slate-200"></div>

            <form @submit.prevent="handleSubmit" class="space-y-4 text-left">
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Name -->
                <div class="space-y-1">
                  <label for="contact-name" class="text-xs font-bold text-slate-700 block">Nama Lengkap *</label>
                  <input
                    type="text"
                    id="contact-name"
                    x-model="formData.name"
                    @input="clearError('name')"
                    placeholder="Masukkan nama Anda"
                    :class="errors.name ? 'border-rose-400' : 'border-slate-200 focus:border-brand-blue'"
                    class="w-full bg-white border rounded-xl py-2.5 px-4 text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/20 transition-all"
                  />
                  <template x-if="errors.name">
                    <span class="text-[10px] text-rose-500 font-medium flex items-center gap-1">
                      <i data-lucide="alert-circle" class="w-2.5 h-2.5"></i> <span x-text="errors.name"></span>
                    </span>
                  </template>
                </div>

                <!-- Email -->
                <div class="space-y-1">
                  <label for="contact-email" class="text-xs font-bold text-slate-700 block">Email Kantor / Pribadi *</label>
                  <input
                    type="email"
                    id="contact-email"
                    x-model="formData.email"
                    @input="clearError('email')"
                    placeholder="nama@perusahaan.com"
                    :class="errors.email ? 'border-rose-400' : 'border-slate-200 focus:border-brand-blue'"
                    class="w-full bg-white border rounded-xl py-2.5 px-4 text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/20 transition-all"
                  />
                  <template x-if="errors.email">
                    <span class="text-[10px] text-rose-500 font-medium flex items-center gap-1">
                      <i data-lucide="alert-circle" class="w-2.5 h-2.5"></i> <span x-text="errors.email"></span>
                    </span>
                  </template>
                </div>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Company Name -->
                <div class="space-y-1">
                  <label for="contact-company" class="text-xs font-bold text-slate-700 block">Nama Perusahaan / Instansi</label>
                  <input
                    type="text"
                    id="contact-company"
                    x-model="formData.company"
                    placeholder="Contoh: PT. Maju Bersama (Opsional)"
                    class="w-full bg-white border border-slate-200 rounded-xl py-2.5 px-4 text-sm focus:outline-none focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/20 transition-all"
                  />
                </div>

                <!-- Subject -->
                <div class="space-y-1">
                  <label for="contact-subject" class="text-xs font-bold text-slate-700 block">Subjek / Perihal *</label>
                  <input
                    type="text"
                    id="contact-subject"
                    x-model="formData.subject"
                    @input="clearError('subject')"
                    placeholder="Contoh: Pengadaan ATK Bulanan"
                    :class="errors.subject ? 'border-rose-400' : 'border-slate-200 focus:border-brand-blue'"
                    class="w-full bg-white border rounded-xl py-2.5 px-4 text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/20 transition-all"
                  />
                  <template x-if="errors.subject">
                    <span class="text-[10px] text-rose-500 font-medium flex items-center gap-1">
                      <i data-lucide="alert-circle" class="w-2.5 h-2.5"></i> <span x-text="errors.subject"></span>
                    </span>
                  </template>
                </div>
              </div>

              <!-- Message -->
              <div class="space-y-1">
                <label for="contact-message" class="text-xs font-bold text-slate-700 block">Detail Pesan / Pertanyaan *</label>
                <textarea
                  id="contact-message"
                  x-model="formData.message"
                  @input="clearError('message')"
                  rows="4"
                  placeholder="Tuliskan spesifikasi barang yang Anda butuhkan secara detail di sini..."
                  :class="errors.message ? 'border-rose-400' : 'border-slate-200 focus:border-brand-blue'"
                  class="w-full bg-white border rounded-xl py-2.5 px-4 text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/20 transition-all resize-none"
                ></textarea>
                <template x-if="errors.message">
                  <span class="text-[10px] text-rose-500 font-medium flex items-center gap-1">
                    <i data-lucide="alert-circle" class="w-2.5 h-2.5"></i> <span x-text="errors.message"></span>
                  </span>
                </template>
              </div>

              <!-- Status Indicator -->
              <template x-if="submitSuccess">
                <div class="p-4 rounded-xl bg-emerald-50 border border-emerald-200 flex items-start gap-3 animate-fade-in text-emerald-800 text-xs">
                  <i data-lucide="check-circle-2" class="text-emerald-500 w-5 h-5 shrink-0 mt-0.5"></i>
                  <div>
                    <strong class="block text-emerald-900 font-bold mb-0.5">Pesan Terkirim Sukses!</strong>
                    Terima kasih telah menghubungi kami. Pesan pengadaan Anda telah diterima dan akan segera direspons oleh Account Officer kami melalui email / telepon.
                  </div>
                </div>
              </template>

              <!-- Submit Button -->
              <button
                type="submit"
                :disabled="isSubmitting"
                class="w-full flex items-center justify-center gap-2 bg-brand-blue hover:bg-brand-blue-dark text-white font-semibold py-3 px-4 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 disabled:opacity-60 text-sm cursor-pointer"
              >
                <template x-if="isSubmitting">
                  <div class="flex items-center gap-2">
                    <i data-lucide="message-square" class="w-4 h-4 animate-pulse"></i>
                    <span>Mengirim Formulir...</span>
                  </div>
                </template>
                <template x-if="!isSubmitting">
                  <div class="flex items-center gap-2">
                    <i data-lucide="send" class="w-4 h-4"></i>
                    <span>Kirim Pengajuan Pengadaan</span>
                  </div>
                </template>
              </button>
            </form>
          </div>
        </x-scroll-reveal>
      </div>

    </div>

  </div>
</section>

<script>
  function contactForm() {
    return {
      formData: { name: '', email: '', company: '', subject: '', message: '' },
      errors: {},
      isSubmitting: false,
      submitSuccess: false,
      clearError(field) {
        if(this.errors[field]) {
          this.errors[field] = '';
        }
      },
      validateForm() {
        const tempErrors = {};
        if (!this.formData.name.trim()) tempErrors.name = 'Nama lengkap wajib diisi.';
        if (!this.formData.email.trim()) {
          tempErrors.email = 'Alamat email wajib diisi.';
        } else if (!/\S+@\S+\.\S+/.test(this.formData.email)) {
          tempErrors.email = 'Format email tidak valid.';
        }
        if (!this.formData.subject.trim()) tempErrors.subject = 'Subjek pesan wajib diisi.';
        if (!this.formData.message.trim()) tempErrors.message = 'Pesan wajib diisi.';
        
        this.errors = tempErrors;
        return Object.keys(tempErrors).length === 0;
      },
      async handleSubmit(e) {
        if (!this.validateForm()) return;
        this.isSubmitting = true;
        
        try {
          const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
          const response = await fetch('/inquiries', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': csrfToken,
              'Accept': 'application/json'
            },
            body: JSON.stringify(this.formData)
          });

          if(response.ok) {
            this.isSubmitting = false;
            this.submitSuccess = true;
            this.formData = { name: '', email: '', company: '', subject: '', message: '' };
            setTimeout(() => this.submitSuccess = false, 5000);
          } else {
            const errorData = await response.json();
            console.error(errorData);
            this.isSubmitting = false;
            alert('Terjadi kesalahan, silakan coba lagi.');
          }
        } catch (error) {
          console.error(error);
          this.isSubmitting = false;
          alert('Terjadi kesalahan jaringan, silakan coba lagi.');
        }
      }
    }
  }
</script>
