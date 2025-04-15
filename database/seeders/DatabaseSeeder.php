<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
            'username' => 'Nisrine Lasfer',
            'first_name' => 'Nisrine',
            'last_name' => 'Lasfer',
            'role' => 'user'
        ]);
        User::factory()->create([
            'username' => 'Zakaria Lasfer',
            'first_name' => 'Zakaria',
            'last_name' => 'Lasfer',
            'role' => 'admin'
        ]);
    }
}
