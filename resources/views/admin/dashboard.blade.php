@extends('layouts.admin')

@section('content')
<div x-data="{ 
        detailModalOpen: false, 
        selectedInquiry: null,
        openDetail(inquiry) {
            this.selectedInquiry = inquiry;
            this.detailModalOpen = true;
        }
    }" class="space-y-6 lg:space-y-8">

    @if(session('success'))
        <div class="bg-emerald-50 text-emerald-700 p-4 rounded-xl border border-emerald-100 flex items-start gap-3">
            <i data-lucide="check-circle" class="w-5 h-5 shrink-0 mt-0.5"></i>
            <span class="font-medium text-sm">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Header Section -->
    <div class="flex flex-col gap-4">
        <div>
            <h1 class="text-2xl sm:text-3xl font-bold text-slate-900">Dashboard Pengadaan</h1>
            <p class="text-sm text-slate-600 mt-1">Kelola semua penawaran dan pesan yang masuk</p>
        </div>
        <div class="flex flex-col sm:flex-row gap-2">
            <a href="{{ route('admin.inquiries.export') }}" class="flex items-center justify-center sm:justify-start gap-2 bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2.5 rounded-lg text-sm font-semibold transition-colors shadow-sm">
                <i data-lucide="file-spreadsheet" class="w-4 h-4"></i>
                <span>Export Excel</span>
            </a>
        </div>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white p-5 sm:p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Total Penawaran</p>
                    <h3 class="text-2xl sm:text-3xl font-bold text-slate-900 mt-1">{{ $stats['total'] }}</h3>
                </div>
                <div class="p-2.5 bg-slate-100 text-slate-600 rounded-lg">
                    <i data-lucide="inbox" class="w-5 h-5"></i>
                </div>
            </div>
        </div>
        
        <div class="bg-white p-5 sm:p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Belum Diproses</p>
                    <h3 class="text-2xl sm:text-3xl font-bold text-slate-900 mt-1">{{ $stats['pending'] }}</h3>
                </div>
                <div class="p-2.5 bg-rose-100 text-rose-600 rounded-lg">
                    <i data-lucide="clock" class="w-5 h-5"></i>
                </div>
            </div>
        </div>

        <div class="bg-white p-5 sm:p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Sedang Diproses</p>
                    <h3 class="text-2xl sm:text-3xl font-bold text-slate-900 mt-1">{{ $stats['processing'] }}</h3>
                </div>
                <div class="p-2.5 bg-amber-100 text-amber-600 rounded-lg">
                    <i data-lucide="loader" class="w-5 h-5"></i>
                </div>
            </div>
        </div>

        <div class="bg-white p-5 sm:p-6 rounded-xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-start justify-between gap-3">
                <div>
                    <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Selesai</p>
                    <h3 class="text-2xl sm:text-3xl font-bold text-slate-900 mt-1">{{ $stats['completed'] }}</h3>
                </div>
                <div class="p-2.5 bg-emerald-100 text-emerald-600 rounded-lg">
                    <i data-lucide="check-circle-2" class="w-5 h-5"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden flex flex-col">
        
        <!-- Toolbar -->
        <div class="p-4 border-b border-slate-200 flex flex-col gap-3 bg-slate-50/50">
            <form method="GET" action="{{ route('admin.dashboard') }}" class="flex flex-col sm:flex-row gap-2">
                <div class="relative flex-1">
                    <i data-lucide="search" class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400"></i>
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama / perusahaan..." 
                           class="w-full pl-9 pr-4 py-2.5 text-sm border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-blue focus:border-transparent">
                </div>
                
                <select name="status" onchange="this.form.submit()" class="py-2.5 px-4 text-sm border border-slate-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-blue bg-white">
                    <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>Semua Status</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="processing" {{ request('status') == 'processing' ? 'selected' : '' }}>Diproses</option>
                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Selesai</option>
                </select>
                
                @if(request('search') || request('status'))
                    <a href="{{ route('admin.dashboard') }}" class="py-2.5 px-4 text-sm text-slate-600 hover:text-slate-800 bg-slate-200 hover:bg-slate-300 rounded-lg transition-colors text-center font-medium">
                        Reset
                    </a>
                @endif
            </form>
        </div>

        <!-- Table Wrapper -->
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-slate-50 border-b border-slate-200 text-slate-600 text-xs uppercase font-semibold">
                    <tr>
                        <th class="px-4 sm:px-6 py-3">No</th>
                        <th class="px-4 sm:px-6 py-3">Tanggal</th>
                        <th class="px-4 sm:px-6 py-3">Pemohon</th>
                        <th class="px-4 sm:px-6 py-3 hidden sm:table-cell">Perusahaan</th>
                        <th class="px-4 sm:px-6 py-3 hidden lg:table-cell">Subjek</th>
                        <th class="px-4 sm:px-6 py-3">Status</th>
                        <th class="px-4 sm:px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-slate-700">
                    @forelse($inquiries as $index => $item)
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="px-4 sm:px-6 py-3 text-sm">{{ $index + 1 }}</td>
                            <td class="px-4 sm:px-6 py-3 text-sm whitespace-nowrap">{{ $item->created_at->format('d-m-Y') }}</td>
                            <td class="px-4 sm:px-6 py-3 text-sm font-semibold text-slate-900">{{ $item->name }}</td>
                            <td class="px-4 sm:px-6 py-3 text-sm hidden sm:table-cell">{{ $item->company ?: '-' }}</td>
                            <td class="px-4 sm:px-6 py-3 text-sm hidden lg:table-cell">
                                <span class="truncate block" title="{{ $item->subject }}">{{ Str::limit($item->subject, 30) }}</span>
                            </td>
                            <td class="px-4 sm:px-6 py-3 text-sm">
                                @if($item->status == 'pending')
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-rose-100 text-rose-700 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span> Pending
                                    </span>
                                @elseif($item->status == 'processing')
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-700 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Diproses
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-700 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Selesai
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 sm:px-6 py-3 text-center">
                                <button type="button" @click="openDetail({{ json_encode($item) }})" class="text-brand-blue hover:text-brand-blue-dark font-semibold text-xs bg-brand-blue/10 hover:bg-brand-blue/20 px-2 sm:px-3 py-1.5 rounded-lg transition-colors cursor-pointer whitespace-nowrap">
                                    Lihat
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 sm:px-6 py-12 text-center text-slate-500 text-sm">
                                Tidak ada data penawaran yang ditemukan
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Detail Modal -->
    <div x-show="detailModalOpen" style="display: none;" class="fixed inset-0 z-50 flex items-end sm:items-center justify-center p-4" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!-- Backdrop -->
        <div x-show="detailModalOpen" x-transition.opacity class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm" @click="detailModalOpen = false"></div>

        <div x-show="detailModalOpen" 
             x-transition:enter="ease-out duration-300" 
             x-transition:enter-start="opacity-0 translate-y-full sm:translate-y-0 sm:scale-95" 
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" 
             x-transition:leave="ease-in duration-200" 
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
             x-transition:leave-end="opacity-0 translate-y-full sm:translate-y-0 sm:scale-95" 
             class="relative bg-white rounded-t-3xl sm:rounded-2xl shadow-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto border border-slate-200"
             @click.away="detailModalOpen = false">
             
            <!-- Header -->
            <div class="sticky top-0 bg-slate-50 px-4 sm:px-6 py-4 border-b border-slate-200 flex justify-between items-center gap-3">
                <h3 class="text-lg font-bold text-slate-800 flex items-center gap-2" id="modal-title">
                    <i data-lucide="file-text" class="w-5 h-5 text-brand-blue"></i>
                    <span class="hidden sm:inline">Detail Pengajuan</span>
                    <span class="sm:hidden">Detail</span>
                </h3>
                <button @click="detailModalOpen = false" class="p-1.5 text-slate-400 hover:text-slate-600 hover:bg-slate-200 rounded-lg transition-colors cursor-pointer shrink-0">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <template x-if="selectedInquiry">
                <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
                    
                    <!-- Info Grid -->
                    <div class="bg-slate-50 border border-slate-200 rounded-xl p-4 space-y-3">
                        <div>
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Nama Pemohon</p>
                            <p class="font-bold text-slate-900" x-text="selectedInquiry.name"></p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Perusahaan / Instansi</p>
                            <p class="font-semibold text-slate-700" x-text="selectedInquiry.company || '-'"></p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Email Kontak</p>
                            <div class="flex items-center gap-2">
                                <p class="font-semibold text-slate-700 text-sm break-all" x-text="selectedInquiry.email"></p>
                                <a :href="'mailto:' + selectedInquiry.email + '?subject=Re: ' + selectedInquiry.subject" 
                                   class="bg-brand-blue text-white p-1.5 rounded-lg hover:bg-brand-blue-dark transition-colors shrink-0" title="Balas Email">
                                    <i data-lucide="mail-reply" class="w-4 h-4"></i>
                                </a>
                            </div>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1">Tanggal Masuk</p>
                            <p class="text-sm text-slate-600" x-text="new Date(selectedInquiry.created_at).toLocaleString('id-ID')"></p>
                        </div>
                    </div>

                    <!-- Subject -->
                    <div>
                        <h4 class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Subjek Pesan</h4>
                        <p class="font-bold text-slate-900 text-base" x-text="selectedInquiry.subject"></p>
                    </div>
                    
                    <!-- Message -->
                    <div>
                        <h4 class="text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Detail Spesifikasi</h4>
                        <div class="bg-slate-50 border border-slate-200 p-4 rounded-lg text-sm text-slate-700 whitespace-pre-wrap leading-relaxed max-h-64 overflow-y-auto" x-text="selectedInquiry.message"></div>
                    </div>

                    <!-- Footer Actions -->
                    <div class="border-t border-slate-200 pt-4 space-y-3">
                        <form :action="'/admin/inquiries/' + selectedInquiry.id + '/status'" method="POST" class="flex flex-col sm:flex-row gap-2 items-stretch sm:items-center">
                            @csrf
                            @method('PATCH')
                            <label class="text-sm font-semibold text-slate-600 hidden sm:block">Ubah Status:</label>
                            <select name="status" x-model="selectedInquiry.status" class="py-2 px-3 text-sm border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-blue flex-1 sm:flex-initial">
                                <option value="pending">Pending</option>
                                <option value="processing">Diproses</option>
                                <option value="completed">Selesai</option>
                            </select>
                            <button type="submit" class="bg-brand-blue hover:bg-brand-blue-dark text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors cursor-pointer">
                                Simpan
                            </button>
                        </form>
                        
                        <button type="button" @click="detailModalOpen = false" class="w-full bg-slate-100 hover:bg-slate-200 text-slate-700 px-4 py-2 rounded-lg text-sm font-semibold transition-colors cursor-pointer">
                            Tutup
                        </button>
                    </div>
                </div>
            </template>
        </div>
    </div>

</div>
@endsection
