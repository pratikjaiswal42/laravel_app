<?php

namespace Database\Seeders;

use App\Models\passport;
use App\Models\Post;
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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Source_Code',
        //     'email' => 'test@example.com',
        //     'password' => 'mypasss'
        // ]);

        // $this->call(seed1::class);  

        User::factory(10)
            ->has(passport::factory()) // Each user will have one passport
            ->has(Post::factory(5)) // Each user will have 5 posts
            ->create();
    }
}
