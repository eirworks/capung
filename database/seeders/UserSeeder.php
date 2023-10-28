<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        User::factory()->create([
            'name' => 'Developer',
            'email' => 'dev@cc.cc',
            'password' => \Hash::make('dev'),
        ]);

        User::factory()->count(10)->create();
    }
}
