<?php

namespace Database\Seeders;
  
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');


        $this->call([
            RolesTableSeeder::class,
            UserTableSeeder::class
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
