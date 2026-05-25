@php
$navLinks = [
  ['name' => 'Beranda', 'href' => '#home', 'icon' => 'home'],
  ['name' => 'Tentang Kami', 'href' => '#about', 'icon' => 'info'],
  ['name' => 'Legalitas', 'href' => '#legality', 'icon' => 'shield-check'],
  ['name' => 'Produk & Layanan', 'href' => '#products', 'icon' => 'package'],
  ['name' => 'Hubungi Kami', 'href' => '#contact', 'icon' => 'mail'],
];
@endphp

<div x-data="{ 
        isOpen: false, 
        scrolled: false, 
        active: '#home',
        navLinks: {{ json_encode($navLinks) }},
        onScroll() {
            this.scrolled = window.scrollY > 24;
            const sections = this.navLinks.map(l => document.querySelector(l.href));
            for (let i = sections.length - 1; i >= 0; i--) {
                if (sections[i]) {
                    const top = sections[i].getBoundingClientRect().top;
                    if (top <= 120) {
                        this.active = this.navLinks[i].href;
                        break;
                    }
                }
            }
        },
        scrollTo(e, href) {
            e.preventDefault();
            this.isOpen = false;
            const el = document.querySelector(href);
            if (!el) return;
            const top = el.getBoundingClientRect().top + window.scrollY - 80;
            window.scrollTo({ top, behavior: 'smooth' });
        }
    }"
    @scroll.window="onScroll"
    x-effect="document.body.classList.toggle('sidebar-open', isOpen)"
>
  <!-- ══════════════ TOP NAV BAR ══════════════ -->
  <nav :class="scrolled 
        ? 'bg-white/90 backdrop-blur-xl shadow-lg border-b border-slate-100 py-3' 
        : 'bg-transparent py-5'"
       class="fixed top-0 left-0 right-0 z-50 transition-all duration-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between">

        <!-- LOGO -->
        <a href="#home" @click="scrollTo($event, '#home')" class="flex items-center gap-3 group focus:outline-none">
          <div class="relative w-11 h-11 shrink-0">
            <svg viewBox="0 0 100 100" class="w-full h-full text-red-500 animate-[spin_30s_linear_infinite] group-hover:scale-110 transition-transform duration-300">
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
            <span class="font-extrabold text-2xl tracking-tighter text-slate-900 leading-none">MTN</span>
            <div class="relative w-36 h-0.5 bg-emerald-500 my-0.75 mt-1 mb-1">
              <span class="absolute -left-1 -top-0.5 w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
              <span class="absolute -right-1 -top-0.5 w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
            </div>
            <span class="text-[8px] font-bold text-slate-600 tracking-wider leading-none">PT. MULIA TUNGGAL NUSANTARA</span>
          </div>
        </a>

        <!-- DESKTOP LINKS -->
        <div class="hidden md:flex items-center gap-7">
          @foreach($navLinks as $link)
            <a href="{{ $link['href'] }}"
               @click="scrollTo($event, '{{ $link['href'] }}')"
               :class="active === '{{ $link['href'] }}' ? 'text-brand-blue' : 'text-slate-500 hover:text-brand-blue'"
               class="nav-link-hover text-sm font-semibold tracking-wide transition-colors duration-200">
              {{ $link['name'] }}
            </a>
          @endforeach
        </div>

        <!-- DESKTOP CTA -->
        <div class="hidden md:flex items-center gap-3">
          <a href="#contact" @click="scrollTo($event, '#contact')" class="btn-ripple flex items-center gap-2 bg-brand-blue hover:bg-brand-blue-dark text-white font-semibold py-2.5 px-5 rounded-full shadow-md hover:shadow-xl hover:shadow-brand-blue/30 transition-all duration-300 text-sm group transform hover:-translate-y-0.5 glow-blue">
            <i data-lucide="phone-call" class="w-3.75 h-3.75 group-hover:animate-bounce"></i>
            <span>Hubungi Kami</span>
          </a>
          <a href="{{ route('login') }}" class="flex items-center justify-center w-10 h-10 rounded-full bg-slate-100 hover:bg-brand-blue text-slate-700 hover:text-white transition-all duration-200 group" title="Login Admin">
            <i data-lucide="log-in" class="w-5 h-5 group-hover:scale-110 transition-transform"></i>
          </a>
        </div>

        <!-- HAMBURGER (mobile) -->
        <button @click="isOpen = !isOpen" aria-label="Toggle menu" class="md:hidden relative w-10 h-10 flex items-center justify-center rounded-xl bg-slate-100 hover:bg-slate-200 transition-colors">
          <span class="absolute transition-all duration-300" :class="isOpen ? 'opacity-100 rotate-0' : 'opacity-0 rotate-90'">
            <i data-lucide="x" class="w-5 h-5 text-slate-700"></i>
          </span>
          <span class="absolute transition-all duration-300" :class="isOpen ? 'opacity-0 -rotate-90' : 'opacity-100 rotate-0'">
            <i data-lucide="menu" class="w-5 h-5 text-slate-700"></i>
          </span>
        </button>
      </div>
    </div>
  </nav>

  <!-- ══════════════ BACKDROP OVERLAY ══════════════ -->
  <div @click="isOpen = false"
       class="fixed inset-0 z-40 md:hidden transition-all duration-400"
       :class="isOpen ? 'opacity-100 backdrop-blur-sm bg-slate-900/40 pointer-events-auto' : 'opacity-0 pointer-events-none'"></div>

  <!-- ══════════════ PREMIUM SIDEBAR DRAWER ══════════════ -->
  <aside class="fixed top-0 right-0 h-full w-80 max-w-[85vw] z-50 md:hidden flex flex-col bg-slate-900 shadow-2xl transition-transform duration-400 ease-[cubic-bezier(0.22,1,0.36,1)]"
         :class="isOpen ? 'translate-x-0' : 'translate-x-full'">

    <!-- Decorative background blobs -->
    <div class="absolute top-0 right-0 w-48 h-48 bg-brand-blue/20 rounded-full blur-3xl z-0 pointer-events-none"></div>
    <div class="absolute bottom-20 left-0 w-40 h-40 bg-brand-yellow/10 rounded-full blur-3xl z-0 pointer-events-none"></div>
    <div class="absolute inset-0 dot-pattern-white opacity-5 pointer-events-none"></div>

    <!-- Sidebar Header -->
    <div class="relative z-10 flex items-center justify-between px-6 pt-6 pb-5 border-b border-white/10">
      <div class="flex items-center gap-2.5">
        <div class="w-8 h-8 shrink-0">
          <svg viewBox="0 0 100 100" class="w-full h-full text-red-400 animate-[spin_40s_linear_infinite]">
            <circle cx="50" cy="50" r="45" fill="none" stroke="currentColor" stroke-width="3"/>
            <ellipse cx="50" cy="50" rx="30" ry="45" fill="none" stroke="currentColor" stroke-width="2.5"/>
            <line x1="5" y1="50" x2="95" y2="50" stroke="currentColor" stroke-width="2.5"/>
            <ellipse cx="50" cy="50" rx="45" ry="28" fill="none" stroke="currentColor" stroke-width="2.5"/>
          </svg>
        </div>
        <div>
          <div class="text-white font-extrabold text-lg leading-none tracking-tighter">MTN</div>
          <div class="text-[8px] text-emerald-400 font-bold tracking-widest leading-none mt-0.5">PT. MULIA TUNGGAL</div>
        </div>
      </div>
      <button @click="isOpen = false" class="w-9 h-9 flex items-center justify-center rounded-xl bg-white/10 hover:bg-white/20 text-white transition-colors">
        <i data-lucide="x" class="w-4.5 h-4.5"></i>
      </button>
    </div>

    <!-- Nav Links -->
    <nav class="relative z-10 flex-1 overflow-y-auto px-4 py-6 space-y-1">
      @foreach($navLinks as $index => $link)
        <a href="{{ $link['href'] }}"
           @click="scrollTo($event, '{{ $link['href'] }}')"
           :style="isOpen ? 'animation-delay: {{ 80 + ($index * 60) }}ms' : ''"
           :class="active === '{{ $link['href'] }}' 
             ? 'bg-brand-blue text-white shadow-lg shadow-brand-blue/30' 
             : 'text-slate-300 hover:bg-white/10 hover:text-white'"
           class="sidebar-link flex items-center justify-between gap-3 px-4 py-3.5 rounded-2xl font-semibold text-sm transition-all duration-200 group">
          <div class="flex items-center gap-3">
            <div :class="active === '{{ $link['href'] }}' ? 'bg-white/20' : 'bg-white/5 group-hover:bg-white/15'" class="p-2 rounded-xl transition-colors duration-200">
              <i data-lucide="{{ $link['icon'] }}" class="w-4 h-4"></i>
            </div>
            <span>{{ $link['name'] }}</span>
          </div>
          <i data-lucide="chevron-right" class="w-3.75 h-3.75 transition-transform duration-200" :class="active === '{{ $link['href'] }}' ? 'opacity-100 translate-x-0' : 'opacity-0 group-hover:opacity-60 group-hover:translate-x-1'"></i>
        </a>
      @endforeach
    </nav>

    <!-- Sidebar Footer -->
    <div class="relative z-10 px-5 pb-8 pt-4 border-t border-white/10 space-y-3">
      <a href="{{ route('login') }}" class="btn-ripple flex items-center justify-center gap-2 w-full bg-brand-blue hover:bg-brand-blue-dark text-white font-bold py-3 rounded-2xl shadow-lg shadow-brand-blue/30 transition-all duration-300 text-sm">
        <i data-lucide="log-in" class="w-4 h-4"></i>
        Login Admin
      </a>
      <a href="https://wa.me/6281292153026?text=Halo%20MTN" target="_blank" rel="noopener noreferrer" class="btn-ripple flex items-center justify-center gap-2 w-full bg-emerald-500 hover:bg-emerald-400 text-white font-bold py-3 rounded-2xl shadow-lg shadow-emerald-500/30 transition-all duration-300 text-sm transform hover:-translate-y-0.5">
        <svg viewBox="0 0 24 24" class="w-4 h-4 fill-current">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
        Chat WhatsApp
      </a>
      <a href="#contact" @click="scrollTo($event, '#contact')" class="btn-ripple flex items-center justify-center gap-2 w-full bg-brand-blue hover:bg-brand-blue-dark text-white font-bold py-3 rounded-2xl shadow-lg shadow-brand-blue/30 transition-all duration-300 text-sm">
        <i data-lucide="phone-call" class="w-3.75 h-3.75"></i>
        Kirim Pesan
      </a>
      <p class="text-center text-[10px] text-slate-600 pt-1">
        © {{ date('Y') }} PT. Mulia Tunggal Nusantara
      </p>
    </div>
  </aside>
</div>
