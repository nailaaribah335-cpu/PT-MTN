@extends('layouts.admin')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center px-4 py-8 bg-linear-to-br from-slate-50 to-slate-100">
    <div class="w-full max-w-md">
        <!-- Logo/Header -->
        <div class="text-center mb-8">
            <a href="/" class="inline-flex items-center gap-2 mb-6 group">
                <div class="w-10 h-10 rounded-full bg-brand-blue flex items-center justify-center shadow-lg">
                    <i data-lucide="log-in" class="w-5 h-5 text-white"></i>
                </div>
                <span class="font-bold text-xl text-slate-900">Admin</span>
            </a>
            <h1 class="text-3xl font-bold text-slate-900 mb-2">Masuk Sistem</h1>
            <p class="text-sm text-slate-600">Kelola penawaran dan pesan dengan mudah</p>
        </div>

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="bg-rose-50 text-rose-700 border border-rose-200 rounded-xl p-4 mb-6 flex items-start gap-3">
                <i data-lucide="alert-circle" class="w-5 h-5 shrink-0 mt-0.5"></i>
                <div>
                    <p class="font-semibold text-sm mb-1">Terjadi kesalahan</p>
                    <ul class="text-sm space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        <!-- Login Form Card -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 p-6 sm:p-8">
            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf
                
                <!-- Email Input -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-semibold text-slate-700">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                           class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-all placeholder:text-slate-400"
                           placeholder="admin@mtn.com">
                </div>

                <!-- Password Input -->
                <div class="space-y-2">
                    <label for="password" class="block text-sm font-semibold text-slate-700">Password</label>
                    <input type="password" id="password" name="password" required
                           class="w-full bg-slate-50 border border-slate-300 rounded-xl px-4 py-3 text-base focus:outline-none focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-all placeholder:text-slate-400"
                           placeholder="••••••••">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-brand-blue hover:bg-brand-blue-dark text-white font-bold py-3 px-4 rounded-xl transition-all duration-200 shadow-md hover:shadow-lg hover:shadow-brand-blue/30 mt-6">
                    Masuk ke Sistem
                </button>
            </form>
        </div>

        <!-- Back to Website Link -->
        <div class="text-center mt-6">
            <a href="/" class="inline-flex items-center gap-1.5 text-slate-600 hover:text-brand-blue font-medium text-sm transition-colors group">
                <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-0.5 transition-transform"></i>
                Kembali ke Halaman Website
            </a>
        </div>

        <!-- Footer Info -->
        <div class="text-center mt-8 text-xs text-slate-500">
            <p>PT. Mulia Tunggal Nusantara © {{ date('Y') }}</p>
        </div>
    </div>
</div>
@endsection
