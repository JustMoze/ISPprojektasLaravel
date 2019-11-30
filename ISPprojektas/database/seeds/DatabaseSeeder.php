<?php

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
      // every time it will be called
      $this->call(RolesTableSeeder::class);
      $this->call(UsersTableSeeder::class);
    }
}
