<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_visitor = new Role();
      $role_visitor->name = 'visitor';
      $role_visitor->description = 'Visitor User';
      $role_visitor->save();
      $role_mod = new Role();
      $role_mod->name = 'moderator';
      $role_mod->description = 'Moderator User';
      $role_mod->save();
      $role_mod = new Role();
      $role_mod->name = 'admin';
      $role_mod->description = 'Admin User';
      $role_mod->save();
    }
}
