<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    public function up(): void
    {
        // Update admin user dengan password yang ter-hash dengan benar
        User::updateOrCreate(
            ['email' => 'admin@mtn.com'],
            [
                'name' => 'Admin MTN',
                'password' => Hash::make('password123'),
            ]
        );
    }

    public function down(): void
    {
        // Rollback jika diperlukan
        User::where('email', 'admin@mtn.com')->delete();
    }
};
