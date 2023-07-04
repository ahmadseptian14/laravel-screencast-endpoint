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
<<<<<<< HEAD
=======

>>>>>>> 7aedd114d72900b0a2f3fbb058ae4cf5e3b2f477
        $this->call([
            TagSeeder::class
        ]);
    }
}
