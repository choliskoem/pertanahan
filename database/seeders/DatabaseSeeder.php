<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'admin phpt',
        //     'level' => '1',
        //     'username' => 'admin phpt',
        //     'password' => Hash::make('123456789'),
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'admin arsip dan warkah',
        //     'level' => '2',
        //     'username' => 'admin warkah',
        //     'password' => Hash::make('123456789'),
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'loket 1',
        //     'level' => '1',
        //     'username' => 'loket 1',
        //     'password' => Hash::make('123456789'),
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'loket 2',
        //     'level' => '1',
        //     'username' => 'loket 2',
        //     'password' => Hash::make('123456789'),
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Admin 2',
        //     'level' => '1',
        //     'username' => 'admin 2',
        //     'password' => Hash::make('123456789'),
        // ]);

         \App\Models\User::factory()->create([
            'name' => 'loket 3',
            'level' => '1',
            'username' => 'loket 3',
            'password' => Hash::make('123456789'),
        ]);

    }
}
