<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\citie;
use App\Models\people;
use App\Models\student;
use Illuminate\Database\Seeder;
use App\Models\User2;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            Users2Seeder::class
        ]);

        //student::factory()->count(10)->create();
        //User2::factory()->count(5)->create();
        //people::factory()->count(10)->create();
        //citie::factory()->count(10)->create();
    }
}
