<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('venues')->insert([
            'name' => str_random(10),
            'address' => str_random(10),
            'city' => 'Eindhoven'
        ]);
    }
}
