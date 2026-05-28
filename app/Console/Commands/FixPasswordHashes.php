<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class FixPasswordHashes extends Command
{
    protected $signature = 'passwords:fix';
    protected $description = 'Fix invalid or truncated password hashes in the database';

    public function handle()
    {
        $this->info('🔧 Checking for invalid password hashes...');

        $invalidCount = 0;
        $users = User::all();

        foreach ($users as $user) {
            // Check if password is a valid bcrypt hash
            if (!$this->isValidBcryptHash($user->password)) {
                $this->warn("❌ User {$user->email} has invalid hash: {$user->password}");
                $invalidCount++;
            } else {
                $this->line("✅ User {$user->email} has valid hash");
            }
        }

        if ($invalidCount === 0) {
            $this->info('✨ All passwords are valid Bcrypt hashes!');
            return 0;
        }

        $this->error("Found {$invalidCount} invalid password(s)");
        $this->info('Please update these passwords or reset them.');
        return 1;
    }

    private function isValidBcryptHash($hash): bool
    {
        // Bcrypt hashes start with $2a$, $2b$, or $2y$ and are exactly 60 characters
        if (!preg_match('/^\$2[aby]\$/', $hash)) {
            return false;
        }

        // Check if it's exactly 60 characters
        if (strlen($hash) !== 60) {
            return false;
        }

        return true;
    }
}
