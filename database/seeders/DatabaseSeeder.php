<?php

namespace Database\Seeders;

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
        // The number sets how many examples should be created
        \App\Models\User::factory(3)->create();
        \App\Models\Experience::factory(5)->create();
        \App\Models\Project::factory(5)->create();
        \App\Models\Education::factory(5)->create();
    }
}
