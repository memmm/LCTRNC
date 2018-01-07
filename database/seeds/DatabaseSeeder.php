<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RoleTableSeeder::class);
         $this->call(UserTableSeeder::class);

        for ($x = 0; $x <= 15; $x++){

        DB::table('venues')->insert([
            'name' => str_random(10),
            'address' => str_random(10),
            'city' => 'Eindhoven',
            'email' => 'foo@bar'
        ]);

        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'foo@bar',
            'password' => Hash::make(str_random(10)),
        ]);

        DB::table('artists')->insert([
            'name' => str_random(10),
            'description' => str_random(120),
            'country' => str_random(10)
        ]);

        DB::table('events')->insert([
            'name' => str_random(10),
            'description' => str_random(120),
            'startdate' => Carbon::create('2000', '01', '01'),
            'enddate' => Carbon::create('2000', '01', '01')
        ]);
      }

    }
}
