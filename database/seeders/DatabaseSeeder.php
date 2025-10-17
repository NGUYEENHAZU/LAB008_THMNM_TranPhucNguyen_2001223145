<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(StudentCourseSeeder::class);

        \App\Models\Category::factory() 
            ->count(5) 
            ->hasProducts(10) 
            ->create();

        \App\Models\User::factory(5)
            ->has(\App\Models\Profile::factory())
            ->create();

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
