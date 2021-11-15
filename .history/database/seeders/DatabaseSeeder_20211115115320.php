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
        \App\Models\Eleve::factory(50)->create();
        \App\Models\Classe::factory(20)->create();
        // \App\Models\User::factory(10)->create();
    }
}