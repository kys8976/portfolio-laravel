<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
//     \App\Models\Service::factory(1)->create();
//    \App\Models\Board::factory(3)->create();
//     \App\Models\Skill::factory(1)->create();
//     \App\Models\Post::factory(1)->create();
//      \App\Models\Education::factory(1)->create();
//    \App\Models\Experience::factory(1)->create();
// \App\Models\Project::factory(1)->create();
//  \App\Models\Testimonial::factory(1)->create();
    \App\Models\Message::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
