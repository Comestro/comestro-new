<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@comestro.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Create editor user
        User::create([
            'name' => 'Editor User',
            'email' => 'editor@comestro.com',
            'password' => Hash::make('password'),
            'role' => 'editor',
        ]);

        // Run the ProjectSeeder
        $this->call([
            ProjectSeeder::class,
        ]);
    }
}
