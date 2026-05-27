<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <-- Pastikan baris ini ada

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Paksa aplikasi menggunakan HTTPS jika berjalan di server cloud (Railway)
        if (config('app.env') === 'production' || env('ASSET_URL')) {
            URL::forceScheme('https');
        }
    }
}
