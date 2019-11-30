<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::truncate();

        Role::create(['name' => 'Administratorius']);

        Role::create(['name' => 'Vartotojas']);

        Role::create(['name' => 'Svečias']);
    }
}
