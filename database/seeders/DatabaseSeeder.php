<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'asibul hasan',
            'email' => 'asibulhasan.rucse.18@gmail.com',
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'Sami Sadik',
            'email' => 'info.folojo@gmail.com',
            'role' => 'admin',
        ]);

        $this->call([
            ProductSeeder::class,
        ]);
    }
}