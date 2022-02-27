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
        // \App\Models\User::factory(10)->create();
        
        $this->call(Productcase1Seeder::class);
        $this->call(Productcase2Seeder::class);
        $this->call(Productcase3Seeder::class);
    }
}
