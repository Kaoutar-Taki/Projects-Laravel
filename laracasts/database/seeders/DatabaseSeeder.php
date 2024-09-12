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
        User::factory()->create([
            'first_name' => 'kaoutar',
            'last_name' => 'taki',
            'email' => 'ktaki@admin.com',
        ]);

        $this->call(JobSeeder::class);
    }
}
