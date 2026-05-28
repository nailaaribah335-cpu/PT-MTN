<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetAdminPassword extends Command
{
    protected $signature = 'admin:reset';
    protected $description = 'Reset admin user password to default (for emergency use only)';

    public function handle()
    {
        $this->warn('⚠️  This will reset the admin password!');
        
        if (!$this->confirm('Are you sure you want to reset admin@mtn.com password to "password123"?')) {
            $this->info('Cancelled.');
            return 1;
        }

        try {
            $user = User::where('email', 'admin@mtn.com')->firstOrFail();
            
            // Update password directly with Hash
            $user->update([
                'password' => Hash::make('password123')
            ]);

            $this->info('✅ Admin password reset successfully!');
            $this->line('Email: admin@mtn.com');
            $this->line('Password: password123');
            
            return 0;
        } catch (\Exception $e) {
            $this->error('❌ Error: ' . $e->getMessage());
            return 1;
        }
    }
}
