<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_visitor = Role::where('name', 'visitor')->first();
      $role_moderator  = Role::where( 'name', 'moderator')->first();

      $visitor = new User();
      $visitor->name = 'Visitor Name';
      $visitor->email = 'visitor@example.com';
      $visitor->password = bcrypt('secret');
      $visitor->save();
      $visitor->roles()->attach($role_visitor);

      $mod = new User();
      $mod->name = 'Moderator Name';
      $mod->email = 'mod@example.com';
      $mod->password = bcrypt('secret');
      $mod->save();
      $mod->roles()->attach($role_moderator);
    }
}
