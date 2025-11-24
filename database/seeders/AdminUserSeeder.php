<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if admin user already exists
        if (!User::where('email', 'admin@gjvn.in')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@gjvn.in',
                'password' => Hash::make('admin123'),
            ]);
            $this->command->info('Admin user created successfully!');
            $this->command->info('Email: admin@gjvn.in');
            $this->command->info('Password: admin123');
        } else {
            $this->command->info('Admin user already exists!');
        }
    }
}
