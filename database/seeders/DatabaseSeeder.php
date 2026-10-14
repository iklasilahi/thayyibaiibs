<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user from environment configuration or default
        $adminEmail = env('ADMIN_EMAIL', 'thayyibaiibs@gmail.com');
        $adminPassword = env('ADMIN_PASSWORD', 'thayyibamaju');

        User::updateOrCreate(
            ['email' => $adminEmail],
            [
                'name' => 'Admin Thayyiba',
                'password' => Hash::make($adminPassword),
            ]
        );
    }
}
