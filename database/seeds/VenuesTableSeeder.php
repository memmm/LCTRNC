<?php

use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('venues')->insert([
          'name' => str_random(10),
          'address' => str_random(10),
          'city' => 'Eindhoven'
      ]);
      DB::table('venues')->insert([
          'name' => str_random(10),
          'address' => str_random(10),
          'city' => 'Eindhoven',
      ]);
    }
}
