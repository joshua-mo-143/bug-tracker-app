<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;
use App\Models\Bug;

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

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'guest@test.com',
            'password' => bcrypt('1234')
        ]);

        Project::factory(2)->create([
            'user_id' => 1
        ]);

        Bug::factory(10)->create([
            'project_id' => 1
        ]);
    }
}
