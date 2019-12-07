<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
      // User::truncate();
      DB::table('role_user')->truncate();
      // we must to get roles from db
      $adminRole = Role::where('name', 'Administratorius')->first();
      $userRole = Role::where('name', 'Vartotojas')->first();
      $guestRole = Role::where('name', 'Svečias')->first();

      $admin = User::create([
        'name' => 'Modestas',
        'email' => 'modestasrimeikis@gmail.com',
        'password' => Hash::make('asAdminas7')
      ]);
      $user = User::create([
        'name' => 'Mykolas',
        'email' => 'my@gmail.com',
        'password' => Hash::make('asMykolas')
      ]);
      $guest = User::create([
        'name' => 'Povilas',
        'email' => 'Escobar@gmail.com',
        'password' => Hash::make('asPovilas')
      ]);

      $admin->roles()->attach($adminRole);
      $user->roles()->attach($userRole);
      $guest->roles()->attach($guestRole);
    }
}
